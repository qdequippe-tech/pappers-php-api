<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EtablissementFiche;
use Qdequippe\Pappers\Api\Model\EtablissementFicheDomiciliation;
use Qdequippe\Pappers\Api\Model\LabelsBase;
use Qdequippe\Pappers\Api\Model\LienSuccession;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EtablissementFiche::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EtablissementFiche::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EtablissementFiche();
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (float) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (float) $data['longitude'];
        }
        if (\array_key_exists('diffusion_partielle', $data) && \is_int($data['diffusion_partielle'])) {
            $data['diffusion_partielle'] = (bool) $data['diffusion_partielle'];
        }
        if (\array_key_exists('etablissement_cesse', $data) && \is_int($data['etablissement_cesse'])) {
            $data['etablissement_cesse'] = (bool) $data['etablissement_cesse'];
        }
        if (\array_key_exists('siege', $data) && \is_int($data['siege'])) {
            $data['siege'] = (bool) $data['siege'];
        }
        if (\array_key_exists('etablissement_employeur', $data) && \is_int($data['etablissement_employeur'])) {
            $data['etablissement_employeur'] = (bool) $data['etablissement_employeur'];
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
        if (\array_key_exists('diffusion_partielle', $data) && null !== $data['diffusion_partielle']) {
            $object->setDiffusionPartielle($data['diffusion_partielle']);
            unset($data['diffusion_partielle']);
        } elseif (\array_key_exists('diffusion_partielle', $data) && null === $data['diffusion_partielle']) {
            $object->setDiffusionPartielle(null);
        }
        if (\array_key_exists('nic', $data) && null !== $data['nic']) {
            $object->setNic($data['nic']);
            unset($data['nic']);
        } elseif (\array_key_exists('nic', $data) && null === $data['nic']) {
            $object->setNic(null);
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
        if (\array_key_exists('etablissement_cesse', $data) && null !== $data['etablissement_cesse']) {
            $object->setEtablissementCesse($data['etablissement_cesse']);
            unset($data['etablissement_cesse']);
        } elseif (\array_key_exists('etablissement_cesse', $data) && null === $data['etablissement_cesse']) {
            $object->setEtablissementCesse(null);
        }
        if (\array_key_exists('siege', $data) && null !== $data['siege']) {
            $object->setSiege($data['siege']);
            unset($data['siege']);
        } elseif (\array_key_exists('siege', $data) && null === $data['siege']) {
            $object->setSiege(null);
        }
        if (\array_key_exists('etablissement_employeur', $data) && null !== $data['etablissement_employeur']) {
            $object->setEtablissementEmployeur($data['etablissement_employeur']);
            unset($data['etablissement_employeur']);
        } elseif (\array_key_exists('etablissement_employeur', $data) && null === $data['etablissement_employeur']) {
            $object->setEtablissementEmployeur(null);
        }
        if (\array_key_exists('effectif', $data) && null !== $data['effectif']) {
            $object->setEffectif($data['effectif']);
            unset($data['effectif']);
        } elseif (\array_key_exists('effectif', $data) && null === $data['effectif']) {
            $object->setEffectif(null);
        }
        if (\array_key_exists('effectif_min', $data) && null !== $data['effectif_min']) {
            $object->setEffectifMin($data['effectif_min']);
            unset($data['effectif_min']);
        } elseif (\array_key_exists('effectif_min', $data) && null === $data['effectif_min']) {
            $object->setEffectifMin(null);
        }
        if (\array_key_exists('effectif_max', $data) && null !== $data['effectif_max']) {
            $object->setEffectifMax($data['effectif_max']);
            unset($data['effectif_max']);
        } elseif (\array_key_exists('effectif_max', $data) && null === $data['effectif_max']) {
            $object->setEffectifMax(null);
        }
        if (\array_key_exists('tranche_effectif', $data) && null !== $data['tranche_effectif']) {
            $object->setTrancheEffectif($data['tranche_effectif']);
            unset($data['tranche_effectif']);
        } elseif (\array_key_exists('tranche_effectif', $data) && null === $data['tranche_effectif']) {
            $object->setTrancheEffectif(null);
        }
        if (\array_key_exists('annee_effectif', $data) && null !== $data['annee_effectif']) {
            $object->setAnneeEffectif($data['annee_effectif']);
            unset($data['annee_effectif']);
        } elseif (\array_key_exists('annee_effectif', $data) && null === $data['annee_effectif']) {
            $object->setAnneeEffectif(null);
        }
        if (\array_key_exists('code_naf', $data) && null !== $data['code_naf']) {
            $object->setCodeNaf($data['code_naf']);
            unset($data['code_naf']);
        } elseif (\array_key_exists('code_naf', $data) && null === $data['code_naf']) {
            $object->setCodeNaf(null);
        }
        if (\array_key_exists('libelle_code_naf', $data) && null !== $data['libelle_code_naf']) {
            $object->setLibelleCodeNaf($data['libelle_code_naf']);
            unset($data['libelle_code_naf']);
        } elseif (\array_key_exists('libelle_code_naf', $data) && null === $data['libelle_code_naf']) {
            $object->setLibelleCodeNaf(null);
        }
        if (\array_key_exists('nomenclature_code_naf', $data) && null !== $data['nomenclature_code_naf']) {
            $object->setNomenclatureCodeNaf($data['nomenclature_code_naf']);
            unset($data['nomenclature_code_naf']);
        } elseif (\array_key_exists('nomenclature_code_naf', $data) && null === $data['nomenclature_code_naf']) {
            $object->setNomenclatureCodeNaf(null);
        }
        if (\array_key_exists('date_de_creation', $data) && null !== $data['date_de_creation']) {
            $object->setDateDeCreation($data['date_de_creation']);
            unset($data['date_de_creation']);
        } elseif (\array_key_exists('date_de_creation', $data) && null === $data['date_de_creation']) {
            $object->setDateDeCreation(null);
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
        if (\array_key_exists('date_cessation', $data) && null !== $data['date_cessation']) {
            $object->setDateCessation($data['date_cessation']);
            unset($data['date_cessation']);
        } elseif (\array_key_exists('date_cessation', $data) && null === $data['date_cessation']) {
            $object->setDateCessation(null);
        }
        if (\array_key_exists('enseigne', $data) && null !== $data['enseigne']) {
            $object->setEnseigne($data['enseigne']);
            unset($data['enseigne']);
        } elseif (\array_key_exists('enseigne', $data) && null === $data['enseigne']) {
            $object->setEnseigne(null);
        }
        if (\array_key_exists('nom_commercial', $data) && null !== $data['nom_commercial']) {
            $object->setNomCommercial($data['nom_commercial']);
            unset($data['nom_commercial']);
        } elseif (\array_key_exists('nom_commercial', $data) && null === $data['nom_commercial']) {
            $object->setNomCommercial(null);
        }
        if (\array_key_exists('domiciliation', $data) && null !== $data['domiciliation']) {
            $object->setDomiciliation($this->denormalizer->denormalize($data['domiciliation'], EtablissementFicheDomiciliation::class, 'json', $context));
            unset($data['domiciliation']);
        } elseif (\array_key_exists('domiciliation', $data) && null === $data['domiciliation']) {
            $object->setDomiciliation(null);
        }
        if (\array_key_exists('labels', $data) && null !== $data['labels']) {
            $values = [];
            foreach ($data['labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, LabelsBase::class, 'json', $context);
            }
            $object->setLabels($values);
            unset($data['labels']);
        } elseif (\array_key_exists('labels', $data) && null === $data['labels']) {
            $object->setLabels(null);
        }
        if (\array_key_exists('predecesseurs', $data) && null !== $data['predecesseurs']) {
            $values_1 = [];
            foreach ($data['predecesseurs'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, LienSuccession::class, 'json', $context);
            }
            $object->setPredecesseurs($values_1);
            unset($data['predecesseurs']);
        } elseif (\array_key_exists('predecesseurs', $data) && null === $data['predecesseurs']) {
            $object->setPredecesseurs(null);
        }
        if (\array_key_exists('successeurs', $data) && null !== $data['successeurs']) {
            $values_2 = [];
            foreach ($data['successeurs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, LienSuccession::class, 'json', $context);
            }
            $object->setSuccesseurs($values_2);
            unset($data['successeurs']);
        } elseif (\array_key_exists('successeurs', $data) && null === $data['successeurs']) {
            $object->setSuccesseurs(null);
        }
        if (\array_key_exists('enseigne_1', $data) && null !== $data['enseigne_1']) {
            $object->setEnseigne1($data['enseigne_1']);
            unset($data['enseigne_1']);
        } elseif (\array_key_exists('enseigne_1', $data) && null === $data['enseigne_1']) {
            $object->setEnseigne1(null);
        }
        if (\array_key_exists('enseigne_2', $data) && null !== $data['enseigne_2']) {
            $object->setEnseigne2($data['enseigne_2']);
            unset($data['enseigne_2']);
        } elseif (\array_key_exists('enseigne_2', $data) && null === $data['enseigne_2']) {
            $object->setEnseigne2(null);
        }
        if (\array_key_exists('enseigne_3', $data) && null !== $data['enseigne_3']) {
            $object->setEnseigne3($data['enseigne_3']);
            unset($data['enseigne_3']);
        } elseif (\array_key_exists('enseigne_3', $data) && null === $data['enseigne_3']) {
            $object->setEnseigne3(null);
        }
        if (\array_key_exists('distribution_speciale', $data) && null !== $data['distribution_speciale']) {
            $object->setDistributionSpeciale($data['distribution_speciale']);
            unset($data['distribution_speciale']);
        } elseif (\array_key_exists('distribution_speciale', $data) && null === $data['distribution_speciale']) {
            $object->setDistributionSpeciale(null);
        }
        if (\array_key_exists('code_cedex', $data) && null !== $data['code_cedex']) {
            $object->setCodeCedex($data['code_cedex']);
            unset($data['code_cedex']);
        } elseif (\array_key_exists('code_cedex', $data) && null === $data['code_cedex']) {
            $object->setCodeCedex(null);
        }
        if (\array_key_exists('libelle_cedex', $data) && null !== $data['libelle_cedex']) {
            $object->setLibelleCedex($data['libelle_cedex']);
            unset($data['libelle_cedex']);
        } elseif (\array_key_exists('libelle_cedex', $data) && null === $data['libelle_cedex']) {
            $object->setLibelleCedex(null);
        }
        if (\array_key_exists('code_commune', $data) && null !== $data['code_commune']) {
            $object->setCodeCommune($data['code_commune']);
            unset($data['code_commune']);
        } elseif (\array_key_exists('code_commune', $data) && null === $data['code_commune']) {
            $object->setCodeCommune(null);
        }
        if (\array_key_exists('departement', $data) && null !== $data['departement']) {
            $object->setDepartement($data['departement']);
            unset($data['departement']);
        } elseif (\array_key_exists('departement', $data) && null === $data['departement']) {
            $object->setDepartement(null);
        }
        if (\array_key_exists('code_departement', $data) && null !== $data['code_departement']) {
            $object->setCodeDepartement($data['code_departement']);
            unset($data['code_departement']);
        } elseif (\array_key_exists('code_departement', $data) && null === $data['code_departement']) {
            $object->setCodeDepartement(null);
        }
        if (\array_key_exists('region', $data) && null !== $data['region']) {
            $object->setRegion($data['region']);
            unset($data['region']);
        } elseif (\array_key_exists('region', $data) && null === $data['region']) {
            $object->setRegion(null);
        }
        if (\array_key_exists('code_region', $data) && null !== $data['code_region']) {
            $object->setCodeRegion($data['code_region']);
            unset($data['code_region']);
        } elseif (\array_key_exists('code_region', $data) && null === $data['code_region']) {
            $object->setCodeRegion(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('diffusionPartielle') && null !== $data->getDiffusionPartielle()) {
            $dataArray['diffusion_partielle'] = $data->getDiffusionPartielle();
        }
        if ($data->isInitialized('nic') && null !== $data->getNic()) {
            $dataArray['nic'] = $data->getNic();
        }
        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['code_postal'] = $data->getCodePostal();
        }
        if ($data->isInitialized('ville') && null !== $data->getVille()) {
            $dataArray['ville'] = $data->getVille();
        }
        if ($data->isInitialized('pays') && null !== $data->getPays()) {
            $dataArray['pays'] = $data->getPays();
        }
        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['code_pays'] = $data->getCodePays();
        }
        if ($data->isInitialized('latitude') && null !== $data->getLatitude()) {
            $dataArray['latitude'] = $data->getLatitude();
        }
        if ($data->isInitialized('longitude') && null !== $data->getLongitude()) {
            $dataArray['longitude'] = $data->getLongitude();
        }
        if ($data->isInitialized('etablissementCesse') && null !== $data->getEtablissementCesse()) {
            $dataArray['etablissement_cesse'] = $data->getEtablissementCesse();
        }
        if ($data->isInitialized('siege') && null !== $data->getSiege()) {
            $dataArray['siege'] = $data->getSiege();
        }
        if ($data->isInitialized('etablissementEmployeur') && null !== $data->getEtablissementEmployeur()) {
            $dataArray['etablissement_employeur'] = $data->getEtablissementEmployeur();
        }
        if ($data->isInitialized('effectif') && null !== $data->getEffectif()) {
            $dataArray['effectif'] = $data->getEffectif();
        }
        if ($data->isInitialized('effectifMin') && null !== $data->getEffectifMin()) {
            $dataArray['effectif_min'] = $data->getEffectifMin();
        }
        if ($data->isInitialized('effectifMax') && null !== $data->getEffectifMax()) {
            $dataArray['effectif_max'] = $data->getEffectifMax();
        }
        if ($data->isInitialized('trancheEffectif') && null !== $data->getTrancheEffectif()) {
            $dataArray['tranche_effectif'] = $data->getTrancheEffectif();
        }
        if ($data->isInitialized('anneeEffectif') && null !== $data->getAnneeEffectif()) {
            $dataArray['annee_effectif'] = $data->getAnneeEffectif();
        }
        if ($data->isInitialized('codeNaf') && null !== $data->getCodeNaf()) {
            $dataArray['code_naf'] = $data->getCodeNaf();
        }
        if ($data->isInitialized('libelleCodeNaf') && null !== $data->getLibelleCodeNaf()) {
            $dataArray['libelle_code_naf'] = $data->getLibelleCodeNaf();
        }
        if ($data->isInitialized('nomenclatureCodeNaf') && null !== $data->getNomenclatureCodeNaf()) {
            $dataArray['nomenclature_code_naf'] = $data->getNomenclatureCodeNaf();
        }
        if ($data->isInitialized('dateDeCreation') && null !== $data->getDateDeCreation()) {
            $dataArray['date_de_creation'] = $data->getDateDeCreation();
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
        if ($data->isInitialized('dateCessation') && null !== $data->getDateCessation()) {
            $dataArray['date_cessation'] = $data->getDateCessation();
        }
        if ($data->isInitialized('enseigne') && null !== $data->getEnseigne()) {
            $dataArray['enseigne'] = $data->getEnseigne();
        }
        if ($data->isInitialized('nomCommercial') && null !== $data->getNomCommercial()) {
            $dataArray['nom_commercial'] = $data->getNomCommercial();
        }
        if ($data->isInitialized('domiciliation') && null !== $data->getDomiciliation()) {
            $dataArray['domiciliation'] = $this->normalizer->normalize($data->getDomiciliation(), 'json', $context);
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['labels'] = $values;
        }
        if ($data->isInitialized('predecesseurs') && null !== $data->getPredecesseurs()) {
            $values_1 = [];
            foreach ($data->getPredecesseurs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['predecesseurs'] = $values_1;
        }
        if ($data->isInitialized('successeurs') && null !== $data->getSuccesseurs()) {
            $values_2 = [];
            foreach ($data->getSuccesseurs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['successeurs'] = $values_2;
        }
        if ($data->isInitialized('enseigne1') && null !== $data->getEnseigne1()) {
            $dataArray['enseigne_1'] = $data->getEnseigne1();
        }
        if ($data->isInitialized('enseigne2') && null !== $data->getEnseigne2()) {
            $dataArray['enseigne_2'] = $data->getEnseigne2();
        }
        if ($data->isInitialized('enseigne3') && null !== $data->getEnseigne3()) {
            $dataArray['enseigne_3'] = $data->getEnseigne3();
        }
        if ($data->isInitialized('distributionSpeciale') && null !== $data->getDistributionSpeciale()) {
            $dataArray['distribution_speciale'] = $data->getDistributionSpeciale();
        }
        if ($data->isInitialized('codeCedex') && null !== $data->getCodeCedex()) {
            $dataArray['code_cedex'] = $data->getCodeCedex();
        }
        if ($data->isInitialized('libelleCedex') && null !== $data->getLibelleCedex()) {
            $dataArray['libelle_cedex'] = $data->getLibelleCedex();
        }
        if ($data->isInitialized('codeCommune') && null !== $data->getCodeCommune()) {
            $dataArray['code_commune'] = $data->getCodeCommune();
        }
        if ($data->isInitialized('departement') && null !== $data->getDepartement()) {
            $dataArray['departement'] = $data->getDepartement();
        }
        if ($data->isInitialized('codeDepartement') && null !== $data->getCodeDepartement()) {
            $dataArray['code_departement'] = $data->getCodeDepartement();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('codeRegion') && null !== $data->getCodeRegion()) {
            $dataArray['code_region'] = $data->getCodeRegion();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EtablissementFiche::class => false];
    }
}
