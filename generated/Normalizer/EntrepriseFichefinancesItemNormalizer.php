<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichefinancesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichefinancesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichefinancesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichefinancesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichefinancesItem();
        if (\array_key_exists('chiffre_affaires', $data) && \is_int($data['chiffre_affaires'])) {
            $data['chiffre_affaires'] = (float) $data['chiffre_affaires'];
        }
        if (\array_key_exists('resultat', $data) && \is_int($data['resultat'])) {
            $data['resultat'] = (float) $data['resultat'];
        }
        if (\array_key_exists('marge_brute', $data) && \is_int($data['marge_brute'])) {
            $data['marge_brute'] = (float) $data['marge_brute'];
        }
        if (\array_key_exists('excedent_brut_exploitation', $data) && \is_int($data['excedent_brut_exploitation'])) {
            $data['excedent_brut_exploitation'] = (float) $data['excedent_brut_exploitation'];
        }
        if (\array_key_exists('resultat_exploitation', $data) && \is_int($data['resultat_exploitation'])) {
            $data['resultat_exploitation'] = (float) $data['resultat_exploitation'];
        }
        if (\array_key_exists('taux_croissance_chiffre_affaires', $data) && \is_int($data['taux_croissance_chiffre_affaires'])) {
            $data['taux_croissance_chiffre_affaires'] = (float) $data['taux_croissance_chiffre_affaires'];
        }
        if (\array_key_exists('taux_marge_brute', $data) && \is_int($data['taux_marge_brute'])) {
            $data['taux_marge_brute'] = (float) $data['taux_marge_brute'];
        }
        if (\array_key_exists('taux_marge_EBITDA', $data) && \is_int($data['taux_marge_EBITDA'])) {
            $data['taux_marge_EBITDA'] = (float) $data['taux_marge_EBITDA'];
        }
        if (\array_key_exists('taux_marge_operationnelle', $data) && \is_int($data['taux_marge_operationnelle'])) {
            $data['taux_marge_operationnelle'] = (float) $data['taux_marge_operationnelle'];
        }
        if (\array_key_exists('BFR', $data) && \is_int($data['BFR'])) {
            $data['BFR'] = (float) $data['BFR'];
        }
        if (\array_key_exists('BFR_exploitation', $data) && \is_int($data['BFR_exploitation'])) {
            $data['BFR_exploitation'] = (float) $data['BFR_exploitation'];
        }
        if (\array_key_exists('BFR_hors_exploitation', $data) && \is_int($data['BFR_hors_exploitation'])) {
            $data['BFR_hors_exploitation'] = (float) $data['BFR_hors_exploitation'];
        }
        if (\array_key_exists('BFR_jours_CA', $data) && \is_int($data['BFR_jours_CA'])) {
            $data['BFR_jours_CA'] = (float) $data['BFR_jours_CA'];
        }
        if (\array_key_exists('BFR_exploitation_jours_CA', $data) && \is_int($data['BFR_exploitation_jours_CA'])) {
            $data['BFR_exploitation_jours_CA'] = (float) $data['BFR_exploitation_jours_CA'];
        }
        if (\array_key_exists('BFR_hors_exploitation_jours_CA', $data) && \is_int($data['BFR_hors_exploitation_jours_CA'])) {
            $data['BFR_hors_exploitation_jours_CA'] = (float) $data['BFR_hors_exploitation_jours_CA'];
        }
        if (\array_key_exists('delai_paiement_clients_jours', $data) && \is_int($data['delai_paiement_clients_jours'])) {
            $data['delai_paiement_clients_jours'] = (float) $data['delai_paiement_clients_jours'];
        }
        if (\array_key_exists('delai_paiement_fournisseurs_jours', $data) && \is_int($data['delai_paiement_fournisseurs_jours'])) {
            $data['delai_paiement_fournisseurs_jours'] = (float) $data['delai_paiement_fournisseurs_jours'];
        }
        if (\array_key_exists('ratio_stock_CA_jours', $data) && \is_int($data['ratio_stock_CA_jours'])) {
            $data['ratio_stock_CA_jours'] = (float) $data['ratio_stock_CA_jours'];
        }
        if (\array_key_exists('capacite_autofinancement', $data) && \is_int($data['capacite_autofinancement'])) {
            $data['capacite_autofinancement'] = (float) $data['capacite_autofinancement'];
        }
        if (\array_key_exists('capacite_autofinancement_CA', $data) && \is_int($data['capacite_autofinancement_CA'])) {
            $data['capacite_autofinancement_CA'] = (float) $data['capacite_autofinancement_CA'];
        }
        if (\array_key_exists('fonds_roulement_net_global', $data) && \is_int($data['fonds_roulement_net_global'])) {
            $data['fonds_roulement_net_global'] = (float) $data['fonds_roulement_net_global'];
        }
        if (\array_key_exists('couverture_BFR', $data) && \is_int($data['couverture_BFR'])) {
            $data['couverture_BFR'] = (float) $data['couverture_BFR'];
        }
        if (\array_key_exists('tresorerie', $data) && \is_int($data['tresorerie'])) {
            $data['tresorerie'] = (float) $data['tresorerie'];
        }
        if (\array_key_exists('dettes_financieres', $data) && \is_int($data['dettes_financieres'])) {
            $data['dettes_financieres'] = (float) $data['dettes_financieres'];
        }
        if (\array_key_exists('capacite_remboursement', $data) && \is_int($data['capacite_remboursement'])) {
            $data['capacite_remboursement'] = (float) $data['capacite_remboursement'];
        }
        if (\array_key_exists('ratio_endettement', $data) && \is_int($data['ratio_endettement'])) {
            $data['ratio_endettement'] = (float) $data['ratio_endettement'];
        }
        if (\array_key_exists('autonomie_financiere', $data) && \is_int($data['autonomie_financiere'])) {
            $data['autonomie_financiere'] = (float) $data['autonomie_financiere'];
        }
        if (\array_key_exists('taux_levier', $data) && \is_int($data['taux_levier'])) {
            $data['taux_levier'] = (float) $data['taux_levier'];
        }
        if (\array_key_exists('etat_dettes_1_an_au_plus', $data) && \is_int($data['etat_dettes_1_an_au_plus'])) {
            $data['etat_dettes_1_an_au_plus'] = (float) $data['etat_dettes_1_an_au_plus'];
        }
        if (\array_key_exists('liquidite_generale', $data) && \is_int($data['liquidite_generale'])) {
            $data['liquidite_generale'] = (float) $data['liquidite_generale'];
        }
        if (\array_key_exists('couverture_dettes', $data) && \is_int($data['couverture_dettes'])) {
            $data['couverture_dettes'] = (float) $data['couverture_dettes'];
        }
        if (\array_key_exists('marge_nette', $data) && \is_int($data['marge_nette'])) {
            $data['marge_nette'] = (float) $data['marge_nette'];
        }
        if (\array_key_exists('rentabilite_fonds_propres', $data) && \is_int($data['rentabilite_fonds_propres'])) {
            $data['rentabilite_fonds_propres'] = (float) $data['rentabilite_fonds_propres'];
        }
        if (\array_key_exists('rentabilite_economique', $data) && \is_int($data['rentabilite_economique'])) {
            $data['rentabilite_economique'] = (float) $data['rentabilite_economique'];
        }
        if (\array_key_exists('valeur_ajoutee', $data) && \is_int($data['valeur_ajoutee'])) {
            $data['valeur_ajoutee'] = (float) $data['valeur_ajoutee'];
        }
        if (\array_key_exists('valeur_ajoutee_CA', $data) && \is_int($data['valeur_ajoutee_CA'])) {
            $data['valeur_ajoutee_CA'] = (float) $data['valeur_ajoutee_CA'];
        }
        if (\array_key_exists('salaires_charges_sociales', $data) && \is_int($data['salaires_charges_sociales'])) {
            $data['salaires_charges_sociales'] = (float) $data['salaires_charges_sociales'];
        }
        if (\array_key_exists('salaires_CA', $data) && \is_int($data['salaires_CA'])) {
            $data['salaires_CA'] = (float) $data['salaires_CA'];
        }
        if (\array_key_exists('impots_taxes', $data) && \is_int($data['impots_taxes'])) {
            $data['impots_taxes'] = (float) $data['impots_taxes'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('annee', $data) && null !== $data['annee']) {
            $object->setAnnee($data['annee']);
            unset($data['annee']);
        } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
            $object->setAnnee(null);
        }
        if (\array_key_exists('date_de_cloture_exercice', $data) && null !== $data['date_de_cloture_exercice']) {
            $object->setDateDeClotureExercice(\DateTime::createFromFormat('Y-m-d', $data['date_de_cloture_exercice'])->setTime(0, 0, 0));
            unset($data['date_de_cloture_exercice']);
        } elseif (\array_key_exists('date_de_cloture_exercice', $data) && null === $data['date_de_cloture_exercice']) {
            $object->setDateDeClotureExercice(null);
        }
        if (\array_key_exists('duree_exercice', $data) && null !== $data['duree_exercice']) {
            $object->setDureeExercice($data['duree_exercice']);
            unset($data['duree_exercice']);
        } elseif (\array_key_exists('duree_exercice', $data) && null === $data['duree_exercice']) {
            $object->setDureeExercice(null);
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
        if (\array_key_exists('effectif', $data) && null !== $data['effectif']) {
            $object->setEffectif($data['effectif']);
            unset($data['effectif']);
        } elseif (\array_key_exists('effectif', $data) && null === $data['effectif']) {
            $object->setEffectif(null);
        }
        if (\array_key_exists('marge_brute', $data) && null !== $data['marge_brute']) {
            $object->setMargeBrute($data['marge_brute']);
            unset($data['marge_brute']);
        } elseif (\array_key_exists('marge_brute', $data) && null === $data['marge_brute']) {
            $object->setMargeBrute(null);
        }
        if (\array_key_exists('excedent_brut_exploitation', $data) && null !== $data['excedent_brut_exploitation']) {
            $object->setExcedentBrutExploitation($data['excedent_brut_exploitation']);
            unset($data['excedent_brut_exploitation']);
        } elseif (\array_key_exists('excedent_brut_exploitation', $data) && null === $data['excedent_brut_exploitation']) {
            $object->setExcedentBrutExploitation(null);
        }
        if (\array_key_exists('resultat_exploitation', $data) && null !== $data['resultat_exploitation']) {
            $object->setResultatExploitation($data['resultat_exploitation']);
            unset($data['resultat_exploitation']);
        } elseif (\array_key_exists('resultat_exploitation', $data) && null === $data['resultat_exploitation']) {
            $object->setResultatExploitation(null);
        }
        if (\array_key_exists('taux_croissance_chiffre_affaires', $data) && null !== $data['taux_croissance_chiffre_affaires']) {
            $object->setTauxCroissanceChiffreAffaires($data['taux_croissance_chiffre_affaires']);
            unset($data['taux_croissance_chiffre_affaires']);
        } elseif (\array_key_exists('taux_croissance_chiffre_affaires', $data) && null === $data['taux_croissance_chiffre_affaires']) {
            $object->setTauxCroissanceChiffreAffaires(null);
        }
        if (\array_key_exists('taux_marge_brute', $data) && null !== $data['taux_marge_brute']) {
            $object->setTauxMargeBrute($data['taux_marge_brute']);
            unset($data['taux_marge_brute']);
        } elseif (\array_key_exists('taux_marge_brute', $data) && null === $data['taux_marge_brute']) {
            $object->setTauxMargeBrute(null);
        }
        if (\array_key_exists('taux_marge_EBITDA', $data) && null !== $data['taux_marge_EBITDA']) {
            $object->setTauxMargeEBITDA($data['taux_marge_EBITDA']);
            unset($data['taux_marge_EBITDA']);
        } elseif (\array_key_exists('taux_marge_EBITDA', $data) && null === $data['taux_marge_EBITDA']) {
            $object->setTauxMargeEBITDA(null);
        }
        if (\array_key_exists('taux_marge_operationnelle', $data) && null !== $data['taux_marge_operationnelle']) {
            $object->setTauxMargeOperationnelle($data['taux_marge_operationnelle']);
            unset($data['taux_marge_operationnelle']);
        } elseif (\array_key_exists('taux_marge_operationnelle', $data) && null === $data['taux_marge_operationnelle']) {
            $object->setTauxMargeOperationnelle(null);
        }
        if (\array_key_exists('BFR', $data) && null !== $data['BFR']) {
            $object->setBFR($data['BFR']);
            unset($data['BFR']);
        } elseif (\array_key_exists('BFR', $data) && null === $data['BFR']) {
            $object->setBFR(null);
        }
        if (\array_key_exists('BFR_exploitation', $data) && null !== $data['BFR_exploitation']) {
            $object->setBFRExploitation($data['BFR_exploitation']);
            unset($data['BFR_exploitation']);
        } elseif (\array_key_exists('BFR_exploitation', $data) && null === $data['BFR_exploitation']) {
            $object->setBFRExploitation(null);
        }
        if (\array_key_exists('BFR_hors_exploitation', $data) && null !== $data['BFR_hors_exploitation']) {
            $object->setBFRHorsExploitation($data['BFR_hors_exploitation']);
            unset($data['BFR_hors_exploitation']);
        } elseif (\array_key_exists('BFR_hors_exploitation', $data) && null === $data['BFR_hors_exploitation']) {
            $object->setBFRHorsExploitation(null);
        }
        if (\array_key_exists('BFR_jours_CA', $data) && null !== $data['BFR_jours_CA']) {
            $object->setBFRJoursCA($data['BFR_jours_CA']);
            unset($data['BFR_jours_CA']);
        } elseif (\array_key_exists('BFR_jours_CA', $data) && null === $data['BFR_jours_CA']) {
            $object->setBFRJoursCA(null);
        }
        if (\array_key_exists('BFR_exploitation_jours_CA', $data) && null !== $data['BFR_exploitation_jours_CA']) {
            $object->setBFRExploitationJoursCA($data['BFR_exploitation_jours_CA']);
            unset($data['BFR_exploitation_jours_CA']);
        } elseif (\array_key_exists('BFR_exploitation_jours_CA', $data) && null === $data['BFR_exploitation_jours_CA']) {
            $object->setBFRExploitationJoursCA(null);
        }
        if (\array_key_exists('BFR_hors_exploitation_jours_CA', $data) && null !== $data['BFR_hors_exploitation_jours_CA']) {
            $object->setBFRHorsExploitationJoursCA($data['BFR_hors_exploitation_jours_CA']);
            unset($data['BFR_hors_exploitation_jours_CA']);
        } elseif (\array_key_exists('BFR_hors_exploitation_jours_CA', $data) && null === $data['BFR_hors_exploitation_jours_CA']) {
            $object->setBFRHorsExploitationJoursCA(null);
        }
        if (\array_key_exists('delai_paiement_clients_jours', $data) && null !== $data['delai_paiement_clients_jours']) {
            $object->setDelaiPaiementClientsJours($data['delai_paiement_clients_jours']);
            unset($data['delai_paiement_clients_jours']);
        } elseif (\array_key_exists('delai_paiement_clients_jours', $data) && null === $data['delai_paiement_clients_jours']) {
            $object->setDelaiPaiementClientsJours(null);
        }
        if (\array_key_exists('delai_paiement_fournisseurs_jours', $data) && null !== $data['delai_paiement_fournisseurs_jours']) {
            $object->setDelaiPaiementFournisseursJours($data['delai_paiement_fournisseurs_jours']);
            unset($data['delai_paiement_fournisseurs_jours']);
        } elseif (\array_key_exists('delai_paiement_fournisseurs_jours', $data) && null === $data['delai_paiement_fournisseurs_jours']) {
            $object->setDelaiPaiementFournisseursJours(null);
        }
        if (\array_key_exists('ratio_stock_CA_jours', $data) && null !== $data['ratio_stock_CA_jours']) {
            $object->setRatioStockCAJours($data['ratio_stock_CA_jours']);
            unset($data['ratio_stock_CA_jours']);
        } elseif (\array_key_exists('ratio_stock_CA_jours', $data) && null === $data['ratio_stock_CA_jours']) {
            $object->setRatioStockCAJours(null);
        }
        if (\array_key_exists('capacite_autofinancement', $data) && null !== $data['capacite_autofinancement']) {
            $object->setCapaciteAutofinancement($data['capacite_autofinancement']);
            unset($data['capacite_autofinancement']);
        } elseif (\array_key_exists('capacite_autofinancement', $data) && null === $data['capacite_autofinancement']) {
            $object->setCapaciteAutofinancement(null);
        }
        if (\array_key_exists('capacite_autofinancement_CA', $data) && null !== $data['capacite_autofinancement_CA']) {
            $object->setCapaciteAutofinancementCA($data['capacite_autofinancement_CA']);
            unset($data['capacite_autofinancement_CA']);
        } elseif (\array_key_exists('capacite_autofinancement_CA', $data) && null === $data['capacite_autofinancement_CA']) {
            $object->setCapaciteAutofinancementCA(null);
        }
        if (\array_key_exists('fonds_roulement_net_global', $data) && null !== $data['fonds_roulement_net_global']) {
            $object->setFondsRoulementNetGlobal($data['fonds_roulement_net_global']);
            unset($data['fonds_roulement_net_global']);
        } elseif (\array_key_exists('fonds_roulement_net_global', $data) && null === $data['fonds_roulement_net_global']) {
            $object->setFondsRoulementNetGlobal(null);
        }
        if (\array_key_exists('couverture_BFR', $data) && null !== $data['couverture_BFR']) {
            $object->setCouvertureBFR($data['couverture_BFR']);
            unset($data['couverture_BFR']);
        } elseif (\array_key_exists('couverture_BFR', $data) && null === $data['couverture_BFR']) {
            $object->setCouvertureBFR(null);
        }
        if (\array_key_exists('tresorerie', $data) && null !== $data['tresorerie']) {
            $object->setTresorerie($data['tresorerie']);
            unset($data['tresorerie']);
        } elseif (\array_key_exists('tresorerie', $data) && null === $data['tresorerie']) {
            $object->setTresorerie(null);
        }
        if (\array_key_exists('dettes_financieres', $data) && null !== $data['dettes_financieres']) {
            $object->setDettesFinancieres($data['dettes_financieres']);
            unset($data['dettes_financieres']);
        } elseif (\array_key_exists('dettes_financieres', $data) && null === $data['dettes_financieres']) {
            $object->setDettesFinancieres(null);
        }
        if (\array_key_exists('capacite_remboursement', $data) && null !== $data['capacite_remboursement']) {
            $object->setCapaciteRemboursement($data['capacite_remboursement']);
            unset($data['capacite_remboursement']);
        } elseif (\array_key_exists('capacite_remboursement', $data) && null === $data['capacite_remboursement']) {
            $object->setCapaciteRemboursement(null);
        }
        if (\array_key_exists('ratio_endettement', $data) && null !== $data['ratio_endettement']) {
            $object->setRatioEndettement($data['ratio_endettement']);
            unset($data['ratio_endettement']);
        } elseif (\array_key_exists('ratio_endettement', $data) && null === $data['ratio_endettement']) {
            $object->setRatioEndettement(null);
        }
        if (\array_key_exists('autonomie_financiere', $data) && null !== $data['autonomie_financiere']) {
            $object->setAutonomieFinanciere($data['autonomie_financiere']);
            unset($data['autonomie_financiere']);
        } elseif (\array_key_exists('autonomie_financiere', $data) && null === $data['autonomie_financiere']) {
            $object->setAutonomieFinanciere(null);
        }
        if (\array_key_exists('taux_levier', $data) && null !== $data['taux_levier']) {
            $object->setTauxLevier($data['taux_levier']);
            unset($data['taux_levier']);
        } elseif (\array_key_exists('taux_levier', $data) && null === $data['taux_levier']) {
            $object->setTauxLevier(null);
        }
        if (\array_key_exists('etat_dettes_1_an_au_plus', $data) && null !== $data['etat_dettes_1_an_au_plus']) {
            $object->setEtatDettes1AnAuPlus($data['etat_dettes_1_an_au_plus']);
            unset($data['etat_dettes_1_an_au_plus']);
        } elseif (\array_key_exists('etat_dettes_1_an_au_plus', $data) && null === $data['etat_dettes_1_an_au_plus']) {
            $object->setEtatDettes1AnAuPlus(null);
        }
        if (\array_key_exists('liquidite_generale', $data) && null !== $data['liquidite_generale']) {
            $object->setLiquiditeGenerale($data['liquidite_generale']);
            unset($data['liquidite_generale']);
        } elseif (\array_key_exists('liquidite_generale', $data) && null === $data['liquidite_generale']) {
            $object->setLiquiditeGenerale(null);
        }
        if (\array_key_exists('couverture_dettes', $data) && null !== $data['couverture_dettes']) {
            $object->setCouvertureDettes($data['couverture_dettes']);
            unset($data['couverture_dettes']);
        } elseif (\array_key_exists('couverture_dettes', $data) && null === $data['couverture_dettes']) {
            $object->setCouvertureDettes(null);
        }
        if (\array_key_exists('marge_nette', $data) && null !== $data['marge_nette']) {
            $object->setMargeNette($data['marge_nette']);
            unset($data['marge_nette']);
        } elseif (\array_key_exists('marge_nette', $data) && null === $data['marge_nette']) {
            $object->setMargeNette(null);
        }
        if (\array_key_exists('rentabilite_fonds_propres', $data) && null !== $data['rentabilite_fonds_propres']) {
            $object->setRentabiliteFondsPropres($data['rentabilite_fonds_propres']);
            unset($data['rentabilite_fonds_propres']);
        } elseif (\array_key_exists('rentabilite_fonds_propres', $data) && null === $data['rentabilite_fonds_propres']) {
            $object->setRentabiliteFondsPropres(null);
        }
        if (\array_key_exists('rentabilite_economique', $data) && null !== $data['rentabilite_economique']) {
            $object->setRentabiliteEconomique($data['rentabilite_economique']);
            unset($data['rentabilite_economique']);
        } elseif (\array_key_exists('rentabilite_economique', $data) && null === $data['rentabilite_economique']) {
            $object->setRentabiliteEconomique(null);
        }
        if (\array_key_exists('valeur_ajoutee', $data) && null !== $data['valeur_ajoutee']) {
            $object->setValeurAjoutee($data['valeur_ajoutee']);
            unset($data['valeur_ajoutee']);
        } elseif (\array_key_exists('valeur_ajoutee', $data) && null === $data['valeur_ajoutee']) {
            $object->setValeurAjoutee(null);
        }
        if (\array_key_exists('valeur_ajoutee_CA', $data) && null !== $data['valeur_ajoutee_CA']) {
            $object->setValeurAjouteeCA($data['valeur_ajoutee_CA']);
            unset($data['valeur_ajoutee_CA']);
        } elseif (\array_key_exists('valeur_ajoutee_CA', $data) && null === $data['valeur_ajoutee_CA']) {
            $object->setValeurAjouteeCA(null);
        }
        if (\array_key_exists('salaires_charges_sociales', $data) && null !== $data['salaires_charges_sociales']) {
            $object->setSalairesChargesSociales($data['salaires_charges_sociales']);
            unset($data['salaires_charges_sociales']);
        } elseif (\array_key_exists('salaires_charges_sociales', $data) && null === $data['salaires_charges_sociales']) {
            $object->setSalairesChargesSociales(null);
        }
        if (\array_key_exists('salaires_CA', $data) && null !== $data['salaires_CA']) {
            $object->setSalairesCA($data['salaires_CA']);
            unset($data['salaires_CA']);
        } elseif (\array_key_exists('salaires_CA', $data) && null === $data['salaires_CA']) {
            $object->setSalairesCA(null);
        }
        if (\array_key_exists('impots_taxes', $data) && null !== $data['impots_taxes']) {
            $object->setImpotsTaxes($data['impots_taxes']);
            unset($data['impots_taxes']);
        } elseif (\array_key_exists('impots_taxes', $data) && null === $data['impots_taxes']) {
            $object->setImpotsTaxes(null);
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
        if ($data->isInitialized('annee') && null !== $data->getAnnee()) {
            $dataArray['annee'] = $data->getAnnee();
        }
        if ($data->isInitialized('dateDeClotureExercice') && null !== $data->getDateDeClotureExercice()) {
            $dataArray['date_de_cloture_exercice'] = $data->getDateDeClotureExercice()?->format('Y-m-d');
        }
        if ($data->isInitialized('dureeExercice') && null !== $data->getDureeExercice()) {
            $dataArray['duree_exercice'] = $data->getDureeExercice();
        }
        if ($data->isInitialized('chiffreAffaires') && null !== $data->getChiffreAffaires()) {
            $dataArray['chiffre_affaires'] = $data->getChiffreAffaires();
        }
        if ($data->isInitialized('resultat') && null !== $data->getResultat()) {
            $dataArray['resultat'] = $data->getResultat();
        }
        if ($data->isInitialized('effectif') && null !== $data->getEffectif()) {
            $dataArray['effectif'] = $data->getEffectif();
        }
        if ($data->isInitialized('margeBrute') && null !== $data->getMargeBrute()) {
            $dataArray['marge_brute'] = $data->getMargeBrute();
        }
        if ($data->isInitialized('excedentBrutExploitation') && null !== $data->getExcedentBrutExploitation()) {
            $dataArray['excedent_brut_exploitation'] = $data->getExcedentBrutExploitation();
        }
        if ($data->isInitialized('resultatExploitation') && null !== $data->getResultatExploitation()) {
            $dataArray['resultat_exploitation'] = $data->getResultatExploitation();
        }
        if ($data->isInitialized('tauxCroissanceChiffreAffaires') && null !== $data->getTauxCroissanceChiffreAffaires()) {
            $dataArray['taux_croissance_chiffre_affaires'] = $data->getTauxCroissanceChiffreAffaires();
        }
        if ($data->isInitialized('tauxMargeBrute') && null !== $data->getTauxMargeBrute()) {
            $dataArray['taux_marge_brute'] = $data->getTauxMargeBrute();
        }
        if ($data->isInitialized('tauxMargeEBITDA') && null !== $data->getTauxMargeEBITDA()) {
            $dataArray['taux_marge_EBITDA'] = $data->getTauxMargeEBITDA();
        }
        if ($data->isInitialized('tauxMargeOperationnelle') && null !== $data->getTauxMargeOperationnelle()) {
            $dataArray['taux_marge_operationnelle'] = $data->getTauxMargeOperationnelle();
        }
        if ($data->isInitialized('bFR') && null !== $data->getBFR()) {
            $dataArray['BFR'] = $data->getBFR();
        }
        if ($data->isInitialized('bFRExploitation') && null !== $data->getBFRExploitation()) {
            $dataArray['BFR_exploitation'] = $data->getBFRExploitation();
        }
        if ($data->isInitialized('bFRHorsExploitation') && null !== $data->getBFRHorsExploitation()) {
            $dataArray['BFR_hors_exploitation'] = $data->getBFRHorsExploitation();
        }
        if ($data->isInitialized('bFRJoursCA') && null !== $data->getBFRJoursCA()) {
            $dataArray['BFR_jours_CA'] = $data->getBFRJoursCA();
        }
        if ($data->isInitialized('bFRExploitationJoursCA') && null !== $data->getBFRExploitationJoursCA()) {
            $dataArray['BFR_exploitation_jours_CA'] = $data->getBFRExploitationJoursCA();
        }
        if ($data->isInitialized('bFRHorsExploitationJoursCA') && null !== $data->getBFRHorsExploitationJoursCA()) {
            $dataArray['BFR_hors_exploitation_jours_CA'] = $data->getBFRHorsExploitationJoursCA();
        }
        if ($data->isInitialized('delaiPaiementClientsJours') && null !== $data->getDelaiPaiementClientsJours()) {
            $dataArray['delai_paiement_clients_jours'] = $data->getDelaiPaiementClientsJours();
        }
        if ($data->isInitialized('delaiPaiementFournisseursJours') && null !== $data->getDelaiPaiementFournisseursJours()) {
            $dataArray['delai_paiement_fournisseurs_jours'] = $data->getDelaiPaiementFournisseursJours();
        }
        if ($data->isInitialized('ratioStockCAJours') && null !== $data->getRatioStockCAJours()) {
            $dataArray['ratio_stock_CA_jours'] = $data->getRatioStockCAJours();
        }
        if ($data->isInitialized('capaciteAutofinancement') && null !== $data->getCapaciteAutofinancement()) {
            $dataArray['capacite_autofinancement'] = $data->getCapaciteAutofinancement();
        }
        if ($data->isInitialized('capaciteAutofinancementCA') && null !== $data->getCapaciteAutofinancementCA()) {
            $dataArray['capacite_autofinancement_CA'] = $data->getCapaciteAutofinancementCA();
        }
        if ($data->isInitialized('fondsRoulementNetGlobal') && null !== $data->getFondsRoulementNetGlobal()) {
            $dataArray['fonds_roulement_net_global'] = $data->getFondsRoulementNetGlobal();
        }
        if ($data->isInitialized('couvertureBFR') && null !== $data->getCouvertureBFR()) {
            $dataArray['couverture_BFR'] = $data->getCouvertureBFR();
        }
        if ($data->isInitialized('tresorerie') && null !== $data->getTresorerie()) {
            $dataArray['tresorerie'] = $data->getTresorerie();
        }
        if ($data->isInitialized('dettesFinancieres') && null !== $data->getDettesFinancieres()) {
            $dataArray['dettes_financieres'] = $data->getDettesFinancieres();
        }
        if ($data->isInitialized('capaciteRemboursement') && null !== $data->getCapaciteRemboursement()) {
            $dataArray['capacite_remboursement'] = $data->getCapaciteRemboursement();
        }
        if ($data->isInitialized('ratioEndettement') && null !== $data->getRatioEndettement()) {
            $dataArray['ratio_endettement'] = $data->getRatioEndettement();
        }
        if ($data->isInitialized('autonomieFinanciere') && null !== $data->getAutonomieFinanciere()) {
            $dataArray['autonomie_financiere'] = $data->getAutonomieFinanciere();
        }
        if ($data->isInitialized('tauxLevier') && null !== $data->getTauxLevier()) {
            $dataArray['taux_levier'] = $data->getTauxLevier();
        }
        if ($data->isInitialized('etatDettes1AnAuPlus') && null !== $data->getEtatDettes1AnAuPlus()) {
            $dataArray['etat_dettes_1_an_au_plus'] = $data->getEtatDettes1AnAuPlus();
        }
        if ($data->isInitialized('liquiditeGenerale') && null !== $data->getLiquiditeGenerale()) {
            $dataArray['liquidite_generale'] = $data->getLiquiditeGenerale();
        }
        if ($data->isInitialized('couvertureDettes') && null !== $data->getCouvertureDettes()) {
            $dataArray['couverture_dettes'] = $data->getCouvertureDettes();
        }
        if ($data->isInitialized('margeNette') && null !== $data->getMargeNette()) {
            $dataArray['marge_nette'] = $data->getMargeNette();
        }
        if ($data->isInitialized('rentabiliteFondsPropres') && null !== $data->getRentabiliteFondsPropres()) {
            $dataArray['rentabilite_fonds_propres'] = $data->getRentabiliteFondsPropres();
        }
        if ($data->isInitialized('rentabiliteEconomique') && null !== $data->getRentabiliteEconomique()) {
            $dataArray['rentabilite_economique'] = $data->getRentabiliteEconomique();
        }
        if ($data->isInitialized('valeurAjoutee') && null !== $data->getValeurAjoutee()) {
            $dataArray['valeur_ajoutee'] = $data->getValeurAjoutee();
        }
        if ($data->isInitialized('valeurAjouteeCA') && null !== $data->getValeurAjouteeCA()) {
            $dataArray['valeur_ajoutee_CA'] = $data->getValeurAjouteeCA();
        }
        if ($data->isInitialized('salairesChargesSociales') && null !== $data->getSalairesChargesSociales()) {
            $dataArray['salaires_charges_sociales'] = $data->getSalairesChargesSociales();
        }
        if ($data->isInitialized('salairesCA') && null !== $data->getSalairesCA()) {
            $dataArray['salaires_CA'] = $data->getSalairesCA();
        }
        if ($data->isInitialized('impotsTaxes') && null !== $data->getImpotsTaxes()) {
            $dataArray['impots_taxes'] = $data->getImpotsTaxes();
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
        return [EntrepriseFichefinancesItem::class => false];
    }
}
