<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes;
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
    class BodaccDepotDesComptesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return BodaccDepotDesComptes::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new BodaccDepotDesComptes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
                $object->setNumeroParution($data['numero_parution']);
                unset($data['numero_parution']);
            } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
                $object->setNumeroParution(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
                $object->setNumeroAnnonce($data['numero_annonce']);
                unset($data['numero_annonce']);
            } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
                $object->setNumeroAnnonce(null);
            }
            if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
                $object->setBodacc($data['bodacc']);
                unset($data['bodacc']);
            } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
                $object->setBodacc(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
                $object->setGreffe($data['greffe']);
                unset($data['greffe']);
            } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
                $object->setGreffe(null);
            }
            if (\array_key_exists('date_cloture', $data) && null !== $data['date_cloture']) {
                $object->setDateCloture($data['date_cloture']);
                unset($data['date_cloture']);
            } elseif (\array_key_exists('date_cloture', $data) && null === $data['date_cloture']) {
                $object->setDateCloture(null);
            }
            if (\array_key_exists('type_depot', $data) && null !== $data['type_depot']) {
                $object->setTypeDepot($data['type_depot']);
                unset($data['type_depot']);
            } elseif (\array_key_exists('type_depot', $data) && null === $data['type_depot']) {
                $object->setTypeDepot(null);
            }
            if (\array_key_exists('descriptif', $data) && null !== $data['descriptif']) {
                $object->setDescriptif($data['descriptif']);
                unset($data['descriptif']);
            } elseif (\array_key_exists('descriptif', $data) && null === $data['descriptif']) {
                $object->setDescriptif(null);
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
            if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
                $data['numero_parution'] = $object->getNumeroParution();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
                $data['numero_annonce'] = $object->getNumeroAnnonce();
            }
            if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
                $data['bodacc'] = $object->getBodacc();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
                $data['greffe'] = $object->getGreffe();
            }
            if ($object->isInitialized('dateCloture') && null !== $object->getDateCloture()) {
                $data['date_cloture'] = $object->getDateCloture();
            }
            if ($object->isInitialized('typeDepot') && null !== $object->getTypeDepot()) {
                $data['type_depot'] = $object->getTypeDepot();
            }
            if ($object->isInitialized('descriptif') && null !== $object->getDescriptif()) {
                $data['descriptif'] = $object->getDescriptif();
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
            return [BodaccDepotDesComptes::class => false];
        }
    }
} else {
    class BodaccDepotDesComptesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return BodaccDepotDesComptes::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes::class === $data::class;
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
            $object = new BodaccDepotDesComptes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
                $object->setNumeroParution($data['numero_parution']);
                unset($data['numero_parution']);
            } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
                $object->setNumeroParution(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
                $object->setNumeroAnnonce($data['numero_annonce']);
                unset($data['numero_annonce']);
            } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
                $object->setNumeroAnnonce(null);
            }
            if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
                $object->setBodacc($data['bodacc']);
                unset($data['bodacc']);
            } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
                $object->setBodacc(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
                $object->setGreffe($data['greffe']);
                unset($data['greffe']);
            } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
                $object->setGreffe(null);
            }
            if (\array_key_exists('date_cloture', $data) && null !== $data['date_cloture']) {
                $object->setDateCloture($data['date_cloture']);
                unset($data['date_cloture']);
            } elseif (\array_key_exists('date_cloture', $data) && null === $data['date_cloture']) {
                $object->setDateCloture(null);
            }
            if (\array_key_exists('type_depot', $data) && null !== $data['type_depot']) {
                $object->setTypeDepot($data['type_depot']);
                unset($data['type_depot']);
            } elseif (\array_key_exists('type_depot', $data) && null === $data['type_depot']) {
                $object->setTypeDepot(null);
            }
            if (\array_key_exists('descriptif', $data) && null !== $data['descriptif']) {
                $object->setDescriptif($data['descriptif']);
                unset($data['descriptif']);
            } elseif (\array_key_exists('descriptif', $data) && null === $data['descriptif']) {
                $object->setDescriptif(null);
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
            if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
                $data['numero_parution'] = $object->getNumeroParution();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
                $data['numero_annonce'] = $object->getNumeroAnnonce();
            }
            if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
                $data['bodacc'] = $object->getBodacc();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
                $data['greffe'] = $object->getGreffe();
            }
            if ($object->isInitialized('dateCloture') && null !== $object->getDateCloture()) {
                $data['date_cloture'] = $object->getDateCloture();
            }
            if ($object->isInitialized('typeDepot') && null !== $object->getTypeDepot()) {
                $data['type_depot'] = $object->getTypeDepot();
            }
            if ($object->isInitialized('descriptif') && null !== $object->getDescriptif()) {
                $data['descriptif'] = $object->getDescriptif();
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
            return [BodaccDepotDesComptes::class => false];
        }
    }
}
