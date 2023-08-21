<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Ratios;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RatiosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\Ratios' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\Ratios' === $data::class;
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
        $object = new Ratios();
        if (null === $data || false === \is_array($data)) {
            return $object;
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

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('chiffreAffaires') && null !== $object->getChiffreAffaires()) {
            $data['chiffre_affaires'] = $object->getChiffreAffaires();
        }
        if ($object->isInitialized('resultat') && null !== $object->getResultat()) {
            $data['resultat'] = $object->getResultat();
        }
        if ($object->isInitialized('effectif') && null !== $object->getEffectif()) {
            $data['effectif'] = $object->getEffectif();
        }
        if ($object->isInitialized('margeBrute') && null !== $object->getMargeBrute()) {
            $data['marge_brute'] = $object->getMargeBrute();
        }
        if ($object->isInitialized('excedentBrutExploitation') && null !== $object->getExcedentBrutExploitation()) {
            $data['excedent_brut_exploitation'] = $object->getExcedentBrutExploitation();
        }
        if ($object->isInitialized('resultatExploitation') && null !== $object->getResultatExploitation()) {
            $data['resultat_exploitation'] = $object->getResultatExploitation();
        }
        if ($object->isInitialized('tauxCroissanceChiffreAffaires') && null !== $object->getTauxCroissanceChiffreAffaires()) {
            $data['taux_croissance_chiffre_affaires'] = $object->getTauxCroissanceChiffreAffaires();
        }
        if ($object->isInitialized('tauxMargeBrute') && null !== $object->getTauxMargeBrute()) {
            $data['taux_marge_brute'] = $object->getTauxMargeBrute();
        }
        if ($object->isInitialized('tauxMargeEBITDA') && null !== $object->getTauxMargeEBITDA()) {
            $data['taux_marge_EBITDA'] = $object->getTauxMargeEBITDA();
        }
        if ($object->isInitialized('tauxMargeOperationnelle') && null !== $object->getTauxMargeOperationnelle()) {
            $data['taux_marge_operationnelle'] = $object->getTauxMargeOperationnelle();
        }
        if ($object->isInitialized('bFR') && null !== $object->getBFR()) {
            $data['BFR'] = $object->getBFR();
        }
        if ($object->isInitialized('bFRExploitation') && null !== $object->getBFRExploitation()) {
            $data['BFR_exploitation'] = $object->getBFRExploitation();
        }
        if ($object->isInitialized('bFRHorsExploitation') && null !== $object->getBFRHorsExploitation()) {
            $data['BFR_hors_exploitation'] = $object->getBFRHorsExploitation();
        }
        if ($object->isInitialized('bFRJoursCA') && null !== $object->getBFRJoursCA()) {
            $data['BFR_jours_CA'] = $object->getBFRJoursCA();
        }
        if ($object->isInitialized('bFRExploitationJoursCA') && null !== $object->getBFRExploitationJoursCA()) {
            $data['BFR_exploitation_jours_CA'] = $object->getBFRExploitationJoursCA();
        }
        if ($object->isInitialized('bFRHorsExploitationJoursCA') && null !== $object->getBFRHorsExploitationJoursCA()) {
            $data['BFR_hors_exploitation_jours_CA'] = $object->getBFRHorsExploitationJoursCA();
        }
        if ($object->isInitialized('delaiPaiementClientsJours') && null !== $object->getDelaiPaiementClientsJours()) {
            $data['delai_paiement_clients_jours'] = $object->getDelaiPaiementClientsJours();
        }
        if ($object->isInitialized('delaiPaiementFournisseursJours') && null !== $object->getDelaiPaiementFournisseursJours()) {
            $data['delai_paiement_fournisseurs_jours'] = $object->getDelaiPaiementFournisseursJours();
        }
        if ($object->isInitialized('ratioStockCAJours') && null !== $object->getRatioStockCAJours()) {
            $data['ratio_stock_CA_jours'] = $object->getRatioStockCAJours();
        }
        if ($object->isInitialized('capaciteAutofinancement') && null !== $object->getCapaciteAutofinancement()) {
            $data['capacite_autofinancement'] = $object->getCapaciteAutofinancement();
        }
        if ($object->isInitialized('capaciteAutofinancementCA') && null !== $object->getCapaciteAutofinancementCA()) {
            $data['capacite_autofinancement_CA'] = $object->getCapaciteAutofinancementCA();
        }
        if ($object->isInitialized('fondsRoulementNetGlobal') && null !== $object->getFondsRoulementNetGlobal()) {
            $data['fonds_roulement_net_global'] = $object->getFondsRoulementNetGlobal();
        }
        if ($object->isInitialized('couvertureBFR') && null !== $object->getCouvertureBFR()) {
            $data['couverture_BFR'] = $object->getCouvertureBFR();
        }
        if ($object->isInitialized('tresorerie') && null !== $object->getTresorerie()) {
            $data['tresorerie'] = $object->getTresorerie();
        }
        if ($object->isInitialized('dettesFinancieres') && null !== $object->getDettesFinancieres()) {
            $data['dettes_financieres'] = $object->getDettesFinancieres();
        }
        if ($object->isInitialized('capaciteRemboursement') && null !== $object->getCapaciteRemboursement()) {
            $data['capacite_remboursement'] = $object->getCapaciteRemboursement();
        }
        if ($object->isInitialized('ratioEndettement') && null !== $object->getRatioEndettement()) {
            $data['ratio_endettement'] = $object->getRatioEndettement();
        }
        if ($object->isInitialized('autonomieFinanciere') && null !== $object->getAutonomieFinanciere()) {
            $data['autonomie_financiere'] = $object->getAutonomieFinanciere();
        }
        if ($object->isInitialized('tauxLevier') && null !== $object->getTauxLevier()) {
            $data['taux_levier'] = $object->getTauxLevier();
        }
        if ($object->isInitialized('etatDettes1AnAuPlus') && null !== $object->getEtatDettes1AnAuPlus()) {
            $data['etat_dettes_1_an_au_plus'] = $object->getEtatDettes1AnAuPlus();
        }
        if ($object->isInitialized('liquiditeGenerale') && null !== $object->getLiquiditeGenerale()) {
            $data['liquidite_generale'] = $object->getLiquiditeGenerale();
        }
        if ($object->isInitialized('couvertureDettes') && null !== $object->getCouvertureDettes()) {
            $data['couverture_dettes'] = $object->getCouvertureDettes();
        }
        if ($object->isInitialized('margeNette') && null !== $object->getMargeNette()) {
            $data['marge_nette'] = $object->getMargeNette();
        }
        if ($object->isInitialized('rentabiliteFondsPropres') && null !== $object->getRentabiliteFondsPropres()) {
            $data['rentabilite_fonds_propres'] = $object->getRentabiliteFondsPropres();
        }
        if ($object->isInitialized('rentabiliteEconomique') && null !== $object->getRentabiliteEconomique()) {
            $data['rentabilite_economique'] = $object->getRentabiliteEconomique();
        }
        if ($object->isInitialized('valeurAjoutee') && null !== $object->getValeurAjoutee()) {
            $data['valeur_ajoutee'] = $object->getValeurAjoutee();
        }
        if ($object->isInitialized('valeurAjouteeCA') && null !== $object->getValeurAjouteeCA()) {
            $data['valeur_ajoutee_CA'] = $object->getValeurAjouteeCA();
        }
        if ($object->isInitialized('salairesChargesSociales') && null !== $object->getSalairesChargesSociales()) {
            $data['salaires_charges_sociales'] = $object->getSalairesChargesSociales();
        }
        if ($object->isInitialized('salairesCA') && null !== $object->getSalairesCA()) {
            $data['salaires_CA'] = $object->getSalairesCA();
        }
        if ($object->isInitialized('impotsTaxes') && null !== $object->getImpotsTaxes()) {
            $data['impots_taxes'] = $object->getImpotsTaxes();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Qdequippe\\Pappers\\Api\\Model\\Ratios' => false];
    }
}
