<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseCodeNaf;
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
    class NotificationEntrepriseCodeNafNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NotificationEntrepriseCodeNaf::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationEntrepriseCodeNaf::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new NotificationEntrepriseCodeNaf();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $object->setValeur($data['valeur']);
                unset($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }
            if (\array_key_exists('ancienne_valeur', $data) && null !== $data['ancienne_valeur']) {
                $object->setAncienneValeur($data['ancienne_valeur']);
                unset($data['ancienne_valeur']);
            } elseif (\array_key_exists('ancienne_valeur', $data) && null === $data['ancienne_valeur']) {
                $object->setAncienneValeur(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
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
            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $data['valeur'] = $object->getValeur();
            }
            if ($object->isInitialized('ancienneValeur') && null !== $object->getAncienneValeur()) {
                $data['ancienne_valeur'] = $object->getAncienneValeur();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [NotificationEntrepriseCodeNaf::class => false];
        }
    }
} else {
    class NotificationEntrepriseCodeNafNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationEntrepriseCodeNaf::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationEntrepriseCodeNaf::class === $data::class;
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
            $object = new NotificationEntrepriseCodeNaf();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $object->setValeur($data['valeur']);
                unset($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }
            if (\array_key_exists('ancienne_valeur', $data) && null !== $data['ancienne_valeur']) {
                $object->setAncienneValeur($data['ancienne_valeur']);
                unset($data['ancienne_valeur']);
            } elseif (\array_key_exists('ancienne_valeur', $data) && null === $data['ancienne_valeur']) {
                $object->setAncienneValeur(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
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
            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $data['valeur'] = $object->getValeur();
            }
            if ($object->isInitialized('ancienneValeur') && null !== $object->getAncienneValeur()) {
                $data['ancienne_valeur'] = $object->getAncienneValeur();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [NotificationEntrepriseCodeNaf::class => false];
        }
    }
}
