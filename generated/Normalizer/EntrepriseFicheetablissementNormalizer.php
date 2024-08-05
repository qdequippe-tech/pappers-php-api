<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheetablissement;
use Qdequippe\Pappers\Api\Model\EtablissementFicheDomiciliation;
use Qdequippe\Pappers\Api\Model\LabelsBase;
use Qdequippe\Pappers\Api\Model\LienSuccession;
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
    class EntrepriseFicheetablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFicheetablissement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFicheetablissement::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFicheetablissement();
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }
            if ($object->isInitialized('siretFormate') && null !== $object->getSiretFormate()) {
                $data['siret_formate'] = $object->getSiretFormate();
            }
            if ($object->isInitialized('diffusionPartielle') && null !== $object->getDiffusionPartielle()) {
                $data['diffusion_partielle'] = $object->getDiffusionPartielle();
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
            if ($object->isInitialized('nomenclatureCodeNaf') && null !== $object->getNomenclatureCodeNaf()) {
                $data['nomenclature_code_naf'] = $object->getNomenclatureCodeNaf();
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
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['labels'] = $values;
            }
            if ($object->isInitialized('predecesseurs') && null !== $object->getPredecesseurs()) {
                $values_1 = [];
                foreach ($object->getPredecesseurs() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['predecesseurs'] = $values_1;
            }
            if ($object->isInitialized('successeurs') && null !== $object->getSuccesseurs()) {
                $values_2 = [];
                foreach ($object->getSuccesseurs() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['successeurs'] = $values_2;
            }
            if ($object->isInitialized('enseigne1') && null !== $object->getEnseigne1()) {
                $data['enseigne_1'] = $object->getEnseigne1();
            }
            if ($object->isInitialized('enseigne2') && null !== $object->getEnseigne2()) {
                $data['enseigne_2'] = $object->getEnseigne2();
            }
            if ($object->isInitialized('enseigne3') && null !== $object->getEnseigne3()) {
                $data['enseigne_3'] = $object->getEnseigne3();
            }
            if ($object->isInitialized('distributionSpeciale') && null !== $object->getDistributionSpeciale()) {
                $data['distribution_speciale'] = $object->getDistributionSpeciale();
            }
            if ($object->isInitialized('codeCedex') && null !== $object->getCodeCedex()) {
                $data['code_cedex'] = $object->getCodeCedex();
            }
            if ($object->isInitialized('libelleCedex') && null !== $object->getLibelleCedex()) {
                $data['libelle_cedex'] = $object->getLibelleCedex();
            }
            if ($object->isInitialized('codeCommune') && null !== $object->getCodeCommune()) {
                $data['code_commune'] = $object->getCodeCommune();
            }
            if ($object->isInitialized('departement') && null !== $object->getDepartement()) {
                $data['departement'] = $object->getDepartement();
            }
            if ($object->isInitialized('codeDepartement') && null !== $object->getCodeDepartement()) {
                $data['code_departement'] = $object->getCodeDepartement();
            }
            if ($object->isInitialized('region') && null !== $object->getRegion()) {
                $data['region'] = $object->getRegion();
            }
            if ($object->isInitialized('codeRegion') && null !== $object->getCodeRegion()) {
                $data['code_region'] = $object->getCodeRegion();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseFicheetablissement::class => false];
        }
    }
} else {
    class EntrepriseFicheetablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFicheetablissement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFicheetablissement::class === $data::class;
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
            $object = new EntrepriseFicheetablissement();
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
            if ($object->isInitialized('diffusionPartielle') && null !== $object->getDiffusionPartielle()) {
                $data['diffusion_partielle'] = $object->getDiffusionPartielle();
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
            if ($object->isInitialized('nomenclatureCodeNaf') && null !== $object->getNomenclatureCodeNaf()) {
                $data['nomenclature_code_naf'] = $object->getNomenclatureCodeNaf();
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
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['labels'] = $values;
            }
            if ($object->isInitialized('predecesseurs') && null !== $object->getPredecesseurs()) {
                $values_1 = [];
                foreach ($object->getPredecesseurs() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['predecesseurs'] = $values_1;
            }
            if ($object->isInitialized('successeurs') && null !== $object->getSuccesseurs()) {
                $values_2 = [];
                foreach ($object->getSuccesseurs() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['successeurs'] = $values_2;
            }
            if ($object->isInitialized('enseigne1') && null !== $object->getEnseigne1()) {
                $data['enseigne_1'] = $object->getEnseigne1();
            }
            if ($object->isInitialized('enseigne2') && null !== $object->getEnseigne2()) {
                $data['enseigne_2'] = $object->getEnseigne2();
            }
            if ($object->isInitialized('enseigne3') && null !== $object->getEnseigne3()) {
                $data['enseigne_3'] = $object->getEnseigne3();
            }
            if ($object->isInitialized('distributionSpeciale') && null !== $object->getDistributionSpeciale()) {
                $data['distribution_speciale'] = $object->getDistributionSpeciale();
            }
            if ($object->isInitialized('codeCedex') && null !== $object->getCodeCedex()) {
                $data['code_cedex'] = $object->getCodeCedex();
            }
            if ($object->isInitialized('libelleCedex') && null !== $object->getLibelleCedex()) {
                $data['libelle_cedex'] = $object->getLibelleCedex();
            }
            if ($object->isInitialized('codeCommune') && null !== $object->getCodeCommune()) {
                $data['code_commune'] = $object->getCodeCommune();
            }
            if ($object->isInitialized('departement') && null !== $object->getDepartement()) {
                $data['departement'] = $object->getDepartement();
            }
            if ($object->isInitialized('codeDepartement') && null !== $object->getCodeDepartement()) {
                $data['code_departement'] = $object->getCodeDepartement();
            }
            if ($object->isInitialized('region') && null !== $object->getRegion()) {
                $data['region'] = $object->getRegion();
            }
            if ($object->isInitialized('codeRegion') && null !== $object->getCodeRegion()) {
                $data['code_region'] = $object->getCodeRegion();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseFicheetablissement::class => false];
        }
    }
}
