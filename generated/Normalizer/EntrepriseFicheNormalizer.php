<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

class EntrepriseFicheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFiche();
        if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
            $data['capital'] = (float) $data['capital'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        }
        if (\array_key_exists('siren_formate', $data)) {
            $object->setSirenFormate($data['siren_formate']);
            unset($data['siren_formate']);
        }
        if (\array_key_exists('nom_entreprise', $data)) {
            $object->setNomEntreprise($data['nom_entreprise']);
            unset($data['nom_entreprise']);
        }
        if (\array_key_exists('personne_morale', $data)) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        }
        if (\array_key_exists('denomination', $data)) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        }
        if (\array_key_exists('prenom', $data)) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        }
        if (\array_key_exists('sexe', $data)) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        }
        if (\array_key_exists('code_naf', $data)) {
            $object->setCodeNaf($data['code_naf']);
            unset($data['code_naf']);
        }
        if (\array_key_exists('libelle_code_naf', $data)) {
            $object->setLibelleCodeNaf($data['libelle_code_naf']);
            unset($data['libelle_code_naf']);
        }
        if (\array_key_exists('domaine_activite', $data)) {
            $object->setDomaineActivite($data['domaine_activite']);
            unset($data['domaine_activite']);
        }
        if (\array_key_exists('conventions_collectives', $data)) {
            $values = [];
            foreach ($data['conventions_collectives'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseBaseConventionsCollectivesItem', 'json', $context);
            }
            $object->setConventionsCollectives($values);
            unset($data['conventions_collectives']);
        }
        if (\array_key_exists('date_creation', $data)) {
            $object->setDateCreation(\DateTime::createFromFormat('Y-m-d', $data['date_creation'])->setTime(0, 0, 0));
            unset($data['date_creation']);
        }
        if (\array_key_exists('date_creation_formate', $data)) {
            $object->setDateCreationFormate($data['date_creation_formate']);
            unset($data['date_creation_formate']);
        }
        if (\array_key_exists('entreprise_cessee', $data)) {
            $object->setEntrepriseCessee($data['entreprise_cessee']);
            unset($data['entreprise_cessee']);
        }
        if (\array_key_exists('date_cessation', $data)) {
            $object->setDateCessation($data['date_cessation']);
            unset($data['date_cessation']);
        }
        if (\array_key_exists('entreprise_employeuse', $data)) {
            $object->setEntrepriseEmployeuse($data['entreprise_employeuse']);
            unset($data['entreprise_employeuse']);
        }
        if (\array_key_exists('categorie_juridique', $data)) {
            $object->setCategorieJuridique($data['categorie_juridique']);
            unset($data['categorie_juridique']);
        }
        if (\array_key_exists('forme_juridique', $data)) {
            $object->setFormeJuridique($data['forme_juridique']);
            unset($data['forme_juridique']);
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
        if (\array_key_exists('capital', $data)) {
            $object->setCapital($data['capital']);
            unset($data['capital']);
        }
        if (\array_key_exists('statut_rcs', $data)) {
            $object->setStatutRcs($data['statut_rcs']);
            unset($data['statut_rcs']);
        }
        if (\array_key_exists('siege', $data)) {
            $object->setSiege($this->denormalizer->denormalize($data['siege'], 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFiche', 'json', $context));
            unset($data['siege']);
        }
        if (\array_key_exists('diffusable', $data)) {
            $object->setDiffusable($data['diffusable']);
            unset($data['diffusable']);
        }
        if (\array_key_exists('sigle', $data)) {
            $object->setSigle($data['sigle']);
            unset($data['sigle']);
        }
        if (\array_key_exists('objet_social', $data)) {
            $object->setObjetSocial($data['objet_social']);
            unset($data['objet_social']);
        }
        if (\array_key_exists('capital_formate', $data)) {
            $object->setCapitalFormate($data['capital_formate']);
            unset($data['capital_formate']);
        }
        if (\array_key_exists('capital_actuel_si_variable', $data)) {
            $object->setCapitalActuelSiVariable($data['capital_actuel_si_variable']);
            unset($data['capital_actuel_si_variable']);
        }
        if (\array_key_exists('devise_capital', $data)) {
            $object->setDeviseCapital($data['devise_capital']);
            unset($data['devise_capital']);
        }
        if (\array_key_exists('numero_rcs', $data)) {
            $object->setNumeroRcs($data['numero_rcs']);
            unset($data['numero_rcs']);
        }
        if (\array_key_exists('date_cloture_exercice', $data)) {
            $object->setDateClotureExercice($data['date_cloture_exercice']);
            unset($data['date_cloture_exercice']);
        }
        if (\array_key_exists('date_cloture_exercice_exceptionnelle', $data)) {
            $object->setDateClotureExerciceExceptionnelle($data['date_cloture_exercice_exceptionnelle']);
            unset($data['date_cloture_exercice_exceptionnelle']);
        }
        if (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data)) {
            $object->setDateClotureExerciceExceptionnelleFormate($data['date_cloture_exercice_exceptionnelle_formate']);
            unset($data['date_cloture_exercice_exceptionnelle_formate']);
        }
        if (\array_key_exists('prochaine_date_cloture_exercice', $data)) {
            $object->setProchaineDateClotureExercice($data['prochaine_date_cloture_exercice']);
            unset($data['prochaine_date_cloture_exercice']);
        }
        if (\array_key_exists('prochaine_date_cloture_exercice_formate', $data)) {
            $object->setProchaineDateClotureExerciceFormate($data['prochaine_date_cloture_exercice_formate']);
            unset($data['prochaine_date_cloture_exercice_formate']);
        }
        if (\array_key_exists('economie_sociale_solidaire', $data)) {
            $object->setEconomieSocialeSolidaire($data['economie_sociale_solidaire']);
            unset($data['economie_sociale_solidaire']);
        }
        if (\array_key_exists('duree_personne_morale', $data)) {
            $object->setDureePersonneMorale($data['duree_personne_morale']);
            unset($data['duree_personne_morale']);
        }
        if (\array_key_exists('dernier_traitement', $data)) {
            $object->setDernierTraitement(\DateTime::createFromFormat('Y-m-d', $data['dernier_traitement'])->setTime(0, 0, 0));
            unset($data['dernier_traitement']);
        }
        if (\array_key_exists('derniere_mise_a_jour_sirene', $data)) {
            $object->setDerniereMiseAJourSirene(\DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_sirene'])->setTime(0, 0, 0));
            unset($data['derniere_mise_a_jour_sirene']);
        }
        if (\array_key_exists('derniere_mise_a_jour_rcs', $data)) {
            $object->setDerniereMiseAJourRcs(\DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_rcs'])->setTime(0, 0, 0));
            unset($data['derniere_mise_a_jour_rcs']);
        }
        if (\array_key_exists('greffe', $data)) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        }
        if (\array_key_exists('code_greffe', $data)) {
            $object->setCodeGreffe($data['code_greffe']);
            unset($data['code_greffe']);
        }
        if (\array_key_exists('date_immatriculation_rcs', $data)) {
            $object->setDateImmatriculationRcs($data['date_immatriculation_rcs']);
            unset($data['date_immatriculation_rcs']);
        }
        if (\array_key_exists('date_premiere_immatriculation_rcs', $data)) {
            $object->setDatePremiereImmatriculationRcs($data['date_premiere_immatriculation_rcs']);
            unset($data['date_premiere_immatriculation_rcs']);
        }
        if (\array_key_exists('date_debut_activite', $data)) {
            $object->setDateDebutActivite($data['date_debut_activite']);
            unset($data['date_debut_activite']);
        }
        if (\array_key_exists('date_debut_premiere_activite', $data)) {
            $object->setDateDebutPremiereActivite($data['date_debut_premiere_activite']);
            unset($data['date_debut_premiere_activite']);
        }
        if (\array_key_exists('date_radiation_rcs', $data)) {
            $object->setDateRadiationRcs($data['date_radiation_rcs']);
            unset($data['date_radiation_rcs']);
        }
        if (\array_key_exists('numero_tva_intracommunautaire', $data)) {
            $object->setNumeroTvaIntracommunautaire($data['numero_tva_intracommunautaire']);
            unset($data['numero_tva_intracommunautaire']);
        }
        if (\array_key_exists('validite_tva_intracommunautaire', $data)) {
            $object->setValiditeTvaIntracommunautaire($data['validite_tva_intracommunautaire']);
            unset($data['validite_tva_intracommunautaire']);
        }
        if (\array_key_exists('associe_unique', $data)) {
            $object->setAssocieUnique($data['associe_unique']);
            unset($data['associe_unique']);
        }
        if (\array_key_exists('etablissements', $data)) {
            $values_1 = [];
            foreach ($data['etablissements'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFiche', 'json', $context);
            }
            $object->setEtablissements($values_1);
            unset($data['etablissements']);
        }
        if (\array_key_exists('finances', $data)) {
            $values_2 = [];
            foreach ($data['finances'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichefinancesItem', 'json', $context);
            }
            $object->setFinances($values_2);
            unset($data['finances']);
        }
        if (\array_key_exists('representants', $data)) {
            $values_3 = [];
            foreach ($data['representants'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Qdequippe\\Pappers\\Api\\Model\\Representant', 'json', $context);
            }
            $object->setRepresentants($values_3);
            unset($data['representants']);
        }
        if (\array_key_exists('beneficiaires_effectifs', $data)) {
            $values_4 = [];
            foreach ($data['beneficiaires_effectifs'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItem', 'json', $context);
            }
            $object->setBeneficiairesEffectifs($values_4);
            unset($data['beneficiaires_effectifs']);
        }
        if (\array_key_exists('depots_actes', $data)) {
            $values_5 = [];
            foreach ($data['depots_actes'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichedepotsActesItem', 'json', $context);
            }
            $object->setDepotsActes($values_5);
            unset($data['depots_actes']);
        }
        if (\array_key_exists('comptes', $data)) {
            $values_6 = [];
            foreach ($data['comptes'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem', 'json', $context);
            }
            $object->setComptes($values_6);
            unset($data['comptes']);
        }
        if (\array_key_exists('publications_bodacc', $data)) {
            $values_7 = [];
            foreach ($data['publications_bodacc'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Qdequippe\\Pappers\\Api\\Model\\Bodacc', 'json', $context);
            }
            $object->setPublicationsBodacc($values_7);
            unset($data['publications_bodacc']);
        }
        if (\array_key_exists('procedures_collectives', $data)) {
            $values_8 = [];
            foreach ($data['procedures_collectives'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFicheproceduresCollectivesItem', 'json', $context);
            }
            $object->setProceduresCollectives($values_8);
            unset($data['procedures_collectives']);
        }
        if (\array_key_exists('procedure_collective_existe', $data)) {
            $object->setProcedureCollectiveExiste($data['procedure_collective_existe']);
            unset($data['procedure_collective_existe']);
        }
        if (\array_key_exists('procedure_collective_en_cours', $data)) {
            $object->setProcedureCollectiveEnCours($data['procedure_collective_en_cours']);
            unset($data['procedure_collective_en_cours']);
        }
        if (\array_key_exists('derniers_statuts', $data)) {
            $object->setDerniersStatuts($this->denormalizer->denormalize($data['derniers_statuts'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichederniersStatuts', 'json', $context));
            unset($data['derniers_statuts']);
        }
        if (\array_key_exists('extrait_immatriculation', $data)) {
            $object->setExtraitImmatriculation($this->denormalizer->denormalize($data['extrait_immatriculation'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFicheextraitImmatriculation', 'json', $context));
            unset($data['extrait_immatriculation']);
        }
        if (\array_key_exists('rnm', $data)) {
            $object->setRnm($this->denormalizer->denormalize($data['rnm'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichernm', 'json', $context));
            unset($data['rnm']);
        }
        if (\array_key_exists('marques', $data)) {
            $values_9 = [];
            foreach ($data['marques'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItem', 'json', $context);
            }
            $object->setMarques($values_9);
            unset($data['marques']);
        }
        if (\array_key_exists('association', $data)) {
            $object->setAssociation($this->denormalizer->denormalize($data['association'], 'Qdequippe\\Pappers\\Api\\Model\\Association', 'json', $context));
            unset($data['association']);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
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
        if ($object->isInitialized('diffusable') && null !== $object->getDiffusable()) {
            $data['diffusable'] = $object->getDiffusable();
        }
        if ($object->isInitialized('sigle') && null !== $object->getSigle()) {
            $data['sigle'] = $object->getSigle();
        }
        if ($object->isInitialized('objetSocial') && null !== $object->getObjetSocial()) {
            $data['objet_social'] = $object->getObjetSocial();
        }
        if ($object->isInitialized('capitalFormate') && null !== $object->getCapitalFormate()) {
            $data['capital_formate'] = $object->getCapitalFormate();
        }
        if ($object->isInitialized('capitalActuelSiVariable') && null !== $object->getCapitalActuelSiVariable()) {
            $data['capital_actuel_si_variable'] = $object->getCapitalActuelSiVariable();
        }
        if ($object->isInitialized('deviseCapital') && null !== $object->getDeviseCapital()) {
            $data['devise_capital'] = $object->getDeviseCapital();
        }
        if ($object->isInitialized('numeroRcs') && null !== $object->getNumeroRcs()) {
            $data['numero_rcs'] = $object->getNumeroRcs();
        }
        if ($object->isInitialized('dateClotureExercice') && null !== $object->getDateClotureExercice()) {
            $data['date_cloture_exercice'] = $object->getDateClotureExercice();
        }
        if ($object->isInitialized('dateClotureExerciceExceptionnelle') && null !== $object->getDateClotureExerciceExceptionnelle()) {
            $data['date_cloture_exercice_exceptionnelle'] = $object->getDateClotureExerciceExceptionnelle();
        }
        if ($object->isInitialized('dateClotureExerciceExceptionnelleFormate') && null !== $object->getDateClotureExerciceExceptionnelleFormate()) {
            $data['date_cloture_exercice_exceptionnelle_formate'] = $object->getDateClotureExerciceExceptionnelleFormate();
        }
        if ($object->isInitialized('prochaineDateClotureExercice') && null !== $object->getProchaineDateClotureExercice()) {
            $data['prochaine_date_cloture_exercice'] = $object->getProchaineDateClotureExercice();
        }
        if ($object->isInitialized('prochaineDateClotureExerciceFormate') && null !== $object->getProchaineDateClotureExerciceFormate()) {
            $data['prochaine_date_cloture_exercice_formate'] = $object->getProchaineDateClotureExerciceFormate();
        }
        if ($object->isInitialized('economieSocialeSolidaire') && null !== $object->getEconomieSocialeSolidaire()) {
            $data['economie_sociale_solidaire'] = $object->getEconomieSocialeSolidaire();
        }
        if ($object->isInitialized('dureePersonneMorale') && null !== $object->getDureePersonneMorale()) {
            $data['duree_personne_morale'] = $object->getDureePersonneMorale();
        }
        if ($object->isInitialized('dernierTraitement') && null !== $object->getDernierTraitement()) {
            $data['dernier_traitement'] = $object->getDernierTraitement()->format('Y-m-d');
        }
        if ($object->isInitialized('derniereMiseAJourSirene') && null !== $object->getDerniereMiseAJourSirene()) {
            $data['derniere_mise_a_jour_sirene'] = $object->getDerniereMiseAJourSirene()->format('Y-m-d');
        }
        if ($object->isInitialized('derniereMiseAJourRcs') && null !== $object->getDerniereMiseAJourRcs()) {
            $data['derniere_mise_a_jour_rcs'] = $object->getDerniereMiseAJourRcs()->format('Y-m-d');
        }
        if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
            $data['greffe'] = $object->getGreffe();
        }
        if ($object->isInitialized('codeGreffe') && null !== $object->getCodeGreffe()) {
            $data['code_greffe'] = $object->getCodeGreffe();
        }
        if ($object->isInitialized('dateImmatriculationRcs') && null !== $object->getDateImmatriculationRcs()) {
            $data['date_immatriculation_rcs'] = $object->getDateImmatriculationRcs();
        }
        if ($object->isInitialized('datePremiereImmatriculationRcs') && null !== $object->getDatePremiereImmatriculationRcs()) {
            $data['date_premiere_immatriculation_rcs'] = $object->getDatePremiereImmatriculationRcs();
        }
        if ($object->isInitialized('dateDebutActivite') && null !== $object->getDateDebutActivite()) {
            $data['date_debut_activite'] = $object->getDateDebutActivite();
        }
        if ($object->isInitialized('dateDebutPremiereActivite') && null !== $object->getDateDebutPremiereActivite()) {
            $data['date_debut_premiere_activite'] = $object->getDateDebutPremiereActivite();
        }
        if ($object->isInitialized('dateRadiationRcs') && null !== $object->getDateRadiationRcs()) {
            $data['date_radiation_rcs'] = $object->getDateRadiationRcs();
        }
        if ($object->isInitialized('numeroTvaIntracommunautaire') && null !== $object->getNumeroTvaIntracommunautaire()) {
            $data['numero_tva_intracommunautaire'] = $object->getNumeroTvaIntracommunautaire();
        }
        if ($object->isInitialized('validiteTvaIntracommunautaire') && null !== $object->getValiditeTvaIntracommunautaire()) {
            $data['validite_tva_intracommunautaire'] = $object->getValiditeTvaIntracommunautaire();
        }
        if ($object->isInitialized('associeUnique') && null !== $object->getAssocieUnique()) {
            $data['associe_unique'] = $object->getAssocieUnique();
        }
        if ($object->isInitialized('etablissements') && null !== $object->getEtablissements()) {
            $values_1 = [];
            foreach ($object->getEtablissements() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['etablissements'] = $values_1;
        }
        if ($object->isInitialized('finances') && null !== $object->getFinances()) {
            $values_2 = [];
            foreach ($object->getFinances() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['finances'] = $values_2;
        }
        if ($object->isInitialized('representants') && null !== $object->getRepresentants()) {
            $values_3 = [];
            foreach ($object->getRepresentants() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['representants'] = $values_3;
        }
        if ($object->isInitialized('beneficiairesEffectifs') && null !== $object->getBeneficiairesEffectifs()) {
            $values_4 = [];
            foreach ($object->getBeneficiairesEffectifs() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['beneficiaires_effectifs'] = $values_4;
        }
        if ($object->isInitialized('depotsActes') && null !== $object->getDepotsActes()) {
            $values_5 = [];
            foreach ($object->getDepotsActes() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['depots_actes'] = $values_5;
        }
        if ($object->isInitialized('comptes') && null !== $object->getComptes()) {
            $values_6 = [];
            foreach ($object->getComptes() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['comptes'] = $values_6;
        }
        if ($object->isInitialized('publicationsBodacc') && null !== $object->getPublicationsBodacc()) {
            $values_7 = [];
            foreach ($object->getPublicationsBodacc() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['publications_bodacc'] = $values_7;
        }
        if ($object->isInitialized('proceduresCollectives') && null !== $object->getProceduresCollectives()) {
            $values_8 = [];
            foreach ($object->getProceduresCollectives() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['procedures_collectives'] = $values_8;
        }
        if ($object->isInitialized('procedureCollectiveExiste') && null !== $object->getProcedureCollectiveExiste()) {
            $data['procedure_collective_existe'] = $object->getProcedureCollectiveExiste();
        }
        if ($object->isInitialized('procedureCollectiveEnCours') && null !== $object->getProcedureCollectiveEnCours()) {
            $data['procedure_collective_en_cours'] = $object->getProcedureCollectiveEnCours();
        }
        if ($object->isInitialized('derniersStatuts') && null !== $object->getDerniersStatuts()) {
            $data['derniers_statuts'] = $this->normalizer->normalize($object->getDerniersStatuts(), 'json', $context);
        }
        if ($object->isInitialized('extraitImmatriculation') && null !== $object->getExtraitImmatriculation()) {
            $data['extrait_immatriculation'] = $this->normalizer->normalize($object->getExtraitImmatriculation(), 'json', $context);
        }
        if ($object->isInitialized('rnm') && null !== $object->getRnm()) {
            $data['rnm'] = $this->normalizer->normalize($object->getRnm(), 'json', $context);
        }
        if ($object->isInitialized('marques') && null !== $object->getMarques()) {
            $values_9 = [];
            foreach ($object->getMarques() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data['marques'] = $values_9;
        }
        if ($object->isInitialized('association') && null !== $object->getAssociation()) {
            $data['association'] = $this->normalizer->normalize($object->getAssociation(), 'json', $context);
        }
        foreach ($object as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_10;
            }
        }

        return $data;
    }
}
