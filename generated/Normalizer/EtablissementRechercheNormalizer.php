<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EtablissementRecherche;
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
    class EtablissementRechercheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EtablissementRecherche::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EtablissementRecherche::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EtablissementRecherche();
            if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
                $data['latitude'] = (float) $data['latitude'];
            }
            if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
                $data['longitude'] = (float) $data['longitude'];
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
            if (\array_key_exists('siret_formate', $data) && null !== $data['siret_formate']) {
                $object->setSiretFormate($data['siret_formate']);
                unset($data['siret_formate']);
            } elseif (\array_key_exists('siret_formate', $data) && null === $data['siret_formate']) {
                $object->setSiretFormate(null);
            }
            if (\array_key_exists('nic', $data) && null !== $data['nic']) {
                $object->setNic($data['nic']);
                unset($data['nic']);
            } elseif (\array_key_exists('nic', $data) && null === $data['nic']) {
                $object->setNic(null);
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
            if (\array_key_exists('latitude', $data) && null !== $data['latitude']) {
                $object->setLatitude($data['latitude']);
                unset($data['latitude']);
            } elseif (\array_key_exists('latitude', $data) && null === $data['latitude']) {
                $object->setLatitude(null);
            }
            if (\array_key_exists('longitude', $data) && null !== $data['longitude']) {
                $object->setLongitude($data['longitude']);
                unset($data['longitude']);
            } elseif (\array_key_exists('longitude', $data) && null === $data['longitude']) {
                $object->setLongitude(null);
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
            if ($object->isInitialized('siretFormate') && null !== $object->getSiretFormate()) {
                $data['siret_formate'] = $object->getSiretFormate();
            }
            if ($object->isInitialized('nic') && null !== $object->getNic()) {
                $data['nic'] = $object->getNic();
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
            if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
                $data['latitude'] = $object->getLatitude();
            }
            if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
                $data['longitude'] = $object->getLongitude();
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
            return [EtablissementRecherche::class => false];
        }
    }
} else {
    class EtablissementRechercheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EtablissementRecherche::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EtablissementRecherche::class === $data::class;
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
            $object = new EtablissementRecherche();
            if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
                $data['latitude'] = (float) $data['latitude'];
            }
            if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
                $data['longitude'] = (float) $data['longitude'];
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
            if (\array_key_exists('siret_formate', $data) && null !== $data['siret_formate']) {
                $object->setSiretFormate($data['siret_formate']);
                unset($data['siret_formate']);
            } elseif (\array_key_exists('siret_formate', $data) && null === $data['siret_formate']) {
                $object->setSiretFormate(null);
            }
            if (\array_key_exists('nic', $data) && null !== $data['nic']) {
                $object->setNic($data['nic']);
                unset($data['nic']);
            } elseif (\array_key_exists('nic', $data) && null === $data['nic']) {
                $object->setNic(null);
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
            if (\array_key_exists('latitude', $data) && null !== $data['latitude']) {
                $object->setLatitude($data['latitude']);
                unset($data['latitude']);
            } elseif (\array_key_exists('latitude', $data) && null === $data['latitude']) {
                $object->setLatitude(null);
            }
            if (\array_key_exists('longitude', $data) && null !== $data['longitude']) {
                $object->setLongitude($data['longitude']);
                unset($data['longitude']);
            } elseif (\array_key_exists('longitude', $data) && null === $data['longitude']) {
                $object->setLongitude(null);
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
            if ($object->isInitialized('siretFormate') && null !== $object->getSiretFormate()) {
                $data['siret_formate'] = $object->getSiretFormate();
            }
            if ($object->isInitialized('nic') && null !== $object->getNic()) {
                $data['nic'] = $object->getNic();
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
            if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
                $data['latitude'] = $object->getLatitude();
            }
            if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
                $data['longitude'] = $object->getLongitude();
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
            return [EtablissementRecherche::class => false];
        }
    }
}
