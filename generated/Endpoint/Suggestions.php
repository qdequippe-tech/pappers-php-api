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
     * Cette route est également accessible via le point d'accès suivant : `https://suggestions.pappers.fr/v2?q=googl`.
     *
     * D'autre part, afin de permettre une intégration en front-end la plus directe, cette route est également accessible sans clé API, avec des limitations quotidiennes du nombre d'appels.
     *
     * @param array{
     *    "q": string, //Début de recherche textuelle
     *    "longueur"?: int, //Nombre de résultats. Maximum 100. Valeur par défaut : `10`.
     *    "cibles"?: string, //Cibles de la recherche, séparées par des virgules. Valeur par défaut : `"nom_entreprise"`.
     * } $queryParameters
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
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new SuggestionsBadRequestException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
