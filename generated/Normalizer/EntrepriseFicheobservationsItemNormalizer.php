<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheObservationsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\InvalidDateException;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheObservationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheObservationsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheObservationsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFicheObservationsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('numero', $data) && null !== $data['numero']) {
            $object->setNumero($data['numero']);
            unset($data['numero']);
        } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
            $object->setNumero(null);
            unset($data['numero']);
        }
        if (\array_key_exists('date_ajout', $data) && null !== $data['date_ajout']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date_ajout']);
            if (false === $date) {
                throw new InvalidDateException($data['date_ajout'], 'Y-m-d');
            }
            $object->setDateAjout($date->setTime(0, 0, 0));
            unset($data['date_ajout']);
        } elseif (\array_key_exists('date_ajout', $data) && null === $data['date_ajout']) {
            $object->setDateAjout(null);
            unset($data['date_ajout']);
        }
        if (\array_key_exists('texte', $data) && null !== $data['texte']) {
            $object->setTexte($data['texte']);
            unset($data['texte']);
        } elseif (\array_key_exists('texte', $data) && null === $data['texte']) {
            $object->setTexte(null);
            unset($data['texte']);
        }
        if (\array_key_exists('etat', $data) && null !== $data['etat']) {
            $object->setEtat($data['etat']);
            unset($data['etat']);
        } elseif (\array_key_exists('etat', $data) && null === $data['etat']) {
            $object->setEtat(null);
            unset($data['etat']);
        }
        if (\array_key_exists('date_modification', $data) && null !== $data['date_modification']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['date_modification']);
            if (false === $date_1) {
                throw new InvalidDateException($data['date_modification'], 'Y-m-d');
            }
            $object->setDateModification($date_1->setTime(0, 0, 0));
            unset($data['date_modification']);
        } elseif (\array_key_exists('date_modification', $data) && null === $data['date_modification']) {
            $object->setDateModification(null);
            unset($data['date_modification']);
        }
        if (\array_key_exists('date_suppression', $data) && null !== $data['date_suppression']) {
            $date_2 = \DateTime::createFromFormat('Y-m-d', $data['date_suppression']);
            if (false === $date_2) {
                throw new InvalidDateException($data['date_suppression'], 'Y-m-d');
            }
            $object->setDateSuppression($date_2->setTime(0, 0, 0));
            unset($data['date_suppression']);
        } elseif (\array_key_exists('date_suppression', $data) && null === $data['date_suppression']) {
            $object->setDateSuppression(null);
            unset($data['date_suppression']);
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
        if ($data->isInitialized('numero') && null !== $data->getNumero()) {
            $dataArray['numero'] = $data->getNumero();
        }
        if ($data->isInitialized('dateAjout') && null !== $data->getDateAjout()) {
            $dataArray['date_ajout'] = $data->getDateAjout()?->format('Y-m-d');
        }
        if ($data->isInitialized('texte') && null !== $data->getTexte()) {
            $dataArray['texte'] = $data->getTexte();
        }
        if ($data->isInitialized('etat') && null !== $data->getEtat()) {
            $dataArray['etat'] = $data->getEtat();
        }
        if ($data->isInitialized('dateModification') && null !== $data->getDateModification()) {
            $dataArray['date_modification'] = $data->getDateModification()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateSuppression') && null !== $data->getDateSuppression()) {
            $dataArray['date_suppression'] = $data->getDateSuppression()?->format('Y-m-d');
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
        return [EntrepriseFicheObservationsItem::class => false];
    }
}
