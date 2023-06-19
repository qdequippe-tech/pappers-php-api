<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitPappersUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentExtraitPappers extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
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
        return '/document/extrait_pappers';
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
        $optionsResolver->setDefined(['api_token', 'siren', 'siret']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('siret', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws DocumentExtraitPappersBadRequestException
     * @throws DocumentExtraitPappersUnauthorizedException
     * @throws DocumentExtraitPappersNotFoundException
     * @throws DocumentExtraitPappersServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new DocumentExtraitPappersBadRequestException($response);
        }
        if (401 === $status) {
            throw new DocumentExtraitPappersUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DocumentExtraitPappersNotFoundException($response);
        }
        if (503 === $status) {
            throw new DocumentExtraitPappersServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
