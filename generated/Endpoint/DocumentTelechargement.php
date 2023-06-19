<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentTelechargementUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentTelechargement extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir le token du document. Le document vous sera envoyé au format PDF ou XLSX.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $token Token du document
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
        return '/document/telechargement';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/pdf']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'token']);
        $optionsResolver->setRequired(['api_token', 'token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws DocumentTelechargementBadRequestException
     * @throws DocumentTelechargementUnauthorizedException
     * @throws DocumentTelechargementNotFoundException
     * @throws DocumentTelechargementServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new DocumentTelechargementBadRequestException($response);
        }
        if (401 === $status) {
            throw new DocumentTelechargementUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DocumentTelechargementNotFoundException($response);
        }
        if (503 === $status) {
            throw new DocumentTelechargementServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
