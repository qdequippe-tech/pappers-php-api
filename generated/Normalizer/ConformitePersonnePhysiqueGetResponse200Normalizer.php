<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee;
use Qdequippe\Pappers\Api\Model\Sanction;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConformitePersonnePhysiqueGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ConformitePersonnePhysiqueGetResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ConformitePersonnePhysiqueGetResponse200::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ConformitePersonnePhysiqueGetResponse200();
        if (\array_key_exists('sanctions_en_cours', $data) && \is_int($data['sanctions_en_cours'])) {
            $data['sanctions_en_cours'] = (bool) $data['sanctions_en_cours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('personne_politiquement_exposee', $data) && null !== $data['personne_politiquement_exposee']) {
            $object->setPersonnePolitiquementExposee($this->denormalizer->denormalize($data['personne_politiquement_exposee'], PersonnePolitiquementExposee::class, 'json', $context));
            unset($data['personne_politiquement_exposee']);
        } elseif (\array_key_exists('personne_politiquement_exposee', $data) && null === $data['personne_politiquement_exposee']) {
            $object->setPersonnePolitiquementExposee(null);
        }
        if (\array_key_exists('sanctions_en_cours', $data) && null !== $data['sanctions_en_cours']) {
            $object->setSanctionsEnCours($data['sanctions_en_cours']);
            unset($data['sanctions_en_cours']);
        } elseif (\array_key_exists('sanctions_en_cours', $data) && null === $data['sanctions_en_cours']) {
            $object->setSanctionsEnCours(null);
        }
        if (\array_key_exists('sanctions', $data) && null !== $data['sanctions']) {
            $values = [];
            foreach ($data['sanctions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Sanction::class, 'json', $context);
            }
            $object->setSanctions($values);
            unset($data['sanctions']);
        } elseif (\array_key_exists('sanctions', $data) && null === $data['sanctions']) {
            $object->setSanctions(null);
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
        if ($data->isInitialized('personnePolitiquementExposee') && null !== $data->getPersonnePolitiquementExposee()) {
            $dataArray['personne_politiquement_exposee'] = $this->normalizer->normalize($data->getPersonnePolitiquementExposee(), 'json', $context);
        }
        if ($data->isInitialized('sanctionsEnCours') && null !== $data->getSanctionsEnCours()) {
            $dataArray['sanctions_en_cours'] = $data->getSanctionsEnCours();
        }
        if ($data->isInitialized('sanctions') && null !== $data->getSanctions()) {
            $values = [];
            foreach ($data->getSanctions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['sanctions'] = $values;
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
        return [ConformitePersonnePhysiqueGetResponse200::class => false];
    }
}
