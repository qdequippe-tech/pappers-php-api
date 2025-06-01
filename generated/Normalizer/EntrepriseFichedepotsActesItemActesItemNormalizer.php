<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItemActesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichedepotsActesItemActesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichedepotsActesItemActesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichedepotsActesItemActesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichedepotsActesItemActesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('decision', $data) && null !== $data['decision']) {
            $object->setDecision($data['decision']);
            unset($data['decision']);
        } elseif (\array_key_exists('decision', $data) && null === $data['decision']) {
            $object->setDecision(null);
        }
        if (\array_key_exists('date_acte', $data) && null !== $data['date_acte']) {
            $object->setDateActe($data['date_acte']);
            unset($data['date_acte']);
        } elseif (\array_key_exists('date_acte', $data) && null === $data['date_acte']) {
            $object->setDateActe(null);
        }
        if (\array_key_exists('date_acte_formate', $data) && null !== $data['date_acte_formate']) {
            $object->setDateActeFormate($data['date_acte_formate']);
            unset($data['date_acte_formate']);
        } elseif (\array_key_exists('date_acte_formate', $data) && null === $data['date_acte_formate']) {
            $object->setDateActeFormate(null);
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
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('decision') && null !== $data->getDecision()) {
            $dataArray['decision'] = $data->getDecision();
        }
        if ($data->isInitialized('dateActe') && null !== $data->getDateActe()) {
            $dataArray['date_acte'] = $data->getDateActe();
        }
        if ($data->isInitialized('dateActeFormate') && null !== $data->getDateActeFormate()) {
            $dataArray['date_acte_formate'] = $data->getDateActeFormate();
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
        return [EntrepriseFichedepotsActesItemActesItem::class => false];
    }
}
