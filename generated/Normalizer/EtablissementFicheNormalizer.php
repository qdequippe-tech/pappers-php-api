<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EtablissementFicheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFiche' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFiche' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Qdequippe\Pappers\Api\Model\EtablissementFiche();
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (float) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (float) $data['longitude'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
        }
        if (\array_key_exists('siret_formate', $data)) {
            $object->setSiretFormate($data['siret_formate']);
            unset($data['siret_formate']);
        }
        if (\array_key_exists('nic', $data)) {
            $object->setNic($data['nic']);
            unset($data['nic']);
        }
        if (\array_key_exists('code_postal', $data)) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        if (\array_key_exists('ville', $data)) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        }
        if (\array_key_exists('pays', $data)) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        }
        if (\array_key_exists('code_pays', $data)) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        }
        if (\array_key_exists('latitude', $data)) {
            $object->setLatitude($data['latitude']);
            unset($data['latitude']);
        }
        if (\array_key_exists('longitude', $data)) {
            $object->setLongitude($data['longitude']);
            unset($data['longitude']);
        }
        if (\array_key_exists('etablissement_cesse', $data)) {
            $object->setEtablissementCesse($data['etablissement_cesse']);
            unset($data['etablissement_cesse']);
        }
        if (\array_key_exists('siege', $data)) {
            $object->setSiege($data['siege']);
            unset($data['siege']);
        }
        if (\array_key_exists('etablissement_employeur', $data)) {
            $object->setEtablissementEmployeur($data['etablissement_employeur']);
            unset($data['etablissement_employeur']);
        }
        if (\array_key_exists('effectif', $data)) {
            $object->setEffectif($data['effectif']);
            unset($data['effectif']);
        }
        if (\array_key_exists('effectif_min', $data)) {
            $object->setEffectifMin($data['effectif_min']);
            unset($data['effectif_min']);
        }
        if (\array_key_exists('effectif_max', $data)) {
            $object->setEffectifMax($data['effectif_max']);
            unset($data['effectif_max']);
        }
        if (\array_key_exists('tranche_effectif', $data)) {
            $object->setTrancheEffectif($data['tranche_effectif']);
            unset($data['tranche_effectif']);
        }
        if (\array_key_exists('annee_effectif', $data)) {
            $object->setAnneeEffectif($data['annee_effectif']);
            unset($data['annee_effectif']);
        }
        if (\array_key_exists('code_naf', $data)) {
            $object->setCodeNaf($data['code_naf']);
            unset($data['code_naf']);
        }
        if (\array_key_exists('libelle_code_naf', $data)) {
            $object->setLibelleCodeNaf($data['libelle_code_naf']);
            unset($data['libelle_code_naf']);
        }
        if (\array_key_exists('date_de_creation', $data)) {
            $object->setDateDeCreation($data['date_de_creation']);
            unset($data['date_de_creation']);
        }
        if (\array_key_exists('numero_voie', $data)) {
            $object->setNumeroVoie($data['numero_voie']);
            unset($data['numero_voie']);
        }
        if (\array_key_exists('indice_repetition', $data)) {
            $object->setIndiceRepetition($data['indice_repetition']);
            unset($data['indice_repetition']);
        }
        if (\array_key_exists('type_voie', $data)) {
            $object->setTypeVoie($data['type_voie']);
            unset($data['type_voie']);
        }
        if (\array_key_exists('libelle_voie', $data)) {
            $object->setLibelleVoie($data['libelle_voie']);
            unset($data['libelle_voie']);
        }
        if (\array_key_exists('complement_adresse', $data)) {
            $object->setComplementAdresse($data['complement_adresse']);
            unset($data['complement_adresse']);
        }
        if (\array_key_exists('adresse_ligne_1', $data)) {
            $object->setAdresseLigne1($data['adresse_ligne_1']);
            unset($data['adresse_ligne_1']);
        }
        if (\array_key_exists('adresse_ligne_2', $data)) {
            $object->setAdresseLigne2($data['adresse_ligne_2']);
            unset($data['adresse_ligne_2']);
        }
        if (\array_key_exists('date_cessation', $data)) {
            $object->setDateCessation($data['date_cessation']);
            unset($data['date_cessation']);
        }
        if (\array_key_exists('enseigne', $data)) {
            $object->setEnseigne($data['enseigne']);
            unset($data['enseigne']);
        }
        if (\array_key_exists('nom_commercial', $data)) {
            $object->setNomCommercial($data['nom_commercial']);
            unset($data['nom_commercial']);
        }
        if (\array_key_exists('domiciliation', $data)) {
            $object->setDomiciliation($this->denormalizer->denormalize($data['domiciliation'], 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFicheDomiciliation', 'json', $context));
            unset($data['domiciliation']);
        }
        if (\array_key_exists('predecesseurs', $data)) {
            $values = [];
            foreach ($data['predecesseurs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\LienSuccession', 'json', $context);
            }
            $object->setPredecesseurs($values);
            unset($data['predecesseurs']);
        }
        if (\array_key_exists('successeurs', $data)) {
            $values_1 = [];
            foreach ($data['successeurs'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\LienSuccession', 'json', $context);
            }
            $object->setSuccesseurs($values_1);
            unset($data['successeurs']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    /**
     * @param mixed      $object
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
        if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
            $data['latitude'] = $object->getLatitude();
        }
        if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
            $data['longitude'] = $object->getLongitude();
        }
        if ($object->isInitialized('etablissementCesse') && null !== $object->getEtablissementCesse()) {
            $data['etablissement_cesse'] = $object->getEtablissementCesse();
        }
        if ($object->isInitialized('siege') && null !== $object->getSiege()) {
            $data['siege'] = $object->getSiege();
        }
        if ($object->isInitialized('etablissementEmployeur') && null !== $object->getEtablissementEmployeur()) {
            $data['etablissement_employeur'] = $object->getEtablissementEmployeur();
        }
        if ($object->isInitialized('effectif') && null !== $object->getEffectif()) {
            $data['effectif'] = $object->getEffectif();
        }
        if ($object->isInitialized('effectifMin') && null !== $object->getEffectifMin()) {
            $data['effectif_min'] = $object->getEffectifMin();
        }
        if ($object->isInitialized('effectifMax') && null !== $object->getEffectifMax()) {
            $data['effectif_max'] = $object->getEffectifMax();
        }
        if ($object->isInitialized('trancheEffectif') && null !== $object->getTrancheEffectif()) {
            $data['tranche_effectif'] = $object->getTrancheEffectif();
        }
        if ($object->isInitialized('anneeEffectif') && null !== $object->getAnneeEffectif()) {
            $data['annee_effectif'] = $object->getAnneeEffectif();
        }
        if ($object->isInitialized('codeNaf') && null !== $object->getCodeNaf()) {
            $data['code_naf'] = $object->getCodeNaf();
        }
        if ($object->isInitialized('libelleCodeNaf') && null !== $object->getLibelleCodeNaf()) {
            $data['libelle_code_naf'] = $object->getLibelleCodeNaf();
        }
        if ($object->isInitialized('dateDeCreation') && null !== $object->getDateDeCreation()) {
            $data['date_de_creation'] = $object->getDateDeCreation();
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
        if ($object->isInitialized('dateCessation') && null !== $object->getDateCessation()) {
            $data['date_cessation'] = $object->getDateCessation();
        }
        if ($object->isInitialized('enseigne') && null !== $object->getEnseigne()) {
            $data['enseigne'] = $object->getEnseigne();
        }
        if ($object->isInitialized('nomCommercial') && null !== $object->getNomCommercial()) {
            $data['nom_commercial'] = $object->getNomCommercial();
        }
        if ($object->isInitialized('domiciliation') && null !== $object->getDomiciliation()) {
            $data['domiciliation'] = $this->normalizer->normalize($object->getDomiciliation(), 'json', $context);
        }
        if ($object->isInitialized('predecesseurs') && null !== $object->getPredecesseurs()) {
            $values = [];
            foreach ($object->getPredecesseurs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['predecesseurs'] = $values;
        }
        if ($object->isInitialized('successeurs') && null !== $object->getSuccesseurs()) {
            $values_1 = [];
            foreach ($object->getSuccesseurs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['successeurs'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
