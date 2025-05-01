<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Sanction;
use Qdequippe\Pappers\Api\Model\SanctionSourcesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SanctionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Sanction::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Sanction::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Sanction();
        if (\array_key_exists('en_cours', $data) && \is_int($data['en_cours'])) {
            $data['en_cours'] = (bool) $data['en_cours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('autorite', $data) && null !== $data['autorite']) {
            $object->setAutorite($data['autorite']);
            unset($data['autorite']);
        } elseif (\array_key_exists('autorite', $data) && null === $data['autorite']) {
            $object->setAutorite(null);
        }
        if (\array_key_exists('pays', $data) && null !== $data['pays']) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
            $object->setPays(null);
        }
        if (\array_key_exists('code_pays', $data) && null !== $data['code_pays']) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        } elseif (\array_key_exists('code_pays', $data) && null === $data['code_pays']) {
            $object->setCodePays(null);
        }
        if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
            $object->setEnCours($data['en_cours']);
            unset($data['en_cours']);
        } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
            $object->setEnCours(null);
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
        if (\array_key_exists('sources', $data) && null !== $data['sources']) {
            $values = [];
            foreach ($data['sources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, SanctionSourcesItem::class, 'json', $context);
            }
            $object->setSources($values);
            unset($data['sources']);
        } elseif (\array_key_exists('sources', $data) && null === $data['sources']) {
            $object->setSources(null);
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
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('autorite') && null !== $data->getAutorite()) {
            $dataArray['autorite'] = $data->getAutorite();
        }
        if ($data->isInitialized('pays') && null !== $data->getPays()) {
            $dataArray['pays'] = $data->getPays();
        }
        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['code_pays'] = $data->getCodePays();
        }
        if ($data->isInitialized('enCours') && null !== $data->getEnCours()) {
            $dataArray['en_cours'] = $data->getEnCours();
        }
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['date_debut'] = $data->getDateDebut();
        }
        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['date_fin'] = $data->getDateFin();
        }
        if ($data->isInitialized('sources') && null !== $data->getSources()) {
            $values = [];
            foreach ($data->getSources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['sources'] = $values;
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
        return [Sanction::class => false];
    }
}
