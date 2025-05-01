<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\LabelsBase;
use Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LabelsBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LabelsBase::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LabelsBase::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new LabelsBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }
        if (\array_key_exists('certificats', $data) && null !== $data['certificats']) {
            $values = [];
            foreach ($data['certificats'] as $value) {
                $values[] = $value;
            }
            $object->setCertificats($values);
            unset($data['certificats']);
        } elseif (\array_key_exists('certificats', $data) && null === $data['certificats']) {
            $object->setCertificats(null);
        }
        if (\array_key_exists('specialites', $data) && null !== $data['specialites']) {
            $values_1 = [];
            foreach ($data['specialites'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSpecialites($values_1);
            unset($data['specialites']);
        } elseif (\array_key_exists('specialites', $data) && null === $data['specialites']) {
            $object->setSpecialites(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $values_2 = [];
            foreach ($data['notes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNotes($values_2);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('numero_immatriculation', $data) && null !== $data['numero_immatriculation']) {
            $object->setNumeroImmatriculation($data['numero_immatriculation']);
            unset($data['numero_immatriculation']);
        } elseif (\array_key_exists('numero_immatriculation', $data) && null === $data['numero_immatriculation']) {
            $object->setNumeroImmatriculation(null);
        }
        if (\array_key_exists('inscriptions', $data) && null !== $data['inscriptions']) {
            $values_3 = [];
            foreach ($data['inscriptions'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, LabelsBaseInscriptionsItem::class, 'json', $context);
            }
            $object->setInscriptions($values_3);
            unset($data['inscriptions']);
        } elseif (\array_key_exists('inscriptions', $data) && null === $data['inscriptions']) {
            $object->setInscriptions(null);
        }
        if (\array_key_exists('mentions', $data) && null !== $data['mentions']) {
            $values_4 = [];
            foreach ($data['mentions'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setMentions($values_4);
            unset($data['mentions']);
        } elseif (\array_key_exists('mentions', $data) && null === $data['mentions']) {
            $object->setMentions(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if ($data->isInitialized('certificats') && null !== $data->getCertificats()) {
            $values = [];
            foreach ($data->getCertificats() as $value) {
                $values[] = $value;
            }
            $dataArray['certificats'] = $values;
        }
        if ($data->isInitialized('specialites') && null !== $data->getSpecialites()) {
            $values_1 = [];
            foreach ($data->getSpecialites() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['specialites'] = $values_1;
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $values_2 = [];
            foreach ($data->getNotes() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['notes'] = $values_2;
        }
        if ($data->isInitialized('numeroImmatriculation') && null !== $data->getNumeroImmatriculation()) {
            $dataArray['numero_immatriculation'] = $data->getNumeroImmatriculation();
        }
        if ($data->isInitialized('inscriptions') && null !== $data->getInscriptions()) {
            $values_3 = [];
            foreach ($data->getInscriptions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['inscriptions'] = $values_3;
        }
        if ($data->isInitialized('mentions') && null !== $data->getMentions()) {
            $values_4 = [];
            foreach ($data->getMentions() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['mentions'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LabelsBase::class => false];
    }
}
