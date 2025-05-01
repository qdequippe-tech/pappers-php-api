<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemEvenementsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichemarquesItemEvenementsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichemarquesItemEvenementsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichemarquesItemEvenementsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichemarquesItemEvenementsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('identifiant_evenement', $data) && null !== $data['identifiant_evenement']) {
            $object->setIdentifiantEvenement($data['identifiant_evenement']);
            unset($data['identifiant_evenement']);
        } elseif (\array_key_exists('identifiant_evenement', $data) && null === $data['identifiant_evenement']) {
            $object->setIdentifiantEvenement(null);
        }
        if (\array_key_exists('reference', $data) && null !== $data['reference']) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        } elseif (\array_key_exists('reference', $data) && null === $data['reference']) {
            $object->setReference(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('numero_bopi', $data) && null !== $data['numero_bopi']) {
            $object->setNumeroBopi($data['numero_bopi']);
            unset($data['numero_bopi']);
        } elseif (\array_key_exists('numero_bopi', $data) && null === $data['numero_bopi']) {
            $object->setNumeroBopi(null);
        }
        if (\array_key_exists('date_bopi', $data) && null !== $data['date_bopi']) {
            $object->setDateBopi($data['date_bopi']);
            unset($data['date_bopi']);
        } elseif (\array_key_exists('date_bopi', $data) && null === $data['date_bopi']) {
            $object->setDateBopi(null);
        }
        if (\array_key_exists('beneficiaire', $data) && null !== $data['beneficiaire']) {
            $object->setBeneficiaire($data['beneficiaire']);
            unset($data['beneficiaire']);
        } elseif (\array_key_exists('beneficiaire', $data) && null === $data['beneficiaire']) {
            $object->setBeneficiaire(null);
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
        if ($data->isInitialized('identifiantEvenement') && null !== $data->getIdentifiantEvenement()) {
            $dataArray['identifiant_evenement'] = $data->getIdentifiantEvenement();
        }
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $dataArray['reference'] = $data->getReference();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('numeroBopi') && null !== $data->getNumeroBopi()) {
            $dataArray['numero_bopi'] = $data->getNumeroBopi();
        }
        if ($data->isInitialized('dateBopi') && null !== $data->getDateBopi()) {
            $dataArray['date_bopi'] = $data->getDateBopi();
        }
        if ($data->isInitialized('beneficiaire') && null !== $data->getBeneficiaire()) {
            $dataArray['beneficiaire'] = $data->getBeneficiaire();
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
        return [EntrepriseFichemarquesItemEvenementsItem::class => false];
    }
}
