<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\SuiviJetonsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SuiviJetonsUnauthorizedException;
use Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SuiviJetons extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

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
        $optionsResolver->setDefined(['api_token']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return SuiviJetonsGetResponse200|null
     *
     * @throws SuiviJetonsUnauthorizedException
     * @throws SuiviJetonsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\SuiviJetonsGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new SuiviJetonsUnauthorizedException($response);
        }
        if (503 === $status) {
            throw new SuiviJetonsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
