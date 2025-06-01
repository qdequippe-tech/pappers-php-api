<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire();
        if (\array_key_exists('pourcentage_directes', $data) && \is_int($data['pourcentage_directes'])) {
            $data['pourcentage_directes'] = (float) $data['pourcentage_directes'];
        }
        if (\array_key_exists('pourcentage_indirectes', $data) && \is_int($data['pourcentage_indirectes'])) {
            $data['pourcentage_indirectes'] = (float) $data['pourcentage_indirectes'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pourcentage_directes', $data) && null !== $data['pourcentage_directes']) {
            $object->setPourcentageDirectes($data['pourcentage_directes']);
            unset($data['pourcentage_directes']);
        } elseif (\array_key_exists('pourcentage_directes', $data) && null === $data['pourcentage_directes']) {
            $object->setPourcentageDirectes(null);
        }
        if (\array_key_exists('pourcentage_indirectes', $data) && null !== $data['pourcentage_indirectes']) {
            $object->setPourcentageIndirectes($data['pourcentage_indirectes']);
            unset($data['pourcentage_indirectes']);
        } elseif (\array_key_exists('pourcentage_indirectes', $data) && null === $data['pourcentage_indirectes']) {
            $object->setPourcentageIndirectes(null);
        }
        if (\array_key_exists('details_directes', $data) && null !== $data['details_directes']) {
            $object->setDetailsDirectes($this->denormalizer->denormalize($data['details_directes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class, 'json', $context));
            unset($data['details_directes']);
        } elseif (\array_key_exists('details_directes', $data) && null === $data['details_directes']) {
            $object->setDetailsDirectes(null);
        }
        if (\array_key_exists('details_indirectes', $data) && null !== $data['details_indirectes']) {
            $object->setDetailsIndirectes($this->denormalizer->denormalize($data['details_indirectes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class, 'json', $context));
            unset($data['details_indirectes']);
        } elseif (\array_key_exists('details_indirectes', $data) && null === $data['details_indirectes']) {
            $object->setDetailsIndirectes(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('pourcentageDirectes') && null !== $data->getPourcentageDirectes()) {
            $dataArray['pourcentage_directes'] = $data->getPourcentageDirectes();
        }
        if ($data->isInitialized('pourcentageIndirectes') && null !== $data->getPourcentageIndirectes()) {
            $dataArray['pourcentage_indirectes'] = $data->getPourcentageIndirectes();
        }
        if ($data->isInitialized('detailsDirectes') && null !== $data->getDetailsDirectes()) {
            $dataArray['details_directes'] = $this->normalizer->normalize($data->getDetailsDirectes(), 'json', $context);
        }
        if ($data->isInitialized('detailsIndirectes') && null !== $data->getDetailsIndirectes()) {
            $dataArray['details_indirectes'] = $this->normalizer->normalize($data->getDetailsIndirectes(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => false];
    }
}
