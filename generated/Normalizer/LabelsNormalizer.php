<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Labels;
use Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem;
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
    class LabelsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Labels::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Labels::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new Labels();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('certificats', $data) && null !== $data['certificats']) {
                $values = [];
                foreach ($data['certificats'] as $value) {
                    $values[] = $value;
                }
                $object->setCertificats($values);
                unset($data['certificats']);
            } elseif (\array_key_exists('certificats', $data) && null === $data['certificats']) {
                $object->setCertificats(null);
            }
            if (\array_key_exists('specialites', $data) && null !== $data['specialites']) {
                $values_1 = [];
                foreach ($data['specialites'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSpecialites($values_1);
                unset($data['specialites']);
            } elseif (\array_key_exists('specialites', $data) && null === $data['specialites']) {
                $object->setSpecialites(null);
            }
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $values_2 = [];
                foreach ($data['notes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setNotes($values_2);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('numero_immatriculation', $data) && null !== $data['numero_immatriculation']) {
                $object->setNumeroImmatriculation($data['numero_immatriculation']);
                unset($data['numero_immatriculation']);
            } elseif (\array_key_exists('numero_immatriculation', $data) && null === $data['numero_immatriculation']) {
                $object->setNumeroImmatriculation(null);
            }
            if (\array_key_exists('inscriptions', $data) && null !== $data['inscriptions']) {
                $values_3 = [];
                foreach ($data['inscriptions'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, LabelsBaseInscriptionsItem::class, 'json', $context);
                }
                $object->setInscriptions($values_3);
                unset($data['inscriptions']);
            } elseif (\array_key_exists('inscriptions', $data) && null === $data['inscriptions']) {
                $object->setInscriptions(null);
            }
            if (\array_key_exists('nb_etablissements_concernes', $data) && null !== $data['nb_etablissements_concernes']) {
                $object->setNbEtablissementsConcernes($data['nb_etablissements_concernes']);
                unset($data['nb_etablissements_concernes']);
            } elseif (\array_key_exists('nb_etablissements_concernes', $data) && null === $data['nb_etablissements_concernes']) {
                $object->setNbEtablissementsConcernes(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('certificats') && null !== $object->getCertificats()) {
                $values = [];
                foreach ($object->getCertificats() as $value) {
                    $values[] = $value;
                }
                $data['certificats'] = $values;
            }
            if ($object->isInitialized('specialites') && null !== $object->getSpecialites()) {
                $values_1 = [];
                foreach ($object->getSpecialites() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['specialites'] = $values_1;
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $values_2 = [];
                foreach ($object->getNotes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['notes'] = $values_2;
            }
            if ($object->isInitialized('numeroImmatriculation') && null !== $object->getNumeroImmatriculation()) {
                $data['numero_immatriculation'] = $object->getNumeroImmatriculation();
            }
            if ($object->isInitialized('inscriptions') && null !== $object->getInscriptions()) {
                $values_3 = [];
                foreach ($object->getInscriptions() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['inscriptions'] = $values_3;
            }
            if ($object->isInitialized('nbEtablissementsConcernes') && null !== $object->getNbEtablissementsConcernes()) {
                $data['nb_etablissements_concernes'] = $object->getNbEtablissementsConcernes();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Labels::class => false];
        }
    }
} else {
    class LabelsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Labels::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Labels::class === $data::class;
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
            $object = new Labels();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('certificats', $data) && null !== $data['certificats']) {
                $values = [];
                foreach ($data['certificats'] as $value) {
                    $values[] = $value;
                }
                $object->setCertificats($values);
                unset($data['certificats']);
            } elseif (\array_key_exists('certificats', $data) && null === $data['certificats']) {
                $object->setCertificats(null);
            }
            if (\array_key_exists('specialites', $data) && null !== $data['specialites']) {
                $values_1 = [];
                foreach ($data['specialites'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSpecialites($values_1);
                unset($data['specialites']);
            } elseif (\array_key_exists('specialites', $data) && null === $data['specialites']) {
                $object->setSpecialites(null);
            }
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $values_2 = [];
                foreach ($data['notes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setNotes($values_2);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('numero_immatriculation', $data) && null !== $data['numero_immatriculation']) {
                $object->setNumeroImmatriculation($data['numero_immatriculation']);
                unset($data['numero_immatriculation']);
            } elseif (\array_key_exists('numero_immatriculation', $data) && null === $data['numero_immatriculation']) {
                $object->setNumeroImmatriculation(null);
            }
            if (\array_key_exists('inscriptions', $data) && null !== $data['inscriptions']) {
                $values_3 = [];
                foreach ($data['inscriptions'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, LabelsBaseInscriptionsItem::class, 'json', $context);
                }
                $object->setInscriptions($values_3);
                unset($data['inscriptions']);
            } elseif (\array_key_exists('inscriptions', $data) && null === $data['inscriptions']) {
                $object->setInscriptions(null);
            }
            if (\array_key_exists('nb_etablissements_concernes', $data) && null !== $data['nb_etablissements_concernes']) {
                $object->setNbEtablissementsConcernes($data['nb_etablissements_concernes']);
                unset($data['nb_etablissements_concernes']);
            } elseif (\array_key_exists('nb_etablissements_concernes', $data) && null === $data['nb_etablissements_concernes']) {
                $object->setNbEtablissementsConcernes(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('certificats') && null !== $object->getCertificats()) {
                $values = [];
                foreach ($object->getCertificats() as $value) {
                    $values[] = $value;
                }
                $data['certificats'] = $values;
            }
            if ($object->isInitialized('specialites') && null !== $object->getSpecialites()) {
                $values_1 = [];
                foreach ($object->getSpecialites() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['specialites'] = $values_1;
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $values_2 = [];
                foreach ($object->getNotes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['notes'] = $values_2;
            }
            if ($object->isInitialized('numeroImmatriculation') && null !== $object->getNumeroImmatriculation()) {
                $data['numero_immatriculation'] = $object->getNumeroImmatriculation();
            }
            if ($object->isInitialized('inscriptions') && null !== $object->getInscriptions()) {
                $values_3 = [];
                foreach ($object->getInscriptions() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['inscriptions'] = $values_3;
            }
            if ($object->isInitialized('nbEtablissementsConcernes') && null !== $object->getNbEtablissementsConcernes()) {
                $data['nb_etablissements_concernes'] = $object->getNbEtablissementsConcernes();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Labels::class => false];
        }
    }
}
