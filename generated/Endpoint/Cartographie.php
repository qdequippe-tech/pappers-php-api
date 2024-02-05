<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\CartographieBadRequestException;
use Qdequippe\Pappers\Api\Exception\CartographieNotFoundException;
use Qdequippe\Pappers\Api\Exception\CartographieUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class Cartographie extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Cette route fournit les données nécessaires à l'établissement de la cartographie Pappers d'une entreprise telle qu'elle apparaît sur les fiches Pappers (exemple https://www.pappers.fr/entreprise/google-france-443061841#cartographie).
     *
     * - La requête est gratuite (erreur 404) si seul le noeud principal (l'entreprise recherchée) est disponible.
     * - La requête coûte 1 jeton si, en plus du noeud principal, des noeuds dirigeants directs de l'entreprise sont disponibles. Il est possible de rejeter ces cas avec le paramètre `rejeter_premier_degre`. La requête est alors gratuite (erreur 404).
     * - La requête coûte 3 jetons si des noeuds supplémentaires sont disponibles.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $siren SIREN de l'entreprise
     * @var bool   $inclure_entreprises_dirigees Si vrai, la cartographie intègrera les entreprises dirigées par l'entreprise recherchée et les entreprises qui dirigent l'entreprise recherchée. Valeur par défaut : `true`.
     * @var bool   $inclure_entreprises_citees Si vrai, la cartographie intègrera les entreprises citées conjointement avec l'entreprise recherchée dans des actes et statuts. Valeur par défaut : `false`.
     * @var bool   $inclure_sci Si vrai, la cartographie intègrera les SCI. Valeur par défaut : `true`.
     * @var bool   $autoriser_modifications Si vrai, la cartographie pourra adapter automatiquement ses paramètres si ceux choisis manuellement ne sont pas idéaux. Valeur par défaut : `false`.
     * @var bool   $rejeter_premier_degre Si vrai et que la cartographie ne fait apparaître que l'entreprise recherchée ainsi que ses dirigeants directs, une erreur 404 sera renvoyée et la requête ne sera pas comptabilisée dans le quota de jetons. Valeur par défaut : `false`.
     * @var int    $degre Permet de choisir manuellement un degré pour la cartographie. Seuls deux états sont possibles : un nombre <= 2 ou bien un nombre > 2. Cela veut dire que 0, 1 ou 2 donneront la même cartographie, tout comme 3, 4 ou 5.
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
        return '/entreprise/cartographie';
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
        $optionsResolver->setDefined(['api_token', 'siren', 'inclure_entreprises_dirigees', 'inclure_entreprises_citees', 'inclure_sci', 'autoriser_modifications', 'rejeter_premier_degre', 'degre']);
        $optionsResolver->setRequired(['api_token', 'siren']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('inclure_entreprises_dirigees', ['bool']);
        $optionsResolver->addAllowedTypes('inclure_entreprises_citees', ['bool']);
        $optionsResolver->addAllowedTypes('inclure_sci', ['bool']);
        $optionsResolver->addAllowedTypes('autoriser_modifications', ['bool']);
        $optionsResolver->addAllowedTypes('rejeter_premier_degre', ['bool']);
        $optionsResolver->addAllowedTypes('degre', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \Qdequippe\Pappers\Api\Model\Cartographie|null
     *
     * @throws CartographieBadRequestException
     * @throws CartographieUnauthorizedException
     * @throws CartographieNotFoundException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\\Pappers\\Api\\Model\\Cartographie', 'json');
        }
        if (400 === $status) {
            throw new CartographieBadRequestException($response);
        }
        if (401 === $status) {
            throw new CartographieUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new CartographieNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
