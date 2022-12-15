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

class RechercheBeneficiairesGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\RechercheBeneficiairesGetResponse200ResultatsItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\RechercheBeneficiairesGetResponse200ResultatsItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\RechercheBeneficiairesGetResponse200ResultatsItem();
        if (\array_key_exists('pourcentage_parts', $data) && \is_int($data['pourcentage_parts'])) {
            $data['pourcentage_parts'] = (float) $data['pourcentage_parts'];
        }
        if (\array_key_exists('pourcentage_votes', $data) && \is_int($data['pourcentage_votes'])) {
            $data['pourcentage_votes'] = (float) $data['pourcentage_votes'];
        }
        if (\array_key_exists('pourcentage_votes_indirect', $data) && \is_int($data['pourcentage_votes_indirect'])) {
            $data['pourcentage_votes_indirect'] = (float) $data['pourcentage_votes_indirect'];
        }
        if (\array_key_exists('pourcentage_votes_directs', $data) && \is_int($data['pourcentage_votes_directs'])) {
            $data['pourcentage_votes_directs'] = (float) $data['pourcentage_votes_directs'];
        }
        if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && \is_int($data['pourcentage_parts_vocation_titulaire'])) {
            $data['pourcentage_parts_vocation_titulaire'] = (float) $data['pourcentage_parts_vocation_titulaire'];
        }
        if (\array_key_exists('pourcentage_parts_directes', $data) && \is_int($data['pourcentage_parts_directes'])) {
            $data['pourcentage_parts_directes'] = (float) $data['pourcentage_parts_directes'];
        }
        if (\array_key_exists('pourcentage_parts_indirectes', $data) && \is_int($data['pourcentage_parts_indirectes'])) {
            $data['pourcentage_parts_indirectes'] = (float) $data['pourcentage_parts_indirectes'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        }
        if (\array_key_exists('nom_usage', $data)) {
            $object->setNomUsage($data['nom_usage']);
            unset($data['nom_usage']);
        }
        if (\array_key_exists('prenom', $data)) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        }
        if (\array_key_exists('pseudonyme', $data)) {
            $object->setPseudonyme($data['pseudonyme']);
            unset($data['pseudonyme']);
        }
        if (\array_key_exists('nom_complet', $data)) {
            $object->setNomComplet($data['nom_complet']);
            unset($data['nom_complet']);
        }
        if (\array_key_exists('date_de_naissance_formate', $data)) {
            $object->setDateDeNaissanceFormate($data['date_de_naissance_formate']);
            unset($data['date_de_naissance_formate']);
        }
        if (\array_key_exists('nationalite', $data)) {
            $object->setNationalite($data['nationalite']);
            unset($data['nationalite']);
        }
        if (\array_key_exists('pourcentage_parts', $data)) {
            $object->setPourcentageParts($data['pourcentage_parts']);
            unset($data['pourcentage_parts']);
        }
        if (\array_key_exists('pourcentage_votes', $data)) {
            $object->setPourcentageVotes($data['pourcentage_votes']);
            unset($data['pourcentage_votes']);
        }
        if (\array_key_exists('pourcentage_votes_indirect', $data)) {
            $object->setPourcentageVotesIndirect($data['pourcentage_votes_indirect']);
            unset($data['pourcentage_votes_indirect']);
        }
        if (\array_key_exists('pourcentage_votes_directs', $data)) {
            $object->setPourcentageVotesDirects($data['pourcentage_votes_directs']);
            unset($data['pourcentage_votes_directs']);
        }
        if (\array_key_exists('detention_autres_moyens_controle', $data)) {
            $object->setDetentionAutresMoyensControle($data['detention_autres_moyens_controle']);
            unset($data['detention_autres_moyens_controle']);
        }
        if (\array_key_exists('beneficiaire_representant_legal', $data)) {
            $object->setBeneficiaireRepresentantLegal($data['beneficiaire_representant_legal']);
            unset($data['beneficiaire_representant_legal']);
        }
        if (\array_key_exists('adresse_ligne_1', $data)) {
            $object->setAdresseLigne1($data['adresse_ligne_1']);
            unset($data['adresse_ligne_1']);
        }
        if (\array_key_exists('adresse_ligne_2', $data)) {
            $object->setAdresseLigne2($data['adresse_ligne_2']);
            unset($data['adresse_ligne_2']);
        }
        if (\array_key_exists('adresse_ligne_3', $data)) {
            $object->setAdresseLigne3($data['adresse_ligne_3']);
            unset($data['adresse_ligne_3']);
        }
        if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data)) {
            $object->setPourcentagePartsVocationTitulaire($data['pourcentage_parts_vocation_titulaire']);
            unset($data['pourcentage_parts_vocation_titulaire']);
        }
        if (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data)) {
            $object->setRepresentantLegalPlacementSansGestionDelegation($data['representant_legal_placement_sans_gestion_delegation']);
            unset($data['representant_legal_placement_sans_gestion_delegation']);
        }
        if (\array_key_exists('code_postal', $data)) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        if (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data)) {
            $object->setDetentionPouvoirNomMembreConseilAdministration($data['detention_pouvoir_nom_membre_conseil_administration']);
            unset($data['detention_pouvoir_nom_membre_conseil_administration']);
        }
        if (\array_key_exists('ville', $data)) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        }
        if (\array_key_exists('date_de_naissance_complete_formatee', $data)) {
            $object->setDateDeNaissanceCompleteFormatee(\DateTime::createFromFormat('Y-m-d', $data['date_de_naissance_complete_formatee'])->setTime(0, 0, 0));
            unset($data['date_de_naissance_complete_formatee']);
        }
        if (\array_key_exists('pourcentage_parts_directes', $data)) {
            $object->setPourcentagePartsDirectes($data['pourcentage_parts_directes']);
            unset($data['pourcentage_parts_directes']);
        }
        if (\array_key_exists('pourcentage_parts_indirectes', $data)) {
            $object->setPourcentagePartsIndirectes($data['pourcentage_parts_indirectes']);
            unset($data['pourcentage_parts_indirectes']);
        }
        if (\array_key_exists('pays_de_naissance', $data)) {
            $object->setPaysDeNaissance($data['pays_de_naissance']);
            unset($data['pays_de_naissance']);
        }
        if (\array_key_exists('code_pays_de_naissance', $data)) {
            $object->setCodePaysDeNaissance($data['code_pays_de_naissance']);
            unset($data['code_pays_de_naissance']);
        }
        if (\array_key_exists('ville_de_naissance', $data)) {
            $object->setVilleDeNaissance($data['ville_de_naissance']);
            unset($data['ville_de_naissance']);
        }
        if (\array_key_exists('detention_pouvoir_decision_ag', $data)) {
            $object->setDetentionPouvoirDecisionAg($data['detention_pouvoir_decision_ag']);
            unset($data['detention_pouvoir_decision_ag']);
        }
        if (\array_key_exists('pays', $data)) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        }
        if (\array_key_exists('date_de_naissance_formatee', $data)) {
            $object->setDateDeNaissanceFormatee($data['date_de_naissance_formatee']);
            unset($data['date_de_naissance_formatee']);
        }
        if (\array_key_exists('code_pays', $data)) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        }
        if (\array_key_exists('entreprises', $data)) {
            $values = [];
            foreach ($data['entreprises'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseRecherche', 'json', $context);
            }
            $object->setEntreprises($values);
            unset($data['entreprises']);
        }
        if (\array_key_exists('nb_entreprises_total', $data)) {
            $object->setNbEntreprisesTotal($data['nb_entreprises_total']);
            unset($data['nb_entreprises_total']);
        }
        if (\array_key_exists('entreprises_dirigeant', $data)) {
            $values_1 = [];
            foreach ($data['entreprises_dirigeant'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseRecherche', 'json', $context);
            }
            $object->setEntreprisesDirigeant($values_1);
            unset($data['entreprises_dirigeant']);
        }
        if (\array_key_exists('nb_entreprises_dirigeant_total', $data)) {
            $object->setNbEntreprisesDirigeantTotal($data['nb_entreprises_dirigeant_total']);
            unset($data['nb_entreprises_dirigeant_total']);
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
        if ($object->isInitialized('nom') && null !== $object->getNom()) {
            $data['nom'] = $object->getNom();
        }
        if ($object->isInitialized('nomUsage') && null !== $object->getNomUsage()) {
            $data['nom_usage'] = $object->getNomUsage();
        }
        if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
            $data['prenom'] = $object->getPrenom();
        }
        if ($object->isInitialized('pseudonyme') && null !== $object->getPseudonyme()) {
            $data['pseudonyme'] = $object->getPseudonyme();
        }
        if ($object->isInitialized('nomComplet') && null !== $object->getNomComplet()) {
            $data['nom_complet'] = $object->getNomComplet();
        }
        if ($object->isInitialized('dateDeNaissanceFormate') && null !== $object->getDateDeNaissanceFormate()) {
            $data['date_de_naissance_formate'] = $object->getDateDeNaissanceFormate();
        }
        if ($object->isInitialized('nationalite') && null !== $object->getNationalite()) {
            $data['nationalite'] = $object->getNationalite();
        }
        if ($object->isInitialized('pourcentageParts') && null !== $object->getPourcentageParts()) {
            $data['pourcentage_parts'] = $object->getPourcentageParts();
        }
        if ($object->isInitialized('pourcentageVotes') && null !== $object->getPourcentageVotes()) {
            $data['pourcentage_votes'] = $object->getPourcentageVotes();
        }
        if ($object->isInitialized('pourcentageVotesIndirect') && null !== $object->getPourcentageVotesIndirect()) {
            $data['pourcentage_votes_indirect'] = $object->getPourcentageVotesIndirect();
        }
        if ($object->isInitialized('pourcentageVotesDirects') && null !== $object->getPourcentageVotesDirects()) {
            $data['pourcentage_votes_directs'] = $object->getPourcentageVotesDirects();
        }
        if ($object->isInitialized('detentionAutresMoyensControle') && null !== $object->getDetentionAutresMoyensControle()) {
            $data['detention_autres_moyens_controle'] = $object->getDetentionAutresMoyensControle();
        }
        if ($object->isInitialized('beneficiaireRepresentantLegal') && null !== $object->getBeneficiaireRepresentantLegal()) {
            $data['beneficiaire_representant_legal'] = $object->getBeneficiaireRepresentantLegal();
        }
        if ($object->isInitialized('adresseLigne1') && null !== $object->getAdresseLigne1()) {
            $data['adresse_ligne_1'] = $object->getAdresseLigne1();
        }
        if ($object->isInitialized('adresseLigne2') && null !== $object->getAdresseLigne2()) {
            $data['adresse_ligne_2'] = $object->getAdresseLigne2();
        }
        if ($object->isInitialized('adresseLigne3') && null !== $object->getAdresseLigne3()) {
            $data['adresse_ligne_3'] = $object->getAdresseLigne3();
        }
        if ($object->isInitialized('pourcentagePartsVocationTitulaire') && null !== $object->getPourcentagePartsVocationTitulaire()) {
            $data['pourcentage_parts_vocation_titulaire'] = $object->getPourcentagePartsVocationTitulaire();
        }
        if ($object->isInitialized('representantLegalPlacementSansGestionDelegation') && null !== $object->getRepresentantLegalPlacementSansGestionDelegation()) {
            $data['representant_legal_placement_sans_gestion_delegation'] = $object->getRepresentantLegalPlacementSansGestionDelegation();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['code_postal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('detentionPouvoirNomMembreConseilAdministration') && null !== $object->getDetentionPouvoirNomMembreConseilAdministration()) {
            $data['detention_pouvoir_nom_membre_conseil_administration'] = $object->getDetentionPouvoirNomMembreConseilAdministration();
        }
        if ($object->isInitialized('ville') && null !== $object->getVille()) {
            $data['ville'] = $object->getVille();
        }
        if ($object->isInitialized('dateDeNaissanceCompleteFormatee') && null !== $object->getDateDeNaissanceCompleteFormatee()) {
            $data['date_de_naissance_complete_formatee'] = $object->getDateDeNaissanceCompleteFormatee()->format('Y-m-d');
        }
        if ($object->isInitialized('pourcentagePartsDirectes') && null !== $object->getPourcentagePartsDirectes()) {
            $data['pourcentage_parts_directes'] = $object->getPourcentagePartsDirectes();
        }
        if ($object->isInitialized('pourcentagePartsIndirectes') && null !== $object->getPourcentagePartsIndirectes()) {
            $data['pourcentage_parts_indirectes'] = $object->getPourcentagePartsIndirectes();
        }
        if ($object->isInitialized('paysDeNaissance') && null !== $object->getPaysDeNaissance()) {
            $data['pays_de_naissance'] = $object->getPaysDeNaissance();
        }
        if ($object->isInitialized('codePaysDeNaissance') && null !== $object->getCodePaysDeNaissance()) {
            $data['code_pays_de_naissance'] = $object->getCodePaysDeNaissance();
        }
        if ($object->isInitialized('villeDeNaissance') && null !== $object->getVilleDeNaissance()) {
            $data['ville_de_naissance'] = $object->getVilleDeNaissance();
        }
        if ($object->isInitialized('detentionPouvoirDecisionAg') && null !== $object->getDetentionPouvoirDecisionAg()) {
            $data['detention_pouvoir_decision_ag'] = $object->getDetentionPouvoirDecisionAg();
        }
        if ($object->isInitialized('pays') && null !== $object->getPays()) {
            $data['pays'] = $object->getPays();
        }
        if ($object->isInitialized('dateDeNaissanceFormatee') && null !== $object->getDateDeNaissanceFormatee()) {
            $data['date_de_naissance_formatee'] = $object->getDateDeNaissanceFormatee();
        }
        if ($object->isInitialized('codePays') && null !== $object->getCodePays()) {
            $data['code_pays'] = $object->getCodePays();
        }
        if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
            $values = [];
            foreach ($object->getEntreprises() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['entreprises'] = $values;
        }
        if ($object->isInitialized('nbEntreprisesTotal') && null !== $object->getNbEntreprisesTotal()) {
            $data['nb_entreprises_total'] = $object->getNbEntreprisesTotal();
        }
        if ($object->isInitialized('entreprisesDirigeant') && null !== $object->getEntreprisesDirigeant()) {
            $values_1 = [];
            foreach ($object->getEntreprisesDirigeant() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['entreprises_dirigeant'] = $values_1;
        }
        if ($object->isInitialized('nbEntreprisesDirigeantTotal') && null !== $object->getNbEntreprisesDirigeantTotal()) {
            $data['nb_entreprises_dirigeant_total'] = $object->getNbEntreprisesDirigeantTotal();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
