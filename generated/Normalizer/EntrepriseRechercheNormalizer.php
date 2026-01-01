<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseRecherche;
use Qdequippe\Pappers\Api\Model\EtablissementRecherche;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseRechercheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseRecherche::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseRecherche::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseRecherche();
        if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
            $data['capital'] = (float) $data['capital'];
        }
        if (\array_key_exists('opposition_utilisation_commerciale', $data) && \is_int($data['opposition_utilisation_commerciale'])) {
            $data['opposition_utilisation_commerciale'] = (bool) $data['opposition_utilisation_commerciale'];
        }
        if (\array_key_exists('personne_morale', $data) && \is_int($data['personne_morale'])) {
            $data['personne_morale'] = (bool) $data['personne_morale'];
        }
        if (\array_key_exists('entreprise_cessee', $data) && \is_int($data['entreprise_cessee'])) {
            $data['entreprise_cessee'] = (bool) $data['entreprise_cessee'];
        }
        if (\array_key_exists('entreprise_employeuse', $data) && \is_int($data['entreprise_employeuse'])) {
            $data['entreprise_employeuse'] = (bool) $data['entreprise_employeuse'];
        }
        if (\array_key_exists('societe_a_mission', $data) && \is_int($data['societe_a_mission'])) {
            $data['societe_a_mission'] = (bool) $data['societe_a_mission'];
        }
        if (\array_key_exists('micro_entreprise', $data) && \is_int($data['micro_entreprise'])) {
            $data['micro_entreprise'] = (bool) $data['micro_entreprise'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('siren_formate', $data) && null !== $data['siren_formate']) {
            $object->setSirenFormate($data['siren_formate']);
            unset($data['siren_formate']);
        } elseif (\array_key_exists('siren_formate', $data) && null === $data['siren_formate']) {
            $object->setSirenFormate(null);
        }
        if (\array_key_exists('opposition_utilisation_commerciale', $data) && null !== $data['opposition_utilisation_commerciale']) {
            $object->setOppositionUtilisationCommerciale($data['opposition_utilisation_commerciale']);
            unset($data['opposition_utilisation_commerciale']);
        } elseif (\array_key_exists('opposition_utilisation_commerciale', $data) && null === $data['opposition_utilisation_commerciale']) {
            $object->setOppositionUtilisationCommerciale(null);
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
        if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
            $object->setSexe(null);
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
        if (\array_key_exists('domaine_activite', $data) && null !== $data['domaine_activite']) {
            $object->setDomaineActivite($data['domaine_activite']);
            unset($data['domaine_activite']);
        } elseif (\array_key_exists('domaine_activite', $data) && null === $data['domaine_activite']) {
            $object->setDomaineActivite(null);
        }
        if (\array_key_exists('conventions_collectives', $data) && null !== $data['conventions_collectives']) {
            $values = [];
            foreach ($data['conventions_collectives'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EntrepriseBaseConventionsCollectivesItem::class, 'json', $context);
            }
            $object->setConventionsCollectives($values);
            unset($data['conventions_collectives']);
        } elseif (\array_key_exists('conventions_collectives', $data) && null === $data['conventions_collectives']) {
            $object->setConventionsCollectives(null);
        }
        if (\array_key_exists('date_creation', $data) && null !== $data['date_creation']) {
            $object->setDateCreation(\DateTime::createFromFormat('Y-m-d', $data['date_creation'])->setTime(0, 0, 0));
            unset($data['date_creation']);
        } elseif (\array_key_exists('date_creation', $data) && null === $data['date_creation']) {
            $object->setDateCreation(null);
        }
        if (\array_key_exists('date_creation_formate', $data) && null !== $data['date_creation_formate']) {
            $object->setDateCreationFormate($data['date_creation_formate']);
            unset($data['date_creation_formate']);
        } elseif (\array_key_exists('date_creation_formate', $data) && null === $data['date_creation_formate']) {
            $object->setDateCreationFormate(null);
        }
        if (\array_key_exists('entreprise_cessee', $data) && null !== $data['entreprise_cessee']) {
            $object->setEntrepriseCessee($data['entreprise_cessee']);
            unset($data['entreprise_cessee']);
        } elseif (\array_key_exists('entreprise_cessee', $data) && null === $data['entreprise_cessee']) {
            $object->setEntrepriseCessee(null);
        }
        if (\array_key_exists('date_cessation', $data) && null !== $data['date_cessation']) {
            $object->setDateCessation($data['date_cessation']);
            unset($data['date_cessation']);
        } elseif (\array_key_exists('date_cessation', $data) && null === $data['date_cessation']) {
            $object->setDateCessation(null);
        }
        if (\array_key_exists('entreprise_employeuse', $data) && null !== $data['entreprise_employeuse']) {
            $object->setEntrepriseEmployeuse($data['entreprise_employeuse']);
            unset($data['entreprise_employeuse']);
        } elseif (\array_key_exists('entreprise_employeuse', $data) && null === $data['entreprise_employeuse']) {
            $object->setEntrepriseEmployeuse(null);
        }
        if (\array_key_exists('societe_a_mission', $data) && null !== $data['societe_a_mission']) {
            $object->setSocieteAMission($data['societe_a_mission']);
            unset($data['societe_a_mission']);
        } elseif (\array_key_exists('societe_a_mission', $data) && null === $data['societe_a_mission']) {
            $object->setSocieteAMission(null);
        }
        if (\array_key_exists('categorie_juridique', $data) && null !== $data['categorie_juridique']) {
            $object->setCategorieJuridique($data['categorie_juridique']);
            unset($data['categorie_juridique']);
        } elseif (\array_key_exists('categorie_juridique', $data) && null === $data['categorie_juridique']) {
            $object->setCategorieJuridique(null);
        }
        if (\array_key_exists('forme_juridique', $data) && null !== $data['forme_juridique']) {
            $object->setFormeJuridique($data['forme_juridique']);
            unset($data['forme_juridique']);
        } elseif (\array_key_exists('forme_juridique', $data) && null === $data['forme_juridique']) {
            $object->setFormeJuridique(null);
        }
        if (\array_key_exists('micro_entreprise', $data) && null !== $data['micro_entreprise']) {
            $object->setMicroEntreprise($data['micro_entreprise']);
            unset($data['micro_entreprise']);
        } elseif (\array_key_exists('micro_entreprise', $data) && null === $data['micro_entreprise']) {
            $object->setMicroEntreprise(null);
        }
        if (\array_key_exists('forme_exercice', $data) && null !== $data['forme_exercice']) {
            $object->setFormeExercice($data['forme_exercice']);
            unset($data['forme_exercice']);
        } elseif (\array_key_exists('forme_exercice', $data) && null === $data['forme_exercice']) {
            $object->setFormeExercice(null);
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
        if (\array_key_exists('capital', $data) && null !== $data['capital']) {
            $object->setCapital($data['capital']);
            unset($data['capital']);
        } elseif (\array_key_exists('capital', $data) && null === $data['capital']) {
            $object->setCapital(null);
        }
        if (\array_key_exists('statut_rcs', $data) && null !== $data['statut_rcs']) {
            $object->setStatutRcs($data['statut_rcs']);
            unset($data['statut_rcs']);
        } elseif (\array_key_exists('statut_rcs', $data) && null === $data['statut_rcs']) {
            $object->setStatutRcs(null);
        }
        if (\array_key_exists('siege', $data) && null !== $data['siege']) {
            $object->setSiege($this->denormalizer->denormalize($data['siege'], EtablissementRecherche::class, 'json', $context));
            unset($data['siege']);
        } elseif (\array_key_exists('siege', $data) && null === $data['siege']) {
            $object->setSiege(null);
        }
        if (\array_key_exists('statut_consolide', $data) && null !== $data['statut_consolide']) {
            $object->setStatutConsolide($data['statut_consolide']);
            unset($data['statut_consolide']);
        } elseif (\array_key_exists('statut_consolide', $data) && null === $data['statut_consolide']) {
            $object->setStatutConsolide(null);
        }
        if (\array_key_exists('villes', $data) && null !== $data['villes']) {
            $values_1 = [];
            foreach ($data['villes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVilles($values_1);
            unset($data['villes']);
        } elseif (\array_key_exists('villes', $data) && null === $data['villes']) {
            $object->setVilles(null);
        }
        if (\array_key_exists('chiffre_affaires', $data) && null !== $data['chiffre_affaires']) {
            $object->setChiffreAffaires($data['chiffre_affaires']);
            unset($data['chiffre_affaires']);
        } elseif (\array_key_exists('chiffre_affaires', $data) && null === $data['chiffre_affaires']) {
            $object->setChiffreAffaires(null);
        }
        if (\array_key_exists('resultat', $data) && null !== $data['resultat']) {
            $object->setResultat($data['resultat']);
            unset($data['resultat']);
        } elseif (\array_key_exists('resultat', $data) && null === $data['resultat']) {
            $object->setResultat(null);
        }
        if (\array_key_exists('effectifs_finances', $data) && null !== $data['effectifs_finances']) {
            $object->setEffectifsFinances($data['effectifs_finances']);
            unset($data['effectifs_finances']);
        } elseif (\array_key_exists('effectifs_finances', $data) && null === $data['effectifs_finances']) {
            $object->setEffectifsFinances(null);
        }
        if (\array_key_exists('annee_finances', $data) && null !== $data['annee_finances']) {
            $object->setAnneeFinances($data['annee_finances']);
            unset($data['annee_finances']);
        } elseif (\array_key_exists('annee_finances', $data) && null === $data['annee_finances']) {
            $object->setAnneeFinances(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('sirenFormate') && null !== $data->getSirenFormate()) {
            $dataArray['siren_formate'] = $data->getSirenFormate();
        }
        if ($data->isInitialized('oppositionUtilisationCommerciale') && null !== $data->getOppositionUtilisationCommerciale()) {
            $dataArray['opposition_utilisation_commerciale'] = $data->getOppositionUtilisationCommerciale();
        }
        if ($data->isInitialized('nomEntreprise') && null !== $data->getNomEntreprise()) {
            $dataArray['nom_entreprise'] = $data->getNomEntreprise();
        }
        if ($data->isInitialized('personneMorale') && null !== $data->getPersonneMorale()) {
            $dataArray['personne_morale'] = $data->getPersonneMorale();
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }
        if ($data->isInitialized('sexe') && null !== $data->getSexe()) {
            $dataArray['sexe'] = $data->getSexe();
        }
        if ($data->isInitialized('codeNaf') && null !== $data->getCodeNaf()) {
            $dataArray['code_naf'] = $data->getCodeNaf();
        }
        if ($data->isInitialized('libelleCodeNaf') && null !== $data->getLibelleCodeNaf()) {
            $dataArray['libelle_code_naf'] = $data->getLibelleCodeNaf();
        }
        if ($data->isInitialized('domaineActivite') && null !== $data->getDomaineActivite()) {
            $dataArray['domaine_activite'] = $data->getDomaineActivite();
        }
        if ($data->isInitialized('conventionsCollectives') && null !== $data->getConventionsCollectives()) {
            $values = [];
            foreach ($data->getConventionsCollectives() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['conventions_collectives'] = $values;
        }
        if ($data->isInitialized('dateCreation') && null !== $data->getDateCreation()) {
            $dataArray['date_creation'] = $data->getDateCreation()->format('Y-m-d');
        }
        if ($data->isInitialized('dateCreationFormate') && null !== $data->getDateCreationFormate()) {
            $dataArray['date_creation_formate'] = $data->getDateCreationFormate();
        }
        if ($data->isInitialized('entrepriseCessee') && null !== $data->getEntrepriseCessee()) {
            $dataArray['entreprise_cessee'] = $data->getEntrepriseCessee();
        }
        if ($data->isInitialized('dateCessation') && null !== $data->getDateCessation()) {
            $dataArray['date_cessation'] = $data->getDateCessation();
        }
        if ($data->isInitialized('entrepriseEmployeuse') && null !== $data->getEntrepriseEmployeuse()) {
            $dataArray['entreprise_employeuse'] = $data->getEntrepriseEmployeuse();
        }
        if ($data->isInitialized('societeAMission') && null !== $data->getSocieteAMission()) {
            $dataArray['societe_a_mission'] = $data->getSocieteAMission();
        }
        if ($data->isInitialized('categorieJuridique') && null !== $data->getCategorieJuridique()) {
            $dataArray['categorie_juridique'] = $data->getCategorieJuridique();
        }
        if ($data->isInitialized('formeJuridique') && null !== $data->getFormeJuridique()) {
            $dataArray['forme_juridique'] = $data->getFormeJuridique();
        }
        if ($data->isInitialized('microEntreprise') && null !== $data->getMicroEntreprise()) {
            $dataArray['micro_entreprise'] = $data->getMicroEntreprise();
        }
        if ($data->isInitialized('formeExercice') && null !== $data->getFormeExercice()) {
            $dataArray['forme_exercice'] = $data->getFormeExercice();
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
        if ($data->isInitialized('capital') && null !== $data->getCapital()) {
            $dataArray['capital'] = $data->getCapital();
        }
        if ($data->isInitialized('statutRcs') && null !== $data->getStatutRcs()) {
            $dataArray['statut_rcs'] = $data->getStatutRcs();
        }
        if ($data->isInitialized('siege') && null !== $data->getSiege()) {
            $dataArray['siege'] = $this->normalizer->normalize($data->getSiege(), 'json', $context);
        }
        if ($data->isInitialized('statutConsolide') && null !== $data->getStatutConsolide()) {
            $dataArray['statut_consolide'] = $data->getStatutConsolide();
        }
        if ($data->isInitialized('villes') && null !== $data->getVilles()) {
            $values_1 = [];
            foreach ($data->getVilles() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['villes'] = $values_1;
        }
        if ($data->isInitialized('chiffreAffaires') && null !== $data->getChiffreAffaires()) {
            $dataArray['chiffre_affaires'] = $data->getChiffreAffaires();
        }
        if ($data->isInitialized('resultat') && null !== $data->getResultat()) {
            $dataArray['resultat'] = $data->getResultat();
        }
        if ($data->isInitialized('effectifsFinances') && null !== $data->getEffectifsFinances()) {
            $dataArray['effectifs_finances'] = $data->getEffectifsFinances();
        }
        if ($data->isInitialized('anneeFinances') && null !== $data->getAnneeFinances()) {
            $dataArray['annee_finances'] = $data->getAnneeFinances();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseRecherche::class => false];
    }
}
