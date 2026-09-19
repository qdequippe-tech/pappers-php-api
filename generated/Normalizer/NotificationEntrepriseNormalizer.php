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
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleDecisionJusticeItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseObjetSocial;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseQualiteDirigeantItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseResultatItem;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseSiegeSocial;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseStatutDiffusion;
use Qdequippe\Pappers\Api\Model\NotificationEntrepriseStatutRcs;
use Qdequippe\Pappers\Api\Runtime\JsonObject;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
        $object = new NotificationEntreprise();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
            unset($data['siren']);
        }
        if (\array_key_exists('details_entreprise', $data) && null !== $data['details_entreprise']) {
            $object->setDetailsEntreprise($this->denormalizer->denormalize($data['details_entreprise'], NotificationEntrepriseDetailsEntreprise::class, 'json', $context));
            unset($data['details_entreprise']);
        } elseif (\array_key_exists('details_entreprise', $data) && null === $data['details_entreprise']) {
            $object->setDetailsEntreprise(null);
            unset($data['details_entreprise']);
        }
        if (\array_key_exists('information', $data) && null !== $data['information']) {
            $object->setInformation($data['information']);
            unset($data['information']);
        } elseif (\array_key_exists('information', $data) && null === $data['information']) {
            $object->setInformation(null);
            unset($data['information']);
        }
        if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
            $object->setNomEntreprise($this->denormalizer->denormalize($data['nom_entreprise'], NotificationEntrepriseNomEntreprise::class, 'json', $context));
            unset($data['nom_entreprise']);
        } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
            $object->setNomEntreprise(null);
            unset($data['nom_entreprise']);
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
            unset($data['nom_commercial']);
        }
        if (\array_key_exists('forme_juridique', $data) && null !== $data['forme_juridique']) {
            $object->setFormeJuridique($this->denormalizer->denormalize($data['forme_juridique'], NotificationEntrepriseFormeJuridique::class, 'json', $context));
            unset($data['forme_juridique']);
        } elseif (\array_key_exists('forme_juridique', $data) && null === $data['forme_juridique']) {
            $object->setFormeJuridique(null);
            unset($data['forme_juridique']);
        }
        if (\array_key_exists('siege_social', $data) && null !== $data['siege_social']) {
            $object->setSiegeSocial($this->denormalizer->denormalize($data['siege_social'], NotificationEntrepriseSiegeSocial::class, 'json', $context));
            unset($data['siege_social']);
        } elseif (\array_key_exists('siege_social', $data) && null === $data['siege_social']) {
            $object->setSiegeSocial(null);
            unset($data['siege_social']);
        }
        if (\array_key_exists('entreprise_cessee', $data) && null !== $data['entreprise_cessee']) {
            $object->setEntrepriseCessee($this->denormalizer->denormalize($data['entreprise_cessee'], NotificationEntrepriseEntrepriseCessee::class, 'json', $context));
            unset($data['entreprise_cessee']);
        } elseif (\array_key_exists('entreprise_cessee', $data) && null === $data['entreprise_cessee']) {
            $object->setEntrepriseCessee(null);
            unset($data['entreprise_cessee']);
        }
        if (\array_key_exists('statut_diffusion', $data) && null !== $data['statut_diffusion']) {
            $object->setStatutDiffusion($this->denormalizer->denormalize($data['statut_diffusion'], NotificationEntrepriseStatutDiffusion::class, 'json', $context));
            unset($data['statut_diffusion']);
        } elseif (\array_key_exists('statut_diffusion', $data) && null === $data['statut_diffusion']) {
            $object->setStatutDiffusion(null);
            unset($data['statut_diffusion']);
        }
        if (\array_key_exists('code_naf', $data) && null !== $data['code_naf']) {
            $object->setCodeNaf($this->denormalizer->denormalize($data['code_naf'], NotificationEntrepriseCodeNaf::class, 'json', $context));
            unset($data['code_naf']);
        } elseif (\array_key_exists('code_naf', $data) && null === $data['code_naf']) {
            $object->setCodeNaf(null);
            unset($data['code_naf']);
        }
        if (\array_key_exists('entreprise_employeuse', $data) && null !== $data['entreprise_employeuse']) {
            $object->setEntrepriseEmployeuse($this->denormalizer->denormalize($data['entreprise_employeuse'], NotificationEntrepriseEntrepriseEmployeuse::class, 'json', $context));
            unset($data['entreprise_employeuse']);
        } elseif (\array_key_exists('entreprise_employeuse', $data) && null === $data['entreprise_employeuse']) {
            $object->setEntrepriseEmployeuse(null);
            unset($data['entreprise_employeuse']);
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
            unset($data['enseigne']);
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
            unset($data['nouvel_etablissement']);
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
            unset($data['fermeture_etablissement']);
        }
        if (\array_key_exists('statut_rcs', $data) && null !== $data['statut_rcs']) {
            $object->setStatutRcs($this->denormalizer->denormalize($data['statut_rcs'], NotificationEntrepriseStatutRcs::class, 'json', $context));
            unset($data['statut_rcs']);
        } elseif (\array_key_exists('statut_rcs', $data) && null === $data['statut_rcs']) {
            $object->setStatutRcs(null);
            unset($data['statut_rcs']);
        }
        if (\array_key_exists('objet_social', $data) && null !== $data['objet_social']) {
            $object->setObjetSocial($this->denormalizer->denormalize($data['objet_social'], NotificationEntrepriseObjetSocial::class, 'json', $context));
            unset($data['objet_social']);
        } elseif (\array_key_exists('objet_social', $data) && null === $data['objet_social']) {
            $object->setObjetSocial(null);
            unset($data['objet_social']);
        }
        if (\array_key_exists('capital', $data) && null !== $data['capital']) {
            $object->setCapital($this->denormalizer->denormalize($data['capital'], NotificationEntrepriseCapital::class, 'json', $context));
            unset($data['capital']);
        } elseif (\array_key_exists('capital', $data) && null === $data['capital']) {
            $object->setCapital(null);
            unset($data['capital']);
        }
        if (\array_key_exists('date_cloture_exercice', $data) && null !== $data['date_cloture_exercice']) {
            $object->setDateClotureExercice($this->denormalizer->denormalize($data['date_cloture_exercice'], NotificationEntrepriseDateClotureExercice::class, 'json', $context));
            unset($data['date_cloture_exercice']);
        } elseif (\array_key_exists('date_cloture_exercice', $data) && null === $data['date_cloture_exercice']) {
            $object->setDateClotureExercice(null);
            unset($data['date_cloture_exercice']);
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
            unset($data['chiffre_affaires']);
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
            unset($data['resultat']);
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
            unset($data['nouveaux_comptes_disponibles']);
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
            unset($data['nouveaux_comptes_publies']);
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
            unset($data['nouvelle_annonce_procedure_collective_publiee']);
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
            unset($data['nouvelle_annonce_vente_publiee']);
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
            unset($data['nouvelle_annonce_publiee']);
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
            unset($data['nouveaux_statuts_publies']);
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
            unset($data['nouvel_acte_publie']);
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
            unset($data['nouvelle_declaration_beneficiaires_effectif_publiee']);
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
            unset($data['nouveau_dirigeant']);
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
            unset($data['dirigeant_partant']);
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
            unset($data['qualite_dirigeant']);
        }
        if (\array_key_exists('nouvelle_decision_justice', $data) && null !== $data['nouvelle_decision_justice']) {
            $values_17 = [];
            foreach ($data['nouvelle_decision_justice'] as $value_17) {
                $values_17[] = $this->denormalizer->denormalize($value_17, NotificationEntrepriseNouvelleDecisionJusticeItem::class, 'json', $context);
            }
            $object->setNouvelleDecisionJustice($values_17);
            unset($data['nouvelle_decision_justice']);
        } elseif (\array_key_exists('nouvelle_decision_justice', $data) && null === $data['nouvelle_decision_justice']) {
            $object->setNouvelleDecisionJustice(null);
            unset($data['nouvelle_decision_justice']);
        }
        foreach ($data as $key => $value_18) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_18;
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
        if ($data->isInitialized('detailsEntreprise') && null !== $data->getDetailsEntreprise()) {
            $dataArray['details_entreprise'] = null === $data->getDetailsEntreprise() ? null : new JsonObject($this->normalizer->normalize($data->getDetailsEntreprise(), 'json', $context));
        }
        if ($data->isInitialized('information') && null !== $data->getInformation()) {
            $dataArray['information'] = $data->getInformation();
        }
        if ($data->isInitialized('nomEntreprise') && null !== $data->getNomEntreprise()) {
            $dataArray['nom_entreprise'] = null === $data->getNomEntreprise() ? null : new JsonObject($this->normalizer->normalize($data->getNomEntreprise(), 'json', $context));
        }
        if ($data->isInitialized('nomCommercial') && null !== $data->getNomCommercial()) {
            $values = [];
            foreach ($data->getNomCommercial() as $value) {
                $values[] = null === $value ? null : new JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['nom_commercial'] = $values;
        }
        if ($data->isInitialized('formeJuridique') && null !== $data->getFormeJuridique()) {
            $dataArray['forme_juridique'] = null === $data->getFormeJuridique() ? null : new JsonObject($this->normalizer->normalize($data->getFormeJuridique(), 'json', $context));
        }
        if ($data->isInitialized('siegeSocial') && null !== $data->getSiegeSocial()) {
            $dataArray['siege_social'] = null === $data->getSiegeSocial() ? null : new JsonObject($this->normalizer->normalize($data->getSiegeSocial(), 'json', $context));
        }
        if ($data->isInitialized('entrepriseCessee') && null !== $data->getEntrepriseCessee()) {
            $dataArray['entreprise_cessee'] = null === $data->getEntrepriseCessee() ? null : new JsonObject($this->normalizer->normalize($data->getEntrepriseCessee(), 'json', $context));
        }
        if ($data->isInitialized('statutDiffusion') && null !== $data->getStatutDiffusion()) {
            $dataArray['statut_diffusion'] = null === $data->getStatutDiffusion() ? null : new JsonObject($this->normalizer->normalize($data->getStatutDiffusion(), 'json', $context));
        }
        if ($data->isInitialized('codeNaf') && null !== $data->getCodeNaf()) {
            $dataArray['code_naf'] = null === $data->getCodeNaf() ? null : new JsonObject($this->normalizer->normalize($data->getCodeNaf(), 'json', $context));
        }
        if ($data->isInitialized('entrepriseEmployeuse') && null !== $data->getEntrepriseEmployeuse()) {
            $dataArray['entreprise_employeuse'] = null === $data->getEntrepriseEmployeuse() ? null : new JsonObject($this->normalizer->normalize($data->getEntrepriseEmployeuse(), 'json', $context));
        }
        if ($data->isInitialized('enseigne') && null !== $data->getEnseigne()) {
            $values_1 = [];
            foreach ($data->getEnseigne() as $value_1) {
                $values_1[] = null === $value_1 ? null : new JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['enseigne'] = $values_1;
        }
        if ($data->isInitialized('nouvelEtablissement') && null !== $data->getNouvelEtablissement()) {
            $values_2 = [];
            foreach ($data->getNouvelEtablissement() as $value_2) {
                $values_2[] = null === $value_2 ? null : new JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['nouvel_etablissement'] = $values_2;
        }
        if ($data->isInitialized('fermetureEtablissement') && null !== $data->getFermetureEtablissement()) {
            $values_3 = [];
            foreach ($data->getFermetureEtablissement() as $value_3) {
                $values_3[] = null === $value_3 ? null : new JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['fermeture_etablissement'] = $values_3;
        }
        if ($data->isInitialized('statutRcs') && null !== $data->getStatutRcs()) {
            $dataArray['statut_rcs'] = null === $data->getStatutRcs() ? null : new JsonObject($this->normalizer->normalize($data->getStatutRcs(), 'json', $context));
        }
        if ($data->isInitialized('objetSocial') && null !== $data->getObjetSocial()) {
            $dataArray['objet_social'] = null === $data->getObjetSocial() ? null : new JsonObject($this->normalizer->normalize($data->getObjetSocial(), 'json', $context));
        }
        if ($data->isInitialized('capital') && null !== $data->getCapital()) {
            $dataArray['capital'] = null === $data->getCapital() ? null : new JsonObject($this->normalizer->normalize($data->getCapital(), 'json', $context));
        }
        if ($data->isInitialized('dateClotureExercice') && null !== $data->getDateClotureExercice()) {
            $dataArray['date_cloture_exercice'] = null === $data->getDateClotureExercice() ? null : new JsonObject($this->normalizer->normalize($data->getDateClotureExercice(), 'json', $context));
        }
        if ($data->isInitialized('chiffreAffaires') && null !== $data->getChiffreAffaires()) {
            $values_4 = [];
            foreach ($data->getChiffreAffaires() as $value_4) {
                $values_4[] = null === $value_4 ? null : new JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['chiffre_affaires'] = $values_4;
        }
        if ($data->isInitialized('resultat') && null !== $data->getResultat()) {
            $values_5 = [];
            foreach ($data->getResultat() as $value_5) {
                $values_5[] = null === $value_5 ? null : new JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['resultat'] = $values_5;
        }
        if ($data->isInitialized('nouveauxComptesDisponibles') && null !== $data->getNouveauxComptesDisponibles()) {
            $values_6 = [];
            foreach ($data->getNouveauxComptesDisponibles() as $value_6) {
                $values_6[] = null === $value_6 ? null : new JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['nouveaux_comptes_disponibles'] = $values_6;
        }
        if ($data->isInitialized('nouveauxComptesPublies') && null !== $data->getNouveauxComptesPublies()) {
            $values_7 = [];
            foreach ($data->getNouveauxComptesPublies() as $value_7) {
                $values_7[] = null === $value_7 ? null : new JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['nouveaux_comptes_publies'] = $values_7;
        }
        if ($data->isInitialized('nouvelleAnnonceProcedureCollectivePubliee') && null !== $data->getNouvelleAnnonceProcedureCollectivePubliee()) {
            $values_8 = [];
            foreach ($data->getNouvelleAnnonceProcedureCollectivePubliee() as $value_8) {
                $values_8[] = null === $value_8 ? null : new JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['nouvelle_annonce_procedure_collective_publiee'] = $values_8;
        }
        if ($data->isInitialized('nouvelleAnnonceVentePubliee') && null !== $data->getNouvelleAnnonceVentePubliee()) {
            $values_9 = [];
            foreach ($data->getNouvelleAnnonceVentePubliee() as $value_9) {
                $values_9[] = null === $value_9 ? null : new JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['nouvelle_annonce_vente_publiee'] = $values_9;
        }
        if ($data->isInitialized('nouvelleAnnoncePubliee') && null !== $data->getNouvelleAnnoncePubliee()) {
            $values_10 = [];
            foreach ($data->getNouvelleAnnoncePubliee() as $value_10) {
                $values_10[] = null === $value_10 ? null : new JsonObject($this->normalizer->normalize($value_10, 'json', $context));
            }
            $dataArray['nouvelle_annonce_publiee'] = $values_10;
        }
        if ($data->isInitialized('nouveauxStatutsPublies') && null !== $data->getNouveauxStatutsPublies()) {
            $values_11 = [];
            foreach ($data->getNouveauxStatutsPublies() as $value_11) {
                $values_11[] = null === $value_11 ? null : new JsonObject($this->normalizer->normalize($value_11, 'json', $context));
            }
            $dataArray['nouveaux_statuts_publies'] = $values_11;
        }
        if ($data->isInitialized('nouvelActePublie') && null !== $data->getNouvelActePublie()) {
            $values_12 = [];
            foreach ($data->getNouvelActePublie() as $value_12) {
                $values_12[] = null === $value_12 ? null : new JsonObject($this->normalizer->normalize($value_12, 'json', $context));
            }
            $dataArray['nouvel_acte_publie'] = $values_12;
        }
        if ($data->isInitialized('nouvelleDeclarationBeneficiairesEffectifPubliee') && null !== $data->getNouvelleDeclarationBeneficiairesEffectifPubliee()) {
            $values_13 = [];
            foreach ($data->getNouvelleDeclarationBeneficiairesEffectifPubliee() as $value_13) {
                $values_13[] = null === $value_13 ? null : new JsonObject($this->normalizer->normalize($value_13, 'json', $context));
            }
            $dataArray['nouvelle_declaration_beneficiaires_effectif_publiee'] = $values_13;
        }
        if ($data->isInitialized('nouveauDirigeant') && null !== $data->getNouveauDirigeant()) {
            $values_14 = [];
            foreach ($data->getNouveauDirigeant() as $value_14) {
                $values_14[] = null === $value_14 ? null : new JsonObject($this->normalizer->normalize($value_14, 'json', $context));
            }
            $dataArray['nouveau_dirigeant'] = $values_14;
        }
        if ($data->isInitialized('dirigeantPartant') && null !== $data->getDirigeantPartant()) {
            $values_15 = [];
            foreach ($data->getDirigeantPartant() as $value_15) {
                $values_15[] = null === $value_15 ? null : new JsonObject($this->normalizer->normalize($value_15, 'json', $context));
            }
            $dataArray['dirigeant_partant'] = $values_15;
        }
        if ($data->isInitialized('qualiteDirigeant') && null !== $data->getQualiteDirigeant()) {
            $values_16 = [];
            foreach ($data->getQualiteDirigeant() as $value_16) {
                $values_16[] = null === $value_16 ? null : new JsonObject($this->normalizer->normalize($value_16, 'json', $context));
            }
            $dataArray['qualite_dirigeant'] = $values_16;
        }
        if ($data->isInitialized('nouvelleDecisionJustice') && null !== $data->getNouvelleDecisionJustice()) {
            $values_17 = [];
            foreach ($data->getNouvelleDecisionJustice() as $value_17) {
                $values_17[] = null === $value_17 ? null : new JsonObject($this->normalizer->normalize($value_17, 'json', $context));
            }
            $dataArray['nouvelle_decision_justice'] = $values_17;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_18) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_18;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [NotificationEntreprise::class => false];
    }
}
