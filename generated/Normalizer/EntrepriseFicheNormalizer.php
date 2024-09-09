<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Association;
use Qdequippe\Pappers\Api\Model\Bodacc;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFiche;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichecomptesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheetablissement;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheextraitImmatriculation;
use Qdequippe\Pappers\Api\Model\EntrepriseFichefinancesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheproceduresCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichernm;
use Qdequippe\Pappers\Api\Model\EtablissementFiche;
use Qdequippe\Pappers\Api\Model\Labels;
use Qdequippe\Pappers\Api\Model\RepresentantEntreprise;
use Qdequippe\Pappers\Api\Model\ScoringFinancier;
use Qdequippe\Pappers\Api\Model\ScoringNonFinancier;
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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFiche();
            if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
                $data['capital'] = (float) $data['capital'];
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
                $object->setSiege($this->denormalizer->denormalize($data['siege'], EtablissementFiche::class, 'json', $context));
                unset($data['siege']);
            } elseif (\array_key_exists('siege', $data) && null === $data['siege']) {
                $object->setSiege(null);
            }
            if (\array_key_exists('diffusable', $data) && null !== $data['diffusable']) {
                $object->setDiffusable($data['diffusable']);
                unset($data['diffusable']);
            } elseif (\array_key_exists('diffusable', $data) && null === $data['diffusable']) {
                $object->setDiffusable(null);
            }
            if (\array_key_exists('sigle', $data) && null !== $data['sigle']) {
                $object->setSigle($data['sigle']);
                unset($data['sigle']);
            } elseif (\array_key_exists('sigle', $data) && null === $data['sigle']) {
                $object->setSigle(null);
            }
            if (\array_key_exists('objet_social', $data) && null !== $data['objet_social']) {
                $object->setObjetSocial($data['objet_social']);
                unset($data['objet_social']);
            } elseif (\array_key_exists('objet_social', $data) && null === $data['objet_social']) {
                $object->setObjetSocial(null);
            }
            if (\array_key_exists('capital_formate', $data) && null !== $data['capital_formate']) {
                $object->setCapitalFormate($data['capital_formate']);
                unset($data['capital_formate']);
            } elseif (\array_key_exists('capital_formate', $data) && null === $data['capital_formate']) {
                $object->setCapitalFormate(null);
            }
            if (\array_key_exists('capital_actuel_si_variable', $data) && null !== $data['capital_actuel_si_variable']) {
                $object->setCapitalActuelSiVariable($data['capital_actuel_si_variable']);
                unset($data['capital_actuel_si_variable']);
            } elseif (\array_key_exists('capital_actuel_si_variable', $data) && null === $data['capital_actuel_si_variable']) {
                $object->setCapitalActuelSiVariable(null);
            }
            if (\array_key_exists('devise_capital', $data) && null !== $data['devise_capital']) {
                $object->setDeviseCapital($data['devise_capital']);
                unset($data['devise_capital']);
            } elseif (\array_key_exists('devise_capital', $data) && null === $data['devise_capital']) {
                $object->setDeviseCapital(null);
            }
            if (\array_key_exists('numero_rcs', $data) && null !== $data['numero_rcs']) {
                $object->setNumeroRcs($data['numero_rcs']);
                unset($data['numero_rcs']);
            } elseif (\array_key_exists('numero_rcs', $data) && null === $data['numero_rcs']) {
                $object->setNumeroRcs(null);
            }
            if (\array_key_exists('date_cloture_exercice', $data) && null !== $data['date_cloture_exercice']) {
                $object->setDateClotureExercice($data['date_cloture_exercice']);
                unset($data['date_cloture_exercice']);
            } elseif (\array_key_exists('date_cloture_exercice', $data) && null === $data['date_cloture_exercice']) {
                $object->setDateClotureExercice(null);
            }
            if (\array_key_exists('date_cloture_exercice_exceptionnelle', $data) && null !== $data['date_cloture_exercice_exceptionnelle']) {
                $object->setDateClotureExerciceExceptionnelle($data['date_cloture_exercice_exceptionnelle']);
                unset($data['date_cloture_exercice_exceptionnelle']);
            } elseif (\array_key_exists('date_cloture_exercice_exceptionnelle', $data) && null === $data['date_cloture_exercice_exceptionnelle']) {
                $object->setDateClotureExerciceExceptionnelle(null);
            }
            if (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data) && null !== $data['date_cloture_exercice_exceptionnelle_formate']) {
                $object->setDateClotureExerciceExceptionnelleFormate($data['date_cloture_exercice_exceptionnelle_formate']);
                unset($data['date_cloture_exercice_exceptionnelle_formate']);
            } elseif (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data) && null === $data['date_cloture_exercice_exceptionnelle_formate']) {
                $object->setDateClotureExerciceExceptionnelleFormate(null);
            }
            if (\array_key_exists('prochaine_date_cloture_exercice', $data) && null !== $data['prochaine_date_cloture_exercice']) {
                $object->setProchaineDateClotureExercice($data['prochaine_date_cloture_exercice']);
                unset($data['prochaine_date_cloture_exercice']);
            } elseif (\array_key_exists('prochaine_date_cloture_exercice', $data) && null === $data['prochaine_date_cloture_exercice']) {
                $object->setProchaineDateClotureExercice(null);
            }
            if (\array_key_exists('prochaine_date_cloture_exercice_formate', $data) && null !== $data['prochaine_date_cloture_exercice_formate']) {
                $object->setProchaineDateClotureExerciceFormate($data['prochaine_date_cloture_exercice_formate']);
                unset($data['prochaine_date_cloture_exercice_formate']);
            } elseif (\array_key_exists('prochaine_date_cloture_exercice_formate', $data) && null === $data['prochaine_date_cloture_exercice_formate']) {
                $object->setProchaineDateClotureExerciceFormate(null);
            }
            if (\array_key_exists('economie_sociale_solidaire', $data) && null !== $data['economie_sociale_solidaire']) {
                $object->setEconomieSocialeSolidaire($data['economie_sociale_solidaire']);
                unset($data['economie_sociale_solidaire']);
            } elseif (\array_key_exists('economie_sociale_solidaire', $data) && null === $data['economie_sociale_solidaire']) {
                $object->setEconomieSocialeSolidaire(null);
            }
            if (\array_key_exists('duree_personne_morale', $data) && null !== $data['duree_personne_morale']) {
                $object->setDureePersonneMorale($data['duree_personne_morale']);
                unset($data['duree_personne_morale']);
            } elseif (\array_key_exists('duree_personne_morale', $data) && null === $data['duree_personne_morale']) {
                $object->setDureePersonneMorale(null);
            }
            if (\array_key_exists('dernier_traitement', $data) && null !== $data['dernier_traitement']) {
                $object->setDernierTraitement(\DateTime::createFromFormat('Y-m-d', $data['dernier_traitement'])->setTime(0, 0, 0));
                unset($data['dernier_traitement']);
            } elseif (\array_key_exists('dernier_traitement', $data) && null === $data['dernier_traitement']) {
                $object->setDernierTraitement(null);
            }
            if (\array_key_exists('derniere_mise_a_jour_sirene', $data) && null !== $data['derniere_mise_a_jour_sirene']) {
                $object->setDerniereMiseAJourSirene(\DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_sirene'])->setTime(0, 0, 0));
                unset($data['derniere_mise_a_jour_sirene']);
            } elseif (\array_key_exists('derniere_mise_a_jour_sirene', $data) && null === $data['derniere_mise_a_jour_sirene']) {
                $object->setDerniereMiseAJourSirene(null);
            }
            if (\array_key_exists('derniere_mise_a_jour_rcs', $data) && null !== $data['derniere_mise_a_jour_rcs']) {
                $object->setDerniereMiseAJourRcs(\DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_rcs'])->setTime(0, 0, 0));
                unset($data['derniere_mise_a_jour_rcs']);
            } elseif (\array_key_exists('derniere_mise_a_jour_rcs', $data) && null === $data['derniere_mise_a_jour_rcs']) {
                $object->setDerniereMiseAJourRcs(null);
            }
            if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
                $object->setGreffe($data['greffe']);
                unset($data['greffe']);
            } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
                $object->setGreffe(null);
            }
            if (\array_key_exists('code_greffe', $data) && null !== $data['code_greffe']) {
                $object->setCodeGreffe($data['code_greffe']);
                unset($data['code_greffe']);
            } elseif (\array_key_exists('code_greffe', $data) && null === $data['code_greffe']) {
                $object->setCodeGreffe(null);
            }
            if (\array_key_exists('date_immatriculation_rcs', $data) && null !== $data['date_immatriculation_rcs']) {
                $object->setDateImmatriculationRcs($data['date_immatriculation_rcs']);
                unset($data['date_immatriculation_rcs']);
            } elseif (\array_key_exists('date_immatriculation_rcs', $data) && null === $data['date_immatriculation_rcs']) {
                $object->setDateImmatriculationRcs(null);
            }
            if (\array_key_exists('date_premiere_immatriculation_rcs', $data) && null !== $data['date_premiere_immatriculation_rcs']) {
                $object->setDatePremiereImmatriculationRcs($data['date_premiere_immatriculation_rcs']);
                unset($data['date_premiere_immatriculation_rcs']);
            } elseif (\array_key_exists('date_premiere_immatriculation_rcs', $data) && null === $data['date_premiere_immatriculation_rcs']) {
                $object->setDatePremiereImmatriculationRcs(null);
            }
            if (\array_key_exists('date_debut_activite', $data) && null !== $data['date_debut_activite']) {
                $object->setDateDebutActivite($data['date_debut_activite']);
                unset($data['date_debut_activite']);
            } elseif (\array_key_exists('date_debut_activite', $data) && null === $data['date_debut_activite']) {
                $object->setDateDebutActivite(null);
            }
            if (\array_key_exists('date_debut_premiere_activite', $data) && null !== $data['date_debut_premiere_activite']) {
                $object->setDateDebutPremiereActivite($data['date_debut_premiere_activite']);
                unset($data['date_debut_premiere_activite']);
            } elseif (\array_key_exists('date_debut_premiere_activite', $data) && null === $data['date_debut_premiere_activite']) {
                $object->setDateDebutPremiereActivite(null);
            }
            if (\array_key_exists('date_radiation_rcs', $data) && null !== $data['date_radiation_rcs']) {
                $object->setDateRadiationRcs($data['date_radiation_rcs']);
                unset($data['date_radiation_rcs']);
            } elseif (\array_key_exists('date_radiation_rcs', $data) && null === $data['date_radiation_rcs']) {
                $object->setDateRadiationRcs(null);
            }
            if (\array_key_exists('statut_rne', $data) && null !== $data['statut_rne']) {
                $object->setStatutRne($data['statut_rne']);
                unset($data['statut_rne']);
            } elseif (\array_key_exists('statut_rne', $data) && null === $data['statut_rne']) {
                $object->setStatutRne(null);
            }
            if (\array_key_exists('date_immatriculation_rne', $data) && null !== $data['date_immatriculation_rne']) {
                $object->setDateImmatriculationRne($data['date_immatriculation_rne']);
                unset($data['date_immatriculation_rne']);
            } elseif (\array_key_exists('date_immatriculation_rne', $data) && null === $data['date_immatriculation_rne']) {
                $object->setDateImmatriculationRne(null);
            }
            if (\array_key_exists('date_radiation_rne', $data) && null !== $data['date_radiation_rne']) {
                $object->setDateRadiationRne($data['date_radiation_rne']);
                unset($data['date_radiation_rne']);
            } elseif (\array_key_exists('date_radiation_rne', $data) && null === $data['date_radiation_rne']) {
                $object->setDateRadiationRne(null);
            }
            if (\array_key_exists('numero_tva_intracommunautaire', $data) && null !== $data['numero_tva_intracommunautaire']) {
                $object->setNumeroTvaIntracommunautaire($data['numero_tva_intracommunautaire']);
                unset($data['numero_tva_intracommunautaire']);
            } elseif (\array_key_exists('numero_tva_intracommunautaire', $data) && null === $data['numero_tva_intracommunautaire']) {
                $object->setNumeroTvaIntracommunautaire(null);
            }
            if (\array_key_exists('validite_tva_intracommunautaire', $data) && null !== $data['validite_tva_intracommunautaire']) {
                $object->setValiditeTvaIntracommunautaire($data['validite_tva_intracommunautaire']);
                unset($data['validite_tva_intracommunautaire']);
            } elseif (\array_key_exists('validite_tva_intracommunautaire', $data) && null === $data['validite_tva_intracommunautaire']) {
                $object->setValiditeTvaIntracommunautaire(null);
            }
            if (\array_key_exists('associe_unique', $data) && null !== $data['associe_unique']) {
                $object->setAssocieUnique($data['associe_unique']);
                unset($data['associe_unique']);
            } elseif (\array_key_exists('associe_unique', $data) && null === $data['associe_unique']) {
                $object->setAssocieUnique(null);
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
            }
            if (\array_key_exists('etablissement', $data) && null !== $data['etablissement']) {
                $object->setEtablissement($this->denormalizer->denormalize($data['etablissement'], EntrepriseFicheetablissement::class, 'json', $context));
                unset($data['etablissement']);
            } elseif (\array_key_exists('etablissement', $data) && null === $data['etablissement']) {
                $object->setEtablissement(null);
            }
            if (\array_key_exists('finances', $data) && null !== $data['finances']) {
                $values_2 = [];
                foreach ($data['finances'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseFichefinancesItem::class, 'json', $context);
                }
                $object->setFinances($values_2);
                unset($data['finances']);
            } elseif (\array_key_exists('finances', $data) && null === $data['finances']) {
                $object->setFinances(null);
            }
            if (\array_key_exists('representants', $data) && null !== $data['representants']) {
                $values_3 = [];
                foreach ($data['representants'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, RepresentantEntreprise::class, 'json', $context);
                }
                $object->setRepresentants($values_3);
                unset($data['representants']);
            } elseif (\array_key_exists('representants', $data) && null === $data['representants']) {
                $object->setRepresentants(null);
            }
            if (\array_key_exists('beneficiaires_effectifs', $data) && null !== $data['beneficiaires_effectifs']) {
                $values_4 = [];
                foreach ($data['beneficiaires_effectifs'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, EntrepriseFichebeneficiairesEffectifsItem::class, 'json', $context);
                }
                $object->setBeneficiairesEffectifs($values_4);
                unset($data['beneficiaires_effectifs']);
            } elseif (\array_key_exists('beneficiaires_effectifs', $data) && null === $data['beneficiaires_effectifs']) {
                $object->setBeneficiairesEffectifs(null);
            }
            if (\array_key_exists('depots_actes', $data) && null !== $data['depots_actes']) {
                $values_5 = [];
                foreach ($data['depots_actes'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, EntrepriseFichedepotsActesItem::class, 'json', $context);
                }
                $object->setDepotsActes($values_5);
                unset($data['depots_actes']);
            } elseif (\array_key_exists('depots_actes', $data) && null === $data['depots_actes']) {
                $object->setDepotsActes(null);
            }
            if (\array_key_exists('comptes', $data) && null !== $data['comptes']) {
                $values_6 = [];
                foreach ($data['comptes'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, EntrepriseFichecomptesItem::class, 'json', $context);
                }
                $object->setComptes($values_6);
                unset($data['comptes']);
            } elseif (\array_key_exists('comptes', $data) && null === $data['comptes']) {
                $object->setComptes(null);
            }
            if (\array_key_exists('publications_bodacc', $data) && null !== $data['publications_bodacc']) {
                $values_7 = [];
                foreach ($data['publications_bodacc'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, Bodacc::class, 'json', $context);
                }
                $object->setPublicationsBodacc($values_7);
                unset($data['publications_bodacc']);
            } elseif (\array_key_exists('publications_bodacc', $data) && null === $data['publications_bodacc']) {
                $object->setPublicationsBodacc(null);
            }
            if (\array_key_exists('procedures_collectives', $data) && null !== $data['procedures_collectives']) {
                $values_8 = [];
                foreach ($data['procedures_collectives'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, EntrepriseFicheproceduresCollectivesItem::class, 'json', $context);
                }
                $object->setProceduresCollectives($values_8);
                unset($data['procedures_collectives']);
            } elseif (\array_key_exists('procedures_collectives', $data) && null === $data['procedures_collectives']) {
                $object->setProceduresCollectives(null);
            }
            if (\array_key_exists('procedure_collective_existe', $data) && null !== $data['procedure_collective_existe']) {
                $object->setProcedureCollectiveExiste($data['procedure_collective_existe']);
                unset($data['procedure_collective_existe']);
            } elseif (\array_key_exists('procedure_collective_existe', $data) && null === $data['procedure_collective_existe']) {
                $object->setProcedureCollectiveExiste(null);
            }
            if (\array_key_exists('procedure_collective_en_cours', $data) && null !== $data['procedure_collective_en_cours']) {
                $object->setProcedureCollectiveEnCours($data['procedure_collective_en_cours']);
                unset($data['procedure_collective_en_cours']);
            } elseif (\array_key_exists('procedure_collective_en_cours', $data) && null === $data['procedure_collective_en_cours']) {
                $object->setProcedureCollectiveEnCours(null);
            }
            if (\array_key_exists('derniers_statuts', $data) && null !== $data['derniers_statuts']) {
                $object->setDerniersStatuts($this->denormalizer->denormalize($data['derniers_statuts'], EntrepriseFichederniersStatuts::class, 'json', $context));
                unset($data['derniers_statuts']);
            } elseif (\array_key_exists('derniers_statuts', $data) && null === $data['derniers_statuts']) {
                $object->setDerniersStatuts(null);
            }
            if (\array_key_exists('extrait_immatriculation', $data) && null !== $data['extrait_immatriculation']) {
                $object->setExtraitImmatriculation($this->denormalizer->denormalize($data['extrait_immatriculation'], EntrepriseFicheextraitImmatriculation::class, 'json', $context));
                unset($data['extrait_immatriculation']);
            } elseif (\array_key_exists('extrait_immatriculation', $data) && null === $data['extrait_immatriculation']) {
                $object->setExtraitImmatriculation(null);
            }
            if (\array_key_exists('rnm', $data) && null !== $data['rnm']) {
                $object->setRnm($this->denormalizer->denormalize($data['rnm'], EntrepriseFichernm::class, 'json', $context));
                unset($data['rnm']);
            } elseif (\array_key_exists('rnm', $data) && null === $data['rnm']) {
                $object->setRnm(null);
            }
            if (\array_key_exists('marques', $data) && null !== $data['marques']) {
                $values_9 = [];
                foreach ($data['marques'] as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, EntrepriseFichemarquesItem::class, 'json', $context);
                }
                $object->setMarques($values_9);
                unset($data['marques']);
            } elseif (\array_key_exists('marques', $data) && null === $data['marques']) {
                $object->setMarques(null);
            }
            if (\array_key_exists('association', $data) && null !== $data['association']) {
                $object->setAssociation($this->denormalizer->denormalize($data['association'], Association::class, 'json', $context));
                unset($data['association']);
            } elseif (\array_key_exists('association', $data) && null === $data['association']) {
                $object->setAssociation(null);
            }
            if (\array_key_exists('labels', $data) && null !== $data['labels']) {
                $values_10 = [];
                foreach ($data['labels'] as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, Labels::class, 'json', $context);
                }
                $object->setLabels($values_10);
                unset($data['labels']);
            } elseif (\array_key_exists('labels', $data) && null === $data['labels']) {
                $object->setLabels(null);
            }
            if (\array_key_exists('sites_internet', $data) && null !== $data['sites_internet']) {
                $values_11 = [];
                foreach ($data['sites_internet'] as $value_11) {
                    $values_11[] = $value_11;
                }
                $object->setSitesInternet($values_11);
                unset($data['sites_internet']);
            } elseif (\array_key_exists('sites_internet', $data) && null === $data['sites_internet']) {
                $object->setSitesInternet(null);
            }
            if (\array_key_exists('telephone', $data) && null !== $data['telephone']) {
                $object->setTelephone($data['telephone']);
                unset($data['telephone']);
            } elseif (\array_key_exists('telephone', $data) && null === $data['telephone']) {
                $object->setTelephone(null);
            }
            if (\array_key_exists('email', $data) && null !== $data['email']) {
                $object->setEmail($data['email']);
                unset($data['email']);
            } elseif (\array_key_exists('email', $data) && null === $data['email']) {
                $object->setEmail(null);
            }
            if (\array_key_exists('scoring_non_financier', $data) && null !== $data['scoring_non_financier']) {
                $object->setScoringNonFinancier($this->denormalizer->denormalize($data['scoring_non_financier'], ScoringNonFinancier::class, 'json', $context));
                unset($data['scoring_non_financier']);
            } elseif (\array_key_exists('scoring_non_financier', $data) && null === $data['scoring_non_financier']) {
                $object->setScoringNonFinancier(null);
            }
            if (\array_key_exists('scoring_financier', $data) && null !== $data['scoring_financier']) {
                $object->setScoringFinancier($this->denormalizer->denormalize($data['scoring_financier'], ScoringFinancier::class, 'json', $context));
                unset($data['scoring_financier']);
            } elseif (\array_key_exists('scoring_financier', $data) && null === $data['scoring_financier']) {
                $object->setScoringFinancier(null);
            }
            if (\array_key_exists('categorie_entreprise', $data) && null !== $data['categorie_entreprise']) {
                $object->setCategorieEntreprise($data['categorie_entreprise']);
                unset($data['categorie_entreprise']);
            } elseif (\array_key_exists('categorie_entreprise', $data) && null === $data['categorie_entreprise']) {
                $object->setCategorieEntreprise(null);
            }
            if (\array_key_exists('annee_categorie_entreprise', $data) && null !== $data['annee_categorie_entreprise']) {
                $object->setAnneeCategorieEntreprise($data['annee_categorie_entreprise']);
                unset($data['annee_categorie_entreprise']);
            } elseif (\array_key_exists('annee_categorie_entreprise', $data) && null === $data['annee_categorie_entreprise']) {
                $object->setAnneeCategorieEntreprise(null);
            }
            foreach ($data as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_12;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('sirenFormate') && null !== $object->getSirenFormate()) {
                $data['siren_formate'] = $object->getSirenFormate();
            }
            if ($object->isInitialized('oppositionUtilisationCommerciale') && null !== $object->getOppositionUtilisationCommerciale()) {
                $data['opposition_utilisation_commerciale'] = $object->getOppositionUtilisationCommerciale();
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
                $data['date_creation'] = $object->getDateCreation()?->format('Y-m-d');
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
            if ($object->isInitialized('societeAMission') && null !== $object->getSocieteAMission()) {
                $data['societe_a_mission'] = $object->getSocieteAMission();
            }
            if ($object->isInitialized('categorieJuridique') && null !== $object->getCategorieJuridique()) {
                $data['categorie_juridique'] = $object->getCategorieJuridique();
            }
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['forme_juridique'] = $object->getFormeJuridique();
            }
            if ($object->isInitialized('microEntreprise') && null !== $object->getMicroEntreprise()) {
                $data['micro_entreprise'] = $object->getMicroEntreprise();
            }
            if ($object->isInitialized('formeExercice') && null !== $object->getFormeExercice()) {
                $data['forme_exercice'] = $object->getFormeExercice();
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
                $data['dernier_traitement'] = $object->getDernierTraitement()?->format('Y-m-d');
            }
            if ($object->isInitialized('derniereMiseAJourSirene') && null !== $object->getDerniereMiseAJourSirene()) {
                $data['derniere_mise_a_jour_sirene'] = $object->getDerniereMiseAJourSirene()?->format('Y-m-d');
            }
            if ($object->isInitialized('derniereMiseAJourRcs') && null !== $object->getDerniereMiseAJourRcs()) {
                $data['derniere_mise_a_jour_rcs'] = $object->getDerniereMiseAJourRcs()?->format('Y-m-d');
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
            if ($object->isInitialized('statutRne') && null !== $object->getStatutRne()) {
                $data['statut_rne'] = $object->getStatutRne();
            }
            if ($object->isInitialized('dateImmatriculationRne') && null !== $object->getDateImmatriculationRne()) {
                $data['date_immatriculation_rne'] = $object->getDateImmatriculationRne();
            }
            if ($object->isInitialized('dateRadiationRne') && null !== $object->getDateRadiationRne()) {
                $data['date_radiation_rne'] = $object->getDateRadiationRne();
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
            if ($object->isInitialized('etablissement') && null !== $object->getEtablissement()) {
                $data['etablissement'] = $this->normalizer->normalize($object->getEtablissement(), 'json', $context);
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
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_10 = [];
                foreach ($object->getLabels() as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $data['labels'] = $values_10;
            }
            if ($object->isInitialized('sitesInternet') && null !== $object->getSitesInternet()) {
                $values_11 = [];
                foreach ($object->getSitesInternet() as $value_11) {
                    $values_11[] = $value_11;
                }
                $data['sites_internet'] = $values_11;
            }
            if ($object->isInitialized('telephone') && null !== $object->getTelephone()) {
                $data['telephone'] = $object->getTelephone();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('scoringNonFinancier') && null !== $object->getScoringNonFinancier()) {
                $data['scoring_non_financier'] = $this->normalizer->normalize($object->getScoringNonFinancier(), 'json', $context);
            }
            if ($object->isInitialized('scoringFinancier') && null !== $object->getScoringFinancier()) {
                $data['scoring_financier'] = $this->normalizer->normalize($object->getScoringFinancier(), 'json', $context);
            }
            if ($object->isInitialized('categorieEntreprise') && null !== $object->getCategorieEntreprise()) {
                $data['categorie_entreprise'] = $object->getCategorieEntreprise();
            }
            if ($object->isInitialized('anneeCategorieEntreprise') && null !== $object->getAnneeCategorieEntreprise()) {
                $data['annee_categorie_entreprise'] = $object->getAnneeCategorieEntreprise();
            }
            foreach ($object as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_12;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseFiche::class => false];
        }
    }
} else {
    class EntrepriseFicheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseFiche::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseFiche::class === $data::class;
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
            $object = new EntrepriseFiche();
            if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
                $data['capital'] = (float) $data['capital'];
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
                $object->setSiege($this->denormalizer->denormalize($data['siege'], EtablissementFiche::class, 'json', $context));
                unset($data['siege']);
            } elseif (\array_key_exists('siege', $data) && null === $data['siege']) {
                $object->setSiege(null);
            }
            if (\array_key_exists('diffusable', $data) && null !== $data['diffusable']) {
                $object->setDiffusable($data['diffusable']);
                unset($data['diffusable']);
            } elseif (\array_key_exists('diffusable', $data) && null === $data['diffusable']) {
                $object->setDiffusable(null);
            }
            if (\array_key_exists('sigle', $data) && null !== $data['sigle']) {
                $object->setSigle($data['sigle']);
                unset($data['sigle']);
            } elseif (\array_key_exists('sigle', $data) && null === $data['sigle']) {
                $object->setSigle(null);
            }
            if (\array_key_exists('objet_social', $data) && null !== $data['objet_social']) {
                $object->setObjetSocial($data['objet_social']);
                unset($data['objet_social']);
            } elseif (\array_key_exists('objet_social', $data) && null === $data['objet_social']) {
                $object->setObjetSocial(null);
            }
            if (\array_key_exists('capital_formate', $data) && null !== $data['capital_formate']) {
                $object->setCapitalFormate($data['capital_formate']);
                unset($data['capital_formate']);
            } elseif (\array_key_exists('capital_formate', $data) && null === $data['capital_formate']) {
                $object->setCapitalFormate(null);
            }
            if (\array_key_exists('capital_actuel_si_variable', $data) && null !== $data['capital_actuel_si_variable']) {
                $object->setCapitalActuelSiVariable($data['capital_actuel_si_variable']);
                unset($data['capital_actuel_si_variable']);
            } elseif (\array_key_exists('capital_actuel_si_variable', $data) && null === $data['capital_actuel_si_variable']) {
                $object->setCapitalActuelSiVariable(null);
            }
            if (\array_key_exists('devise_capital', $data) && null !== $data['devise_capital']) {
                $object->setDeviseCapital($data['devise_capital']);
                unset($data['devise_capital']);
            } elseif (\array_key_exists('devise_capital', $data) && null === $data['devise_capital']) {
                $object->setDeviseCapital(null);
            }
            if (\array_key_exists('numero_rcs', $data) && null !== $data['numero_rcs']) {
                $object->setNumeroRcs($data['numero_rcs']);
                unset($data['numero_rcs']);
            } elseif (\array_key_exists('numero_rcs', $data) && null === $data['numero_rcs']) {
                $object->setNumeroRcs(null);
            }
            if (\array_key_exists('date_cloture_exercice', $data) && null !== $data['date_cloture_exercice']) {
                $object->setDateClotureExercice($data['date_cloture_exercice']);
                unset($data['date_cloture_exercice']);
            } elseif (\array_key_exists('date_cloture_exercice', $data) && null === $data['date_cloture_exercice']) {
                $object->setDateClotureExercice(null);
            }
            if (\array_key_exists('date_cloture_exercice_exceptionnelle', $data) && null !== $data['date_cloture_exercice_exceptionnelle']) {
                $object->setDateClotureExerciceExceptionnelle($data['date_cloture_exercice_exceptionnelle']);
                unset($data['date_cloture_exercice_exceptionnelle']);
            } elseif (\array_key_exists('date_cloture_exercice_exceptionnelle', $data) && null === $data['date_cloture_exercice_exceptionnelle']) {
                $object->setDateClotureExerciceExceptionnelle(null);
            }
            if (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data) && null !== $data['date_cloture_exercice_exceptionnelle_formate']) {
                $object->setDateClotureExerciceExceptionnelleFormate($data['date_cloture_exercice_exceptionnelle_formate']);
                unset($data['date_cloture_exercice_exceptionnelle_formate']);
            } elseif (\array_key_exists('date_cloture_exercice_exceptionnelle_formate', $data) && null === $data['date_cloture_exercice_exceptionnelle_formate']) {
                $object->setDateClotureExerciceExceptionnelleFormate(null);
            }
            if (\array_key_exists('prochaine_date_cloture_exercice', $data) && null !== $data['prochaine_date_cloture_exercice']) {
                $object->setProchaineDateClotureExercice($data['prochaine_date_cloture_exercice']);
                unset($data['prochaine_date_cloture_exercice']);
            } elseif (\array_key_exists('prochaine_date_cloture_exercice', $data) && null === $data['prochaine_date_cloture_exercice']) {
                $object->setProchaineDateClotureExercice(null);
            }
            if (\array_key_exists('prochaine_date_cloture_exercice_formate', $data) && null !== $data['prochaine_date_cloture_exercice_formate']) {
                $object->setProchaineDateClotureExerciceFormate($data['prochaine_date_cloture_exercice_formate']);
                unset($data['prochaine_date_cloture_exercice_formate']);
            } elseif (\array_key_exists('prochaine_date_cloture_exercice_formate', $data) && null === $data['prochaine_date_cloture_exercice_formate']) {
                $object->setProchaineDateClotureExerciceFormate(null);
            }
            if (\array_key_exists('economie_sociale_solidaire', $data) && null !== $data['economie_sociale_solidaire']) {
                $object->setEconomieSocialeSolidaire($data['economie_sociale_solidaire']);
                unset($data['economie_sociale_solidaire']);
            } elseif (\array_key_exists('economie_sociale_solidaire', $data) && null === $data['economie_sociale_solidaire']) {
                $object->setEconomieSocialeSolidaire(null);
            }
            if (\array_key_exists('duree_personne_morale', $data) && null !== $data['duree_personne_morale']) {
                $object->setDureePersonneMorale($data['duree_personne_morale']);
                unset($data['duree_personne_morale']);
            } elseif (\array_key_exists('duree_personne_morale', $data) && null === $data['duree_personne_morale']) {
                $object->setDureePersonneMorale(null);
            }
            if (\array_key_exists('dernier_traitement', $data) && null !== $data['dernier_traitement']) {
                $object->setDernierTraitement(\DateTime::createFromFormat('Y-m-d', $data['dernier_traitement'])->setTime(0, 0, 0));
                unset($data['dernier_traitement']);
            } elseif (\array_key_exists('dernier_traitement', $data) && null === $data['dernier_traitement']) {
                $object->setDernierTraitement(null);
            }
            if (\array_key_exists('derniere_mise_a_jour_sirene', $data) && null !== $data['derniere_mise_a_jour_sirene']) {
                $object->setDerniereMiseAJourSirene(\DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_sirene'])->setTime(0, 0, 0));
                unset($data['derniere_mise_a_jour_sirene']);
            } elseif (\array_key_exists('derniere_mise_a_jour_sirene', $data) && null === $data['derniere_mise_a_jour_sirene']) {
                $object->setDerniereMiseAJourSirene(null);
            }
            if (\array_key_exists('derniere_mise_a_jour_rcs', $data) && null !== $data['derniere_mise_a_jour_rcs']) {
                $object->setDerniereMiseAJourRcs(\DateTime::createFromFormat('Y-m-d', $data['derniere_mise_a_jour_rcs'])->setTime(0, 0, 0));
                unset($data['derniere_mise_a_jour_rcs']);
            } elseif (\array_key_exists('derniere_mise_a_jour_rcs', $data) && null === $data['derniere_mise_a_jour_rcs']) {
                $object->setDerniereMiseAJourRcs(null);
            }
            if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
                $object->setGreffe($data['greffe']);
                unset($data['greffe']);
            } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
                $object->setGreffe(null);
            }
            if (\array_key_exists('code_greffe', $data) && null !== $data['code_greffe']) {
                $object->setCodeGreffe($data['code_greffe']);
                unset($data['code_greffe']);
            } elseif (\array_key_exists('code_greffe', $data) && null === $data['code_greffe']) {
                $object->setCodeGreffe(null);
            }
            if (\array_key_exists('date_immatriculation_rcs', $data) && null !== $data['date_immatriculation_rcs']) {
                $object->setDateImmatriculationRcs($data['date_immatriculation_rcs']);
                unset($data['date_immatriculation_rcs']);
            } elseif (\array_key_exists('date_immatriculation_rcs', $data) && null === $data['date_immatriculation_rcs']) {
                $object->setDateImmatriculationRcs(null);
            }
            if (\array_key_exists('date_premiere_immatriculation_rcs', $data) && null !== $data['date_premiere_immatriculation_rcs']) {
                $object->setDatePremiereImmatriculationRcs($data['date_premiere_immatriculation_rcs']);
                unset($data['date_premiere_immatriculation_rcs']);
            } elseif (\array_key_exists('date_premiere_immatriculation_rcs', $data) && null === $data['date_premiere_immatriculation_rcs']) {
                $object->setDatePremiereImmatriculationRcs(null);
            }
            if (\array_key_exists('date_debut_activite', $data) && null !== $data['date_debut_activite']) {
                $object->setDateDebutActivite($data['date_debut_activite']);
                unset($data['date_debut_activite']);
            } elseif (\array_key_exists('date_debut_activite', $data) && null === $data['date_debut_activite']) {
                $object->setDateDebutActivite(null);
            }
            if (\array_key_exists('date_debut_premiere_activite', $data) && null !== $data['date_debut_premiere_activite']) {
                $object->setDateDebutPremiereActivite($data['date_debut_premiere_activite']);
                unset($data['date_debut_premiere_activite']);
            } elseif (\array_key_exists('date_debut_premiere_activite', $data) && null === $data['date_debut_premiere_activite']) {
                $object->setDateDebutPremiereActivite(null);
            }
            if (\array_key_exists('date_radiation_rcs', $data) && null !== $data['date_radiation_rcs']) {
                $object->setDateRadiationRcs($data['date_radiation_rcs']);
                unset($data['date_radiation_rcs']);
            } elseif (\array_key_exists('date_radiation_rcs', $data) && null === $data['date_radiation_rcs']) {
                $object->setDateRadiationRcs(null);
            }
            if (\array_key_exists('statut_rne', $data) && null !== $data['statut_rne']) {
                $object->setStatutRne($data['statut_rne']);
                unset($data['statut_rne']);
            } elseif (\array_key_exists('statut_rne', $data) && null === $data['statut_rne']) {
                $object->setStatutRne(null);
            }
            if (\array_key_exists('date_immatriculation_rne', $data) && null !== $data['date_immatriculation_rne']) {
                $object->setDateImmatriculationRne($data['date_immatriculation_rne']);
                unset($data['date_immatriculation_rne']);
            } elseif (\array_key_exists('date_immatriculation_rne', $data) && null === $data['date_immatriculation_rne']) {
                $object->setDateImmatriculationRne(null);
            }
            if (\array_key_exists('date_radiation_rne', $data) && null !== $data['date_radiation_rne']) {
                $object->setDateRadiationRne($data['date_radiation_rne']);
                unset($data['date_radiation_rne']);
            } elseif (\array_key_exists('date_radiation_rne', $data) && null === $data['date_radiation_rne']) {
                $object->setDateRadiationRne(null);
            }
            if (\array_key_exists('numero_tva_intracommunautaire', $data) && null !== $data['numero_tva_intracommunautaire']) {
                $object->setNumeroTvaIntracommunautaire($data['numero_tva_intracommunautaire']);
                unset($data['numero_tva_intracommunautaire']);
            } elseif (\array_key_exists('numero_tva_intracommunautaire', $data) && null === $data['numero_tva_intracommunautaire']) {
                $object->setNumeroTvaIntracommunautaire(null);
            }
            if (\array_key_exists('validite_tva_intracommunautaire', $data) && null !== $data['validite_tva_intracommunautaire']) {
                $object->setValiditeTvaIntracommunautaire($data['validite_tva_intracommunautaire']);
                unset($data['validite_tva_intracommunautaire']);
            } elseif (\array_key_exists('validite_tva_intracommunautaire', $data) && null === $data['validite_tva_intracommunautaire']) {
                $object->setValiditeTvaIntracommunautaire(null);
            }
            if (\array_key_exists('associe_unique', $data) && null !== $data['associe_unique']) {
                $object->setAssocieUnique($data['associe_unique']);
                unset($data['associe_unique']);
            } elseif (\array_key_exists('associe_unique', $data) && null === $data['associe_unique']) {
                $object->setAssocieUnique(null);
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
            }
            if (\array_key_exists('etablissement', $data) && null !== $data['etablissement']) {
                $object->setEtablissement($this->denormalizer->denormalize($data['etablissement'], EntrepriseFicheetablissement::class, 'json', $context));
                unset($data['etablissement']);
            } elseif (\array_key_exists('etablissement', $data) && null === $data['etablissement']) {
                $object->setEtablissement(null);
            }
            if (\array_key_exists('finances', $data) && null !== $data['finances']) {
                $values_2 = [];
                foreach ($data['finances'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseFichefinancesItem::class, 'json', $context);
                }
                $object->setFinances($values_2);
                unset($data['finances']);
            } elseif (\array_key_exists('finances', $data) && null === $data['finances']) {
                $object->setFinances(null);
            }
            if (\array_key_exists('representants', $data) && null !== $data['representants']) {
                $values_3 = [];
                foreach ($data['representants'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, RepresentantEntreprise::class, 'json', $context);
                }
                $object->setRepresentants($values_3);
                unset($data['representants']);
            } elseif (\array_key_exists('representants', $data) && null === $data['representants']) {
                $object->setRepresentants(null);
            }
            if (\array_key_exists('beneficiaires_effectifs', $data) && null !== $data['beneficiaires_effectifs']) {
                $values_4 = [];
                foreach ($data['beneficiaires_effectifs'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, EntrepriseFichebeneficiairesEffectifsItem::class, 'json', $context);
                }
                $object->setBeneficiairesEffectifs($values_4);
                unset($data['beneficiaires_effectifs']);
            } elseif (\array_key_exists('beneficiaires_effectifs', $data) && null === $data['beneficiaires_effectifs']) {
                $object->setBeneficiairesEffectifs(null);
            }
            if (\array_key_exists('depots_actes', $data) && null !== $data['depots_actes']) {
                $values_5 = [];
                foreach ($data['depots_actes'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, EntrepriseFichedepotsActesItem::class, 'json', $context);
                }
                $object->setDepotsActes($values_5);
                unset($data['depots_actes']);
            } elseif (\array_key_exists('depots_actes', $data) && null === $data['depots_actes']) {
                $object->setDepotsActes(null);
            }
            if (\array_key_exists('comptes', $data) && null !== $data['comptes']) {
                $values_6 = [];
                foreach ($data['comptes'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, EntrepriseFichecomptesItem::class, 'json', $context);
                }
                $object->setComptes($values_6);
                unset($data['comptes']);
            } elseif (\array_key_exists('comptes', $data) && null === $data['comptes']) {
                $object->setComptes(null);
            }
            if (\array_key_exists('publications_bodacc', $data) && null !== $data['publications_bodacc']) {
                $values_7 = [];
                foreach ($data['publications_bodacc'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, Bodacc::class, 'json', $context);
                }
                $object->setPublicationsBodacc($values_7);
                unset($data['publications_bodacc']);
            } elseif (\array_key_exists('publications_bodacc', $data) && null === $data['publications_bodacc']) {
                $object->setPublicationsBodacc(null);
            }
            if (\array_key_exists('procedures_collectives', $data) && null !== $data['procedures_collectives']) {
                $values_8 = [];
                foreach ($data['procedures_collectives'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, EntrepriseFicheproceduresCollectivesItem::class, 'json', $context);
                }
                $object->setProceduresCollectives($values_8);
                unset($data['procedures_collectives']);
            } elseif (\array_key_exists('procedures_collectives', $data) && null === $data['procedures_collectives']) {
                $object->setProceduresCollectives(null);
            }
            if (\array_key_exists('procedure_collective_existe', $data) && null !== $data['procedure_collective_existe']) {
                $object->setProcedureCollectiveExiste($data['procedure_collective_existe']);
                unset($data['procedure_collective_existe']);
            } elseif (\array_key_exists('procedure_collective_existe', $data) && null === $data['procedure_collective_existe']) {
                $object->setProcedureCollectiveExiste(null);
            }
            if (\array_key_exists('procedure_collective_en_cours', $data) && null !== $data['procedure_collective_en_cours']) {
                $object->setProcedureCollectiveEnCours($data['procedure_collective_en_cours']);
                unset($data['procedure_collective_en_cours']);
            } elseif (\array_key_exists('procedure_collective_en_cours', $data) && null === $data['procedure_collective_en_cours']) {
                $object->setProcedureCollectiveEnCours(null);
            }
            if (\array_key_exists('derniers_statuts', $data) && null !== $data['derniers_statuts']) {
                $object->setDerniersStatuts($this->denormalizer->denormalize($data['derniers_statuts'], EntrepriseFichederniersStatuts::class, 'json', $context));
                unset($data['derniers_statuts']);
            } elseif (\array_key_exists('derniers_statuts', $data) && null === $data['derniers_statuts']) {
                $object->setDerniersStatuts(null);
            }
            if (\array_key_exists('extrait_immatriculation', $data) && null !== $data['extrait_immatriculation']) {
                $object->setExtraitImmatriculation($this->denormalizer->denormalize($data['extrait_immatriculation'], EntrepriseFicheextraitImmatriculation::class, 'json', $context));
                unset($data['extrait_immatriculation']);
            } elseif (\array_key_exists('extrait_immatriculation', $data) && null === $data['extrait_immatriculation']) {
                $object->setExtraitImmatriculation(null);
            }
            if (\array_key_exists('rnm', $data) && null !== $data['rnm']) {
                $object->setRnm($this->denormalizer->denormalize($data['rnm'], EntrepriseFichernm::class, 'json', $context));
                unset($data['rnm']);
            } elseif (\array_key_exists('rnm', $data) && null === $data['rnm']) {
                $object->setRnm(null);
            }
            if (\array_key_exists('marques', $data) && null !== $data['marques']) {
                $values_9 = [];
                foreach ($data['marques'] as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, EntrepriseFichemarquesItem::class, 'json', $context);
                }
                $object->setMarques($values_9);
                unset($data['marques']);
            } elseif (\array_key_exists('marques', $data) && null === $data['marques']) {
                $object->setMarques(null);
            }
            if (\array_key_exists('association', $data) && null !== $data['association']) {
                $object->setAssociation($this->denormalizer->denormalize($data['association'], Association::class, 'json', $context));
                unset($data['association']);
            } elseif (\array_key_exists('association', $data) && null === $data['association']) {
                $object->setAssociation(null);
            }
            if (\array_key_exists('labels', $data) && null !== $data['labels']) {
                $values_10 = [];
                foreach ($data['labels'] as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, Labels::class, 'json', $context);
                }
                $object->setLabels($values_10);
                unset($data['labels']);
            } elseif (\array_key_exists('labels', $data) && null === $data['labels']) {
                $object->setLabels(null);
            }
            if (\array_key_exists('sites_internet', $data) && null !== $data['sites_internet']) {
                $values_11 = [];
                foreach ($data['sites_internet'] as $value_11) {
                    $values_11[] = $value_11;
                }
                $object->setSitesInternet($values_11);
                unset($data['sites_internet']);
            } elseif (\array_key_exists('sites_internet', $data) && null === $data['sites_internet']) {
                $object->setSitesInternet(null);
            }
            if (\array_key_exists('telephone', $data) && null !== $data['telephone']) {
                $object->setTelephone($data['telephone']);
                unset($data['telephone']);
            } elseif (\array_key_exists('telephone', $data) && null === $data['telephone']) {
                $object->setTelephone(null);
            }
            if (\array_key_exists('email', $data) && null !== $data['email']) {
                $object->setEmail($data['email']);
                unset($data['email']);
            } elseif (\array_key_exists('email', $data) && null === $data['email']) {
                $object->setEmail(null);
            }
            if (\array_key_exists('scoring_non_financier', $data) && null !== $data['scoring_non_financier']) {
                $object->setScoringNonFinancier($this->denormalizer->denormalize($data['scoring_non_financier'], ScoringNonFinancier::class, 'json', $context));
                unset($data['scoring_non_financier']);
            } elseif (\array_key_exists('scoring_non_financier', $data) && null === $data['scoring_non_financier']) {
                $object->setScoringNonFinancier(null);
            }
            if (\array_key_exists('scoring_financier', $data) && null !== $data['scoring_financier']) {
                $object->setScoringFinancier($this->denormalizer->denormalize($data['scoring_financier'], ScoringFinancier::class, 'json', $context));
                unset($data['scoring_financier']);
            } elseif (\array_key_exists('scoring_financier', $data) && null === $data['scoring_financier']) {
                $object->setScoringFinancier(null);
            }
            if (\array_key_exists('categorie_entreprise', $data) && null !== $data['categorie_entreprise']) {
                $object->setCategorieEntreprise($data['categorie_entreprise']);
                unset($data['categorie_entreprise']);
            } elseif (\array_key_exists('categorie_entreprise', $data) && null === $data['categorie_entreprise']) {
                $object->setCategorieEntreprise(null);
            }
            if (\array_key_exists('annee_categorie_entreprise', $data) && null !== $data['annee_categorie_entreprise']) {
                $object->setAnneeCategorieEntreprise($data['annee_categorie_entreprise']);
                unset($data['annee_categorie_entreprise']);
            } elseif (\array_key_exists('annee_categorie_entreprise', $data) && null === $data['annee_categorie_entreprise']) {
                $object->setAnneeCategorieEntreprise(null);
            }
            foreach ($data as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_12;
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
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('sirenFormate') && null !== $object->getSirenFormate()) {
                $data['siren_formate'] = $object->getSirenFormate();
            }
            if ($object->isInitialized('oppositionUtilisationCommerciale') && null !== $object->getOppositionUtilisationCommerciale()) {
                $data['opposition_utilisation_commerciale'] = $object->getOppositionUtilisationCommerciale();
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
                $data['date_creation'] = $object->getDateCreation()?->format('Y-m-d');
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
            if ($object->isInitialized('societeAMission') && null !== $object->getSocieteAMission()) {
                $data['societe_a_mission'] = $object->getSocieteAMission();
            }
            if ($object->isInitialized('categorieJuridique') && null !== $object->getCategorieJuridique()) {
                $data['categorie_juridique'] = $object->getCategorieJuridique();
            }
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['forme_juridique'] = $object->getFormeJuridique();
            }
            if ($object->isInitialized('microEntreprise') && null !== $object->getMicroEntreprise()) {
                $data['micro_entreprise'] = $object->getMicroEntreprise();
            }
            if ($object->isInitialized('formeExercice') && null !== $object->getFormeExercice()) {
                $data['forme_exercice'] = $object->getFormeExercice();
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
                $data['dernier_traitement'] = $object->getDernierTraitement()?->format('Y-m-d');
            }
            if ($object->isInitialized('derniereMiseAJourSirene') && null !== $object->getDerniereMiseAJourSirene()) {
                $data['derniere_mise_a_jour_sirene'] = $object->getDerniereMiseAJourSirene()?->format('Y-m-d');
            }
            if ($object->isInitialized('derniereMiseAJourRcs') && null !== $object->getDerniereMiseAJourRcs()) {
                $data['derniere_mise_a_jour_rcs'] = $object->getDerniereMiseAJourRcs()?->format('Y-m-d');
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
            if ($object->isInitialized('statutRne') && null !== $object->getStatutRne()) {
                $data['statut_rne'] = $object->getStatutRne();
            }
            if ($object->isInitialized('dateImmatriculationRne') && null !== $object->getDateImmatriculationRne()) {
                $data['date_immatriculation_rne'] = $object->getDateImmatriculationRne();
            }
            if ($object->isInitialized('dateRadiationRne') && null !== $object->getDateRadiationRne()) {
                $data['date_radiation_rne'] = $object->getDateRadiationRne();
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
            if ($object->isInitialized('etablissement') && null !== $object->getEtablissement()) {
                $data['etablissement'] = $this->normalizer->normalize($object->getEtablissement(), 'json', $context);
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
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_10 = [];
                foreach ($object->getLabels() as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $data['labels'] = $values_10;
            }
            if ($object->isInitialized('sitesInternet') && null !== $object->getSitesInternet()) {
                $values_11 = [];
                foreach ($object->getSitesInternet() as $value_11) {
                    $values_11[] = $value_11;
                }
                $data['sites_internet'] = $values_11;
            }
            if ($object->isInitialized('telephone') && null !== $object->getTelephone()) {
                $data['telephone'] = $object->getTelephone();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('scoringNonFinancier') && null !== $object->getScoringNonFinancier()) {
                $data['scoring_non_financier'] = $this->normalizer->normalize($object->getScoringNonFinancier(), 'json', $context);
            }
            if ($object->isInitialized('scoringFinancier') && null !== $object->getScoringFinancier()) {
                $data['scoring_financier'] = $this->normalizer->normalize($object->getScoringFinancier(), 'json', $context);
            }
            if ($object->isInitialized('categorieEntreprise') && null !== $object->getCategorieEntreprise()) {
                $data['categorie_entreprise'] = $object->getCategorieEntreprise();
            }
            if ($object->isInitialized('anneeCategorieEntreprise') && null !== $object->getAnneeCategorieEntreprise()) {
                $data['annee_categorie_entreprise'] = $object->getAnneeCategorieEntreprise();
            }
            foreach ($object as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_12;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseFiche::class => false];
        }
    }
}
