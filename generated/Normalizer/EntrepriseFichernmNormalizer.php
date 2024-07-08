<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichernm;
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
    class EntrepriseFichernmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichernm::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\EntrepriseFichernm::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichernm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date_immatriculation', $data) && null !== $data['date_immatriculation']) {
                $object->setDateImmatriculation($data['date_immatriculation']);
                unset($data['date_immatriculation']);
            } elseif (\array_key_exists('date_immatriculation', $data) && null === $data['date_immatriculation']) {
                $object->setDateImmatriculation(null);
            }
            if (\array_key_exists('date_radiation', $data) && null !== $data['date_radiation']) {
                $object->setDateRadiation($data['date_radiation']);
                unset($data['date_radiation']);
            } elseif (\array_key_exists('date_radiation', $data) && null === $data['date_radiation']) {
                $object->setDateRadiation(null);
            }
            if (\array_key_exists('date_debut_activite', $data) && null !== $data['date_debut_activite']) {
                $object->setDateDebutActivite($data['date_debut_activite']);
                unset($data['date_debut_activite']);
            } elseif (\array_key_exists('date_debut_activite', $data) && null === $data['date_debut_activite']) {
                $object->setDateDebutActivite(null);
            }
            if (\array_key_exists('date_cessation_activite', $data) && null !== $data['date_cessation_activite']) {
                $object->setDateCessationActivite($data['date_cessation_activite']);
                unset($data['date_cessation_activite']);
            } elseif (\array_key_exists('date_cessation_activite', $data) && null === $data['date_cessation_activite']) {
                $object->setDateCessationActivite(null);
            }
            if (\array_key_exists('chambre_des_metiers', $data) && null !== $data['chambre_des_metiers']) {
                $object->setChambreDesMetiers($data['chambre_des_metiers']);
                unset($data['chambre_des_metiers']);
            } elseif (\array_key_exists('chambre_des_metiers', $data) && null === $data['chambre_des_metiers']) {
                $object->setChambreDesMetiers(null);
            }
            if (\array_key_exists('qualification', $data) && null !== $data['qualification']) {
                $object->setQualification($data['qualification']);
                unset($data['qualification']);
            } elseif (\array_key_exists('qualification', $data) && null === $data['qualification']) {
                $object->setQualification(null);
            }
            if (\array_key_exists('derniere_mise_a_jour', $data) && null !== $data['derniere_mise_a_jour']) {
                $object->setDerniereMiseAJour($data['derniere_mise_a_jour']);
                unset($data['derniere_mise_a_jour']);
            } elseif (\array_key_exists('derniere_mise_a_jour', $data) && null === $data['derniere_mise_a_jour']) {
                $object->setDerniereMiseAJour(null);
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
            if ($object->isInitialized('dateImmatriculation') && null !== $object->getDateImmatriculation()) {
                $data['date_immatriculation'] = $object->getDateImmatriculation();
            }
            if ($object->isInitialized('dateRadiation') && null !== $object->getDateRadiation()) {
                $data['date_radiation'] = $object->getDateRadiation();
            }
            if ($object->isInitialized('dateDebutActivite') && null !== $object->getDateDebutActivite()) {
                $data['date_debut_activite'] = $object->getDateDebutActivite();
            }
            if ($object->isInitialized('dateCessationActivite') && null !== $object->getDateCessationActivite()) {
                $data['date_cessation_activite'] = $object->getDateCessationActivite();
            }
            if ($object->isInitialized('chambreDesMetiers') && null !== $object->getChambreDesMetiers()) {
                $data['chambre_des_metiers'] = $object->getChambreDesMetiers();
            }
            if ($object->isInitialized('qualification') && null !== $object->getQualification()) {
                $data['qualification'] = $object->getQualification();
            }
            if ($object->isInitialized('derniereMiseAJour') && null !== $object->getDerniereMiseAJour()) {
                $data['derniere_mise_a_jour'] = $object->getDerniereMiseAJour();
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
            return [EntrepriseFichernm::class => false];
        }
    }
} else {
    class EntrepriseFichernmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichernm::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Qdequippe\Pappers\Api\Model\EntrepriseFichernm::class === $data::class;
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
            $object = new EntrepriseFichernm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date_immatriculation', $data) && null !== $data['date_immatriculation']) {
                $object->setDateImmatriculation($data['date_immatriculation']);
                unset($data['date_immatriculation']);
            } elseif (\array_key_exists('date_immatriculation', $data) && null === $data['date_immatriculation']) {
                $object->setDateImmatriculation(null);
            }
            if (\array_key_exists('date_radiation', $data) && null !== $data['date_radiation']) {
                $object->setDateRadiation($data['date_radiation']);
                unset($data['date_radiation']);
            } elseif (\array_key_exists('date_radiation', $data) && null === $data['date_radiation']) {
                $object->setDateRadiation(null);
            }
            if (\array_key_exists('date_debut_activite', $data) && null !== $data['date_debut_activite']) {
                $object->setDateDebutActivite($data['date_debut_activite']);
                unset($data['date_debut_activite']);
            } elseif (\array_key_exists('date_debut_activite', $data) && null === $data['date_debut_activite']) {
                $object->setDateDebutActivite(null);
            }
            if (\array_key_exists('date_cessation_activite', $data) && null !== $data['date_cessation_activite']) {
                $object->setDateCessationActivite($data['date_cessation_activite']);
                unset($data['date_cessation_activite']);
            } elseif (\array_key_exists('date_cessation_activite', $data) && null === $data['date_cessation_activite']) {
                $object->setDateCessationActivite(null);
            }
            if (\array_key_exists('chambre_des_metiers', $data) && null !== $data['chambre_des_metiers']) {
                $object->setChambreDesMetiers($data['chambre_des_metiers']);
                unset($data['chambre_des_metiers']);
            } elseif (\array_key_exists('chambre_des_metiers', $data) && null === $data['chambre_des_metiers']) {
                $object->setChambreDesMetiers(null);
            }
            if (\array_key_exists('qualification', $data) && null !== $data['qualification']) {
                $object->setQualification($data['qualification']);
                unset($data['qualification']);
            } elseif (\array_key_exists('qualification', $data) && null === $data['qualification']) {
                $object->setQualification(null);
            }
            if (\array_key_exists('derniere_mise_a_jour', $data) && null !== $data['derniere_mise_a_jour']) {
                $object->setDerniereMiseAJour($data['derniere_mise_a_jour']);
                unset($data['derniere_mise_a_jour']);
            } elseif (\array_key_exists('derniere_mise_a_jour', $data) && null === $data['derniere_mise_a_jour']) {
                $object->setDerniereMiseAJour(null);
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
            if ($object->isInitialized('dateImmatriculation') && null !== $object->getDateImmatriculation()) {
                $data['date_immatriculation'] = $object->getDateImmatriculation();
            }
            if ($object->isInitialized('dateRadiation') && null !== $object->getDateRadiation()) {
                $data['date_radiation'] = $object->getDateRadiation();
            }
            if ($object->isInitialized('dateDebutActivite') && null !== $object->getDateDebutActivite()) {
                $data['date_debut_activite'] = $object->getDateDebutActivite();
            }
            if ($object->isInitialized('dateCessationActivite') && null !== $object->getDateCessationActivite()) {
                $data['date_cessation_activite'] = $object->getDateCessationActivite();
            }
            if ($object->isInitialized('chambreDesMetiers') && null !== $object->getChambreDesMetiers()) {
                $data['chambre_des_metiers'] = $object->getChambreDesMetiers();
            }
            if ($object->isInitialized('qualification') && null !== $object->getQualification()) {
                $data['qualification'] = $object->getQualification();
            }
            if ($object->isInitialized('derniereMiseAJour') && null !== $object->getDerniereMiseAJour()) {
                $data['derniere_mise_a_jour'] = $object->getDerniereMiseAJour();
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
            return [EntrepriseFichernm::class => false];
        }
    }
}
