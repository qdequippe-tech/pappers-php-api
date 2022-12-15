<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Endpoint;

class SurveillanceNotificationsDelete extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array[] $requestBody
     * @param array   $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance
     *     @var bool $delete_all Suppression de toutes les notifications de la liste
     * }
     */
    public function __construct(array $requestBody, array $queryParameters = [])
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'id_liste', 'delete_all']);
        $optionsResolver->setRequired(['api_token', 'id_liste']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('id_liste', ['string']);
        $optionsResolver->addAllowedTypes('delete_all', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Qdequippe\Pappers\Api\Model\ListeDeleteResponse200|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceNotificationsDeleteServiceUnavailableException();
        }
    }
}
