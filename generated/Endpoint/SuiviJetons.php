<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\SuiviJetonsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\SuiviJetonsUnauthorizedException;
use Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class SuiviJetons extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/suivi-jetons';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return SuiviJetonsGetResponse200|null
     *
     * @throws SuiviJetonsUnauthorizedException
     * @throws SuiviJetonsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new SuiviJetonsUnauthorizedException($response);
        }
        if (503 === $status) {
            throw new SuiviJetonsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
