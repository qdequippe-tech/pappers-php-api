<?php

namespace Qdequippe\Pappers\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsBadRequestException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsForbiddenException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsNotFoundException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsServiceUnavailableException;
use Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsUnauthorizedException;
use Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint;
use Qdequippe\Pappers\Api\Runtime\Client\Endpoint;
use Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentBeneficiairesEffectifs extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Vous devez fournir le SIREN. Le document vous sera envoyé au format PDF.
     *
     * Seules les autorités de contrôle (<a rel='noreferrer noopener' target='_blank' href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000041578272/'>article R. 561-57 du Code monétaire et financier en dénombre 18</a>) et les personnes assujetties à la lutte contre le blanchiment des capitaux et le financement du terrorisme (<a rel='noreferrer noopener' target='_blank' href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000042648575/'>article L. 561-2 du code monétaire et financier</a>) peuvent accéder à ces informations.
     *
     * Pour pouvoir utiliser cette route veuillez nous contacter au préalable à api@pappers.fr
     *
     * @param array $queryParameters {
     *
     * @var string $api_token Clé d'utilisation de l'API
     * @var string $siren SIREN de l'entreprise
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
        return '/document/declaration_beneficiaires_effectifs';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/pdf']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_token', 'siren']);
        $optionsResolver->setRequired(['api_token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('api_token', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws DocumentBeneficiairesEffectifsBadRequestException
     * @throws DocumentBeneficiairesEffectifsUnauthorizedException
     * @throws DocumentBeneficiairesEffectifsForbiddenException
     * @throws DocumentBeneficiairesEffectifsNotFoundException
     * @throws DocumentBeneficiairesEffectifsServiceUnavailableException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new DocumentBeneficiairesEffectifsBadRequestException($response);
        }
        if (401 === $status) {
            throw new DocumentBeneficiairesEffectifsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new DocumentBeneficiairesEffectifsForbiddenException($response);
        }
        if (404 === $status) {
            throw new DocumentBeneficiairesEffectifsNotFoundException($response);
        }
        if (503 === $status) {
            throw new DocumentBeneficiairesEffectifsServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
