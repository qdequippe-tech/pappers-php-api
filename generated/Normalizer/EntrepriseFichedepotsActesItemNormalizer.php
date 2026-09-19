<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheDepotsActesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheDepotsActesItemActesItem;
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

class EntrepriseFicheDepotsActesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheDepotsActesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheDepotsActesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFicheDepotsActesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('disponible', $data) && \is_int($data['disponible'])) {
            $data['disponible'] = (bool) $data['disponible'];
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
        if (\array_key_exists('date_depot_formate', $data) && null !== $data['date_depot_formate']) {
            $object->setDateDepotFormate($data['date_depot_formate']);
            unset($data['date_depot_formate']);
        } elseif (\array_key_exists('date_depot_formate', $data) && null === $data['date_depot_formate']) {
            $object->setDateDepotFormate(null);
            unset($data['date_depot_formate']);
        }
        if (\array_key_exists('disponible', $data) && null !== $data['disponible']) {
            $object->setDisponible($data['disponible']);
            unset($data['disponible']);
        } elseif (\array_key_exists('disponible', $data) && null === $data['disponible']) {
            $object->setDisponible(null);
            unset($data['disponible']);
        }
        if (\array_key_exists('nom_fichier_pdf', $data) && null !== $data['nom_fichier_pdf']) {
            $object->setNomFichierPdf($data['nom_fichier_pdf']);
            unset($data['nom_fichier_pdf']);
        } elseif (\array_key_exists('nom_fichier_pdf', $data) && null === $data['nom_fichier_pdf']) {
            $object->setNomFichierPdf(null);
            unset($data['nom_fichier_pdf']);
        }
        if (\array_key_exists('token', $data) && null !== $data['token']) {
            $object->setToken($data['token']);
            unset($data['token']);
        } elseif (\array_key_exists('token', $data) && null === $data['token']) {
            $object->setToken(null);
            unset($data['token']);
        }
        if (\array_key_exists('actes', $data) && null !== $data['actes']) {
            $values = [];
            foreach ($data['actes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EntrepriseFicheDepotsActesItemActesItem::class, 'json', $context);
            }
            $object->setActes($values);
            unset($data['actes']);
        } elseif (\array_key_exists('actes', $data) && null === $data['actes']) {
            $object->setActes(null);
            unset($data['actes']);
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
        if ($data->isInitialized('dateDepot') && null !== $data->getDateDepot()) {
            $dataArray['date_depot'] = $data->getDateDepot()->format('Y-m-d');
        }
        if ($data->isInitialized('dateDepotFormate') && null !== $data->getDateDepotFormate()) {
            $dataArray['date_depot_formate'] = $data->getDateDepotFormate();
        }
        if ($data->isInitialized('disponible') && null !== $data->getDisponible()) {
            $dataArray['disponible'] = $data->getDisponible();
        }
        if ($data->isInitialized('nomFichierPdf') && null !== $data->getNomFichierPdf()) {
            $dataArray['nom_fichier_pdf'] = $data->getNomFichierPdf();
        }
        if ($data->isInitialized('token') && null !== $data->getToken()) {
            $dataArray['token'] = $data->getToken();
        }
        if ($data->isInitialized('actes') && null !== $data->getActes()) {
            $values = [];
            foreach ($data->getActes() as $value) {
                $values[] = null === $value ? null : new JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['actes'] = $values;
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
        return [EntrepriseFicheDepotsActesItem::class => false];
    }
}
