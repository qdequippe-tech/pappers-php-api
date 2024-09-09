<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseBase;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
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
    class EntrepriseBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseBase::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseBase::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseBase();
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
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseBase::class => false];
        }
    }
} else {
    class EntrepriseBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EntrepriseBase::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EntrepriseBase::class === $data::class;
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
            $object = new EntrepriseBase();
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
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EntrepriseBase::class => false];
        }
    }
}
