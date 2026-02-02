<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantForbiddenException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantUnauthorizedException;
use Qdequippe\Pappers\Api\Model\ListePostBodyItem;
use Qdequippe\Pappers\Api\Model\ListePostResponse200;
use Qdequippe\Pappers\Api\Model\ListePostResponse201;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SurveillanceDirigeant extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste. Les informations à renseigner sont différentes selon le type de personne à ajouter (morale ou physique).
     *
     * @param ListePostBodyItem[]|null $requestBody
     * @param array{
     *    "id_liste": string, //Identifiant unique de votre liste de surveillance de dirigeants
     * } $queryParameters
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
        return '/liste/';
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
        $optionsResolver->setDefined(['id_liste']);
        $optionsResolver->setRequired(['id_liste']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('id_liste', ['string']);

        return $optionsResolver;
    }

    /**
     * @return ListePostResponse200|ListePostResponse201|null
     *
     * @throws SurveillanceDirigeantBadRequestException
     * @throws SurveillanceDirigeantUnauthorizedException
     * @throws SurveillanceDirigeantForbiddenException
     * @throws SurveillanceDirigeantNotFoundException
     * @throws SurveillanceDirigeantServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\ListePostResponse200', 'json');
        }
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\ListePostResponse201', 'json');
        }
        if (400 === $status) {
            throw new SurveillanceDirigeantBadRequestException($response);
        }
        if (401 === $status) {
            throw new SurveillanceDirigeantUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new SurveillanceDirigeantForbiddenException($response);
        }
        if (404 === $status) {
            throw new SurveillanceDirigeantNotFoundException($response);
        }
        if (503 === $status) {
            throw new SurveillanceDirigeantServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
