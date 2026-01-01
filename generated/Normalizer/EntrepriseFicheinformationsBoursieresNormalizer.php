<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheinformationsBoursieres;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheinformationsBoursieresDocumentsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheinformationsBoursieresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheinformationsBoursieres::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheinformationsBoursieres::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFicheinformationsBoursieres();
        if (\array_key_exists('cac40', $data) && \is_int($data['cac40'])) {
            $data['cac40'] = (bool) $data['cac40'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cac40', $data) && null !== $data['cac40']) {
            $object->setCac40($data['cac40']);
            unset($data['cac40']);
        } elseif (\array_key_exists('cac40', $data) && null === $data['cac40']) {
            $object->setCac40(null);
        }
        if (\array_key_exists('isin', $data) && null !== $data['isin']) {
            $values = [];
            foreach ($data['isin'] as $value) {
                $values[] = $value;
            }
            $object->setIsin($values);
            unset($data['isin']);
        } elseif (\array_key_exists('isin', $data) && null === $data['isin']) {
            $object->setIsin(null);
        }
        if (\array_key_exists('symboles', $data) && null !== $data['symboles']) {
            $values_1 = [];
            foreach ($data['symboles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSymboles($values_1);
            unset($data['symboles']);
        } elseif (\array_key_exists('symboles', $data) && null === $data['symboles']) {
            $object->setSymboles(null);
        }
        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values_2 = [];
            foreach ($data['documents'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseFicheinformationsBoursieresDocumentsItem::class, 'json', $context);
            }
            $object->setDocuments($values_2);
            unset($data['documents']);
        } elseif (\array_key_exists('documents', $data) && null === $data['documents']) {
            $object->setDocuments(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cac40')) {
            $dataArray['cac40'] = $data->getCac40();
        }
        if ($data->isInitialized('isin') && null !== $data->getIsin()) {
            $values = [];
            foreach ($data->getIsin() as $value) {
                $values[] = $value;
            }
            $dataArray['isin'] = $values;
        }
        if ($data->isInitialized('symboles') && null !== $data->getSymboles()) {
            $values_1 = [];
            foreach ($data->getSymboles() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['symboles'] = $values_1;
        }
        if ($data->isInitialized('documents') && null !== $data->getDocuments()) {
            $values_2 = [];
            foreach ($data->getDocuments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['documents'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFicheinformationsBoursieres::class => false];
    }
}
