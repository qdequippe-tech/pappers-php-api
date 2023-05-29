<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Cartographie;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CartographieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\Cartographie' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\Cartographie' === $data::class;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Cartographie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('entreprises', $data) && null !== $data['entreprises']) {
            $values = [];
            foreach ($data['entreprises'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\CartographieEntreprisesItem', 'json', $context);
            }
            $object->setEntreprises($values);
            unset($data['entreprises']);
        } elseif (\array_key_exists('entreprises', $data) && null === $data['entreprises']) {
            $object->setEntreprises(null);
        }
        if (\array_key_exists('personnes', $data) && null !== $data['personnes']) {
            $values_1 = [];
            foreach ($data['personnes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\CartographiePersonnesItem', 'json', $context);
            }
            $object->setPersonnes($values_1);
            unset($data['personnes']);
        } elseif (\array_key_exists('personnes', $data) && null === $data['personnes']) {
            $object->setPersonnes(null);
        }
        if (\array_key_exists('liens_entreprises_personnes', $data) && null !== $data['liens_entreprises_personnes']) {
            $values_2 = [];
            foreach ($data['liens_entreprises_personnes'] as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setLiensEntreprisesPersonnes($values_2);
            unset($data['liens_entreprises_personnes']);
        } elseif (\array_key_exists('liens_entreprises_personnes', $data) && null === $data['liens_entreprises_personnes']) {
            $object->setLiensEntreprisesPersonnes(null);
        }
        if (\array_key_exists('liens_entreprises_entreprises', $data) && null !== $data['liens_entreprises_entreprises']) {
            $values_4 = [];
            foreach ($data['liens_entreprises_entreprises'] as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $value_5;
                }
                $values_4[] = $values_5;
            }
            $object->setLiensEntreprisesEntreprises($values_4);
            unset($data['liens_entreprises_entreprises']);
        } elseif (\array_key_exists('liens_entreprises_entreprises', $data) && null === $data['liens_entreprises_entreprises']) {
            $object->setLiensEntreprisesEntreprises(null);
        }
        if (\array_key_exists('modifications_effectuees', $data) && null !== $data['modifications_effectuees']) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['modifications_effectuees'] as $key => $value_6) {
                $values_6[$key] = $value_6;
            }
            $object->setModificationsEffectuees($values_6);
            unset($data['modifications_effectuees']);
        } elseif (\array_key_exists('modifications_effectuees', $data) && null === $data['modifications_effectuees']) {
            $object->setModificationsEffectuees(null);
        }
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_7;
            }
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
            $values = [];
            foreach ($object->getEntreprises() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['entreprises'] = $values;
        }
        if ($object->isInitialized('personnes') && null !== $object->getPersonnes()) {
            $values_1 = [];
            foreach ($object->getPersonnes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['personnes'] = $values_1;
        }
        if ($object->isInitialized('liensEntreprisesPersonnes') && null !== $object->getLiensEntreprisesPersonnes()) {
            $values_2 = [];
            foreach ($object->getLiensEntreprisesPersonnes() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data['liens_entreprises_personnes'] = $values_2;
        }
        if ($object->isInitialized('liensEntreprisesEntreprises') && null !== $object->getLiensEntreprisesEntreprises()) {
            $values_4 = [];
            foreach ($object->getLiensEntreprisesEntreprises() as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $value_5;
                }
                $values_4[] = $values_5;
            }
            $data['liens_entreprises_entreprises'] = $values_4;
        }
        if ($object->isInitialized('modificationsEffectuees') && null !== $object->getModificationsEffectuees()) {
            $values_6 = [];
            foreach ($object->getModificationsEffectuees() as $key => $value_6) {
                $values_6[$key] = $value_6;
            }
            $data['modifications_effectuees'] = $values_6;
        }
        foreach ($object as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_7;
            }
        }

        return $data;
    }
}
