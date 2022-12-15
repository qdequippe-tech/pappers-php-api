<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Endpoint;

class Entreprise extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'siren', 'siret', 'format_publications_bodacc', 'marques', 'validite_tva_intracommunautaire', 'publications_bodacc_brutes']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('siret', ['string']);
        $optionsResolver->addAllowedTypes('format_publications_bodacc', ['string']);
        $optionsResolver->addAllowedTypes('marques', ['bool']);
        $optionsResolver->addAllowedTypes('validite_tva_intracommunautaire', ['bool']);
        $optionsResolver->addAllowedTypes('publications_bodacc_brutes', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Qdequippe\Pappers\Api\Model\EntrepriseFiche|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\EntrepriseBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\EntrepriseUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\EntrepriseNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche', 'json');
        }
        if ((null === $contentType) === false && (206 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche', 'json');
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\EntrepriseBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\EntrepriseUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\EntrepriseNotFoundException();
        }
    }
}
