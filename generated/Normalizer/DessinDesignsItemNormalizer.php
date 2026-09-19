<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\DessinDesignsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\InvalidDateException;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DessinDesignsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return DessinDesignsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && DessinDesignsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new DessinDesignsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('titre', $data) && null !== $data['titre']) {
            $object->setTitre($data['titre']);
            unset($data['titre']);
        } elseif (\array_key_exists('titre', $data) && null === $data['titre']) {
            $object->setTitre(null);
            unset($data['titre']);
        }
        if (\array_key_exists('ref', $data) && null !== $data['ref']) {
            $object->setRef($data['ref']);
            unset($data['ref']);
        } elseif (\array_key_exists('ref', $data) && null === $data['ref']) {
            $object->setRef(null);
            unset($data['ref']);
        }
        if (\array_key_exists('date_expiration', $data) && null !== $data['date_expiration']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date_expiration']);
            if (false === $date) {
                throw new InvalidDateException($data['date_expiration'], 'Y-m-d');
            }
            $object->setDateExpiration($date->setTime(0, 0, 0));
            unset($data['date_expiration']);
        } elseif (\array_key_exists('date_expiration', $data) && null === $data['date_expiration']) {
            $object->setDateExpiration(null);
            unset($data['date_expiration']);
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
        if ($data->isInitialized('titre') && null !== $data->getTitre()) {
            $dataArray['titre'] = $data->getTitre();
        }
        if ($data->isInitialized('ref') && null !== $data->getRef()) {
            $dataArray['ref'] = $data->getRef();
        }
        if ($data->isInitialized('dateExpiration') && null !== $data->getDateExpiration()) {
            $dataArray['date_expiration'] = $data->getDateExpiration()?->format('Y-m-d');
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
        return [DessinDesignsItem::class => false];
    }
}
