<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api;

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
     * @return \Qdequippe\Pappers\Api\Model\EntrepriseFiche|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\EntrepriseBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\EntrepriseUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\EntrepriseNotFoundException
     */
    public function entreprise(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\Entreprise($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\Association|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationServiceUnavailableException
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
     * @return \Qdequippe\Pappers\Api\Model\RechercheGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheServiceUnavailableException
     */
    public function recherche(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\Recherche($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\RechercheDirigeantsGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheDirigeantsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheDirigeantsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheDirigeantsServiceUnavailableException
     */
    public function rechercheDirigeants(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\RechercheDirigeants($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\RechercheBeneficiairesGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheBeneficiairesUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheBeneficiairesNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheBeneficiairesServiceUnavailableException
     */
    public function rechercheBeneficiaires(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\RechercheBeneficiaires($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheDocumentsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheDocumentsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\RechercheDocumentsServiceUnavailableException
     */
    public function rechercheDocuments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\RechercheDocuments($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\RecherchePublicationsGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\RecherchePublicationsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\RecherchePublicationsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\RecherchePublicationsServiceUnavailableException
     */
    public function recherchePublications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\RecherchePublications($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SuggestionsBadRequestException
     */
    public function suggestions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\Suggestions($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsServiceUnavailableException
     */
    public function comptesAnnuels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\ComptesAnnuels($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementServiceUnavailableException
     */
    public function documentTelechargement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\DocumentTelechargement($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersServiceUnavailableException
     */
    public function documentExtraitPappers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\DocumentExtraitPappers($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiServiceUnavailableException
     */
    public function documentExtraitInpi(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\DocumentExtraitInpi($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentAvisSituationInseeServiceUnavailableException
     */
    public function documentAvisSituationInsee(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\DocumentAvisSituationInsee($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentStatusBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentStatusUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentStatusNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentStatusServiceUnavailableException
     */
    public function documentStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\DocumentStatus($queryParameters), $fetch);
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
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsForbiddenException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsServiceUnavailableException
     */
    public function documentBeneficiairesEffectifs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\DocumentBeneficiairesEffectifs($queryParameters), $fetch);
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
     * @return \Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SuiviJetonsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SuiviJetonsServiceUnavailableException
     */
    public function suiviJetons(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\SuiviJetons($queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param \Qdequippe\Pappers\Api\Model\ListePostBodyItem[]|null $requestBody
     * @param array                                                 $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance d'entreprises
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Qdequippe\Pappers\Api\Model\ListePostResponse200|\Qdequippe\Pappers\Api\Model\ListePostResponse201|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseForbiddenException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseServiceUnavailableException
     */
    public function surveillanceEntreprise(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\SurveillanceEntreprise($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array[]|null $requestBody
     * @param array        $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance
     *     @var bool $delete_all Suppression de toutes les notifications de la liste
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Qdequippe\Pappers\Api\Model\ListeDeleteResponse200|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteServiceUnavailableException
     */
    public function surveillanceNotificationsDelete(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\SurveillanceNotificationsDelete($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste. Les informations à renseigner sont différentes selon le type de personne à ajouter (morale ou physique).
     *
     * @param \Qdequippe\Pappers\Api\Model\ListePostBodyItem[]|null $requestBody
     * @param array                                                 $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance de dirigeants
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Qdequippe\Pappers\Api\Model\ListePostResponse200|\Qdequippe\Pappers\Api\Model\ListePostResponse201|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantForbiddenException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantServiceUnavailableException
     */
    public function surveillanceDirigeant(?array $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\SurveillanceDirigeant($requestBody, $queryParameters), $fetch);
    }

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param \Qdequippe\Pappers\Api\Model\ListeInformationsPostBody|null $requestBody
     * @param array                                                       $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance d'entreprises
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsServiceUnavailableException
     */
    public function surveillanceListeInformations(?Model\ListeInformationsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Qdequippe\Pappers\Api\Endpoint\SurveillanceListeInformations($requestBody, $queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.pappers.fr/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Qdequippe\Pappers\Api\Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
