<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes;
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
    class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire();
            if (\array_key_exists('pourcentage_directes', $data) && \is_int($data['pourcentage_directes'])) {
                $data['pourcentage_directes'] = (float) $data['pourcentage_directes'];
            }
            if (\array_key_exists('pourcentage_indirectes', $data) && \is_int($data['pourcentage_indirectes'])) {
                $data['pourcentage_indirectes'] = (float) $data['pourcentage_indirectes'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pourcentage_directes', $data) && null !== $data['pourcentage_directes']) {
                $object->setPourcentageDirectes($data['pourcentage_directes']);
                unset($data['pourcentage_directes']);
            } elseif (\array_key_exists('pourcentage_directes', $data) && null === $data['pourcentage_directes']) {
                $object->setPourcentageDirectes(null);
            }
            if (\array_key_exists('pourcentage_indirectes', $data) && null !== $data['pourcentage_indirectes']) {
                $object->setPourcentageIndirectes($data['pourcentage_indirectes']);
                unset($data['pourcentage_indirectes']);
            } elseif (\array_key_exists('pourcentage_indirectes', $data) && null === $data['pourcentage_indirectes']) {
                $object->setPourcentageIndirectes(null);
            }
            if (\array_key_exists('details_directes', $data) && null !== $data['details_directes']) {
                $object->setDetailsDirectes($this->denormalizer->denormalize($data['details_directes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class, 'json', $context));
                unset($data['details_directes']);
            } elseif (\array_key_exists('details_directes', $data) && null === $data['details_directes']) {
                $object->setDetailsDirectes(null);
            }
            if (\array_key_exists('details_indirectes', $data) && null !== $data['details_indirectes']) {
                $object->setDetailsIndirectes($this->denormalizer->denormalize($data['details_indirectes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class, 'json', $context));
                unset($data['details_indirectes']);
            } elseif (\array_key_exists('details_indirectes', $data) && null === $data['details_indirectes']) {
                $object->setDetailsIndirectes(null);
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
            if ($object->isInitialized('pourcentageDirectes') && null !== $object->getPourcentageDirectes()) {
                $data['pourcentage_directes'] = $object->getPourcentageDirectes();
            }
            if ($object->isInitialized('pourcentageIndirectes') && null !== $object->getPourcentageIndirectes()) {
                $data['pourcentage_indirectes'] = $object->getPourcentageIndirectes();
            }
            if ($object->isInitialized('detailsDirectes') && null !== $object->getDetailsDirectes()) {
                $data['details_directes'] = $this->normalizer->normalize($object->getDetailsDirectes(), 'json', $context);
            }
            if ($object->isInitialized('detailsIndirectes') && null !== $object->getDetailsIndirectes()) {
                $data['details_indirectes'] = $this->normalizer->normalize($object->getDetailsIndirectes(), 'json', $context);
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
            return [EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => false];
        }
    }
} else {
    class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class === $data::class;
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
            $object = new EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire();
            if (\array_key_exists('pourcentage_directes', $data) && \is_int($data['pourcentage_directes'])) {
                $data['pourcentage_directes'] = (float) $data['pourcentage_directes'];
            }
            if (\array_key_exists('pourcentage_indirectes', $data) && \is_int($data['pourcentage_indirectes'])) {
                $data['pourcentage_indirectes'] = (float) $data['pourcentage_indirectes'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pourcentage_directes', $data) && null !== $data['pourcentage_directes']) {
                $object->setPourcentageDirectes($data['pourcentage_directes']);
                unset($data['pourcentage_directes']);
            } elseif (\array_key_exists('pourcentage_directes', $data) && null === $data['pourcentage_directes']) {
                $object->setPourcentageDirectes(null);
            }
            if (\array_key_exists('pourcentage_indirectes', $data) && null !== $data['pourcentage_indirectes']) {
                $object->setPourcentageIndirectes($data['pourcentage_indirectes']);
                unset($data['pourcentage_indirectes']);
            } elseif (\array_key_exists('pourcentage_indirectes', $data) && null === $data['pourcentage_indirectes']) {
                $object->setPourcentageIndirectes(null);
            }
            if (\array_key_exists('details_directes', $data) && null !== $data['details_directes']) {
                $object->setDetailsDirectes($this->denormalizer->denormalize($data['details_directes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class, 'json', $context));
                unset($data['details_directes']);
            } elseif (\array_key_exists('details_directes', $data) && null === $data['details_directes']) {
                $object->setDetailsDirectes(null);
            }
            if (\array_key_exists('details_indirectes', $data) && null !== $data['details_indirectes']) {
                $object->setDetailsIndirectes($this->denormalizer->denormalize($data['details_indirectes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class, 'json', $context));
                unset($data['details_indirectes']);
            } elseif (\array_key_exists('details_indirectes', $data) && null === $data['details_indirectes']) {
                $object->setDetailsIndirectes(null);
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
            if ($object->isInitialized('pourcentageDirectes') && null !== $object->getPourcentageDirectes()) {
                $data['pourcentage_directes'] = $object->getPourcentageDirectes();
            }
            if ($object->isInitialized('pourcentageIndirectes') && null !== $object->getPourcentageIndirectes()) {
                $data['pourcentage_indirectes'] = $object->getPourcentageIndirectes();
            }
            if ($object->isInitialized('detailsDirectes') && null !== $object->getDetailsDirectes()) {
                $data['details_directes'] = $this->normalizer->normalize($object->getDetailsDirectes(), 'json', $context);
            }
            if ($object->isInitialized('detailsIndirectes') && null !== $object->getDetailsIndirectes()) {
                $data['details_indirectes'] = $this->normalizer->normalize($object->getDetailsIndirectes(), 'json', $context);
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
            return [EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => false];
        }
    }
}
