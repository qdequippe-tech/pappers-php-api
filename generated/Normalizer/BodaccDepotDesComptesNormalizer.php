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

class BodaccDepotDesComptesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\BodaccDepotDesComptes' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\BodaccDepotDesComptes' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero_parution', $data)) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('numero_annonce', $data)) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        }
        if (\array_key_exists('bodacc', $data)) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('greffe', $data)) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        }
        if (\array_key_exists('date_cloture', $data)) {
            $object->setDateCloture($data['date_cloture']);
            unset($data['date_cloture']);
        }
        if (\array_key_exists('type_depot', $data)) {
            $object->setTypeDepot($data['type_depot']);
            unset($data['type_depot']);
        }
        if (\array_key_exists('descriptif', $data)) {
            $object->setDescriptif($data['descriptif']);
            unset($data['descriptif']);
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
        if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
            $data['numero_parution'] = $object->getNumeroParution();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
            $data['numero_annonce'] = $object->getNumeroAnnonce();
        }
        if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
            $data['bodacc'] = $object->getBodacc();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
            $data['greffe'] = $object->getGreffe();
        }
        if ($object->isInitialized('dateCloture') && null !== $object->getDateCloture()) {
            $data['date_cloture'] = $object->getDateCloture();
        }
        if ($object->isInitialized('typeDepot') && null !== $object->getTypeDepot()) {
            $data['type_depot'] = $object->getTypeDepot();
        }
        if ($object->isInitialized('descriptif') && null !== $object->getDescriptif()) {
            $data['descriptif'] = $object->getDescriptif();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
