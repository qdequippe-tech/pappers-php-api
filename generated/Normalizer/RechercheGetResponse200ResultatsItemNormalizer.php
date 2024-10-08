<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Beneficiaire;
use Qdequippe\Pappers\Api\Model\Document;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
use Qdequippe\Pappers\Api\Model\EtablissementRecherche;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItempublicationsItem;
use Qdequippe\Pappers\Api\Model\RepresentantRecherche;
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
    class RechercheGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RechercheGetResponse200ResultatsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheGetResponse200ResultatsItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new RechercheGetResponse200ResultatsItem();
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
                $object->setSiege($this->denormalizer->denormalize($data['siege'], EtablissementRecherche::class, 'json', $context));
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
            if (\array_key_exists('dirigeants', $data) && null !== $data['dirigeants']) {
                $values_2 = [];
                foreach ($data['dirigeants'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, RepresentantRecherche::class, 'json', $context);
                }
                $object->setDirigeants($values_2);
                unset($data['dirigeants']);
            } elseif (\array_key_exists('dirigeants', $data) && null === $data['dirigeants']) {
                $object->setDirigeants(null);
            }
            if (\array_key_exists('beneficiaires', $data) && null !== $data['beneficiaires']) {
                $values_3 = [];
                foreach ($data['beneficiaires'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, Beneficiaire::class, 'json', $context);
                }
                $object->setBeneficiaires($values_3);
                unset($data['beneficiaires']);
            } elseif (\array_key_exists('beneficiaires', $data) && null === $data['beneficiaires']) {
                $object->setBeneficiaires(null);
            }
            if (\array_key_exists('documents', $data) && null !== $data['documents']) {
                $values_4 = [];
                foreach ($data['documents'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, Document::class, 'json', $context);
                }
                $object->setDocuments($values_4);
                unset($data['documents']);
            } elseif (\array_key_exists('documents', $data) && null === $data['documents']) {
                $object->setDocuments(null);
            }
            if (\array_key_exists('publications', $data) && null !== $data['publications']) {
                $values_5 = [];
                foreach ($data['publications'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, RechercheGetResponse200ResultatsItempublicationsItem::class, 'json', $context);
                }
                $object->setPublications($values_5);
                unset($data['publications']);
            } elseif (\array_key_exists('publications', $data) && null === $data['publications']) {
                $object->setPublications(null);
            }
            if (\array_key_exists('nb_dirigeants_total', $data) && null !== $data['nb_dirigeants_total']) {
                $object->setNbDirigeantsTotal($data['nb_dirigeants_total']);
                unset($data['nb_dirigeants_total']);
            } elseif (\array_key_exists('nb_dirigeants_total', $data) && null === $data['nb_dirigeants_total']) {
                $object->setNbDirigeantsTotal(null);
            }
            if (\array_key_exists('nb_beneficiaires_total', $data) && null !== $data['nb_beneficiaires_total']) {
                $object->setNbBeneficiairesTotal($data['nb_beneficiaires_total']);
                unset($data['nb_beneficiaires_total']);
            } elseif (\array_key_exists('nb_beneficiaires_total', $data) && null === $data['nb_beneficiaires_total']) {
                $object->setNbBeneficiairesTotal(null);
            }
            if (\array_key_exists('nb_documents_avec_mentions', $data) && null !== $data['nb_documents_avec_mentions']) {
                $object->setNbDocumentsAvecMentions($data['nb_documents_avec_mentions']);
                unset($data['nb_documents_avec_mentions']);
            } elseif (\array_key_exists('nb_documents_avec_mentions', $data) && null === $data['nb_documents_avec_mentions']) {
                $object->setNbDocumentsAvecMentions(null);
            }
            if (\array_key_exists('nb_documents_total', $data) && null !== $data['nb_documents_total']) {
                $object->setNbDocumentsTotal($data['nb_documents_total']);
                unset($data['nb_documents_total']);
            } elseif (\array_key_exists('nb_documents_total', $data) && null === $data['nb_documents_total']) {
                $object->setNbDocumentsTotal(null);
            }
            if (\array_key_exists('nb_publications_avec_mentions', $data) && null !== $data['nb_publications_avec_mentions']) {
                $object->setNbPublicationsAvecMentions($data['nb_publications_avec_mentions']);
                unset($data['nb_publications_avec_mentions']);
            } elseif (\array_key_exists('nb_publications_avec_mentions', $data) && null === $data['nb_publications_avec_mentions']) {
                $object->setNbPublicationsAvecMentions(null);
            }
            if (\array_key_exists('nb_publications_total', $data) && null !== $data['nb_publications_total']) {
                $object->setNbPublicationsTotal($data['nb_publications_total']);
                unset($data['nb_publications_total']);
            } elseif (\array_key_exists('nb_publications_total', $data) && null === $data['nb_publications_total']) {
                $object->setNbPublicationsTotal(null);
            }
            foreach ($data as $key => $value_6) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_6;
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
            if ($object->isInitialized('dirigeants') && null !== $object->getDirigeants()) {
                $values_2 = [];
                foreach ($object->getDirigeants() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['dirigeants'] = $values_2;
            }
            if ($object->isInitialized('beneficiaires') && null !== $object->getBeneficiaires()) {
                $values_3 = [];
                foreach ($object->getBeneficiaires() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['beneficiaires'] = $values_3;
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $values_4 = [];
                foreach ($object->getDocuments() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['documents'] = $values_4;
            }
            if ($object->isInitialized('publications') && null !== $object->getPublications()) {
                $values_5 = [];
                foreach ($object->getPublications() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['publications'] = $values_5;
            }
            if ($object->isInitialized('nbDirigeantsTotal') && null !== $object->getNbDirigeantsTotal()) {
                $data['nb_dirigeants_total'] = $object->getNbDirigeantsTotal();
            }
            if ($object->isInitialized('nbBeneficiairesTotal') && null !== $object->getNbBeneficiairesTotal()) {
                $data['nb_beneficiaires_total'] = $object->getNbBeneficiairesTotal();
            }
            if ($object->isInitialized('nbDocumentsAvecMentions') && null !== $object->getNbDocumentsAvecMentions()) {
                $data['nb_documents_avec_mentions'] = $object->getNbDocumentsAvecMentions();
            }
            if ($object->isInitialized('nbDocumentsTotal') && null !== $object->getNbDocumentsTotal()) {
                $data['nb_documents_total'] = $object->getNbDocumentsTotal();
            }
            if ($object->isInitialized('nbPublicationsAvecMentions') && null !== $object->getNbPublicationsAvecMentions()) {
                $data['nb_publications_avec_mentions'] = $object->getNbPublicationsAvecMentions();
            }
            if ($object->isInitialized('nbPublicationsTotal') && null !== $object->getNbPublicationsTotal()) {
                $data['nb_publications_total'] = $object->getNbPublicationsTotal();
            }
            foreach ($object as $key => $value_6) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_6;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheGetResponse200ResultatsItem::class => false];
        }
    }
} else {
    class RechercheGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RechercheGetResponse200ResultatsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheGetResponse200ResultatsItem::class === $data::class;
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
            $object = new RechercheGetResponse200ResultatsItem();
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
                $object->setSiege($this->denormalizer->denormalize($data['siege'], EtablissementRecherche::class, 'json', $context));
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
            if (\array_key_exists('dirigeants', $data) && null !== $data['dirigeants']) {
                $values_2 = [];
                foreach ($data['dirigeants'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, RepresentantRecherche::class, 'json', $context);
                }
                $object->setDirigeants($values_2);
                unset($data['dirigeants']);
            } elseif (\array_key_exists('dirigeants', $data) && null === $data['dirigeants']) {
                $object->setDirigeants(null);
            }
            if (\array_key_exists('beneficiaires', $data) && null !== $data['beneficiaires']) {
                $values_3 = [];
                foreach ($data['beneficiaires'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, Beneficiaire::class, 'json', $context);
                }
                $object->setBeneficiaires($values_3);
                unset($data['beneficiaires']);
            } elseif (\array_key_exists('beneficiaires', $data) && null === $data['beneficiaires']) {
                $object->setBeneficiaires(null);
            }
            if (\array_key_exists('documents', $data) && null !== $data['documents']) {
                $values_4 = [];
                foreach ($data['documents'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, Document::class, 'json', $context);
                }
                $object->setDocuments($values_4);
                unset($data['documents']);
            } elseif (\array_key_exists('documents', $data) && null === $data['documents']) {
                $object->setDocuments(null);
            }
            if (\array_key_exists('publications', $data) && null !== $data['publications']) {
                $values_5 = [];
                foreach ($data['publications'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, RechercheGetResponse200ResultatsItempublicationsItem::class, 'json', $context);
                }
                $object->setPublications($values_5);
                unset($data['publications']);
            } elseif (\array_key_exists('publications', $data) && null === $data['publications']) {
                $object->setPublications(null);
            }
            if (\array_key_exists('nb_dirigeants_total', $data) && null !== $data['nb_dirigeants_total']) {
                $object->setNbDirigeantsTotal($data['nb_dirigeants_total']);
                unset($data['nb_dirigeants_total']);
            } elseif (\array_key_exists('nb_dirigeants_total', $data) && null === $data['nb_dirigeants_total']) {
                $object->setNbDirigeantsTotal(null);
            }
            if (\array_key_exists('nb_beneficiaires_total', $data) && null !== $data['nb_beneficiaires_total']) {
                $object->setNbBeneficiairesTotal($data['nb_beneficiaires_total']);
                unset($data['nb_beneficiaires_total']);
            } elseif (\array_key_exists('nb_beneficiaires_total', $data) && null === $data['nb_beneficiaires_total']) {
                $object->setNbBeneficiairesTotal(null);
            }
            if (\array_key_exists('nb_documents_avec_mentions', $data) && null !== $data['nb_documents_avec_mentions']) {
                $object->setNbDocumentsAvecMentions($data['nb_documents_avec_mentions']);
                unset($data['nb_documents_avec_mentions']);
            } elseif (\array_key_exists('nb_documents_avec_mentions', $data) && null === $data['nb_documents_avec_mentions']) {
                $object->setNbDocumentsAvecMentions(null);
            }
            if (\array_key_exists('nb_documents_total', $data) && null !== $data['nb_documents_total']) {
                $object->setNbDocumentsTotal($data['nb_documents_total']);
                unset($data['nb_documents_total']);
            } elseif (\array_key_exists('nb_documents_total', $data) && null === $data['nb_documents_total']) {
                $object->setNbDocumentsTotal(null);
            }
            if (\array_key_exists('nb_publications_avec_mentions', $data) && null !== $data['nb_publications_avec_mentions']) {
                $object->setNbPublicationsAvecMentions($data['nb_publications_avec_mentions']);
                unset($data['nb_publications_avec_mentions']);
            } elseif (\array_key_exists('nb_publications_avec_mentions', $data) && null === $data['nb_publications_avec_mentions']) {
                $object->setNbPublicationsAvecMentions(null);
            }
            if (\array_key_exists('nb_publications_total', $data) && null !== $data['nb_publications_total']) {
                $object->setNbPublicationsTotal($data['nb_publications_total']);
                unset($data['nb_publications_total']);
            } elseif (\array_key_exists('nb_publications_total', $data) && null === $data['nb_publications_total']) {
                $object->setNbPublicationsTotal(null);
            }
            foreach ($data as $key => $value_6) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_6;
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
            if ($object->isInitialized('dirigeants') && null !== $object->getDirigeants()) {
                $values_2 = [];
                foreach ($object->getDirigeants() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['dirigeants'] = $values_2;
            }
            if ($object->isInitialized('beneficiaires') && null !== $object->getBeneficiaires()) {
                $values_3 = [];
                foreach ($object->getBeneficiaires() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['beneficiaires'] = $values_3;
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $values_4 = [];
                foreach ($object->getDocuments() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['documents'] = $values_4;
            }
            if ($object->isInitialized('publications') && null !== $object->getPublications()) {
                $values_5 = [];
                foreach ($object->getPublications() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['publications'] = $values_5;
            }
            if ($object->isInitialized('nbDirigeantsTotal') && null !== $object->getNbDirigeantsTotal()) {
                $data['nb_dirigeants_total'] = $object->getNbDirigeantsTotal();
            }
            if ($object->isInitialized('nbBeneficiairesTotal') && null !== $object->getNbBeneficiairesTotal()) {
                $data['nb_beneficiaires_total'] = $object->getNbBeneficiairesTotal();
            }
            if ($object->isInitialized('nbDocumentsAvecMentions') && null !== $object->getNbDocumentsAvecMentions()) {
                $data['nb_documents_avec_mentions'] = $object->getNbDocumentsAvecMentions();
            }
            if ($object->isInitialized('nbDocumentsTotal') && null !== $object->getNbDocumentsTotal()) {
                $data['nb_documents_total'] = $object->getNbDocumentsTotal();
            }
            if ($object->isInitialized('nbPublicationsAvecMentions') && null !== $object->getNbPublicationsAvecMentions()) {
                $data['nb_publications_avec_mentions'] = $object->getNbPublicationsAvecMentions();
            }
            if ($object->isInitialized('nbPublicationsTotal') && null !== $object->getNbPublicationsTotal()) {
                $data['nb_publications_total'] = $object->getNbPublicationsTotal();
            }
            foreach ($object as $key => $value_6) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_6;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheGetResponse200ResultatsItem::class => false];
        }
    }
}
