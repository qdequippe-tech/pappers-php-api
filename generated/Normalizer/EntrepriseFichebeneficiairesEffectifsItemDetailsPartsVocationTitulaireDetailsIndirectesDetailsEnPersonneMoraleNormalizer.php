<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale;
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
    class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMoraleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale();
            if (\array_key_exists('pourcentage_pleine_propriete', $data) && \is_int($data['pourcentage_pleine_propriete'])) {
                $data['pourcentage_pleine_propriete'] = (float) $data['pourcentage_pleine_propriete'];
            }
            if (\array_key_exists('pourcentage_nue_propriete', $data) && \is_int($data['pourcentage_nue_propriete'])) {
                $data['pourcentage_nue_propriete'] = (float) $data['pourcentage_nue_propriete'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pourcentage_pleine_propriete', $data) && null !== $data['pourcentage_pleine_propriete']) {
                $object->setPourcentagePleinePropriete($data['pourcentage_pleine_propriete']);
                unset($data['pourcentage_pleine_propriete']);
            } elseif (\array_key_exists('pourcentage_pleine_propriete', $data) && null === $data['pourcentage_pleine_propriete']) {
                $object->setPourcentagePleinePropriete(null);
            }
            if (\array_key_exists('pourcentage_nue_propriete', $data) && null !== $data['pourcentage_nue_propriete']) {
                $object->setPourcentageNuePropriete($data['pourcentage_nue_propriete']);
                unset($data['pourcentage_nue_propriete']);
            } elseif (\array_key_exists('pourcentage_nue_propriete', $data) && null === $data['pourcentage_nue_propriete']) {
                $object->setPourcentageNuePropriete(null);
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
            if ($object->isInitialized('pourcentagePleinePropriete') && null !== $object->getPourcentagePleinePropriete()) {
                $data['pourcentage_pleine_propriete'] = $object->getPourcentagePleinePropriete();
            }
            if ($object->isInitialized('pourcentageNuePropriete') && null !== $object->getPourcentageNuePropriete()) {
                $data['pourcentage_nue_propriete'] = $object->getPourcentageNuePropriete();
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
            return [EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class => false];
        }
    }
} else {
    class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMoraleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class === $data::class;
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
            $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale();
            if (\array_key_exists('pourcentage_pleine_propriete', $data) && \is_int($data['pourcentage_pleine_propriete'])) {
                $data['pourcentage_pleine_propriete'] = (float) $data['pourcentage_pleine_propriete'];
            }
            if (\array_key_exists('pourcentage_nue_propriete', $data) && \is_int($data['pourcentage_nue_propriete'])) {
                $data['pourcentage_nue_propriete'] = (float) $data['pourcentage_nue_propriete'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pourcentage_pleine_propriete', $data) && null !== $data['pourcentage_pleine_propriete']) {
                $object->setPourcentagePleinePropriete($data['pourcentage_pleine_propriete']);
                unset($data['pourcentage_pleine_propriete']);
            } elseif (\array_key_exists('pourcentage_pleine_propriete', $data) && null === $data['pourcentage_pleine_propriete']) {
                $object->setPourcentagePleinePropriete(null);
            }
            if (\array_key_exists('pourcentage_nue_propriete', $data) && null !== $data['pourcentage_nue_propriete']) {
                $object->setPourcentageNuePropriete($data['pourcentage_nue_propriete']);
                unset($data['pourcentage_nue_propriete']);
            } elseif (\array_key_exists('pourcentage_nue_propriete', $data) && null === $data['pourcentage_nue_propriete']) {
                $object->setPourcentageNuePropriete(null);
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
            if ($object->isInitialized('pourcentagePleinePropriete') && null !== $object->getPourcentagePleinePropriete()) {
                $data['pourcentage_pleine_propriete'] = $object->getPourcentagePleinePropriete();
            }
            if ($object->isInitialized('pourcentageNuePropriete') && null !== $object->getPourcentageNuePropriete()) {
                $data['pourcentage_nue_propriete'] = $object->getPourcentageNuePropriete();
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
            return [EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class => false];
        }
    }
}
