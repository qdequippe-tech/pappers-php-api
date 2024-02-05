<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ListeDeleteResponse200;
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
    class ListeDeleteResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new ListeDeleteResponse200();
            if (\array_key_exists('notifications_supprimees', $data) && \is_int($data['notifications_supprimees'])) {
                $data['notifications_supprimees'] = (float) $data['notifications_supprimees'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('notifications_supprimees', $data) && null !== $data['notifications_supprimees']) {
                $object->setNotificationsSupprimees($data['notifications_supprimees']);
                unset($data['notifications_supprimees']);
            } elseif (\array_key_exists('notifications_supprimees', $data) && null === $data['notifications_supprimees']) {
                $object->setNotificationsSupprimees(null);
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
            if ($object->isInitialized('notificationsSupprimees') && null !== $object->getNotificationsSupprimees()) {
                $data['notifications_supprimees'] = $object->getNotificationsSupprimees();
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
            return ['Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' => false];
        }
    }
} else {
    class ListeDeleteResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' === $data::class;
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
            $object = new ListeDeleteResponse200();
            if (\array_key_exists('notifications_supprimees', $data) && \is_int($data['notifications_supprimees'])) {
                $data['notifications_supprimees'] = (float) $data['notifications_supprimees'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('notifications_supprimees', $data) && null !== $data['notifications_supprimees']) {
                $object->setNotificationsSupprimees($data['notifications_supprimees']);
                unset($data['notifications_supprimees']);
            } elseif (\array_key_exists('notifications_supprimees', $data) && null === $data['notifications_supprimees']) {
                $object->setNotificationsSupprimees(null);
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
            if ($object->isInitialized('notificationsSupprimees') && null !== $object->getNotificationsSupprimees()) {
                $data['notifications_supprimees'] = $object->getNotificationsSupprimees();
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
            return ['Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' => false];
        }
    }
}
