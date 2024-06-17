<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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
    class LabelsBaseInscriptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new LabelsBaseInscriptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('categorie', $data) && null !== $data['categorie']) {
                $object->setCategorie($data['categorie']);
                unset($data['categorie']);
            } elseif (\array_key_exists('categorie', $data) && null === $data['categorie']) {
                $object->setCategorie(null);
            }
            if (\array_key_exists('label_categorie', $data) && null !== $data['label_categorie']) {
                $object->setLabelCategorie($data['label_categorie']);
                unset($data['label_categorie']);
            } elseif (\array_key_exists('label_categorie', $data) && null === $data['label_categorie']) {
                $object->setLabelCategorie(null);
            }
            if (\array_key_exists('statut', $data) && null !== $data['statut']) {
                $object->setStatut($data['statut']);
                unset($data['statut']);
            } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
                $object->setStatut(null);
            }
            if (\array_key_exists('date_inscription', $data) && null !== $data['date_inscription']) {
                $object->setDateInscription($data['date_inscription']);
                unset($data['date_inscription']);
            } elseif (\array_key_exists('date_inscription', $data) && null === $data['date_inscription']) {
                $object->setDateInscription(null);
            }
            if (\array_key_exists('encaisse_fonds', $data) && null !== $data['encaisse_fonds']) {
                $object->setEncaisseFonds($data['encaisse_fonds']);
                unset($data['encaisse_fonds']);
            } elseif (\array_key_exists('encaisse_fonds', $data) && null === $data['encaisse_fonds']) {
                $object->setEncaisseFonds(null);
            }
            if (\array_key_exists('activites', $data) && null !== $data['activites']) {
                $values = [];
                foreach ($data['activites'] as $value) {
                    $values[] = $value;
                }
                $object->setActivites($values);
                unset($data['activites']);
            } elseif (\array_key_exists('activites', $data) && null === $data['activites']) {
                $object->setActivites(null);
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
            if ($object->isInitialized('categorie') && null !== $object->getCategorie()) {
                $data['categorie'] = $object->getCategorie();
            }
            if ($object->isInitialized('labelCategorie') && null !== $object->getLabelCategorie()) {
                $data['label_categorie'] = $object->getLabelCategorie();
            }
            if ($object->isInitialized('statut') && null !== $object->getStatut()) {
                $data['statut'] = $object->getStatut();
            }
            if ($object->isInitialized('dateInscription') && null !== $object->getDateInscription()) {
                $data['date_inscription'] = $object->getDateInscription();
            }
            if ($object->isInitialized('encaisseFonds') && null !== $object->getEncaisseFonds()) {
                $data['encaisse_fonds'] = $object->getEncaisseFonds();
            }
            if ($object->isInitialized('activites') && null !== $object->getActivites()) {
                $values = [];
                foreach ($object->getActivites() as $value) {
                    $values[] = $value;
                }
                $data['activites'] = $values;
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
            return ['Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem' => false];
        }
    }
} else {
    class LabelsBaseInscriptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem' === $data::class;
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
            $object = new LabelsBaseInscriptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('categorie', $data) && null !== $data['categorie']) {
                $object->setCategorie($data['categorie']);
                unset($data['categorie']);
            } elseif (\array_key_exists('categorie', $data) && null === $data['categorie']) {
                $object->setCategorie(null);
            }
            if (\array_key_exists('label_categorie', $data) && null !== $data['label_categorie']) {
                $object->setLabelCategorie($data['label_categorie']);
                unset($data['label_categorie']);
            } elseif (\array_key_exists('label_categorie', $data) && null === $data['label_categorie']) {
                $object->setLabelCategorie(null);
            }
            if (\array_key_exists('statut', $data) && null !== $data['statut']) {
                $object->setStatut($data['statut']);
                unset($data['statut']);
            } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
                $object->setStatut(null);
            }
            if (\array_key_exists('date_inscription', $data) && null !== $data['date_inscription']) {
                $object->setDateInscription($data['date_inscription']);
                unset($data['date_inscription']);
            } elseif (\array_key_exists('date_inscription', $data) && null === $data['date_inscription']) {
                $object->setDateInscription(null);
            }
            if (\array_key_exists('encaisse_fonds', $data) && null !== $data['encaisse_fonds']) {
                $object->setEncaisseFonds($data['encaisse_fonds']);
                unset($data['encaisse_fonds']);
            } elseif (\array_key_exists('encaisse_fonds', $data) && null === $data['encaisse_fonds']) {
                $object->setEncaisseFonds(null);
            }
            if (\array_key_exists('activites', $data) && null !== $data['activites']) {
                $values = [];
                foreach ($data['activites'] as $value) {
                    $values[] = $value;
                }
                $object->setActivites($values);
                unset($data['activites']);
            } elseif (\array_key_exists('activites', $data) && null === $data['activites']) {
                $object->setActivites(null);
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
            if ($object->isInitialized('categorie') && null !== $object->getCategorie()) {
                $data['categorie'] = $object->getCategorie();
            }
            if ($object->isInitialized('labelCategorie') && null !== $object->getLabelCategorie()) {
                $data['label_categorie'] = $object->getLabelCategorie();
            }
            if ($object->isInitialized('statut') && null !== $object->getStatut()) {
                $data['statut'] = $object->getStatut();
            }
            if ($object->isInitialized('dateInscription') && null !== $object->getDateInscription()) {
                $data['date_inscription'] = $object->getDateInscription();
            }
            if ($object->isInitialized('encaisseFonds') && null !== $object->getEncaisseFonds()) {
                $data['encaisse_fonds'] = $object->getEncaisseFonds();
            }
            if ($object->isInitialized('activites') && null !== $object->getActivites()) {
                $values = [];
                foreach ($object->getActivites() as $value) {
                    $values[] = $value;
                }
                $data['activites'] = $values;
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
            return ['Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem' => false];
        }
    }
}
