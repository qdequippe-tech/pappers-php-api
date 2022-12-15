<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Endpoint;

class SurveillanceListeInformations extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste.
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance d'entreprises
     * }
     */
    public function __construct(\Qdequippe\Pappers\Api\Model\ListeInformationsPostBody $requestBody, array $queryParameters = [])
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Qdequippe\Pappers\Api\Model\ListeInformationsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceListeInformationsServiceUnavailableException();
        }
    }
}
