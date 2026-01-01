<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\EntrepriseBadRequestException;
use Qdequippe\Pappers\Api\Exception\EntrepriseNotFoundException;
use Qdequippe\Pappers\Api\Exception\EntrepriseUnauthorizedException;
use Qdequippe\Pappers\Api\Model\EntrepriseFiche;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class Entreprise extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

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
     * @param array $queryParameters {
     *
     * @var string $siren SIREN de l'entreprise
     * @var string $siret SIRET de l'entreprise
     * @var string $format_publications_bodacc Format attendu pour les publications BODACC. Valeur par défaut : `"objet"`.
     * @var bool   $validite_tva_intracommunautaire Si vrai, le champ validite_tva_intracommunautaire du retour indiquera si le numéro de tva est valide auprès de la Commission européenne. Valeur par défaut : `false`.
     * @var bool   $publications_bodacc_brutes Pappers traite les publications BODACC afin de supprimer les publications périmée. Si vrai, le retour inclura les publications bodacc sans traitement. Valeur par défaut : `false`.
     * @var bool   $beneficiaires_effectifs_complets Si vrai, la requête se lancera avec un accès complet au registre des bénéficiaires effectifs. Nécessite une habilitation.
     * @var string $champs_supplementaires Liste des champs supplémentaires à inclure dans le retour. Certains champs peuvent entraîner une consommation de crédits supplémentaires.
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
     * }
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
        return '/entreprise';
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
        $optionsResolver->setDefined(['siren', 'siret', 'format_publications_bodacc', 'validite_tva_intracommunautaire', 'publications_bodacc_brutes', 'beneficiaires_effectifs_complets', 'champs_supplementaires']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('siret', ['string']);
        $optionsResolver->addAllowedTypes('format_publications_bodacc', ['string']);
        $optionsResolver->addAllowedTypes('validite_tva_intracommunautaire', ['bool']);
        $optionsResolver->addAllowedTypes('publications_bodacc_brutes', ['bool']);
        $optionsResolver->addAllowedTypes('beneficiaires_effectifs_complets', ['bool']);
        $optionsResolver->addAllowedTypes('champs_supplementaires', ['string']);

        return $optionsResolver;
    }

    /**
     * @return EntrepriseFiche|null
     *
     * @throws EntrepriseBadRequestException
     * @throws EntrepriseUnauthorizedException
     * @throws EntrepriseNotFoundException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\EntrepriseFiche', 'json');
        }
        if ((null === $contentType) === false && (206 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\EntrepriseFiche', 'json');
        }
        if (400 === $status) {
            throw new EntrepriseBadRequestException($response);
        }
        if (401 === $status) {
            throw new EntrepriseUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new EntrepriseNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
