<?php

namespace Qdequippe\Pappers\Api;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Endpoint\Association;
use Qdequippe\Pappers\Api\Endpoint\Cartographie;
use Qdequippe\Pappers\Api\Endpoint\ComptesAnnuels;
use Qdequippe\Pappers\Api\Endpoint\Conformite;
use Qdequippe\Pappers\Api\Endpoint\DocumentAvisSituationInsee;
use Qdequippe\Pappers\Api\Endpoint\DocumentBeneficiairesEffectifs;
use Qdequippe\Pappers\Api\Endpoint\DocumentExtraitInpi;
use Qdequippe\Pappers\Api\Endpoint\DocumentExtraitPappers;
use Qdequippe\Pappers\Api\Endpoint\DocumentScoringFinancier;
use Qdequippe\Pappers\Api\Endpoint\DocumentScoringNonFinancier;
use Qdequippe\Pappers\Api\Endpoint\DocumentStatus;
use Qdequippe\Pappers\Api\Endpoint\DocumentTelechargement;
use Qdequippe\Pappers\Api\Endpoint\Entreprise;
use Qdequippe\Pappers\Api\Endpoint\Recherche;
use Qdequippe\Pappers\Api\Endpoint\RechercheBeneficiaires;
use Qdequippe\Pappers\Api\Endpoint\RechercheDirigeants;
use Qdequippe\Pappers\Api\Endpoint\RechercheDocuments;
use Qdequippe\Pappers\Api\Endpoint\RecherchePublications;
use Qdequippe\Pappers\Api\Endpoint\Suggestions;
use Qdequippe\Pappers\Api\Endpoint\SuiviJetons;
use Qdequippe\Pappers\Api\Endpoint\SurveillanceDirigeant;
use Qdequippe\Pappers\Api\Endpoint\SurveillanceEntreprise;
use Qdequippe\Pappers\Api\Endpoint\SurveillanceListeInformations;
use Qdequippe\Pappers\Api\Endpoint\SurveillanceNotificationsDelete;
use Qdequippe\Pappers\Api\Model\ListeInformationsPostBody;
use Qdequippe\Pappers\Api\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends Runtime\Client\Client
{
    /**
     * Vous devez fournir soit le SIREN, soit le SIRET.
     *
     * Si vous indiquez le SIREN, tous les établissements associés à ce SIREN seront renvoyés dans la clé `etablissements`.
     *
     * Si vous indiquez le SIRET, seul l'établissement associé sera renvoyé dans la clé `etablissement`
     *
     * > ⚠️ **Attention : Certaines entreprises sont en diffusion partielle auprès de l'Insee**
     * >
     * > Ce statut est signalé par le champ `diffusable=false`.
     * >
     * > Les champs suivants peuvent alors devenir nullable : `nom_entreprise` ; `denomination` ; `nom` ; `prenom` ; `sexe` ; `nom_usage` ; `nom_patronymique` ; `code_postal` ; `numero_voie` ; `indice_repetition` ; `type_voie` ; `libelle_voie` ; `complement_adresse` ; `adresse_ligne_1` ; `adresse_ligne_2`.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "siret"?: string, //SIRET de l'entreprise
     *    "format_publications_bodacc"?: string, //Format attendu pour les publications BODACC. Valeur par défaut : `"objet"`.
     *    "validite_tva_intracommunautaire"?: bool, //Si vrai, le champ validite_tva_intracommunautaire du retour indiquera si le numéro de tva est valide auprès de la Commission européenne. Valeur par défaut : `false`.
     *    "publications_bodacc_brutes"?: bool, //Pappers traite les publications BODACC afin de supprimer les publications périmée. Si vrai, le retour inclura les publications bodacc sans traitement. Valeur par défaut : `false`.
     *    "beneficiaires_effectifs_complets"?: bool, //Si vrai, la requête se lancera avec un accès complet au registre des bénéficiaires effectifs. Nécessite une habilitation.
     *    "champs_supplementaires"?: string, //Liste des champs supplémentaires à inclure dans le retour. Certains champs peuvent entraîner une consommation de crédits supplémentaires.
     *
     * Champs supplémentaires disponibles :
     * - `sites_internet` : 1 crédit supplémentaire si disponible
     * - `telephone` : 3 crédits supplémentaires si disponible
     * - `email` : 3 crédits supplémentaires si disponible
     * - `lien_linkedin` : 3 crédits supplémentaires si disponible
     * - `enseigne_1` : gratuit
     * - `enseigne_2` : gratuit
     * - `enseigne_3` : gratuit
     * - `distribution_speciale` : gratuit
     * - `code_cedex` : gratuit
     * - `libelle_cedex` : gratuit
     * - `code_commune` : gratuit
     * - `code_region` : gratuit
     * - `region` : gratuit
     * - `code_departement` : gratuit
     * - `departement` : gratuit
     * - `nomenclature_code_naf` : gratuit
     * - `labels` : gratuit
     * - `labels:orias` : 0.5 crédit supplémentaire
     * - `labels:cci` : 0.5 crédit supplémentaire
     * - `micro_entreprise` : gratuit
     * - `sanctions` : 1 crédit supplémentaire
     * - `personne_politiquement_exposee` : 1 crédit supplémentaire
     * - `deces` : 0.5 crédit supplémentaire
     * - `scoring_financier` : 30 crédits supplémentaires
     * - `scoring_non_financier` : 30 crédits supplémentaires
     * - `categorie_entreprise` : gratuit
     * - `motif_cessation` : gratuit
     * - `nom_personne_physique` : gratuit
     * - `representants_legaux` : gratuit
     * - `entreprises_dirigees` : 1 crédit supplémentaire si disponible
     * - `observations` : 0.5 crédit supplémentaire
     * - `decisions` : 5 crédits supplémentaires si disponible (si l'entreprise n'a pas de décision, 0.5 crédit supplémentaire)
     * - `parcelles_detenues`: 5 crédits supplémentaires si disponible
     * - `appels_offres_gagnes`, `appels_offres_lances`: 2 crédits supplémentaires au total (même si les deux champs sont demandés), si disponible
     * - `entreprises_citees`: 3 crédits supplémentaires si disponible
     * - `marques`, `brevets`, `dessins`: 1 crédit supplémentaire au total (même si plusieurs de ces trois champs sont demandés), si disponible
     * - `informations_boursieres`: 5 crédits supplémentaires si disponible
     * - `informations_boursieres:documents`: 10 crédits supplémentaires si disponible (donc un total de 15 crédits supplémentaires car ce champ inclut également le champ `informations_boursieres`)
     * - `finances_estimations` : 5 crédits supplémentaires si disponible
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EntrepriseFiche|null : ResponseInterface)
     *
     * @throws Exception\EntrepriseBadRequestException
     * @throws Exception\EntrepriseUnauthorizedException
     * @throws Exception\EntrepriseNotFoundException
     */
    public function entreprise(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Entreprise($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit l'identifiant de l'association, soit le SIREN, soit le SIRET.
     *
     * @param array{
     *    "id_association"?: string, //Identifiant de l'association
     *    "siret"?: string, //SIRET de l'association
     *    "siren"?: string, //SIREN de l'association
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Association|null : ResponseInterface)
     *
     * @throws Exception\AssociationBadRequestException
     * @throws Exception\AssociationUnauthorizedException
     * @throws Exception\AssociationNotFoundException
     * @throws Exception\AssociationServiceUnavailableException
     */
    public function association(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Association($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différentes entreprises seront renvoyées dans un tableau `resultats`, et le nombre total de résultats sera renvoyé dans le champ `total`.
     *
     * Pour parcourir l'ensemble des résultats, deux solutions sont possibles :
     *
     * - La pagination (paramètres `page` et `par_page`), limitée aux 400 premiers résultats ;
     * - Les curseurs (paramètres `curseur` et `par_curseur`).
     *
     * @param array{
     *    "page"?: int, //Page de résultats. Valeur par défaut : `1`.
     *    "par_page"?: int, //Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *    "curseur"?: string, //Curseur servant à parcourir l'ensemble des résultats (alternativement à la pagination qui est limitée à 400 résultats maximum). Doit valoir `*` pour la première requête, et doit pour les requêtes suivantes reprendre la valeur `curseurSuivant` retournée par la dernière réponse.
     *    "par_curseur"?: int, //Nombre de résultats affichés par curseur. Valeur par défaut : `50`. Valeur minimale: `1`. Valeur maximale : `1000`.
     *    "bases"?: string, //Bases de données dans lesquelles rechercher. Il est possible d'indiquer plusieurs bases en les séparant par des virgules. Valeur par défaut : `"entreprises"`.
     *    "precision"?: string, //Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *    "q"?: string, //Texte à rechercher. Dénomination pour une personne morale, nom et prénom pour une personne physique.
     * Si vous recherchez dans plusieurs bases, ce paramètre sera utilisé pour rechercher dans toutes les bases.
     *    "siege"?: string, //Défini si la requête se base sur le siège
     *    "code_naf"?: string, //Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *    "departement"?: string, //Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *    "region"?: string, //Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *    "code_postal"?: string, //Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *    "convention_collective"?: string, //Convention collective de l'entreprise.
     *    "categorie_juridique"?: string, //Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     *
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *    "entreprise_cessee"?: bool, //Activité de l'entreprise cessée ou non.
     *    "statut_rcs"?: string, //Statut au RCS
     *    "objet_social"?: string, //Objet social de l'entreprise déclaré au RCS.
     *    "date_immatriculation_rcs_min"?: string, //Date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_immatriculation_rcs_max"?: string, //d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_min"?: string, //Date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_max"?: string, //Date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "capital_min"?: string, //Capital minimum de l'entreprise.
     *    "capital_max"?: string, //Capital maximum de l'entreprise.
     *    "chiffre_affaires_min"?: string, //Chiffre d'affaires minimum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "chiffre_affaires_max"?: string, //Chiffre d'affaires maximum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_min"?: string, //Résultat minimum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_max"?: string, //Résultat maximum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "date_creation_min"?: string, //Date de création minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_creation_max"?: string, //Date de création maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "tranche_effectif_min"?: string, //Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     *
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "tranche_effectif_max"?: string, //Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     *
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "type_dirigeant"?: string, //Type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "qualite_dirigeant"?: string, //Qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nationalite_dirigeant"?: string, //Nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nom_dirigeant"?: string, //Nom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "prenom_dirigeant"?: string, //Prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_min"?: int, //Âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_max"?: int, //Âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_dirigeant_min"?: string, //Date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_dirigeant_max"?: string, //Date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "age_beneficiaire_min"?: int, //Âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "age_beneficiaire_max"?: int, //Âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_beneficiaire_min"?: string, //Date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_beneficiaire_max"?: string, //Date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "nationalite_beneficiaire"?: string, //Nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_depot_document_min"?: string, //Date de dépôt minimale du document, au format JJ-MM-AAAA.
     *    "date_depot_document_max"?: string, //Date de dépôt maximale du document, au format JJ-MM-AAAA.
     *    "type_publication"?: string, //Type de publication
     *    "date_publication_min"?: string, //Date publication minimale de la publication, au format JJ-MM-AAAA.
     *    "date_publication_max"?: string, //Date de publication maximale de la publication, au format JJ-MM-AAAA.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RechercheGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\RechercheUnauthorizedException
     * @throws Exception\RechercheNotFoundException
     * @throws Exception\RechercheServiceUnavailableException
     */
    public function recherche(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Recherche($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents dirigeants seront renvoyées dans un tableau `resultats`.
     *
     * @param array{
     *    "par_page"?: int, //Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *    "page"?: int, //Page de résultats. Valeur par défaut : `1`.
     *    "precision"?: string, //Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *    "q"?: string, //Texte à rechercher. Nom et prénom du dirigeant pour une personne physique, dénomination pour une personne morale.
     *    "type_dirigeant"?: string, //Type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "qualite_dirigeant"?: string, //Qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nationalite_dirigeant"?: string, //Nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nom_dirigeant"?: string, //Nom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "prenom_dirigeant"?: string, //Prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_min"?: int, //Âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_max"?: int, //Âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_dirigeant_min"?: string, //Date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_dirigeant_max"?: string, //Date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "code_naf"?: string, //Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *    "departement"?: string, //Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *    "region"?: string, //Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *    "code_postal"?: string, //Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *    "convention_collective"?: string, //Convention collective de l'entreprise.
     *    "categorie_juridique"?: string, //Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *    "entreprise_cessee"?: bool, //Activité de l'entreprise cessée ou non.
     *    "statut_rcs"?: string, //Statut au RCS
     *    "objet_social"?: string, //Objet social de l'entreprise déclaré au RCS.
     *    "date_immatriculation_rcs_min"?: string, //Date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_immatriculation_rcs_max"?: string, //d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_min"?: string, //Date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_max"?: string, //Date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "capital_min"?: string, //Capital minimum de l'entreprise.
     *    "capital_max"?: string, //Capital maximum de l'entreprise.
     *    "chiffre_affaires_min"?: string, //Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "chiffre_affaires_max"?: string, //Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_min"?: string, //Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_max"?: string, //Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "date_creation_min"?: string, //Date de création minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_creation_max"?: string, //Date de création maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "tranche_effectif_min"?: string, //Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "tranche_effectif_max"?: string, //Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "age_beneficiaire_min"?: int, //Âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "age_beneficiaire_max"?: int, //Âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_beneficiaire_min"?: string, //Date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_beneficiaire_max"?: string, //Date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "nationalite_beneficiaire"?: string, //Nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_depot_document_min"?: string, //Date de dépôt minimale du document, au format JJ-MM-AAAA.
     *    "date_depot_document_max"?: string, //Date de dépôt maximale du document, au format JJ-MM-AAAA.
     *    "type_publication"?: string, //Type de publication
     *    "date_publication_min"?: string, //Date publication minimale de la publication, au format JJ-MM-AAAA.
     *    "date_publication_max"?: string, //Date de publication maximale de la publication, au format JJ-MM-AAAA.
     *    "siren"?: string, //SIREN de l'entreprise.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RechercheDirigeantsGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\RechercheDirigeantsUnauthorizedException
     * @throws Exception\RechercheDirigeantsNotFoundException
     * @throws Exception\RechercheDirigeantsServiceUnavailableException
     */
    public function rechercheDirigeants(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RechercheDirigeants($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents bénéficiaires effectifs seront renvoyées dans un tableau `resultats`.
     *
     * @param array{
     *    "par_page"?: int, //Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *    "page"?: int, //Page de résultats. Valeur par défaut : `1`.
     *    "precision"?: string, //Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *    "q"?: string, //Nom et/ou prénom du bénéficiaire effectif.
     *    "age_beneficiaire_min"?: int, //Âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "age_beneficiaire_max"?: int, //Âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_beneficiaire_min"?: string, //Date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_beneficiaire_max"?: string, //Date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "nationalite_beneficiaire"?: string, //Nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "code_naf"?: string, //Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *    "departement"?: string, //Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *    "region"?: string, //Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *    "code_postal"?: string, //Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *    "convention_collective"?: string, //Convention collective de l'entreprise.
     *    "categorie_juridique"?: string, //Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *    "entreprise_cessee"?: bool, //Activité de l'entreprise cessée ou non.
     *    "statut_rcs"?: string, //Statut au RCS
     *    "objet_social"?: string, //Objet social de l'entreprise déclaré au RCS.
     *    "date_immatriculation_rcs_min"?: string, //Date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_immatriculation_rcs_max"?: string, //d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_min"?: string, //Date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_max"?: string, //Date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "capital_min"?: string, //Capital minimum de l'entreprise.
     *    "capital_max"?: string, //Capital maximum de l'entreprise.
     *    "chiffre_affaires_min"?: string, //Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "chiffre_affaires_max"?: string, //Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_min"?: string, //Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_max"?: string, //Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "date_creation_min"?: string, //Date de création minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_creation_max"?: string, //Date de création maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "tranche_effectif_min"?: string, //Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "tranche_effectif_max"?: string, //Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "type_dirigeant"?: string, //Type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "qualite_dirigeant"?: string, //Qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nationalite_dirigeant"?: string, //Nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nom_dirigeant"?: string, //Nom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "prenom_dirigeant"?: string, //Prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_min"?: int, //Âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_max"?: int, //Âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_dirigeant_min"?: string, //Date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_dirigeant_max"?: string, //Date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "date_depot_document_min"?: string, //Date de dépôt minimale du document, au format JJ-MM-AAAA.
     *    "date_depot_document_max"?: string, //Date de dépôt maximale du document, au format JJ-MM-AAAA.
     *    "type_publication"?: string, //Type de publication
     *    "date_publication_min"?: string, //Date publication minimale de la publication, au format JJ-MM-AAAA.
     *    "date_publication_max"?: string, //Date de publication maximale de la publication, au format JJ-MM-AAAA.
     *    "siren"?: string, //SIREN de l'entreprise.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RechercheBeneficiairesGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\RechercheBeneficiairesUnauthorizedException
     * @throws Exception\RechercheBeneficiairesNotFoundException
     * @throws Exception\RechercheBeneficiairesServiceUnavailableException
     */
    public function rechercheBeneficiaires(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RechercheBeneficiaires($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents documents seront renvoyées dans un tableau `resultats`.
     *
     * @param array{
     *    "par_page"?: int, //Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *    "page"?: int, //Page de résultats. Valeur par défaut : `1`.
     *    "precision"?: string, //Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *    "q"?: string, //Mot-clé à rechercher dans le contenu du document.
     *    "date_depot_document_min"?: string, //Date de dépôt minimale du document, au format JJ-MM-AAAA.
     *    "date_depot_document_max"?: string, //Date de dépôt maximale du document, au format JJ-MM-AAAA.
     *    "code_naf"?: string, //Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *    "departement"?: string, //Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *    "region"?: string, //Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *    "code_postal"?: string, //Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *    "convention_collective"?: string, //Convention collective de l'entreprise.
     *    "categorie_juridique"?: string, //Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *    "entreprise_cessee"?: bool, //Activité de l'entreprise cessée ou non.
     *    "statut_rcs"?: string, //Statut au RCS
     *    "objet_social"?: string, //Objet social de l'entreprise déclaré au RCS.
     *    "date_immatriculation_rcs_min"?: string, //Date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_immatriculation_rcs_max"?: string, //d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_min"?: string, //Date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_max"?: string, //Date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "capital_min"?: string, //Capital minimum de l'entreprise.
     *    "capital_max"?: string, //Capital maximum de l'entreprise.
     *    "chiffre_affaires_min"?: string, //Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "chiffre_affaires_max"?: string, //Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_min"?: string, //Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_max"?: string, //Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "date_creation_min"?: string, //Date de création minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_creation_max"?: string, //Date de création maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "tranche_effectif_min"?: string, //Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "tranche_effectif_max"?: string, //Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "type_dirigeant"?: string, //Type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "qualite_dirigeant"?: string, //Qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nationalite_dirigeant"?: string, //Nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nom_dirigeant"?: string, //Nom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "prenom_dirigeant"?: string, //Prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_min"?: int, //Âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_max"?: int, //Âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_dirigeant_min"?: string, //Date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_dirigeant_max"?: string, //Date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "age_beneficiaire_min"?: int, //Âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "age_beneficiaire_max"?: int, //Âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_beneficiaire_min"?: string, //Date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_beneficiaire_max"?: string, //Date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "nationalite_beneficiaire"?: string, //Nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "type_publication"?: string, //Type de publication
     *    "date_publication_min"?: string, //Date publication minimale de la publication, au format JJ-MM-AAAA.
     *    "date_publication_max"?: string, //Date de publication maximale de la publication, au format JJ-MM-AAAA.
     *    "siren"?: string, //SIREN de l'entreprise.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RechercheDocumentsGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\RechercheDocumentsUnauthorizedException
     * @throws Exception\RechercheDocumentsNotFoundException
     * @throws Exception\RechercheDocumentsServiceUnavailableException
     */
    public function rechercheDocuments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RechercheDocuments($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différentes publications seront renvoyées dans un tableau `resultats`.
     *
     * @param array{
     *    "par_page"?: int, //Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *    "page"?: int, //Page de résultats. Valeur par défaut : `1`.
     *    "precision"?: string, //Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *    "q"?: string, //Mot-clé à rechercher dans le contenu de la publication.
     *    "code_naf"?: string, //Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *    "departement"?: string, //Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *    "region"?: string, //Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *    "code_postal"?: string, //Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *    "convention_collective"?: string, //Convention collective de l'entreprise.
     *    "categorie_juridique"?: string, //Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *    "entreprise_cessee"?: bool, //Activité de l'entreprise cessée ou non.
     *    "statut_rcs"?: string, //Statut au RCS
     *    "objet_social"?: string, //Objet social de l'entreprise déclaré au RCS.
     *    "date_immatriculation_rcs_min"?: string, //Date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_immatriculation_rcs_max"?: string, //d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_min"?: string, //Date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_radiation_rcs_max"?: string, //Date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "capital_min"?: string, //Capital minimum de l'entreprise.
     *    "capital_max"?: string, //Capital maximum de l'entreprise.
     *    "chiffre_affaires_min"?: string, //Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "chiffre_affaires_max"?: string, //Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_min"?: string, //Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "resultat_max"?: string, //Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *    "date_creation_min"?: string, //Date de création minimale de l'entreprise, au format JJ-MM-AAAA.
     *    "date_creation_max"?: string, //Date de création maximale de l'entreprise, au format JJ-MM-AAAA.
     *    "tranche_effectif_min"?: string, //Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "tranche_effectif_max"?: string, //Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *    "type_dirigeant"?: string, //Type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "qualite_dirigeant"?: string, //Qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nationalite_dirigeant"?: string, //Nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "nom_dirigeant"?: string, //Nom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "prenom_dirigeant"?: string, //Prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_min"?: int, //Âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "age_dirigeant_max"?: int, //Âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_dirigeant_min"?: string, //Date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_dirigeant_max"?: string, //Date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "age_beneficiaire_min"?: int, //Âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "age_beneficiaire_max"?: int, //Âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_de_naissance_beneficiaire_min"?: string, //Date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA.
     *    "date_de_naissance_beneficiaire_max"?: string, //Date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA.
     *    "nationalite_beneficiaire"?: string, //Nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises).
     *    "date_depot_document_min"?: string, //Date de dépôt minimale du document, au format JJ-MM-AAAA.
     *    "date_depot_document_max"?: string, //Date de dépôt maximale du document, au format JJ-MM-AAAA.
     *    "type_publication"?: string, //Type de publication
     *    "date_publication_min"?: string, //Date publication minimale de la publication, au format JJ-MM-AAAA.
     *    "date_publication_max"?: string, //Date de publication maximale de la publication, au format JJ-MM-AAAA.
     *    "siren"?: string, //SIREN de l'entreprise.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RecherchePublicationsGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\RecherchePublicationsUnauthorizedException
     * @throws Exception\RecherchePublicationsNotFoundException
     * @throws Exception\RecherchePublicationsServiceUnavailableException
     */
    public function recherchePublications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RecherchePublications($queryParameters), $fetch);
    }

    /**
     * Cette route est également accessible via le point d'accès suivant : `https://suggestions.pappers.fr/v2?q=googl`.
     *
     * D'autre part, afin de permettre une intégration en front-end la plus directe, cette route est également accessible sans clé API, avec des limitations quotidiennes du nombre d'appels.
     *
     * @param array{
     *    "q": string, //Début de recherche textuelle
     *    "longueur"?: int, //Nombre de résultats. Maximum 100. Valeur par défaut : `10`.
     *    "cibles"?: string, //Cibles de la recherche, séparées par des virgules. Valeur par défaut : `"nom_entreprise"`.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SuggestionsGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\SuggestionsBadRequestException
     */
    public function suggestions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Suggestions($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le SIREN de l'entreprise pour laquelle vous souhaitez obtenir les comptes annuels.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "annee"?: string, //Année de cloture des comptes souhaités. Il est possible d'indiquer plusieurs années en les séparant par des virgules. Si le paramètre n'est pas fourni, toutes les années disponibles seront retournées.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\ComptesAnnuelsBadRequestException
     * @throws Exception\ComptesAnnuelsUnauthorizedException
     * @throws Exception\ComptesAnnuelsNotFoundException
     * @throws Exception\ComptesAnnuelsServiceUnavailableException
     */
    public function comptesAnnuels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ComptesAnnuels($queryParameters), $fetch);
    }

    /**
     * Cette route fournit les données nécessaires à l'établissement de la cartographie Pappers d'une entreprise telle qu'elle apparaît sur les fiches Pappers (exemple https://www.pappers.fr/entreprise/google-france-443061841#cartographie).
     *
     * - La requête est gratuite (erreur 404) si seul le noeud principal (l'entreprise recherchée) est disponible.
     * - La requête coûte 1 crédit si, en plus du noeud principal, des noeuds dirigeants directs de l'entreprise sont disponibles. Il est possible de rejeter ces cas avec le paramètre `rejeter_premier_degre`. La requête est alors gratuite (erreur 404).
     * - La requête coûte 3 crédits si des noeuds supplémentaires sont disponibles.
     *
     * @param array{
     *    "siren": string, //SIREN de l'entreprise
     *    "inclure_entreprises_dirigees"?: bool, //Si vrai, la cartographie intègrera les entreprises dirigées par l'entreprise recherchée et les entreprises qui dirigent l'entreprise recherchée. Valeur par défaut : `true`.
     *    "inclure_entreprises_citees"?: bool, //Si vrai, la cartographie intègrera les entreprises citées conjointement avec l'entreprise recherchée dans des actes et statuts. Valeur par défaut : `false`.
     *    "inclure_sci"?: bool, //Si vrai, la cartographie intègrera les SCI. Valeur par défaut : `true`.
     *    "autoriser_modifications"?: bool, //Si vrai, la cartographie pourra adapter automatiquement ses paramètres si ceux choisis manuellement ne sont pas idéaux. Valeur par défaut : `false`.
     *    "rejeter_premier_degre"?: bool, //Si vrai et que la cartographie ne fait apparaître que l'entreprise recherchée ainsi que ses dirigeants directs, une erreur 404 sera renvoyée et la requête ne sera pas comptabilisée dans le quota de crédits. Valeur par défaut : `false`.
     *    "degre"?: int, //Permet de choisir manuellement un degré pour la cartographie. Seuls deux états sont possibles : un nombre <= 2 ou bien un nombre > 2. Cela veut dire que 0, 1 ou 2 donneront la même cartographie, tout comme 3, 4 ou 5.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Cartographie|null : ResponseInterface)
     *
     * @throws Exception\CartographieBadRequestException
     * @throws Exception\CartographieUnauthorizedException
     * @throws Exception\CartographieNotFoundException
     */
    public function cartographie(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Cartographie($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le token du document. Le document vous sera envoyé au format PDF ou XLSX.
     *
     * @param array{
     *    "token": string, //Token du document
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentTelechargementBadRequestException
     * @throws Exception\DocumentTelechargementUnauthorizedException
     * @throws Exception\DocumentTelechargementNotFoundException
     * @throws Exception\DocumentTelechargementServiceUnavailableException
     */
    public function documentTelechargement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentTelechargement($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "siret"?: string, //SIRET de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentExtraitPappersBadRequestException
     * @throws Exception\DocumentExtraitPappersUnauthorizedException
     * @throws Exception\DocumentExtraitPappersNotFoundException
     * @throws Exception\DocumentExtraitPappersServiceUnavailableException
     */
    public function documentExtraitPappers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentExtraitPappers($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "siret"?: string, //SIRET de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentExtraitInpiBadRequestException
     * @throws Exception\DocumentExtraitInpiUnauthorizedException
     * @throws Exception\DocumentExtraitInpiNotFoundException
     * @throws Exception\DocumentExtraitInpiServiceUnavailableException
     */
    public function documentExtraitInpi(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentExtraitInpi($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "siret"?: string, //SIRET de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentAvisSituationInseeBadRequestException
     * @throws Exception\DocumentAvisSituationInseeUnauthorizedException
     * @throws Exception\DocumentAvisSituationInseeNotFoundException
     * @throws Exception\DocumentAvisSituationInseeServiceUnavailableException
     */
    public function documentAvisSituationInsee(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentAvisSituationInsee($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "siret"?: string, //SIRET de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentStatusBadRequestException
     * @throws Exception\DocumentStatusUnauthorizedException
     * @throws Exception\DocumentStatusNotFoundException
     * @throws Exception\DocumentStatusServiceUnavailableException
     */
    public function documentStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentStatus($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le SIREN. Le document vous sera envoyé au format PDF.
     *
     * Seules les autorités de contrôle (<a rel='noreferrer noopener' target='_blank' href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000041578272/'>article R. 561-57 du Code monétaire et financier en dénombre 18</a>) et les personnes assujetties à la lutte contre le blanchiment des capitaux et le financement du terrorisme (<a rel='noreferrer noopener' target='_blank' href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000042648575/'>article L. 561-2 du code monétaire et financier</a>) peuvent accéder à ces informations.
     *
     * Pour pouvoir utiliser cette route veuillez nous contacter au préalable à api@pappers.fr
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentBeneficiairesEffectifsBadRequestException
     * @throws Exception\DocumentBeneficiairesEffectifsUnauthorizedException
     * @throws Exception\DocumentBeneficiairesEffectifsForbiddenException
     * @throws Exception\DocumentBeneficiairesEffectifsNotFoundException
     * @throws Exception\DocumentBeneficiairesEffectifsServiceUnavailableException
     */
    public function documentBeneficiairesEffectifs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentBeneficiairesEffectifs($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le SIREN. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentScoringFinancierBadRequestException
     * @throws Exception\DocumentScoringFinancierUnauthorizedException
     * @throws Exception\DocumentScoringFinancierNotFoundException
     * @throws Exception\DocumentScoringFinancierServiceUnavailableException
     */
    public function documentScoringFinancier(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentScoringFinancier($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le SIREN. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\DocumentScoringNonFinancierBadRequestException
     * @throws Exception\DocumentScoringNonFinancierUnauthorizedException
     * @throws Exception\DocumentScoringNonFinancierNotFoundException
     * @throws Exception\DocumentScoringNonFinancierServiceUnavailableException
     */
    public function documentScoringNonFinancier(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentScoringNonFinancier($queryParameters), $fetch);
    }

    /**
     * Cette route vérifie le statut de personne politiquement exposée et la présence de sanctions internationales pour une personne physique.
     *
     * Pour vérifier le statut de dirigeants et bénéficiaires effectifs d'entreprises, vous pouvez directement utiliser la route `/entreprise` avec les champs supplémentaires `personne_politiquement_exposee` et `sanctions`.
     *
     * @param array{
     *    "nom": string, //Nom de la personne physique
     *    "prenom": string, //Prénom de la personne physique
     *    "date_de_naissance": string, //Date de naissance de la personne physique, au format AAAA-MM-JJ ou AAAA-MM
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ConformitePersonnePhysiqueGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\ConformiteBadRequestException
     * @throws Exception\ConformiteUnauthorizedException
     * @throws Exception\ConformiteServiceUnavailableException
     */
    public function conformite(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Conformite($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SuiviJetonsGetResponse200|null : ResponseInterface)
     *
     * @throws Exception\SuiviJetonsUnauthorizedException
     * @throws Exception\SuiviJetonsServiceUnavailableException
     */
    public function suiviJetons(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuiviJetons(), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param Model\ListePostBodyItem[]|null $requestBody
     * @param array{
     *    "id_liste": string, //Identifiant unique de votre liste de surveillance d'entreprises
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ListePostResponse200|Model\ListePostResponse201|null : ResponseInterface)
     *
     * @throws Exception\SurveillanceEntrepriseBadRequestException
     * @throws Exception\SurveillanceEntrepriseUnauthorizedException
     * @throws Exception\SurveillanceEntrepriseForbiddenException
     * @throws Exception\SurveillanceEntrepriseNotFoundException
     * @throws Exception\SurveillanceEntrepriseServiceUnavailableException
     */
    public function surveillanceEntreprise(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceEntreprise($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array{
     *    "id_liste": string, //Identifiant unique de votre liste de surveillance
     *    "siren"?: string, //Liste des sirens des notifications à supprimer, séparés par une virgule
     *    "id"?: string, //Liste des ids des notifications à supprimer, séparés par une virgule
     *    "supprimer_totalite"?: bool, //Suppression de toutes les notifications de la liste
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ListeDeleteResponse200|null : ResponseInterface)
     *
     * @throws Exception\SurveillanceNotificationsDeleteBadRequestException
     * @throws Exception\SurveillanceNotificationsDeleteUnauthorizedException
     * @throws Exception\SurveillanceNotificationsDeleteNotFoundException
     * @throws Exception\SurveillanceNotificationsDeleteServiceUnavailableException
     */
    public function surveillanceNotificationsDelete(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceNotificationsDelete($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste. Les informations à renseigner sont différentes selon le type de personne à ajouter (morale ou physique).
     *
     * @param Model\ListePostBodyItem[]|null $requestBody
     * @param array{
     *    "id_liste": string, //Identifiant unique de votre liste de surveillance de dirigeants
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ListePostResponse200|Model\ListePostResponse201|null : ResponseInterface)
     *
     * @throws Exception\SurveillanceDirigeantBadRequestException
     * @throws Exception\SurveillanceDirigeantUnauthorizedException
     * @throws Exception\SurveillanceDirigeantForbiddenException
     * @throws Exception\SurveillanceDirigeantNotFoundException
     * @throws Exception\SurveillanceDirigeantServiceUnavailableException
     */
    public function surveillanceDirigeant(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceDirigeant($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array{
     *    "id_liste": string, //Identifiant unique de votre liste de surveillance d'entreprises
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : ResponseInterface)
     *
     * @throws Exception\SurveillanceListeInformationsBadRequestException
     * @throws Exception\SurveillanceListeInformationsUnauthorizedException
     * @throws Exception\SurveillanceListeInformationsNotFoundException
     * @throws Exception\SurveillanceListeInformationsServiceUnavailableException
     */
    public function surveillanceListeInformations(?ListeInformationsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceListeInformations($requestBody, $queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.pappers.fr/v2');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new ArrayDenormalizer(), new JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new Serializer($normalizers, [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
