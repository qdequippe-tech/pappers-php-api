<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee;
use Qdequippe\Pappers\Api\Model\Sanction;
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
    class EntrepriseFichebeneficiairesEffectifsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichebeneficiairesEffectifsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFichebeneficiairesEffectifsItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichebeneficiairesEffectifsItem();
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
            if (\array_key_exists('date_greffe', $data) && null !== $data['date_greffe']) {
                $object->setDateGreffe($data['date_greffe']);
                unset($data['date_greffe']);
            } elseif (\array_key_exists('date_greffe', $data) && null === $data['date_greffe']) {
                $object->setDateGreffe(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
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
            if (\array_key_exists('prenom_usuel', $data) && null !== $data['prenom_usuel']) {
                $object->setPrenomUsuel($data['prenom_usuel']);
                unset($data['prenom_usuel']);
            } elseif (\array_key_exists('prenom_usuel', $data) && null === $data['prenom_usuel']) {
                $object->setPrenomUsuel(null);
            }
            if (\array_key_exists('pseudonyme', $data) && null !== $data['pseudonyme']) {
                $object->setPseudonyme($data['pseudonyme']);
                unset($data['pseudonyme']);
            } elseif (\array_key_exists('pseudonyme', $data) && null === $data['pseudonyme']) {
                $object->setPseudonyme(null);
            }
            if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
                $object->setSexe($data['sexe']);
                unset($data['sexe']);
            } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
                $object->setSexe(null);
            }
            if (\array_key_exists('date_de_naissance_formatee', $data) && null !== $data['date_de_naissance_formatee']) {
                $object->setDateDeNaissanceFormatee($data['date_de_naissance_formatee']);
                unset($data['date_de_naissance_formatee']);
            } elseif (\array_key_exists('date_de_naissance_formatee', $data) && null === $data['date_de_naissance_formatee']) {
                $object->setDateDeNaissanceFormatee(null);
            }
            if (\array_key_exists('date_de_naissance_complete_formatee', $data) && null !== $data['date_de_naissance_complete_formatee']) {
                $object->setDateDeNaissanceCompleteFormatee($data['date_de_naissance_complete_formatee']);
                unset($data['date_de_naissance_complete_formatee']);
            } elseif (\array_key_exists('date_de_naissance_complete_formatee', $data) && null === $data['date_de_naissance_complete_formatee']) {
                $object->setDateDeNaissanceCompleteFormatee(null);
            }
            if (\array_key_exists('nationalite', $data) && null !== $data['nationalite']) {
                $object->setNationalite($data['nationalite']);
                unset($data['nationalite']);
            } elseif (\array_key_exists('nationalite', $data) && null === $data['nationalite']) {
                $object->setNationalite(null);
            }
            if (\array_key_exists('codes_nationalites', $data) && null !== $data['codes_nationalites']) {
                $values = [];
                foreach ($data['codes_nationalites'] as $value) {
                    $values[] = $value;
                }
                $object->setCodesNationalites($values);
                unset($data['codes_nationalites']);
            } elseif (\array_key_exists('codes_nationalites', $data) && null === $data['codes_nationalites']) {
                $object->setCodesNationalites(null);
            }
            if (\array_key_exists('ville_de_naissance', $data) && null !== $data['ville_de_naissance']) {
                $object->setVilleDeNaissance($data['ville_de_naissance']);
                unset($data['ville_de_naissance']);
            } elseif (\array_key_exists('ville_de_naissance', $data) && null === $data['ville_de_naissance']) {
                $object->setVilleDeNaissance(null);
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
            if (\array_key_exists('pourcentage_parts', $data) && null !== $data['pourcentage_parts']) {
                $object->setPourcentageParts($data['pourcentage_parts']);
                unset($data['pourcentage_parts']);
            } elseif (\array_key_exists('pourcentage_parts', $data) && null === $data['pourcentage_parts']) {
                $object->setPourcentageParts(null);
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
            if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && null !== $data['pourcentage_parts_vocation_titulaire']) {
                $object->setPourcentagePartsVocationTitulaire($data['pourcentage_parts_vocation_titulaire']);
                unset($data['pourcentage_parts_vocation_titulaire']);
            } elseif (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && null === $data['pourcentage_parts_vocation_titulaire']) {
                $object->setPourcentagePartsVocationTitulaire(null);
            }
            if (\array_key_exists('details_parts_directes', $data) && null !== $data['details_parts_directes']) {
                $object->setDetailsPartsDirectes($this->denormalizer->denormalize($data['details_parts_directes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes::class, 'json', $context));
                unset($data['details_parts_directes']);
            } elseif (\array_key_exists('details_parts_directes', $data) && null === $data['details_parts_directes']) {
                $object->setDetailsPartsDirectes(null);
            }
            if (\array_key_exists('details_parts_indirectes', $data) && null !== $data['details_parts_indirectes']) {
                $object->setDetailsPartsIndirectes($this->denormalizer->denormalize($data['details_parts_indirectes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes::class, 'json', $context));
                unset($data['details_parts_indirectes']);
            } elseif (\array_key_exists('details_parts_indirectes', $data) && null === $data['details_parts_indirectes']) {
                $object->setDetailsPartsIndirectes(null);
            }
            if (\array_key_exists('details_parts_vocation_titulaire', $data) && null !== $data['details_parts_vocation_titulaire']) {
                $object->setDetailsPartsVocationTitulaire($this->denormalizer->denormalize($data['details_parts_vocation_titulaire'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class, 'json', $context));
                unset($data['details_parts_vocation_titulaire']);
            } elseif (\array_key_exists('details_parts_vocation_titulaire', $data) && null === $data['details_parts_vocation_titulaire']) {
                $object->setDetailsPartsVocationTitulaire(null);
            }
            if (\array_key_exists('pourcentage_votes', $data) && null !== $data['pourcentage_votes']) {
                $object->setPourcentageVotes($data['pourcentage_votes']);
                unset($data['pourcentage_votes']);
            } elseif (\array_key_exists('pourcentage_votes', $data) && null === $data['pourcentage_votes']) {
                $object->setPourcentageVotes(null);
            }
            if (\array_key_exists('pourcentage_votes_directs', $data) && null !== $data['pourcentage_votes_directs']) {
                $object->setPourcentageVotesDirects($data['pourcentage_votes_directs']);
                unset($data['pourcentage_votes_directs']);
            } elseif (\array_key_exists('pourcentage_votes_directs', $data) && null === $data['pourcentage_votes_directs']) {
                $object->setPourcentageVotesDirects(null);
            }
            if (\array_key_exists('pourcentage_votes_indirect', $data) && null !== $data['pourcentage_votes_indirect']) {
                $object->setPourcentageVotesIndirect($data['pourcentage_votes_indirect']);
                unset($data['pourcentage_votes_indirect']);
            } elseif (\array_key_exists('pourcentage_votes_indirect', $data) && null === $data['pourcentage_votes_indirect']) {
                $object->setPourcentageVotesIndirect(null);
            }
            if (\array_key_exists('details_votes_directs', $data) && null !== $data['details_votes_directs']) {
                $object->setDetailsVotesDirects($this->denormalizer->denormalize($data['details_votes_directs'], EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects::class, 'json', $context));
                unset($data['details_votes_directs']);
            } elseif (\array_key_exists('details_votes_directs', $data) && null === $data['details_votes_directs']) {
                $object->setDetailsVotesDirects(null);
            }
            if (\array_key_exists('details_votes_indirects', $data) && null !== $data['details_votes_indirects']) {
                $object->setDetailsVotesIndirects($this->denormalizer->denormalize($data['details_votes_indirects'], EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects::class, 'json', $context));
                unset($data['details_votes_indirects']);
            } elseif (\array_key_exists('details_votes_indirects', $data) && null === $data['details_votes_indirects']) {
                $object->setDetailsVotesIndirects(null);
            }
            if (\array_key_exists('details_societe_de_gestion', $data) && null !== $data['details_societe_de_gestion']) {
                $object->setDetailsSocieteDeGestion($this->denormalizer->denormalize($data['details_societe_de_gestion'], EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion::class, 'json', $context));
                unset($data['details_societe_de_gestion']);
            } elseif (\array_key_exists('details_societe_de_gestion', $data) && null === $data['details_societe_de_gestion']) {
                $object->setDetailsSocieteDeGestion(null);
            }
            if (\array_key_exists('detention_pouvoir_decision_ag', $data) && null !== $data['detention_pouvoir_decision_ag']) {
                $object->setDetentionPouvoirDecisionAg($data['detention_pouvoir_decision_ag']);
                unset($data['detention_pouvoir_decision_ag']);
            } elseif (\array_key_exists('detention_pouvoir_decision_ag', $data) && null === $data['detention_pouvoir_decision_ag']) {
                $object->setDetentionPouvoirDecisionAg(null);
            }
            if (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && null !== $data['detention_pouvoir_nom_membre_conseil_administration']) {
                $object->setDetentionPouvoirNomMembreConseilAdministration($data['detention_pouvoir_nom_membre_conseil_administration']);
                unset($data['detention_pouvoir_nom_membre_conseil_administration']);
            } elseif (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && null === $data['detention_pouvoir_nom_membre_conseil_administration']) {
                $object->setDetentionPouvoirNomMembreConseilAdministration(null);
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
            if (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && null !== $data['representant_legal_placement_sans_gestion_delegation']) {
                $object->setRepresentantLegalPlacementSansGestionDelegation($data['representant_legal_placement_sans_gestion_delegation']);
                unset($data['representant_legal_placement_sans_gestion_delegation']);
            } elseif (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && null === $data['representant_legal_placement_sans_gestion_delegation']) {
                $object->setRepresentantLegalPlacementSansGestionDelegation(null);
            }
            if (\array_key_exists('personne_politiquement_exposee', $data) && null !== $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee($this->denormalizer->denormalize($data['personne_politiquement_exposee'], PersonnePolitiquementExposee::class, 'json', $context));
                unset($data['personne_politiquement_exposee']);
            } elseif (\array_key_exists('personne_politiquement_exposee', $data) && null === $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee(null);
            }
            if (\array_key_exists('sanctions_en_cours', $data) && null !== $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours($data['sanctions_en_cours']);
                unset($data['sanctions_en_cours']);
            } elseif (\array_key_exists('sanctions_en_cours', $data) && null === $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours(null);
            }
            if (\array_key_exists('sanctions', $data) && null !== $data['sanctions']) {
                $values_1 = [];
                foreach ($data['sanctions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, Sanction::class, 'json', $context);
                }
                $object->setSanctions($values_1);
                unset($data['sanctions']);
            } elseif (\array_key_exists('sanctions', $data) && null === $data['sanctions']) {
                $object->setSanctions(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dateGreffe') && null !== $object->getDateGreffe()) {
                $data['date_greffe'] = $object->getDateGreffe();
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
            if ($object->isInitialized('prenomUsuel') && null !== $object->getPrenomUsuel()) {
                $data['prenom_usuel'] = $object->getPrenomUsuel();
            }
            if ($object->isInitialized('pseudonyme') && null !== $object->getPseudonyme()) {
                $data['pseudonyme'] = $object->getPseudonyme();
            }
            if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
                $data['sexe'] = $object->getSexe();
            }
            if ($object->isInitialized('dateDeNaissanceFormatee') && null !== $object->getDateDeNaissanceFormatee()) {
                $data['date_de_naissance_formatee'] = $object->getDateDeNaissanceFormatee();
            }
            if ($object->isInitialized('dateDeNaissanceCompleteFormatee') && null !== $object->getDateDeNaissanceCompleteFormatee()) {
                $data['date_de_naissance_complete_formatee'] = $object->getDateDeNaissanceCompleteFormatee();
            }
            if ($object->isInitialized('nationalite') && null !== $object->getNationalite()) {
                $data['nationalite'] = $object->getNationalite();
            }
            if ($object->isInitialized('codesNationalites') && null !== $object->getCodesNationalites()) {
                $values = [];
                foreach ($object->getCodesNationalites() as $value) {
                    $values[] = $value;
                }
                $data['codes_nationalites'] = $values;
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
            if ($object->isInitialized('personnePolitiquementExposee') && null !== $object->getPersonnePolitiquementExposee()) {
                $data['personne_politiquement_exposee'] = $this->normalizer->normalize($object->getPersonnePolitiquementExposee(), 'json', $context);
            }
            if ($object->isInitialized('sanctionsEnCours') && null !== $object->getSanctionsEnCours()) {
                $data['sanctions_en_cours'] = $object->getSanctionsEnCours();
            }
            if ($object->isInitialized('sanctions') && null !== $object->getSanctions()) {
                $values_1 = [];
                foreach ($object->getSanctions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['sanctions'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseFichebeneficiairesEffectifsItem::class => false];
        }
    }
} else {
    class EntrepriseFichebeneficiairesEffectifsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFichebeneficiairesEffectifsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFichebeneficiairesEffectifsItem::class === $data::class;
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
            $object = new EntrepriseFichebeneficiairesEffectifsItem();
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
            if (\array_key_exists('date_greffe', $data) && null !== $data['date_greffe']) {
                $object->setDateGreffe($data['date_greffe']);
                unset($data['date_greffe']);
            } elseif (\array_key_exists('date_greffe', $data) && null === $data['date_greffe']) {
                $object->setDateGreffe(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
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
            if (\array_key_exists('prenom_usuel', $data) && null !== $data['prenom_usuel']) {
                $object->setPrenomUsuel($data['prenom_usuel']);
                unset($data['prenom_usuel']);
            } elseif (\array_key_exists('prenom_usuel', $data) && null === $data['prenom_usuel']) {
                $object->setPrenomUsuel(null);
            }
            if (\array_key_exists('pseudonyme', $data) && null !== $data['pseudonyme']) {
                $object->setPseudonyme($data['pseudonyme']);
                unset($data['pseudonyme']);
            } elseif (\array_key_exists('pseudonyme', $data) && null === $data['pseudonyme']) {
                $object->setPseudonyme(null);
            }
            if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
                $object->setSexe($data['sexe']);
                unset($data['sexe']);
            } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
                $object->setSexe(null);
            }
            if (\array_key_exists('date_de_naissance_formatee', $data) && null !== $data['date_de_naissance_formatee']) {
                $object->setDateDeNaissanceFormatee($data['date_de_naissance_formatee']);
                unset($data['date_de_naissance_formatee']);
            } elseif (\array_key_exists('date_de_naissance_formatee', $data) && null === $data['date_de_naissance_formatee']) {
                $object->setDateDeNaissanceFormatee(null);
            }
            if (\array_key_exists('date_de_naissance_complete_formatee', $data) && null !== $data['date_de_naissance_complete_formatee']) {
                $object->setDateDeNaissanceCompleteFormatee($data['date_de_naissance_complete_formatee']);
                unset($data['date_de_naissance_complete_formatee']);
            } elseif (\array_key_exists('date_de_naissance_complete_formatee', $data) && null === $data['date_de_naissance_complete_formatee']) {
                $object->setDateDeNaissanceCompleteFormatee(null);
            }
            if (\array_key_exists('nationalite', $data) && null !== $data['nationalite']) {
                $object->setNationalite($data['nationalite']);
                unset($data['nationalite']);
            } elseif (\array_key_exists('nationalite', $data) && null === $data['nationalite']) {
                $object->setNationalite(null);
            }
            if (\array_key_exists('codes_nationalites', $data) && null !== $data['codes_nationalites']) {
                $values = [];
                foreach ($data['codes_nationalites'] as $value) {
                    $values[] = $value;
                }
                $object->setCodesNationalites($values);
                unset($data['codes_nationalites']);
            } elseif (\array_key_exists('codes_nationalites', $data) && null === $data['codes_nationalites']) {
                $object->setCodesNationalites(null);
            }
            if (\array_key_exists('ville_de_naissance', $data) && null !== $data['ville_de_naissance']) {
                $object->setVilleDeNaissance($data['ville_de_naissance']);
                unset($data['ville_de_naissance']);
            } elseif (\array_key_exists('ville_de_naissance', $data) && null === $data['ville_de_naissance']) {
                $object->setVilleDeNaissance(null);
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
            if (\array_key_exists('pourcentage_parts', $data) && null !== $data['pourcentage_parts']) {
                $object->setPourcentageParts($data['pourcentage_parts']);
                unset($data['pourcentage_parts']);
            } elseif (\array_key_exists('pourcentage_parts', $data) && null === $data['pourcentage_parts']) {
                $object->setPourcentageParts(null);
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
            if (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && null !== $data['pourcentage_parts_vocation_titulaire']) {
                $object->setPourcentagePartsVocationTitulaire($data['pourcentage_parts_vocation_titulaire']);
                unset($data['pourcentage_parts_vocation_titulaire']);
            } elseif (\array_key_exists('pourcentage_parts_vocation_titulaire', $data) && null === $data['pourcentage_parts_vocation_titulaire']) {
                $object->setPourcentagePartsVocationTitulaire(null);
            }
            if (\array_key_exists('details_parts_directes', $data) && null !== $data['details_parts_directes']) {
                $object->setDetailsPartsDirectes($this->denormalizer->denormalize($data['details_parts_directes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes::class, 'json', $context));
                unset($data['details_parts_directes']);
            } elseif (\array_key_exists('details_parts_directes', $data) && null === $data['details_parts_directes']) {
                $object->setDetailsPartsDirectes(null);
            }
            if (\array_key_exists('details_parts_indirectes', $data) && null !== $data['details_parts_indirectes']) {
                $object->setDetailsPartsIndirectes($this->denormalizer->denormalize($data['details_parts_indirectes'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes::class, 'json', $context));
                unset($data['details_parts_indirectes']);
            } elseif (\array_key_exists('details_parts_indirectes', $data) && null === $data['details_parts_indirectes']) {
                $object->setDetailsPartsIndirectes(null);
            }
            if (\array_key_exists('details_parts_vocation_titulaire', $data) && null !== $data['details_parts_vocation_titulaire']) {
                $object->setDetailsPartsVocationTitulaire($this->denormalizer->denormalize($data['details_parts_vocation_titulaire'], EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class, 'json', $context));
                unset($data['details_parts_vocation_titulaire']);
            } elseif (\array_key_exists('details_parts_vocation_titulaire', $data) && null === $data['details_parts_vocation_titulaire']) {
                $object->setDetailsPartsVocationTitulaire(null);
            }
            if (\array_key_exists('pourcentage_votes', $data) && null !== $data['pourcentage_votes']) {
                $object->setPourcentageVotes($data['pourcentage_votes']);
                unset($data['pourcentage_votes']);
            } elseif (\array_key_exists('pourcentage_votes', $data) && null === $data['pourcentage_votes']) {
                $object->setPourcentageVotes(null);
            }
            if (\array_key_exists('pourcentage_votes_directs', $data) && null !== $data['pourcentage_votes_directs']) {
                $object->setPourcentageVotesDirects($data['pourcentage_votes_directs']);
                unset($data['pourcentage_votes_directs']);
            } elseif (\array_key_exists('pourcentage_votes_directs', $data) && null === $data['pourcentage_votes_directs']) {
                $object->setPourcentageVotesDirects(null);
            }
            if (\array_key_exists('pourcentage_votes_indirect', $data) && null !== $data['pourcentage_votes_indirect']) {
                $object->setPourcentageVotesIndirect($data['pourcentage_votes_indirect']);
                unset($data['pourcentage_votes_indirect']);
            } elseif (\array_key_exists('pourcentage_votes_indirect', $data) && null === $data['pourcentage_votes_indirect']) {
                $object->setPourcentageVotesIndirect(null);
            }
            if (\array_key_exists('details_votes_directs', $data) && null !== $data['details_votes_directs']) {
                $object->setDetailsVotesDirects($this->denormalizer->denormalize($data['details_votes_directs'], EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects::class, 'json', $context));
                unset($data['details_votes_directs']);
            } elseif (\array_key_exists('details_votes_directs', $data) && null === $data['details_votes_directs']) {
                $object->setDetailsVotesDirects(null);
            }
            if (\array_key_exists('details_votes_indirects', $data) && null !== $data['details_votes_indirects']) {
                $object->setDetailsVotesIndirects($this->denormalizer->denormalize($data['details_votes_indirects'], EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects::class, 'json', $context));
                unset($data['details_votes_indirects']);
            } elseif (\array_key_exists('details_votes_indirects', $data) && null === $data['details_votes_indirects']) {
                $object->setDetailsVotesIndirects(null);
            }
            if (\array_key_exists('details_societe_de_gestion', $data) && null !== $data['details_societe_de_gestion']) {
                $object->setDetailsSocieteDeGestion($this->denormalizer->denormalize($data['details_societe_de_gestion'], EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion::class, 'json', $context));
                unset($data['details_societe_de_gestion']);
            } elseif (\array_key_exists('details_societe_de_gestion', $data) && null === $data['details_societe_de_gestion']) {
                $object->setDetailsSocieteDeGestion(null);
            }
            if (\array_key_exists('detention_pouvoir_decision_ag', $data) && null !== $data['detention_pouvoir_decision_ag']) {
                $object->setDetentionPouvoirDecisionAg($data['detention_pouvoir_decision_ag']);
                unset($data['detention_pouvoir_decision_ag']);
            } elseif (\array_key_exists('detention_pouvoir_decision_ag', $data) && null === $data['detention_pouvoir_decision_ag']) {
                $object->setDetentionPouvoirDecisionAg(null);
            }
            if (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && null !== $data['detention_pouvoir_nom_membre_conseil_administration']) {
                $object->setDetentionPouvoirNomMembreConseilAdministration($data['detention_pouvoir_nom_membre_conseil_administration']);
                unset($data['detention_pouvoir_nom_membre_conseil_administration']);
            } elseif (\array_key_exists('detention_pouvoir_nom_membre_conseil_administration', $data) && null === $data['detention_pouvoir_nom_membre_conseil_administration']) {
                $object->setDetentionPouvoirNomMembreConseilAdministration(null);
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
            if (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && null !== $data['representant_legal_placement_sans_gestion_delegation']) {
                $object->setRepresentantLegalPlacementSansGestionDelegation($data['representant_legal_placement_sans_gestion_delegation']);
                unset($data['representant_legal_placement_sans_gestion_delegation']);
            } elseif (\array_key_exists('representant_legal_placement_sans_gestion_delegation', $data) && null === $data['representant_legal_placement_sans_gestion_delegation']) {
                $object->setRepresentantLegalPlacementSansGestionDelegation(null);
            }
            if (\array_key_exists('personne_politiquement_exposee', $data) && null !== $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee($this->denormalizer->denormalize($data['personne_politiquement_exposee'], PersonnePolitiquementExposee::class, 'json', $context));
                unset($data['personne_politiquement_exposee']);
            } elseif (\array_key_exists('personne_politiquement_exposee', $data) && null === $data['personne_politiquement_exposee']) {
                $object->setPersonnePolitiquementExposee(null);
            }
            if (\array_key_exists('sanctions_en_cours', $data) && null !== $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours($data['sanctions_en_cours']);
                unset($data['sanctions_en_cours']);
            } elseif (\array_key_exists('sanctions_en_cours', $data) && null === $data['sanctions_en_cours']) {
                $object->setSanctionsEnCours(null);
            }
            if (\array_key_exists('sanctions', $data) && null !== $data['sanctions']) {
                $values_1 = [];
                foreach ($data['sanctions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, Sanction::class, 'json', $context);
                }
                $object->setSanctions($values_1);
                unset($data['sanctions']);
            } elseif (\array_key_exists('sanctions', $data) && null === $data['sanctions']) {
                $object->setSanctions(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('dateGreffe') && null !== $object->getDateGreffe()) {
                $data['date_greffe'] = $object->getDateGreffe();
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
            if ($object->isInitialized('prenomUsuel') && null !== $object->getPrenomUsuel()) {
                $data['prenom_usuel'] = $object->getPrenomUsuel();
            }
            if ($object->isInitialized('pseudonyme') && null !== $object->getPseudonyme()) {
                $data['pseudonyme'] = $object->getPseudonyme();
            }
            if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
                $data['sexe'] = $object->getSexe();
            }
            if ($object->isInitialized('dateDeNaissanceFormatee') && null !== $object->getDateDeNaissanceFormatee()) {
                $data['date_de_naissance_formatee'] = $object->getDateDeNaissanceFormatee();
            }
            if ($object->isInitialized('dateDeNaissanceCompleteFormatee') && null !== $object->getDateDeNaissanceCompleteFormatee()) {
                $data['date_de_naissance_complete_formatee'] = $object->getDateDeNaissanceCompleteFormatee();
            }
            if ($object->isInitialized('nationalite') && null !== $object->getNationalite()) {
                $data['nationalite'] = $object->getNationalite();
            }
            if ($object->isInitialized('codesNationalites') && null !== $object->getCodesNationalites()) {
                $values = [];
                foreach ($object->getCodesNationalites() as $value) {
                    $values[] = $value;
                }
                $data['codes_nationalites'] = $values;
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
            if ($object->isInitialized('personnePolitiquementExposee') && null !== $object->getPersonnePolitiquementExposee()) {
                $data['personne_politiquement_exposee'] = $this->normalizer->normalize($object->getPersonnePolitiquementExposee(), 'json', $context);
            }
            if ($object->isInitialized('sanctionsEnCours') && null !== $object->getSanctionsEnCours()) {
                $data['sanctions_en_cours'] = $object->getSanctionsEnCours();
            }
            if ($object->isInitialized('sanctions') && null !== $object->getSanctions()) {
                $values_1 = [];
                foreach ($object->getSanctions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['sanctions'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseFichebeneficiairesEffectifsItem::class => false];
        }
    }
}
