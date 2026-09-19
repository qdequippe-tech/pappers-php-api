<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheRnm;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFicheRnmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFicheRnm::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFicheRnm::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFicheRnm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('date_immatriculation', $data) && null !== $data['date_immatriculation']) {
            $object->setDateImmatriculation($data['date_immatriculation']);
            unset($data['date_immatriculation']);
        } elseif (\array_key_exists('date_immatriculation', $data) && null === $data['date_immatriculation']) {
            $object->setDateImmatriculation(null);
            unset($data['date_immatriculation']);
        }
        if (\array_key_exists('date_radiation', $data) && null !== $data['date_radiation']) {
            $object->setDateRadiation($data['date_radiation']);
            unset($data['date_radiation']);
        } elseif (\array_key_exists('date_radiation', $data) && null === $data['date_radiation']) {
            $object->setDateRadiation(null);
            unset($data['date_radiation']);
        }
        if (\array_key_exists('date_debut_activite', $data) && null !== $data['date_debut_activite']) {
            $object->setDateDebutActivite($data['date_debut_activite']);
            unset($data['date_debut_activite']);
        } elseif (\array_key_exists('date_debut_activite', $data) && null === $data['date_debut_activite']) {
            $object->setDateDebutActivite(null);
            unset($data['date_debut_activite']);
        }
        if (\array_key_exists('date_cessation_activite', $data) && null !== $data['date_cessation_activite']) {
            $object->setDateCessationActivite($data['date_cessation_activite']);
            unset($data['date_cessation_activite']);
        } elseif (\array_key_exists('date_cessation_activite', $data) && null === $data['date_cessation_activite']) {
            $object->setDateCessationActivite(null);
            unset($data['date_cessation_activite']);
        }
        if (\array_key_exists('chambre_des_metiers', $data) && null !== $data['chambre_des_metiers']) {
            $object->setChambreDesMetiers($data['chambre_des_metiers']);
            unset($data['chambre_des_metiers']);
        } elseif (\array_key_exists('chambre_des_metiers', $data) && null === $data['chambre_des_metiers']) {
            $object->setChambreDesMetiers(null);
            unset($data['chambre_des_metiers']);
        }
        if (\array_key_exists('qualification', $data) && null !== $data['qualification']) {
            $object->setQualification($data['qualification']);
            unset($data['qualification']);
        } elseif (\array_key_exists('qualification', $data) && null === $data['qualification']) {
            $object->setQualification(null);
            unset($data['qualification']);
        }
        if (\array_key_exists('derniere_mise_a_jour', $data) && null !== $data['derniere_mise_a_jour']) {
            $object->setDerniereMiseAJour($data['derniere_mise_a_jour']);
            unset($data['derniere_mise_a_jour']);
        } elseif (\array_key_exists('derniere_mise_a_jour', $data) && null === $data['derniere_mise_a_jour']) {
            $object->setDerniereMiseAJour(null);
            unset($data['derniere_mise_a_jour']);
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
        if ($data->isInitialized('dateImmatriculation') && null !== $data->getDateImmatriculation()) {
            $dataArray['date_immatriculation'] = $data->getDateImmatriculation();
        }
        if ($data->isInitialized('dateRadiation') && null !== $data->getDateRadiation()) {
            $dataArray['date_radiation'] = $data->getDateRadiation();
        }
        if ($data->isInitialized('dateDebutActivite') && null !== $data->getDateDebutActivite()) {
            $dataArray['date_debut_activite'] = $data->getDateDebutActivite();
        }
        if ($data->isInitialized('dateCessationActivite') && null !== $data->getDateCessationActivite()) {
            $dataArray['date_cessation_activite'] = $data->getDateCessationActivite();
        }
        if ($data->isInitialized('chambreDesMetiers') && null !== $data->getChambreDesMetiers()) {
            $dataArray['chambre_des_metiers'] = $data->getChambreDesMetiers();
        }
        if ($data->isInitialized('qualification') && null !== $data->getQualification()) {
            $dataArray['qualification'] = $data->getQualification();
        }
        if ($data->isInitialized('derniereMiseAJour') && null !== $data->getDerniereMiseAJour()) {
            $dataArray['derniere_mise_a_jour'] = $data->getDerniereMiseAJour();
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
        return [EntrepriseFicheRnm::class => false];
    }
}
