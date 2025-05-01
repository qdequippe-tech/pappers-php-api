<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItem;
use Qdequippe\Pappers\Api\Model\Ratios;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseComptesGetResponse200ItemItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseComptesGetResponse200ItemItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseComptesGetResponse200ItemItem();
        if (\array_key_exists('confidentialite', $data) && \is_int($data['confidentialite'])) {
            $data['confidentialite'] = (bool) $data['confidentialite'];
        }
        if (\array_key_exists('confidentialite_compte_de_resultat', $data) && \is_int($data['confidentialite_compte_de_resultat'])) {
            $data['confidentialite_compte_de_resultat'] = (bool) $data['confidentialite_compte_de_resultat'];
        }
        if (\array_key_exists('coherence_comptable', $data) && \is_int($data['coherence_comptable'])) {
            $data['coherence_comptable'] = (bool) $data['coherence_comptable'];
        }
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
        if (\array_key_exists('coherence_comptable', $data) && null !== $data['coherence_comptable']) {
            $object->setCoherenceComptable($data['coherence_comptable']);
            unset($data['coherence_comptable']);
        } elseif (\array_key_exists('coherence_comptable', $data) && null === $data['coherence_comptable']) {
            $object->setCoherenceComptable(null);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, EntrepriseComptesGetResponse200ItemItemSectionsItem::class, 'json', $context);
            }
            $object->setSections($values_1);
            unset($data['sections']);
        } elseif (\array_key_exists('sections', $data) && null === $data['sections']) {
            $object->setSections(null);
        }
        if (\array_key_exists('ratios', $data) && null !== $data['ratios']) {
            $object->setRatios($this->denormalizer->denormalize($data['ratios'], Ratios::class, 'json', $context));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDepot') && null !== $data->getDateDepot()) {
            $dataArray['date_depot'] = $data->getDateDepot();
        }
        if ($data->isInitialized('codeGreffe') && null !== $data->getCodeGreffe()) {
            $dataArray['code_greffe'] = $data->getCodeGreffe();
        }
        if ($data->isInitialized('numeroDepot') && null !== $data->getNumeroDepot()) {
            $dataArray['numero_depot'] = $data->getNumeroDepot();
        }
        if ($data->isInitialized('numeroGestion') && null !== $data->getNumeroGestion()) {
            $dataArray['numero_gestion'] = $data->getNumeroGestion();
        }
        if ($data->isInitialized('dateCloture') && null !== $data->getDateCloture()) {
            $dataArray['date_cloture'] = $data->getDateCloture();
        }
        if ($data->isInitialized('dateClotureN1') && null !== $data->getDateClotureN1()) {
            $dataArray['date_cloture_n-1'] = $data->getDateClotureN1();
        }
        if ($data->isInitialized('dureeExerciceN') && null !== $data->getDureeExerciceN()) {
            $dataArray['duree_exercice_n'] = $data->getDureeExerciceN();
        }
        if ($data->isInitialized('dureeExerciceN1') && null !== $data->getDureeExerciceN1()) {
            $dataArray['duree_exercice_n-1'] = $data->getDureeExerciceN1();
        }
        if ($data->isInitialized('typeComptes') && null !== $data->getTypeComptes()) {
            $dataArray['type_comptes'] = $data->getTypeComptes();
        }
        if ($data->isInitialized('libelleTypeComptes') && null !== $data->getLibelleTypeComptes()) {
            $dataArray['libelle_type_comptes'] = $data->getLibelleTypeComptes();
        }
        if ($data->isInitialized('devise') && null !== $data->getDevise()) {
            $dataArray['devise'] = $data->getDevise();
        }
        if ($data->isInitialized('deviseOrigine') && null !== $data->getDeviseOrigine()) {
            $dataArray['devise_origine'] = $data->getDeviseOrigine();
        }
        if ($data->isInitialized('confidentialite') && null !== $data->getConfidentialite()) {
            $dataArray['confidentialite'] = $data->getConfidentialite();
        }
        if ($data->isInitialized('confidentialiteCompteDeResultat') && null !== $data->getConfidentialiteCompteDeResultat()) {
            $dataArray['confidentialite_compte_de_resultat'] = $data->getConfidentialiteCompteDeResultat();
        }
        if ($data->isInitialized('coherenceComptable') && null !== $data->getCoherenceComptable()) {
            $dataArray['coherence_comptable'] = $data->getCoherenceComptable();
        }
        if ($data->isInitialized('typeSaisie') && null !== $data->getTypeSaisie()) {
            $dataArray['type_saisie'] = $data->getTypeSaisie();
        }
        if ($data->isInitialized('informationsTraitement') && null !== $data->getInformationsTraitement()) {
            $values = [];
            foreach ($data->getInformationsTraitement() as $value) {
                $values[] = $value;
            }
            $dataArray['informations_traitement'] = $values;
        }
        if ($data->isInitialized('sections') && null !== $data->getSections()) {
            $values_1 = [];
            foreach ($data->getSections() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['sections'] = $values_1;
        }
        if ($data->isInitialized('ratios') && null !== $data->getRatios()) {
            $dataArray['ratios'] = $this->normalizer->normalize($data->getRatios(), 'json', $context);
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
        return [EntrepriseComptesGetResponse200ItemItem::class => false];
    }
}
