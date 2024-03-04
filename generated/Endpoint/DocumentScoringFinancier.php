<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\DocumentScoringFinancierBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentScoringFinancierNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentScoringFinancierServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentScoringFinancierUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentScoringFinancier extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir le SIREN. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $siren SIREN de l'entreprise
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
        return '/document/rapport_solvabilite';
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
        $optionsResolver->setDefined(['api_token', 'siren']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws DocumentScoringFinancierBadRequestException
     * @throws DocumentScoringFinancierUnauthorizedException
     * @throws DocumentScoringFinancierNotFoundException
     * @throws DocumentScoringFinancierServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new DocumentScoringFinancierBadRequestException($response);
        }
        if (401 === $status) {
            throw new DocumentScoringFinancierUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DocumentScoringFinancierNotFoundException($response);
        }
        if (503 === $status) {
            throw new DocumentScoringFinancierServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
