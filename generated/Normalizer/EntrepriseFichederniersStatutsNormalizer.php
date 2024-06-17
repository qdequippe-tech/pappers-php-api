<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts;
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
    class EntrepriseFichederniersStatutsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichederniersStatuts();
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
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('decision', $data) && null !== $data['decision']) {
                $object->setDecision($data['decision']);
                unset($data['decision']);
            } elseif (\array_key_exists('decision', $data) && null === $data['decision']) {
                $object->setDecision(null);
            }
            if (\array_key_exists('date_acte', $data) && null !== $data['date_acte']) {
                $object->setDateActe(\DateTime::createFromFormat('Y-m-d', $data['date_acte'])->setTime(0, 0, 0));
                unset($data['date_acte']);
            } elseif (\array_key_exists('date_acte', $data) && null === $data['date_acte']) {
                $object->setDateActe(null);
            }
            if (\array_key_exists('date_acte_formate', $data) && null !== $data['date_acte_formate']) {
                $object->setDateActeFormate($data['date_acte_formate']);
                unset($data['date_acte_formate']);
            } elseif (\array_key_exists('date_acte_formate', $data) && null === $data['date_acte_formate']) {
                $object->setDateActeFormate(null);
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
            if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
                $data['date_depot'] = $object->getDateDepot()->format('Y-m-d');
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('decision') && null !== $object->getDecision()) {
                $data['decision'] = $object->getDecision();
            }
            if ($object->isInitialized('dateActe') && null !== $object->getDateActe()) {
                $data['date_acte'] = $object->getDateActe()->format('Y-m-d');
            }
            if ($object->isInitialized('dateActeFormate') && null !== $object->getDateActeFormate()) {
                $data['date_acte_formate'] = $object->getDateActeFormate();
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
            return ['Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts' => false];
        }
    }
} else {
    class EntrepriseFichederniersStatutsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts' === $data::class;
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
            $object = new EntrepriseFichederniersStatuts();
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
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('decision', $data) && null !== $data['decision']) {
                $object->setDecision($data['decision']);
                unset($data['decision']);
            } elseif (\array_key_exists('decision', $data) && null === $data['decision']) {
                $object->setDecision(null);
            }
            if (\array_key_exists('date_acte', $data) && null !== $data['date_acte']) {
                $object->setDateActe(\DateTime::createFromFormat('Y-m-d', $data['date_acte'])->setTime(0, 0, 0));
                unset($data['date_acte']);
            } elseif (\array_key_exists('date_acte', $data) && null === $data['date_acte']) {
                $object->setDateActe(null);
            }
            if (\array_key_exists('date_acte_formate', $data) && null !== $data['date_acte_formate']) {
                $object->setDateActeFormate($data['date_acte_formate']);
                unset($data['date_acte_formate']);
            } elseif (\array_key_exists('date_acte_formate', $data) && null === $data['date_acte_formate']) {
                $object->setDateActeFormate(null);
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
            if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
                $data['date_depot'] = $object->getDateDepot()->format('Y-m-d');
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('decision') && null !== $object->getDecision()) {
                $data['decision'] = $object->getDecision();
            }
            if ($object->isInitialized('dateActe') && null !== $object->getDateActe()) {
                $data['date_acte'] = $object->getDateActe()->format('Y-m-d');
            }
            if ($object->isInitialized('dateActeFormate') && null !== $object->getDateActeFormate()) {
                $data['date_acte_formate'] = $object->getDateActeFormate();
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
            return ['Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts' => false];
        }
    }
}
