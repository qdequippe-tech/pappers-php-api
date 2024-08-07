<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem;
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
    class EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data) && null !== $data['code']) {
                $object->setCode($data['code']);
                unset($data['code']);
            } elseif (\array_key_exists('code', $data) && null === $data['code']) {
                $object->setCode(null);
            }
            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
                unset($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }
            if (\array_key_exists('colonnes', $data) && null !== $data['colonnes']) {
                $values = [];
                foreach ($data['colonnes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem::class, 'json', $context);
                }
                $object->setColonnes($values);
                unset($data['colonnes']);
            } elseif (\array_key_exists('colonnes', $data) && null === $data['colonnes']) {
                $object->setColonnes(null);
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
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }
            if ($object->isInitialized('colonnes') && null !== $object->getColonnes()) {
                $values = [];
                foreach ($object->getColonnes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['colonnes'] = $values;
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
            return [EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class => false];
        }
    }
} else {
    class EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class === $data::class;
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
            $object = new EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data) && null !== $data['code']) {
                $object->setCode($data['code']);
                unset($data['code']);
            } elseif (\array_key_exists('code', $data) && null === $data['code']) {
                $object->setCode(null);
            }
            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
                unset($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }
            if (\array_key_exists('colonnes', $data) && null !== $data['colonnes']) {
                $values = [];
                foreach ($data['colonnes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem::class, 'json', $context);
                }
                $object->setColonnes($values);
                unset($data['colonnes']);
            } elseif (\array_key_exists('colonnes', $data) && null === $data['colonnes']) {
                $object->setColonnes(null);
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
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }
            if ($object->isInitialized('colonnes') && null !== $object->getColonnes()) {
                $values = [];
                foreach ($object->getColonnes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['colonnes'] = $values;
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
            return [EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class => false];
        }
    }
}
