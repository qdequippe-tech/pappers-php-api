<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200;
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
    class ConformitePersonnePhysiqueGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new ConformitePersonnePhysiqueGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('personne_politiquement_exposee', $data) && null !== $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee($this->denormalizer->denormalize($data['personne_politiquement_exposee'], 'Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee', 'json', $context));
                unset($data['personne_politiquement_exposee']);
            } elseif (\array_key_exists('personne_politiquement_exposee', $data) && null === $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee(null);
            }
            if (\array_key_exists('sanctions_en_cours', $data) && null !== $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours($data['sanctions_en_cours']);
                unset($data['sanctions_en_cours']);
            } elseif (\array_key_exists('sanctions_en_cours', $data) && null === $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours(null);
            }
            if (\array_key_exists('sanctions', $data) && null !== $data['sanctions']) {
                $values = [];
                foreach ($data['sanctions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\Pappers\Api\Model\Sanction', 'json', $context);
                }
                $object->setSanctions($values);
                unset($data['sanctions']);
            } elseif (\array_key_exists('sanctions', $data) && null === $data['sanctions']) {
                $object->setSanctions(null);
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
            if ($object->isInitialized('personnePolitiquementExposee') && null !== $object->getPersonnePolitiquementExposee()) {
                $data['personne_politiquement_exposee'] = $this->normalizer->normalize($object->getPersonnePolitiquementExposee(), 'json', $context);
            }
            if ($object->isInitialized('sanctionsEnCours') && null !== $object->getSanctionsEnCours()) {
                $data['sanctions_en_cours'] = $object->getSanctionsEnCours();
            }
            if ($object->isInitialized('sanctions') && null !== $object->getSanctions()) {
                $values = [];
                foreach ($object->getSanctions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sanctions'] = $values;
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
            return ['Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200' => false];
        }
    }
} else {
    class ConformitePersonnePhysiqueGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200' === $data::class;
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
            $object = new ConformitePersonnePhysiqueGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('personne_politiquement_exposee', $data) && null !== $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee($this->denormalizer->denormalize($data['personne_politiquement_exposee'], 'Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee', 'json', $context));
                unset($data['personne_politiquement_exposee']);
            } elseif (\array_key_exists('personne_politiquement_exposee', $data) && null === $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee(null);
            }
            if (\array_key_exists('sanctions_en_cours', $data) && null !== $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours($data['sanctions_en_cours']);
                unset($data['sanctions_en_cours']);
            } elseif (\array_key_exists('sanctions_en_cours', $data) && null === $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours(null);
            }
            if (\array_key_exists('sanctions', $data) && null !== $data['sanctions']) {
                $values = [];
                foreach ($data['sanctions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\Pappers\Api\Model\Sanction', 'json', $context);
                }
                $object->setSanctions($values);
                unset($data['sanctions']);
            } elseif (\array_key_exists('sanctions', $data) && null === $data['sanctions']) {
                $object->setSanctions(null);
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
            if ($object->isInitialized('personnePolitiquementExposee') && null !== $object->getPersonnePolitiquementExposee()) {
                $data['personne_politiquement_exposee'] = $this->normalizer->normalize($object->getPersonnePolitiquementExposee(), 'json', $context);
            }
            if ($object->isInitialized('sanctionsEnCours') && null !== $object->getSanctionsEnCours()) {
                $data['sanctions_en_cours'] = $object->getSanctionsEnCours();
            }
            if ($object->isInitialized('sanctions') && null !== $object->getSanctions()) {
                $values = [];
                foreach ($object->getSanctions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sanctions'] = $values;
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
            return ['Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200' => false];
        }
    }
}
