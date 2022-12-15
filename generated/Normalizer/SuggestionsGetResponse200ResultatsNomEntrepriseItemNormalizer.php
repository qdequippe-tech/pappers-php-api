<?php

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

class SuggestionsGetResponse200ResultatsNomEntrepriseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsNomEntrepriseItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsNomEntrepriseItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsNomEntrepriseItem();
        if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
            $data['capital'] = (float) $data['capital'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mention', $data) && null !== $data['mention']) {
            $object->setMention($data['mention']);
            unset($data['mention']);
        } elseif (\array_key_exists('mention', $data) && null === $data['mention']) {
            $object->setMention(null);
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
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseBaseConventionsCollectivesItem', 'json', $context);
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
            $object->setSiege($this->denormalizer->denormalize($data['siege'], 'Qdequippe\\Pappers\\Api\\Model\\EtablissementRecherche', 'json', $context));
            unset($data['siege']);
        } elseif (\array_key_exists('siege', $data) && null === $data['siege']) {
            $object->setSiege(null);
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

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('mention') && null !== $object->getMention()) {
            $data['mention'] = $object->getMention();
        }
        if ($object->isInitialized('siren') && null !== $object->getSiren()) {
            $data['siren'] = $object->getSiren();
        }
        if ($object->isInitialized('sirenFormate') && null !== $object->getSirenFormate()) {
            $data['siren_formate'] = $object->getSirenFormate();
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
        if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
            $data['sexe'] = $object->getSexe();
        }
        if ($object->isInitialized('codeNaf') && null !== $object->getCodeNaf()) {
            $data['code_naf'] = $object->getCodeNaf();
        }
        if ($object->isInitialized('libelleCodeNaf') && null !== $object->getLibelleCodeNaf()) {
            $data['libelle_code_naf'] = $object->getLibelleCodeNaf();
        }
        if ($object->isInitialized('domaineActivite') && null !== $object->getDomaineActivite()) {
            $data['domaine_activite'] = $object->getDomaineActivite();
        }
        if ($object->isInitialized('conventionsCollectives') && null !== $object->getConventionsCollectives()) {
            $values = [];
            foreach ($object->getConventionsCollectives() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['conventions_collectives'] = $values;
        }
        if ($object->isInitialized('dateCreation') && null !== $object->getDateCreation()) {
            $data['date_creation'] = $object->getDateCreation()->format('Y-m-d');
        }
        if ($object->isInitialized('dateCreationFormate') && null !== $object->getDateCreationFormate()) {
            $data['date_creation_formate'] = $object->getDateCreationFormate();
        }
        if ($object->isInitialized('entrepriseCessee') && null !== $object->getEntrepriseCessee()) {
            $data['entreprise_cessee'] = $object->getEntrepriseCessee();
        }
        if ($object->isInitialized('dateCessation') && null !== $object->getDateCessation()) {
            $data['date_cessation'] = $object->getDateCessation();
        }
        if ($object->isInitialized('entrepriseEmployeuse') && null !== $object->getEntrepriseEmployeuse()) {
            $data['entreprise_employeuse'] = $object->getEntrepriseEmployeuse();
        }
        if ($object->isInitialized('categorieJuridique') && null !== $object->getCategorieJuridique()) {
            $data['categorie_juridique'] = $object->getCategorieJuridique();
        }
        if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
            $data['forme_juridique'] = $object->getFormeJuridique();
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
        if ($object->isInitialized('capital') && null !== $object->getCapital()) {
            $data['capital'] = $object->getCapital();
        }
        if ($object->isInitialized('statutRcs') && null !== $object->getStatutRcs()) {
            $data['statut_rcs'] = $object->getStatutRcs();
        }
        if ($object->isInitialized('siege') && null !== $object->getSiege()) {
            $data['siege'] = $this->normalizer->normalize($object->getSiege(), 'json', $context);
        }
        if ($object->isInitialized('villes') && null !== $object->getVilles()) {
            $values_1 = [];
            foreach ($object->getVilles() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['villes'] = $values_1;
        }
        if ($object->isInitialized('chiffreAffaires') && null !== $object->getChiffreAffaires()) {
            $data['chiffre_affaires'] = $object->getChiffreAffaires();
        }
        if ($object->isInitialized('resultat') && null !== $object->getResultat()) {
            $data['resultat'] = $object->getResultat();
        }
        if ($object->isInitialized('effectifsFinances') && null !== $object->getEffectifsFinances()) {
            $data['effectifs_finances'] = $object->getEffectifsFinances();
        }
        if ($object->isInitialized('anneeFinances') && null !== $object->getAnneeFinances()) {
            $data['annee_finances'] = $object->getAnneeFinances();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
