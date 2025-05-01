<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichecomptesItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EntrepriseFichecomptesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EntrepriseFichecomptesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EntrepriseFichecomptesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EntrepriseFichecomptesItem();
        if (\array_key_exists('confidentialite', $data) && \is_int($data['confidentialite'])) {
            $data['confidentialite'] = (bool) $data['confidentialite'];
        }
        if (\array_key_exists('confidentialite_compte_de_resultat', $data) && \is_int($data['confidentialite_compte_de_resultat'])) {
            $data['confidentialite_compte_de_resultat'] = (bool) $data['confidentialite_compte_de_resultat'];
        }
        if (\array_key_exists('disponible', $data) && \is_int($data['disponible'])) {
            $data['disponible'] = (bool) $data['disponible'];
        }
        if (\array_key_exists('disponible_xlsx', $data) && \is_int($data['disponible_xlsx'])) {
            $data['disponible_xlsx'] = (bool) $data['disponible_xlsx'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date_depot', $data) && null !== $data['date_depot']) {
            $object->setDateDepot(\DateTime::createFromFormat('Y-m-d', $data['date_depot'])->setTime(0, 0, 0));
            unset($data['date_depot']);
        } elseif (\array_key_exists('date_depot', $data) && null === $data['date_depot']) {
            $object->setDateDepot(null);
        }
        if (\array_key_exists('date_depot_formate', $data) && null !== $data['date_depot_formate']) {
            $object->setDateDepotFormate($data['date_depot_formate']);
            unset($data['date_depot_formate']);
        } elseif (\array_key_exists('date_depot_formate', $data) && null === $data['date_depot_formate']) {
            $object->setDateDepotFormate(null);
        }
        if (\array_key_exists('date_cloture', $data) && null !== $data['date_cloture']) {
            $object->setDateCloture(\DateTime::createFromFormat('Y-m-d', $data['date_cloture'])->setTime(0, 0, 0));
            unset($data['date_cloture']);
        } elseif (\array_key_exists('date_cloture', $data) && null === $data['date_cloture']) {
            $object->setDateCloture(null);
        }
        if (\array_key_exists('annee_cloture', $data) && null !== $data['annee_cloture']) {
            $object->setAnneeCloture($data['annee_cloture']);
            unset($data['annee_cloture']);
        } elseif (\array_key_exists('annee_cloture', $data) && null === $data['annee_cloture']) {
            $object->setAnneeCloture(null);
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
        if (\array_key_exists('disponible', $data) && null !== $data['disponible']) {
            $object->setDisponible($data['disponible']);
            unset($data['disponible']);
        } elseif (\array_key_exists('disponible', $data) && null === $data['disponible']) {
            $object->setDisponible(null);
        }
        if (\array_key_exists('nom_fichier_pdf', $data) && null !== $data['nom_fichier_pdf']) {
            $object->setNomFichierPdf($data['nom_fichier_pdf']);
            unset($data['nom_fichier_pdf']);
        } elseif (\array_key_exists('nom_fichier_pdf', $data) && null === $data['nom_fichier_pdf']) {
            $object->setNomFichierPdf(null);
        }
        if (\array_key_exists('token', $data) && null !== $data['token']) {
            $object->setToken($data['token']);
            unset($data['token']);
        } elseif (\array_key_exists('token', $data) && null === $data['token']) {
            $object->setToken(null);
        }
        if (\array_key_exists('disponible_xlsx', $data) && null !== $data['disponible_xlsx']) {
            $object->setDisponibleXlsx($data['disponible_xlsx']);
            unset($data['disponible_xlsx']);
        } elseif (\array_key_exists('disponible_xlsx', $data) && null === $data['disponible_xlsx']) {
            $object->setDisponibleXlsx(null);
        }
        if (\array_key_exists('nom_fichier_xlsx', $data) && null !== $data['nom_fichier_xlsx']) {
            $object->setNomFichierXlsx($data['nom_fichier_xlsx']);
            unset($data['nom_fichier_xlsx']);
        } elseif (\array_key_exists('nom_fichier_xlsx', $data) && null === $data['nom_fichier_xlsx']) {
            $object->setNomFichierXlsx(null);
        }
        if (\array_key_exists('token_xlsx', $data) && null !== $data['token_xlsx']) {
            $object->setTokenXlsx($data['token_xlsx']);
            unset($data['token_xlsx']);
        } elseif (\array_key_exists('token_xlsx', $data) && null === $data['token_xlsx']) {
            $object->setTokenXlsx(null);
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
        if ($data->isInitialized('dateDepot') && null !== $data->getDateDepot()) {
            $dataArray['date_depot'] = $data->getDateDepot()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateDepotFormate') && null !== $data->getDateDepotFormate()) {
            $dataArray['date_depot_formate'] = $data->getDateDepotFormate();
        }
        if ($data->isInitialized('dateCloture') && null !== $data->getDateCloture()) {
            $dataArray['date_cloture'] = $data->getDateCloture()?->format('Y-m-d');
        }
        if ($data->isInitialized('anneeCloture') && null !== $data->getAnneeCloture()) {
            $dataArray['annee_cloture'] = $data->getAnneeCloture();
        }
        if ($data->isInitialized('confidentialite') && null !== $data->getConfidentialite()) {
            $dataArray['confidentialite'] = $data->getConfidentialite();
        }
        if ($data->isInitialized('confidentialiteCompteDeResultat') && null !== $data->getConfidentialiteCompteDeResultat()) {
            $dataArray['confidentialite_compte_de_resultat'] = $data->getConfidentialiteCompteDeResultat();
        }
        if ($data->isInitialized('disponible') && null !== $data->getDisponible()) {
            $dataArray['disponible'] = $data->getDisponible();
        }
        if ($data->isInitialized('nomFichierPdf') && null !== $data->getNomFichierPdf()) {
            $dataArray['nom_fichier_pdf'] = $data->getNomFichierPdf();
        }
        if ($data->isInitialized('token') && null !== $data->getToken()) {
            $dataArray['token'] = $data->getToken();
        }
        if ($data->isInitialized('disponibleXlsx') && null !== $data->getDisponibleXlsx()) {
            $dataArray['disponible_xlsx'] = $data->getDisponibleXlsx();
        }
        if ($data->isInitialized('nomFichierXlsx') && null !== $data->getNomFichierXlsx()) {
            $dataArray['nom_fichier_xlsx'] = $data->getNomFichierXlsx();
        }
        if ($data->isInitialized('tokenXlsx') && null !== $data->getTokenXlsx()) {
            $dataArray['token_xlsx'] = $data->getTokenXlsx();
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
        return [EntrepriseFichecomptesItem::class => false];
    }
}
