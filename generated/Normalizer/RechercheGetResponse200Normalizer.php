<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200;
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
    class RechercheGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\RechercheGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\RechercheGetResponse200' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new RechercheGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('resultats', $data) && null !== $data['resultats']) {
                $values = [];
                foreach ($data['resultats'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItem', 'json', $context);
                }
                $object->setResultats($values);
                unset($data['resultats']);
            } elseif (\array_key_exists('resultats', $data) && null === $data['resultats']) {
                $object->setResultats(null);
            }
            if (\array_key_exists('total', $data) && null !== $data['total']) {
                $object->setTotal($data['total']);
                unset($data['total']);
            } elseif (\array_key_exists('total', $data) && null === $data['total']) {
                $object->setTotal(null);
            }
            if (\array_key_exists('page', $data) && null !== $data['page']) {
                $object->setPage($data['page']);
                unset($data['page']);
            } elseif (\array_key_exists('page', $data) && null === $data['page']) {
                $object->setPage(null);
            }
            if (\array_key_exists('curseurSuivant', $data) && null !== $data['curseurSuivant']) {
                $object->setCurseurSuivant($data['curseurSuivant']);
                unset($data['curseurSuivant']);
            } elseif (\array_key_exists('curseurSuivant', $data) && null === $data['curseurSuivant']) {
                $object->setCurseurSuivant(null);
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
            if ($object->isInitialized('resultats') && null !== $object->getResultats()) {
                $values = [];
                foreach ($object->getResultats() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['resultats'] = $values;
            }
            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $object->getTotal();
            }
            if ($object->isInitialized('page') && null !== $object->getPage()) {
                $data['page'] = $object->getPage();
            }
            if ($object->isInitialized('curseurSuivant') && null !== $object->getCurseurSuivant()) {
                $data['curseurSuivant'] = $object->getCurseurSuivant();
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
            return ['Qdequippe\Pappers\Api\Model\RechercheGetResponse200' => false];
        }
    }
} else {
    class RechercheGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\RechercheGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\RechercheGetResponse200' === $data::class;
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
            $object = new RechercheGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('resultats', $data) && null !== $data['resultats']) {
                $values = [];
                foreach ($data['resultats'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItem', 'json', $context);
                }
                $object->setResultats($values);
                unset($data['resultats']);
            } elseif (\array_key_exists('resultats', $data) && null === $data['resultats']) {
                $object->setResultats(null);
            }
            if (\array_key_exists('total', $data) && null !== $data['total']) {
                $object->setTotal($data['total']);
                unset($data['total']);
            } elseif (\array_key_exists('total', $data) && null === $data['total']) {
                $object->setTotal(null);
            }
            if (\array_key_exists('page', $data) && null !== $data['page']) {
                $object->setPage($data['page']);
                unset($data['page']);
            } elseif (\array_key_exists('page', $data) && null === $data['page']) {
                $object->setPage(null);
            }
            if (\array_key_exists('curseurSuivant', $data) && null !== $data['curseurSuivant']) {
                $object->setCurseurSuivant($data['curseurSuivant']);
                unset($data['curseurSuivant']);
            } elseif (\array_key_exists('curseurSuivant', $data) && null === $data['curseurSuivant']) {
                $object->setCurseurSuivant(null);
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
            if ($object->isInitialized('resultats') && null !== $object->getResultats()) {
                $values = [];
                foreach ($object->getResultats() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['resultats'] = $values;
            }
            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $object->getTotal();
            }
            if ($object->isInitialized('page') && null !== $object->getPage()) {
                $data['page'] = $object->getPage();
            }
            if ($object->isInitialized('curseurSuivant') && null !== $object->getCurseurSuivant()) {
                $data['curseurSuivant'] = $object->getCurseurSuivant();
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
            return ['Qdequippe\Pappers\Api\Model\RechercheGetResponse200' => false];
        }
    }
}
