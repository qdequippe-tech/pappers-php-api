<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\RecherchePublicationsNotFoundException;
use Qdequippe\Pappers\Api\Exception\RecherchePublicationsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RecherchePublicationsUnauthorizedException;
use Qdequippe\Pappers\Api\Model\RecherchePublicationsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class RecherchePublications extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

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
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/recherche-publications';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['par_page', 'page', 'precision', 'q', 'code_naf', 'departement', 'region', 'code_postal', 'convention_collective', 'categorie_juridique', 'entreprise_cessee', 'statut_rcs', 'objet_social', 'date_immatriculation_rcs_min', 'date_immatriculation_rcs_max', 'date_radiation_rcs_min', 'date_radiation_rcs_max', 'capital_min', 'capital_max', 'chiffre_affaires_min', 'chiffre_affaires_max', 'resultat_min', 'resultat_max', 'date_creation_min', 'date_creation_max', 'tranche_effectif_min', 'tranche_effectif_max', 'type_dirigeant', 'qualite_dirigeant', 'nationalite_dirigeant', 'nom_dirigeant', 'prenom_dirigeant', 'age_dirigeant_min', 'age_dirigeant_max', 'date_de_naissance_dirigeant_min', 'date_de_naissance_dirigeant_max', 'age_beneficiaire_min', 'age_beneficiaire_max', 'date_de_naissance_beneficiaire_min', 'date_de_naissance_beneficiaire_max', 'nationalite_beneficiaire', 'date_depot_document_min', 'date_depot_document_max', 'type_publication', 'date_publication_min', 'date_publication_max', 'siren']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('par_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('precision', ['string']);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('code_naf', ['string']);
        $optionsResolver->addAllowedTypes('departement', ['string']);
        $optionsResolver->addAllowedTypes('region', ['string']);
        $optionsResolver->addAllowedTypes('code_postal', ['string']);
        $optionsResolver->addAllowedTypes('convention_collective', ['string']);
        $optionsResolver->addAllowedTypes('categorie_juridique', ['string']);
        $optionsResolver->addAllowedTypes('entreprise_cessee', ['bool']);
        $optionsResolver->addAllowedTypes('statut_rcs', ['string']);
        $optionsResolver->addAllowedTypes('objet_social', ['string']);
        $optionsResolver->addAllowedTypes('date_immatriculation_rcs_min', ['string']);
        $optionsResolver->addAllowedTypes('date_immatriculation_rcs_max', ['string']);
        $optionsResolver->addAllowedTypes('date_radiation_rcs_min', ['string']);
        $optionsResolver->addAllowedTypes('date_radiation_rcs_max', ['string']);
        $optionsResolver->addAllowedTypes('capital_min', ['string']);
        $optionsResolver->addAllowedTypes('capital_max', ['string']);
        $optionsResolver->addAllowedTypes('chiffre_affaires_min', ['string']);
        $optionsResolver->addAllowedTypes('chiffre_affaires_max', ['string']);
        $optionsResolver->addAllowedTypes('resultat_min', ['string']);
        $optionsResolver->addAllowedTypes('resultat_max', ['string']);
        $optionsResolver->addAllowedTypes('date_creation_min', ['string']);
        $optionsResolver->addAllowedTypes('date_creation_max', ['string']);
        $optionsResolver->addAllowedTypes('tranche_effectif_min', ['string']);
        $optionsResolver->addAllowedTypes('tranche_effectif_max', ['string']);
        $optionsResolver->addAllowedTypes('type_dirigeant', ['string']);
        $optionsResolver->addAllowedTypes('qualite_dirigeant', ['string']);
        $optionsResolver->addAllowedTypes('nationalite_dirigeant', ['string']);
        $optionsResolver->addAllowedTypes('nom_dirigeant', ['string']);
        $optionsResolver->addAllowedTypes('prenom_dirigeant', ['string']);
        $optionsResolver->addAllowedTypes('age_dirigeant_min', ['int']);
        $optionsResolver->addAllowedTypes('age_dirigeant_max', ['int']);
        $optionsResolver->addAllowedTypes('date_de_naissance_dirigeant_min', ['string']);
        $optionsResolver->addAllowedTypes('date_de_naissance_dirigeant_max', ['string']);
        $optionsResolver->addAllowedTypes('age_beneficiaire_min', ['int']);
        $optionsResolver->addAllowedTypes('age_beneficiaire_max', ['int']);
        $optionsResolver->addAllowedTypes('date_de_naissance_beneficiaire_min', ['string']);
        $optionsResolver->addAllowedTypes('date_de_naissance_beneficiaire_max', ['string']);
        $optionsResolver->addAllowedTypes('nationalite_beneficiaire', ['string']);
        $optionsResolver->addAllowedTypes('date_depot_document_min', ['string']);
        $optionsResolver->addAllowedTypes('date_depot_document_max', ['string']);
        $optionsResolver->addAllowedTypes('type_publication', ['string']);
        $optionsResolver->addAllowedTypes('date_publication_min', ['string']);
        $optionsResolver->addAllowedTypes('date_publication_max', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);

        return $optionsResolver;
    }

    /**
     * @return RecherchePublicationsGetResponse200|null
     *
     * @throws RecherchePublicationsUnauthorizedException
     * @throws RecherchePublicationsNotFoundException
     * @throws RecherchePublicationsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\RecherchePublicationsGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new RecherchePublicationsUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new RecherchePublicationsNotFoundException($response);
        }
        if (503 === $status) {
            throw new RecherchePublicationsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
