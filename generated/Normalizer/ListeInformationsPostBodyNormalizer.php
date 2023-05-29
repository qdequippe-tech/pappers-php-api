<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ListeInformationsPostBody;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListeInformationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\ListeInformationsPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\ListeInformationsPostBody' === $data::class;
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
        $object = new ListeInformationsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('notifications', $data) && null !== $data['notifications']) {
            $values = [];
            foreach ($data['notifications'] as $value) {
                $values[] = $value;
            }
            $object->setNotifications($values);
            unset($data['notifications']);
        } elseif (\array_key_exists('notifications', $data) && null === $data['notifications']) {
            $object->setNotifications(null);
        }
        if (\array_key_exists('informations', $data) && null !== $data['informations']) {
            $object->setInformations($data['informations']);
            unset($data['informations']);
        } elseif (\array_key_exists('informations', $data) && null === $data['informations']) {
            $object->setInformations(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('notifications') && null !== $object->getNotifications()) {
            $values = [];
            foreach ($object->getNotifications() as $value) {
                $values[] = $value;
            }
            $data['notifications'] = $values;
        }
        if ($object->isInitialized('informations') && null !== $object->getInformations()) {
            $data['informations'] = $object->getInformations();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
