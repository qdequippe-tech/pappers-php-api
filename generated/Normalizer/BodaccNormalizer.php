<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Bodacc;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BodaccNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Bodacc::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Bodacc::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (\array_key_exists('type', $data) && 'Création' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccCreation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Immatriculation' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccImmatriculation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Modification' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccModification', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Vente' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccVente', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Achat' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccAchat', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Radiation' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccRadiation', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Procédure collective' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccProcedureCollective', $format, $context);
        }
        if (\array_key_exists('type', $data) && 'Dépôt des comptes' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Bodacc();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
            $object->setNumeroParution(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
            $object->setNumeroAnnonce(null);
        }
        if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
            $object->setBodacc(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
            $object->setGreffe(null);
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
        if (null !== $data->getType() && 'Création' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Immatriculation' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Modification' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Vente' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Achat' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Radiation' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Procédure collective' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() && 'Dépôt des comptes' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if ($data->isInitialized('numeroParution') && null !== $data->getNumeroParution()) {
            $dataArray['numero_parution'] = $data->getNumeroParution();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('numeroAnnonce') && null !== $data->getNumeroAnnonce()) {
            $dataArray['numero_annonce'] = $data->getNumeroAnnonce();
        }
        if ($data->isInitialized('bodacc') && null !== $data->getBodacc()) {
            $dataArray['bodacc'] = $data->getBodacc();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('greffe') && null !== $data->getGreffe()) {
            $dataArray['greffe'] = $data->getGreffe();
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
        return [Bodacc::class => false];
    }
}
