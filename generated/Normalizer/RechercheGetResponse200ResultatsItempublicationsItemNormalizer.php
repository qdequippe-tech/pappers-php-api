<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItempublicationsItem;
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
    class RechercheGetResponse200ResultatsItempublicationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RechercheGetResponse200ResultatsItempublicationsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheGetResponse200ResultatsItempublicationsItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new RechercheGetResponse200ResultatsItempublicationsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('contenu', $data) && null !== $data['contenu']) {
                $object->setContenu($data['contenu']);
                unset($data['contenu']);
            } elseif (\array_key_exists('contenu', $data) && null === $data['contenu']) {
                $object->setContenu(null);
            }
            if (\array_key_exists('mentions', $data) && null !== $data['mentions']) {
                $values = [];
                foreach ($data['mentions'] as $value) {
                    $values[] = $value;
                }
                $object->setMentions($values);
                unset($data['mentions']);
            } elseif (\array_key_exists('mentions', $data) && null === $data['mentions']) {
                $object->setMentions(null);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate()?->format('Y-m-d');
            }
            if ($object->isInitialized('contenu') && null !== $object->getContenu()) {
                $data['contenu'] = $object->getContenu();
            }
            if ($object->isInitialized('mentions') && null !== $object->getMentions()) {
                $values = [];
                foreach ($object->getMentions() as $value) {
                    $values[] = $value;
                }
                $data['mentions'] = $values;
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
            return [RechercheGetResponse200ResultatsItempublicationsItem::class => false];
        }
    }
} else {
    class RechercheGetResponse200ResultatsItempublicationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RechercheGetResponse200ResultatsItempublicationsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheGetResponse200ResultatsItempublicationsItem::class === $data::class;
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
            $object = new RechercheGetResponse200ResultatsItempublicationsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('contenu', $data) && null !== $data['contenu']) {
                $object->setContenu($data['contenu']);
                unset($data['contenu']);
            } elseif (\array_key_exists('contenu', $data) && null === $data['contenu']) {
                $object->setContenu(null);
            }
            if (\array_key_exists('mentions', $data) && null !== $data['mentions']) {
                $values = [];
                foreach ($data['mentions'] as $value) {
                    $values[] = $value;
                }
                $object->setMentions($values);
                unset($data['mentions']);
            } elseif (\array_key_exists('mentions', $data) && null === $data['mentions']) {
                $object->setMentions(null);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate()?->format('Y-m-d');
            }
            if ($object->isInitialized('contenu') && null !== $object->getContenu()) {
                $data['contenu'] = $object->getContenu();
            }
            if ($object->isInitialized('mentions') && null !== $object->getMentions()) {
                $values = [];
                foreach ($object->getMentions() as $value) {
                    $values[] = $value;
                }
                $data['mentions'] = $values;
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
            return [RechercheGetResponse200ResultatsItempublicationsItem::class => false];
        }
    }
}
