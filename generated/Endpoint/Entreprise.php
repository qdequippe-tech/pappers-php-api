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
     * Vous devez fournir soit le SIREN, soit le SIRET. Si vous indiquez le SIREN, tous les établissements associés à ce SIREN seront renvoyés dans la clé `etablissements`. Si vous indiquez le SIRET, seul l'établissement associé sera renvoyé dans la clé `etablissement`.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $siren SIREN de l'entreprise
     * @var string $siret SIRET de l'entreprise
     * @var bool   $integrer_diffusions_partielles Si vrai et si l'entreprise est en diffusion partielle, le retour renverra les informations partielles disponibles. Valeur par défaut : `false`.
     * @var string $format_publications_bodacc Format attendu pour les publications BODACC. Valeur par défaut : `"objet"`.
     * @var bool   $marques Si vrai, le retour inclura les marques éventuelles de l'entreprise. Valeur par défaut : `false`.
     * @var bool   $validite_tva_intracommunautaire Si vrai, le champ validite_tva_intracommunautaire du retour indiquera si le numéro de tva est valide auprès de la Commission européenne. Valeur par défaut : `false`.
     * @var bool   $publications_bodacc_brutes Pappers traite les publications BODACC afin de supprimer les publications périmée. Si vrai, le retour inclura les publications bodacc sans traitement. Valeur par défaut : `false`.
     * @var string $champs_supplementaires Liste des champs supplémentaires à inclure dans le retour. Certains champs peuvent entraîner une consommation de jetons supplémentaires.
     *
     * Champs supplémentaires disponibles :
     * - `sites_internet` : 1 jeton supplémentaire
     * - `telephone` : 1 jeton supplémentaire *
     * - `email` : 1 jeton supplémentaire *
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
     * - `labels:orias` : 0.5 jeton supplémentaire
     * - `micro_entreprise` : gratuit
     * - `sanctions` : 1 jeton supplémentaire
     * - `personne_politiquement_exposee` : 1 jeton supplémentaire
     * - `scoring_financier` : 30 jetons supplémentaires
     * - `scoring_non_financier` : 30 jetons supplémentaires
     *
     * \* : le coût des champs `telephone` et `email` est de 1 jeton supplémentaire au total, même si les deux sont demandés.
     *
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
        $optionsResolver->setDefined(['api_token', 'siren', 'siret', 'integrer_diffusions_partielles', 'format_publications_bodacc', 'marques', 'validite_tva_intracommunautaire', 'publications_bodacc_brutes', 'champs_supplementaires']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('siret', ['string']);
        $optionsResolver->addAllowedTypes('integrer_diffusions_partielles', ['bool']);
        $optionsResolver->addAllowedTypes('format_publications_bodacc', ['string']);
        $optionsResolver->addAllowedTypes('marques', ['bool']);
        $optionsResolver->addAllowedTypes('validite_tva_intracommunautaire', ['bool']);
        $optionsResolver->addAllowedTypes('publications_bodacc_brutes', ['bool']);
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
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche', 'json');
        }
        if ((null === $contentType) === false && (206 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche', 'json');
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
        return [];
    }
}
