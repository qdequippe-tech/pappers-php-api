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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem' === $data::class;
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
        $object = new EntrepriseFichecomptesItem();
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

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
            $data['date_depot'] = $object->getDateDepot()->format('Y-m-d');
        }
        if ($object->isInitialized('dateDepotFormate') && null !== $object->getDateDepotFormate()) {
            $data['date_depot_formate'] = $object->getDateDepotFormate();
        }
        if ($object->isInitialized('dateCloture') && null !== $object->getDateCloture()) {
            $data['date_cloture'] = $object->getDateCloture()->format('Y-m-d');
        }
        if ($object->isInitialized('anneeCloture') && null !== $object->getAnneeCloture()) {
            $data['annee_cloture'] = $object->getAnneeCloture();
        }
        if ($object->isInitialized('confidentialite') && null !== $object->getConfidentialite()) {
            $data['confidentialite'] = $object->getConfidentialite();
        }
        if ($object->isInitialized('confidentialiteCompteDeResultat') && null !== $object->getConfidentialiteCompteDeResultat()) {
            $data['confidentialite_compte_de_resultat'] = $object->getConfidentialiteCompteDeResultat();
        }
        if ($object->isInitialized('disponible') && null !== $object->getDisponible()) {
            $data['disponible'] = $object->getDisponible();
        }
        if ($object->isInitialized('nomFichierPdf') && null !== $object->getNomFichierPdf()) {
            $data['nom_fichier_pdf'] = $object->getNomFichierPdf();
        }
        if ($object->isInitialized('token') && null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        if ($object->isInitialized('disponibleXlsx') && null !== $object->getDisponibleXlsx()) {
            $data['disponible_xlsx'] = $object->getDisponibleXlsx();
        }
        if ($object->isInitialized('nomFichierXlsx') && null !== $object->getNomFichierXlsx()) {
            $data['nom_fichier_xlsx'] = $object->getNomFichierXlsx();
        }
        if ($object->isInitialized('tokenXlsx') && null !== $object->getTokenXlsx()) {
            $data['token_xlsx'] = $object->getTokenXlsx();
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
        return ['Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem' => false];
    }
}
