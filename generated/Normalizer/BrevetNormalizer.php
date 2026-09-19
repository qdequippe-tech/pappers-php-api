<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Brevet;
use Qdequippe\Pappers\Api\Model\BrevetClassificationsItem;
use Qdequippe\Pappers\Api\Model\BrevetPrioritesItem;
use Qdequippe\Pappers\Api\Model\BrevetPublication;
use Qdequippe\Pappers\Api\Model\PersonneBrevet;
use Qdequippe\Pappers\Api\Runtime\JsonObject;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\InvalidDateException;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BrevetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Brevet::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Brevet::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new Brevet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('proprietaires', $data) && null !== $data['proprietaires']) {
            $values = [];
            foreach ($data['proprietaires'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PersonneBrevet::class, 'json', $context);
            }
            $object->setProprietaires($values);
            unset($data['proprietaires']);
        } elseif (\array_key_exists('proprietaires', $data) && null === $data['proprietaires']) {
            $object->setProprietaires(null);
            unset($data['proprietaires']);
        }
        if (\array_key_exists('depositaires', $data) && null !== $data['depositaires']) {
            $values_1 = [];
            foreach ($data['depositaires'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, PersonneBrevet::class, 'json', $context);
            }
            $object->setDepositaires($values_1);
            unset($data['depositaires']);
        } elseif (\array_key_exists('depositaires', $data) && null === $data['depositaires']) {
            $object->setDepositaires(null);
            unset($data['depositaires']);
        }
        if (\array_key_exists('inventeurs', $data) && null !== $data['inventeurs']) {
            $values_2 = [];
            foreach ($data['inventeurs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, PersonneBrevet::class, 'json', $context);
            }
            $object->setInventeurs($values_2);
            unset($data['inventeurs']);
        } elseif (\array_key_exists('inventeurs', $data) && null === $data['inventeurs']) {
            $object->setInventeurs(null);
            unset($data['inventeurs']);
        }
        if (\array_key_exists('agents', $data) && null !== $data['agents']) {
            $values_3 = [];
            foreach ($data['agents'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, PersonneBrevet::class, 'json', $context);
            }
            $object->setAgents($values_3);
            unset($data['agents']);
        } elseif (\array_key_exists('agents', $data) && null === $data['agents']) {
            $object->setAgents(null);
            unset($data['agents']);
        }
        if (\array_key_exists('titre_invention', $data) && null !== $data['titre_invention']) {
            $object->setTitreInvention($data['titre_invention']);
            unset($data['titre_invention']);
        } elseif (\array_key_exists('titre_invention', $data) && null === $data['titre_invention']) {
            $object->setTitreInvention(null);
            unset($data['titre_invention']);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
            unset($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
            unset($data['statut']);
        }
        if (\array_key_exists('publication', $data) && null !== $data['publication']) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], BrevetPublication::class, 'json', $context));
            unset($data['publication']);
        } elseif (\array_key_exists('publication', $data) && null === $data['publication']) {
            $object->setPublication(null);
            unset($data['publication']);
        }
        if (\array_key_exists('code_pays', $data) && null !== $data['code_pays']) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        } elseif (\array_key_exists('code_pays', $data) && null === $data['code_pays']) {
            $object->setCodePays(null);
            unset($data['code_pays']);
        }
        if (\array_key_exists('date_depot', $data) && null !== $data['date_depot']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date_depot']);
            if (false === $date) {
                throw new InvalidDateException($data['date_depot'], 'Y-m-d');
            }
            $object->setDateDepot($date->setTime(0, 0, 0));
            unset($data['date_depot']);
        } elseif (\array_key_exists('date_depot', $data) && null === $data['date_depot']) {
            $object->setDateDepot(null);
            unset($data['date_depot']);
        }
        if (\array_key_exists('numero_depot', $data) && null !== $data['numero_depot']) {
            $object->setNumeroDepot($data['numero_depot']);
            unset($data['numero_depot']);
        } elseif (\array_key_exists('numero_depot', $data) && null === $data['numero_depot']) {
            $object->setNumeroDepot(null);
            unset($data['numero_depot']);
        }
        if (\array_key_exists('date_expiration', $data) && null !== $data['date_expiration']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['date_expiration']);
            if (false === $date_1) {
                throw new InvalidDateException($data['date_expiration'], 'Y-m-d');
            }
            $object->setDateExpiration($date_1->setTime(0, 0, 0));
            unset($data['date_expiration']);
        } elseif (\array_key_exists('date_expiration', $data) && null === $data['date_expiration']) {
            $object->setDateExpiration(null);
            unset($data['date_expiration']);
        }
        if (\array_key_exists('priorites', $data) && null !== $data['priorites']) {
            $values_4 = [];
            foreach ($data['priorites'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, BrevetPrioritesItem::class, 'json', $context);
            }
            $object->setPriorites($values_4);
            unset($data['priorites']);
        } elseif (\array_key_exists('priorites', $data) && null === $data['priorites']) {
            $object->setPriorites(null);
            unset($data['priorites']);
        }
        if (\array_key_exists('classifications', $data) && null !== $data['classifications']) {
            $values_5 = [];
            foreach ($data['classifications'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, BrevetClassificationsItem::class, 'json', $context);
            }
            $object->setClassifications($values_5);
            unset($data['classifications']);
        } elseif (\array_key_exists('classifications', $data) && null === $data['classifications']) {
            $object->setClassifications(null);
            unset($data['classifications']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('proprietaires') && null !== $data->getProprietaires()) {
            $values = [];
            foreach ($data->getProprietaires() as $value) {
                $values[] = null === $value ? null : new JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['proprietaires'] = $values;
        }
        if ($data->isInitialized('depositaires') && null !== $data->getDepositaires()) {
            $values_1 = [];
            foreach ($data->getDepositaires() as $value_1) {
                $values_1[] = null === $value_1 ? null : new JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['depositaires'] = $values_1;
        }
        if ($data->isInitialized('inventeurs') && null !== $data->getInventeurs()) {
            $values_2 = [];
            foreach ($data->getInventeurs() as $value_2) {
                $values_2[] = null === $value_2 ? null : new JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['inventeurs'] = $values_2;
        }
        if ($data->isInitialized('agents') && null !== $data->getAgents()) {
            $values_3 = [];
            foreach ($data->getAgents() as $value_3) {
                $values_3[] = null === $value_3 ? null : new JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['agents'] = $values_3;
        }
        if ($data->isInitialized('titreInvention') && null !== $data->getTitreInvention()) {
            $dataArray['titre_invention'] = $data->getTitreInvention();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = null === $data->getPublication() ? null : new JsonObject($this->normalizer->normalize($data->getPublication(), 'json', $context));
        }
        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['code_pays'] = $data->getCodePays();
        }
        if ($data->isInitialized('dateDepot') && null !== $data->getDateDepot()) {
            $dataArray['date_depot'] = $data->getDateDepot()?->format('Y-m-d');
        }
        if ($data->isInitialized('numeroDepot') && null !== $data->getNumeroDepot()) {
            $dataArray['numero_depot'] = $data->getNumeroDepot();
        }
        if ($data->isInitialized('dateExpiration') && null !== $data->getDateExpiration()) {
            $dataArray['date_expiration'] = $data->getDateExpiration()?->format('Y-m-d');
        }
        if ($data->isInitialized('priorites') && null !== $data->getPriorites()) {
            $values_4 = [];
            foreach ($data->getPriorites() as $value_4) {
                $values_4[] = null === $value_4 ? null : new JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['priorites'] = $values_4;
        }
        if ($data->isInitialized('classifications') && null !== $data->getClassifications()) {
            $values_5 = [];
            foreach ($data->getClassifications() as $value_5) {
                $values_5[] = null === $value_5 ? null : new JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['classifications'] = $values_5;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Brevet::class => false];
    }
}
