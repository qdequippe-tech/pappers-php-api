<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationDirigeantEntreprisesItemQualiteDirigeant;
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
    class NotificationDirigeantEntreprisesItemQualiteDirigeantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NotificationDirigeantEntreprisesItemQualiteDirigeant::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationDirigeantEntreprisesItemQualiteDirigeant::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new NotificationDirigeantEntreprisesItemQualiteDirigeant();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
                unset($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('date_de_naissance_rgpd', $data) && null !== $data['date_de_naissance_rgpd']) {
                $object->setDateDeNaissanceRgpd($data['date_de_naissance_rgpd']);
                unset($data['date_de_naissance_rgpd']);
            } elseif (\array_key_exists('date_de_naissance_rgpd', $data) && null === $data['date_de_naissance_rgpd']) {
                $object->setDateDeNaissanceRgpd(null);
            }
            if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
                $object->setDenomination($data['denomination']);
                unset($data['denomination']);
            } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
                $object->setDenomination(null);
            }
            if (\array_key_exists('siren', $data) && null !== $data['siren']) {
                $object->setSiren($data['siren']);
                unset($data['siren']);
            } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
                $object->setSiren(null);
            }
            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $values = [];
                foreach ($data['valeur'] as $value) {
                    $values[] = $value;
                }
                $object->setValeur($values);
                unset($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }
            if (\array_key_exists('ancienne_valeur', $data) && null !== $data['ancienne_valeur']) {
                $values_1 = [];
                foreach ($data['ancienne_valeur'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAncienneValeur($values_1);
                unset($data['ancienne_valeur']);
            } elseif (\array_key_exists('ancienne_valeur', $data) && null === $data['ancienne_valeur']) {
                $object->setAncienneValeur(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }
            if ($object->isInitialized('dateDeNaissanceRgpd') && null !== $object->getDateDeNaissanceRgpd()) {
                $data['date_de_naissance_rgpd'] = $object->getDateDeNaissanceRgpd();
            }
            if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
                $data['denomination'] = $object->getDenomination();
            }
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $values = [];
                foreach ($object->getValeur() as $value) {
                    $values[] = $value;
                }
                $data['valeur'] = $values;
            }
            if ($object->isInitialized('ancienneValeur') && null !== $object->getAncienneValeur()) {
                $values_1 = [];
                foreach ($object->getAncienneValeur() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['ancienne_valeur'] = $values_1;
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationDirigeantEntreprisesItemQualiteDirigeant::class => false];
        }
    }
} else {
    class NotificationDirigeantEntreprisesItemQualiteDirigeantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationDirigeantEntreprisesItemQualiteDirigeant::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationDirigeantEntreprisesItemQualiteDirigeant::class === $data::class;
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
            $object = new NotificationDirigeantEntreprisesItemQualiteDirigeant();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
                unset($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('date_de_naissance_rgpd', $data) && null !== $data['date_de_naissance_rgpd']) {
                $object->setDateDeNaissanceRgpd($data['date_de_naissance_rgpd']);
                unset($data['date_de_naissance_rgpd']);
            } elseif (\array_key_exists('date_de_naissance_rgpd', $data) && null === $data['date_de_naissance_rgpd']) {
                $object->setDateDeNaissanceRgpd(null);
            }
            if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
                $object->setDenomination($data['denomination']);
                unset($data['denomination']);
            } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
                $object->setDenomination(null);
            }
            if (\array_key_exists('siren', $data) && null !== $data['siren']) {
                $object->setSiren($data['siren']);
                unset($data['siren']);
            } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
                $object->setSiren(null);
            }
            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $values = [];
                foreach ($data['valeur'] as $value) {
                    $values[] = $value;
                }
                $object->setValeur($values);
                unset($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }
            if (\array_key_exists('ancienne_valeur', $data) && null !== $data['ancienne_valeur']) {
                $values_1 = [];
                foreach ($data['ancienne_valeur'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAncienneValeur($values_1);
                unset($data['ancienne_valeur']);
            } elseif (\array_key_exists('ancienne_valeur', $data) && null === $data['ancienne_valeur']) {
                $object->setAncienneValeur(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }
            if ($object->isInitialized('dateDeNaissanceRgpd') && null !== $object->getDateDeNaissanceRgpd()) {
                $data['date_de_naissance_rgpd'] = $object->getDateDeNaissanceRgpd();
            }
            if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
                $data['denomination'] = $object->getDenomination();
            }
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $values = [];
                foreach ($object->getValeur() as $value) {
                    $values[] = $value;
                }
                $data['valeur'] = $values;
            }
            if ($object->isInitialized('ancienneValeur') && null !== $object->getAncienneValeur()) {
                $values_1 = [];
                foreach ($object->getAncienneValeur() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['ancienne_valeur'] = $values_1;
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationDirigeantEntreprisesItemQualiteDirigeant::class => false];
        }
    }
}
