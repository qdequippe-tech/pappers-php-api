<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItem;
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
    class PersonnePolitiquementExposeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return PersonnePolitiquementExposee::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new PersonnePolitiquementExposee();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
                $object->setEnCours($data['en_cours']);
                unset($data['en_cours']);
            } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
                $object->setEnCours(null);
            }
            if (\array_key_exists('fonctions', $data) && null !== $data['fonctions']) {
                $values = [];
                foreach ($data['fonctions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, PersonnePolitiquementExposeeFonctionsItem::class, 'json', $context);
                }
                $object->setFonctions($values);
                unset($data['fonctions']);
            } elseif (\array_key_exists('fonctions', $data) && null === $data['fonctions']) {
                $object->setFonctions(null);
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
            if ($object->isInitialized('enCours') && null !== $object->getEnCours()) {
                $data['en_cours'] = $object->getEnCours();
            }
            if ($object->isInitialized('fonctions') && null !== $object->getFonctions()) {
                $values = [];
                foreach ($object->getFonctions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['fonctions'] = $values;
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
            return [PersonnePolitiquementExposee::class => false];
        }
    }
} else {
    class PersonnePolitiquementExposeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return PersonnePolitiquementExposee::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee::class === $data::class;
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
            $object = new PersonnePolitiquementExposee();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
                $object->setEnCours($data['en_cours']);
                unset($data['en_cours']);
            } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
                $object->setEnCours(null);
            }
            if (\array_key_exists('fonctions', $data) && null !== $data['fonctions']) {
                $values = [];
                foreach ($data['fonctions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, PersonnePolitiquementExposeeFonctionsItem::class, 'json', $context);
                }
                $object->setFonctions($values);
                unset($data['fonctions']);
            } elseif (\array_key_exists('fonctions', $data) && null === $data['fonctions']) {
                $object->setFonctions(null);
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
            if ($object->isInitialized('enCours') && null !== $object->getEnCours()) {
                $data['en_cours'] = $object->getEnCours();
            }
            if ($object->isInitialized('fonctions') && null !== $object->getFonctions()) {
                $values = [];
                foreach ($object->getFonctions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['fonctions'] = $values;
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
            return [PersonnePolitiquementExposee::class => false];
        }
    }
}
