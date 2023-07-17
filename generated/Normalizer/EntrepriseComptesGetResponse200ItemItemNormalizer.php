<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseComptesGetResponse200ItemItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItem' === $data::class;
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
        $object = new EntrepriseComptesGetResponse200ItemItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date_depot', $data) && null !== $data['date_depot']) {
            $object->setDateDepot($data['date_depot']);
            unset($data['date_depot']);
        } elseif (\array_key_exists('date_depot', $data) && null === $data['date_depot']) {
            $object->setDateDepot(null);
        }
        if (\array_key_exists('code_greffe', $data) && null !== $data['code_greffe']) {
            $object->setCodeGreffe($data['code_greffe']);
            unset($data['code_greffe']);
        } elseif (\array_key_exists('code_greffe', $data) && null === $data['code_greffe']) {
            $object->setCodeGreffe(null);
        }
        if (\array_key_exists('numero_depot', $data) && null !== $data['numero_depot']) {
            $object->setNumeroDepot($data['numero_depot']);
            unset($data['numero_depot']);
        } elseif (\array_key_exists('numero_depot', $data) && null === $data['numero_depot']) {
            $object->setNumeroDepot(null);
        }
        if (\array_key_exists('numero_gestion', $data) && null !== $data['numero_gestion']) {
            $object->setNumeroGestion($data['numero_gestion']);
            unset($data['numero_gestion']);
        } elseif (\array_key_exists('numero_gestion', $data) && null === $data['numero_gestion']) {
            $object->setNumeroGestion(null);
        }
        if (\array_key_exists('date_cloture', $data) && null !== $data['date_cloture']) {
            $object->setDateCloture($data['date_cloture']);
            unset($data['date_cloture']);
        } elseif (\array_key_exists('date_cloture', $data) && null === $data['date_cloture']) {
            $object->setDateCloture(null);
        }
        if (\array_key_exists('date_cloture_n-1', $data) && null !== $data['date_cloture_n-1']) {
            $object->setDateClotureN1($data['date_cloture_n-1']);
            unset($data['date_cloture_n-1']);
        } elseif (\array_key_exists('date_cloture_n-1', $data) && null === $data['date_cloture_n-1']) {
            $object->setDateClotureN1(null);
        }
        if (\array_key_exists('duree_exercice_n', $data) && null !== $data['duree_exercice_n']) {
            $object->setDureeExerciceN($data['duree_exercice_n']);
            unset($data['duree_exercice_n']);
        } elseif (\array_key_exists('duree_exercice_n', $data) && null === $data['duree_exercice_n']) {
            $object->setDureeExerciceN(null);
        }
        if (\array_key_exists('duree_exercice_n-1', $data) && null !== $data['duree_exercice_n-1']) {
            $object->setDureeExerciceN1($data['duree_exercice_n-1']);
            unset($data['duree_exercice_n-1']);
        } elseif (\array_key_exists('duree_exercice_n-1', $data) && null === $data['duree_exercice_n-1']) {
            $object->setDureeExerciceN1(null);
        }
        if (\array_key_exists('type_comptes', $data) && null !== $data['type_comptes']) {
            $object->setTypeComptes($data['type_comptes']);
            unset($data['type_comptes']);
        } elseif (\array_key_exists('type_comptes', $data) && null === $data['type_comptes']) {
            $object->setTypeComptes(null);
        }
        if (\array_key_exists('libelle_type_comptes', $data) && null !== $data['libelle_type_comptes']) {
            $object->setLibelleTypeComptes($data['libelle_type_comptes']);
            unset($data['libelle_type_comptes']);
        } elseif (\array_key_exists('libelle_type_comptes', $data) && null === $data['libelle_type_comptes']) {
            $object->setLibelleTypeComptes(null);
        }
        if (\array_key_exists('devise', $data) && null !== $data['devise']) {
            $object->setDevise($data['devise']);
            unset($data['devise']);
        } elseif (\array_key_exists('devise', $data) && null === $data['devise']) {
            $object->setDevise(null);
        }
        if (\array_key_exists('devise_origine', $data) && null !== $data['devise_origine']) {
            $object->setDeviseOrigine($data['devise_origine']);
            unset($data['devise_origine']);
        } elseif (\array_key_exists('devise_origine', $data) && null === $data['devise_origine']) {
            $object->setDeviseOrigine(null);
        }
        if (\array_key_exists('confidentialite', $data) && null !== $data['confidentialite']) {
            $object->setConfidentialite($data['confidentialite']);
            unset($data['confidentialite']);
        } elseif (\array_key_exists('confidentialite', $data) && null === $data['confidentialite']) {
            $object->setConfidentialite(null);
        }
        if (\array_key_exists('confidentialite_compte_de_resultat', $data) && null !== $data['confidentialite_compte_de_resultat']) {
            $object->setConfidentialiteCompteDeResultat($data['confidentialite_compte_de_resultat']);
            unset($data['confidentialite_compte_de_resultat']);
        } elseif (\array_key_exists('confidentialite_compte_de_resultat', $data) && null === $data['confidentialite_compte_de_resultat']) {
            $object->setConfidentialiteCompteDeResultat(null);
        }
        if (\array_key_exists('type_saisie', $data) && null !== $data['type_saisie']) {
            $object->setTypeSaisie($data['type_saisie']);
            unset($data['type_saisie']);
        } elseif (\array_key_exists('type_saisie', $data) && null === $data['type_saisie']) {
            $object->setTypeSaisie(null);
        }
        if (\array_key_exists('informations_traitement', $data) && null !== $data['informations_traitement']) {
            $values = [];
            foreach ($data['informations_traitement'] as $value) {
                $values[] = $value;
            }
            $object->setInformationsTraitement($values);
            unset($data['informations_traitement']);
        } elseif (\array_key_exists('informations_traitement', $data) && null === $data['informations_traitement']) {
            $object->setInformationsTraitement(null);
        }
        if (\array_key_exists('sections', $data) && null !== $data['sections']) {
            $values_1 = [];
            foreach ($data['sections'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItemSectionsItem', 'json', $context);
            }
            $object->setSections($values_1);
            unset($data['sections']);
        } elseif (\array_key_exists('sections', $data) && null === $data['sections']) {
            $object->setSections(null);
        }
        if (\array_key_exists('ratios', $data) && null !== $data['ratios']) {
            $object->setRatios($this->denormalizer->denormalize($data['ratios'], 'Qdequippe\\Pappers\\Api\\Model\\Ratios', 'json', $context));
            unset($data['ratios']);
        } elseif (\array_key_exists('ratios', $data) && null === $data['ratios']) {
            $object->setRatios(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
            $data['date_depot'] = $object->getDateDepot();
        }
        if ($object->isInitialized('codeGreffe') && null !== $object->getCodeGreffe()) {
            $data['code_greffe'] = $object->getCodeGreffe();
        }
        if ($object->isInitialized('numeroDepot') && null !== $object->getNumeroDepot()) {
            $data['numero_depot'] = $object->getNumeroDepot();
        }
        if ($object->isInitialized('numeroGestion') && null !== $object->getNumeroGestion()) {
            $data['numero_gestion'] = $object->getNumeroGestion();
        }
        if ($object->isInitialized('dateCloture') && null !== $object->getDateCloture()) {
            $data['date_cloture'] = $object->getDateCloture();
        }
        if ($object->isInitialized('dateClotureN1') && null !== $object->getDateClotureN1()) {
            $data['date_cloture_n-1'] = $object->getDateClotureN1();
        }
        if ($object->isInitialized('dureeExerciceN') && null !== $object->getDureeExerciceN()) {
            $data['duree_exercice_n'] = $object->getDureeExerciceN();
        }
        if ($object->isInitialized('dureeExerciceN1') && null !== $object->getDureeExerciceN1()) {
            $data['duree_exercice_n-1'] = $object->getDureeExerciceN1();
        }
        if ($object->isInitialized('typeComptes') && null !== $object->getTypeComptes()) {
            $data['type_comptes'] = $object->getTypeComptes();
        }
        if ($object->isInitialized('libelleTypeComptes') && null !== $object->getLibelleTypeComptes()) {
            $data['libelle_type_comptes'] = $object->getLibelleTypeComptes();
        }
        if ($object->isInitialized('devise') && null !== $object->getDevise()) {
            $data['devise'] = $object->getDevise();
        }
        if ($object->isInitialized('deviseOrigine') && null !== $object->getDeviseOrigine()) {
            $data['devise_origine'] = $object->getDeviseOrigine();
        }
        if ($object->isInitialized('confidentialite') && null !== $object->getConfidentialite()) {
            $data['confidentialite'] = $object->getConfidentialite();
        }
        if ($object->isInitialized('confidentialiteCompteDeResultat') && null !== $object->getConfidentialiteCompteDeResultat()) {
            $data['confidentialite_compte_de_resultat'] = $object->getConfidentialiteCompteDeResultat();
        }
        if ($object->isInitialized('typeSaisie') && null !== $object->getTypeSaisie()) {
            $data['type_saisie'] = $object->getTypeSaisie();
        }
        if ($object->isInitialized('informationsTraitement') && null !== $object->getInformationsTraitement()) {
            $values = [];
            foreach ($object->getInformationsTraitement() as $value) {
                $values[] = $value;
            }
            $data['informations_traitement'] = $values;
        }
        if ($object->isInitialized('sections') && null !== $object->getSections()) {
            $values_1 = [];
            foreach ($object->getSections() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['sections'] = $values_1;
        }
        if ($object->isInitialized('ratios') && null !== $object->getRatios()) {
            $data['ratios'] = $this->normalizer->normalize($object->getRatios(), 'json', $context);
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItem' => false];
    }
}
