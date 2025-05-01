<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationVeilleChiffreAffairesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NotificationVeilleChiffreAffairesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return NotificationVeilleChiffreAffairesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && NotificationVeilleChiffreAffairesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NotificationVeilleChiffreAffairesItem();
        if (\array_key_exists('valeur', $data) && \is_int($data['valeur'])) {
            $data['valeur'] = (float) $data['valeur'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
            $object->setValeur($data['valeur']);
            unset($data['valeur']);
        } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
            $object->setValeur(null);
        }
        if (\array_key_exists('annee_cloture', $data) && null !== $data['annee_cloture']) {
            $object->setAnneeCloture($data['annee_cloture']);
            unset($data['annee_cloture']);
        } elseif (\array_key_exists('annee_cloture', $data) && null === $data['annee_cloture']) {
            $object->setAnneeCloture(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('type_comptes', $data) && null !== $data['type_comptes']) {
            $object->setTypeComptes($data['type_comptes']);
            unset($data['type_comptes']);
        } elseif (\array_key_exists('type_comptes', $data) && null === $data['type_comptes']) {
            $object->setTypeComptes(null);
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
        if ($data->isInitialized('valeur') && null !== $data->getValeur()) {
            $dataArray['valeur'] = $data->getValeur();
        }
        if ($data->isInitialized('anneeCloture') && null !== $data->getAnneeCloture()) {
            $dataArray['annee_cloture'] = $data->getAnneeCloture();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('typeComptes') && null !== $data->getTypeComptes()) {
            $dataArray['type_comptes'] = $data->getTypeComptes();
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
        return [NotificationVeilleChiffreAffairesItem::class => false];
    }
}
