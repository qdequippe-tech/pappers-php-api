<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheEntreprisesDirigeesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\InvalidDateException;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheEntreprisesDirigeesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheEntreprisesDirigeesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheEntreprisesDirigeesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFicheEntreprisesDirigeesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
            unset($data['siren']);
        }
        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
            unset($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
            unset($data['statut']);
        }
        if (\array_key_exists('qualites', $data) && null !== $data['qualites']) {
            $values = [];
            foreach ($data['qualites'] as $value) {
                $values[] = $value;
            }
            $object->setQualites($values);
            unset($data['qualites']);
        } elseif (\array_key_exists('qualites', $data) && null === $data['qualites']) {
            $object->setQualites(null);
            unset($data['qualites']);
        }
        if (\array_key_exists('date_prise_de_poste', $data) && null !== $data['date_prise_de_poste']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date_prise_de_poste']);
            if (false === $date) {
                throw new InvalidDateException($data['date_prise_de_poste'], 'Y-m-d');
            }
            $object->setDatePriseDePoste($date->setTime(0, 0, 0));
            unset($data['date_prise_de_poste']);
        } elseif (\array_key_exists('date_prise_de_poste', $data) && null === $data['date_prise_de_poste']) {
            $object->setDatePriseDePoste(null);
            unset($data['date_prise_de_poste']);
        }
        if (\array_key_exists('date_depart_de_poste', $data) && null !== $data['date_depart_de_poste']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['date_depart_de_poste']);
            if (false === $date_1) {
                throw new InvalidDateException($data['date_depart_de_poste'], 'Y-m-d');
            }
            $object->setDateDepartDePoste($date_1->setTime(0, 0, 0));
            unset($data['date_depart_de_poste']);
        } elseif (\array_key_exists('date_depart_de_poste', $data) && null === $data['date_depart_de_poste']) {
            $object->setDateDepartDePoste(null);
            unset($data['date_depart_de_poste']);
        }
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
            unset($data['denomination']);
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
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }
        if ($data->isInitialized('qualites') && null !== $data->getQualites()) {
            $values = [];
            foreach ($data->getQualites() as $value) {
                $values[] = $value;
            }
            $dataArray['qualites'] = $values;
        }
        if ($data->isInitialized('datePriseDePoste') && null !== $data->getDatePriseDePoste()) {
            $dataArray['date_prise_de_poste'] = $data->getDatePriseDePoste()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateDepartDePoste') && null !== $data->getDateDepartDePoste()) {
            $dataArray['date_depart_de_poste'] = $data->getDateDepartDePoste()?->format('Y-m-d');
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFicheEntreprisesDirigeesItem::class => false];
    }
}
