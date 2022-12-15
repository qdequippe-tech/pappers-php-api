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

class EntrepriseFichederniersStatutsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichederniersStatuts' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichederniersStatuts' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts();
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
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('decision', $data)) {
            $object->setDecision($data['decision']);
            unset($data['decision']);
        }
        if (\array_key_exists('date_acte', $data)) {
            $object->setDateActe(\DateTime::createFromFormat('Y-m-d', $data['date_acte'])->setTime(0, 0, 0));
            unset($data['date_acte']);
        }
        if (\array_key_exists('date_acte_formate', $data)) {
            $object->setDateActeFormate($data['date_acte_formate']);
            unset($data['date_acte_formate']);
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
        if ($object->isInitialized('disponible') && null !== $object->getDisponible()) {
            $data['disponible'] = $object->getDisponible();
        }
        if ($object->isInitialized('nomFichierPdf') && null !== $object->getNomFichierPdf()) {
            $data['nom_fichier_pdf'] = $object->getNomFichierPdf();
        }
        if ($object->isInitialized('token') && null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('decision') && null !== $object->getDecision()) {
            $data['decision'] = $object->getDecision();
        }
        if ($object->isInitialized('dateActe') && null !== $object->getDateActe()) {
            $data['date_acte'] = $object->getDateActe()->format('Y-m-d');
        }
        if ($object->isInitialized('dateActeFormate') && null !== $object->getDateActeFormate()) {
            $data['date_acte_formate'] = $object->getDateActeFormate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
