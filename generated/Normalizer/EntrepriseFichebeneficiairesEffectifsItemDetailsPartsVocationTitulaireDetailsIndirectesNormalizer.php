<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes();
        if (\array_key_exists('pourcentage_en_indivision', $data) && \is_int($data['pourcentage_en_indivision'])) {
            $data['pourcentage_en_indivision'] = (float) $data['pourcentage_en_indivision'];
        }
        if (\array_key_exists('pourcentage_en_personne_morale', $data) && \is_int($data['pourcentage_en_personne_morale'])) {
            $data['pourcentage_en_personne_morale'] = (float) $data['pourcentage_en_personne_morale'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pourcentage_en_indivision', $data) && null !== $data['pourcentage_en_indivision']) {
            $object->setPourcentageEnIndivision($data['pourcentage_en_indivision']);
            unset($data['pourcentage_en_indivision']);
        } elseif (\array_key_exists('pourcentage_en_indivision', $data) && null === $data['pourcentage_en_indivision']) {
            $object->setPourcentageEnIndivision(null);
        }
        if (\array_key_exists('pourcentage_en_personne_morale', $data) && null !== $data['pourcentage_en_personne_morale']) {
            $object->setPourcentageEnPersonneMorale($data['pourcentage_en_personne_morale']);
            unset($data['pourcentage_en_personne_morale']);
        } elseif (\array_key_exists('pourcentage_en_personne_morale', $data) && null === $data['pourcentage_en_personne_morale']) {
            $object->setPourcentageEnPersonneMorale(null);
        }
        if (\array_key_exists('details_en_indivision', $data) && null !== $data['details_en_indivision']) {
            $object->setDetailsEnIndivision($this->denormalizer->denormalize($data['details_en_indivision'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision::class, 'json', $context));
            unset($data['details_en_indivision']);
        } elseif (\array_key_exists('details_en_indivision', $data) && null === $data['details_en_indivision']) {
            $object->setDetailsEnIndivision(null);
        }
        if (\array_key_exists('details_en_personne_morale', $data) && null !== $data['details_en_personne_morale']) {
            $object->setDetailsEnPersonneMorale($this->denormalizer->denormalize($data['details_en_personne_morale'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class, 'json', $context));
            unset($data['details_en_personne_morale']);
        } elseif (\array_key_exists('details_en_personne_morale', $data) && null === $data['details_en_personne_morale']) {
            $object->setDetailsEnPersonneMorale(null);
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
        if ($data->isInitialized('pourcentageEnIndivision') && null !== $data->getPourcentageEnIndivision()) {
            $dataArray['pourcentage_en_indivision'] = $data->getPourcentageEnIndivision();
        }
        if ($data->isInitialized('pourcentageEnPersonneMorale') && null !== $data->getPourcentageEnPersonneMorale()) {
            $dataArray['pourcentage_en_personne_morale'] = $data->getPourcentageEnPersonneMorale();
        }
        if ($data->isInitialized('detailsEnIndivision') && null !== $data->getDetailsEnIndivision()) {
            $dataArray['details_en_indivision'] = $this->normalizer->normalize($data->getDetailsEnIndivision(), 'json', $context);
        }
        if ($data->isInitialized('detailsEnPersonneMorale') && null !== $data->getDetailsEnPersonneMorale()) {
            $dataArray['details_en_personne_morale'] = $this->normalizer->normalize($data->getDetailsEnPersonneMorale(), 'json', $context);
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
        return [EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class => false];
    }
}
