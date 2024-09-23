<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\DocumentStatusBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentStatusUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentStatus extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     * @var string $siren SIREN de l'entreprise
     * @var string $siret SIRET de l'entreprise
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
        return '/document/statuts';
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
        $optionsResolver->setDefined(['siren', 'siret']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('siret', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws DocumentStatusBadRequestException
     * @throws DocumentStatusUnauthorizedException
     * @throws DocumentStatusNotFoundException
     * @throws DocumentStatusServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new DocumentStatusBadRequestException($response);
        }
        if (401 === $status) {
            throw new DocumentStatusUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DocumentStatusNotFoundException($response);
        }
        if (503 === $status) {
            throw new DocumentStatusServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
