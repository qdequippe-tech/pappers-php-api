<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheobservationsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheobservationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheobservationsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheobservationsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFicheobservationsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero', $data) && null !== $data['numero']) {
            $object->setNumero($data['numero']);
            unset($data['numero']);
        } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
            $object->setNumero(null);
        }
        if (\array_key_exists('date_ajout', $data) && null !== $data['date_ajout']) {
            $object->setDateAjout(\DateTime::createFromFormat('Y-m-d', $data['date_ajout'])->setTime(0, 0, 0));
            unset($data['date_ajout']);
        } elseif (\array_key_exists('date_ajout', $data) && null === $data['date_ajout']) {
            $object->setDateAjout(null);
        }
        if (\array_key_exists('texte', $data) && null !== $data['texte']) {
            $object->setTexte($data['texte']);
            unset($data['texte']);
        } elseif (\array_key_exists('texte', $data) && null === $data['texte']) {
            $object->setTexte(null);
        }
        if (\array_key_exists('etat', $data) && null !== $data['etat']) {
            $object->setEtat($data['etat']);
            unset($data['etat']);
        } elseif (\array_key_exists('etat', $data) && null === $data['etat']) {
            $object->setEtat(null);
        }
        if (\array_key_exists('date_modification', $data) && null !== $data['date_modification']) {
            $object->setDateModification(\DateTime::createFromFormat('Y-m-d', $data['date_modification'])->setTime(0, 0, 0));
            unset($data['date_modification']);
        } elseif (\array_key_exists('date_modification', $data) && null === $data['date_modification']) {
            $object->setDateModification(null);
        }
        if (\array_key_exists('date_suppression', $data) && null !== $data['date_suppression']) {
            $object->setDateSuppression(\DateTime::createFromFormat('Y-m-d', $data['date_suppression'])->setTime(0, 0, 0));
            unset($data['date_suppression']);
        } elseif (\array_key_exists('date_suppression', $data) && null === $data['date_suppression']) {
            $object->setDateSuppression(null);
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
        if ($data->isInitialized('dateAjout')) {
            $dataArray['date_ajout'] = $data->getDateAjout()?->format('Y-m-d');
        }
        if ($data->isInitialized('texte')) {
            $dataArray['texte'] = $data->getTexte();
        }
        if ($data->isInitialized('etat') && null !== $data->getEtat()) {
            $dataArray['etat'] = $data->getEtat();
        }
        if ($data->isInitialized('dateModification')) {
            $dataArray['date_modification'] = $data->getDateModification()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateSuppression')) {
            $dataArray['date_suppression'] = $data->getDateSuppression()?->format('Y-m-d');
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFicheobservationsItem::class => false];
    }
}
