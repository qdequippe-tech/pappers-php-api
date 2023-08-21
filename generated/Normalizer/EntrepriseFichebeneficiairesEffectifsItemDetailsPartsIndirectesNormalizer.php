<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes' === $data::class;
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes();
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
            $object->setDetailsEnIndivision($this->denormalizer->denormalize($data['details_en_indivision'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision', 'json', $context));
            unset($data['details_en_indivision']);
        } elseif (\array_key_exists('details_en_indivision', $data) && null === $data['details_en_indivision']) {
            $object->setDetailsEnIndivision(null);
        }
        if (\array_key_exists('details_en_personne_morale', $data) && null !== $data['details_en_personne_morale']) {
            $object->setDetailsEnPersonneMorale($this->denormalizer->denormalize($data['details_en_personne_morale'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale', 'json', $context));
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

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('pourcentageEnIndivision') && null !== $object->getPourcentageEnIndivision()) {
            $data['pourcentage_en_indivision'] = $object->getPourcentageEnIndivision();
        }
        if ($object->isInitialized('pourcentageEnPersonneMorale') && null !== $object->getPourcentageEnPersonneMorale()) {
            $data['pourcentage_en_personne_morale'] = $object->getPourcentageEnPersonneMorale();
        }
        if ($object->isInitialized('detailsEnIndivision') && null !== $object->getDetailsEnIndivision()) {
            $data['details_en_indivision'] = $this->normalizer->normalize($object->getDetailsEnIndivision(), 'json', $context);
        }
        if ($object->isInitialized('detailsEnPersonneMorale') && null !== $object->getDetailsEnPersonneMorale()) {
            $data['details_en_personne_morale'] = $this->normalizer->normalize($object->getDetailsEnPersonneMorale(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes' => false];
    }
}
