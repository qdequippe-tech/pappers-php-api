<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseCitee;
use Qdequippe\Pappers\Api\Model\EntrepriseCiteeMentionsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseCiteePersonnesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseCiteeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseCitee::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseCitee::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseCitee();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
            $object->setNomEntreprise($data['nom_entreprise']);
            unset($data['nom_entreprise']);
        } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
            $object->setNomEntreprise(null);
        }
        if (\array_key_exists('type_relation', $data) && null !== $data['type_relation']) {
            $object->setTypeRelation($data['type_relation']);
            unset($data['type_relation']);
        } elseif (\array_key_exists('type_relation', $data) && null === $data['type_relation']) {
            $object->setTypeRelation(null);
        }
        if (\array_key_exists('mentions', $data) && null !== $data['mentions']) {
            $values = [];
            foreach ($data['mentions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EntrepriseCiteeMentionsItem::class, 'json', $context);
            }
            $object->setMentions($values);
            unset($data['mentions']);
        } elseif (\array_key_exists('mentions', $data) && null === $data['mentions']) {
            $object->setMentions(null);
        }
        if (\array_key_exists('personnes', $data) && null !== $data['personnes']) {
            $values_1 = [];
            foreach ($data['personnes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, EntrepriseCiteePersonnesItem::class, 'json', $context);
            }
            $object->setPersonnes($values_1);
            unset($data['personnes']);
        } elseif (\array_key_exists('personnes', $data) && null === $data['personnes']) {
            $object->setPersonnes(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('nomEntreprise') && null !== $data->getNomEntreprise()) {
            $dataArray['nom_entreprise'] = $data->getNomEntreprise();
        }
        if ($data->isInitialized('typeRelation') && null !== $data->getTypeRelation()) {
            $dataArray['type_relation'] = $data->getTypeRelation();
        }
        if ($data->isInitialized('mentions') && null !== $data->getMentions()) {
            $values = [];
            foreach ($data->getMentions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['mentions'] = $values;
        }
        if ($data->isInitialized('personnes') && null !== $data->getPersonnes()) {
            $values_1 = [];
            foreach ($data->getPersonnes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['personnes'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseCitee::class => false];
    }
}
