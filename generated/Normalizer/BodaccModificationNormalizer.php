<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\BodaccModification;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BodaccModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return BodaccModification::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && BodaccModification::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BodaccModification();
        if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
            $data['capital'] = (float) $data['capital'];
        }
        if (\array_key_exists('personne_morale', $data) && \is_int($data['personne_morale'])) {
            $data['personne_morale'] = (bool) $data['personne_morale'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
            $object->setNumeroParution(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
            $object->setNumeroAnnonce(null);
        }
        if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
            $object->setBodacc(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
            $object->setGreffe(null);
        }
        if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
            $object->setNomEntreprise($data['nom_entreprise']);
            unset($data['nom_entreprise']);
        } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
            $object->setNomEntreprise(null);
        }
        if (\array_key_exists('personne_morale', $data) && null !== $data['personne_morale']) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        } elseif (\array_key_exists('personne_morale', $data) && null === $data['personne_morale']) {
            $object->setPersonneMorale(null);
        }
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }
        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }
        if (\array_key_exists('administration', $data) && null !== $data['administration']) {
            $object->setAdministration($data['administration']);
            unset($data['administration']);
        } elseif (\array_key_exists('administration', $data) && null === $data['administration']) {
            $object->setAdministration(null);
        }
        if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
            $object->setAdresse($data['adresse']);
            unset($data['adresse']);
        } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
            $object->setAdresse(null);
        }
        if (\array_key_exists('capital', $data) && null !== $data['capital']) {
            $object->setCapital($data['capital']);
            unset($data['capital']);
        } elseif (\array_key_exists('capital', $data) && null === $data['capital']) {
            $object->setCapital(null);
        }
        if (\array_key_exists('activite', $data) && null !== $data['activite']) {
            $object->setActivite($data['activite']);
            unset($data['activite']);
        } elseif (\array_key_exists('activite', $data) && null === $data['activite']) {
            $object->setActivite(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
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
        if ($data->isInitialized('numeroParution') && null !== $data->getNumeroParution()) {
            $dataArray['numero_parution'] = $data->getNumeroParution();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('numeroAnnonce') && null !== $data->getNumeroAnnonce()) {
            $dataArray['numero_annonce'] = $data->getNumeroAnnonce();
        }
        if ($data->isInitialized('bodacc') && null !== $data->getBodacc()) {
            $dataArray['bodacc'] = $data->getBodacc();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('greffe') && null !== $data->getGreffe()) {
            $dataArray['greffe'] = $data->getGreffe();
        }
        if ($data->isInitialized('nomEntreprise') && null !== $data->getNomEntreprise()) {
            $dataArray['nom_entreprise'] = $data->getNomEntreprise();
        }
        if ($data->isInitialized('personneMorale') && null !== $data->getPersonneMorale()) {
            $dataArray['personne_morale'] = $data->getPersonneMorale();
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }
        if ($data->isInitialized('administration') && null !== $data->getAdministration()) {
            $dataArray['administration'] = $data->getAdministration();
        }
        if ($data->isInitialized('adresse') && null !== $data->getAdresse()) {
            $dataArray['adresse'] = $data->getAdresse();
        }
        if ($data->isInitialized('capital') && null !== $data->getCapital()) {
            $dataArray['capital'] = $data->getCapital();
        }
        if ($data->isInitialized('activite') && null !== $data->getActivite()) {
            $dataArray['activite'] = $data->getActivite();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
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
        return [BodaccModification::class => false];
    }
}
