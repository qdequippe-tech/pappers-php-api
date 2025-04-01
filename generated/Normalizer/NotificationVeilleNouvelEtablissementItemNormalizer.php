<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationVeilleNouvelEtablissementItem;
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
    class NotificationVeilleNouvelEtablissementItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NotificationVeilleNouvelEtablissementItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationVeilleNouvelEtablissementItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new NotificationVeilleNouvelEtablissementItem();
            if (\array_key_exists('numero_voie', $data) && \is_int($data['numero_voie'])) {
                $data['numero_voie'] = (float) $data['numero_voie'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
                unset($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }
            if (\array_key_exists('numero_voie', $data) && null !== $data['numero_voie']) {
                $object->setNumeroVoie($data['numero_voie']);
                unset($data['numero_voie']);
            } elseif (\array_key_exists('numero_voie', $data) && null === $data['numero_voie']) {
                $object->setNumeroVoie(null);
            }
            if (\array_key_exists('indice_repetition', $data) && null !== $data['indice_repetition']) {
                $object->setIndiceRepetition($data['indice_repetition']);
                unset($data['indice_repetition']);
            } elseif (\array_key_exists('indice_repetition', $data) && null === $data['indice_repetition']) {
                $object->setIndiceRepetition(null);
            }
            if (\array_key_exists('type_voie', $data) && null !== $data['type_voie']) {
                $object->setTypeVoie($data['type_voie']);
                unset($data['type_voie']);
            } elseif (\array_key_exists('type_voie', $data) && null === $data['type_voie']) {
                $object->setTypeVoie(null);
            }
            if (\array_key_exists('libelle_voie', $data) && null !== $data['libelle_voie']) {
                $object->setLibelleVoie($data['libelle_voie']);
                unset($data['libelle_voie']);
            } elseif (\array_key_exists('libelle_voie', $data) && null === $data['libelle_voie']) {
                $object->setLibelleVoie(null);
            }
            if (\array_key_exists('complement_adresse', $data) && null !== $data['complement_adresse']) {
                $object->setComplementAdresse($data['complement_adresse']);
                unset($data['complement_adresse']);
            } elseif (\array_key_exists('complement_adresse', $data) && null === $data['complement_adresse']) {
                $object->setComplementAdresse(null);
            }
            if (\array_key_exists('adresse_ligne_1', $data) && null !== $data['adresse_ligne_1']) {
                $object->setAdresseLigne1($data['adresse_ligne_1']);
                unset($data['adresse_ligne_1']);
            } elseif (\array_key_exists('adresse_ligne_1', $data) && null === $data['adresse_ligne_1']) {
                $object->setAdresseLigne1(null);
            }
            if (\array_key_exists('adresse_ligne_2', $data) && null !== $data['adresse_ligne_2']) {
                $object->setAdresseLigne2($data['adresse_ligne_2']);
                unset($data['adresse_ligne_2']);
            } elseif (\array_key_exists('adresse_ligne_2', $data) && null === $data['adresse_ligne_2']) {
                $object->setAdresseLigne2(null);
            }
            if (\array_key_exists('code_postal', $data) && null !== $data['code_postal']) {
                $object->setCodePostal($data['code_postal']);
                unset($data['code_postal']);
            } elseif (\array_key_exists('code_postal', $data) && null === $data['code_postal']) {
                $object->setCodePostal(null);
            }
            if (\array_key_exists('ville', $data) && null !== $data['ville']) {
                $object->setVille($data['ville']);
                unset($data['ville']);
            } elseif (\array_key_exists('ville', $data) && null === $data['ville']) {
                $object->setVille(null);
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
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
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
            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }
            if ($object->isInitialized('numeroVoie') && null !== $object->getNumeroVoie()) {
                $data['numero_voie'] = $object->getNumeroVoie();
            }
            if ($object->isInitialized('indiceRepetition') && null !== $object->getIndiceRepetition()) {
                $data['indice_repetition'] = $object->getIndiceRepetition();
            }
            if ($object->isInitialized('typeVoie') && null !== $object->getTypeVoie()) {
                $data['type_voie'] = $object->getTypeVoie();
            }
            if ($object->isInitialized('libelleVoie') && null !== $object->getLibelleVoie()) {
                $data['libelle_voie'] = $object->getLibelleVoie();
            }
            if ($object->isInitialized('complementAdresse') && null !== $object->getComplementAdresse()) {
                $data['complement_adresse'] = $object->getComplementAdresse();
            }
            if ($object->isInitialized('adresseLigne1') && null !== $object->getAdresseLigne1()) {
                $data['adresse_ligne_1'] = $object->getAdresseLigne1();
            }
            if ($object->isInitialized('adresseLigne2') && null !== $object->getAdresseLigne2()) {
                $data['adresse_ligne_2'] = $object->getAdresseLigne2();
            }
            if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
                $data['code_postal'] = $object->getCodePostal();
            }
            if ($object->isInitialized('ville') && null !== $object->getVille()) {
                $data['ville'] = $object->getVille();
            }
            if ($object->isInitialized('pays') && null !== $object->getPays()) {
                $data['pays'] = $object->getPays();
            }
            if ($object->isInitialized('codePays') && null !== $object->getCodePays()) {
                $data['code_pays'] = $object->getCodePays();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [NotificationVeilleNouvelEtablissementItem::class => false];
        }
    }
} else {
    class NotificationVeilleNouvelEtablissementItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationVeilleNouvelEtablissementItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationVeilleNouvelEtablissementItem::class === $data::class;
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
            $object = new NotificationVeilleNouvelEtablissementItem();
            if (\array_key_exists('numero_voie', $data) && \is_int($data['numero_voie'])) {
                $data['numero_voie'] = (float) $data['numero_voie'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
                unset($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }
            if (\array_key_exists('numero_voie', $data) && null !== $data['numero_voie']) {
                $object->setNumeroVoie($data['numero_voie']);
                unset($data['numero_voie']);
            } elseif (\array_key_exists('numero_voie', $data) && null === $data['numero_voie']) {
                $object->setNumeroVoie(null);
            }
            if (\array_key_exists('indice_repetition', $data) && null !== $data['indice_repetition']) {
                $object->setIndiceRepetition($data['indice_repetition']);
                unset($data['indice_repetition']);
            } elseif (\array_key_exists('indice_repetition', $data) && null === $data['indice_repetition']) {
                $object->setIndiceRepetition(null);
            }
            if (\array_key_exists('type_voie', $data) && null !== $data['type_voie']) {
                $object->setTypeVoie($data['type_voie']);
                unset($data['type_voie']);
            } elseif (\array_key_exists('type_voie', $data) && null === $data['type_voie']) {
                $object->setTypeVoie(null);
            }
            if (\array_key_exists('libelle_voie', $data) && null !== $data['libelle_voie']) {
                $object->setLibelleVoie($data['libelle_voie']);
                unset($data['libelle_voie']);
            } elseif (\array_key_exists('libelle_voie', $data) && null === $data['libelle_voie']) {
                $object->setLibelleVoie(null);
            }
            if (\array_key_exists('complement_adresse', $data) && null !== $data['complement_adresse']) {
                $object->setComplementAdresse($data['complement_adresse']);
                unset($data['complement_adresse']);
            } elseif (\array_key_exists('complement_adresse', $data) && null === $data['complement_adresse']) {
                $object->setComplementAdresse(null);
            }
            if (\array_key_exists('adresse_ligne_1', $data) && null !== $data['adresse_ligne_1']) {
                $object->setAdresseLigne1($data['adresse_ligne_1']);
                unset($data['adresse_ligne_1']);
            } elseif (\array_key_exists('adresse_ligne_1', $data) && null === $data['adresse_ligne_1']) {
                $object->setAdresseLigne1(null);
            }
            if (\array_key_exists('adresse_ligne_2', $data) && null !== $data['adresse_ligne_2']) {
                $object->setAdresseLigne2($data['adresse_ligne_2']);
                unset($data['adresse_ligne_2']);
            } elseif (\array_key_exists('adresse_ligne_2', $data) && null === $data['adresse_ligne_2']) {
                $object->setAdresseLigne2(null);
            }
            if (\array_key_exists('code_postal', $data) && null !== $data['code_postal']) {
                $object->setCodePostal($data['code_postal']);
                unset($data['code_postal']);
            } elseif (\array_key_exists('code_postal', $data) && null === $data['code_postal']) {
                $object->setCodePostal(null);
            }
            if (\array_key_exists('ville', $data) && null !== $data['ville']) {
                $object->setVille($data['ville']);
                unset($data['ville']);
            } elseif (\array_key_exists('ville', $data) && null === $data['ville']) {
                $object->setVille(null);
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
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
                unset($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
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
            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }
            if ($object->isInitialized('numeroVoie') && null !== $object->getNumeroVoie()) {
                $data['numero_voie'] = $object->getNumeroVoie();
            }
            if ($object->isInitialized('indiceRepetition') && null !== $object->getIndiceRepetition()) {
                $data['indice_repetition'] = $object->getIndiceRepetition();
            }
            if ($object->isInitialized('typeVoie') && null !== $object->getTypeVoie()) {
                $data['type_voie'] = $object->getTypeVoie();
            }
            if ($object->isInitialized('libelleVoie') && null !== $object->getLibelleVoie()) {
                $data['libelle_voie'] = $object->getLibelleVoie();
            }
            if ($object->isInitialized('complementAdresse') && null !== $object->getComplementAdresse()) {
                $data['complement_adresse'] = $object->getComplementAdresse();
            }
            if ($object->isInitialized('adresseLigne1') && null !== $object->getAdresseLigne1()) {
                $data['adresse_ligne_1'] = $object->getAdresseLigne1();
            }
            if ($object->isInitialized('adresseLigne2') && null !== $object->getAdresseLigne2()) {
                $data['adresse_ligne_2'] = $object->getAdresseLigne2();
            }
            if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
                $data['code_postal'] = $object->getCodePostal();
            }
            if ($object->isInitialized('ville') && null !== $object->getVille()) {
                $data['ville'] = $object->getVille();
            }
            if ($object->isInitialized('pays') && null !== $object->getPays()) {
                $data['pays'] = $object->getPays();
            }
            if ($object->isInitialized('codePays') && null !== $object->getCodePays()) {
                $data['code_pays'] = $object->getCodePays();
            }
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [NotificationVeilleNouvelEtablissementItem::class => false];
        }
    }
}
