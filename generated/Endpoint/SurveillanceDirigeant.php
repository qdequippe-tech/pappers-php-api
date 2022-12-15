<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Endpoint;

class SurveillanceDirigeant extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir la clé d'utilisation de l'API ainsi que l'identifiant de votre liste. Les informations à renseigner sont différentes selon le type de personne à ajouter (morale ou physique).
     *
     * @param \Qdequippe\Pappers\Api\Model\ListePostBodyItem[] $requestBody
     * @param array                                            $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $id_liste Identifiant unique de votre liste de surveillance de dirigeants
     * }
     */
    public function __construct(array $requestBody, array $queryParameters = [])
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (\is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \Qdequippe\Pappers\Api\Model\ListePostBodyItem) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @return \Qdequippe\Pappers\Api\Model\ListePostResponse200|\Qdequippe\Pappers\Api\Model\ListePostResponse201|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantForbiddenException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\ListePostResponse200', 'json');
        }
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\ListePostResponse201', 'json');
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantForbiddenException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SurveillanceDirigeantServiceUnavailableException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
