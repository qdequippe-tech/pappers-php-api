<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\NotificationEntreprise;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseCapital;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseChiffreAffairesItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseCodeNaf;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseDateClotureExercice;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseDetailsEntreprise;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseDirigeantPartantItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseEnseigneItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseEntrepriseCessee;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseEntrepriseEmployeuse;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseFermetureEtablissementItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseFormeJuridique;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNomCommercialItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNomEntreprise;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouveauDirigeantItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouveauxComptesDisponiblesItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouveauxComptesPubliesItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouveauxStatutsPubliesItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelActePublieItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelEtablissementItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleAnnonceProcedureCollectivePublieeItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleAnnoncePublieeItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleAnnonceVentePublieeItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseObjetSocial;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseQualiteDirigeantItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseResultatItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseSiegeSocial;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseStatutDiffusion;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseStatutRcs;
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
    class NotificationEntrepriseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NotificationEntreprise::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationEntreprise::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new NotificationEntreprise();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('siren', $data) && null !== $data['siren']) {
                $object->setSiren($data['siren']);
                unset($data['siren']);
            } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
                $object->setSiren(null);
            }
            if (\array_key_exists('details_entreprise', $data) && null !== $data['details_entreprise']) {
                $object->setDetailsEntreprise($this->denormalizer->denormalize($data['details_entreprise'], NotificationEntrepriseDetailsEntreprise::class, 'json', $context));
                unset($data['details_entreprise']);
            } elseif (\array_key_exists('details_entreprise', $data) && null === $data['details_entreprise']) {
                $object->setDetailsEntreprise(null);
            }
            if (\array_key_exists('information', $data) && null !== $data['information']) {
                $object->setInformation($data['information']);
                unset($data['information']);
            } elseif (\array_key_exists('information', $data) && null === $data['information']) {
                $object->setInformation(null);
            }
            if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
                $object->setNomEntreprise($this->denormalizer->denormalize($data['nom_entreprise'], NotificationEntrepriseNomEntreprise::class, 'json', $context));
                unset($data['nom_entreprise']);
            } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
                $object->setNomEntreprise(null);
            }
            if (\array_key_exists('nom_commercial', $data) && null !== $data['nom_commercial']) {
                $values = [];
                foreach ($data['nom_commercial'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, NotificationEntrepriseNomCommercialItem::class, 'json', $context);
                }
                $object->setNomCommercial($values);
                unset($data['nom_commercial']);
            } elseif (\array_key_exists('nom_commercial', $data) && null === $data['nom_commercial']) {
                $object->setNomCommercial(null);
            }
            if (\array_key_exists('forme_juridique', $data) && null !== $data['forme_juridique']) {
                $object->setFormeJuridique($this->denormalizer->denormalize($data['forme_juridique'], NotificationEntrepriseFormeJuridique::class, 'json', $context));
                unset($data['forme_juridique']);
            } elseif (\array_key_exists('forme_juridique', $data) && null === $data['forme_juridique']) {
                $object->setFormeJuridique(null);
            }
            if (\array_key_exists('siege_social', $data) && null !== $data['siege_social']) {
                $object->setSiegeSocial($this->denormalizer->denormalize($data['siege_social'], NotificationEntrepriseSiegeSocial::class, 'json', $context));
                unset($data['siege_social']);
            } elseif (\array_key_exists('siege_social', $data) && null === $data['siege_social']) {
                $object->setSiegeSocial(null);
            }
            if (\array_key_exists('entreprise_cessee', $data) && null !== $data['entreprise_cessee']) {
                $object->setEntrepriseCessee($this->denormalizer->denormalize($data['entreprise_cessee'], NotificationEntrepriseEntrepriseCessee::class, 'json', $context));
                unset($data['entreprise_cessee']);
            } elseif (\array_key_exists('entreprise_cessee', $data) && null === $data['entreprise_cessee']) {
                $object->setEntrepriseCessee(null);
            }
            if (\array_key_exists('statut_diffusion', $data) && null !== $data['statut_diffusion']) {
                $object->setStatutDiffusion($this->denormalizer->denormalize($data['statut_diffusion'], NotificationEntrepriseStatutDiffusion::class, 'json', $context));
                unset($data['statut_diffusion']);
            } elseif (\array_key_exists('statut_diffusion', $data) && null === $data['statut_diffusion']) {
                $object->setStatutDiffusion(null);
            }
            if (\array_key_exists('code_naf', $data) && null !== $data['code_naf']) {
                $object->setCodeNaf($this->denormalizer->denormalize($data['code_naf'], NotificationEntrepriseCodeNaf::class, 'json', $context));
                unset($data['code_naf']);
            } elseif (\array_key_exists('code_naf', $data) && null === $data['code_naf']) {
                $object->setCodeNaf(null);
            }
            if (\array_key_exists('entreprise_employeuse', $data) && null !== $data['entreprise_employeuse']) {
                $object->setEntrepriseEmployeuse($this->denormalizer->denormalize($data['entreprise_employeuse'], NotificationEntrepriseEntrepriseEmployeuse::class, 'json', $context));
                unset($data['entreprise_employeuse']);
            } elseif (\array_key_exists('entreprise_employeuse', $data) && null === $data['entreprise_employeuse']) {
                $object->setEntrepriseEmployeuse(null);
            }
            if (\array_key_exists('enseigne', $data) && null !== $data['enseigne']) {
                $values_1 = [];
                foreach ($data['enseigne'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, NotificationEntrepriseEnseigneItem::class, 'json', $context);
                }
                $object->setEnseigne($values_1);
                unset($data['enseigne']);
            } elseif (\array_key_exists('enseigne', $data) && null === $data['enseigne']) {
                $object->setEnseigne(null);
            }
            if (\array_key_exists('nouvel_etablissement', $data) && null !== $data['nouvel_etablissement']) {
                $values_2 = [];
                foreach ($data['nouvel_etablissement'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, NotificationEntrepriseNouvelEtablissementItem::class, 'json', $context);
                }
                $object->setNouvelEtablissement($values_2);
                unset($data['nouvel_etablissement']);
            } elseif (\array_key_exists('nouvel_etablissement', $data) && null === $data['nouvel_etablissement']) {
                $object->setNouvelEtablissement(null);
            }
            if (\array_key_exists('fermeture_etablissement', $data) && null !== $data['fermeture_etablissement']) {
                $values_3 = [];
                foreach ($data['fermeture_etablissement'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, NotificationEntrepriseFermetureEtablissementItem::class, 'json', $context);
                }
                $object->setFermetureEtablissement($values_3);
                unset($data['fermeture_etablissement']);
            } elseif (\array_key_exists('fermeture_etablissement', $data) && null === $data['fermeture_etablissement']) {
                $object->setFermetureEtablissement(null);
            }
            if (\array_key_exists('statut_rcs', $data) && null !== $data['statut_rcs']) {
                $object->setStatutRcs($this->denormalizer->denormalize($data['statut_rcs'], NotificationEntrepriseStatutRcs::class, 'json', $context));
                unset($data['statut_rcs']);
            } elseif (\array_key_exists('statut_rcs', $data) && null === $data['statut_rcs']) {
                $object->setStatutRcs(null);
            }
            if (\array_key_exists('objet_social', $data) && null !== $data['objet_social']) {
                $object->setObjetSocial($this->denormalizer->denormalize($data['objet_social'], NotificationEntrepriseObjetSocial::class, 'json', $context));
                unset($data['objet_social']);
            } elseif (\array_key_exists('objet_social', $data) && null === $data['objet_social']) {
                $object->setObjetSocial(null);
            }
            if (\array_key_exists('capital', $data) && null !== $data['capital']) {
                $object->setCapital($this->denormalizer->denormalize($data['capital'], NotificationEntrepriseCapital::class, 'json', $context));
                unset($data['capital']);
            } elseif (\array_key_exists('capital', $data) && null === $data['capital']) {
                $object->setCapital(null);
            }
            if (\array_key_exists('date_cloture_exercice', $data) && null !== $data['date_cloture_exercice']) {
                $object->setDateClotureExercice($this->denormalizer->denormalize($data['date_cloture_exercice'], NotificationEntrepriseDateClotureExercice::class, 'json', $context));
                unset($data['date_cloture_exercice']);
            } elseif (\array_key_exists('date_cloture_exercice', $data) && null === $data['date_cloture_exercice']) {
                $object->setDateClotureExercice(null);
            }
            if (\array_key_exists('chiffre_affaires', $data) && null !== $data['chiffre_affaires']) {
                $values_4 = [];
                foreach ($data['chiffre_affaires'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, NotificationEntrepriseChiffreAffairesItem::class, 'json', $context);
                }
                $object->setChiffreAffaires($values_4);
                unset($data['chiffre_affaires']);
            } elseif (\array_key_exists('chiffre_affaires', $data) && null === $data['chiffre_affaires']) {
                $object->setChiffreAffaires(null);
            }
            if (\array_key_exists('resultat', $data) && null !== $data['resultat']) {
                $values_5 = [];
                foreach ($data['resultat'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, NotificationEntrepriseResultatItem::class, 'json', $context);
                }
                $object->setResultat($values_5);
                unset($data['resultat']);
            } elseif (\array_key_exists('resultat', $data) && null === $data['resultat']) {
                $object->setResultat(null);
            }
            if (\array_key_exists('nouveaux_comptes_disponibles', $data) && null !== $data['nouveaux_comptes_disponibles']) {
                $values_6 = [];
                foreach ($data['nouveaux_comptes_disponibles'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, NotificationEntrepriseNouveauxComptesDisponiblesItem::class, 'json', $context);
                }
                $object->setNouveauxComptesDisponibles($values_6);
                unset($data['nouveaux_comptes_disponibles']);
            } elseif (\array_key_exists('nouveaux_comptes_disponibles', $data) && null === $data['nouveaux_comptes_disponibles']) {
                $object->setNouveauxComptesDisponibles(null);
            }
            if (\array_key_exists('nouveaux_comptes_publies', $data) && null !== $data['nouveaux_comptes_publies']) {
                $values_7 = [];
                foreach ($data['nouveaux_comptes_publies'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, NotificationEntrepriseNouveauxComptesPubliesItem::class, 'json', $context);
                }
                $object->setNouveauxComptesPublies($values_7);
                unset($data['nouveaux_comptes_publies']);
            } elseif (\array_key_exists('nouveaux_comptes_publies', $data) && null === $data['nouveaux_comptes_publies']) {
                $object->setNouveauxComptesPublies(null);
            }
            if (\array_key_exists('nouvelle_annonce_procedure_collective_publiee', $data) && null !== $data['nouvelle_annonce_procedure_collective_publiee']) {
                $values_8 = [];
                foreach ($data['nouvelle_annonce_procedure_collective_publiee'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, NotificationEntrepriseNouvelleAnnonceProcedureCollectivePublieeItem::class, 'json', $context);
                }
                $object->setNouvelleAnnonceProcedureCollectivePubliee($values_8);
                unset($data['nouvelle_annonce_procedure_collective_publiee']);
            } elseif (\array_key_exists('nouvelle_annonce_procedure_collective_publiee', $data) && null === $data['nouvelle_annonce_procedure_collective_publiee']) {
                $object->setNouvelleAnnonceProcedureCollectivePubliee(null);
            }
            if (\array_key_exists('nouvelle_annonce_vente_publiee', $data) && null !== $data['nouvelle_annonce_vente_publiee']) {
                $values_9 = [];
                foreach ($data['nouvelle_annonce_vente_publiee'] as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, NotificationEntrepriseNouvelleAnnonceVentePublieeItem::class, 'json', $context);
                }
                $object->setNouvelleAnnonceVentePubliee($values_9);
                unset($data['nouvelle_annonce_vente_publiee']);
            } elseif (\array_key_exists('nouvelle_annonce_vente_publiee', $data) && null === $data['nouvelle_annonce_vente_publiee']) {
                $object->setNouvelleAnnonceVentePubliee(null);
            }
            if (\array_key_exists('nouvelle_annonce_publiee', $data) && null !== $data['nouvelle_annonce_publiee']) {
                $values_10 = [];
                foreach ($data['nouvelle_annonce_publiee'] as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, NotificationEntrepriseNouvelleAnnoncePublieeItem::class, 'json', $context);
                }
                $object->setNouvelleAnnoncePubliee($values_10);
                unset($data['nouvelle_annonce_publiee']);
            } elseif (\array_key_exists('nouvelle_annonce_publiee', $data) && null === $data['nouvelle_annonce_publiee']) {
                $object->setNouvelleAnnoncePubliee(null);
            }
            if (\array_key_exists('nouveaux_statuts_publies', $data) && null !== $data['nouveaux_statuts_publies']) {
                $values_11 = [];
                foreach ($data['nouveaux_statuts_publies'] as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, NotificationEntrepriseNouveauxStatutsPubliesItem::class, 'json', $context);
                }
                $object->setNouveauxStatutsPublies($values_11);
                unset($data['nouveaux_statuts_publies']);
            } elseif (\array_key_exists('nouveaux_statuts_publies', $data) && null === $data['nouveaux_statuts_publies']) {
                $object->setNouveauxStatutsPublies(null);
            }
            if (\array_key_exists('nouvel_acte_publie', $data) && null !== $data['nouvel_acte_publie']) {
                $values_12 = [];
                foreach ($data['nouvel_acte_publie'] as $value_12) {
                    $values_12[] = $this->denormalizer->denormalize($value_12, NotificationEntrepriseNouvelActePublieItem::class, 'json', $context);
                }
                $object->setNouvelActePublie($values_12);
                unset($data['nouvel_acte_publie']);
            } elseif (\array_key_exists('nouvel_acte_publie', $data) && null === $data['nouvel_acte_publie']) {
                $object->setNouvelActePublie(null);
            }
            if (\array_key_exists('nouvelle_declaration_beneficiaires_effectif_publiee', $data) && null !== $data['nouvelle_declaration_beneficiaires_effectif_publiee']) {
                $values_13 = [];
                foreach ($data['nouvelle_declaration_beneficiaires_effectif_publiee'] as $value_13) {
                    $values_13[] = $this->denormalizer->denormalize($value_13, NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem::class, 'json', $context);
                }
                $object->setNouvelleDeclarationBeneficiairesEffectifPubliee($values_13);
                unset($data['nouvelle_declaration_beneficiaires_effectif_publiee']);
            } elseif (\array_key_exists('nouvelle_declaration_beneficiaires_effectif_publiee', $data) && null === $data['nouvelle_declaration_beneficiaires_effectif_publiee']) {
                $object->setNouvelleDeclarationBeneficiairesEffectifPubliee(null);
            }
            if (\array_key_exists('nouveau_dirigeant', $data) && null !== $data['nouveau_dirigeant']) {
                $values_14 = [];
                foreach ($data['nouveau_dirigeant'] as $value_14) {
                    $values_14[] = $this->denormalizer->denormalize($value_14, NotificationEntrepriseNouveauDirigeantItem::class, 'json', $context);
                }
                $object->setNouveauDirigeant($values_14);
                unset($data['nouveau_dirigeant']);
            } elseif (\array_key_exists('nouveau_dirigeant', $data) && null === $data['nouveau_dirigeant']) {
                $object->setNouveauDirigeant(null);
            }
            if (\array_key_exists('dirigeant_partant', $data) && null !== $data['dirigeant_partant']) {
                $values_15 = [];
                foreach ($data['dirigeant_partant'] as $value_15) {
                    $values_15[] = $this->denormalizer->denormalize($value_15, NotificationEntrepriseDirigeantPartantItem::class, 'json', $context);
                }
                $object->setDirigeantPartant($values_15);
                unset($data['dirigeant_partant']);
            } elseif (\array_key_exists('dirigeant_partant', $data) && null === $data['dirigeant_partant']) {
                $object->setDirigeantPartant(null);
            }
            if (\array_key_exists('qualite_dirigeant', $data) && null !== $data['qualite_dirigeant']) {
                $values_16 = [];
                foreach ($data['qualite_dirigeant'] as $value_16) {
                    $values_16[] = $this->denormalizer->denormalize($value_16, NotificationEntrepriseQualiteDirigeantItem::class, 'json', $context);
                }
                $object->setQualiteDirigeant($values_16);
                unset($data['qualite_dirigeant']);
            } elseif (\array_key_exists('qualite_dirigeant', $data) && null === $data['qualite_dirigeant']) {
                $object->setQualiteDirigeant(null);
            }
            foreach ($data as $key => $value_17) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_17;
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
            if ($object->isInitialized('detailsEntreprise') && null !== $object->getDetailsEntreprise()) {
                $data['details_entreprise'] = $this->normalizer->normalize($object->getDetailsEntreprise(), 'json', $context);
            }
            if ($object->isInitialized('information') && null !== $object->getInformation()) {
                $data['information'] = $object->getInformation();
            }
            if ($object->isInitialized('nomEntreprise') && null !== $object->getNomEntreprise()) {
                $data['nom_entreprise'] = $this->normalizer->normalize($object->getNomEntreprise(), 'json', $context);
            }
            if ($object->isInitialized('nomCommercial') && null !== $object->getNomCommercial()) {
                $values = [];
                foreach ($object->getNomCommercial() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['nom_commercial'] = $values;
            }
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['forme_juridique'] = $this->normalizer->normalize($object->getFormeJuridique(), 'json', $context);
            }
            if ($object->isInitialized('siegeSocial') && null !== $object->getSiegeSocial()) {
                $data['siege_social'] = $this->normalizer->normalize($object->getSiegeSocial(), 'json', $context);
            }
            if ($object->isInitialized('entrepriseCessee') && null !== $object->getEntrepriseCessee()) {
                $data['entreprise_cessee'] = $this->normalizer->normalize($object->getEntrepriseCessee(), 'json', $context);
            }
            if ($object->isInitialized('statutDiffusion') && null !== $object->getStatutDiffusion()) {
                $data['statut_diffusion'] = $this->normalizer->normalize($object->getStatutDiffusion(), 'json', $context);
            }
            if ($object->isInitialized('codeNaf') && null !== $object->getCodeNaf()) {
                $data['code_naf'] = $this->normalizer->normalize($object->getCodeNaf(), 'json', $context);
            }
            if ($object->isInitialized('entrepriseEmployeuse') && null !== $object->getEntrepriseEmployeuse()) {
                $data['entreprise_employeuse'] = $this->normalizer->normalize($object->getEntrepriseEmployeuse(), 'json', $context);
            }
            if ($object->isInitialized('enseigne') && null !== $object->getEnseigne()) {
                $values_1 = [];
                foreach ($object->getEnseigne() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['enseigne'] = $values_1;
            }
            if ($object->isInitialized('nouvelEtablissement') && null !== $object->getNouvelEtablissement()) {
                $values_2 = [];
                foreach ($object->getNouvelEtablissement() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['nouvel_etablissement'] = $values_2;
            }
            if ($object->isInitialized('fermetureEtablissement') && null !== $object->getFermetureEtablissement()) {
                $values_3 = [];
                foreach ($object->getFermetureEtablissement() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['fermeture_etablissement'] = $values_3;
            }
            if ($object->isInitialized('statutRcs') && null !== $object->getStatutRcs()) {
                $data['statut_rcs'] = $this->normalizer->normalize($object->getStatutRcs(), 'json', $context);
            }
            if ($object->isInitialized('objetSocial') && null !== $object->getObjetSocial()) {
                $data['objet_social'] = $this->normalizer->normalize($object->getObjetSocial(), 'json', $context);
            }
            if ($object->isInitialized('capital') && null !== $object->getCapital()) {
                $data['capital'] = $this->normalizer->normalize($object->getCapital(), 'json', $context);
            }
            if ($object->isInitialized('dateClotureExercice') && null !== $object->getDateClotureExercice()) {
                $data['date_cloture_exercice'] = $this->normalizer->normalize($object->getDateClotureExercice(), 'json', $context);
            }
            if ($object->isInitialized('chiffreAffaires') && null !== $object->getChiffreAffaires()) {
                $values_4 = [];
                foreach ($object->getChiffreAffaires() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['chiffre_affaires'] = $values_4;
            }
            if ($object->isInitialized('resultat') && null !== $object->getResultat()) {
                $values_5 = [];
                foreach ($object->getResultat() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['resultat'] = $values_5;
            }
            if ($object->isInitialized('nouveauxComptesDisponibles') && null !== $object->getNouveauxComptesDisponibles()) {
                $values_6 = [];
                foreach ($object->getNouveauxComptesDisponibles() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['nouveaux_comptes_disponibles'] = $values_6;
            }
            if ($object->isInitialized('nouveauxComptesPublies') && null !== $object->getNouveauxComptesPublies()) {
                $values_7 = [];
                foreach ($object->getNouveauxComptesPublies() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['nouveaux_comptes_publies'] = $values_7;
            }
            if ($object->isInitialized('nouvelleAnnonceProcedureCollectivePubliee') && null !== $object->getNouvelleAnnonceProcedureCollectivePubliee()) {
                $values_8 = [];
                foreach ($object->getNouvelleAnnonceProcedureCollectivePubliee() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['nouvelle_annonce_procedure_collective_publiee'] = $values_8;
            }
            if ($object->isInitialized('nouvelleAnnonceVentePubliee') && null !== $object->getNouvelleAnnonceVentePubliee()) {
                $values_9 = [];
                foreach ($object->getNouvelleAnnonceVentePubliee() as $value_9) {
                    $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
                }
                $data['nouvelle_annonce_vente_publiee'] = $values_9;
            }
            if ($object->isInitialized('nouvelleAnnoncePubliee') && null !== $object->getNouvelleAnnoncePubliee()) {
                $values_10 = [];
                foreach ($object->getNouvelleAnnoncePubliee() as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $data['nouvelle_annonce_publiee'] = $values_10;
            }
            if ($object->isInitialized('nouveauxStatutsPublies') && null !== $object->getNouveauxStatutsPublies()) {
                $values_11 = [];
                foreach ($object->getNouveauxStatutsPublies() as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $data['nouveaux_statuts_publies'] = $values_11;
            }
            if ($object->isInitialized('nouvelActePublie') && null !== $object->getNouvelActePublie()) {
                $values_12 = [];
                foreach ($object->getNouvelActePublie() as $value_12) {
                    $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
                }
                $data['nouvel_acte_publie'] = $values_12;
            }
            if ($object->isInitialized('nouvelleDeclarationBeneficiairesEffectifPubliee') && null !== $object->getNouvelleDeclarationBeneficiairesEffectifPubliee()) {
                $values_13 = [];
                foreach ($object->getNouvelleDeclarationBeneficiairesEffectifPubliee() as $value_13) {
                    $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
                }
                $data['nouvelle_declaration_beneficiaires_effectif_publiee'] = $values_13;
            }
            if ($object->isInitialized('nouveauDirigeant') && null !== $object->getNouveauDirigeant()) {
                $values_14 = [];
                foreach ($object->getNouveauDirigeant() as $value_14) {
                    $values_14[] = $this->normalizer->normalize($value_14, 'json', $context);
                }
                $data['nouveau_dirigeant'] = $values_14;
            }
            if ($object->isInitialized('dirigeantPartant') && null !== $object->getDirigeantPartant()) {
                $values_15 = [];
                foreach ($object->getDirigeantPartant() as $value_15) {
                    $values_15[] = $this->normalizer->normalize($value_15, 'json', $context);
                }
                $data['dirigeant_partant'] = $values_15;
            }
            if ($object->isInitialized('qualiteDirigeant') && null !== $object->getQualiteDirigeant()) {
                $values_16 = [];
                foreach ($object->getQualiteDirigeant() as $value_16) {
                    $values_16[] = $this->normalizer->normalize($value_16, 'json', $context);
                }
                $data['qualite_dirigeant'] = $values_16;
            }
            foreach ($object as $key => $value_17) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_17;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationEntreprise::class => false];
        }
    }
} else {
    class NotificationEntrepriseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NotificationEntreprise::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && NotificationEntreprise::class === $data::class;
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
            $object = new NotificationEntreprise();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('siren', $data) && null !== $data['siren']) {
                $object->setSiren($data['siren']);
                unset($data['siren']);
            } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
                $object->setSiren(null);
            }
            if (\array_key_exists('details_entreprise', $data) && null !== $data['details_entreprise']) {
                $object->setDetailsEntreprise($this->denormalizer->denormalize($data['details_entreprise'], NotificationEntrepriseDetailsEntreprise::class, 'json', $context));
                unset($data['details_entreprise']);
            } elseif (\array_key_exists('details_entreprise', $data) && null === $data['details_entreprise']) {
                $object->setDetailsEntreprise(null);
            }
            if (\array_key_exists('information', $data) && null !== $data['information']) {
                $object->setInformation($data['information']);
                unset($data['information']);
            } elseif (\array_key_exists('information', $data) && null === $data['information']) {
                $object->setInformation(null);
            }
            if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
                $object->setNomEntreprise($this->denormalizer->denormalize($data['nom_entreprise'], NotificationEntrepriseNomEntreprise::class, 'json', $context));
                unset($data['nom_entreprise']);
            } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
                $object->setNomEntreprise(null);
            }
            if (\array_key_exists('nom_commercial', $data) && null !== $data['nom_commercial']) {
                $values = [];
                foreach ($data['nom_commercial'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, NotificationEntrepriseNomCommercialItem::class, 'json', $context);
                }
                $object->setNomCommercial($values);
                unset($data['nom_commercial']);
            } elseif (\array_key_exists('nom_commercial', $data) && null === $data['nom_commercial']) {
                $object->setNomCommercial(null);
            }
            if (\array_key_exists('forme_juridique', $data) && null !== $data['forme_juridique']) {
                $object->setFormeJuridique($this->denormalizer->denormalize($data['forme_juridique'], NotificationEntrepriseFormeJuridique::class, 'json', $context));
                unset($data['forme_juridique']);
            } elseif (\array_key_exists('forme_juridique', $data) && null === $data['forme_juridique']) {
                $object->setFormeJuridique(null);
            }
            if (\array_key_exists('siege_social', $data) && null !== $data['siege_social']) {
                $object->setSiegeSocial($this->denormalizer->denormalize($data['siege_social'], NotificationEntrepriseSiegeSocial::class, 'json', $context));
                unset($data['siege_social']);
            } elseif (\array_key_exists('siege_social', $data) && null === $data['siege_social']) {
                $object->setSiegeSocial(null);
            }
            if (\array_key_exists('entreprise_cessee', $data) && null !== $data['entreprise_cessee']) {
                $object->setEntrepriseCessee($this->denormalizer->denormalize($data['entreprise_cessee'], NotificationEntrepriseEntrepriseCessee::class, 'json', $context));
                unset($data['entreprise_cessee']);
            } elseif (\array_key_exists('entreprise_cessee', $data) && null === $data['entreprise_cessee']) {
                $object->setEntrepriseCessee(null);
            }
            if (\array_key_exists('statut_diffusion', $data) && null !== $data['statut_diffusion']) {
                $object->setStatutDiffusion($this->denormalizer->denormalize($data['statut_diffusion'], NotificationEntrepriseStatutDiffusion::class, 'json', $context));
                unset($data['statut_diffusion']);
            } elseif (\array_key_exists('statut_diffusion', $data) && null === $data['statut_diffusion']) {
                $object->setStatutDiffusion(null);
            }
            if (\array_key_exists('code_naf', $data) && null !== $data['code_naf']) {
                $object->setCodeNaf($this->denormalizer->denormalize($data['code_naf'], NotificationEntrepriseCodeNaf::class, 'json', $context));
                unset($data['code_naf']);
            } elseif (\array_key_exists('code_naf', $data) && null === $data['code_naf']) {
                $object->setCodeNaf(null);
            }
            if (\array_key_exists('entreprise_employeuse', $data) && null !== $data['entreprise_employeuse']) {
                $object->setEntrepriseEmployeuse($this->denormalizer->denormalize($data['entreprise_employeuse'], NotificationEntrepriseEntrepriseEmployeuse::class, 'json', $context));
                unset($data['entreprise_employeuse']);
            } elseif (\array_key_exists('entreprise_employeuse', $data) && null === $data['entreprise_employeuse']) {
                $object->setEntrepriseEmployeuse(null);
            }
            if (\array_key_exists('enseigne', $data) && null !== $data['enseigne']) {
                $values_1 = [];
                foreach ($data['enseigne'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, NotificationEntrepriseEnseigneItem::class, 'json', $context);
                }
                $object->setEnseigne($values_1);
                unset($data['enseigne']);
            } elseif (\array_key_exists('enseigne', $data) && null === $data['enseigne']) {
                $object->setEnseigne(null);
            }
            if (\array_key_exists('nouvel_etablissement', $data) && null !== $data['nouvel_etablissement']) {
                $values_2 = [];
                foreach ($data['nouvel_etablissement'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, NotificationEntrepriseNouvelEtablissementItem::class, 'json', $context);
                }
                $object->setNouvelEtablissement($values_2);
                unset($data['nouvel_etablissement']);
            } elseif (\array_key_exists('nouvel_etablissement', $data) && null === $data['nouvel_etablissement']) {
                $object->setNouvelEtablissement(null);
            }
            if (\array_key_exists('fermeture_etablissement', $data) && null !== $data['fermeture_etablissement']) {
                $values_3 = [];
                foreach ($data['fermeture_etablissement'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, NotificationEntrepriseFermetureEtablissementItem::class, 'json', $context);
                }
                $object->setFermetureEtablissement($values_3);
                unset($data['fermeture_etablissement']);
            } elseif (\array_key_exists('fermeture_etablissement', $data) && null === $data['fermeture_etablissement']) {
                $object->setFermetureEtablissement(null);
            }
            if (\array_key_exists('statut_rcs', $data) && null !== $data['statut_rcs']) {
                $object->setStatutRcs($this->denormalizer->denormalize($data['statut_rcs'], NotificationEntrepriseStatutRcs::class, 'json', $context));
                unset($data['statut_rcs']);
            } elseif (\array_key_exists('statut_rcs', $data) && null === $data['statut_rcs']) {
                $object->setStatutRcs(null);
            }
            if (\array_key_exists('objet_social', $data) && null !== $data['objet_social']) {
                $object->setObjetSocial($this->denormalizer->denormalize($data['objet_social'], NotificationEntrepriseObjetSocial::class, 'json', $context));
                unset($data['objet_social']);
            } elseif (\array_key_exists('objet_social', $data) && null === $data['objet_social']) {
                $object->setObjetSocial(null);
            }
            if (\array_key_exists('capital', $data) && null !== $data['capital']) {
                $object->setCapital($this->denormalizer->denormalize($data['capital'], NotificationEntrepriseCapital::class, 'json', $context));
                unset($data['capital']);
            } elseif (\array_key_exists('capital', $data) && null === $data['capital']) {
                $object->setCapital(null);
            }
            if (\array_key_exists('date_cloture_exercice', $data) && null !== $data['date_cloture_exercice']) {
                $object->setDateClotureExercice($this->denormalizer->denormalize($data['date_cloture_exercice'], NotificationEntrepriseDateClotureExercice::class, 'json', $context));
                unset($data['date_cloture_exercice']);
            } elseif (\array_key_exists('date_cloture_exercice', $data) && null === $data['date_cloture_exercice']) {
                $object->setDateClotureExercice(null);
            }
            if (\array_key_exists('chiffre_affaires', $data) && null !== $data['chiffre_affaires']) {
                $values_4 = [];
                foreach ($data['chiffre_affaires'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, NotificationEntrepriseChiffreAffairesItem::class, 'json', $context);
                }
                $object->setChiffreAffaires($values_4);
                unset($data['chiffre_affaires']);
            } elseif (\array_key_exists('chiffre_affaires', $data) && null === $data['chiffre_affaires']) {
                $object->setChiffreAffaires(null);
            }
            if (\array_key_exists('resultat', $data) && null !== $data['resultat']) {
                $values_5 = [];
                foreach ($data['resultat'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, NotificationEntrepriseResultatItem::class, 'json', $context);
                }
                $object->setResultat($values_5);
                unset($data['resultat']);
            } elseif (\array_key_exists('resultat', $data) && null === $data['resultat']) {
                $object->setResultat(null);
            }
            if (\array_key_exists('nouveaux_comptes_disponibles', $data) && null !== $data['nouveaux_comptes_disponibles']) {
                $values_6 = [];
                foreach ($data['nouveaux_comptes_disponibles'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, NotificationEntrepriseNouveauxComptesDisponiblesItem::class, 'json', $context);
                }
                $object->setNouveauxComptesDisponibles($values_6);
                unset($data['nouveaux_comptes_disponibles']);
            } elseif (\array_key_exists('nouveaux_comptes_disponibles', $data) && null === $data['nouveaux_comptes_disponibles']) {
                $object->setNouveauxComptesDisponibles(null);
            }
            if (\array_key_exists('nouveaux_comptes_publies', $data) && null !== $data['nouveaux_comptes_publies']) {
                $values_7 = [];
                foreach ($data['nouveaux_comptes_publies'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, NotificationEntrepriseNouveauxComptesPubliesItem::class, 'json', $context);
                }
                $object->setNouveauxComptesPublies($values_7);
                unset($data['nouveaux_comptes_publies']);
            } elseif (\array_key_exists('nouveaux_comptes_publies', $data) && null === $data['nouveaux_comptes_publies']) {
                $object->setNouveauxComptesPublies(null);
            }
            if (\array_key_exists('nouvelle_annonce_procedure_collective_publiee', $data) && null !== $data['nouvelle_annonce_procedure_collective_publiee']) {
                $values_8 = [];
                foreach ($data['nouvelle_annonce_procedure_collective_publiee'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, NotificationEntrepriseNouvelleAnnonceProcedureCollectivePublieeItem::class, 'json', $context);
                }
                $object->setNouvelleAnnonceProcedureCollectivePubliee($values_8);
                unset($data['nouvelle_annonce_procedure_collective_publiee']);
            } elseif (\array_key_exists('nouvelle_annonce_procedure_collective_publiee', $data) && null === $data['nouvelle_annonce_procedure_collective_publiee']) {
                $object->setNouvelleAnnonceProcedureCollectivePubliee(null);
            }
            if (\array_key_exists('nouvelle_annonce_vente_publiee', $data) && null !== $data['nouvelle_annonce_vente_publiee']) {
                $values_9 = [];
                foreach ($data['nouvelle_annonce_vente_publiee'] as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, NotificationEntrepriseNouvelleAnnonceVentePublieeItem::class, 'json', $context);
                }
                $object->setNouvelleAnnonceVentePubliee($values_9);
                unset($data['nouvelle_annonce_vente_publiee']);
            } elseif (\array_key_exists('nouvelle_annonce_vente_publiee', $data) && null === $data['nouvelle_annonce_vente_publiee']) {
                $object->setNouvelleAnnonceVentePubliee(null);
            }
            if (\array_key_exists('nouvelle_annonce_publiee', $data) && null !== $data['nouvelle_annonce_publiee']) {
                $values_10 = [];
                foreach ($data['nouvelle_annonce_publiee'] as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, NotificationEntrepriseNouvelleAnnoncePublieeItem::class, 'json', $context);
                }
                $object->setNouvelleAnnoncePubliee($values_10);
                unset($data['nouvelle_annonce_publiee']);
            } elseif (\array_key_exists('nouvelle_annonce_publiee', $data) && null === $data['nouvelle_annonce_publiee']) {
                $object->setNouvelleAnnoncePubliee(null);
            }
            if (\array_key_exists('nouveaux_statuts_publies', $data) && null !== $data['nouveaux_statuts_publies']) {
                $values_11 = [];
                foreach ($data['nouveaux_statuts_publies'] as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, NotificationEntrepriseNouveauxStatutsPubliesItem::class, 'json', $context);
                }
                $object->setNouveauxStatutsPublies($values_11);
                unset($data['nouveaux_statuts_publies']);
            } elseif (\array_key_exists('nouveaux_statuts_publies', $data) && null === $data['nouveaux_statuts_publies']) {
                $object->setNouveauxStatutsPublies(null);
            }
            if (\array_key_exists('nouvel_acte_publie', $data) && null !== $data['nouvel_acte_publie']) {
                $values_12 = [];
                foreach ($data['nouvel_acte_publie'] as $value_12) {
                    $values_12[] = $this->denormalizer->denormalize($value_12, NotificationEntrepriseNouvelActePublieItem::class, 'json', $context);
                }
                $object->setNouvelActePublie($values_12);
                unset($data['nouvel_acte_publie']);
            } elseif (\array_key_exists('nouvel_acte_publie', $data) && null === $data['nouvel_acte_publie']) {
                $object->setNouvelActePublie(null);
            }
            if (\array_key_exists('nouvelle_declaration_beneficiaires_effectif_publiee', $data) && null !== $data['nouvelle_declaration_beneficiaires_effectif_publiee']) {
                $values_13 = [];
                foreach ($data['nouvelle_declaration_beneficiaires_effectif_publiee'] as $value_13) {
                    $values_13[] = $this->denormalizer->denormalize($value_13, NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem::class, 'json', $context);
                }
                $object->setNouvelleDeclarationBeneficiairesEffectifPubliee($values_13);
                unset($data['nouvelle_declaration_beneficiaires_effectif_publiee']);
            } elseif (\array_key_exists('nouvelle_declaration_beneficiaires_effectif_publiee', $data) && null === $data['nouvelle_declaration_beneficiaires_effectif_publiee']) {
                $object->setNouvelleDeclarationBeneficiairesEffectifPubliee(null);
            }
            if (\array_key_exists('nouveau_dirigeant', $data) && null !== $data['nouveau_dirigeant']) {
                $values_14 = [];
                foreach ($data['nouveau_dirigeant'] as $value_14) {
                    $values_14[] = $this->denormalizer->denormalize($value_14, NotificationEntrepriseNouveauDirigeantItem::class, 'json', $context);
                }
                $object->setNouveauDirigeant($values_14);
                unset($data['nouveau_dirigeant']);
            } elseif (\array_key_exists('nouveau_dirigeant', $data) && null === $data['nouveau_dirigeant']) {
                $object->setNouveauDirigeant(null);
            }
            if (\array_key_exists('dirigeant_partant', $data) && null !== $data['dirigeant_partant']) {
                $values_15 = [];
                foreach ($data['dirigeant_partant'] as $value_15) {
                    $values_15[] = $this->denormalizer->denormalize($value_15, NotificationEntrepriseDirigeantPartantItem::class, 'json', $context);
                }
                $object->setDirigeantPartant($values_15);
                unset($data['dirigeant_partant']);
            } elseif (\array_key_exists('dirigeant_partant', $data) && null === $data['dirigeant_partant']) {
                $object->setDirigeantPartant(null);
            }
            if (\array_key_exists('qualite_dirigeant', $data) && null !== $data['qualite_dirigeant']) {
                $values_16 = [];
                foreach ($data['qualite_dirigeant'] as $value_16) {
                    $values_16[] = $this->denormalizer->denormalize($value_16, NotificationEntrepriseQualiteDirigeantItem::class, 'json', $context);
                }
                $object->setQualiteDirigeant($values_16);
                unset($data['qualite_dirigeant']);
            } elseif (\array_key_exists('qualite_dirigeant', $data) && null === $data['qualite_dirigeant']) {
                $object->setQualiteDirigeant(null);
            }
            foreach ($data as $key => $value_17) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_17;
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
            if ($object->isInitialized('detailsEntreprise') && null !== $object->getDetailsEntreprise()) {
                $data['details_entreprise'] = $this->normalizer->normalize($object->getDetailsEntreprise(), 'json', $context);
            }
            if ($object->isInitialized('information') && null !== $object->getInformation()) {
                $data['information'] = $object->getInformation();
            }
            if ($object->isInitialized('nomEntreprise') && null !== $object->getNomEntreprise()) {
                $data['nom_entreprise'] = $this->normalizer->normalize($object->getNomEntreprise(), 'json', $context);
            }
            if ($object->isInitialized('nomCommercial') && null !== $object->getNomCommercial()) {
                $values = [];
                foreach ($object->getNomCommercial() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['nom_commercial'] = $values;
            }
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['forme_juridique'] = $this->normalizer->normalize($object->getFormeJuridique(), 'json', $context);
            }
            if ($object->isInitialized('siegeSocial') && null !== $object->getSiegeSocial()) {
                $data['siege_social'] = $this->normalizer->normalize($object->getSiegeSocial(), 'json', $context);
            }
            if ($object->isInitialized('entrepriseCessee') && null !== $object->getEntrepriseCessee()) {
                $data['entreprise_cessee'] = $this->normalizer->normalize($object->getEntrepriseCessee(), 'json', $context);
            }
            if ($object->isInitialized('statutDiffusion') && null !== $object->getStatutDiffusion()) {
                $data['statut_diffusion'] = $this->normalizer->normalize($object->getStatutDiffusion(), 'json', $context);
            }
            if ($object->isInitialized('codeNaf') && null !== $object->getCodeNaf()) {
                $data['code_naf'] = $this->normalizer->normalize($object->getCodeNaf(), 'json', $context);
            }
            if ($object->isInitialized('entrepriseEmployeuse') && null !== $object->getEntrepriseEmployeuse()) {
                $data['entreprise_employeuse'] = $this->normalizer->normalize($object->getEntrepriseEmployeuse(), 'json', $context);
            }
            if ($object->isInitialized('enseigne') && null !== $object->getEnseigne()) {
                $values_1 = [];
                foreach ($object->getEnseigne() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['enseigne'] = $values_1;
            }
            if ($object->isInitialized('nouvelEtablissement') && null !== $object->getNouvelEtablissement()) {
                $values_2 = [];
                foreach ($object->getNouvelEtablissement() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['nouvel_etablissement'] = $values_2;
            }
            if ($object->isInitialized('fermetureEtablissement') && null !== $object->getFermetureEtablissement()) {
                $values_3 = [];
                foreach ($object->getFermetureEtablissement() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['fermeture_etablissement'] = $values_3;
            }
            if ($object->isInitialized('statutRcs') && null !== $object->getStatutRcs()) {
                $data['statut_rcs'] = $this->normalizer->normalize($object->getStatutRcs(), 'json', $context);
            }
            if ($object->isInitialized('objetSocial') && null !== $object->getObjetSocial()) {
                $data['objet_social'] = $this->normalizer->normalize($object->getObjetSocial(), 'json', $context);
            }
            if ($object->isInitialized('capital') && null !== $object->getCapital()) {
                $data['capital'] = $this->normalizer->normalize($object->getCapital(), 'json', $context);
            }
            if ($object->isInitialized('dateClotureExercice') && null !== $object->getDateClotureExercice()) {
                $data['date_cloture_exercice'] = $this->normalizer->normalize($object->getDateClotureExercice(), 'json', $context);
            }
            if ($object->isInitialized('chiffreAffaires') && null !== $object->getChiffreAffaires()) {
                $values_4 = [];
                foreach ($object->getChiffreAffaires() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['chiffre_affaires'] = $values_4;
            }
            if ($object->isInitialized('resultat') && null !== $object->getResultat()) {
                $values_5 = [];
                foreach ($object->getResultat() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['resultat'] = $values_5;
            }
            if ($object->isInitialized('nouveauxComptesDisponibles') && null !== $object->getNouveauxComptesDisponibles()) {
                $values_6 = [];
                foreach ($object->getNouveauxComptesDisponibles() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['nouveaux_comptes_disponibles'] = $values_6;
            }
            if ($object->isInitialized('nouveauxComptesPublies') && null !== $object->getNouveauxComptesPublies()) {
                $values_7 = [];
                foreach ($object->getNouveauxComptesPublies() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['nouveaux_comptes_publies'] = $values_7;
            }
            if ($object->isInitialized('nouvelleAnnonceProcedureCollectivePubliee') && null !== $object->getNouvelleAnnonceProcedureCollectivePubliee()) {
                $values_8 = [];
                foreach ($object->getNouvelleAnnonceProcedureCollectivePubliee() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['nouvelle_annonce_procedure_collective_publiee'] = $values_8;
            }
            if ($object->isInitialized('nouvelleAnnonceVentePubliee') && null !== $object->getNouvelleAnnonceVentePubliee()) {
                $values_9 = [];
                foreach ($object->getNouvelleAnnonceVentePubliee() as $value_9) {
                    $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
                }
                $data['nouvelle_annonce_vente_publiee'] = $values_9;
            }
            if ($object->isInitialized('nouvelleAnnoncePubliee') && null !== $object->getNouvelleAnnoncePubliee()) {
                $values_10 = [];
                foreach ($object->getNouvelleAnnoncePubliee() as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $data['nouvelle_annonce_publiee'] = $values_10;
            }
            if ($object->isInitialized('nouveauxStatutsPublies') && null !== $object->getNouveauxStatutsPublies()) {
                $values_11 = [];
                foreach ($object->getNouveauxStatutsPublies() as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $data['nouveaux_statuts_publies'] = $values_11;
            }
            if ($object->isInitialized('nouvelActePublie') && null !== $object->getNouvelActePublie()) {
                $values_12 = [];
                foreach ($object->getNouvelActePublie() as $value_12) {
                    $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
                }
                $data['nouvel_acte_publie'] = $values_12;
            }
            if ($object->isInitialized('nouvelleDeclarationBeneficiairesEffectifPubliee') && null !== $object->getNouvelleDeclarationBeneficiairesEffectifPubliee()) {
                $values_13 = [];
                foreach ($object->getNouvelleDeclarationBeneficiairesEffectifPubliee() as $value_13) {
                    $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
                }
                $data['nouvelle_declaration_beneficiaires_effectif_publiee'] = $values_13;
            }
            if ($object->isInitialized('nouveauDirigeant') && null !== $object->getNouveauDirigeant()) {
                $values_14 = [];
                foreach ($object->getNouveauDirigeant() as $value_14) {
                    $values_14[] = $this->normalizer->normalize($value_14, 'json', $context);
                }
                $data['nouveau_dirigeant'] = $values_14;
            }
            if ($object->isInitialized('dirigeantPartant') && null !== $object->getDirigeantPartant()) {
                $values_15 = [];
                foreach ($object->getDirigeantPartant() as $value_15) {
                    $values_15[] = $this->normalizer->normalize($value_15, 'json', $context);
                }
                $data['dirigeant_partant'] = $values_15;
            }
            if ($object->isInitialized('qualiteDirigeant') && null !== $object->getQualiteDirigeant()) {
                $values_16 = [];
                foreach ($object->getQualiteDirigeant() as $value_16) {
                    $values_16[] = $this->normalizer->normalize($value_16, 'json', $context);
                }
                $data['qualite_dirigeant'] = $values_16;
            }
            foreach ($object as $key => $value_17) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_17;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [NotificationEntreprise::class => false];
        }
    }
}
