<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\BodaccImmatriculation;
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
    class BodaccImmatriculationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return BodaccImmatriculation::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && BodaccImmatriculation::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new BodaccImmatriculation();
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
            if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
                $object->setNomEntreprise($data['nom_entreprise']);
                unset($data['nom_entreprise']);
            } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
                $object->setNomEntreprise(null);
            }
            if (\array_key_exists('personne_morale', $data) && null !== $data['personne_morale']) {
                $object->setPersonneMorale($data['personne_morale']);
                unset($data['personne_morale']);
            } elseif (\array_key_exists('personne_morale', $data) && null === $data['personne_morale']) {
                $object->setPersonneMorale(null);
            }
            if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
                $object->setDenomination($data['denomination']);
                unset($data['denomination']);
            } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
                $object->setDenomination(null);
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
                unset($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }
            if (\array_key_exists('administration', $data) && null !== $data['administration']) {
                $object->setAdministration($data['administration']);
                unset($data['administration']);
            } elseif (\array_key_exists('administration', $data) && null === $data['administration']) {
                $object->setAdministration(null);
            }
            if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
                $object->setAdresse($data['adresse']);
                unset($data['adresse']);
            } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
                $object->setAdresse(null);
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
            if ($object->isInitialized('nomEntreprise') && null !== $object->getNomEntreprise()) {
                $data['nom_entreprise'] = $object->getNomEntreprise();
            }
            if ($object->isInitialized('personneMorale') && null !== $object->getPersonneMorale()) {
                $data['personne_morale'] = $object->getPersonneMorale();
            }
            if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
                $data['denomination'] = $object->getDenomination();
            }
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }
            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }
            if ($object->isInitialized('administration') && null !== $object->getAdministration()) {
                $data['administration'] = $object->getAdministration();
            }
            if ($object->isInitialized('adresse') && null !== $object->getAdresse()) {
                $data['adresse'] = $object->getAdresse();
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
            return [BodaccImmatriculation::class => false];
        }
    }
} else {
    class BodaccImmatriculationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return BodaccImmatriculation::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && BodaccImmatriculation::class === $data::class;
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
            $object = new BodaccImmatriculation();
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
            if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
                $object->setNomEntreprise($data['nom_entreprise']);
                unset($data['nom_entreprise']);
            } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
                $object->setNomEntreprise(null);
            }
            if (\array_key_exists('personne_morale', $data) && null !== $data['personne_morale']) {
                $object->setPersonneMorale($data['personne_morale']);
                unset($data['personne_morale']);
            } elseif (\array_key_exists('personne_morale', $data) && null === $data['personne_morale']) {
                $object->setPersonneMorale(null);
            }
            if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
                $object->setDenomination($data['denomination']);
                unset($data['denomination']);
            } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
                $object->setDenomination(null);
            }
            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
                unset($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }
            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
                unset($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }
            if (\array_key_exists('administration', $data) && null !== $data['administration']) {
                $object->setAdministration($data['administration']);
                unset($data['administration']);
            } elseif (\array_key_exists('administration', $data) && null === $data['administration']) {
                $object->setAdministration(null);
            }
            if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
                $object->setAdresse($data['adresse']);
                unset($data['adresse']);
            } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
                $object->setAdresse(null);
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
            if ($object->isInitialized('nomEntreprise') && null !== $object->getNomEntreprise()) {
                $data['nom_entreprise'] = $object->getNomEntreprise();
            }
            if ($object->isInitialized('personneMorale') && null !== $object->getPersonneMorale()) {
                $data['personne_morale'] = $object->getPersonneMorale();
            }
            if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
                $data['denomination'] = $object->getDenomination();
            }
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }
            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }
            if ($object->isInitialized('administration') && null !== $object->getAdministration()) {
                $data['administration'] = $object->getAdministration();
            }
            if ($object->isInitialized('adresse') && null !== $object->getAdresse()) {
                $data['adresse'] = $object->getAdresse();
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
            return [BodaccImmatriculation::class => false];
        }
    }
}
