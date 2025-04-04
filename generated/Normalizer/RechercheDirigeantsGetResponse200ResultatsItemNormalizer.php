<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseRecherche;
use Qdequippe\Pappers\Api\Model\RechercheDirigeantsGetResponse200ResultatsItem;
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
    class RechercheDirigeantsGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RechercheDirigeantsGetResponse200ResultatsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheDirigeantsGetResponse200ResultatsItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new RechercheDirigeantsGetResponse200ResultatsItem();
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
            if (\array_key_exists('entreprises', $data) && null !== $data['entreprises']) {
                $values_2 = [];
                foreach ($data['entreprises'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseRecherche::class, 'json', $context);
                }
                $object->setEntreprises($values_2);
                unset($data['entreprises']);
            } elseif (\array_key_exists('entreprises', $data) && null === $data['entreprises']) {
                $object->setEntreprises(null);
            }
            if (\array_key_exists('nb_entreprises_total', $data) && null !== $data['nb_entreprises_total']) {
                $object->setNbEntreprisesTotal($data['nb_entreprises_total']);
                unset($data['nb_entreprises_total']);
            } elseif (\array_key_exists('nb_entreprises_total', $data) && null === $data['nb_entreprises_total']) {
                $object->setNbEntreprisesTotal(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('qualites') && null !== $object->getQualites()) {
                $values = [];
                foreach ($object->getQualites() as $value) {
                    $values[] = $value;
                }
                $data['qualites'] = $values;
            }
            if ($object->isInitialized('personneMorale') && null !== $object->getPersonneMorale()) {
                $data['personne_morale'] = $object->getPersonneMorale();
            }
            if ($object->isInitialized('datePriseDePoste') && null !== $object->getDatePriseDePoste()) {
                $data['date_prise_de_poste'] = $object->getDatePriseDePoste();
            }
            if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
                $data['denomination'] = $object->getDenomination();
            }
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['forme_juridique'] = $object->getFormeJuridique();
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
            if ($object->isInitialized('codesNationalites') && null !== $object->getCodesNationalites()) {
                $values_1 = [];
                foreach ($object->getCodesNationalites() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['codes_nationalites'] = $values_1;
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
            if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
                $values_2 = [];
                foreach ($object->getEntreprises() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['entreprises'] = $values_2;
            }
            if ($object->isInitialized('nbEntreprisesTotal') && null !== $object->getNbEntreprisesTotal()) {
                $data['nb_entreprises_total'] = $object->getNbEntreprisesTotal();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheDirigeantsGetResponse200ResultatsItem::class => false];
        }
    }
} else {
    class RechercheDirigeantsGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RechercheDirigeantsGetResponse200ResultatsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheDirigeantsGetResponse200ResultatsItem::class === $data::class;
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
            $object = new RechercheDirigeantsGetResponse200ResultatsItem();
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
            if (\array_key_exists('entreprises', $data) && null !== $data['entreprises']) {
                $values_2 = [];
                foreach ($data['entreprises'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, EntrepriseRecherche::class, 'json', $context);
                }
                $object->setEntreprises($values_2);
                unset($data['entreprises']);
            } elseif (\array_key_exists('entreprises', $data) && null === $data['entreprises']) {
                $object->setEntreprises(null);
            }
            if (\array_key_exists('nb_entreprises_total', $data) && null !== $data['nb_entreprises_total']) {
                $object->setNbEntreprisesTotal($data['nb_entreprises_total']);
                unset($data['nb_entreprises_total']);
            } elseif (\array_key_exists('nb_entreprises_total', $data) && null === $data['nb_entreprises_total']) {
                $object->setNbEntreprisesTotal(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('qualites') && null !== $object->getQualites()) {
                $values = [];
                foreach ($object->getQualites() as $value) {
                    $values[] = $value;
                }
                $data['qualites'] = $values;
            }
            if ($object->isInitialized('personneMorale') && null !== $object->getPersonneMorale()) {
                $data['personne_morale'] = $object->getPersonneMorale();
            }
            if ($object->isInitialized('datePriseDePoste') && null !== $object->getDatePriseDePoste()) {
                $data['date_prise_de_poste'] = $object->getDatePriseDePoste();
            }
            if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
                $data['denomination'] = $object->getDenomination();
            }
            if ($object->isInitialized('siren') && null !== $object->getSiren()) {
                $data['siren'] = $object->getSiren();
            }
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['forme_juridique'] = $object->getFormeJuridique();
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
            if ($object->isInitialized('codesNationalites') && null !== $object->getCodesNationalites()) {
                $values_1 = [];
                foreach ($object->getCodesNationalites() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['codes_nationalites'] = $values_1;
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
            if ($object->isInitialized('entreprises') && null !== $object->getEntreprises()) {
                $values_2 = [];
                foreach ($object->getEntreprises() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['entreprises'] = $values_2;
            }
            if ($object->isInitialized('nbEntreprisesTotal') && null !== $object->getNbEntreprisesTotal()) {
                $data['nb_entreprises_total'] = $object->getNbEntreprisesTotal();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheDirigeantsGetResponse200ResultatsItem::class => false];
        }
    }
}
