<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItem;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItemSourcesItem;
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
    class PersonnePolitiquementExposeeFonctionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return PersonnePolitiquementExposeeFonctionsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new PersonnePolitiquementExposeeFonctionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fonction', $data) && null !== $data['fonction']) {
                $object->setFonction($data['fonction']);
                unset($data['fonction']);
            } elseif (\array_key_exists('fonction', $data) && null === $data['fonction']) {
                $object->setFonction(null);
            }
            if (\array_key_exists('pays', $data) && null !== $data['pays']) {
                $object->setPays($data['pays']);
                unset($data['pays']);
            } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
                $object->setPays(null);
            }
            if (\array_key_exists('code_pays', $data) && null !== $data['code_pays']) {
                $object->setCodePays($data['code_pays']);
                unset($data['code_pays']);
            } elseif (\array_key_exists('code_pays', $data) && null === $data['code_pays']) {
                $object->setCodePays(null);
            }
            if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
                $object->setEnCours($data['en_cours']);
                unset($data['en_cours']);
            } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
                $object->setEnCours(null);
            }
            if (\array_key_exists('date_debut', $data) && null !== $data['date_debut']) {
                $object->setDateDebut($data['date_debut']);
                unset($data['date_debut']);
            } elseif (\array_key_exists('date_debut', $data) && null === $data['date_debut']) {
                $object->setDateDebut(null);
            }
            if (\array_key_exists('date_fin', $data) && null !== $data['date_fin']) {
                $object->setDateFin($data['date_fin']);
                unset($data['date_fin']);
            } elseif (\array_key_exists('date_fin', $data) && null === $data['date_fin']) {
                $object->setDateFin(null);
            }
            if (\array_key_exists('sources', $data) && null !== $data['sources']) {
                $values = [];
                foreach ($data['sources'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, PersonnePolitiquementExposeeFonctionsItemSourcesItem::class, 'json', $context);
                }
                $object->setSources($values);
                unset($data['sources']);
            } elseif (\array_key_exists('sources', $data) && null === $data['sources']) {
                $object->setSources(null);
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
            if ($object->isInitialized('fonction') && null !== $object->getFonction()) {
                $data['fonction'] = $object->getFonction();
            }
            if ($object->isInitialized('pays') && null !== $object->getPays()) {
                $data['pays'] = $object->getPays();
            }
            if ($object->isInitialized('codePays') && null !== $object->getCodePays()) {
                $data['code_pays'] = $object->getCodePays();
            }
            if ($object->isInitialized('enCours') && null !== $object->getEnCours()) {
                $data['en_cours'] = $object->getEnCours();
            }
            if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
                $data['date_debut'] = $object->getDateDebut();
            }
            if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
                $data['date_fin'] = $object->getDateFin();
            }
            if ($object->isInitialized('sources') && null !== $object->getSources()) {
                $values = [];
                foreach ($object->getSources() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sources'] = $values;
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
            return [PersonnePolitiquementExposeeFonctionsItem::class => false];
        }
    }
} else {
    class PersonnePolitiquementExposeeFonctionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return PersonnePolitiquementExposeeFonctionsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItem::class === $data::class;
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
            $object = new PersonnePolitiquementExposeeFonctionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fonction', $data) && null !== $data['fonction']) {
                $object->setFonction($data['fonction']);
                unset($data['fonction']);
            } elseif (\array_key_exists('fonction', $data) && null === $data['fonction']) {
                $object->setFonction(null);
            }
            if (\array_key_exists('pays', $data) && null !== $data['pays']) {
                $object->setPays($data['pays']);
                unset($data['pays']);
            } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
                $object->setPays(null);
            }
            if (\array_key_exists('code_pays', $data) && null !== $data['code_pays']) {
                $object->setCodePays($data['code_pays']);
                unset($data['code_pays']);
            } elseif (\array_key_exists('code_pays', $data) && null === $data['code_pays']) {
                $object->setCodePays(null);
            }
            if (\array_key_exists('en_cours', $data) && null !== $data['en_cours']) {
                $object->setEnCours($data['en_cours']);
                unset($data['en_cours']);
            } elseif (\array_key_exists('en_cours', $data) && null === $data['en_cours']) {
                $object->setEnCours(null);
            }
            if (\array_key_exists('date_debut', $data) && null !== $data['date_debut']) {
                $object->setDateDebut($data['date_debut']);
                unset($data['date_debut']);
            } elseif (\array_key_exists('date_debut', $data) && null === $data['date_debut']) {
                $object->setDateDebut(null);
            }
            if (\array_key_exists('date_fin', $data) && null !== $data['date_fin']) {
                $object->setDateFin($data['date_fin']);
                unset($data['date_fin']);
            } elseif (\array_key_exists('date_fin', $data) && null === $data['date_fin']) {
                $object->setDateFin(null);
            }
            if (\array_key_exists('sources', $data) && null !== $data['sources']) {
                $values = [];
                foreach ($data['sources'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, PersonnePolitiquementExposeeFonctionsItemSourcesItem::class, 'json', $context);
                }
                $object->setSources($values);
                unset($data['sources']);
            } elseif (\array_key_exists('sources', $data) && null === $data['sources']) {
                $object->setSources(null);
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
            if ($object->isInitialized('fonction') && null !== $object->getFonction()) {
                $data['fonction'] = $object->getFonction();
            }
            if ($object->isInitialized('pays') && null !== $object->getPays()) {
                $data['pays'] = $object->getPays();
            }
            if ($object->isInitialized('codePays') && null !== $object->getCodePays()) {
                $data['code_pays'] = $object->getCodePays();
            }
            if ($object->isInitialized('enCours') && null !== $object->getEnCours()) {
                $data['en_cours'] = $object->getEnCours();
            }
            if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
                $data['date_debut'] = $object->getDateDebut();
            }
            if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
                $data['date_fin'] = $object->getDateFin();
            }
            if ($object->isInitialized('sources') && null !== $object->getSources()) {
                $values = [];
                foreach ($object->getSources() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sources'] = $values;
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
            return [PersonnePolitiquementExposeeFonctionsItem::class => false];
        }
    }
}
