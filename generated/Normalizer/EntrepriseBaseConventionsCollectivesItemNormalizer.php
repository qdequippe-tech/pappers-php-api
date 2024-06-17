<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
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
    class EntrepriseBaseConventionsCollectivesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseBaseConventionsCollectivesItem();
            if (\array_key_exists('pourcentage', $data) && \is_int($data['pourcentage'])) {
                $data['pourcentage'] = (float) $data['pourcentage'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('idcc', $data) && null !== $data['idcc']) {
                $object->setIdcc($data['idcc']);
                unset($data['idcc']);
            } elseif (\array_key_exists('idcc', $data) && null === $data['idcc']) {
                $object->setIdcc(null);
            }
            if (\array_key_exists('confirmee', $data) && null !== $data['confirmee']) {
                $object->setConfirmee($data['confirmee']);
                unset($data['confirmee']);
            } elseif (\array_key_exists('confirmee', $data) && null === $data['confirmee']) {
                $object->setConfirmee(null);
            }
            if (\array_key_exists('pourcentage', $data) && null !== $data['pourcentage']) {
                $object->setPourcentage($data['pourcentage']);
                unset($data['pourcentage']);
            } elseif (\array_key_exists('pourcentage', $data) && null === $data['pourcentage']) {
                $object->setPourcentage(null);
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
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }
            if ($object->isInitialized('idcc') && null !== $object->getIdcc()) {
                $data['idcc'] = $object->getIdcc();
            }
            if ($object->isInitialized('confirmee') && null !== $object->getConfirmee()) {
                $data['confirmee'] = $object->getConfirmee();
            }
            if ($object->isInitialized('pourcentage') && null !== $object->getPourcentage()) {
                $data['pourcentage'] = $object->getPourcentage();
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
            return ['Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem' => false];
        }
    }
} else {
    class EntrepriseBaseConventionsCollectivesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem' === $data::class;
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
            $object = new EntrepriseBaseConventionsCollectivesItem();
            if (\array_key_exists('pourcentage', $data) && \is_int($data['pourcentage'])) {
                $data['pourcentage'] = (float) $data['pourcentage'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('idcc', $data) && null !== $data['idcc']) {
                $object->setIdcc($data['idcc']);
                unset($data['idcc']);
            } elseif (\array_key_exists('idcc', $data) && null === $data['idcc']) {
                $object->setIdcc(null);
            }
            if (\array_key_exists('confirmee', $data) && null !== $data['confirmee']) {
                $object->setConfirmee($data['confirmee']);
                unset($data['confirmee']);
            } elseif (\array_key_exists('confirmee', $data) && null === $data['confirmee']) {
                $object->setConfirmee(null);
            }
            if (\array_key_exists('pourcentage', $data) && null !== $data['pourcentage']) {
                $object->setPourcentage($data['pourcentage']);
                unset($data['pourcentage']);
            } elseif (\array_key_exists('pourcentage', $data) && null === $data['pourcentage']) {
                $object->setPourcentage(null);
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
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }
            if ($object->isInitialized('idcc') && null !== $object->getIdcc()) {
                $data['idcc'] = $object->getIdcc();
            }
            if ($object->isInitialized('confirmee') && null !== $object->getConfirmee()) {
                $data['confirmee'] = $object->getConfirmee();
            }
            if ($object->isInitialized('pourcentage') && null !== $object->getPourcentage()) {
                $data['pourcentage'] = $object->getPourcentage();
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
            return ['Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem' => false];
        }
    }
}
