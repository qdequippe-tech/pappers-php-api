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

class EntrepriseFichebeneficiairesEffectifsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItem();
        if (\array_key_exists('pourcentage_parts', $data) && \is_int($data['pourcentage_parts'])) {
            $data['pourcentage_parts'] = (float) $data['pourcentage_parts'];
        }
        if (\array_key_exists('pourcentage_parts_directes', $data) && \is_int($data['pourcentage_parts_directes'])) {
            $data['pourcentage_parts_directes'] = (float) $data['pourcentage_parts_directes'];
        }
        if (\array_key_exists('pourcentage_parts_indirectes', $data) && \is_int($data['pourcentage_parts_indirectes'])) {
            $data['pourcentage_parts_indirectes'] = (float) $data['pourcentage_parts_indirectes'];
        }
        if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && \is_int($data['pourcentage_parts_vocation_titulaire'])) {
            $data['pourcentage_parts_vocation_titulaire'] = (float) $data['pourcentage_parts_vocation_titulaire'];
        }
        if (\array_key_exists('pourcentage_votes', $data) && \is_int($data['pourcentage_votes'])) {
            $data['pourcentage_votes'] = (float) $data['pourcentage_votes'];
        }
        if (\array_key_exists('pourcentage_votes_directs', $data) && \is_int($data['pourcentage_votes_directs'])) {
            $data['pourcentage_votes_directs'] = (float) $data['pourcentage_votes_directs'];
        }
        if (\array_key_exists('pourcentage_votes_indirect', $data) && \is_int($data['pourcentage_votes_indirect'])) {
            $data['pourcentage_votes_indirect'] = (float) $data['pourcentage_votes_indirect'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date_greffe', $data)) {
            $object->setDateGreffe(\DateTime::createFromFormat('Y-m-d', $data['date_greffe'])->setTime(0, 0, 0));
            unset($data['date_greffe']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if (\array_key_exists('date_de_naissance_formatee', $data)) {
            $object->setDateDeNaissanceFormatee($data['date_de_naissance_formatee']);
            unset($data['date_de_naissance_formatee']);
        }
        if (\array_key_exists('date_de_naissance_complete_formatee', $data)) {
            $object->setDateDeNaissanceCompleteFormatee(\DateTime::createFromFormat('Y-m-d', $data['date_de_naissance_complete_formatee'])->setTime(0, 0, 0));
            unset($data['date_de_naissance_complete_formatee']);
        }
        if (\array_key_exists('nationalite', $data)) {
            $object->setNationalite($data['nationalite']);
            unset($data['nationalite']);
        }
        if (\array_key_exists('code_nationalite', $data)) {
            $object->setCodeNationalite($data['code_nationalite']);
            unset($data['code_nationalite']);
        }
        if (\array_key_exists('ville_de_naissance', $data)) {
            $object->setVilleDeNaissance($data['ville_de_naissance']);
            unset($data['ville_de_naissance']);
        }
        if (\array_key_exists('pays_de_naissance', $data)) {
            $object->setPaysDeNaissance($data['pays_de_naissance']);
            unset($data['pays_de_naissance']);
        }
        if (\array_key_exists('code_pays_de_naissance', $data)) {
            $object->setCodePaysDeNaissance($data['code_pays_de_naissance']);
            unset($data['code_pays_de_naissance']);
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
        if (\array_key_exists('pourcentage_parts', $data)) {
            $object->setPourcentageParts($data['pourcentage_parts']);
            unset($data['pourcentage_parts']);
        }
        if (\array_key_exists('pourcentage_parts_directes', $data)) {
            $object->setPourcentagePartsDirectes($data['pourcentage_parts_directes']);
            unset($data['pourcentage_parts_directes']);
        }
        if (\array_key_exists('pourcentage_parts_indirectes', $data)) {
            $object->setPourcentagePartsIndirectes($data['pourcentage_parts_indirectes']);
            unset($data['pourcentage_parts_indirectes']);
        }
        if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data)) {
            $object->setPourcentagePartsVocationTitulaire($data['pourcentage_parts_vocation_titulaire']);
            unset($data['pourcentage_parts_vocation_titulaire']);
        }
        if (\array_key_exists('details_parts_directes', $data)) {
            $object->setDetailsPartsDirectes($this->denormalizer->denormalize($data['details_parts_directes'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes', 'json', $context));
            unset($data['details_parts_directes']);
        }
        if (\array_key_exists('details_parts_indirectes', $data)) {
            $object->setDetailsPartsIndirectes($this->denormalizer->denormalize($data['details_parts_indirectes'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes', 'json', $context));
            unset($data['details_parts_indirectes']);
        }
        if (\array_key_exists('details_parts_vocation_titulaire', $data)) {
            $object->setDetailsPartsVocationTitulaire($this->denormalizer->denormalize($data['details_parts_vocation_titulaire'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire', 'json', $context));
            unset($data['details_parts_vocation_titulaire']);
        }
        if (\array_key_exists('pourcentage_votes', $data)) {
            $object->setPourcentageVotes($data['pourcentage_votes']);
            unset($data['pourcentage_votes']);
        }
        if (\array_key_exists('pourcentage_votes_directs', $data)) {
            $object->setPourcentageVotesDirects($data['pourcentage_votes_directs']);
            unset($data['pourcentage_votes_directs']);
        }
        if (\array_key_exists('pourcentage_votes_indirect', $data)) {
            $object->setPourcentageVotesIndirect($data['pourcentage_votes_indirect']);
            unset($data['pourcentage_votes_indirect']);
        }
        if (\array_key_exists('details_votes_directs', $data)) {
            $object->setDetailsVotesDirects($this->denormalizer->denormalize($data['details_votes_directs'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects', 'json', $context));
            unset($data['details_votes_directs']);
        }
        if (\array_key_exists('details_votes_indirects', $data)) {
            $object->setDetailsVotesIndirects($this->denormalizer->denormalize($data['details_votes_indirects'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects', 'json', $context));
            unset($data['details_votes_indirects']);
        }
        if (\array_key_exists('details_societe_de_gestion', $data)) {
            $object->setDetailsSocieteDeGestion($this->denormalizer->denormalize($data['details_societe_de_gestion'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion', 'json', $context));
            unset($data['details_societe_de_gestion']);
        }
        if (\array_key_exists('detention_pouvoir_decision_ag', $data)) {
            $object->setDetentionPouvoirDecisionAg($data['detention_pouvoir_decision_ag']);
            unset($data['detention_pouvoir_decision_ag']);
        }
        if (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data)) {
            $object->setDetentionPouvoirNomMembreConseilAdministration($data['detention_pouvoir_nom_membre_conseil_administration']);
            unset($data['detention_pouvoir_nom_membre_conseil_administration']);
        }
        if (\array_key_exists('detention_autres_moyens_controle', $data)) {
            $object->setDetentionAutresMoyensControle($data['detention_autres_moyens_controle']);
            unset($data['detention_autres_moyens_controle']);
        }
        if (\array_key_exists('beneficiaire_representant_legal', $data)) {
            $object->setBeneficiaireRepresentantLegal($data['beneficiaire_representant_legal']);
            unset($data['beneficiaire_representant_legal']);
        }
        if (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data)) {
            $object->setRepresentantLegalPlacementSansGestionDelegation($data['representant_legal_placement_sans_gestion_delegation']);
            unset($data['representant_legal_placement_sans_gestion_delegation']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('dateGreffe') && null !== $object->getDateGreffe()) {
            $data['date_greffe'] = $object->getDateGreffe()->format('Y-m-d');
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
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
        if ($object->isInitialized('dateDeNaissanceFormatee') && null !== $object->getDateDeNaissanceFormatee()) {
            $data['date_de_naissance_formatee'] = $object->getDateDeNaissanceFormatee();
        }
        if ($object->isInitialized('dateDeNaissanceCompleteFormatee') && null !== $object->getDateDeNaissanceCompleteFormatee()) {
            $data['date_de_naissance_complete_formatee'] = $object->getDateDeNaissanceCompleteFormatee()->format('Y-m-d');
        }
        if ($object->isInitialized('nationalite') && null !== $object->getNationalite()) {
            $data['nationalite'] = $object->getNationalite();
        }
        if ($object->isInitialized('codeNationalite') && null !== $object->getCodeNationalite()) {
            $data['code_nationalite'] = $object->getCodeNationalite();
        }
        if ($object->isInitialized('villeDeNaissance') && null !== $object->getVilleDeNaissance()) {
            $data['ville_de_naissance'] = $object->getVilleDeNaissance();
        }
        if ($object->isInitialized('paysDeNaissance') && null !== $object->getPaysDeNaissance()) {
            $data['pays_de_naissance'] = $object->getPaysDeNaissance();
        }
        if ($object->isInitialized('codePaysDeNaissance') && null !== $object->getCodePaysDeNaissance()) {
            $data['code_pays_de_naissance'] = $object->getCodePaysDeNaissance();
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
        if ($object->isInitialized('pourcentageParts') && null !== $object->getPourcentageParts()) {
            $data['pourcentage_parts'] = $object->getPourcentageParts();
        }
        if ($object->isInitialized('pourcentagePartsDirectes') && null !== $object->getPourcentagePartsDirectes()) {
            $data['pourcentage_parts_directes'] = $object->getPourcentagePartsDirectes();
        }
        if ($object->isInitialized('pourcentagePartsIndirectes') && null !== $object->getPourcentagePartsIndirectes()) {
            $data['pourcentage_parts_indirectes'] = $object->getPourcentagePartsIndirectes();
        }
        if ($object->isInitialized('pourcentagePartsVocationTitulaire') && null !== $object->getPourcentagePartsVocationTitulaire()) {
            $data['pourcentage_parts_vocation_titulaire'] = $object->getPourcentagePartsVocationTitulaire();
        }
        if ($object->isInitialized('detailsPartsDirectes') && null !== $object->getDetailsPartsDirectes()) {
            $data['details_parts_directes'] = $this->normalizer->normalize($object->getDetailsPartsDirectes(), 'json', $context);
        }
        if ($object->isInitialized('detailsPartsIndirectes') && null !== $object->getDetailsPartsIndirectes()) {
            $data['details_parts_indirectes'] = $this->normalizer->normalize($object->getDetailsPartsIndirectes(), 'json', $context);
        }
        if ($object->isInitialized('detailsPartsVocationTitulaire') && null !== $object->getDetailsPartsVocationTitulaire()) {
            $data['details_parts_vocation_titulaire'] = $this->normalizer->normalize($object->getDetailsPartsVocationTitulaire(), 'json', $context);
        }
        if ($object->isInitialized('pourcentageVotes') && null !== $object->getPourcentageVotes()) {
            $data['pourcentage_votes'] = $object->getPourcentageVotes();
        }
        if ($object->isInitialized('pourcentageVotesDirects') && null !== $object->getPourcentageVotesDirects()) {
            $data['pourcentage_votes_directs'] = $object->getPourcentageVotesDirects();
        }
        if ($object->isInitialized('pourcentageVotesIndirect') && null !== $object->getPourcentageVotesIndirect()) {
            $data['pourcentage_votes_indirect'] = $object->getPourcentageVotesIndirect();
        }
        if ($object->isInitialized('detailsVotesDirects') && null !== $object->getDetailsVotesDirects()) {
            $data['details_votes_directs'] = $this->normalizer->normalize($object->getDetailsVotesDirects(), 'json', $context);
        }
        if ($object->isInitialized('detailsVotesIndirects') && null !== $object->getDetailsVotesIndirects()) {
            $data['details_votes_indirects'] = $this->normalizer->normalize($object->getDetailsVotesIndirects(), 'json', $context);
        }
        if ($object->isInitialized('detailsSocieteDeGestion') && null !== $object->getDetailsSocieteDeGestion()) {
            $data['details_societe_de_gestion'] = $this->normalizer->normalize($object->getDetailsSocieteDeGestion(), 'json', $context);
        }
        if ($object->isInitialized('detentionPouvoirDecisionAg') && null !== $object->getDetentionPouvoirDecisionAg()) {
            $data['detention_pouvoir_decision_ag'] = $object->getDetentionPouvoirDecisionAg();
        }
        if ($object->isInitialized('detentionPouvoirNomMembreConseilAdministration') && null !== $object->getDetentionPouvoirNomMembreConseilAdministration()) {
            $data['detention_pouvoir_nom_membre_conseil_administration'] = $object->getDetentionPouvoirNomMembreConseilAdministration();
        }
        if ($object->isInitialized('detentionAutresMoyensControle') && null !== $object->getDetentionAutresMoyensControle()) {
            $data['detention_autres_moyens_controle'] = $object->getDetentionAutresMoyensControle();
        }
        if ($object->isInitialized('beneficiaireRepresentantLegal') && null !== $object->getBeneficiaireRepresentantLegal()) {
            $data['beneficiaire_representant_legal'] = $object->getBeneficiaireRepresentantLegal();
        }
        if ($object->isInitialized('representantLegalPlacementSansGestionDelegation') && null !== $object->getRepresentantLegalPlacementSansGestionDelegation()) {
            $data['representant_legal_placement_sans_gestion_delegation'] = $object->getRepresentantLegalPlacementSansGestionDelegation();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
