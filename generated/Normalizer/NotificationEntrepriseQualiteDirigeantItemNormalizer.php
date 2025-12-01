<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseQualiteDirigeantItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NotificationEntrepriseQualiteDirigeantItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return NotificationEntrepriseQualiteDirigeantItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && NotificationEntrepriseQualiteDirigeantItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NotificationEntrepriseQualiteDirigeantItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $values = [];
            foreach ($data['prenom'] as $value) {
                $values[] = $value;
            }
            $object->setPrenom($values);
            unset($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }
        if (\array_key_exists('date_de_naissance_rgpd', $data) && null !== $data['date_de_naissance_rgpd']) {
            $object->setDateDeNaissanceRgpd($data['date_de_naissance_rgpd']);
            unset($data['date_de_naissance_rgpd']);
        } elseif (\array_key_exists('date_de_naissance_rgpd', $data) && null === $data['date_de_naissance_rgpd']) {
            $object->setDateDeNaissanceRgpd(null);
        }
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
            $values_1 = [];
            foreach ($data['valeur'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setValeur($values_1);
            unset($data['valeur']);
        } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
            $object->setValeur(null);
        }
        if (\array_key_exists('ancienne_valeur', $data) && null !== $data['ancienne_valeur']) {
            $values_2 = [];
            foreach ($data['ancienne_valeur'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAncienneValeur($values_2);
            unset($data['ancienne_valeur']);
        } elseif (\array_key_exists('ancienne_valeur', $data) && null === $data['ancienne_valeur']) {
            $object->setAncienneValeur(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $values = [];
            foreach ($data->getPrenom() as $value) {
                $values[] = $value;
            }
            $dataArray['prenom'] = $values;
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('dateDeNaissanceRgpd') && null !== $data->getDateDeNaissanceRgpd()) {
            $dataArray['date_de_naissance_rgpd'] = $data->getDateDeNaissanceRgpd();
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('valeur') && null !== $data->getValeur()) {
            $values_1 = [];
            foreach ($data->getValeur() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['valeur'] = $values_1;
        }
        if ($data->isInitialized('ancienneValeur') && null !== $data->getAncienneValeur()) {
            $values_2 = [];
            foreach ($data->getAncienneValeur() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['ancienne_valeur'] = $values_2;
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [NotificationEntrepriseQualiteDirigeantItem::class => false];
    }
}
