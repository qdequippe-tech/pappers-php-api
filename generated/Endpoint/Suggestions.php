<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\SuggestionsBadRequestException;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class Suggestions extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Cette route nécessite généralement d'avoir un temps de réponse très faible. Une URL avec un temps de réponse plus faible a été mise en place : `https://suggestions.pappers.fr/v2?q=googl`. D'autre part, afin de permettre une intégration en front-end la plus directe, cette route ne nécessite pas de token d'authentification.
     *
     * @param array $queryParameters {
     *
     * @var string $q Début de recherche textuelle
     * @var int    $longueur Nombre de résultats. Maximum 100. Valeur par défaut : `10`.
     * @var string $cibles Cibles de la recherche, séparées par des virgules. Valeur par défaut : `"nom_entreprise"`.
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
        return '/suggestions';
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
        $optionsResolver->setDefined(['q', 'longueur', 'cibles']);
        $optionsResolver->setRequired(['q']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('longueur', ['int']);
        $optionsResolver->addAllowedTypes('cibles', ['string']);

        return $optionsResolver;
    }

    /**
     * @return SuggestionsGetResponse200|null
     *
     * @throws SuggestionsBadRequestException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new SuggestionsBadRequestException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
