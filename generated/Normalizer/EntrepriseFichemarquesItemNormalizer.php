<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemClassesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemEvenementsItem;
use Qdequippe\Pappers\Api\Model\PersonneMarque;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichemarquesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichemarquesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichemarquesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichemarquesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero', $data) && null !== $data['numero']) {
            $object->setNumero($data['numero']);
            unset($data['numero']);
        } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
            $object->setNumero(null);
        }
        if (\array_key_exists('date_enregistrement', $data) && null !== $data['date_enregistrement']) {
            $object->setDateEnregistrement($data['date_enregistrement']);
            unset($data['date_enregistrement']);
        } elseif (\array_key_exists('date_enregistrement', $data) && null === $data['date_enregistrement']) {
            $object->setDateEnregistrement(null);
        }
        if (\array_key_exists('date_expiration', $data) && null !== $data['date_expiration']) {
            $object->setDateExpiration($data['date_expiration']);
            unset($data['date_expiration']);
        } elseif (\array_key_exists('date_expiration', $data) && null === $data['date_expiration']) {
            $object->setDateExpiration(null);
        }
        if (\array_key_exists('lieu_enregistrement', $data) && null !== $data['lieu_enregistrement']) {
            $object->setLieuEnregistrement($data['lieu_enregistrement']);
            unset($data['lieu_enregistrement']);
        } elseif (\array_key_exists('lieu_enregistrement', $data) && null === $data['lieu_enregistrement']) {
            $object->setLieuEnregistrement(null);
        }
        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
            unset($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
        }
        if (\array_key_exists('texte', $data) && null !== $data['texte']) {
            $object->setTexte($data['texte']);
            unset($data['texte']);
        } elseif (\array_key_exists('texte', $data) && null === $data['texte']) {
            $object->setTexte(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('lien_image', $data) && null !== $data['lien_image']) {
            $object->setLienImage($data['lien_image']);
            unset($data['lien_image']);
        } elseif (\array_key_exists('lien_image', $data) && null === $data['lien_image']) {
            $object->setLienImage(null);
        }
        if (\array_key_exists('descriptions', $data) && null !== $data['descriptions']) {
            $values = [];
            foreach ($data['descriptions'] as $value) {
                $values[] = $value;
            }
            $object->setDescriptions($values);
            unset($data['descriptions']);
        } elseif (\array_key_exists('descriptions', $data) && null === $data['descriptions']) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('classes', $data) && null !== $data['classes']) {
            $values_1 = [];
            foreach ($data['classes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, EntrepriseFichemarquesItemClassesItem::class, 'json', $context);
            }
            $object->setClasses($values_1);
            unset($data['classes']);
        } elseif (\array_key_exists('classes', $data) && null === $data['classes']) {
            $object->setClasses(null);
        }
        if (\array_key_exists('deposant', $data) && null !== $data['deposant']) {
            $object->setDeposant($this->denormalizer->denormalize($data['deposant'], PersonneMarque::class, 'json', $context));
            unset($data['deposant']);
        } elseif (\array_key_exists('deposant', $data) && null === $data['deposant']) {
            $object->setDeposant(null);
        }
        if (\array_key_exists('mandataire', $data) && null !== $data['mandataire']) {
            $object->setMandataire($this->denormalizer->denormalize($data['mandataire'], PersonneMarque::class, 'json', $context));
            unset($data['mandataire']);
        } elseif (\array_key_exists('mandataire', $data) && null === $data['mandataire']) {
            $object->setMandataire(null);
        }
        if (\array_key_exists('evenements', $data) && null !== $data['evenements']) {
            $values_2 = [];
            foreach ($data['evenements'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseFichemarquesItemEvenementsItem::class, 'json', $context);
            }
            $object->setEvenements($values_2);
            unset($data['evenements']);
        } elseif (\array_key_exists('evenements', $data) && null === $data['evenements']) {
            $object->setEvenements(null);
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
        if ($data->isInitialized('numero') && null !== $data->getNumero()) {
            $dataArray['numero'] = $data->getNumero();
        }
        if ($data->isInitialized('dateEnregistrement') && null !== $data->getDateEnregistrement()) {
            $dataArray['date_enregistrement'] = $data->getDateEnregistrement();
        }
        if ($data->isInitialized('dateExpiration') && null !== $data->getDateExpiration()) {
            $dataArray['date_expiration'] = $data->getDateExpiration();
        }
        if ($data->isInitialized('lieuEnregistrement') && null !== $data->getLieuEnregistrement()) {
            $dataArray['lieu_enregistrement'] = $data->getLieuEnregistrement();
        }
        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }
        if ($data->isInitialized('texte') && null !== $data->getTexte()) {
            $dataArray['texte'] = $data->getTexte();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('lienImage') && null !== $data->getLienImage()) {
            $dataArray['lien_image'] = $data->getLienImage();
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $values = [];
            foreach ($data->getDescriptions() as $value) {
                $values[] = $value;
            }
            $dataArray['descriptions'] = $values;
        }
        if ($data->isInitialized('classes') && null !== $data->getClasses()) {
            $values_1 = [];
            foreach ($data->getClasses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['classes'] = $values_1;
        }
        if ($data->isInitialized('deposant') && null !== $data->getDeposant()) {
            $dataArray['deposant'] = $this->normalizer->normalize($data->getDeposant(), 'json', $context);
        }
        if ($data->isInitialized('mandataire') && null !== $data->getMandataire()) {
            $dataArray['mandataire'] = $this->normalizer->normalize($data->getMandataire(), 'json', $context);
        }
        if ($data->isInitialized('evenements') && null !== $data->getEvenements()) {
            $values_2 = [];
            foreach ($data->getEvenements() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['evenements'] = $values_2;
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
        return [EntrepriseFichemarquesItem::class => false];
    }
}
