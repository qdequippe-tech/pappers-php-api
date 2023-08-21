<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemEvenementsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichemarquesItemEvenementsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemEvenementsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemEvenementsItem' === $data::class;
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
        $object = new EntrepriseFichemarquesItemEvenementsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('identifiant_evenement', $data) && null !== $data['identifiant_evenement']) {
            $object->setIdentifiantEvenement($data['identifiant_evenement']);
            unset($data['identifiant_evenement']);
        } elseif (\array_key_exists('identifiant_evenement', $data) && null === $data['identifiant_evenement']) {
            $object->setIdentifiantEvenement(null);
        }
        if (\array_key_exists('reference', $data) && null !== $data['reference']) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        } elseif (\array_key_exists('reference', $data) && null === $data['reference']) {
            $object->setReference(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('numero_bopi', $data) && null !== $data['numero_bopi']) {
            $object->setNumeroBopi($data['numero_bopi']);
            unset($data['numero_bopi']);
        } elseif (\array_key_exists('numero_bopi', $data) && null === $data['numero_bopi']) {
            $object->setNumeroBopi(null);
        }
        if (\array_key_exists('date_bopi', $data) && null !== $data['date_bopi']) {
            $object->setDateBopi($data['date_bopi']);
            unset($data['date_bopi']);
        } elseif (\array_key_exists('date_bopi', $data) && null === $data['date_bopi']) {
            $object->setDateBopi(null);
        }
        if (\array_key_exists('beneficiaire', $data) && null !== $data['beneficiaire']) {
            $object->setBeneficiaire($data['beneficiaire']);
            unset($data['beneficiaire']);
        } elseif (\array_key_exists('beneficiaire', $data) && null === $data['beneficiaire']) {
            $object->setBeneficiaire(null);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('identifiantEvenement') && null !== $object->getIdentifiantEvenement()) {
            $data['identifiant_evenement'] = $object->getIdentifiantEvenement();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('numeroBopi') && null !== $object->getNumeroBopi()) {
            $data['numero_bopi'] = $object->getNumeroBopi();
        }
        if ($object->isInitialized('dateBopi') && null !== $object->getDateBopi()) {
            $data['date_bopi'] = $object->getDateBopi();
        }
        if ($object->isInitialized('beneficiaire') && null !== $object->getBeneficiaire()) {
            $data['beneficiaire'] = $object->getBeneficiaire();
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
        return ['Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemEvenementsItem' => false];
    }
}
