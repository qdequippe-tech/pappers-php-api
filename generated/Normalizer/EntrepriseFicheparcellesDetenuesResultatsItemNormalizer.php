<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheparcellesDetenuesResultatsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheparcellesDetenuesResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheparcellesDetenuesResultatsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheparcellesDetenuesResultatsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFicheparcellesDetenuesResultatsItem();
        if (\array_key_exists('numero_voie', $data) && \is_int($data['numero_voie'])) {
            $data['numero_voie'] = (float) $data['numero_voie'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('parcelle_cadastrale', $data) && null !== $data['parcelle_cadastrale']) {
            $object->setParcelleCadastrale($data['parcelle_cadastrale']);
            unset($data['parcelle_cadastrale']);
        } elseif (\array_key_exists('parcelle_cadastrale', $data) && null === $data['parcelle_cadastrale']) {
            $object->setParcelleCadastrale(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('numero_voie', $data) && null !== $data['numero_voie']) {
            $object->setNumeroVoie($data['numero_voie']);
            unset($data['numero_voie']);
        } elseif (\array_key_exists('numero_voie', $data) && null === $data['numero_voie']) {
            $object->setNumeroVoie(null);
        }
        if (\array_key_exists('type_voie', $data) && null !== $data['type_voie']) {
            $object->setTypeVoie($data['type_voie']);
            unset($data['type_voie']);
        } elseif (\array_key_exists('type_voie', $data) && null === $data['type_voie']) {
            $object->setTypeVoie(null);
        }
        if (\array_key_exists('libelle_voie', $data) && null !== $data['libelle_voie']) {
            $object->setLibelleVoie($data['libelle_voie']);
            unset($data['libelle_voie']);
        } elseif (\array_key_exists('libelle_voie', $data) && null === $data['libelle_voie']) {
            $object->setLibelleVoie(null);
        }
        if (\array_key_exists('code_commune', $data) && null !== $data['code_commune']) {
            $object->setCodeCommune($data['code_commune']);
            unset($data['code_commune']);
        } elseif (\array_key_exists('code_commune', $data) && null === $data['code_commune']) {
            $object->setCodeCommune(null);
        }
        if (\array_key_exists('nom_commune', $data) && null !== $data['nom_commune']) {
            $object->setNomCommune($data['nom_commune']);
            unset($data['nom_commune']);
        } elseif (\array_key_exists('nom_commune', $data) && null === $data['nom_commune']) {
            $object->setNomCommune(null);
        }
        if (\array_key_exists('contenance', $data) && null !== $data['contenance']) {
            $object->setContenance($data['contenance']);
            unset($data['contenance']);
        } elseif (\array_key_exists('contenance', $data) && null === $data['contenance']) {
            $object->setContenance(null);
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
        if ($data->isInitialized('parcelleCadastrale') && null !== $data->getParcelleCadastrale()) {
            $dataArray['parcelle_cadastrale'] = $data->getParcelleCadastrale();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('numeroVoie') && null !== $data->getNumeroVoie()) {
            $dataArray['numero_voie'] = $data->getNumeroVoie();
        }
        if ($data->isInitialized('typeVoie') && null !== $data->getTypeVoie()) {
            $dataArray['type_voie'] = $data->getTypeVoie();
        }
        if ($data->isInitialized('libelleVoie') && null !== $data->getLibelleVoie()) {
            $dataArray['libelle_voie'] = $data->getLibelleVoie();
        }
        if ($data->isInitialized('codeCommune') && null !== $data->getCodeCommune()) {
            $dataArray['code_commune'] = $data->getCodeCommune();
        }
        if ($data->isInitialized('nomCommune') && null !== $data->getNomCommune()) {
            $dataArray['nom_commune'] = $data->getNomCommune();
        }
        if ($data->isInitialized('contenance') && null !== $data->getContenance()) {
            $dataArray['contenance'] = $data->getContenance();
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
        return [EntrepriseFicheparcellesDetenuesResultatsItem::class => false];
    }
}
