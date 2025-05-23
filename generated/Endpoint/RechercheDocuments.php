<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\RechercheDocumentsNotFoundException;
use Qdequippe\Pappers\Api\Exception\RechercheDocumentsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\RechercheDocumentsUnauthorizedException;
use Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class RechercheDocuments extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Tous les paramètres sont optionnels et servent à filtrer la recherche. Les différents documents seront renvoyées dans un tableau `resultats`.
     *
     * @param array $queryParameters {
     *
     * @var int    $par_page Nombre de résultats affichés sur une page. Valeur par défaut : `10`.
     * @var int    $page Page de résultats. Valeur par défaut : `1`.
     * @var string $precision Niveau de précision de la recherche. Valeur par défaut : `"standard"`.
     * @var string $q mot-clé à rechercher dans le contenu du document
     * @var string $date_depot_document_min date de dépôt minimale du document, au format JJ-MM-AAAA
     * @var string $date_depot_document_max date de dépôt maximale du document, au format JJ-MM-AAAA
     * @var string $code_naf Code NAF de l'entreprise. Il est possible d'indiquer plusieurs codes NAF en les séparant par des virgules.
     * @var string $departement Numéro de département de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs départements en les séparant par des virgules.
     * @var string $region Code de la région de l'un des établissements de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/4316069#titre-bloc-18). Il est possible d'indiquer plusieurs codes régions en les séparant par des virgules.
     * @var string $code_postal Code postal de l'un des établissements de l'entreprise. Il est possible d'indiquer plusieurs codes postaux en les séparant par des virgules.
     * @var string $convention_collective convention collective de l'entreprise
     * @var string $categorie_juridique Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     * @var bool   $entreprise_cessee activité de l'entreprise cessée ou non
     * @var string $statut_rcs Statut au RCS
     * @var string $objet_social objet social de l'entreprise déclaré au RCS
     * @var string $date_immatriculation_rcs_min date d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     * @var string $date_immatriculation_rcs_max d'immatriculation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     * @var string $date_radiation_rcs_min date de radiation au RCS minimale de l'entreprise, au format JJ-MM-AAAA
     * @var string $date_radiation_rcs_max date de radiation au RCS maximale de l'entreprise, au format JJ-MM-AAAA
     * @var string $capital_min capital minimum de l'entreprise
     * @var string $capital_max capital maximum de l'entreprise
     * @var string $chiffre_affaires_min Chiffre d'affaires minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     * @var string $chiffre_affaires_max Chiffre d'affaires maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     * @var string $resultat_min Résultat minimum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     * @var string $resultat_max Résultat maximum de l'entreprise.
     **Note** : Filtrer sur ce critère restreint énormément les entreprises retournées car cela élimine d'office toutes les entreprises dont les comptes ne sont pas publiés.
     * @var string $date_creation_min date de création minimale de l'entreprise, au format JJ-MM-AAAA
     * @var string $date_creation_max date de création maximale de l'entreprise, au format JJ-MM-AAAA
     * @var string $tranche_effectif_min Tranche d'effectifs minimale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     * @var string $tranche_effectif_max Tranche d'effectifs maximale de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     **Note** : 00 ou NN donneront les mêmes résultats et veulent dire non employeur
     * @var string $type_dirigeant type du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var string $qualite_dirigeant qualité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var string $nationalite_dirigeant nationalité du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var string $nom_dirigeant nom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var string $prenom_dirigeant prénom du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var int    $age_dirigeant_min âge minimal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var int    $age_dirigeant_max âge maximal du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises)
     * @var string $date_de_naissance_dirigeant_min date de naissance minimale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     * @var string $date_de_naissance_dirigeant_max date de naissance maximale du dirigeant (ou de l'un des dirigeants de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     * @var int    $age_beneficiaire_min âge minimal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     * @var int    $age_beneficiaire_max âge maximal du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     * @var string $date_de_naissance_beneficiaire_min date de naissance minimale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises), au format JJ-MM-AAAA
     * @var string $date_de_naissance_beneficiaire_max date de naissance maximale du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises) de l'entreprise, au format JJ-MM-AAAA
     * @var string $nationalite_beneficiaire nationalité du bénéficiaire effectif (ou de l'un des bénéficiaires effectifs de l'entreprise pour une recherche d'entreprises)
     * @var string $type_publication Type de publication
     * @var string $date_publication_min date publication minimale de la publication, au format JJ-MM-AAAA
     * @var string $date_publication_max date de publication maximale de la publication, au format JJ-MM-AAAA
     * @var string $siren SIREN de l'entreprise.
     *             }
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
        return '/recherche-documents';
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
        $optionsResolver->setDefined(['par_page', 'page', 'precision', 'q', 'date_depot_document_min', 'date_depot_document_max', 'code_naf', 'departement', 'region', 'code_postal', 'convention_collective', 'categorie_juridique', 'entreprise_cessee', 'statut_rcs', 'objet_social', 'date_immatriculation_rcs_min', 'date_immatriculation_rcs_max', 'date_radiation_rcs_min', 'date_radiation_rcs_max', 'capital_min', 'capital_max', 'chiffre_affaires_min', 'chiffre_affaires_max', 'resultat_min', 'resultat_max', 'date_creation_min', 'date_creation_max', 'tranche_effectif_min', 'tranche_effectif_max', 'type_dirigeant', 'qualite_dirigeant', 'nationalite_dirigeant', 'nom_dirigeant', 'prenom_dirigeant', 'age_dirigeant_min', 'age_dirigeant_max', 'date_de_naissance_dirigeant_min', 'date_de_naissance_dirigeant_max', 'age_beneficiaire_min', 'age_beneficiaire_max', 'date_de_naissance_beneficiaire_min', 'date_de_naissance_beneficiaire_max', 'nationalite_beneficiaire', 'type_publication', 'date_publication_min', 'date_publication_max', 'siren']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('par_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('precision', ['string']);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('date_depot_document_min', ['string']);
        $optionsResolver->addAllowedTypes('date_depot_document_max', ['string']);
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
        $optionsResolver->addAllowedTypes('type_publication', ['string']);
        $optionsResolver->addAllowedTypes('date_publication_min', ['string']);
        $optionsResolver->addAllowedTypes('date_publication_max', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);

        return $optionsResolver;
    }

    /**
     * @return RechercheDocumentsGetResponse200|null
     *
     * @throws RechercheDocumentsUnauthorizedException
     * @throws RechercheDocumentsNotFoundException
     * @throws RechercheDocumentsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new RechercheDocumentsUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new RechercheDocumentsNotFoundException($response);
        }
        if (503 === $status) {
            throw new RechercheDocumentsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
