<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsUnauthorizedException;
use Qdequippe\Pappers\Api\Model\ListeInformationsPostBody;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SurveillanceListeInformations extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array{
     *    "id_liste": string, //Identifiant unique de votre liste de surveillance d'entreprises
     * } $queryParameters
     */
    public function __construct(?ListeInformationsPostBody $requestBody = null, array $queryParameters = [])
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
        return '/liste-informations';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof ListeInformationsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
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
     * @throws SurveillanceListeInformationsBadRequestException
     * @throws SurveillanceListeInformationsUnauthorizedException
     * @throws SurveillanceListeInformationsNotFoundException
     * @throws SurveillanceListeInformationsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new SurveillanceListeInformationsBadRequestException($response);
        }
        if (401 === $status) {
            throw new SurveillanceListeInformationsUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new SurveillanceListeInformationsNotFoundException($response);
        }
        if (503 === $status) {
            throw new SurveillanceListeInformationsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
