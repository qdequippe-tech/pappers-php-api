<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\RepresentantRecherche;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RepresentantRechercheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RepresentantRecherche::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RepresentantRecherche::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new RepresentantRecherche();
        if (\array_key_exists('personne_morale', $data) && \is_int($data['personne_morale'])) {
            $data['personne_morale'] = (bool) $data['personne_morale'];
        }
        if (\array_key_exists('actuel', $data) && \is_int($data['actuel'])) {
            $data['actuel'] = (bool) $data['actuel'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('qualites', $data) && null !== $data['qualites']) {
            $values = [];
            foreach ($data['qualites'] as $value) {
                $values[] = $value;
            }
            $object->setQualites($values);
            unset($data['qualites']);
        } elseif (\array_key_exists('qualites', $data) && null === $data['qualites']) {
            $object->setQualites(null);
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
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('forme_juridique', $data) && null !== $data['forme_juridique']) {
            $object->setFormeJuridique($data['forme_juridique']);
            unset($data['forme_juridique']);
        } elseif (\array_key_exists('forme_juridique', $data) && null === $data['forme_juridique']) {
            $object->setFormeJuridique(null);
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
        if (\array_key_exists('codes_nationalites', $data) && null !== $data['codes_nationalites']) {
            $values_1 = [];
            foreach ($data['codes_nationalites'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCodesNationalites($values_1);
            unset($data['codes_nationalites']);
        } elseif (\array_key_exists('codes_nationalites', $data) && null === $data['codes_nationalites']) {
            $object->setCodesNationalites(null);
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
        if (\array_key_exists('actuel', $data) && null !== $data['actuel']) {
            $object->setActuel($data['actuel']);
            unset($data['actuel']);
        } elseif (\array_key_exists('actuel', $data) && null === $data['actuel']) {
            $object->setActuel(null);
        }
        if (\array_key_exists('date_depart_de_poste', $data) && null !== $data['date_depart_de_poste']) {
            $object->setDateDepartDePoste($data['date_depart_de_poste']);
            unset($data['date_depart_de_poste']);
        } elseif (\array_key_exists('date_depart_de_poste', $data) && null === $data['date_depart_de_poste']) {
            $object->setDateDepartDePoste(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('qualites') && null !== $data->getQualites()) {
            $values = [];
            foreach ($data->getQualites() as $value) {
                $values[] = $value;
            }
            $dataArray['qualites'] = $values;
        }
        if ($data->isInitialized('personneMorale') && null !== $data->getPersonneMorale()) {
            $dataArray['personne_morale'] = $data->getPersonneMorale();
        }
        if ($data->isInitialized('datePriseDePoste') && null !== $data->getDatePriseDePoste()) {
            $dataArray['date_prise_de_poste'] = $data->getDatePriseDePoste();
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('formeJuridique') && null !== $data->getFormeJuridique()) {
            $dataArray['forme_juridique'] = $data->getFormeJuridique();
        }
        if ($data->isInitialized('sexe') && null !== $data->getSexe()) {
            $dataArray['sexe'] = $data->getSexe();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }
        if ($data->isInitialized('prenomUsuel') && null !== $data->getPrenomUsuel()) {
            $dataArray['prenom_usuel'] = $data->getPrenomUsuel();
        }
        if ($data->isInitialized('nomComplet') && null !== $data->getNomComplet()) {
            $dataArray['nom_complet'] = $data->getNomComplet();
        }
        if ($data->isInitialized('dateDeNaissance') && null !== $data->getDateDeNaissance()) {
            $dataArray['date_de_naissance'] = $data->getDateDeNaissance();
        }
        if ($data->isInitialized('dateDeNaissanceFormate') && null !== $data->getDateDeNaissanceFormate()) {
            $dataArray['date_de_naissance_formate'] = $data->getDateDeNaissanceFormate();
        }
        if ($data->isInitialized('age') && null !== $data->getAge()) {
            $dataArray['age'] = $data->getAge();
        }
        if ($data->isInitialized('nationalite') && null !== $data->getNationalite()) {
            $dataArray['nationalite'] = $data->getNationalite();
        }
        if ($data->isInitialized('codesNationalites') && null !== $data->getCodesNationalites()) {
            $values_1 = [];
            foreach ($data->getCodesNationalites() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['codes_nationalites'] = $values_1;
        }
        if ($data->isInitialized('villeDeNaissance') && null !== $data->getVilleDeNaissance()) {
            $dataArray['ville_de_naissance'] = $data->getVilleDeNaissance();
        }
        if ($data->isInitialized('paysDeNaissance') && null !== $data->getPaysDeNaissance()) {
            $dataArray['pays_de_naissance'] = $data->getPaysDeNaissance();
        }
        if ($data->isInitialized('codePaysDeNaissance') && null !== $data->getCodePaysDeNaissance()) {
            $dataArray['code_pays_de_naissance'] = $data->getCodePaysDeNaissance();
        }
        if ($data->isInitialized('adresseLigne1') && null !== $data->getAdresseLigne1()) {
            $dataArray['adresse_ligne_1'] = $data->getAdresseLigne1();
        }
        if ($data->isInitialized('adresseLigne2') && null !== $data->getAdresseLigne2()) {
            $dataArray['adresse_ligne_2'] = $data->getAdresseLigne2();
        }
        if ($data->isInitialized('adresseLigne3') && null !== $data->getAdresseLigne3()) {
            $dataArray['adresse_ligne_3'] = $data->getAdresseLigne3();
        }
        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['code_postal'] = $data->getCodePostal();
        }
        if ($data->isInitialized('ville') && null !== $data->getVille()) {
            $dataArray['ville'] = $data->getVille();
        }
        if ($data->isInitialized('pays') && null !== $data->getPays()) {
            $dataArray['pays'] = $data->getPays();
        }
        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['code_pays'] = $data->getCodePays();
        }
        if ($data->isInitialized('actuel') && null !== $data->getActuel()) {
            $dataArray['actuel'] = $data->getActuel();
        }
        if ($data->isInitialized('dateDepartDePoste') && null !== $data->getDateDepartDePoste()) {
            $dataArray['date_depart_de_poste'] = $data->getDateDepartDePoste();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RepresentantRecherche::class => false];
    }
}
