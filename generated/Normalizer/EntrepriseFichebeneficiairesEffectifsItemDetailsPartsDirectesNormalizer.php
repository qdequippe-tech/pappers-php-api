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

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes();
        if (\array_key_exists('pourcentage_pleine_propriete', $data) && \is_int($data['pourcentage_pleine_propriete'])) {
            $data['pourcentage_pleine_propriete'] = (float) $data['pourcentage_pleine_propriete'];
        }
        if (\array_key_exists('pourcentage_nue_propriete', $data) && \is_int($data['pourcentage_nue_propriete'])) {
            $data['pourcentage_nue_propriete'] = (float) $data['pourcentage_nue_propriete'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pourcentage_pleine_propriete', $data)) {
            $object->setPourcentagePleinePropriete($data['pourcentage_pleine_propriete']);
            unset($data['pourcentage_pleine_propriete']);
        }
        if (\array_key_exists('pourcentage_nue_propriete', $data)) {
            $object->setPourcentageNuePropriete($data['pourcentage_nue_propriete']);
            unset($data['pourcentage_nue_propriete']);
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
        if ($object->isInitialized('pourcentagePleinePropriete') && null !== $object->getPourcentagePleinePropriete()) {
            $data['pourcentage_pleine_propriete'] = $object->getPourcentagePleinePropriete();
        }
        if ($object->isInitialized('pourcentageNuePropriete') && null !== $object->getPourcentageNuePropriete()) {
            $data['pourcentage_nue_propriete'] = $object->getPourcentageNuePropriete();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
