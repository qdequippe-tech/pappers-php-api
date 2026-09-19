<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale;
use Qdequippe\Pappers\Api\Runtime\JsonObject;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectes::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectes::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('pourcentage_en_indivision', $data) && \is_int($data['pourcentage_en_indivision'])) {
            $data['pourcentage_en_indivision'] = (float) $data['pourcentage_en_indivision'];
        }
        if (\array_key_exists('pourcentage_en_personne_morale', $data) && \is_int($data['pourcentage_en_personne_morale'])) {
            $data['pourcentage_en_personne_morale'] = (float) $data['pourcentage_en_personne_morale'];
        }
        if (\array_key_exists('pourcentage_en_indivision', $data) && null !== $data['pourcentage_en_indivision']) {
            $object->setPourcentageEnIndivision($data['pourcentage_en_indivision']);
            unset($data['pourcentage_en_indivision']);
        } elseif (\array_key_exists('pourcentage_en_indivision', $data) && null === $data['pourcentage_en_indivision']) {
            $object->setPourcentageEnIndivision(null);
            unset($data['pourcentage_en_indivision']);
        }
        if (\array_key_exists('pourcentage_en_personne_morale', $data) && null !== $data['pourcentage_en_personne_morale']) {
            $object->setPourcentageEnPersonneMorale($data['pourcentage_en_personne_morale']);
            unset($data['pourcentage_en_personne_morale']);
        } elseif (\array_key_exists('pourcentage_en_personne_morale', $data) && null === $data['pourcentage_en_personne_morale']) {
            $object->setPourcentageEnPersonneMorale(null);
            unset($data['pourcentage_en_personne_morale']);
        }
        if (\array_key_exists('details_en_indivision', $data) && null !== $data['details_en_indivision']) {
            $object->setDetailsEnIndivision($this->denormalizer->denormalize($data['details_en_indivision'], EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision::class, 'json', $context));
            unset($data['details_en_indivision']);
        } elseif (\array_key_exists('details_en_indivision', $data) && null === $data['details_en_indivision']) {
            $object->setDetailsEnIndivision(null);
            unset($data['details_en_indivision']);
        }
        if (\array_key_exists('details_en_personne_morale', $data) && null !== $data['details_en_personne_morale']) {
            $object->setDetailsEnPersonneMorale($this->denormalizer->denormalize($data['details_en_personne_morale'], EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale::class, 'json', $context));
            unset($data['details_en_personne_morale']);
        } elseif (\array_key_exists('details_en_personne_morale', $data) && null === $data['details_en_personne_morale']) {
            $object->setDetailsEnPersonneMorale(null);
            unset($data['details_en_personne_morale']);
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
            $dataArray['details_en_indivision'] = null === $data->getDetailsEnIndivision() ? null : new JsonObject($this->normalizer->normalize($data->getDetailsEnIndivision(), 'json', $context));
        }
        if ($data->isInitialized('detailsEnPersonneMorale') && null !== $data->getDetailsEnPersonneMorale()) {
            $dataArray['details_en_personne_morale'] = null === $data->getDetailsEnPersonneMorale() ? null : new JsonObject($this->normalizer->normalize($data->getDetailsEnPersonneMorale(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectes::class => false];
    }
}
