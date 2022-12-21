<?php

namespace Qdequippe\Pappers\Api;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Endpoint\ComptesAnnuels;
use Qdequippe\Pappers\Api\Endpoint\DocumentAvisSituationInsee;
use Qdequippe\Pappers\Api\Endpoint\DocumentBeneficiairesEffectifs;
use Qdequippe\Pappers\Api\Endpoint\DocumentExtraitInpi;
use Qdequippe\Pappers\Api\Endpoint\DocumentExtraitPappers;
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
use Qdequippe\Pappers\Api\Exception\AssociationBadRequestException;
use Qdequippe\Pappers\Api\Exception\AssociationNotFoundException;
use Qdequippe\Pappers\Api\Exception\AssociationServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\AssociationUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsBadRequestException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsNotFoundException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsForbiddenException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\EntrepriseBadRequestException;
use Qdequippe\Pappers\Api\Exception\EntrepriseNotFoundException;
use Qdequippe\Pappers\Api\Exception\EntrepriseUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\RechercheBeneficiairesNotFoundException;
use Qdequippe\Pappers\Api\Exception\RechercheBeneficiairesServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RechercheBeneficiairesUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\RechercheDirigeantsNotFoundException;
use Qdequippe\Pappers\Api\Exception\RechercheDirigeantsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RechercheDirigeantsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\RechercheDocumentsNotFoundException;
use Qdequippe\Pappers\Api\Exception\RechercheDocumentsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RechercheDocumentsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\RechercheNotFoundException;
use Qdequippe\Pappers\Api\Exception\RecherchePublicationsNotFoundException;
use Qdequippe\Pappers\Api\Exception\RecherchePublicationsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RecherchePublicationsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\RechercheServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RechercheUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\SuggestionsBadRequestException;
use Qdequippe\Pappers\Api\Exception\SuiviJetonsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SuiviJetonsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantForbiddenException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseForbiddenException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsUnauthorizedException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteUnauthorizedException;
use Qdequippe\Pappers\Api\Model\Association;
use Qdequippe\Pappers\Api\Model\EntrepriseFiche;
use Qdequippe\Pappers\Api\Model\ListeDeleteResponse200;
use Qdequippe\Pappers\Api\Model\ListeInformationsPostBody;
use Qdequippe\Pappers\Api\Model\ListePostBodyItem;
use Qdequippe\Pappers\Api\Model\ListePostResponse200;
use Qdequippe\Pappers\Api\Model\ListePostResponse201;
use Qdequippe\Pappers\Api\Model\RechercheBeneficiairesGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheDirigeantsGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200;
use Qdequippe\Pappers\Api\Model\RecherchePublicationsGetResponse200;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200;
use Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200;
use Qdequippe\Pappers\Api\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends \Qdequippe\Pappers\Api\Runtime\Client\Client
{
    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Si vous indiquez le SIREN, tous les établissements associés à ce SIREN seront renvoyés dans la clé `etablissements`. Si vous indiquez le SIRET, seul l'établissement associé sera renvoyé dans la clé `etablissement`.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $siret SIRET de l'entreprise
     *     @var string $format_publications_bodacc Format attendu pour les publications BODACC. Valeur par défaut : `"objet"`.
     *     @var bool $marques Si vrai, le retour inclura les marques éventuelles de l'entreprise. Valeur par défaut : `false`.
     *     @var bool $validite_tva_intracommunautaire Si vrai, le champ validite_tva_intracommunautaire du retour indiquera si le numéro de tva est valide auprès de la Commission européenne. Valeur par défaut : `false`.
     *     @var bool $publications_bodacc_brutes Pappers traite les publications BODACC afin de supprimer les publications périmée. Si vrai, le retour inclura les publications bodacc sans traitement. Valeur par défaut : `false`.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return EntrepriseFiche|ResponseInterface|null
     *
     * @throws EntrepriseBadRequestException
     * @throws EntrepriseUnauthorizedException
     * @throws EntrepriseNotFoundException
     */
    public function entreprise(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Entreprise($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit l'identifiant de l'association, soit le SIREN, soit le SIRET.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_association Identifiant de l'association
     *     @var string $siret SIRET de l'association
     *     @var string $siren SIREN de l'association
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Association|ResponseInterface|null
     *
     * @throws AssociationBadRequestException
     * @throws AssociationUnauthorizedException
     * @throws AssociationNotFoundException
     * @throws AssociationServiceUnavailableException
     */
    public function association(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\Association($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différentes entreprises seront renvoyées dans un tableau `resultats`, et le nombre total de résultats sera renvoyé dans le champ `total`.
     *
     * Pour parcourir l'ensemble des résultats, deux solutions sont possibles :
     *
     * - La pagination (paramètres `page` et `par_page`), limitée aux 400 premiers résultats ;
     * - Les curseurs (paramètres `curseur` et `par_curseur`).
     *
     * Cette route permet également le téléchargement d'un export des résultats de recherche au format xlsx, csv ou json. Il faut pour cela utiliser le paramètre `export`.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var int $page Page de résultats. Valeur par défaut : `1`.
     *     @var int $par_page Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *     @var string $curseur Curseur servant à parcourir l'ensemble des résultats (alternativement à la pagination qui est limitée à 400 résultats maximum). Doit valoir `*` pour la première requête, et doit pour les requêtes suivantes reprendre la valeur `curseurSuivant` retournée par la dernière réponse.
     *     @var int $par_curseur Nombre de résultats affichés par curseur. Valeur par défaut : `50`. Valeur minimale: `1`. Valeur maximale : `1000`.
     *     @var string $bases Bases de données dans lesquelles rechercher. Il est possible d'indiquer plusieurs bases en les séparant par des virgules. Valeur par défaut : `"entreprises"`.
     *     @var string $precision Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *     @var string $export si ce champ est renseigné, la requête renverra directement un export de l'ensemble des résultats de la recherche
     *     @var string $q Texte à rechercher. Dénomination pour une personne morale, nom et prénom pour une personne physique.
     * Si vous recherchez dans plusieurs bases, ce paramètre sera utilisé pour rechercher dans toutes les bases.
     *     @var string $siege Défini si la requête se base sur le siège
     *     @var string $code_naf Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *     @var string $departement Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *     @var string $region Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *     @var string $code_postal Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *     @var string $convention_collective convention collective de l'entreprise
     *     @var string $categorie_juridique Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     *
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *     @var bool $entreprise_cessee activité de l'entreprise cessée ou non
     *     @var string $statut_rcs Statut au RCS
     *     @var string $objet_social objet social de l'entreprise déclaré au RCS
     *     @var string $date_immatriculation_rcs_min date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_immatriculation_rcs_max d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_min date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_max date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $capital_min capital minimum de l'entreprise
     *     @var string $capital_max capital maximum de l'entreprise
     *     @var string $chiffre_affaires_min Chiffre d'affaires minimum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $chiffre_affaires_max Chiffre d'affaires maximum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_min Résultat minimum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_max Résultat maximum de l'entreprise.
     *
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $date_creation_min date de création minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_creation_max date de création maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $tranche_effectif_min Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     *
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $tranche_effectif_max Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     *
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $type_dirigeant type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $qualite_dirigeant qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $nationalite_dirigeant nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $prenom_dirigeant prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_min âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_max âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_dirigeant_min date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_dirigeant_max date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var int $age_beneficiaire_min âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_beneficiaire_max âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_beneficiaire_min date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_beneficiaire_max date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $nationalite_beneficiaire nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_depot_document_min date de dépôt minimale du document, au format JJ-MM-AAAA
     *     @var string $date_depot_document_max date de dépôt maximale du document, au format JJ-MM-AAAA
     *     @var string $type_publication Type de publication
     *     @var string $date_publication_min date publication minimale de la publication, au format JJ-MM-AAAA
     *     @var string $date_publication_max date de publication maximale de la publication, au format JJ-MM-AAAA
     *     @var string $siren SIREN de l'entreprise.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return RechercheGetResponse200|ResponseInterface|null
     *
     * @throws RechercheUnauthorizedException
     * @throws RechercheNotFoundException
     * @throws RechercheServiceUnavailableException
     */
    public function recherche(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Recherche($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents dirigeants seront renvoyées dans un tableau `resultats`.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var int $par_page Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *     @var int $page Page de résultats. Valeur par défaut : `1`.
     *     @var string $precision Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *     @var string $q Texte à rechercher. Nom et prénom du dirigeant pour une personne physique, dénomination pour une personne morale.
     *     @var string $type_dirigeant type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $qualite_dirigeant qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $nationalite_dirigeant nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $prenom_dirigeant prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_min âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_max âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_dirigeant_min date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_dirigeant_max date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $code_naf Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *     @var string $departement Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *     @var string $region Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *     @var string $code_postal Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *     @var string $convention_collective convention collective de l'entreprise
     *     @var string $categorie_juridique Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *     @var bool $entreprise_cessee activité de l'entreprise cessée ou non
     *     @var string $statut_rcs Statut au RCS
     *     @var string $objet_social objet social de l'entreprise déclaré au RCS
     *     @var string $date_immatriculation_rcs_min date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_immatriculation_rcs_max d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_min date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_max date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $capital_min capital minimum de l'entreprise
     *     @var string $capital_max capital maximum de l'entreprise
     *     @var string $chiffre_affaires_min Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $chiffre_affaires_max Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_min Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_max Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $date_creation_min date de création minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_creation_max date de création maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $tranche_effectif_min Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $tranche_effectif_max Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var int $age_beneficiaire_min âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_beneficiaire_max âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_beneficiaire_min date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_beneficiaire_max date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $nationalite_beneficiaire nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_depot_document_min date de dépôt minimale du document, au format JJ-MM-AAAA
     *     @var string $date_depot_document_max date de dépôt maximale du document, au format JJ-MM-AAAA
     *     @var string $type_publication Type de publication
     *     @var string $date_publication_min date publication minimale de la publication, au format JJ-MM-AAAA
     *     @var string $date_publication_max date de publication maximale de la publication, au format JJ-MM-AAAA
     *     @var string $siren SIREN de l'entreprise.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return RechercheDirigeantsGetResponse200|ResponseInterface|null
     *
     * @throws RechercheDirigeantsUnauthorizedException
     * @throws RechercheDirigeantsNotFoundException
     * @throws RechercheDirigeantsServiceUnavailableException
     */
    public function rechercheDirigeants(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RechercheDirigeants($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents bénéficiaires effectifs seront renvoyées dans un tableau `resultats`.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var int $par_page Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *     @var int $page Page de résultats. Valeur par défaut : `1`.
     *     @var string $precision Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *     @var string $q nom et/ou prénom du bénéficiaire effectif
     *     @var int $age_beneficiaire_min âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_beneficiaire_max âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_beneficiaire_min date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_beneficiaire_max date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $nationalite_beneficiaire nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $code_naf Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *     @var string $departement Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *     @var string $region Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *     @var string $code_postal Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *     @var string $convention_collective convention collective de l'entreprise
     *     @var string $categorie_juridique Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *     @var bool $entreprise_cessee activité de l'entreprise cessée ou non
     *     @var string $statut_rcs Statut au RCS
     *     @var string $objet_social objet social de l'entreprise déclaré au RCS
     *     @var string $date_immatriculation_rcs_min date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_immatriculation_rcs_max d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_min date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_max date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $capital_min capital minimum de l'entreprise
     *     @var string $capital_max capital maximum de l'entreprise
     *     @var string $chiffre_affaires_min Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $chiffre_affaires_max Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_min Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_max Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $date_creation_min date de création minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_creation_max date de création maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $tranche_effectif_min Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $tranche_effectif_max Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $type_dirigeant type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $qualite_dirigeant qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $nationalite_dirigeant nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $prenom_dirigeant prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_min âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_max âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_dirigeant_min date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_dirigeant_max date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_depot_document_min date de dépôt minimale du document, au format JJ-MM-AAAA
     *     @var string $date_depot_document_max date de dépôt maximale du document, au format JJ-MM-AAAA
     *     @var string $type_publication Type de publication
     *     @var string $date_publication_min date publication minimale de la publication, au format JJ-MM-AAAA
     *     @var string $date_publication_max date de publication maximale de la publication, au format JJ-MM-AAAA
     *     @var string $siren SIREN de l'entreprise.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return RechercheBeneficiairesGetResponse200|ResponseInterface|null
     *
     * @throws RechercheBeneficiairesUnauthorizedException
     * @throws RechercheBeneficiairesNotFoundException
     * @throws RechercheBeneficiairesServiceUnavailableException
     */
    public function rechercheBeneficiaires(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RechercheBeneficiaires($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents documents seront renvoyées dans un tableau `resultats`.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var int $par_page Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *     @var int $page Page de résultats. Valeur par défaut : `1`.
     *     @var string $precision Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *     @var string $q mot-clé à rechercher dans le contenu du document
     *     @var string $date_depot_document_min date de dépôt minimale du document, au format JJ-MM-AAAA
     *     @var string $date_depot_document_max date de dépôt maximale du document, au format JJ-MM-AAAA
     *     @var string $code_naf Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *     @var string $departement Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *     @var string $region Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *     @var string $code_postal Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *     @var string $convention_collective convention collective de l'entreprise
     *     @var string $categorie_juridique Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *     @var bool $entreprise_cessee activité de l'entreprise cessée ou non
     *     @var string $statut_rcs Statut au RCS
     *     @var string $objet_social objet social de l'entreprise déclaré au RCS
     *     @var string $date_immatriculation_rcs_min date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_immatriculation_rcs_max d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_min date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_max date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $capital_min capital minimum de l'entreprise
     *     @var string $capital_max capital maximum de l'entreprise
     *     @var string $chiffre_affaires_min Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $chiffre_affaires_max Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_min Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_max Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $date_creation_min date de création minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_creation_max date de création maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $tranche_effectif_min Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $tranche_effectif_max Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $type_dirigeant type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $qualite_dirigeant qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $nationalite_dirigeant nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $prenom_dirigeant prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_min âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_max âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_dirigeant_min date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_dirigeant_max date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var int $age_beneficiaire_min âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_beneficiaire_max âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_beneficiaire_min date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_beneficiaire_max date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $nationalite_beneficiaire nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $type_publication Type de publication
     *     @var string $date_publication_min date publication minimale de la publication, au format JJ-MM-AAAA
     *     @var string $date_publication_max date de publication maximale de la publication, au format JJ-MM-AAAA
     *     @var string $siren SIREN de l'entreprise.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return RechercheDocumentsGetResponse200|ResponseInterface|null
     *
     * @throws RechercheDocumentsUnauthorizedException
     * @throws RechercheDocumentsNotFoundException
     * @throws RechercheDocumentsServiceUnavailableException
     */
    public function rechercheDocuments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RechercheDocuments($queryParameters), $fetch);
    }

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différentes publications seront renvoyées dans un tableau `resultats`.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var int $par_page Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     *     @var int $page Page de résultats. Valeur par défaut : `1`.
     *     @var string $precision Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     *     @var string $q mot-clé à rechercher dans le contenu de la publication
     *     @var string $code_naf Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     *     @var string $departement Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     *     @var string $region Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     *     @var string $code_postal Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     *     @var string $convention_collective convention collective de l'entreprise
     *     @var string $categorie_juridique Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *     @var bool $entreprise_cessee activité de l'entreprise cessée ou non
     *     @var string $statut_rcs Statut au RCS
     *     @var string $objet_social objet social de l'entreprise déclaré au RCS
     *     @var string $date_immatriculation_rcs_min date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_immatriculation_rcs_max d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_min date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_radiation_rcs_max date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $capital_min capital minimum de l'entreprise
     *     @var string $capital_max capital maximum de l'entreprise
     *     @var string $chiffre_affaires_min Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $chiffre_affaires_max Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_min Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $resultat_max Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     *     @var string $date_creation_min date de création minimale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $date_creation_max date de création maximale de l'entreprise, au format JJ-MM-AAAA
     *     @var string $tranche_effectif_min Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $tranche_effectif_max Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     *     @var string $type_dirigeant type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $qualite_dirigeant qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $nationalite_dirigeant nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $prenom_dirigeant prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_min âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_dirigeant_max âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_dirigeant_min date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_dirigeant_max date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var int $age_beneficiaire_min âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var int $age_beneficiaire_max âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_de_naissance_beneficiaire_min date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     *     @var string $date_de_naissance_beneficiaire_max date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     *     @var string $nationalite_beneficiaire nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     *     @var string $date_depot_document_min date de dépôt minimale du document, au format JJ-MM-AAAA
     *     @var string $date_depot_document_max date de dépôt maximale du document, au format JJ-MM-AAAA
     *     @var string $type_publication Type de publication
     *     @var string $date_publication_min date publication minimale de la publication, au format JJ-MM-AAAA
     *     @var string $date_publication_max date de publication maximale de la publication, au format JJ-MM-AAAA
     *     @var string $siren SIREN de l'entreprise.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return RecherchePublicationsGetResponse200|ResponseInterface|null
     *
     * @throws RecherchePublicationsUnauthorizedException
     * @throws RecherchePublicationsNotFoundException
     * @throws RecherchePublicationsServiceUnavailableException
     */
    public function recherchePublications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RecherchePublications($queryParameters), $fetch);
    }

    /**
     * Cette route nécessite généralement d'avoir un temps de réponse très faible. Une URL avec un temps de réponse plus faible a été mise en place : `https://suggestions.pappers.fr/v2?q=googl`. D'autre part, afin de permettre une intégration en front-end la plus directe, cette route ne nécessite pas de token d'authentification.
     *
     * @param array $queryParameters {
     *
     *     @var string $q Début de recherche textuelle
     *     @var int $longueur Nombre de résultats. Maximum 100. Valeur par défaut : `10`.
     *     @var string $cibles Cibles de la recherche, séparées par des virgules. Valeur par défaut : `"nom_entreprise"`.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return SuggestionsGetResponse200|ResponseInterface|null
     *
     * @throws SuggestionsBadRequestException
     */
    public function suggestions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Suggestions($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le SIREN de l'entreprise pour laquelle vous souhaitez obtenir les comptes annuels.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $annee Année de cloture des comptes souhaités. Il est possible d'indiquer plusieurs années en les séparant par des virgules. Si le paramètre n'est pas fourni, toutes les années disponibles seront retournées.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws ComptesAnnuelsBadRequestException
     * @throws ComptesAnnuelsUnauthorizedException
     * @throws ComptesAnnuelsNotFoundException
     * @throws ComptesAnnuelsServiceUnavailableException
     */
    public function comptesAnnuels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ComptesAnnuels($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir le token du document. Le document vous sera envoyé au format PDF ou XLSX.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $token Token du document
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws DocumentTelechargementBadRequestException
     * @throws DocumentTelechargementUnauthorizedException
     * @throws DocumentTelechargementNotFoundException
     * @throws DocumentTelechargementServiceUnavailableException
     */
    public function documentTelechargement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentTelechargement($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $siret SIRET de l'entreprise
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws DocumentExtraitPappersBadRequestException
     * @throws DocumentExtraitPappersUnauthorizedException
     * @throws DocumentExtraitPappersNotFoundException
     * @throws DocumentExtraitPappersServiceUnavailableException
     */
    public function documentExtraitPappers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentExtraitPappers($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $siret SIRET de l'entreprise
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws DocumentExtraitInpiBadRequestException
     * @throws DocumentExtraitInpiUnauthorizedException
     * @throws DocumentExtraitInpiNotFoundException
     * @throws DocumentExtraitInpiServiceUnavailableException
     */
    public function documentExtraitInpi(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentExtraitInpi($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $siret SIRET de l'entreprise
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws DocumentAvisSituationInseeBadRequestException
     * @throws DocumentAvisSituationInseeUnauthorizedException
     * @throws DocumentAvisSituationInseeNotFoundException
     * @throws DocumentAvisSituationInseeServiceUnavailableException
     */
    public function documentAvisSituationInsee(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentAvisSituationInsee($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $siret SIRET de l'entreprise
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws DocumentStatusBadRequestException
     * @throws DocumentStatusUnauthorizedException
     * @throws DocumentStatusNotFoundException
     * @throws DocumentStatusServiceUnavailableException
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
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws DocumentBeneficiairesEffectifsBadRequestException
     * @throws DocumentBeneficiairesEffectifsUnauthorizedException
     * @throws DocumentBeneficiairesEffectifsForbiddenException
     * @throws DocumentBeneficiairesEffectifsNotFoundException
     * @throws DocumentBeneficiairesEffectifsServiceUnavailableException
     */
    public function documentBeneficiairesEffectifs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DocumentBeneficiairesEffectifs($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return SuiviJetonsGetResponse200|ResponseInterface|null
     *
     * @throws SuiviJetonsUnauthorizedException
     * @throws SuiviJetonsServiceUnavailableException
     */
    public function suiviJetons(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuiviJetons($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param ListePostBodyItem[]|null $requestBody
     * @param array                    $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance d'entreprises
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ListePostResponse200|ListePostResponse201|ResponseInterface|null
     *
     * @throws SurveillanceEntrepriseBadRequestException
     * @throws SurveillanceEntrepriseUnauthorizedException
     * @throws SurveillanceEntrepriseForbiddenException
     * @throws SurveillanceEntrepriseNotFoundException
     * @throws SurveillanceEntrepriseServiceUnavailableException
     */
    public function surveillanceEntreprise(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceEntreprise($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array[]|null $requestBody
     * @param array        $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance
     *     @var bool $supprimer_totalite Suppression de toutes les notifications de la liste
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ListeDeleteResponse200|ResponseInterface|null
     *
     * @throws SurveillanceNotificationsDeleteBadRequestException
     * @throws SurveillanceNotificationsDeleteUnauthorizedException
     * @throws SurveillanceNotificationsDeleteNotFoundException
     * @throws SurveillanceNotificationsDeleteServiceUnavailableException
     */
    public function surveillanceNotificationsDelete(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceNotificationsDelete($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste. Les informations à renseigner sont différentes selon le type de personne à ajouter (morale ou physique).
     *
     * @param ListePostBodyItem[]|null $requestBody
     * @param array                    $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance de dirigeants
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ListePostResponse200|ListePostResponse201|ResponseInterface|null
     *
     * @throws SurveillanceDirigeantBadRequestException
     * @throws SurveillanceDirigeantUnauthorizedException
     * @throws SurveillanceDirigeantForbiddenException
     * @throws SurveillanceDirigeantNotFoundException
     * @throws SurveillanceDirigeantServiceUnavailableException
     */
    public function surveillanceDirigeant(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SurveillanceDirigeant($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance d'entreprises
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|null
     *
     * @throws SurveillanceListeInformationsBadRequestException
     * @throws SurveillanceListeInformationsUnauthorizedException
     * @throws SurveillanceListeInformationsNotFoundException
     * @throws SurveillanceListeInformationsServiceUnavailableException
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
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.pappers.fr/v2');
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
