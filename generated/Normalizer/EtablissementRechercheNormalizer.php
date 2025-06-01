<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EtablissementRecherche;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }
        if ($data->isInitialized('siretFormate') && null !== $data->getSiretFormate()) {
            $dataArray['siret_formate'] = $data->getSiretFormate();
        }
        if ($data->isInitialized('nic') && null !== $data->getNic()) {
            $dataArray['nic'] = $data->getNic();
        }
        if ($data->isInitialized('numeroVoie') && null !== $data->getNumeroVoie()) {
            $dataArray['numero_voie'] = $data->getNumeroVoie();
        }
        if ($data->isInitialized('indiceRepetition') && null !== $data->getIndiceRepetition()) {
            $dataArray['indice_repetition'] = $data->getIndiceRepetition();
        }
        if ($data->isInitialized('typeVoie') && null !== $data->getTypeVoie()) {
            $dataArray['type_voie'] = $data->getTypeVoie();
        }
        if ($data->isInitialized('libelleVoie') && null !== $data->getLibelleVoie()) {
            $dataArray['libelle_voie'] = $data->getLibelleVoie();
        }
        if ($data->isInitialized('complementAdresse') && null !== $data->getComplementAdresse()) {
            $dataArray['complement_adresse'] = $data->getComplementAdresse();
        }
        if ($data->isInitialized('adresseLigne1') && null !== $data->getAdresseLigne1()) {
            $dataArray['adresse_ligne_1'] = $data->getAdresseLigne1();
        }
        if ($data->isInitialized('adresseLigne2') && null !== $data->getAdresseLigne2()) {
            $dataArray['adresse_ligne_2'] = $data->getAdresseLigne2();
        }
        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['code_postal'] = $data->getCodePostal();
        }
        if ($data->isInitialized('ville') && null !== $data->getVille()) {
            $dataArray['ville'] = $data->getVille();
        }
        if ($data->isInitialized('latitude') && null !== $data->getLatitude()) {
            $dataArray['latitude'] = $data->getLatitude();
        }
        if ($data->isInitialized('longitude') && null !== $data->getLongitude()) {
            $dataArray['longitude'] = $data->getLongitude();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EtablissementRecherche::class => false];
    }
}
