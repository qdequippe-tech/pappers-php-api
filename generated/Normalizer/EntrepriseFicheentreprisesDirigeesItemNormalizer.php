<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheentreprisesDirigeesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheentreprisesDirigeesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheentreprisesDirigeesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheentreprisesDirigeesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFicheentreprisesDirigeesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
            unset($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
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
        }
        if (\array_key_exists('date_prise_de_poste', $data) && null !== $data['date_prise_de_poste']) {
            $object->setDatePriseDePoste(\DateTime::createFromFormat('Y-m-d', $data['date_prise_de_poste'])->setTime(0, 0, 0));
            unset($data['date_prise_de_poste']);
        } elseif (\array_key_exists('date_prise_de_poste', $data) && null === $data['date_prise_de_poste']) {
            $object->setDatePriseDePoste(null);
        }
        if (\array_key_exists('date_depart_de_poste', $data) && null !== $data['date_depart_de_poste']) {
            $object->setDateDepartDePoste(\DateTime::createFromFormat('Y-m-d', $data['date_depart_de_poste'])->setTime(0, 0, 0));
            unset($data['date_depart_de_poste']);
        } elseif (\array_key_exists('date_depart_de_poste', $data) && null === $data['date_depart_de_poste']) {
            $object->setDateDepartDePoste(null);
        }
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
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
            $dataArray['date_prise_de_poste'] = $data->getDatePriseDePoste()->format('Y-m-d');
        }
        if ($data->isInitialized('dateDepartDePoste') && null !== $data->getDateDepartDePoste()) {
            $dataArray['date_depart_de_poste'] = $data->getDateDepartDePoste()->format('Y-m-d');
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
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
        return [EntrepriseFicheentreprisesDirigeesItem::class => false];
    }
}
