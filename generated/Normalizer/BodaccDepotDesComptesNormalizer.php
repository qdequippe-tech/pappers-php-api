<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BodaccDepotDesComptesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return BodaccDepotDesComptes::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && BodaccDepotDesComptes::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new BodaccDepotDesComptes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
            $object->setNumeroParution(null);
            unset($data['numero_parution']);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
            unset($data['date']);
        }
        if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
            $object->setNumeroAnnonce(null);
            unset($data['numero_annonce']);
        }
        if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
            $object->setBodacc(null);
            unset($data['bodacc']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
            $object->setGreffe(null);
            unset($data['greffe']);
        }
        if (\array_key_exists('date_cloture', $data) && null !== $data['date_cloture']) {
            $object->setDateCloture($data['date_cloture']);
            unset($data['date_cloture']);
        } elseif (\array_key_exists('date_cloture', $data) && null === $data['date_cloture']) {
            $object->setDateCloture(null);
            unset($data['date_cloture']);
        }
        if (\array_key_exists('type_depot', $data) && null !== $data['type_depot']) {
            $object->setTypeDepot($data['type_depot']);
            unset($data['type_depot']);
        } elseif (\array_key_exists('type_depot', $data) && null === $data['type_depot']) {
            $object->setTypeDepot(null);
            unset($data['type_depot']);
        }
        if (\array_key_exists('descriptif', $data) && null !== $data['descriptif']) {
            $object->setDescriptif($data['descriptif']);
            unset($data['descriptif']);
        } elseif (\array_key_exists('descriptif', $data) && null === $data['descriptif']) {
            $object->setDescriptif(null);
            unset($data['descriptif']);
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
        if ($data->isInitialized('dateCloture') && null !== $data->getDateCloture()) {
            $dataArray['date_cloture'] = $data->getDateCloture();
        }
        if ($data->isInitialized('typeDepot') && null !== $data->getTypeDepot()) {
            $dataArray['type_depot'] = $data->getTypeDepot();
        }
        if ($data->isInitialized('descriptif') && null !== $data->getDescriptif()) {
            $dataArray['descriptif'] = $data->getDescriptif();
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
        return [BodaccDepotDesComptes::class => false];
    }
}
