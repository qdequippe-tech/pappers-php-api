<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Endpoint;

class DocumentTelechargement extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir le token du document. Le document vous sera envoyé au format PDF ou XLSX.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $token Token du document
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
        return '/document/telechargement';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/pdf']];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * {@inheritdoc}
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentTelechargementServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentTelechargementBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentTelechargementUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentTelechargementNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentTelechargementServiceUnavailableException();
        }
    }
}
