<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseBaseConventionsCollectivesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseBaseConventionsCollectivesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseBaseConventionsCollectivesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseBaseConventionsCollectivesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('pourcentage', $data) && \is_int($data['pourcentage'])) {
            $data['pourcentage'] = (float) $data['pourcentage'];
        }
        if (\array_key_exists('confirmee', $data) && \is_int($data['confirmee'])) {
            $data['confirmee'] = (bool) $data['confirmee'];
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
            unset($data['nom']);
        }
        if (\array_key_exists('idcc', $data) && null !== $data['idcc']) {
            $object->setIdcc($data['idcc']);
            unset($data['idcc']);
        } elseif (\array_key_exists('idcc', $data) && null === $data['idcc']) {
            $object->setIdcc(null);
            unset($data['idcc']);
        }
        if (\array_key_exists('confirmee', $data) && null !== $data['confirmee']) {
            $object->setConfirmee($data['confirmee']);
            unset($data['confirmee']);
        } elseif (\array_key_exists('confirmee', $data) && null === $data['confirmee']) {
            $object->setConfirmee(null);
            unset($data['confirmee']);
        }
        if (\array_key_exists('pourcentage', $data) && null !== $data['pourcentage']) {
            $object->setPourcentage($data['pourcentage']);
            unset($data['pourcentage']);
        } elseif (\array_key_exists('pourcentage', $data) && null === $data['pourcentage']) {
            $object->setPourcentage(null);
            unset($data['pourcentage']);
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
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('idcc') && null !== $data->getIdcc()) {
            $dataArray['idcc'] = $data->getIdcc();
        }
        if ($data->isInitialized('confirmee') && null !== $data->getConfirmee()) {
            $dataArray['confirmee'] = $data->getConfirmee();
        }
        if ($data->isInitialized('pourcentage') && null !== $data->getPourcentage()) {
            $dataArray['pourcentage'] = $data->getPourcentage();
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
        return [EntrepriseBaseConventionsCollectivesItem::class => false];
    }
}
