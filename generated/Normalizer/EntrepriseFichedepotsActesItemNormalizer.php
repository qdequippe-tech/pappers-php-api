<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItemActesItem;
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
    class EntrepriseFichedepotsActesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichedepotsActesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFichedepotsActesItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichedepotsActesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date_depot', $data) && null !== $data['date_depot']) {
                $object->setDateDepot(\DateTime::createFromFormat('Y-m-d', $data['date_depot'])->setTime(0, 0, 0));
                unset($data['date_depot']);
            } elseif (\array_key_exists('date_depot', $data) && null === $data['date_depot']) {
                $object->setDateDepot(null);
            }
            if (\array_key_exists('date_depot_formate', $data) && null !== $data['date_depot_formate']) {
                $object->setDateDepotFormate($data['date_depot_formate']);
                unset($data['date_depot_formate']);
            } elseif (\array_key_exists('date_depot_formate', $data) && null === $data['date_depot_formate']) {
                $object->setDateDepotFormate(null);
            }
            if (\array_key_exists('disponible', $data) && null !== $data['disponible']) {
                $object->setDisponible($data['disponible']);
                unset($data['disponible']);
            } elseif (\array_key_exists('disponible', $data) && null === $data['disponible']) {
                $object->setDisponible(null);
            }
            if (\array_key_exists('nom_fichier_pdf', $data) && null !== $data['nom_fichier_pdf']) {
                $object->setNomFichierPdf($data['nom_fichier_pdf']);
                unset($data['nom_fichier_pdf']);
            } elseif (\array_key_exists('nom_fichier_pdf', $data) && null === $data['nom_fichier_pdf']) {
                $object->setNomFichierPdf(null);
            }
            if (\array_key_exists('token', $data) && null !== $data['token']) {
                $object->setToken($data['token']);
                unset($data['token']);
            } elseif (\array_key_exists('token', $data) && null === $data['token']) {
                $object->setToken(null);
            }
            if (\array_key_exists('actes', $data) && null !== $data['actes']) {
                $values = [];
                foreach ($data['actes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntrepriseFichedepotsActesItemActesItem::class, 'json', $context);
                }
                $object->setActes($values);
                unset($data['actes']);
            } elseif (\array_key_exists('actes', $data) && null === $data['actes']) {
                $object->setActes(null);
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
            if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
                $data['date_depot'] = $object->getDateDepot()?->format('Y-m-d');
            }
            if ($object->isInitialized('dateDepotFormate') && null !== $object->getDateDepotFormate()) {
                $data['date_depot_formate'] = $object->getDateDepotFormate();
            }
            if ($object->isInitialized('disponible') && null !== $object->getDisponible()) {
                $data['disponible'] = $object->getDisponible();
            }
            if ($object->isInitialized('nomFichierPdf') && null !== $object->getNomFichierPdf()) {
                $data['nom_fichier_pdf'] = $object->getNomFichierPdf();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('actes') && null !== $object->getActes()) {
                $values = [];
                foreach ($object->getActes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actes'] = $values;
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
            return [EntrepriseFichedepotsActesItem::class => false];
        }
    }
} else {
    class EntrepriseFichedepotsActesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichedepotsActesItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFichedepotsActesItem::class === $data::class;
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
            $object = new EntrepriseFichedepotsActesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date_depot', $data) && null !== $data['date_depot']) {
                $object->setDateDepot(\DateTime::createFromFormat('Y-m-d', $data['date_depot'])->setTime(0, 0, 0));
                unset($data['date_depot']);
            } elseif (\array_key_exists('date_depot', $data) && null === $data['date_depot']) {
                $object->setDateDepot(null);
            }
            if (\array_key_exists('date_depot_formate', $data) && null !== $data['date_depot_formate']) {
                $object->setDateDepotFormate($data['date_depot_formate']);
                unset($data['date_depot_formate']);
            } elseif (\array_key_exists('date_depot_formate', $data) && null === $data['date_depot_formate']) {
                $object->setDateDepotFormate(null);
            }
            if (\array_key_exists('disponible', $data) && null !== $data['disponible']) {
                $object->setDisponible($data['disponible']);
                unset($data['disponible']);
            } elseif (\array_key_exists('disponible', $data) && null === $data['disponible']) {
                $object->setDisponible(null);
            }
            if (\array_key_exists('nom_fichier_pdf', $data) && null !== $data['nom_fichier_pdf']) {
                $object->setNomFichierPdf($data['nom_fichier_pdf']);
                unset($data['nom_fichier_pdf']);
            } elseif (\array_key_exists('nom_fichier_pdf', $data) && null === $data['nom_fichier_pdf']) {
                $object->setNomFichierPdf(null);
            }
            if (\array_key_exists('token', $data) && null !== $data['token']) {
                $object->setToken($data['token']);
                unset($data['token']);
            } elseif (\array_key_exists('token', $data) && null === $data['token']) {
                $object->setToken(null);
            }
            if (\array_key_exists('actes', $data) && null !== $data['actes']) {
                $values = [];
                foreach ($data['actes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntrepriseFichedepotsActesItemActesItem::class, 'json', $context);
                }
                $object->setActes($values);
                unset($data['actes']);
            } elseif (\array_key_exists('actes', $data) && null === $data['actes']) {
                $object->setActes(null);
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
            if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
                $data['date_depot'] = $object->getDateDepot()?->format('Y-m-d');
            }
            if ($object->isInitialized('dateDepotFormate') && null !== $object->getDateDepotFormate()) {
                $data['date_depot_formate'] = $object->getDateDepotFormate();
            }
            if ($object->isInitialized('disponible') && null !== $object->getDisponible()) {
                $data['disponible'] = $object->getDisponible();
            }
            if ($object->isInitialized('nomFichierPdf') && null !== $object->getNomFichierPdf()) {
                $data['nom_fichier_pdf'] = $object->getNomFichierPdf();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('actes') && null !== $object->getActes()) {
                $values = [];
                foreach ($object->getActes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actes'] = $values;
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
            return [EntrepriseFichedepotsActesItem::class => false];
        }
    }
}
