<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonnePolitiquementExposeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return PersonnePolitiquementExposee::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && PersonnePolitiquementExposee::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PersonnePolitiquementExposee();
        if (\array_key_exists('en_cours', $data) && \is_int($data['en_cours'])) {
            $data['en_cours'] = (bool) $data['en_cours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
            $object->setEnCours($data['en_cours']);
            unset($data['en_cours']);
        } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
            $object->setEnCours(null);
        }
        if (\array_key_exists('fonctions', $data) && null !== $data['fonctions']) {
            $values = [];
            foreach ($data['fonctions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PersonnePolitiquementExposeeFonctionsItem::class, 'json', $context);
            }
            $object->setFonctions($values);
            unset($data['fonctions']);
        } elseif (\array_key_exists('fonctions', $data) && null === $data['fonctions']) {
            $object->setFonctions(null);
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
        if ($data->isInitialized('enCours') && null !== $data->getEnCours()) {
            $dataArray['en_cours'] = $data->getEnCours();
        }
        if ($data->isInitialized('fonctions') && null !== $data->getFonctions()) {
            $values = [];
            foreach ($data->getFonctions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['fonctions'] = $values;
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
        return [PersonnePolitiquementExposee::class => false];
    }
}
