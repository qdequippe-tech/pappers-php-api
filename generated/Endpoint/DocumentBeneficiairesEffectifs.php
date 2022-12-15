<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Endpoint;

class DocumentBeneficiairesEffectifs extends \Qdequippe\Pappers\Api\Runtime\Client\BaseEndpoint implements \Qdequippe\Pappers\Api\Runtime\Client\Endpoint
{
    use \Qdequippe\Pappers\Api\Runtime\Client\EndpointTrait;

    /**
     * Vous devez fournir le SIREN. Le document vous sera envoyé au format PDF.
     *
     * Seules les autorités de contrôle (<a rel='noreferrer noopener' target='_blank' href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000041578272/'>article R. 561-57 du Code monétaire et financier en dénombre 18</a>) et les personnes assujetties à la lutte contre le blanchiment des capitaux et le financement du terrorisme (<a rel='noreferrer noopener' target='_blank' href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000042648575/'>article L. 561-2 du code monétaire et financier</a>) peuvent accéder à ces informations.
     *
     * Pour pouvoir utiliser cette route veuillez nous contacter au préalable à api@pappers.fr
     *
     * @param array $queryParameters {
     *
     *     @var string $api_token Clé d'utilisation de l'API
     *     @var string $siren SIREN de l'entreprise
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
        return '/document/declaration_beneficiaires_effectifs';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/pdf']];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
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
     * {@inheritdoc}
     *
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsBadRequestException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsUnauthorizedException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsForbiddenException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsNotFoundException
     * @throws \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsServiceUnavailableException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsBadRequestException();
        }
        if (401 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsForbiddenException();
        }
        if (404 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsNotFoundException();
        }
        if (503 === $status) {
            throw new \Qdequippe\Pappers\Api\Exception\DocumentBeneficiairesEffectifsServiceUnavailableException();
        }
    }
}
