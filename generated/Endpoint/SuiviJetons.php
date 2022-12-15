<?php

namespace Qdequippe\Pappers\Api\Endpoint;

class SuiviJetons extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
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
        return '/suivi-jetons';
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
        $optionsResolver->setDefined(['api_token']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SuiviJetonsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SuiviJetonsServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\SuiviJetonsGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SuiviJetonsUnauthorizedException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SuiviJetonsServiceUnavailableException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
