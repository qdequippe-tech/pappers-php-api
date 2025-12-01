<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleDecisionJusticeItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NotificationEntrepriseNouvelleDecisionJusticeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return NotificationEntrepriseNouvelleDecisionJusticeItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && NotificationEntrepriseNouvelleDecisionJusticeItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NotificationEntrepriseNouvelleDecisionJusticeItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('juridiction', $data) && null !== $data['juridiction']) {
            $object->setJuridiction($data['juridiction']);
            unset($data['juridiction']);
        } elseif (\array_key_exists('juridiction', $data) && null === $data['juridiction']) {
            $object->setJuridiction(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('numero', $data) && null !== $data['numero']) {
            $object->setNumero($data['numero']);
            unset($data['numero']);
        } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
            $object->setNumero(null);
        }
        if (\array_key_exists('date_debut_affaire', $data) && null !== $data['date_debut_affaire']) {
            $object->setDateDebutAffaire(\DateTime::createFromFormat('Y-m-d', $data['date_debut_affaire'])->setTime(0, 0, 0));
            unset($data['date_debut_affaire']);
        } elseif (\array_key_exists('date_debut_affaire', $data) && null === $data['date_debut_affaire']) {
            $object->setDateDebutAffaire(null);
        }
        if (\array_key_exists('position', $data) && null !== $data['position']) {
            $object->setPosition($data['position']);
            unset($data['position']);
        } elseif (\array_key_exists('position', $data) && null === $data['position']) {
            $object->setPosition(null);
        }
        if (\array_key_exists('avocats', $data) && null !== $data['avocats']) {
            $values = [];
            foreach ($data['avocats'] as $value) {
                $values[] = $value;
            }
            $object->setAvocats($values);
            unset($data['avocats']);
        } elseif (\array_key_exists('avocats', $data) && null === $data['avocats']) {
            $object->setAvocats(null);
        }
        if (\array_key_exists('autres_parties', $data) && null !== $data['autres_parties']) {
            $values_1 = [];
            foreach ($data['autres_parties'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAutresParties($values_1);
            unset($data['autres_parties']);
        } elseif (\array_key_exists('autres_parties', $data) && null === $data['autres_parties']) {
            $object->setAutresParties(null);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('juridiction') && null !== $data->getJuridiction()) {
            $dataArray['juridiction'] = $data->getJuridiction();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('numero') && null !== $data->getNumero()) {
            $dataArray['numero'] = $data->getNumero();
        }
        if ($data->isInitialized('dateDebutAffaire') && null !== $data->getDateDebutAffaire()) {
            $dataArray['date_debut_affaire'] = $data->getDateDebutAffaire()?->format('Y-m-d');
        }
        if ($data->isInitialized('position') && null !== $data->getPosition()) {
            $dataArray['position'] = $data->getPosition();
        }
        if ($data->isInitialized('avocats') && null !== $data->getAvocats()) {
            $values = [];
            foreach ($data->getAvocats() as $value) {
                $values[] = $value;
            }
            $dataArray['avocats'] = $values;
        }
        if ($data->isInitialized('autresParties') && null !== $data->getAutresParties()) {
            $values_1 = [];
            foreach ($data->getAutresParties() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['autres_parties'] = $values_1;
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
        return [NotificationEntrepriseNouvelleDecisionJusticeItem::class => false];
    }
}
