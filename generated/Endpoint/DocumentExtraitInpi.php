<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Endpoint;

class DocumentExtraitInpi extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir soit le SIREN, soit le SIRET. Le document vous sera envoyé au format PDF.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $siret SIRET de l'entreprise
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
        return '/document/extrait_inpi';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/pdf']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * {@inheritdoc}
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentExtraitInpiServiceUnavailableException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
