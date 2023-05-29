<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Representant;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RepresentantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\Representant' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\Representant' === $data::class;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Representant();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('qualite', $data) && null !== $data['qualite']) {
            $object->setQualite($data['qualite']);
            unset($data['qualite']);
        } elseif (\array_key_exists('qualite', $data) && null === $data['qualite']) {
            $object->setQualite(null);
        }
        if (\array_key_exists('personne_morale', $data) && null !== $data['personne_morale']) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        } elseif (\array_key_exists('personne_morale', $data) && null === $data['personne_morale']) {
            $object->setPersonneMorale(null);
        }
        if (\array_key_exists('date_prise_de_poste', $data) && null !== $data['date_prise_de_poste']) {
            $object->setDatePriseDePoste($data['date_prise_de_poste']);
            unset($data['date_prise_de_poste']);
        } elseif (\array_key_exists('date_prise_de_poste', $data) && null === $data['date_prise_de_poste']) {
            $object->setDatePriseDePoste(null);
        }
        if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
            $object->setSexe(null);
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
        if (\array_key_exists('prenom_usuel', $data) && null !== $data['prenom_usuel']) {
            $object->setPrenomUsuel($data['prenom_usuel']);
            unset($data['prenom_usuel']);
        } elseif (\array_key_exists('prenom_usuel', $data) && null === $data['prenom_usuel']) {
            $object->setPrenomUsuel(null);
        }
        if (\array_key_exists('nom_complet', $data) && null !== $data['nom_complet']) {
            $object->setNomComplet($data['nom_complet']);
            unset($data['nom_complet']);
        } elseif (\array_key_exists('nom_complet', $data) && null === $data['nom_complet']) {
            $object->setNomComplet(null);
        }
        if (\array_key_exists('date_de_naissance', $data) && null !== $data['date_de_naissance']) {
            $object->setDateDeNaissance($data['date_de_naissance']);
            unset($data['date_de_naissance']);
        } elseif (\array_key_exists('date_de_naissance', $data) && null === $data['date_de_naissance']) {
            $object->setDateDeNaissance(null);
        }
        if (\array_key_exists('date_de_naissance_formate', $data) && null !== $data['date_de_naissance_formate']) {
            $object->setDateDeNaissanceFormate($data['date_de_naissance_formate']);
            unset($data['date_de_naissance_formate']);
        } elseif (\array_key_exists('date_de_naissance_formate', $data) && null === $data['date_de_naissance_formate']) {
            $object->setDateDeNaissanceFormate(null);
        }
        if (\array_key_exists('age', $data) && null !== $data['age']) {
            $object->setAge($data['age']);
            unset($data['age']);
        } elseif (\array_key_exists('age', $data) && null === $data['age']) {
            $object->setAge(null);
        }
        if (\array_key_exists('nationalite', $data) && null !== $data['nationalite']) {
            $object->setNationalite($data['nationalite']);
            unset($data['nationalite']);
        } elseif (\array_key_exists('nationalite', $data) && null === $data['nationalite']) {
            $object->setNationalite(null);
        }
        if (\array_key_exists('code_nationalite', $data) && null !== $data['code_nationalite']) {
            $object->setCodeNationalite($data['code_nationalite']);
            unset($data['code_nationalite']);
        } elseif (\array_key_exists('code_nationalite', $data) && null === $data['code_nationalite']) {
            $object->setCodeNationalite(null);
        }
        if (\array_key_exists('ville_de_naissance', $data) && null !== $data['ville_de_naissance']) {
            $object->setVilleDeNaissance($data['ville_de_naissance']);
            unset($data['ville_de_naissance']);
        } elseif (\array_key_exists('ville_de_naissance', $data) && null === $data['ville_de_naissance']) {
            $object->setVilleDeNaissance(null);
        }
        if (\array_key_exists('pays_de_naissance', $data) && null !== $data['pays_de_naissance']) {
            $object->setPaysDeNaissance($data['pays_de_naissance']);
            unset($data['pays_de_naissance']);
        } elseif (\array_key_exists('pays_de_naissance', $data) && null === $data['pays_de_naissance']) {
            $object->setPaysDeNaissance(null);
        }
        if (\array_key_exists('code_pays_de_naissance', $data) && null !== $data['code_pays_de_naissance']) {
            $object->setCodePaysDeNaissance($data['code_pays_de_naissance']);
            unset($data['code_pays_de_naissance']);
        } elseif (\array_key_exists('code_pays_de_naissance', $data) && null === $data['code_pays_de_naissance']) {
            $object->setCodePaysDeNaissance(null);
        }
        if (\array_key_exists('adresse_ligne_1', $data) && null !== $data['adresse_ligne_1']) {
            $object->setAdresseLigne1($data['adresse_ligne_1']);
            unset($data['adresse_ligne_1']);
        } elseif (\array_key_exists('adresse_ligne_1', $data) && null === $data['adresse_ligne_1']) {
            $object->setAdresseLigne1(null);
        }
        if (\array_key_exists('adresse_ligne_2', $data) && null !== $data['adresse_ligne_2']) {
            $object->setAdresseLigne2($data['adresse_ligne_2']);
            unset($data['adresse_ligne_2']);
        } elseif (\array_key_exists('adresse_ligne_2', $data) && null === $data['adresse_ligne_2']) {
            $object->setAdresseLigne2(null);
        }
        if (\array_key_exists('adresse_ligne_3', $data) && null !== $data['adresse_ligne_3']) {
            $object->setAdresseLigne3($data['adresse_ligne_3']);
            unset($data['adresse_ligne_3']);
        } elseif (\array_key_exists('adresse_ligne_3', $data) && null === $data['adresse_ligne_3']) {
            $object->setAdresseLigne3(null);
        }
        if (\array_key_exists('code_postal', $data) && null !== $data['code_postal']) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        } elseif (\array_key_exists('code_postal', $data) && null === $data['code_postal']) {
            $object->setCodePostal(null);
        }
        if (\array_key_exists('ville', $data) && null !== $data['ville']) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        } elseif (\array_key_exists('ville', $data) && null === $data['ville']) {
            $object->setVille(null);
        }
        if (\array_key_exists('pays', $data) && null !== $data['pays']) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
            $object->setPays(null);
        }
        if (\array_key_exists('code_pays', $data) && null !== $data['code_pays']) {
            $object->setCodePays($data['code_pays']);
            unset($data['code_pays']);
        } elseif (\array_key_exists('code_pays', $data) && null === $data['code_pays']) {
            $object->setCodePays(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
