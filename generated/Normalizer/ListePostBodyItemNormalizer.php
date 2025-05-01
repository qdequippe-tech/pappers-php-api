<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ListePostBodyItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListePostBodyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ListePostBodyItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ListePostBodyItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListePostBodyItem();
        if (\array_key_exists('recherche_elargie', $data) && \is_int($data['recherche_elargie'])) {
            $data['recherche_elargie'] = (bool) $data['recherche_elargie'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
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
        if (\array_key_exists('date_de_naissance', $data) && null !== $data['date_de_naissance']) {
            $object->setDateDeNaissance($data['date_de_naissance']);
            unset($data['date_de_naissance']);
        } elseif (\array_key_exists('date_de_naissance', $data) && null === $data['date_de_naissance']) {
            $object->setDateDeNaissance(null);
        }
        if (\array_key_exists('recherche_elargie', $data) && null !== $data['recherche_elargie']) {
            $object->setRechercheElargie($data['recherche_elargie']);
            unset($data['recherche_elargie']);
        } elseif (\array_key_exists('recherche_elargie', $data) && null === $data['recherche_elargie']) {
            $object->setRechercheElargie(null);
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
        $dataArray['siren'] = $data->getSiren();
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }
        if ($data->isInitialized('dateDeNaissance') && null !== $data->getDateDeNaissance()) {
            $dataArray['date_de_naissance'] = $data->getDateDeNaissance();
        }
        if ($data->isInitialized('rechercheElargie') && null !== $data->getRechercheElargie()) {
            $dataArray['recherche_elargie'] = $data->getRechercheElargie();
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
        return [ListePostBodyItem::class => false];
    }
}
