<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem;
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
    class EntrepriseComptesGetResponse200ItemItemSectionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseComptesGetResponse200ItemItemSectionsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseComptesGetResponse200ItemItemSectionsItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseComptesGetResponse200ItemItemSectionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
                unset($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }
            if (\array_key_exists('liasses', $data) && null !== $data['liasses']) {
                $values = [];
                foreach ($data['liasses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class, 'json', $context);
                }
                $object->setLiasses($values);
                unset($data['liasses']);
            } elseif (\array_key_exists('liasses', $data) && null === $data['liasses']) {
                $object->setLiasses(null);
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
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }
            if ($object->isInitialized('liasses') && null !== $object->getLiasses()) {
                $values = [];
                foreach ($object->getLiasses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['liasses'] = $values;
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
            return [EntrepriseComptesGetResponse200ItemItemSectionsItem::class => false];
        }
    }
} else {
    class EntrepriseComptesGetResponse200ItemItemSectionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseComptesGetResponse200ItemItemSectionsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseComptesGetResponse200ItemItemSectionsItem::class === $data::class;
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
            $object = new EntrepriseComptesGetResponse200ItemItemSectionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
                unset($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }
            if (\array_key_exists('liasses', $data) && null !== $data['liasses']) {
                $values = [];
                foreach ($data['liasses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class, 'json', $context);
                }
                $object->setLiasses($values);
                unset($data['liasses']);
            } elseif (\array_key_exists('liasses', $data) && null === $data['liasses']) {
                $object->setLiasses(null);
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
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }
            if ($object->isInitialized('liasses') && null !== $object->getLiasses()) {
                $values = [];
                foreach ($object->getLiasses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['liasses'] = $values;
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
            return [EntrepriseComptesGetResponse200ItemItemSectionsItem::class => false];
        }
    }
}
