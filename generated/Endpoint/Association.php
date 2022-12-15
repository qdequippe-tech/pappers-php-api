<?php

namespace Qdequippe\Pappers\Api\Endpoint;

class Association extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

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
        return '/association';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'id_association', 'siret', 'siren']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('id_association', ['string']);
        $optionsResolver->addAllowedTypes('siret', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Qdequippe\Pappers\Api\Model\Association|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\AssociationServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\Association', 'json');
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\AssociationBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\AssociationUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\AssociationNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\AssociationServiceUnavailableException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
