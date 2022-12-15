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

class AssociationAdresseGestionnaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseGestionnaire' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseGestionnaire' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\AssociationAdresseGestionnaire();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gestionnaire', $data)) {
            $object->setGestionnaire($data['gestionnaire']);
            unset($data['gestionnaire']);
        }
        if (\array_key_exists('code_postal', $data)) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        if (\array_key_exists('ville', $data)) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        }
        if (\array_key_exists('distribution', $data)) {
            $object->setDistribution($data['distribution']);
            unset($data['distribution']);
        }
        if (\array_key_exists('adresse_ligne', $data)) {
            $object->setAdresseLigne($data['adresse_ligne']);
            unset($data['adresse_ligne']);
        }
        if (\array_key_exists('complement_adresse', $data)) {
            $object->setComplementAdresse($data['complement_adresse']);
            unset($data['complement_adresse']);
        }
        if (\array_key_exists('indication', $data)) {
            $object->setIndication($data['indication']);
            unset($data['indication']);
        }
        if (\array_key_exists('pays', $data)) {
            $object->setPays($data['pays']);
            unset($data['pays']);
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
        if ($object->isInitialized('gestionnaire') && null !== $object->getGestionnaire()) {
            $data['gestionnaire'] = $object->getGestionnaire();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['code_postal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('ville') && null !== $object->getVille()) {
            $data['ville'] = $object->getVille();
        }
        if ($object->isInitialized('distribution') && null !== $object->getDistribution()) {
            $data['distribution'] = $object->getDistribution();
        }
        if ($object->isInitialized('adresseLigne') && null !== $object->getAdresseLigne()) {
            $data['adresse_ligne'] = $object->getAdresseLigne();
        }
        if ($object->isInitialized('complementAdresse') && null !== $object->getComplementAdresse()) {
            $data['complement_adresse'] = $object->getComplementAdresse();
        }
        if ($object->isInitialized('indication') && null !== $object->getIndication()) {
            $data['indication'] = $object->getIndication();
        }
        if ($object->isInitialized('pays') && null !== $object->getPays()) {
            $data['pays'] = $object->getPays();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
