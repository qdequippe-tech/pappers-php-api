<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Cartographie;
use Qdequippe\Pappers\Api\Model\CartographieEntreprisesItem;
use Qdequippe\Pappers\Api\Model\CartographiePersonnesItem;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Cartographie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Cartographie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
                $values[] = $this->denormalizer->denormalize($value, CartographieEntreprisesItem::class, 'json', $context);
            }
            $object->setEntreprises($values);
            unset($data['entreprises']);
        } elseif (\array_key_exists('entreprises', $data) && null === $data['entreprises']) {
            $object->setEntreprises(null);
        }
        if (\array_key_exists('personnes', $data) && null !== $data['personnes']) {
            $values_1 = [];
            foreach ($data['personnes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, CartographiePersonnesItem::class, 'json', $context);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('entreprises') && null !== $data->getEntreprises()) {
            $values = [];
            foreach ($data->getEntreprises() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['entreprises'] = $values;
        }
        if ($data->isInitialized('personnes') && null !== $data->getPersonnes()) {
            $values_1 = [];
            foreach ($data->getPersonnes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['personnes'] = $values_1;
        }
        if ($data->isInitialized('liensEntreprisesPersonnes') && null !== $data->getLiensEntreprisesPersonnes()) {
            $values_2 = [];
            foreach ($data->getLiensEntreprisesPersonnes() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $dataArray['liens_entreprises_personnes'] = $values_2;
        }
        if ($data->isInitialized('liensEntreprisesEntreprises') && null !== $data->getLiensEntreprisesEntreprises()) {
            $values_4 = [];
            foreach ($data->getLiensEntreprisesEntreprises() as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $value_5;
                }
                $values_4[] = $values_5;
            }
            $dataArray['liens_entreprises_entreprises'] = $values_4;
        }
        if ($data->isInitialized('modificationsEffectuees') && null !== $data->getModificationsEffectuees()) {
            $values_6 = [];
            foreach ($data->getModificationsEffectuees() as $key => $value_6) {
                $values_6[$key] = $value_6;
            }
            $dataArray['modifications_effectuees'] = $values_6;
        }
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Cartographie::class => false];
    }
}
