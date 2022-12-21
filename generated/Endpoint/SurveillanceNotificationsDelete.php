<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteBadRequestException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteNotFoundException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteUnauthorizedException;
use Qdequippe\Pappers\Api\Model\ListeDeleteResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SurveillanceNotificationsDelete extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array[]|null $requestBody
     * @param array        $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance
     *     @var bool $supprimer_totalite Suppression de toutes les notifications de la liste
     * }
     */
    public function __construct(?array $requestBody = null, array $queryParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return '/liste/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if (\is_array($this->body) && isset($this->body[0]) && \is_array($this->body[0])) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
        $optionsResolver->setDefined(['api_token', 'id_liste', 'supprimer_totalite']);
        $optionsResolver->setRequired(['api_token', 'id_liste']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('id_liste', ['string']);
        $optionsResolver->addAllowedTypes('supprimer_totalite', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return ListeDeleteResponse200|null
     *
     * @throws SurveillanceNotificationsDeleteBadRequestException
     * @throws SurveillanceNotificationsDeleteUnauthorizedException
     * @throws SurveillanceNotificationsDeleteNotFoundException
     * @throws SurveillanceNotificationsDeleteServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200', 'json');
        }
        if (400 === $status) {
            throw new SurveillanceNotificationsDeleteBadRequestException();
        }
        if (401 === $status) {
            throw new SurveillanceNotificationsDeleteUnauthorizedException();
        }
        if (404 === $status) {
            throw new SurveillanceNotificationsDeleteNotFoundException();
        }
        if (503 === $status) {
            throw new SurveillanceNotificationsDeleteServiceUnavailableException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
