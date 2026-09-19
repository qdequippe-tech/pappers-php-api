<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\AppelOffreGagne;
use Qdequippe\Pappers\Api\Model\AppelOffreLance;
use Qdequippe\Pappers\Api\Model\Association;
use Qdequippe\Pappers\Api\Model\Bodacc;
use Qdequippe\Pappers\Api\Model\Brevet;
use Qdequippe\Pappers\Api\Model\Decisions;
use Qdequippe\Pappers\Api\Model\Dessin;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseCitee;
use Qdequippe\Pappers\Api\Model\EntrepriseFiche;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheActifNetInferieurMoitieCapital;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheBeneficiairesEffectifsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheComptesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheDepotsActesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheDerniersStatuts;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheEntreprisesDirigeesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheEtablissement;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheExtraitImmatriculation;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheFinancesEstimationsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheFinancesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheInformationsBoursieres;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheMarquesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheObservationsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheParcellesDetenues;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheProceduresCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheRnm;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheSiege;
use Qdequippe\Pappers\Api\Model\EtablissementFiche;
use Qdequippe\Pappers\Api\Model\Labels;
use Qdequippe\Pappers\Api\Model\RepresentantEntreprise;
use Qdequippe\Pappers\Api\Model\ScoringFinancier;
use Qdequippe\Pappers\Api\Model\ScoringNonFinancier;
use Qdequippe\Pappers\Api\Runtime\JsonObject;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\InvalidDateException;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFiche::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFiche::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EntrepriseFiche();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('diffusable', $data) && \is_int($data['diffusable'])) {
            $data['diffusable'] = (bool) $data['diffusable'];
        }
        if (\array_key_exists('economie_sociale_solidaire', $data) && \is_int($data['economie_sociale_solidaire'])) {
            $data['economie_sociale_solidaire'] = (bool) $data['economie_sociale_solidaire'];
        }
        if (\array_key_exists('validite_tva_intracommunautaire', $data) && \is_int($data['validite_tva_intracommunautaire'])) {
            $data['validite_tva_intracommunautaire'] = (bool) $data['validite_tva_intracommunautaire'];
        }
        if (\array_key_exists('associe_unique', $data) && \is_int($data['associe_unique'])) {
            $data['associe_unique'] = (bool) $data['associe_unique'];
        }
        if (\array_key_exists('procedure_collective_existe', $data) && \is_int($data['procedure_collective_existe'])) {
            $data['procedure_collective_existe'] = (bool) $data['procedure_collective_existe'];
        }
        if (\array_key_exists('procedure_collective_en_cours', $data) && \is_int($data['procedure_collective_en_cours'])) {
            $data['procedure_collective_en_cours'] = (bool) $data['procedure_collective_en_cours'];
        }
        if (\array_key_exists('entreprises_citees_incomplet', $data) && \is_int($data['entreprises_citees_incomplet'])) {
            $data['entreprises_citees_incomplet'] = (bool) $data['entreprises_citees_incomplet'];
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
            unset($data['siren']);
        }
        if (\array_key_exists('siren_formate', $data) && null !== $data['siren_formate']) {
            $object->setSirenFormate($data['siren_formate']);
            unset($data['siren_formate']);
        } elseif (\array_key_exists('siren_formate', $data) && null === $data['siren_formate']) {
            $object->setSirenFormate(null);
            unset($data['siren_formate']);
        }
        if (\array_key_exists('opposition_utilisation_commerciale', $data) && null !== $data['opposition_utilisation_commerciale']) {
            $object->setOppositionUtilisationCommerciale($data['opposition_utilisation_commerciale']);
            unset($data['opposition_utilisation_commerciale']);
        } elseif (\array_key_exists('opposition_utilisation_commerciale', $data) && null === $data['opposition_utilisation_commerciale']) {
            $object->setOppositionUtilisationCommerciale(null);
            unset($data['opposition_utilisation_commerciale']);
        }
        if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
            $object->setNomEntreprise($data['nom_entreprise']);
            unset($data['nom_entreprise']);
        } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
            $object->setNomEntreprise(null);
            unset($data['nom_entreprise']);
        }
        if (\array_key_exists('personne_morale', $data) && null !== $data['personne_morale']) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        } elseif (\array_key_exists('personne_morale', $data) && null === $data['personne_morale']) {
            $object->setPersonneMorale(null);
            unset($data['personne_morale']);
        }
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
            unset($data['denomination']);
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
            unset($data['nom']);
        }
        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
            unset($data['prenom']);
        }
        if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
            $object->setSexe(null);
            unset($data['sexe']);
        }
        if (\array_key_exists('code_naf', $data) && null !== $data['code_naf']) {
            $object->setCodeNaf($data['code_naf']);
            unset($data['code_naf']);
        } elseif (\array_key_exists('code_naf', $data) && null === $data['code_naf']) {
            $object->setCodeNaf(null);
            unset($data['code_naf']);
        }
        if (\array_key_exists('libelle_code_naf', $data) && null !== $data['libelle_code_naf']) {
            $object->setLibelleCodeNaf($data['libelle_code_naf']);
            unset($data['libelle_code_naf']);
        } elseif (\array_key_exists('libelle_code_naf', $data) && null === $data['libelle_code_naf']) {
            $object->setLibelleCodeNaf(null);
            unset($data['libelle_code_naf']);
        }
        if (\array_key_exists('domaine_activite', $data) && null !== $data['domaine_activite']) {
            $object->setDomaineActivite($data['domaine_activite']);
            unset($data['domaine_activite']);
        } elseif (\array_key_exists('domaine_activite', $data) && null === $data['domaine_activite']) {
            $object->setDomaineActivite(null);
            unset($data['domaine_activite']);
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
            unset($data['conventions_collectives']);
        }
        if (\array_key_exists('date_creation', $data) && null !== $data['date_creation']) {
            $object->setDateCreation($data['date_creation']);
            unset($data['date_creation']);
        } elseif (\array_key_exists('date_creation', $data) && null === $data['date_creation']) {
            $object->setDateCreation(null);
            unset($data['date_creation']);
        }
        if (\array_key_exists('date_creation_formate', $data) && null !== $data['date_creation_formate']) {
            $object->setDateCreationFormate($data['date_creation_formate']);
            unset($data['date_creation_formate']);
        } elseif (\array_key_exists('date_creation_formate', $data) && null === $data['date_creation_formate']) {
            $object->setDateCreationFormate(null);
            unset($data['date_creation_formate']);
        }
        if (\array_key_exists('entreprise_cessee', $data) && null !== $data['entreprise_cessee']) {
            $object->setEntrepriseCessee($data['entreprise_cessee']);
            unset($data['entreprise_cessee']);
        } elseif (\array_key_exists('entreprise_cessee', $data) && null === $data['entreprise_cessee']) {
            $object->setEntrepriseCessee(null);
            unset($data['entreprise_cessee']);
        }
        if (\array_key_exists('date_cessation', $data) && null !== $data['date_cessation']) {
            $object->setDateCessation($data['date_cessation']);
            unset($data['date_cessation']);
        } elseif (\array_key_exists('date_cessation', $data) && null === $data['date_cessation']) {
            $object->setDateCessation(null);
            unset($data['date_cessation']);
        }
        if (\array_key_exists('entreprise_employeuse', $data) && null !== $data['entreprise_employeuse']) {
            $object->setEntrepriseEmployeuse($data['entreprise_employeuse']);
            unset($data['entreprise_employeuse']);
        } elseif (\array_key_exists('entreprise_employeuse', $data) && null === $data['entreprise_employeuse']) {
            $object->setEntrepriseEmployeuse(null);
            unset($data['entreprise_employeuse']);
        }
        if (\array_key_exists('societe_a_mission', $data) && null !== $data['societe_a_mission']) {
            $object->setSocieteAMission($data['societe_a_mission']);
            unset($data['societe_a_mission']);
        } elseif (\array_key_exists('societe_a_mission', $data) && null === $data['societe_a_mission']) {
            $object->setSocieteAMission(null);
            unset($data['societe_a_mission']);
        }
        if (\array_key_exists('categorie_juridique', $data) && null !== $data['categorie_juridique']) {
            $object->setCategorieJuridique($data['categorie_juridique']);
            unset($data['categorie_juridique']);
        } elseif (\array_key_exists('categorie_juridique', $data) && null === $data['categorie_juridique']) {
            $object->setCategorieJuridique(null);
            unset($data['categorie_juridique']);
        }
        if (\array_key_exists('forme_juridique', $data) && null !== $data['forme_juridique']) {
            $object->setFormeJuridique($data['forme_juridique']);
            unset($data['forme_juridique']);
        } elseif (\array_key_exists('forme_juridique', $data) && null === $data['forme_juridique']) {
            $object->setFormeJuridique(null);
            unset($data['forme_juridique']);
        }
        if (\array_key_exists('micro_entreprise', $data) && null !== $data['micro_entreprise']) {
            $object->setMicroEntreprise($data['micro_entreprise']);
            unset($data['micro_entreprise']);
        } elseif (\array_key_exists('micro_entreprise', $data) && null === $data['micro_entreprise']) {
            $object->setMicroEntreprise(null);
            unset($data['micro_entreprise']);
        }
        if (\array_key_exists('forme_exercice', $data) && null !== $data['forme_exercice']) {
            $object->setFormeExercice($data['forme_exercice']);
            unset($data['forme_exercice']);
        } elseif (\array_key_exists('forme_exercice', $data) && null === $data['forme_exercice']) {
            $object->setFormeExercice(null);
            unset($data['forme_exercice']);
        }
        if (\array_key_exists('effectif', $data) && null !== $data['effectif']) {
            $object->setEffectif($data['effectif']);
            unset($data['effectif']);
        } elseif (\array_key_exists('effectif', $data) && null === $data['effectif']) {
            $object->setEffectif(null);
            unset($data['effectif']);
        }
        if (\array_key_exists('effectif_min', $data) && null !== $data['effectif_min']) {
            $object->setEffectifMin($data['effectif_min']);
            unset($data['effectif_min']);
        } elseif (\array_key_exists('effectif_min', $data) && null === $data['effectif_min']) {
            $object->setEffectifMin(null);
            unset($data['effectif_min']);
        }
        if (\array_key_exists('effectif_max', $data) && null !== $data['effectif_max']) {
            $object->setEffectifMax($data['effectif_max']);
            unset($data['effectif_max']);
        } elseif (\array_key_exists('effectif_max', $data) && null === $data['effectif_max']) {
            $object->setEffectifMax(null);
            unset($data['effectif_max']);
        }
        if (\array_key_exists('tranche_effectif', $data) && null !== $data['tranche_effectif']) {
            $object->setTrancheEffectif($data['tranche_effectif']);
            unset($data['tranche_effectif']);
        } elseif (\array_key_exists('tranche_effectif', $data) && null === $data['tranche_effectif']) {
            $object->setTrancheEffectif(null);
            unset($data['tranche_effectif']);
        }
        if (\array_key_exists('annee_effectif', $data) && null !== $data['annee_effectif']) {
            $object->setAnneeEffectif($data['annee_effectif']);
            unset($data['annee_effectif']);
        } elseif (\array_key_exists('annee_effectif', $data) && null === $data['annee_effectif']) {
            $object->setAnneeEffectif(null);
            unset($data['annee_effectif']);
        }
        if (\array_key_exists('capital', $data) && null !== $data['capital']) {
            $object->setCapital($data['capital']);
            unset($data['capital']);
        } elseif (\array_key_exists('capital', $data) && null === $data['capital']) {
            $object->setCapital(null);
            unset($data['capital']);
        }
        if (\array_key_exists('statut_rcs', $data) && null !== $data['statut_rcs']) {
            $object->setStatutRcs($data['statut_rcs']);
            unset($data['statut_rcs']);
        } elseif (\array_key_exists('statut_rcs', $data) && null === $data['statut_rcs']) {
            $object->setStatutRcs(null);
            unset($data['statut_rcs']);
        }
        if (\array_key_exists('siege', $data) && null !== $data['siege']) {
            $object->setSiege($this->denormalizer->denormalize($data['siege'], EntrepriseFicheSiege::class, 'json', $context));
            unset($data['siege']);
        } elseif (\array_key_exists('siege', $data) && null === $data['siege']) {
            $object->setSiege(null);
            unset($data['siege']);
        }
        if (\array_key_exists('lien_pappers', $data) && null !== $data['lien_pappers']) {
            $object->setLienPappers($data['lien_pappers']);
            unset($data['lien_pappers']);
        } elseif (\array_key_exists('lien_pappers', $data) && null === $data['lien_pappers']) {
            $object->setLienPappers(null);
            unset($data['lien_pappers']);
        }
        if (\array_key_exists('diffusable', $data) && null !== $data['diffusable']) {
            $object->setDiffusable($data['diffusable']);
            unset($data['diffusable']);
        } elseif (\array_key_exists('diffusable', $data) && null === $data['diffusable']) {
            $object->setDiffusable(null);
            unset($data['diffusable']);
        }
        if (\array_key_exists('sigle', $data) && null !== $data['sigle']) {
            $object->setSigle($data['sigle']);
            unset($data['sigle']);
        } elseif (\array_key_exists('sigle', $data) && null === $data['sigle']) {
            $object->setSigle(null);
            unset($data['sigle']);
        }
        if (\array_key_exists('objet_social', $data) && null !== $data['objet_social']) {
            $object->setObjetSocial($data['objet_social']);
            unset($data['objet_social']);
        } elseif (\array_key_exists('objet_social', $data) && null === $data['objet_social']) {
            $object->setObjetSocial(null);
            unset($data['objet_social']);
        }
        if (\array_key_exists('capital_formate', $data) && null !== $data['capital_formate']) {
            $object->setCapitalFormate($data['capital_formate']);
            unset($data['capital_formate']);
        } elseif (\array_key_exists('capital_formate', $data) && null === $data['capital_formate']) {
            $object->setCapitalFormate(null);
            unset($data['capital_formate']);
        }
        if (\array_key_exists('capital_actuel_si_variable', $data) && null !== $data['capital_actuel_si_variable']) {
            $object->setCapitalActuelSiVariable($data['capital_actuel_si_variable']);
            unset($data['capital_actuel_si_variable']);
        } elseif (\array_key_exists('capital_actuel_si_variable', $data) && null === $data['capital_actuel_si_variable']) {
            $object->setCapitalActuelSiVariable(null);
            unset($data['capital_actuel_si_variable']);
        }
        if (\array_key_exists('devise_capital', $data) && null !== $data['devise_capital']) {
            $object->setDeviseCapital($data['devise_capital']);
            unset($data['devise_capital']);
        } elseif (\array_key_exists('devise_capital', $data) && null === $data['devise_capital']) {
            $object->setDeviseCapital(null);
            unset($data['devise_capital']);
        }
        if (\array_key_exists('actif_net_inferieur_moitie_capital', $data) && null !== $data['actif_net_inferieur_moitie_capital']) {
            $object->setActifNetInferieurMoitieCapital($this->denormalizer->denormalize($data['actif_net_inferieur_moitie_capital'], EntrepriseFicheActifNetInferieurMoitieCapital::class, 'json', $context));
            unset($data['actif_net_inferieur_moitie_capital']);
        } elseif (\array_key_exists('actif_net_inferieur_moitie_capital', $data) && null === $data['actif_net_inferieur_moitie_capital']) {
            $object->setActifNetInferieurMoitieCapital(null);
            unset($data['actif_net_inferieur_moitie_capital']);
        }
        if (\array_key_exists('numero_rcs', $data) && null !== $data['numero_rcs']) {
            $object->setNumeroRcs($data['numero_rcs']);
            unset($data['numero_rcs']);
        } elseif (\array_key_exists('numero_rcs', $data) && null === $data['numero_rcs']) {
            $object->setNumeroRcs(null);
            unset($data['numero_rcs']);
        }
        if (\array_key_exists('date_cloture_exercice', $data) && null !== $data['date_cloture_exercice']) {
            $object->setDateClotureExercice($data['date_cloture_exercice']);
            unset($data['date_cloture_exercice']);
        } elseif (\array_key_exists('date_cloture_exercice', $data) && null === $data['date_cloture_exercice']) {
            $object->setDateClotureExercice(null);
            unset($data['date_cloture_exercice']);
        }
        if (\array_key_exists('date_cloture_exercice_exceptionnelle', $data) && null !== $data['date_cloture_exercice_exceptionnelle']) {
            $object->setDateClotureExerciceExceptionnelle($data['date_cloture_exercice_exceptionnelle']);
            unset($data['date_cloture_exercice_exceptionnelle']);
        } elseif (\array_key_exists('date_cloture_exercice_exceptionnelle', $data) && null === $data['date_cloture_exercice_exceptionnelle']) {
            $object->setDateClotureExerciceExceptionnelle(null);
            unset($data['date_cloture_exercice_exceptionnelle']);
        }
        if (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data) && null !== $data['date_cloture_exercice_exceptionnelle_formate']) {
            $object->setDateClotureExerciceExceptionnelleFormate($data['date_cloture_exercice_exceptionnelle_formate']);
            unset($data['date_cloture_exercice_exceptionnelle_formate']);
        } elseif (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data) && null === $data['date_cloture_exercice_exceptionnelle_formate']) {
            $object->setDateClotureExerciceExceptionnelleFormate(null);
            unset($data['date_cloture_exercice_exceptionnelle_formate']);
        }
        if (\array_key_exists('prochaine_date_cloture_exercice', $data) && null !== $data['prochaine_date_cloture_exercice']) {
            $object->setProchaineDateClotureExercice($data['prochaine_date_cloture_exercice']);
            unset($data['prochaine_date_cloture_exercice']);
        } elseif (\array_key_exists('prochaine_date_cloture_exercice', $data) && null === $data['prochaine_date_cloture_exercice']) {
            $object->setProchaineDateClotureExercice(null);
            unset($data['prochaine_date_cloture_exercice']);
        }
        if (\array_key_exists('prochaine_date_cloture_exercice_formate', $data) && null !== $data['prochaine_date_cloture_exercice_formate']) {
            $object->setProchaineDateClotureExerciceFormate($data['prochaine_date_cloture_exercice_formate']);
            unset($data['prochaine_date_cloture_exercice_formate']);
        } elseif (\array_key_exists('prochaine_date_cloture_exercice_formate', $data) && null === $data['prochaine_date_cloture_exercice_formate']) {
            $object->setProchaineDateClotureExerciceFormate(null);
            unset($data['prochaine_date_cloture_exercice_formate']);
        }
        if (\array_key_exists('economie_sociale_solidaire', $data) && null !== $data['economie_sociale_solidaire']) {
            $object->setEconomieSocialeSolidaire($data['economie_sociale_solidaire']);
            unset($data['economie_sociale_solidaire']);
        } elseif (\array_key_exists('economie_sociale_solidaire', $data) && null === $data['economie_sociale_solidaire']) {
            $object->setEconomieSocialeSolidaire(null);
            unset($data['economie_sociale_solidaire']);
        }
        if (\array_key_exists('duree_personne_morale', $data) && null !== $data['duree_personne_morale']) {
            $object->setDureePersonneMorale($data['duree_personne_morale']);
            unset($data['duree_personne_morale']);
        } elseif (\array_key_exists('duree_personne_morale', $data) && null === $data['duree_personne_morale']) {
            $object->setDureePersonneMorale(null);
            unset($data['duree_personne_morale']);
        }
        if (\array_key_exists('dernier_traitement', $data) && null !== $data['dernier_traitement']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['dernier_traitement']);
            if (false === $date) {
                throw new InvalidDateException($data['dernier_traitement'], 'Y-m-d');
            }
            $object->setDernierTraitement($date->setTime(0, 0, 0));
            unset($data['dernier_traitement']);
        } elseif (\array_key_exists('dernier_traitement', $data) && null === $data['dernier_traitement']) {
            $object->setDernierTraitement(null);
            unset($data['dernier_traitement']);
        }
        if (\array_key_exists('derniere_mise_a_jour_sirene', $data) && null !== $data['derniere_mise_a_jour_sirene']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_sirene']);
            if (false === $date_1) {
                throw new InvalidDateException($data['derniere_mise_a_jour_sirene'], 'Y-m-d');
            }
            $object->setDerniereMiseAJourSirene($date_1->setTime(0, 0, 0));
            unset($data['derniere_mise_a_jour_sirene']);
        } elseif (\array_key_exists('derniere_mise_a_jour_sirene', $data) && null === $data['derniere_mise_a_jour_sirene']) {
            $object->setDerniereMiseAJourSirene(null);
            unset($data['derniere_mise_a_jour_sirene']);
        }
        if (\array_key_exists('derniere_mise_a_jour_rcs', $data) && null !== $data['derniere_mise_a_jour_rcs']) {
            $date_2 = \DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_rcs']);
            if (false === $date_2) {
                throw new InvalidDateException($data['derniere_mise_a_jour_rcs'], 'Y-m-d');
            }
            $object->setDerniereMiseAJourRcs($date_2->setTime(0, 0, 0));
            unset($data['derniere_mise_a_jour_rcs']);
        } elseif (\array_key_exists('derniere_mise_a_jour_rcs', $data) && null === $data['derniere_mise_a_jour_rcs']) {
            $object->setDerniereMiseAJourRcs(null);
            unset($data['derniere_mise_a_jour_rcs']);
        }
        if (\array_key_exists('statut_consolide', $data) && null !== $data['statut_consolide']) {
            $object->setStatutConsolide($data['statut_consolide']);
            unset($data['statut_consolide']);
        } elseif (\array_key_exists('statut_consolide', $data) && null === $data['statut_consolide']) {
            $object->setStatutConsolide(null);
            unset($data['statut_consolide']);
        }
        if (\array_key_exists('date_reouverture', $data) && null !== $data['date_reouverture']) {
            $date_3 = \DateTime::createFromFormat('Y-m-d', $data['date_reouverture']);
            if (false === $date_3) {
                throw new InvalidDateException($data['date_reouverture'], 'Y-m-d');
            }
            $object->setDateReouverture($date_3->setTime(0, 0, 0));
            unset($data['date_reouverture']);
        } elseif (\array_key_exists('date_reouverture', $data) && null === $data['date_reouverture']) {
            $object->setDateReouverture(null);
            unset($data['date_reouverture']);
        }
        if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
            $object->setGreffe(null);
            unset($data['greffe']);
        }
        if (\array_key_exists('code_greffe', $data) && null !== $data['code_greffe']) {
            $object->setCodeGreffe($data['code_greffe']);
            unset($data['code_greffe']);
        } elseif (\array_key_exists('code_greffe', $data) && null === $data['code_greffe']) {
            $object->setCodeGreffe(null);
            unset($data['code_greffe']);
        }
        if (\array_key_exists('date_immatriculation_rcs', $data) && null !== $data['date_immatriculation_rcs']) {
            $object->setDateImmatriculationRcs($data['date_immatriculation_rcs']);
            unset($data['date_immatriculation_rcs']);
        } elseif (\array_key_exists('date_immatriculation_rcs', $data) && null === $data['date_immatriculation_rcs']) {
            $object->setDateImmatriculationRcs(null);
            unset($data['date_immatriculation_rcs']);
        }
        if (\array_key_exists('date_premiere_immatriculation_rcs', $data) && null !== $data['date_premiere_immatriculation_rcs']) {
            $object->setDatePremiereImmatriculationRcs($data['date_premiere_immatriculation_rcs']);
            unset($data['date_premiere_immatriculation_rcs']);
        } elseif (\array_key_exists('date_premiere_immatriculation_rcs', $data) && null === $data['date_premiere_immatriculation_rcs']) {
            $object->setDatePremiereImmatriculationRcs(null);
            unset($data['date_premiere_immatriculation_rcs']);
        }
        if (\array_key_exists('date_debut_activite', $data) && null !== $data['date_debut_activite']) {
            $object->setDateDebutActivite($data['date_debut_activite']);
            unset($data['date_debut_activite']);
        } elseif (\array_key_exists('date_debut_activite', $data) && null === $data['date_debut_activite']) {
            $object->setDateDebutActivite(null);
            unset($data['date_debut_activite']);
        }
        if (\array_key_exists('date_debut_premiere_activite', $data) && null !== $data['date_debut_premiere_activite']) {
            $object->setDateDebutPremiereActivite($data['date_debut_premiere_activite']);
            unset($data['date_debut_premiere_activite']);
        } elseif (\array_key_exists('date_debut_premiere_activite', $data) && null === $data['date_debut_premiere_activite']) {
            $object->setDateDebutPremiereActivite(null);
            unset($data['date_debut_premiere_activite']);
        }
        if (\array_key_exists('date_radiation_rcs', $data) && null !== $data['date_radiation_rcs']) {
            $object->setDateRadiationRcs($data['date_radiation_rcs']);
            unset($data['date_radiation_rcs']);
        } elseif (\array_key_exists('date_radiation_rcs', $data) && null === $data['date_radiation_rcs']) {
            $object->setDateRadiationRcs(null);
            unset($data['date_radiation_rcs']);
        }
        if (\array_key_exists('statut_rne', $data) && null !== $data['statut_rne']) {
            $object->setStatutRne($data['statut_rne']);
            unset($data['statut_rne']);
        } elseif (\array_key_exists('statut_rne', $data) && null === $data['statut_rne']) {
            $object->setStatutRne(null);
            unset($data['statut_rne']);
        }
        if (\array_key_exists('date_immatriculation_rne', $data) && null !== $data['date_immatriculation_rne']) {
            $object->setDateImmatriculationRne($data['date_immatriculation_rne']);
            unset($data['date_immatriculation_rne']);
        } elseif (\array_key_exists('date_immatriculation_rne', $data) && null === $data['date_immatriculation_rne']) {
            $object->setDateImmatriculationRne(null);
            unset($data['date_immatriculation_rne']);
        }
        if (\array_key_exists('date_radiation_rne', $data) && null !== $data['date_radiation_rne']) {
            $object->setDateRadiationRne($data['date_radiation_rne']);
            unset($data['date_radiation_rne']);
        } elseif (\array_key_exists('date_radiation_rne', $data) && null === $data['date_radiation_rne']) {
            $object->setDateRadiationRne(null);
            unset($data['date_radiation_rne']);
        }
        if (\array_key_exists('numero_tva_intracommunautaire', $data) && null !== $data['numero_tva_intracommunautaire']) {
            $object->setNumeroTvaIntracommunautaire($data['numero_tva_intracommunautaire']);
            unset($data['numero_tva_intracommunautaire']);
        } elseif (\array_key_exists('numero_tva_intracommunautaire', $data) && null === $data['numero_tva_intracommunautaire']) {
            $object->setNumeroTvaIntracommunautaire(null);
            unset($data['numero_tva_intracommunautaire']);
        }
        if (\array_key_exists('validite_tva_intracommunautaire', $data) && null !== $data['validite_tva_intracommunautaire']) {
            $object->setValiditeTvaIntracommunautaire($data['validite_tva_intracommunautaire']);
            unset($data['validite_tva_intracommunautaire']);
        } elseif (\array_key_exists('validite_tva_intracommunautaire', $data) && null === $data['validite_tva_intracommunautaire']) {
            $object->setValiditeTvaIntracommunautaire(null);
            unset($data['validite_tva_intracommunautaire']);
        }
        if (\array_key_exists('associe_unique', $data) && null !== $data['associe_unique']) {
            $object->setAssocieUnique($data['associe_unique']);
            unset($data['associe_unique']);
        } elseif (\array_key_exists('associe_unique', $data) && null === $data['associe_unique']) {
            $object->setAssocieUnique(null);
            unset($data['associe_unique']);
        }
        if (\array_key_exists('etablissements', $data) && null !== $data['etablissements']) {
            $values_1 = [];
            foreach ($data['etablissements'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, EtablissementFiche::class, 'json', $context);
            }
            $object->setEtablissements($values_1);
            unset($data['etablissements']);
        } elseif (\array_key_exists('etablissements', $data) && null === $data['etablissements']) {
            $object->setEtablissements(null);
            unset($data['etablissements']);
        }
        if (\array_key_exists('etablissement', $data) && null !== $data['etablissement']) {
            $object->setEtablissement($this->denormalizer->denormalize($data['etablissement'], EntrepriseFicheEtablissement::class, 'json', $context));
            unset($data['etablissement']);
        } elseif (\array_key_exists('etablissement', $data) && null === $data['etablissement']) {
            $object->setEtablissement(null);
            unset($data['etablissement']);
        }
        if (\array_key_exists('finances', $data) && null !== $data['finances']) {
            $values_2 = [];
            foreach ($data['finances'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseFicheFinancesItem::class, 'json', $context);
            }
            $object->setFinances($values_2);
            unset($data['finances']);
        } elseif (\array_key_exists('finances', $data) && null === $data['finances']) {
            $object->setFinances(null);
            unset($data['finances']);
        }
        if (\array_key_exists('finances_estimations', $data) && null !== $data['finances_estimations']) {
            $values_3 = [];
            foreach ($data['finances_estimations'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, EntrepriseFicheFinancesEstimationsItem::class, 'json', $context);
            }
            $object->setFinancesEstimations($values_3);
            unset($data['finances_estimations']);
        } elseif (\array_key_exists('finances_estimations', $data) && null === $data['finances_estimations']) {
            $object->setFinancesEstimations(null);
            unset($data['finances_estimations']);
        }
        if (\array_key_exists('representants', $data) && null !== $data['representants']) {
            $values_4 = [];
            foreach ($data['representants'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, RepresentantEntreprise::class, 'json', $context);
            }
            $object->setRepresentants($values_4);
            unset($data['representants']);
        } elseif (\array_key_exists('representants', $data) && null === $data['representants']) {
            $object->setRepresentants(null);
            unset($data['representants']);
        }
        if (\array_key_exists('beneficiaires_effectifs', $data) && null !== $data['beneficiaires_effectifs']) {
            $values_5 = [];
            foreach ($data['beneficiaires_effectifs'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, EntrepriseFicheBeneficiairesEffectifsItem::class, 'json', $context);
            }
            $object->setBeneficiairesEffectifs($values_5);
            unset($data['beneficiaires_effectifs']);
        } elseif (\array_key_exists('beneficiaires_effectifs', $data) && null === $data['beneficiaires_effectifs']) {
            $object->setBeneficiairesEffectifs(null);
            unset($data['beneficiaires_effectifs']);
        }
        if (\array_key_exists('depots_actes', $data) && null !== $data['depots_actes']) {
            $values_6 = [];
            foreach ($data['depots_actes'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, EntrepriseFicheDepotsActesItem::class, 'json', $context);
            }
            $object->setDepotsActes($values_6);
            unset($data['depots_actes']);
        } elseif (\array_key_exists('depots_actes', $data) && null === $data['depots_actes']) {
            $object->setDepotsActes(null);
            unset($data['depots_actes']);
        }
        if (\array_key_exists('comptes', $data) && null !== $data['comptes']) {
            $values_7 = [];
            foreach ($data['comptes'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, EntrepriseFicheComptesItem::class, 'json', $context);
            }
            $object->setComptes($values_7);
            unset($data['comptes']);
        } elseif (\array_key_exists('comptes', $data) && null === $data['comptes']) {
            $object->setComptes(null);
            unset($data['comptes']);
        }
        if (\array_key_exists('publications_bodacc', $data) && null !== $data['publications_bodacc']) {
            $values_8 = [];
            foreach ($data['publications_bodacc'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, Bodacc::class, 'json', $context);
            }
            $object->setPublicationsBodacc($values_8);
            unset($data['publications_bodacc']);
        } elseif (\array_key_exists('publications_bodacc', $data) && null === $data['publications_bodacc']) {
            $object->setPublicationsBodacc(null);
            unset($data['publications_bodacc']);
        }
        if (\array_key_exists('procedures_collectives', $data) && null !== $data['procedures_collectives']) {
            $values_9 = [];
            foreach ($data['procedures_collectives'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, EntrepriseFicheProceduresCollectivesItem::class, 'json', $context);
            }
            $object->setProceduresCollectives($values_9);
            unset($data['procedures_collectives']);
        } elseif (\array_key_exists('procedures_collectives', $data) && null === $data['procedures_collectives']) {
            $object->setProceduresCollectives(null);
            unset($data['procedures_collectives']);
        }
        if (\array_key_exists('procedure_collective_existe', $data) && null !== $data['procedure_collective_existe']) {
            $object->setProcedureCollectiveExiste($data['procedure_collective_existe']);
            unset($data['procedure_collective_existe']);
        } elseif (\array_key_exists('procedure_collective_existe', $data) && null === $data['procedure_collective_existe']) {
            $object->setProcedureCollectiveExiste(null);
            unset($data['procedure_collective_existe']);
        }
        if (\array_key_exists('procedure_collective_en_cours', $data) && null !== $data['procedure_collective_en_cours']) {
            $object->setProcedureCollectiveEnCours($data['procedure_collective_en_cours']);
            unset($data['procedure_collective_en_cours']);
        } elseif (\array_key_exists('procedure_collective_en_cours', $data) && null === $data['procedure_collective_en_cours']) {
            $object->setProcedureCollectiveEnCours(null);
            unset($data['procedure_collective_en_cours']);
        }
        if (\array_key_exists('derniers_statuts', $data) && null !== $data['derniers_statuts']) {
            $object->setDerniersStatuts($this->denormalizer->denormalize($data['derniers_statuts'], EntrepriseFicheDerniersStatuts::class, 'json', $context));
            unset($data['derniers_statuts']);
        } elseif (\array_key_exists('derniers_statuts', $data) && null === $data['derniers_statuts']) {
            $object->setDerniersStatuts(null);
            unset($data['derniers_statuts']);
        }
        if (\array_key_exists('extrait_immatriculation', $data) && null !== $data['extrait_immatriculation']) {
            $object->setExtraitImmatriculation($this->denormalizer->denormalize($data['extrait_immatriculation'], EntrepriseFicheExtraitImmatriculation::class, 'json', $context));
            unset($data['extrait_immatriculation']);
        } elseif (\array_key_exists('extrait_immatriculation', $data) && null === $data['extrait_immatriculation']) {
            $object->setExtraitImmatriculation(null);
            unset($data['extrait_immatriculation']);
        }
        if (\array_key_exists('rnm', $data) && null !== $data['rnm']) {
            $object->setRnm($this->denormalizer->denormalize($data['rnm'], EntrepriseFicheRnm::class, 'json', $context));
            unset($data['rnm']);
        } elseif (\array_key_exists('rnm', $data) && null === $data['rnm']) {
            $object->setRnm(null);
            unset($data['rnm']);
        }
        if (\array_key_exists('marques', $data) && null !== $data['marques']) {
            $values_10 = [];
            foreach ($data['marques'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, EntrepriseFicheMarquesItem::class, 'json', $context);
            }
            $object->setMarques($values_10);
            unset($data['marques']);
        } elseif (\array_key_exists('marques', $data) && null === $data['marques']) {
            $object->setMarques(null);
            unset($data['marques']);
        }
        if (\array_key_exists('association', $data) && null !== $data['association']) {
            $object->setAssociation($this->denormalizer->denormalize($data['association'], Association::class, 'json', $context));
            unset($data['association']);
        } elseif (\array_key_exists('association', $data) && null === $data['association']) {
            $object->setAssociation(null);
            unset($data['association']);
        }
        if (\array_key_exists('labels', $data) && null !== $data['labels']) {
            $values_11 = [];
            foreach ($data['labels'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, Labels::class, 'json', $context);
            }
            $object->setLabels($values_11);
            unset($data['labels']);
        } elseif (\array_key_exists('labels', $data) && null === $data['labels']) {
            $object->setLabels(null);
            unset($data['labels']);
        }
        if (\array_key_exists('sites_internet', $data) && null !== $data['sites_internet']) {
            $values_12 = [];
            foreach ($data['sites_internet'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setSitesInternet($values_12);
            unset($data['sites_internet']);
        } elseif (\array_key_exists('sites_internet', $data) && null === $data['sites_internet']) {
            $object->setSitesInternet(null);
            unset($data['sites_internet']);
        }
        if (\array_key_exists('telephone', $data) && null !== $data['telephone']) {
            $object->setTelephone($data['telephone']);
            unset($data['telephone']);
        } elseif (\array_key_exists('telephone', $data) && null === $data['telephone']) {
            $object->setTelephone(null);
            unset($data['telephone']);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
            unset($data['email']);
        }
        if (\array_key_exists('scoring_non_financier', $data) && null !== $data['scoring_non_financier']) {
            $object->setScoringNonFinancier($this->denormalizer->denormalize($data['scoring_non_financier'], ScoringNonFinancier::class, 'json', $context));
            unset($data['scoring_non_financier']);
        } elseif (\array_key_exists('scoring_non_financier', $data) && null === $data['scoring_non_financier']) {
            $object->setScoringNonFinancier(null);
            unset($data['scoring_non_financier']);
        }
        if (\array_key_exists('scoring_financier', $data) && null !== $data['scoring_financier']) {
            $object->setScoringFinancier($this->denormalizer->denormalize($data['scoring_financier'], ScoringFinancier::class, 'json', $context));
            unset($data['scoring_financier']);
        } elseif (\array_key_exists('scoring_financier', $data) && null === $data['scoring_financier']) {
            $object->setScoringFinancier(null);
            unset($data['scoring_financier']);
        }
        if (\array_key_exists('categorie_entreprise', $data) && null !== $data['categorie_entreprise']) {
            $object->setCategorieEntreprise($data['categorie_entreprise']);
            unset($data['categorie_entreprise']);
        } elseif (\array_key_exists('categorie_entreprise', $data) && null === $data['categorie_entreprise']) {
            $object->setCategorieEntreprise(null);
            unset($data['categorie_entreprise']);
        }
        if (\array_key_exists('annee_categorie_entreprise', $data) && null !== $data['annee_categorie_entreprise']) {
            $object->setAnneeCategorieEntreprise($data['annee_categorie_entreprise']);
            unset($data['annee_categorie_entreprise']);
        } elseif (\array_key_exists('annee_categorie_entreprise', $data) && null === $data['annee_categorie_entreprise']) {
            $object->setAnneeCategorieEntreprise(null);
            unset($data['annee_categorie_entreprise']);
        }
        if (\array_key_exists('motif_cessation', $data) && null !== $data['motif_cessation']) {
            $object->setMotifCessation($data['motif_cessation']);
            unset($data['motif_cessation']);
        } elseif (\array_key_exists('motif_cessation', $data) && null === $data['motif_cessation']) {
            $object->setMotifCessation(null);
            unset($data['motif_cessation']);
        }
        if (\array_key_exists('nom_usage', $data) && null !== $data['nom_usage']) {
            $object->setNomUsage($data['nom_usage']);
            unset($data['nom_usage']);
        } elseif (\array_key_exists('nom_usage', $data) && null === $data['nom_usage']) {
            $object->setNomUsage(null);
            unset($data['nom_usage']);
        }
        if (\array_key_exists('nom_patronymique', $data) && null !== $data['nom_patronymique']) {
            $object->setNomPatronymique($data['nom_patronymique']);
            unset($data['nom_patronymique']);
        } elseif (\array_key_exists('nom_patronymique', $data) && null === $data['nom_patronymique']) {
            $object->setNomPatronymique(null);
            unset($data['nom_patronymique']);
        }
        if (\array_key_exists('representants_legaux', $data) && null !== $data['representants_legaux']) {
            $values_13 = [];
            foreach ($data['representants_legaux'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, RepresentantEntreprise::class, 'json', $context);
            }
            $object->setRepresentantsLegaux($values_13);
            unset($data['representants_legaux']);
        } elseif (\array_key_exists('representants_legaux', $data) && null === $data['representants_legaux']) {
            $object->setRepresentantsLegaux(null);
            unset($data['representants_legaux']);
        }
        if (\array_key_exists('entreprises_dirigees', $data) && null !== $data['entreprises_dirigees']) {
            $values_14 = [];
            foreach ($data['entreprises_dirigees'] as $value_14) {
                $values_14[] = $this->denormalizer->denormalize($value_14, EntrepriseFicheEntreprisesDirigeesItem::class, 'json', $context);
            }
            $object->setEntreprisesDirigees($values_14);
            unset($data['entreprises_dirigees']);
        } elseif (\array_key_exists('entreprises_dirigees', $data) && null === $data['entreprises_dirigees']) {
            $object->setEntreprisesDirigees(null);
            unset($data['entreprises_dirigees']);
        }
        if (\array_key_exists('observations', $data) && null !== $data['observations']) {
            $values_15 = [];
            foreach ($data['observations'] as $value_15) {
                $values_15[] = $this->denormalizer->denormalize($value_15, EntrepriseFicheObservationsItem::class, 'json', $context);
            }
            $object->setObservations($values_15);
            unset($data['observations']);
        } elseif (\array_key_exists('observations', $data) && null === $data['observations']) {
            $object->setObservations(null);
            unset($data['observations']);
        }
        if (\array_key_exists('decisions', $data) && null !== $data['decisions']) {
            $values_16 = [];
            foreach ($data['decisions'] as $value_16) {
                $values_16[] = $this->denormalizer->denormalize($value_16, Decisions::class, 'json', $context);
            }
            $object->setDecisions($values_16);
            unset($data['decisions']);
        } elseif (\array_key_exists('decisions', $data) && null === $data['decisions']) {
            $object->setDecisions(null);
            unset($data['decisions']);
        }
        if (\array_key_exists('parcelles_detenues', $data) && null !== $data['parcelles_detenues']) {
            $object->setParcellesDetenues($this->denormalizer->denormalize($data['parcelles_detenues'], EntrepriseFicheParcellesDetenues::class, 'json', $context));
            unset($data['parcelles_detenues']);
        } elseif (\array_key_exists('parcelles_detenues', $data) && null === $data['parcelles_detenues']) {
            $object->setParcellesDetenues(null);
            unset($data['parcelles_detenues']);
        }
        if (\array_key_exists('appels_offres_gagnes', $data) && null !== $data['appels_offres_gagnes']) {
            $values_17 = [];
            foreach ($data['appels_offres_gagnes'] as $value_17) {
                $values_17[] = $this->denormalizer->denormalize($value_17, AppelOffreGagne::class, 'json', $context);
            }
            $object->setAppelsOffresGagnes($values_17);
            unset($data['appels_offres_gagnes']);
        } elseif (\array_key_exists('appels_offres_gagnes', $data) && null === $data['appels_offres_gagnes']) {
            $object->setAppelsOffresGagnes(null);
            unset($data['appels_offres_gagnes']);
        }
        if (\array_key_exists('appels_offres_lances', $data) && null !== $data['appels_offres_lances']) {
            $values_18 = [];
            foreach ($data['appels_offres_lances'] as $value_18) {
                $values_18[] = $this->denormalizer->denormalize($value_18, AppelOffreLance::class, 'json', $context);
            }
            $object->setAppelsOffresLances($values_18);
            unset($data['appels_offres_lances']);
        } elseif (\array_key_exists('appels_offres_lances', $data) && null === $data['appels_offres_lances']) {
            $object->setAppelsOffresLances(null);
            unset($data['appels_offres_lances']);
        }
        if (\array_key_exists('entreprises_citees', $data) && null !== $data['entreprises_citees']) {
            $values_19 = [];
            foreach ($data['entreprises_citees'] as $value_19) {
                $values_19[] = $this->denormalizer->denormalize($value_19, EntrepriseCitee::class, 'json', $context);
            }
            $object->setEntreprisesCitees($values_19);
            unset($data['entreprises_citees']);
        } elseif (\array_key_exists('entreprises_citees', $data) && null === $data['entreprises_citees']) {
            $object->setEntreprisesCitees(null);
            unset($data['entreprises_citees']);
        }
        if (\array_key_exists('entreprises_citees_total', $data) && null !== $data['entreprises_citees_total']) {
            $object->setEntreprisesCiteesTotal($data['entreprises_citees_total']);
            unset($data['entreprises_citees_total']);
        } elseif (\array_key_exists('entreprises_citees_total', $data) && null === $data['entreprises_citees_total']) {
            $object->setEntreprisesCiteesTotal(null);
            unset($data['entreprises_citees_total']);
        }
        if (\array_key_exists('entreprises_citees_incomplet', $data) && null !== $data['entreprises_citees_incomplet']) {
            $object->setEntreprisesCiteesIncomplet($data['entreprises_citees_incomplet']);
            unset($data['entreprises_citees_incomplet']);
        } elseif (\array_key_exists('entreprises_citees_incomplet', $data) && null === $data['entreprises_citees_incomplet']) {
            $object->setEntreprisesCiteesIncomplet(null);
            unset($data['entreprises_citees_incomplet']);
        }
        if (\array_key_exists('brevets', $data) && null !== $data['brevets']) {
            $values_20 = [];
            foreach ($data['brevets'] as $value_20) {
                $values_20[] = $this->denormalizer->denormalize($value_20, Brevet::class, 'json', $context);
            }
            $object->setBrevets($values_20);
            unset($data['brevets']);
        } elseif (\array_key_exists('brevets', $data) && null === $data['brevets']) {
            $object->setBrevets(null);
            unset($data['brevets']);
        }
        if (\array_key_exists('dessins', $data) && null !== $data['dessins']) {
            $values_21 = [];
            foreach ($data['dessins'] as $value_21) {
                $values_21[] = $this->denormalizer->denormalize($value_21, Dessin::class, 'json', $context);
            }
            $object->setDessins($values_21);
            unset($data['dessins']);
        } elseif (\array_key_exists('dessins', $data) && null === $data['dessins']) {
            $object->setDessins(null);
            unset($data['dessins']);
        }
        if (\array_key_exists('informations_boursieres', $data) && null !== $data['informations_boursieres']) {
            $object->setInformationsBoursieres($this->denormalizer->denormalize($data['informations_boursieres'], EntrepriseFicheInformationsBoursieres::class, 'json', $context));
            unset($data['informations_boursieres']);
        } elseif (\array_key_exists('informations_boursieres', $data) && null === $data['informations_boursieres']) {
            $object->setInformationsBoursieres(null);
            unset($data['informations_boursieres']);
        }
        foreach ($data as $key => $value_22) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_22;
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
                $values[] = null === $value ? null : new JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['conventions_collectives'] = $values;
        }
        if ($data->isInitialized('dateCreation') && null !== $data->getDateCreation()) {
            $dataArray['date_creation'] = $data->getDateCreation();
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
            $dataArray['siege'] = null === $data->getSiege() ? null : new JsonObject($this->normalizer->normalize($data->getSiege(), 'json', $context));
        }
        if ($data->isInitialized('lienPappers') && null !== $data->getLienPappers()) {
            $dataArray['lien_pappers'] = $data->getLienPappers();
        }
        if ($data->isInitialized('diffusable') && null !== $data->getDiffusable()) {
            $dataArray['diffusable'] = $data->getDiffusable();
        }
        if ($data->isInitialized('sigle') && null !== $data->getSigle()) {
            $dataArray['sigle'] = $data->getSigle();
        }
        if ($data->isInitialized('objetSocial') && null !== $data->getObjetSocial()) {
            $dataArray['objet_social'] = $data->getObjetSocial();
        }
        if ($data->isInitialized('capitalFormate') && null !== $data->getCapitalFormate()) {
            $dataArray['capital_formate'] = $data->getCapitalFormate();
        }
        if ($data->isInitialized('capitalActuelSiVariable') && null !== $data->getCapitalActuelSiVariable()) {
            $dataArray['capital_actuel_si_variable'] = $data->getCapitalActuelSiVariable();
        }
        if ($data->isInitialized('deviseCapital') && null !== $data->getDeviseCapital()) {
            $dataArray['devise_capital'] = $data->getDeviseCapital();
        }
        if ($data->isInitialized('actifNetInferieurMoitieCapital') && null !== $data->getActifNetInferieurMoitieCapital()) {
            $dataArray['actif_net_inferieur_moitie_capital'] = null === $data->getActifNetInferieurMoitieCapital() ? null : new JsonObject($this->normalizer->normalize($data->getActifNetInferieurMoitieCapital(), 'json', $context));
        }
        if ($data->isInitialized('numeroRcs') && null !== $data->getNumeroRcs()) {
            $dataArray['numero_rcs'] = $data->getNumeroRcs();
        }
        if ($data->isInitialized('dateClotureExercice') && null !== $data->getDateClotureExercice()) {
            $dataArray['date_cloture_exercice'] = $data->getDateClotureExercice();
        }
        if ($data->isInitialized('dateClotureExerciceExceptionnelle') && null !== $data->getDateClotureExerciceExceptionnelle()) {
            $dataArray['date_cloture_exercice_exceptionnelle'] = $data->getDateClotureExerciceExceptionnelle();
        }
        if ($data->isInitialized('dateClotureExerciceExceptionnelleFormate') && null !== $data->getDateClotureExerciceExceptionnelleFormate()) {
            $dataArray['date_cloture_exercice_exceptionnelle_formate'] = $data->getDateClotureExerciceExceptionnelleFormate();
        }
        if ($data->isInitialized('prochaineDateClotureExercice') && null !== $data->getProchaineDateClotureExercice()) {
            $dataArray['prochaine_date_cloture_exercice'] = $data->getProchaineDateClotureExercice();
        }
        if ($data->isInitialized('prochaineDateClotureExerciceFormate') && null !== $data->getProchaineDateClotureExerciceFormate()) {
            $dataArray['prochaine_date_cloture_exercice_formate'] = $data->getProchaineDateClotureExerciceFormate();
        }
        if ($data->isInitialized('economieSocialeSolidaire') && null !== $data->getEconomieSocialeSolidaire()) {
            $dataArray['economie_sociale_solidaire'] = $data->getEconomieSocialeSolidaire();
        }
        if ($data->isInitialized('dureePersonneMorale') && null !== $data->getDureePersonneMorale()) {
            $dataArray['duree_personne_morale'] = $data->getDureePersonneMorale();
        }
        if ($data->isInitialized('dernierTraitement') && null !== $data->getDernierTraitement()) {
            $dataArray['dernier_traitement'] = $data->getDernierTraitement()->format('Y-m-d');
        }
        if ($data->isInitialized('derniereMiseAJourSirene') && null !== $data->getDerniereMiseAJourSirene()) {
            $dataArray['derniere_mise_a_jour_sirene'] = $data->getDerniereMiseAJourSirene()->format('Y-m-d');
        }
        if ($data->isInitialized('derniereMiseAJourRcs') && null !== $data->getDerniereMiseAJourRcs()) {
            $dataArray['derniere_mise_a_jour_rcs'] = $data->getDerniereMiseAJourRcs()->format('Y-m-d');
        }
        if ($data->isInitialized('statutConsolide') && null !== $data->getStatutConsolide()) {
            $dataArray['statut_consolide'] = $data->getStatutConsolide();
        }
        if ($data->isInitialized('dateReouverture') && null !== $data->getDateReouverture()) {
            $dataArray['date_reouverture'] = $data->getDateReouverture()->format('Y-m-d');
        }
        if ($data->isInitialized('greffe') && null !== $data->getGreffe()) {
            $dataArray['greffe'] = $data->getGreffe();
        }
        if ($data->isInitialized('codeGreffe') && null !== $data->getCodeGreffe()) {
            $dataArray['code_greffe'] = $data->getCodeGreffe();
        }
        if ($data->isInitialized('dateImmatriculationRcs') && null !== $data->getDateImmatriculationRcs()) {
            $dataArray['date_immatriculation_rcs'] = $data->getDateImmatriculationRcs();
        }
        if ($data->isInitialized('datePremiereImmatriculationRcs') && null !== $data->getDatePremiereImmatriculationRcs()) {
            $dataArray['date_premiere_immatriculation_rcs'] = $data->getDatePremiereImmatriculationRcs();
        }
        if ($data->isInitialized('dateDebutActivite') && null !== $data->getDateDebutActivite()) {
            $dataArray['date_debut_activite'] = $data->getDateDebutActivite();
        }
        if ($data->isInitialized('dateDebutPremiereActivite') && null !== $data->getDateDebutPremiereActivite()) {
            $dataArray['date_debut_premiere_activite'] = $data->getDateDebutPremiereActivite();
        }
        if ($data->isInitialized('dateRadiationRcs') && null !== $data->getDateRadiationRcs()) {
            $dataArray['date_radiation_rcs'] = $data->getDateRadiationRcs();
        }
        if ($data->isInitialized('statutRne') && null !== $data->getStatutRne()) {
            $dataArray['statut_rne'] = $data->getStatutRne();
        }
        if ($data->isInitialized('dateImmatriculationRne') && null !== $data->getDateImmatriculationRne()) {
            $dataArray['date_immatriculation_rne'] = $data->getDateImmatriculationRne();
        }
        if ($data->isInitialized('dateRadiationRne') && null !== $data->getDateRadiationRne()) {
            $dataArray['date_radiation_rne'] = $data->getDateRadiationRne();
        }
        if ($data->isInitialized('numeroTvaIntracommunautaire') && null !== $data->getNumeroTvaIntracommunautaire()) {
            $dataArray['numero_tva_intracommunautaire'] = $data->getNumeroTvaIntracommunautaire();
        }
        if ($data->isInitialized('validiteTvaIntracommunautaire') && null !== $data->getValiditeTvaIntracommunautaire()) {
            $dataArray['validite_tva_intracommunautaire'] = $data->getValiditeTvaIntracommunautaire();
        }
        if ($data->isInitialized('associeUnique') && null !== $data->getAssocieUnique()) {
            $dataArray['associe_unique'] = $data->getAssocieUnique();
        }
        if ($data->isInitialized('etablissements') && null !== $data->getEtablissements()) {
            $values_1 = [];
            foreach ($data->getEtablissements() as $value_1) {
                $values_1[] = null === $value_1 ? null : new JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['etablissements'] = $values_1;
        }
        if ($data->isInitialized('etablissement') && null !== $data->getEtablissement()) {
            $dataArray['etablissement'] = null === $data->getEtablissement() ? null : new JsonObject($this->normalizer->normalize($data->getEtablissement(), 'json', $context));
        }
        if ($data->isInitialized('finances') && null !== $data->getFinances()) {
            $values_2 = [];
            foreach ($data->getFinances() as $value_2) {
                $values_2[] = null === $value_2 ? null : new JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['finances'] = $values_2;
        }
        if ($data->isInitialized('financesEstimations') && null !== $data->getFinancesEstimations()) {
            $values_3 = [];
            foreach ($data->getFinancesEstimations() as $value_3) {
                $values_3[] = null === $value_3 ? null : new JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['finances_estimations'] = $values_3;
        }
        if ($data->isInitialized('representants') && null !== $data->getRepresentants()) {
            $values_4 = [];
            foreach ($data->getRepresentants() as $value_4) {
                $values_4[] = null === $value_4 ? null : new JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['representants'] = $values_4;
        }
        if ($data->isInitialized('beneficiairesEffectifs') && null !== $data->getBeneficiairesEffectifs()) {
            $values_5 = [];
            foreach ($data->getBeneficiairesEffectifs() as $value_5) {
                $values_5[] = null === $value_5 ? null : new JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['beneficiaires_effectifs'] = $values_5;
        }
        if ($data->isInitialized('depotsActes') && null !== $data->getDepotsActes()) {
            $values_6 = [];
            foreach ($data->getDepotsActes() as $value_6) {
                $values_6[] = null === $value_6 ? null : new JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['depots_actes'] = $values_6;
        }
        if ($data->isInitialized('comptes') && null !== $data->getComptes()) {
            $values_7 = [];
            foreach ($data->getComptes() as $value_7) {
                $values_7[] = null === $value_7 ? null : new JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['comptes'] = $values_7;
        }
        if ($data->isInitialized('publicationsBodacc') && null !== $data->getPublicationsBodacc()) {
            $values_8 = [];
            foreach ($data->getPublicationsBodacc() as $value_8) {
                $values_8[] = null === $value_8 ? null : new JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['publications_bodacc'] = $values_8;
        }
        if ($data->isInitialized('proceduresCollectives') && null !== $data->getProceduresCollectives()) {
            $values_9 = [];
            foreach ($data->getProceduresCollectives() as $value_9) {
                $values_9[] = null === $value_9 ? null : new JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['procedures_collectives'] = $values_9;
        }
        if ($data->isInitialized('procedureCollectiveExiste') && null !== $data->getProcedureCollectiveExiste()) {
            $dataArray['procedure_collective_existe'] = $data->getProcedureCollectiveExiste();
        }
        if ($data->isInitialized('procedureCollectiveEnCours') && null !== $data->getProcedureCollectiveEnCours()) {
            $dataArray['procedure_collective_en_cours'] = $data->getProcedureCollectiveEnCours();
        }
        if ($data->isInitialized('derniersStatuts') && null !== $data->getDerniersStatuts()) {
            $dataArray['derniers_statuts'] = null === $data->getDerniersStatuts() ? null : new JsonObject($this->normalizer->normalize($data->getDerniersStatuts(), 'json', $context));
        }
        if ($data->isInitialized('extraitImmatriculation') && null !== $data->getExtraitImmatriculation()) {
            $dataArray['extrait_immatriculation'] = null === $data->getExtraitImmatriculation() ? null : new JsonObject($this->normalizer->normalize($data->getExtraitImmatriculation(), 'json', $context));
        }
        if ($data->isInitialized('rnm') && null !== $data->getRnm()) {
            $dataArray['rnm'] = null === $data->getRnm() ? null : new JsonObject($this->normalizer->normalize($data->getRnm(), 'json', $context));
        }
        if ($data->isInitialized('marques') && null !== $data->getMarques()) {
            $values_10 = [];
            foreach ($data->getMarques() as $value_10) {
                $values_10[] = null === $value_10 ? null : new JsonObject($this->normalizer->normalize($value_10, 'json', $context));
            }
            $dataArray['marques'] = $values_10;
        }
        if ($data->isInitialized('association') && null !== $data->getAssociation()) {
            $dataArray['association'] = null === $data->getAssociation() ? null : new JsonObject($this->normalizer->normalize($data->getAssociation(), 'json', $context));
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_11 = [];
            foreach ($data->getLabels() as $value_11) {
                $values_11[] = null === $value_11 ? null : new JsonObject($this->normalizer->normalize($value_11, 'json', $context));
            }
            $dataArray['labels'] = $values_11;
        }
        if ($data->isInitialized('sitesInternet') && null !== $data->getSitesInternet()) {
            $values_12 = [];
            foreach ($data->getSitesInternet() as $value_12) {
                $values_12[] = $value_12;
            }
            $dataArray['sites_internet'] = $values_12;
        }
        if ($data->isInitialized('telephone') && null !== $data->getTelephone()) {
            $dataArray['telephone'] = $data->getTelephone();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('scoringNonFinancier') && null !== $data->getScoringNonFinancier()) {
            $dataArray['scoring_non_financier'] = null === $data->getScoringNonFinancier() ? null : new JsonObject($this->normalizer->normalize($data->getScoringNonFinancier(), 'json', $context));
        }
        if ($data->isInitialized('scoringFinancier') && null !== $data->getScoringFinancier()) {
            $dataArray['scoring_financier'] = null === $data->getScoringFinancier() ? null : new JsonObject($this->normalizer->normalize($data->getScoringFinancier(), 'json', $context));
        }
        if ($data->isInitialized('categorieEntreprise') && null !== $data->getCategorieEntreprise()) {
            $dataArray['categorie_entreprise'] = $data->getCategorieEntreprise();
        }
        if ($data->isInitialized('anneeCategorieEntreprise') && null !== $data->getAnneeCategorieEntreprise()) {
            $dataArray['annee_categorie_entreprise'] = $data->getAnneeCategorieEntreprise();
        }
        if ($data->isInitialized('motifCessation') && null !== $data->getMotifCessation()) {
            $dataArray['motif_cessation'] = $data->getMotifCessation();
        }
        if ($data->isInitialized('nomUsage') && null !== $data->getNomUsage()) {
            $dataArray['nom_usage'] = $data->getNomUsage();
        }
        if ($data->isInitialized('nomPatronymique') && null !== $data->getNomPatronymique()) {
            $dataArray['nom_patronymique'] = $data->getNomPatronymique();
        }
        if ($data->isInitialized('representantsLegaux') && null !== $data->getRepresentantsLegaux()) {
            $values_13 = [];
            foreach ($data->getRepresentantsLegaux() as $value_13) {
                $values_13[] = null === $value_13 ? null : new JsonObject($this->normalizer->normalize($value_13, 'json', $context));
            }
            $dataArray['representants_legaux'] = $values_13;
        }
        if ($data->isInitialized('entreprisesDirigees') && null !== $data->getEntreprisesDirigees()) {
            $values_14 = [];
            foreach ($data->getEntreprisesDirigees() as $value_14) {
                $values_14[] = null === $value_14 ? null : new JsonObject($this->normalizer->normalize($value_14, 'json', $context));
            }
            $dataArray['entreprises_dirigees'] = $values_14;
        }
        if ($data->isInitialized('observations') && null !== $data->getObservations()) {
            $values_15 = [];
            foreach ($data->getObservations() as $value_15) {
                $values_15[] = null === $value_15 ? null : new JsonObject($this->normalizer->normalize($value_15, 'json', $context));
            }
            $dataArray['observations'] = $values_15;
        }
        if ($data->isInitialized('decisions') && null !== $data->getDecisions()) {
            $values_16 = [];
            foreach ($data->getDecisions() as $value_16) {
                $values_16[] = null === $value_16 ? null : new JsonObject($this->normalizer->normalize($value_16, 'json', $context));
            }
            $dataArray['decisions'] = $values_16;
        }
        if ($data->isInitialized('parcellesDetenues') && null !== $data->getParcellesDetenues()) {
            $dataArray['parcelles_detenues'] = null === $data->getParcellesDetenues() ? null : new JsonObject($this->normalizer->normalize($data->getParcellesDetenues(), 'json', $context));
        }
        if ($data->isInitialized('appelsOffresGagnes') && null !== $data->getAppelsOffresGagnes()) {
            $values_17 = [];
            foreach ($data->getAppelsOffresGagnes() as $value_17) {
                $values_17[] = null === $value_17 ? null : new JsonObject($this->normalizer->normalize($value_17, 'json', $context));
            }
            $dataArray['appels_offres_gagnes'] = $values_17;
        }
        if ($data->isInitialized('appelsOffresLances') && null !== $data->getAppelsOffresLances()) {
            $values_18 = [];
            foreach ($data->getAppelsOffresLances() as $value_18) {
                $values_18[] = null === $value_18 ? null : new JsonObject($this->normalizer->normalize($value_18, 'json', $context));
            }
            $dataArray['appels_offres_lances'] = $values_18;
        }
        if ($data->isInitialized('entreprisesCitees') && null !== $data->getEntreprisesCitees()) {
            $values_19 = [];
            foreach ($data->getEntreprisesCitees() as $value_19) {
                $values_19[] = null === $value_19 ? null : new JsonObject($this->normalizer->normalize($value_19, 'json', $context));
            }
            $dataArray['entreprises_citees'] = $values_19;
        }
        if ($data->isInitialized('entreprisesCiteesTotal') && null !== $data->getEntreprisesCiteesTotal()) {
            $dataArray['entreprises_citees_total'] = $data->getEntreprisesCiteesTotal();
        }
        if ($data->isInitialized('entreprisesCiteesIncomplet') && null !== $data->getEntreprisesCiteesIncomplet()) {
            $dataArray['entreprises_citees_incomplet'] = $data->getEntreprisesCiteesIncomplet();
        }
        if ($data->isInitialized('brevets') && null !== $data->getBrevets()) {
            $values_20 = [];
            foreach ($data->getBrevets() as $value_20) {
                $values_20[] = null === $value_20 ? null : new JsonObject($this->normalizer->normalize($value_20, 'json', $context));
            }
            $dataArray['brevets'] = $values_20;
        }
        if ($data->isInitialized('dessins') && null !== $data->getDessins()) {
            $values_21 = [];
            foreach ($data->getDessins() as $value_21) {
                $values_21[] = null === $value_21 ? null : new JsonObject($this->normalizer->normalize($value_21, 'json', $context));
            }
            $dataArray['dessins'] = $values_21;
        }
        if ($data->isInitialized('informationsBoursieres') && null !== $data->getInformationsBoursieres()) {
            $dataArray['informations_boursieres'] = null === $data->getInformationsBoursieres() ? null : new JsonObject($this->normalizer->normalize($data->getInformationsBoursieres(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_22) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_22;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EntrepriseFiche::class => false];
    }
}
