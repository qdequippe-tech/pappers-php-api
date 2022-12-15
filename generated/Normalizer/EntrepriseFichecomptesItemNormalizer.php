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

class EntrepriseFichecomptesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichecomptesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date_depot', $data)) {
            $object->setDateDepot(\DateTime::createFromFormat('Y-m-d', $data['date_depot'])->setTime(0, 0, 0));
            unset($data['date_depot']);
        }
        if (\array_key_exists('date_depot_formate', $data)) {
            $object->setDateDepotFormate($data['date_depot_formate']);
            unset($data['date_depot_formate']);
        }
        if (\array_key_exists('date_cloture', $data)) {
            $object->setDateCloture(\DateTime::createFromFormat('Y-m-d', $data['date_cloture'])->setTime(0, 0, 0));
            unset($data['date_cloture']);
        }
        if (\array_key_exists('annee_cloture', $data)) {
            $object->setAnneeCloture($data['annee_cloture']);
            unset($data['annee_cloture']);
        }
        if (\array_key_exists('confidentialite', $data)) {
            $object->setConfidentialite($data['confidentialite']);
            unset($data['confidentialite']);
        }
        if (\array_key_exists('confidentialite_compte_de_resultat', $data)) {
            $object->setConfidentialiteCompteDeResultat($data['confidentialite_compte_de_resultat']);
            unset($data['confidentialite_compte_de_resultat']);
        }
        if (\array_key_exists('disponible', $data)) {
            $object->setDisponible($data['disponible']);
            unset($data['disponible']);
        }
        if (\array_key_exists('nom_fichier_pdf', $data)) {
            $object->setNomFichierPdf($data['nom_fichier_pdf']);
            unset($data['nom_fichier_pdf']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
            unset($data['token']);
        }
        if (\array_key_exists('disponible_xlsx', $data)) {
            $object->setDisponibleXlsx($data['disponible_xlsx']);
            unset($data['disponible_xlsx']);
        }
        if (\array_key_exists('nom_fichier_xlsx', $data)) {
            $object->setNomFichierXlsx($data['nom_fichier_xlsx']);
            unset($data['nom_fichier_xlsx']);
        }
        if (\array_key_exists('token_xlsx', $data)) {
            $object->setTokenXlsx($data['token_xlsx']);
            unset($data['token_xlsx']);
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
}
