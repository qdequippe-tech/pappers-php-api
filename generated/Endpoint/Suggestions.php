<?php

namespace Qdequippe\Pappers\Api\Endpoint;

class Suggestions extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Cette route nécessite généralement d'avoir un temps de réponse très faible. Une URL avec un temps de réponse plus faible a été mise en place : `https://suggestions.pappers.fr/v2?q=googl`. D'autre part, afin de permettre une intégration en front-end la plus directe, cette route ne nécessite pas de token d'authentification.
     *
     * @param array $queryParameters {
     *
     *     @var string $q Début de recherche textuelle
     *     @var int $longueur Nombre de résultats. Maximum 100. Valeur par défaut : `10`.
     *     @var string $cibles Cibles de la recherche, séparées par des virgules. Valeur par défaut : `"nom_entreprise"`.
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
        return '/suggestions';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['q', 'longueur', 'cibles']);
        $optionsResolver->setRequired(['q']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('longueur', ['int']);
        $optionsResolver->addAllowedTypes('cibles', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200|null
     *
     * @throws \Qdequippe\Pappers\Api\Exception\SuggestionsBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\SuggestionsBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
