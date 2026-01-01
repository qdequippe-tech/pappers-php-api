<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Beneficiaire;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BeneficiaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Beneficiaire::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Beneficiaire::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Beneficiaire();
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
        if (\array_key_exists('detention_autres_moyens_controle', $data) && \is_int($data['detention_autres_moyens_controle'])) {
            $data['detention_autres_moyens_controle'] = (bool) $data['detention_autres_moyens_controle'];
        }
        if (\array_key_exists('beneficiaire_representant_legal', $data) && \is_int($data['beneficiaire_representant_legal'])) {
            $data['beneficiaire_representant_legal'] = (bool) $data['beneficiaire_representant_legal'];
        }
        if (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && \is_int($data['representant_legal_placement_sans_gestion_delegation'])) {
            $data['representant_legal_placement_sans_gestion_delegation'] = (bool) $data['representant_legal_placement_sans_gestion_delegation'];
        }
        if (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && \is_int($data['detention_pouvoir_nom_membre_conseil_administration'])) {
            $data['detention_pouvoir_nom_membre_conseil_administration'] = (bool) $data['detention_pouvoir_nom_membre_conseil_administration'];
        }
        if (\array_key_exists('detention_pouvoir_decision_ag', $data) && \is_int($data['detention_pouvoir_decision_ag'])) {
            $data['detention_pouvoir_decision_ag'] = (bool) $data['detention_pouvoir_decision_ag'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }
        if (\array_key_exists('nom_usage', $data) && null !== $data['nom_usage']) {
            $object->setNomUsage($data['nom_usage']);
            unset($data['nom_usage']);
        } elseif (\array_key_exists('nom_usage', $data) && null === $data['nom_usage']) {
            $object->setNomUsage(null);
        }
        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }
        if (\array_key_exists('pseudonyme', $data) && null !== $data['pseudonyme']) {
            $object->setPseudonyme($data['pseudonyme']);
            unset($data['pseudonyme']);
        } elseif (\array_key_exists('pseudonyme', $data) && null === $data['pseudonyme']) {
            $object->setPseudonyme(null);
        }
        if (\array_key_exists('nom_complet', $data) && null !== $data['nom_complet']) {
            $object->setNomComplet($data['nom_complet']);
            unset($data['nom_complet']);
        } elseif (\array_key_exists('nom_complet', $data) && null === $data['nom_complet']) {
            $object->setNomComplet(null);
        }
        if (\array_key_exists('date_de_naissance_formate', $data) && null !== $data['date_de_naissance_formate']) {
            $object->setDateDeNaissanceFormate($data['date_de_naissance_formate']);
            unset($data['date_de_naissance_formate']);
        } elseif (\array_key_exists('date_de_naissance_formate', $data) && null === $data['date_de_naissance_formate']) {
            $object->setDateDeNaissanceFormate(null);
        }
        if (\array_key_exists('nationalite', $data) && null !== $data['nationalite']) {
            $object->setNationalite($data['nationalite']);
            unset($data['nationalite']);
        } elseif (\array_key_exists('nationalite', $data) && null === $data['nationalite']) {
            $object->setNationalite(null);
        }
        if (\array_key_exists('pourcentage_parts', $data) && null !== $data['pourcentage_parts']) {
            $object->setPourcentageParts($data['pourcentage_parts']);
            unset($data['pourcentage_parts']);
        } elseif (\array_key_exists('pourcentage_parts', $data) && null === $data['pourcentage_parts']) {
            $object->setPourcentageParts(null);
        }
        if (\array_key_exists('pourcentage_votes', $data) && null !== $data['pourcentage_votes']) {
            $object->setPourcentageVotes($data['pourcentage_votes']);
            unset($data['pourcentage_votes']);
        } elseif (\array_key_exists('pourcentage_votes', $data) && null === $data['pourcentage_votes']) {
            $object->setPourcentageVotes(null);
        }
        if (\array_key_exists('pourcentage_votes_indirect', $data) && null !== $data['pourcentage_votes_indirect']) {
            $object->setPourcentageVotesIndirect($data['pourcentage_votes_indirect']);
            unset($data['pourcentage_votes_indirect']);
        } elseif (\array_key_exists('pourcentage_votes_indirect', $data) && null === $data['pourcentage_votes_indirect']) {
            $object->setPourcentageVotesIndirect(null);
        }
        if (\array_key_exists('pourcentage_votes_directs', $data) && null !== $data['pourcentage_votes_directs']) {
            $object->setPourcentageVotesDirects($data['pourcentage_votes_directs']);
            unset($data['pourcentage_votes_directs']);
        } elseif (\array_key_exists('pourcentage_votes_directs', $data) && null === $data['pourcentage_votes_directs']) {
            $object->setPourcentageVotesDirects(null);
        }
        if (\array_key_exists('detention_autres_moyens_controle', $data) && null !== $data['detention_autres_moyens_controle']) {
            $object->setDetentionAutresMoyensControle($data['detention_autres_moyens_controle']);
            unset($data['detention_autres_moyens_controle']);
        } elseif (\array_key_exists('detention_autres_moyens_controle', $data) && null === $data['detention_autres_moyens_controle']) {
            $object->setDetentionAutresMoyensControle(null);
        }
        if (\array_key_exists('beneficiaire_representant_legal', $data) && null !== $data['beneficiaire_representant_legal']) {
            $object->setBeneficiaireRepresentantLegal($data['beneficiaire_representant_legal']);
            unset($data['beneficiaire_representant_legal']);
        } elseif (\array_key_exists('beneficiaire_representant_legal', $data) && null === $data['beneficiaire_representant_legal']) {
            $object->setBeneficiaireRepresentantLegal(null);
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
        if (\array_key_exists('adresse_ligne_3', $data) && null !== $data['adresse_ligne_3']) {
            $object->setAdresseLigne3($data['adresse_ligne_3']);
            unset($data['adresse_ligne_3']);
        } elseif (\array_key_exists('adresse_ligne_3', $data) && null === $data['adresse_ligne_3']) {
            $object->setAdresseLigne3(null);
        }
        if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && null !== $data['pourcentage_parts_vocation_titulaire']) {
            $object->setPourcentagePartsVocationTitulaire($data['pourcentage_parts_vocation_titulaire']);
            unset($data['pourcentage_parts_vocation_titulaire']);
        } elseif (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && null === $data['pourcentage_parts_vocation_titulaire']) {
            $object->setPourcentagePartsVocationTitulaire(null);
        }
        if (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && null !== $data['representant_legal_placement_sans_gestion_delegation']) {
            $object->setRepresentantLegalPlacementSansGestionDelegation($data['representant_legal_placement_sans_gestion_delegation']);
            unset($data['representant_legal_placement_sans_gestion_delegation']);
        } elseif (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && null === $data['representant_legal_placement_sans_gestion_delegation']) {
            $object->setRepresentantLegalPlacementSansGestionDelegation(null);
        }
        if (\array_key_exists('code_postal', $data) && null !== $data['code_postal']) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        } elseif (\array_key_exists('code_postal', $data) && null === $data['code_postal']) {
            $object->setCodePostal(null);
        }
        if (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && null !== $data['detention_pouvoir_nom_membre_conseil_administration']) {
            $object->setDetentionPouvoirNomMembreConseilAdministration($data['detention_pouvoir_nom_membre_conseil_administration']);
            unset($data['detention_pouvoir_nom_membre_conseil_administration']);
        } elseif (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && null === $data['detention_pouvoir_nom_membre_conseil_administration']) {
            $object->setDetentionPouvoirNomMembreConseilAdministration(null);
        }
        if (\array_key_exists('ville', $data) && null !== $data['ville']) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        } elseif (\array_key_exists('ville', $data) && null === $data['ville']) {
            $object->setVille(null);
        }
        if (\array_key_exists('date_de_naissance_complete_formatee', $data) && null !== $data['date_de_naissance_complete_formatee']) {
            $object->setDateDeNaissanceCompleteFormatee(\DateTime::createFromFormat('Y-m-d', $data['date_de_naissance_complete_formatee'])->setTime(0, 0, 0));
            unset($data['date_de_naissance_complete_formatee']);
        } elseif (\array_key_exists('date_de_naissance_complete_formatee', $data) && null === $data['date_de_naissance_complete_formatee']) {
            $object->setDateDeNaissanceCompleteFormatee(null);
        }
        if (\array_key_exists('pourcentage_parts_directes', $data) && null !== $data['pourcentage_parts_directes']) {
            $object->setPourcentagePartsDirectes($data['pourcentage_parts_directes']);
            unset($data['pourcentage_parts_directes']);
        } elseif (\array_key_exists('pourcentage_parts_directes', $data) && null === $data['pourcentage_parts_directes']) {
            $object->setPourcentagePartsDirectes(null);
        }
        if (\array_key_exists('pourcentage_parts_indirectes', $data) && null !== $data['pourcentage_parts_indirectes']) {
            $object->setPourcentagePartsIndirectes($data['pourcentage_parts_indirectes']);
            unset($data['pourcentage_parts_indirectes']);
        } elseif (\array_key_exists('pourcentage_parts_indirectes', $data) && null === $data['pourcentage_parts_indirectes']) {
            $object->setPourcentagePartsIndirectes(null);
        }
        if (\array_key_exists('pays_de_naissance', $data) && null !== $data['pays_de_naissance']) {
            $object->setPaysDeNaissance($data['pays_de_naissance']);
            unset($data['pays_de_naissance']);
        } elseif (\array_key_exists('pays_de_naissance', $data) && null === $data['pays_de_naissance']) {
            $object->setPaysDeNaissance(null);
        }
        if (\array_key_exists('code_pays_de_naissance', $data) && null !== $data['code_pays_de_naissance']) {
            $object->setCodePaysDeNaissance($data['code_pays_de_naissance']);
            unset($data['code_pays_de_naissance']);
        } elseif (\array_key_exists('code_pays_de_naissance', $data) && null === $data['code_pays_de_naissance']) {
            $object->setCodePaysDeNaissance(null);
        }
        if (\array_key_exists('ville_de_naissance', $data) && null !== $data['ville_de_naissance']) {
            $object->setVilleDeNaissance($data['ville_de_naissance']);
            unset($data['ville_de_naissance']);
        } elseif (\array_key_exists('ville_de_naissance', $data) && null === $data['ville_de_naissance']) {
            $object->setVilleDeNaissance(null);
        }
        if (\array_key_exists('detention_pouvoir_decision_ag', $data) && null !== $data['detention_pouvoir_decision_ag']) {
            $object->setDetentionPouvoirDecisionAg($data['detention_pouvoir_decision_ag']);
            unset($data['detention_pouvoir_decision_ag']);
        } elseif (\array_key_exists('detention_pouvoir_decision_ag', $data) && null === $data['detention_pouvoir_decision_ag']) {
            $object->setDetentionPouvoirDecisionAg(null);
        }
        if (\array_key_exists('pays', $data) && null !== $data['pays']) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
            $object->setPays(null);
        }
        if (\array_key_exists('date_de_naissance_formatee', $data) && null !== $data['date_de_naissance_formatee']) {
            $object->setDateDeNaissanceFormatee($data['date_de_naissance_formatee']);
            unset($data['date_de_naissance_formatee']);
        } elseif (\array_key_exists('date_de_naissance_formatee', $data) && null === $data['date_de_naissance_formatee']) {
            $object->setDateDeNaissanceFormatee(null);
        }
        if (\array_key_exists('code_pays', $data) && null !== $data['code_pays']) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        } elseif (\array_key_exists('code_pays', $data) && null === $data['code_pays']) {
            $object->setCodePays(null);
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
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('nomUsage') && null !== $data->getNomUsage()) {
            $dataArray['nom_usage'] = $data->getNomUsage();
        }
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }
        if ($data->isInitialized('pseudonyme') && null !== $data->getPseudonyme()) {
            $dataArray['pseudonyme'] = $data->getPseudonyme();
        }
        if ($data->isInitialized('nomComplet') && null !== $data->getNomComplet()) {
            $dataArray['nom_complet'] = $data->getNomComplet();
        }
        if ($data->isInitialized('dateDeNaissanceFormate') && null !== $data->getDateDeNaissanceFormate()) {
            $dataArray['date_de_naissance_formate'] = $data->getDateDeNaissanceFormate();
        }
        if ($data->isInitialized('nationalite') && null !== $data->getNationalite()) {
            $dataArray['nationalite'] = $data->getNationalite();
        }
        if ($data->isInitialized('pourcentageParts') && null !== $data->getPourcentageParts()) {
            $dataArray['pourcentage_parts'] = $data->getPourcentageParts();
        }
        if ($data->isInitialized('pourcentageVotes') && null !== $data->getPourcentageVotes()) {
            $dataArray['pourcentage_votes'] = $data->getPourcentageVotes();
        }
        if ($data->isInitialized('pourcentageVotesIndirect') && null !== $data->getPourcentageVotesIndirect()) {
            $dataArray['pourcentage_votes_indirect'] = $data->getPourcentageVotesIndirect();
        }
        if ($data->isInitialized('pourcentageVotesDirects') && null !== $data->getPourcentageVotesDirects()) {
            $dataArray['pourcentage_votes_directs'] = $data->getPourcentageVotesDirects();
        }
        if ($data->isInitialized('detentionAutresMoyensControle') && null !== $data->getDetentionAutresMoyensControle()) {
            $dataArray['detention_autres_moyens_controle'] = $data->getDetentionAutresMoyensControle();
        }
        if ($data->isInitialized('beneficiaireRepresentantLegal') && null !== $data->getBeneficiaireRepresentantLegal()) {
            $dataArray['beneficiaire_representant_legal'] = $data->getBeneficiaireRepresentantLegal();
        }
        if ($data->isInitialized('adresseLigne1') && null !== $data->getAdresseLigne1()) {
            $dataArray['adresse_ligne_1'] = $data->getAdresseLigne1();
        }
        if ($data->isInitialized('adresseLigne2') && null !== $data->getAdresseLigne2()) {
            $dataArray['adresse_ligne_2'] = $data->getAdresseLigne2();
        }
        if ($data->isInitialized('adresseLigne3') && null !== $data->getAdresseLigne3()) {
            $dataArray['adresse_ligne_3'] = $data->getAdresseLigne3();
        }
        if ($data->isInitialized('pourcentagePartsVocationTitulaire') && null !== $data->getPourcentagePartsVocationTitulaire()) {
            $dataArray['pourcentage_parts_vocation_titulaire'] = $data->getPourcentagePartsVocationTitulaire();
        }
        if ($data->isInitialized('representantLegalPlacementSansGestionDelegation') && null !== $data->getRepresentantLegalPlacementSansGestionDelegation()) {
            $dataArray['representant_legal_placement_sans_gestion_delegation'] = $data->getRepresentantLegalPlacementSansGestionDelegation();
        }
        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['code_postal'] = $data->getCodePostal();
        }
        if ($data->isInitialized('detentionPouvoirNomMembreConseilAdministration') && null !== $data->getDetentionPouvoirNomMembreConseilAdministration()) {
            $dataArray['detention_pouvoir_nom_membre_conseil_administration'] = $data->getDetentionPouvoirNomMembreConseilAdministration();
        }
        if ($data->isInitialized('ville') && null !== $data->getVille()) {
            $dataArray['ville'] = $data->getVille();
        }
        if ($data->isInitialized('dateDeNaissanceCompleteFormatee') && null !== $data->getDateDeNaissanceCompleteFormatee()) {
            $dataArray['date_de_naissance_complete_formatee'] = $data->getDateDeNaissanceCompleteFormatee()->format('Y-m-d');
        }
        if ($data->isInitialized('pourcentagePartsDirectes') && null !== $data->getPourcentagePartsDirectes()) {
            $dataArray['pourcentage_parts_directes'] = $data->getPourcentagePartsDirectes();
        }
        if ($data->isInitialized('pourcentagePartsIndirectes') && null !== $data->getPourcentagePartsIndirectes()) {
            $dataArray['pourcentage_parts_indirectes'] = $data->getPourcentagePartsIndirectes();
        }
        if ($data->isInitialized('paysDeNaissance') && null !== $data->getPaysDeNaissance()) {
            $dataArray['pays_de_naissance'] = $data->getPaysDeNaissance();
        }
        if ($data->isInitialized('codePaysDeNaissance') && null !== $data->getCodePaysDeNaissance()) {
            $dataArray['code_pays_de_naissance'] = $data->getCodePaysDeNaissance();
        }
        if ($data->isInitialized('villeDeNaissance') && null !== $data->getVilleDeNaissance()) {
            $dataArray['ville_de_naissance'] = $data->getVilleDeNaissance();
        }
        if ($data->isInitialized('detentionPouvoirDecisionAg') && null !== $data->getDetentionPouvoirDecisionAg()) {
            $dataArray['detention_pouvoir_decision_ag'] = $data->getDetentionPouvoirDecisionAg();
        }
        if ($data->isInitialized('pays') && null !== $data->getPays()) {
            $dataArray['pays'] = $data->getPays();
        }
        if ($data->isInitialized('dateDeNaissanceFormatee') && null !== $data->getDateDeNaissanceFormatee()) {
            $dataArray['date_de_naissance_formatee'] = $data->getDateDeNaissanceFormatee();
        }
        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['code_pays'] = $data->getCodePays();
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
        return [Beneficiaire::class => false];
    }
}
