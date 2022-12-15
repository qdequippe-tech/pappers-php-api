<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Endpoint;

class ComptesAnnuels extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir le SIREN de l'entreprise pour laquelle vous souhaitez obtenir les comptes annuels.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
     *     @var string $annee Année de cloture des comptes souhaités. Il est possible d'indiquer plusieurs années en les séparant par des virgules. Si le paramètre n'est pas fourni, toutes les années disponibles seront retournées.
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
        return '/entreprise/comptes';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'siren', 'annee']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('annee', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\ComptesAnnuelsServiceUnavailableException();
        }
    }
}
