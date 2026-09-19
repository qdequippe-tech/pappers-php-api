<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentExtraitInpi extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array{
     *    "siren"?: string, //SIREN de l'entreprise
     *    "siret"?: string, //SIRET de l'entreprise
     * } $queryParameters
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
        return '/document/extrait_inpi';
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
     * @throws DocumentExtraitInpiBadRequestException
     * @throws DocumentExtraitInpiUnauthorizedException
     * @throws DocumentExtraitInpiNotFoundException
     * @throws DocumentExtraitInpiServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new DocumentExtraitInpiBadRequestException($response);
        }
        if (401 === $status) {
            throw new DocumentExtraitInpiUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new DocumentExtraitInpiNotFoundException($response);
        }
        if (503 === $status) {
            throw new DocumentExtraitInpiServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
