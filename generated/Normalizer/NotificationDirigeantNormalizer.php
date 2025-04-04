<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationDirigeant;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantDetailsDirigeant;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItem;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantNouveauxMandatsPolitiquesItem;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantNouvellesSanctionsItem;
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
    class NotificationDirigeantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NotificationDirigeant::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationDirigeant::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new NotificationDirigeant();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dirigeant', $data) && null !== $data['dirigeant']) {
                $object->setDirigeant($data['dirigeant']);
                unset($data['dirigeant']);
            } elseif (\array_key_exists('dirigeant', $data) && null === $data['dirigeant']) {
                $object->setDirigeant(null);
            }
            if (\array_key_exists('information', $data) && null !== $data['information']) {
                $object->setInformation($data['information']);
                unset($data['information']);
            } elseif (\array_key_exists('information', $data) && null === $data['information']) {
                $object->setInformation(null);
            }
            if (\array_key_exists('details_dirigeant', $data) && null !== $data['details_dirigeant']) {
                $object->setDetailsDirigeant($this->denormalizer->denormalize($data['details_dirigeant'], NotificationDirigeantDetailsDirigeant::class, 'json', $context));
                unset($data['details_dirigeant']);
            } elseif (\array_key_exists('details_dirigeant', $data) && null === $data['details_dirigeant']) {
                $object->setDetailsDirigeant(null);
            }
            if (\array_key_exists('nouvelles_sanctions', $data) && null !== $data['nouvelles_sanctions']) {
                $values = [];
                foreach ($data['nouvelles_sanctions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, NotificationDirigeantNouvellesSanctionsItem::class, 'json', $context);
                }
                $object->setNouvellesSanctions($values);
                unset($data['nouvelles_sanctions']);
            } elseif (\array_key_exists('nouvelles_sanctions', $data) && null === $data['nouvelles_sanctions']) {
                $object->setNouvellesSanctions(null);
            }
            if (\array_key_exists('nouveaux_mandats_politiques', $data) && null !== $data['nouveaux_mandats_politiques']) {
                $values_1 = [];
                foreach ($data['nouveaux_mandats_politiques'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, NotificationDirigeantNouveauxMandatsPolitiquesItem::class, 'json', $context);
                }
                $object->setNouveauxMandatsPolitiques($values_1);
                unset($data['nouveaux_mandats_politiques']);
            } elseif (\array_key_exists('nouveaux_mandats_politiques', $data) && null === $data['nouveaux_mandats_politiques']) {
                $object->setNouveauxMandatsPolitiques(null);
            }
            if (\array_key_exists('entreprises', $data) && null !== $data['entreprises']) {
                $values_2 = [];
                foreach ($data['entreprises'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, NotificationDirigeantEntreprisesItem::class, 'json', $context);
                }
                $object->setEntreprises($values_2);
                unset($data['entreprises']);
            } elseif (\array_key_exists('entreprises', $data) && null === $data['entreprises']) {
                $object->setEntreprises(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dirigeant') && null !== $object->getDirigeant()) {
                $data['dirigeant'] = $object->getDirigeant();
            }
            if ($object->isInitialized('information') && null !== $object->getInformation()) {
                $data['information'] = $object->getInformation();
            }
            if ($object->isInitialized('detailsDirigeant') && null !== $object->getDetailsDirigeant()) {
                $data['details_dirigeant'] = $this->normalizer->normalize($object->getDetailsDirigeant(), 'json', $context);
            }
            if ($object->isInitialized('nouvellesSanctions') && null !== $object->getNouvellesSanctions()) {
                $values = [];
                foreach ($object->getNouvellesSanctions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['nouvelles_sanctions'] = $values;
            }
            if ($object->isInitialized('nouveauxMandatsPolitiques') && null !== $object->getNouveauxMandatsPolitiques()) {
                $values_1 = [];
                foreach ($object->getNouveauxMandatsPolitiques() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['nouveaux_mandats_politiques'] = $values_1;
            }
            if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
                $values_2 = [];
                foreach ($object->getEntreprises() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['entreprises'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationDirigeant::class => false];
        }
    }
} else {
    class NotificationDirigeantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationDirigeant::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationDirigeant::class === $data::class;
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
            $object = new NotificationDirigeant();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dirigeant', $data) && null !== $data['dirigeant']) {
                $object->setDirigeant($data['dirigeant']);
                unset($data['dirigeant']);
            } elseif (\array_key_exists('dirigeant', $data) && null === $data['dirigeant']) {
                $object->setDirigeant(null);
            }
            if (\array_key_exists('information', $data) && null !== $data['information']) {
                $object->setInformation($data['information']);
                unset($data['information']);
            } elseif (\array_key_exists('information', $data) && null === $data['information']) {
                $object->setInformation(null);
            }
            if (\array_key_exists('details_dirigeant', $data) && null !== $data['details_dirigeant']) {
                $object->setDetailsDirigeant($this->denormalizer->denormalize($data['details_dirigeant'], NotificationDirigeantDetailsDirigeant::class, 'json', $context));
                unset($data['details_dirigeant']);
            } elseif (\array_key_exists('details_dirigeant', $data) && null === $data['details_dirigeant']) {
                $object->setDetailsDirigeant(null);
            }
            if (\array_key_exists('nouvelles_sanctions', $data) && null !== $data['nouvelles_sanctions']) {
                $values = [];
                foreach ($data['nouvelles_sanctions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, NotificationDirigeantNouvellesSanctionsItem::class, 'json', $context);
                }
                $object->setNouvellesSanctions($values);
                unset($data['nouvelles_sanctions']);
            } elseif (\array_key_exists('nouvelles_sanctions', $data) && null === $data['nouvelles_sanctions']) {
                $object->setNouvellesSanctions(null);
            }
            if (\array_key_exists('nouveaux_mandats_politiques', $data) && null !== $data['nouveaux_mandats_politiques']) {
                $values_1 = [];
                foreach ($data['nouveaux_mandats_politiques'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, NotificationDirigeantNouveauxMandatsPolitiquesItem::class, 'json', $context);
                }
                $object->setNouveauxMandatsPolitiques($values_1);
                unset($data['nouveaux_mandats_politiques']);
            } elseif (\array_key_exists('nouveaux_mandats_politiques', $data) && null === $data['nouveaux_mandats_politiques']) {
                $object->setNouveauxMandatsPolitiques(null);
            }
            if (\array_key_exists('entreprises', $data) && null !== $data['entreprises']) {
                $values_2 = [];
                foreach ($data['entreprises'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, NotificationDirigeantEntreprisesItem::class, 'json', $context);
                }
                $object->setEntreprises($values_2);
                unset($data['entreprises']);
            } elseif (\array_key_exists('entreprises', $data) && null === $data['entreprises']) {
                $object->setEntreprises(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('dirigeant') && null !== $object->getDirigeant()) {
                $data['dirigeant'] = $object->getDirigeant();
            }
            if ($object->isInitialized('information') && null !== $object->getInformation()) {
                $data['information'] = $object->getInformation();
            }
            if ($object->isInitialized('detailsDirigeant') && null !== $object->getDetailsDirigeant()) {
                $data['details_dirigeant'] = $this->normalizer->normalize($object->getDetailsDirigeant(), 'json', $context);
            }
            if ($object->isInitialized('nouvellesSanctions') && null !== $object->getNouvellesSanctions()) {
                $values = [];
                foreach ($object->getNouvellesSanctions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['nouvelles_sanctions'] = $values;
            }
            if ($object->isInitialized('nouveauxMandatsPolitiques') && null !== $object->getNouveauxMandatsPolitiques()) {
                $values_1 = [];
                foreach ($object->getNouveauxMandatsPolitiques() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['nouveaux_mandats_politiques'] = $values_1;
            }
            if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
                $values_2 = [];
                foreach ($object->getEntreprises() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['entreprises'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationDirigeant::class => false];
        }
    }
}
