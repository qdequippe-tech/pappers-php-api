<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\ConformiteBadRequestException;
use Qdequippe\Pappers\Api\Exception\ConformiteServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\ConformiteUnauthorizedException;
use Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class Conformite extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Cette route vérifie le statut de personne politiquement exposée et la présence de sanctions internationales pour une personne physique.
     *
     * Pour vérifier le statut de dirigeants et bénéficiaires effectifs d'entreprises, vous pouvez directement utiliser la route `/entreprise` avec les champs supplémentaires `personne_politiquement_exposee` et `sanctions`.
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $nom Nom de la personne physique
     * @var string $prenom Prénom de la personne physique
     * @var string $date_de_naissance Date de naissance de la personne physique, au format AAAA-MM-JJ ou AAAA-MM
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
        return '/conformite/personne_physique';
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
        $optionsResolver->setDefined(['api_token', 'nom', 'prenom', 'date_de_naissance']);
        $optionsResolver->setRequired(['api_token', 'nom', 'prenom', 'date_de_naissance']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('nom', ['string']);
        $optionsResolver->addAllowedTypes('prenom', ['string']);
        $optionsResolver->addAllowedTypes('date_de_naissance', ['string']);

        return $optionsResolver;
    }

    /**
     * @return ConformitePersonnePhysiqueGetResponse200|null
     *
     * @throws ConformiteBadRequestException
     * @throws ConformiteUnauthorizedException
     * @throws ConformiteServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new ConformiteBadRequestException($response);
        }
        if (401 === $status) {
            throw new ConformiteUnauthorizedException($response);
        }
        if (503 === $status) {
            throw new ConformiteServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
