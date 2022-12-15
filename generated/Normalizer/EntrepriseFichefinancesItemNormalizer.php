<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichefinancesItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichefinancesItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichefinancesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('annee', $data)) {
            $object->setAnnee($data['annee']);
            unset($data['annee']);
        }
        if (\array_key_exists('date_de_cloture_exercice', $data)) {
            $object->setDateDeClotureExercice(\DateTime::createFromFormat('Y-m-d', $data['date_de_cloture_exercice'])->setTime(0, 0, 0));
            unset($data['date_de_cloture_exercice']);
        }
        if (\array_key_exists('duree_exercice', $data)) {
            $object->setDureeExercice($data['duree_exercice']);
            unset($data['duree_exercice']);
        }
        if (\array_key_exists('chiffre_affaires', $data)) {
            $object->setChiffreAffaires($data['chiffre_affaires']);
            unset($data['chiffre_affaires']);
        }
        if (\array_key_exists('resultat', $data)) {
            $object->setResultat($data['resultat']);
            unset($data['resultat']);
        }
        if (\array_key_exists('effectif', $data)) {
            $object->setEffectif($data['effectif']);
            unset($data['effectif']);
        }
        if (\array_key_exists('marge_brute', $data)) {
            $object->setMargeBrute($data['marge_brute']);
            unset($data['marge_brute']);
        }
        if (\array_key_exists('excedent_brut_exploitation', $data)) {
            $object->setExcedentBrutExploitation($data['excedent_brut_exploitation']);
            unset($data['excedent_brut_exploitation']);
        }
        if (\array_key_exists('resultat_exploitation', $data)) {
            $object->setResultatExploitation($data['resultat_exploitation']);
            unset($data['resultat_exploitation']);
        }
        if (\array_key_exists('taux_croissance_chiffre_affaires', $data)) {
            $object->setTauxCroissanceChiffreAffaires($data['taux_croissance_chiffre_affaires']);
            unset($data['taux_croissance_chiffre_affaires']);
        }
        if (\array_key_exists('taux_marge_brute', $data)) {
            $object->setTauxMargeBrute($data['taux_marge_brute']);
            unset($data['taux_marge_brute']);
        }
        if (\array_key_exists('taux_marge_EBITDA', $data)) {
            $object->setTauxMargeEBITDA($data['taux_marge_EBITDA']);
            unset($data['taux_marge_EBITDA']);
        }
        if (\array_key_exists('taux_marge_operationnelle', $data)) {
            $object->setTauxMargeOperationnelle($data['taux_marge_operationnelle']);
            unset($data['taux_marge_operationnelle']);
        }
        if (\array_key_exists('BFR', $data)) {
            $object->setBFR($data['BFR']);
            unset($data['BFR']);
        }
        if (\array_key_exists('BFR_exploitation', $data)) {
            $object->setBFRExploitation($data['BFR_exploitation']);
            unset($data['BFR_exploitation']);
        }
        if (\array_key_exists('BFR_hors_exploitation', $data)) {
            $object->setBFRHorsExploitation($data['BFR_hors_exploitation']);
            unset($data['BFR_hors_exploitation']);
        }
        if (\array_key_exists('BFR_jours_CA', $data)) {
            $object->setBFRJoursCA($data['BFR_jours_CA']);
            unset($data['BFR_jours_CA']);
        }
        if (\array_key_exists('BFR_exploitation_jours_CA', $data)) {
            $object->setBFRExploitationJoursCA($data['BFR_exploitation_jours_CA']);
            unset($data['BFR_exploitation_jours_CA']);
        }
        if (\array_key_exists('BFR_hors_exploitation_jours_CA', $data)) {
            $object->setBFRHorsExploitationJoursCA($data['BFR_hors_exploitation_jours_CA']);
            unset($data['BFR_hors_exploitation_jours_CA']);
        }
        if (\array_key_exists('delai_paiement_clients_jours', $data)) {
            $object->setDelaiPaiementClientsJours($data['delai_paiement_clients_jours']);
            unset($data['delai_paiement_clients_jours']);
        }
        if (\array_key_exists('delai_paiement_fournisseurs_jours', $data)) {
            $object->setDelaiPaiementFournisseursJours($data['delai_paiement_fournisseurs_jours']);
            unset($data['delai_paiement_fournisseurs_jours']);
        }
        if (\array_key_exists('ratio_stock_CA_jours', $data)) {
            $object->setRatioStockCAJours($data['ratio_stock_CA_jours']);
            unset($data['ratio_stock_CA_jours']);
        }
        if (\array_key_exists('capacite_autofinancement', $data)) {
            $object->setCapaciteAutofinancement($data['capacite_autofinancement']);
            unset($data['capacite_autofinancement']);
        }
        if (\array_key_exists('capacite_autofinancement_CA', $data)) {
            $object->setCapaciteAutofinancementCA($data['capacite_autofinancement_CA']);
            unset($data['capacite_autofinancement_CA']);
        }
        if (\array_key_exists('fonds_roulement_net_global', $data)) {
            $object->setFondsRoulementNetGlobal($data['fonds_roulement_net_global']);
            unset($data['fonds_roulement_net_global']);
        }
        if (\array_key_exists('couverture_BFR', $data)) {
            $object->setCouvertureBFR($data['couverture_BFR']);
            unset($data['couverture_BFR']);
        }
        if (\array_key_exists('tresorerie', $data)) {
            $object->setTresorerie($data['tresorerie']);
            unset($data['tresorerie']);
        }
        if (\array_key_exists('dettes_financieres', $data)) {
            $object->setDettesFinancieres($data['dettes_financieres']);
            unset($data['dettes_financieres']);
        }
        if (\array_key_exists('capacite_remboursement', $data)) {
            $object->setCapaciteRemboursement($data['capacite_remboursement']);
            unset($data['capacite_remboursement']);
        }
        if (\array_key_exists('ratio_endettement', $data)) {
            $object->setRatioEndettement($data['ratio_endettement']);
            unset($data['ratio_endettement']);
        }
        if (\array_key_exists('autonomie_financiere', $data)) {
            $object->setAutonomieFinanciere($data['autonomie_financiere']);
            unset($data['autonomie_financiere']);
        }
        if (\array_key_exists('taux_levier', $data)) {
            $object->setTauxLevier($data['taux_levier']);
            unset($data['taux_levier']);
        }
        if (\array_key_exists('etat_dettes_1_an_au_plus', $data)) {
            $object->setEtatDettes1AnAuPlus($data['etat_dettes_1_an_au_plus']);
            unset($data['etat_dettes_1_an_au_plus']);
        }
        if (\array_key_exists('liquidite_generale', $data)) {
            $object->setLiquiditeGenerale($data['liquidite_generale']);
            unset($data['liquidite_generale']);
        }
        if (\array_key_exists('couverture_dettes', $data)) {
            $object->setCouvertureDettes($data['couverture_dettes']);
            unset($data['couverture_dettes']);
        }
        if (\array_key_exists('marge_nette', $data)) {
            $object->setMargeNette($data['marge_nette']);
            unset($data['marge_nette']);
        }
        if (\array_key_exists('rentabilite_fonds_propres', $data)) {
            $object->setRentabiliteFondsPropres($data['rentabilite_fonds_propres']);
            unset($data['rentabilite_fonds_propres']);
        }
        if (\array_key_exists('rentabilite_economique', $data)) {
            $object->setRentabiliteEconomique($data['rentabilite_economique']);
            unset($data['rentabilite_economique']);
        }
        if (\array_key_exists('valeur_ajoutee', $data)) {
            $object->setValeurAjoutee($data['valeur_ajoutee']);
            unset($data['valeur_ajoutee']);
        }
        if (\array_key_exists('valeur_ajoutee_CA', $data)) {
            $object->setValeurAjouteeCA($data['valeur_ajoutee_CA']);
            unset($data['valeur_ajoutee_CA']);
        }
        if (\array_key_exists('salaires_charges_sociales', $data)) {
            $object->setSalairesChargesSociales($data['salaires_charges_sociales']);
            unset($data['salaires_charges_sociales']);
        }
        if (\array_key_exists('salaires_CA', $data)) {
            $object->setSalairesCA($data['salaires_CA']);
            unset($data['salaires_CA']);
        }
        if (\array_key_exists('impots_taxes', $data)) {
            $object->setImpotsTaxes($data['impots_taxes']);
            unset($data['impots_taxes']);
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
        if ($object->isInitialized('annee') && null !== $object->getAnnee()) {
            $data['annee'] = $object->getAnnee();
        }
        if ($object->isInitialized('dateDeClotureExercice') && null !== $object->getDateDeClotureExercice()) {
            $data['date_de_cloture_exercice'] = $object->getDateDeClotureExercice()->format('Y-m-d');
        }
        if ($object->isInitialized('dureeExercice') && null !== $object->getDureeExercice()) {
            $data['duree_exercice'] = $object->getDureeExercice();
        }
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
}
