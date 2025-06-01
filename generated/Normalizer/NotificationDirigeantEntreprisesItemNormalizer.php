<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItem;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItemMandatSupprime;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItemNouveauMandat;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItemNouvelleAnnonceProcedureCollectivePublieeItem;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItemQualiteDirigeant;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NotificationDirigeantEntreprisesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return NotificationDirigeantEntreprisesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && NotificationDirigeantEntreprisesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NotificationDirigeantEntreprisesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('nouveau_mandat', $data) && null !== $data['nouveau_mandat']) {
            $object->setNouveauMandat($this->denormalizer->denormalize($data['nouveau_mandat'], NotificationDirigeantEntreprisesItemNouveauMandat::class, 'json', $context));
            unset($data['nouveau_mandat']);
        } elseif (\array_key_exists('nouveau_mandat', $data) && null === $data['nouveau_mandat']) {
            $object->setNouveauMandat(null);
        }
        if (\array_key_exists('mandat_supprime', $data) && null !== $data['mandat_supprime']) {
            $object->setMandatSupprime($this->denormalizer->denormalize($data['mandat_supprime'], NotificationDirigeantEntreprisesItemMandatSupprime::class, 'json', $context));
            unset($data['mandat_supprime']);
        } elseif (\array_key_exists('mandat_supprime', $data) && null === $data['mandat_supprime']) {
            $object->setMandatSupprime(null);
        }
        if (\array_key_exists('qualite_dirigeant', $data) && null !== $data['qualite_dirigeant']) {
            $object->setQualiteDirigeant($this->denormalizer->denormalize($data['qualite_dirigeant'], NotificationDirigeantEntreprisesItemQualiteDirigeant::class, 'json', $context));
            unset($data['qualite_dirigeant']);
        } elseif (\array_key_exists('qualite_dirigeant', $data) && null === $data['qualite_dirigeant']) {
            $object->setQualiteDirigeant(null);
        }
        if (\array_key_exists('nouvelle_annonce_procedure_collective_publiee', $data) && null !== $data['nouvelle_annonce_procedure_collective_publiee']) {
            $values = [];
            foreach ($data['nouvelle_annonce_procedure_collective_publiee'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, NotificationDirigeantEntreprisesItemNouvelleAnnonceProcedureCollectivePublieeItem::class, 'json', $context);
            }
            $object->setNouvelleAnnonceProcedureCollectivePubliee($values);
            unset($data['nouvelle_annonce_procedure_collective_publiee']);
        } elseif (\array_key_exists('nouvelle_annonce_procedure_collective_publiee', $data) && null === $data['nouvelle_annonce_procedure_collective_publiee']) {
            $object->setNouvelleAnnonceProcedureCollectivePubliee(null);
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
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('nouveauMandat') && null !== $data->getNouveauMandat()) {
            $dataArray['nouveau_mandat'] = $this->normalizer->normalize($data->getNouveauMandat(), 'json', $context);
        }
        if ($data->isInitialized('mandatSupprime') && null !== $data->getMandatSupprime()) {
            $dataArray['mandat_supprime'] = $this->normalizer->normalize($data->getMandatSupprime(), 'json', $context);
        }
        if ($data->isInitialized('qualiteDirigeant') && null !== $data->getQualiteDirigeant()) {
            $dataArray['qualite_dirigeant'] = $this->normalizer->normalize($data->getQualiteDirigeant(), 'json', $context);
        }
        if ($data->isInitialized('nouvelleAnnonceProcedureCollectivePubliee') && null !== $data->getNouvelleAnnonceProcedureCollectivePubliee()) {
            $values = [];
            foreach ($data->getNouvelleAnnonceProcedureCollectivePubliee() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['nouvelle_annonce_procedure_collective_publiee'] = $values;
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
        return [NotificationDirigeantEntreprisesItem::class => false];
    }
}
