<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Bodacc;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheproceduresCollectivesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheproceduresCollectivesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheproceduresCollectivesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheproceduresCollectivesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFicheproceduresCollectivesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('date_debut', $data) && null !== $data['date_debut']) {
            $object->setDateDebut($data['date_debut']);
            unset($data['date_debut']);
        } elseif (\array_key_exists('date_debut', $data) && null === $data['date_debut']) {
            $object->setDateDebut(null);
        }
        if (\array_key_exists('date_fin', $data) && null !== $data['date_fin']) {
            $object->setDateFin($data['date_fin']);
            unset($data['date_fin']);
        } elseif (\array_key_exists('date_fin', $data) && null === $data['date_fin']) {
            $object->setDateFin(null);
        }
        if (\array_key_exists('publications_bodacc', $data) && null !== $data['publications_bodacc']) {
            $values = [];
            foreach ($data['publications_bodacc'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Bodacc::class, 'json', $context);
            }
            $object->setPublicationsBodacc($values);
            unset($data['publications_bodacc']);
        } elseif (\array_key_exists('publications_bodacc', $data) && null === $data['publications_bodacc']) {
            $object->setPublicationsBodacc(null);
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
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['date_debut'] = $data->getDateDebut();
        }
        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['date_fin'] = $data->getDateFin();
        }
        if ($data->isInitialized('publicationsBodacc') && null !== $data->getPublicationsBodacc()) {
            $values = [];
            foreach ($data->getPublicationsBodacc() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['publications_bodacc'] = $values;
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
        return [EntrepriseFicheproceduresCollectivesItem::class => false];
    }
}
