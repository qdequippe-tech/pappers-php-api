<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LabelsBaseInscriptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LabelsBaseInscriptionsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LabelsBaseInscriptionsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new LabelsBaseInscriptionsItem();
        if (\array_key_exists('encaisse_fonds', $data) && \is_int($data['encaisse_fonds'])) {
            $data['encaisse_fonds'] = (bool) $data['encaisse_fonds'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('categorie', $data) && null !== $data['categorie']) {
            $object->setCategorie($data['categorie']);
            unset($data['categorie']);
        } elseif (\array_key_exists('categorie', $data) && null === $data['categorie']) {
            $object->setCategorie(null);
        }
        if (\array_key_exists('label_categorie', $data) && null !== $data['label_categorie']) {
            $object->setLabelCategorie($data['label_categorie']);
            unset($data['label_categorie']);
        } elseif (\array_key_exists('label_categorie', $data) && null === $data['label_categorie']) {
            $object->setLabelCategorie(null);
        }
        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
            unset($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
        }
        if (\array_key_exists('date_inscription', $data) && null !== $data['date_inscription']) {
            $object->setDateInscription($data['date_inscription']);
            unset($data['date_inscription']);
        } elseif (\array_key_exists('date_inscription', $data) && null === $data['date_inscription']) {
            $object->setDateInscription(null);
        }
        if (\array_key_exists('encaisse_fonds', $data) && null !== $data['encaisse_fonds']) {
            $object->setEncaisseFonds($data['encaisse_fonds']);
            unset($data['encaisse_fonds']);
        } elseif (\array_key_exists('encaisse_fonds', $data) && null === $data['encaisse_fonds']) {
            $object->setEncaisseFonds(null);
        }
        if (\array_key_exists('activites', $data) && null !== $data['activites']) {
            $values = [];
            foreach ($data['activites'] as $value) {
                $values[] = $value;
            }
            $object->setActivites($values);
            unset($data['activites']);
        } elseif (\array_key_exists('activites', $data) && null === $data['activites']) {
            $object->setActivites(null);
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
        if ($data->isInitialized('categorie') && null !== $data->getCategorie()) {
            $dataArray['categorie'] = $data->getCategorie();
        }
        if ($data->isInitialized('labelCategorie') && null !== $data->getLabelCategorie()) {
            $dataArray['label_categorie'] = $data->getLabelCategorie();
        }
        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }
        if ($data->isInitialized('dateInscription') && null !== $data->getDateInscription()) {
            $dataArray['date_inscription'] = $data->getDateInscription();
        }
        if ($data->isInitialized('encaisseFonds') && null !== $data->getEncaisseFonds()) {
            $dataArray['encaisse_fonds'] = $data->getEncaisseFonds();
        }
        if ($data->isInitialized('activites') && null !== $data->getActivites()) {
            $values = [];
            foreach ($data->getActivites() as $value) {
                $values[] = $value;
            }
            $dataArray['activites'] = $values;
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
        return [LabelsBaseInscriptionsItem::class => false];
    }
}
