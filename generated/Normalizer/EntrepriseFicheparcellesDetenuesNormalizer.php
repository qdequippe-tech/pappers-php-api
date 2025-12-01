<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheparcellesDetenues;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheparcellesDetenuesResultatsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheparcellesDetenuesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheparcellesDetenues::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheparcellesDetenues::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFicheparcellesDetenues();
        if (\array_key_exists('incomplet', $data) && \is_int($data['incomplet'])) {
            $data['incomplet'] = (bool) $data['incomplet'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resultats', $data) && null !== $data['resultats']) {
            $values = [];
            foreach ($data['resultats'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EntrepriseFicheparcellesDetenuesResultatsItem::class, 'json', $context);
            }
            $object->setResultats($values);
            unset($data['resultats']);
        } elseif (\array_key_exists('resultats', $data) && null === $data['resultats']) {
            $object->setResultats(null);
        }
        if (\array_key_exists('total', $data) && null !== $data['total']) {
            $object->setTotal($data['total']);
            unset($data['total']);
        } elseif (\array_key_exists('total', $data) && null === $data['total']) {
            $object->setTotal(null);
        }
        if (\array_key_exists('incomplet', $data) && null !== $data['incomplet']) {
            $object->setIncomplet($data['incomplet']);
            unset($data['incomplet']);
        } elseif (\array_key_exists('incomplet', $data) && null === $data['incomplet']) {
            $object->setIncomplet(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('resultats') && null !== $data->getResultats()) {
            $values = [];
            foreach ($data->getResultats() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['resultats'] = $values;
        }
        if ($data->isInitialized('total') && null !== $data->getTotal()) {
            $dataArray['total'] = $data->getTotal();
        }
        if ($data->isInitialized('incomplet') && null !== $data->getIncomplet()) {
            $dataArray['incomplet'] = $data->getIncomplet();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFicheparcellesDetenues::class => false];
    }
}
