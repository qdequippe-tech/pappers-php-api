<?php

declare(strict_types=1);

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

class RechercheDirigeantsGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\RechercheDirigeantsGetResponse200ResultatsItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\RechercheDirigeantsGetResponse200ResultatsItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\RechercheDirigeantsGetResponse200ResultatsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('qualite', $data)) {
            $object->setQualite($data['qualite']);
            unset($data['qualite']);
        }
        if (\array_key_exists('personne_morale', $data)) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        }
        if (\array_key_exists('date_prise_de_poste', $data)) {
            $object->setDatePriseDePoste($data['date_prise_de_poste']);
            unset($data['date_prise_de_poste']);
        }
        if (\array_key_exists('sexe', $data)) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        }
        if (\array_key_exists('prenom', $data)) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        }
        if (\array_key_exists('prenom_usuel', $data)) {
            $object->setPrenomUsuel($data['prenom_usuel']);
            unset($data['prenom_usuel']);
        }
        if (\array_key_exists('nom_complet', $data)) {
            $object->setNomComplet($data['nom_complet']);
            unset($data['nom_complet']);
        }
        if (\array_key_exists('date_de_naissance', $data)) {
            $object->setDateDeNaissance($data['date_de_naissance']);
            unset($data['date_de_naissance']);
        }
        if (\array_key_exists('date_de_naissance_formate', $data)) {
            $object->setDateDeNaissanceFormate($data['date_de_naissance_formate']);
            unset($data['date_de_naissance_formate']);
        }
        if (\array_key_exists('age', $data)) {
            $object->setAge($data['age']);
            unset($data['age']);
        }
        if (\array_key_exists('nationalite', $data)) {
            $object->setNationalite($data['nationalite']);
            unset($data['nationalite']);
        }
        if (\array_key_exists('code_nationalite', $data)) {
            $object->setCodeNationalite($data['code_nationalite']);
            unset($data['code_nationalite']);
        }
        if (\array_key_exists('ville_de_naissance', $data)) {
            $object->setVilleDeNaissance($data['ville_de_naissance']);
            unset($data['ville_de_naissance']);
        }
        if (\array_key_exists('pays_de_naissance', $data)) {
            $object->setPaysDeNaissance($data['pays_de_naissance']);
            unset($data['pays_de_naissance']);
        }
        if (\array_key_exists('code_pays_de_naissance', $data)) {
            $object->setCodePaysDeNaissance($data['code_pays_de_naissance']);
            unset($data['code_pays_de_naissance']);
        }
        if (\array_key_exists('adresse_ligne_1', $data)) {
            $object->setAdresseLigne1($data['adresse_ligne_1']);
            unset($data['adresse_ligne_1']);
        }
        if (\array_key_exists('adresse_ligne_2', $data)) {
            $object->setAdresseLigne2($data['adresse_ligne_2']);
            unset($data['adresse_ligne_2']);
        }
        if (\array_key_exists('adresse_ligne_3', $data)) {
            $object->setAdresseLigne3($data['adresse_ligne_3']);
            unset($data['adresse_ligne_3']);
        }
        if (\array_key_exists('code_postal', $data)) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        if (\array_key_exists('ville', $data)) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        }
        if (\array_key_exists('pays', $data)) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        }
        if (\array_key_exists('code_pays', $data)) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        }
        if (\array_key_exists('actuel', $data)) {
            $object->setActuel($data['actuel']);
            unset($data['actuel']);
        }
        if (\array_key_exists('date_depart_de_poste', $data)) {
            $object->setDateDepartDePoste($data['date_depart_de_poste']);
            unset($data['date_depart_de_poste']);
        }
        if (\array_key_exists('forme_juridique', $data)) {
            $object->setFormeJuridique($data['forme_juridique']);
            unset($data['forme_juridique']);
        }
        if (\array_key_exists('entreprises', $data)) {
            $values = [];
            foreach ($data['entreprises'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseRecherche', 'json', $context);
            }
            $object->setEntreprises($values);
            unset($data['entreprises']);
        }
        if (\array_key_exists('nb_entreprises_total', $data)) {
            $object->setNbEntreprisesTotal($data['nb_entreprises_total']);
            unset($data['nb_entreprises_total']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('qualite') && null !== $object->getQualite()) {
            $data['qualite'] = $object->getQualite();
        }
        if ($object->isInitialized('personneMorale') && null !== $object->getPersonneMorale()) {
            $data['personne_morale'] = $object->getPersonneMorale();
        }
        if ($object->isInitialized('datePriseDePoste') && null !== $object->getDatePriseDePoste()) {
            $data['date_prise_de_poste'] = $object->getDatePriseDePoste();
        }
        if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
            $data['sexe'] = $object->getSexe();
        }
        if ($object->isInitialized('nom') && null !== $object->getNom()) {
            $data['nom'] = $object->getNom();
        }
        if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
            $data['prenom'] = $object->getPrenom();
        }
        if ($object->isInitialized('prenomUsuel') && null !== $object->getPrenomUsuel()) {
            $data['prenom_usuel'] = $object->getPrenomUsuel();
        }
        if ($object->isInitialized('nomComplet') && null !== $object->getNomComplet()) {
            $data['nom_complet'] = $object->getNomComplet();
        }
        if ($object->isInitialized('dateDeNaissance') && null !== $object->getDateDeNaissance()) {
            $data['date_de_naissance'] = $object->getDateDeNaissance();
        }
        if ($object->isInitialized('dateDeNaissanceFormate') && null !== $object->getDateDeNaissanceFormate()) {
            $data['date_de_naissance_formate'] = $object->getDateDeNaissanceFormate();
        }
        if ($object->isInitialized('age') && null !== $object->getAge()) {
            $data['age'] = $object->getAge();
        }
        if ($object->isInitialized('nationalite') && null !== $object->getNationalite()) {
            $data['nationalite'] = $object->getNationalite();
        }
        if ($object->isInitialized('codeNationalite') && null !== $object->getCodeNationalite()) {
            $data['code_nationalite'] = $object->getCodeNationalite();
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
        if ($object->isInitialized('actuel') && null !== $object->getActuel()) {
            $data['actuel'] = $object->getActuel();
        }
        if ($object->isInitialized('dateDepartDePoste') && null !== $object->getDateDepartDePoste()) {
            $data['date_depart_de_poste'] = $object->getDateDepartDePoste();
        }
        if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
            $data['forme_juridique'] = $object->getFormeJuridique();
        }
        if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
            $values = [];
            foreach ($object->getEntreprises() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['entreprises'] = $values;
        }
        if ($object->isInitialized('nbEntreprisesTotal') && null !== $object->getNbEntreprisesTotal()) {
            $data['nb_entreprises_total'] = $object->getNbEntreprisesTotal();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
