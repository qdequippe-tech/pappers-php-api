<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheActifNetInferieurMoitieCapital;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheActifNetInferieurMoitieCapitalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheActifNetInferieurMoitieCapital::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheActifNetInferieurMoitieCapital::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFicheActifNetInferieurMoitieCapital();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('en_cours', $data) && \is_int($data['en_cours'])) {
            $data['en_cours'] = (bool) $data['en_cours'];
        }
        if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
            $object->setEnCours($data['en_cours']);
            unset($data['en_cours']);
        } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
            $object->setEnCours(null);
            unset($data['en_cours']);
        }
        if (\array_key_exists('date_debut', $data) && null !== $data['date_debut']) {
            $object->setDateDebut($data['date_debut']);
            unset($data['date_debut']);
        } elseif (\array_key_exists('date_debut', $data) && null === $data['date_debut']) {
            $object->setDateDebut(null);
            unset($data['date_debut']);
        }
        if (\array_key_exists('date_fin', $data) && null !== $data['date_fin']) {
            $object->setDateFin($data['date_fin']);
            unset($data['date_fin']);
        } elseif (\array_key_exists('date_fin', $data) && null === $data['date_fin']) {
            $object->setDateFin(null);
            unset($data['date_fin']);
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
        if ($data->isInitialized('enCours') && null !== $data->getEnCours()) {
            $dataArray['en_cours'] = $data->getEnCours();
        }
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['date_debut'] = $data->getDateDebut();
        }
        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['date_fin'] = $data->getDateFin();
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
        return [EntrepriseFicheActifNetInferieurMoitieCapital::class => false];
    }
}
