<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsBadRequestException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsNotFoundException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\ComptesAnnuelsUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class ComptesAnnuels extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir le SIREN de l'entreprise pour laquelle vous souhaitez obtenir les comptes annuels.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $siren SIREN de l'entreprise
     * @var string $annee Année de cloture des comptes souhaités. Il est possible d'indiquer plusieurs années en les séparant par des virgules. Si le paramètre n'est pas fourni, toutes les années disponibles seront retournées.
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
        return '/entreprise/comptes';
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
        $optionsResolver->setDefined(['api_token', 'siren', 'annee']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('annee', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws ComptesAnnuelsBadRequestException
     * @throws ComptesAnnuelsUnauthorizedException
     * @throws ComptesAnnuelsNotFoundException
     * @throws ComptesAnnuelsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new ComptesAnnuelsBadRequestException($response);
        }
        if (401 === $status) {
            throw new ComptesAnnuelsUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new ComptesAnnuelsNotFoundException($response);
        }
        if (503 === $status) {
            throw new ComptesAnnuelsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
