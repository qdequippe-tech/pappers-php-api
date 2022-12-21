<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseForbiddenException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceEntrepriseUnauthorizedException;
use Qdequippe\Pappers\Api\Model\ListePostBodyItem;
use Qdequippe\Pappers\Api\Model\ListePostResponse200;
use Qdequippe\Pappers\Api\Model\ListePostResponse201;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SurveillanceEntreprise extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param ListePostBodyItem[]|null $requestBody
     * @param array                    $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance d'entreprises
     * }
     */
    public function __construct(?array $requestBody = null, array $queryParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/liste';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if (\is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof ListePostBodyItem) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'id_liste']);
        $optionsResolver->setRequired(['api_token', 'id_liste']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('id_liste', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return ListePostResponse200|ListePostResponse201|null
     *
     * @throws SurveillanceEntrepriseBadRequestException
     * @throws SurveillanceEntrepriseUnauthorizedException
     * @throws SurveillanceEntrepriseForbiddenException
     * @throws SurveillanceEntrepriseNotFoundException
     * @throws SurveillanceEntrepriseServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\ListePostResponse200', 'json');
        }
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\ListePostResponse201', 'json');
        }
        if (400 === $status) {
            throw new SurveillanceEntrepriseBadRequestException();
        }
        if (401 === $status) {
            throw new SurveillanceEntrepriseUnauthorizedException();
        }
        if (403 === $status) {
            throw new SurveillanceEntrepriseForbiddenException();
        }
        if (404 === $status) {
            throw new SurveillanceEntrepriseNotFoundException();
        }
        if (503 === $status) {
            throw new SurveillanceEntrepriseServiceUnavailableException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
