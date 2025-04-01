<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouveauxComptesPubliesItem;
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
    class NotificationEntrepriseNouveauxComptesPubliesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NotificationEntrepriseNouveauxComptesPubliesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationEntrepriseNouveauxComptesPubliesItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new NotificationEntrepriseNouveauxComptesPubliesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('annonce', $data) && null !== $data['annonce']) {
                $object->setAnnonce($data['annonce']);
                unset($data['annonce']);
            } elseif (\array_key_exists('annonce', $data) && null === $data['annonce']) {
                $object->setAnnonce(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('annee_cloture', $data) && null !== $data['annee_cloture']) {
                $object->setAnneeCloture($data['annee_cloture']);
                unset($data['annee_cloture']);
            } elseif (\array_key_exists('annee_cloture', $data) && null === $data['annee_cloture']) {
                $object->setAnneeCloture(null);
            }
            if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
                $object->setNumeroParution($data['numero_parution']);
                unset($data['numero_parution']);
            } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
                $object->setNumeroParution(null);
            }
            if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
                $object->setBodacc($data['bodacc']);
                unset($data['bodacc']);
            } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
                $object->setBodacc(null);
            }
            if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
                $object->setNumeroAnnonce($data['numero_annonce']);
                unset($data['numero_annonce']);
            } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
                $object->setNumeroAnnonce(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('annonce') && null !== $object->getAnnonce()) {
                $data['annonce'] = $object->getAnnonce();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('anneeCloture') && null !== $object->getAnneeCloture()) {
                $data['annee_cloture'] = $object->getAnneeCloture();
            }
            if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
                $data['numero_parution'] = $object->getNumeroParution();
            }
            if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
                $data['bodacc'] = $object->getBodacc();
            }
            if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
                $data['numero_annonce'] = $object->getNumeroAnnonce();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationEntrepriseNouveauxComptesPubliesItem::class => false];
        }
    }
} else {
    class NotificationEntrepriseNouveauxComptesPubliesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationEntrepriseNouveauxComptesPubliesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationEntrepriseNouveauxComptesPubliesItem::class === $data::class;
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
            $object = new NotificationEntrepriseNouveauxComptesPubliesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('annonce', $data) && null !== $data['annonce']) {
                $object->setAnnonce($data['annonce']);
                unset($data['annonce']);
            } elseif (\array_key_exists('annonce', $data) && null === $data['annonce']) {
                $object->setAnnonce(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('annee_cloture', $data) && null !== $data['annee_cloture']) {
                $object->setAnneeCloture($data['annee_cloture']);
                unset($data['annee_cloture']);
            } elseif (\array_key_exists('annee_cloture', $data) && null === $data['annee_cloture']) {
                $object->setAnneeCloture(null);
            }
            if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
                $object->setNumeroParution($data['numero_parution']);
                unset($data['numero_parution']);
            } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
                $object->setNumeroParution(null);
            }
            if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
                $object->setBodacc($data['bodacc']);
                unset($data['bodacc']);
            } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
                $object->setBodacc(null);
            }
            if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
                $object->setNumeroAnnonce($data['numero_annonce']);
                unset($data['numero_annonce']);
            } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
                $object->setNumeroAnnonce(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('annonce') && null !== $object->getAnnonce()) {
                $data['annonce'] = $object->getAnnonce();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('anneeCloture') && null !== $object->getAnneeCloture()) {
                $data['annee_cloture'] = $object->getAnneeCloture();
            }
            if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
                $data['numero_parution'] = $object->getNumeroParution();
            }
            if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
                $data['bodacc'] = $object->getBodacc();
            }
            if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
                $data['numero_annonce'] = $object->getNumeroAnnonce();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationEntrepriseNouveauxComptesPubliesItem::class => false];
        }
    }
}
