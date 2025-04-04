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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('nouveauMandat') && null !== $object->getNouveauMandat()) {
                $data['nouveau_mandat'] = $this->normalizer->normalize($object->getNouveauMandat(), 'json', $context);
            }
            if ($object->isInitialized('mandatSupprime') && null !== $object->getMandatSupprime()) {
                $data['mandat_supprime'] = $this->normalizer->normalize($object->getMandatSupprime(), 'json', $context);
            }
            if ($object->isInitialized('qualiteDirigeant') && null !== $object->getQualiteDirigeant()) {
                $data['qualite_dirigeant'] = $this->normalizer->normalize($object->getQualiteDirigeant(), 'json', $context);
            }
            if ($object->isInitialized('nouvelleAnnonceProcedureCollectivePubliee') && null !== $object->getNouvelleAnnonceProcedureCollectivePubliee()) {
                $values = [];
                foreach ($object->getNouvelleAnnonceProcedureCollectivePubliee() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['nouvelle_annonce_procedure_collective_publiee'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationDirigeantEntreprisesItem::class => false];
        }
    }
} else {
    class NotificationDirigeantEntreprisesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationDirigeantEntreprisesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationDirigeantEntreprisesItem::class === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('nouveauMandat') && null !== $object->getNouveauMandat()) {
                $data['nouveau_mandat'] = $this->normalizer->normalize($object->getNouveauMandat(), 'json', $context);
            }
            if ($object->isInitialized('mandatSupprime') && null !== $object->getMandatSupprime()) {
                $data['mandat_supprime'] = $this->normalizer->normalize($object->getMandatSupprime(), 'json', $context);
            }
            if ($object->isInitialized('qualiteDirigeant') && null !== $object->getQualiteDirigeant()) {
                $data['qualite_dirigeant'] = $this->normalizer->normalize($object->getQualiteDirigeant(), 'json', $context);
            }
            if ($object->isInitialized('nouvelleAnnonceProcedureCollectivePubliee') && null !== $object->getNouvelleAnnonceProcedureCollectivePubliee()) {
                $values = [];
                foreach ($object->getNouvelleAnnonceProcedureCollectivePubliee() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['nouvelle_annonce_procedure_collective_publiee'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationDirigeantEntreprisesItem::class => false];
        }
    }
}
