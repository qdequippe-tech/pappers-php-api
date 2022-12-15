<?php

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
        if (\array_key_exists('gestionnaire', $data) && null !== $data['gestionnaire']) {
            $object->setGestionnaire($data['gestionnaire']);
            unset($data['gestionnaire']);
        } elseif (\array_key_exists('gestionnaire', $data) && null === $data['gestionnaire']) {
            $object->setGestionnaire(null);
        }
        if (\array_key_exists('code_postal', $data) && null !== $data['code_postal']) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        } elseif (\array_key_exists('code_postal', $data) && null === $data['code_postal']) {
            $object->setCodePostal(null);
        }
        if (\array_key_exists('ville', $data) && null !== $data['ville']) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        } elseif (\array_key_exists('ville', $data) && null === $data['ville']) {
            $object->setVille(null);
        }
        if (\array_key_exists('distribution', $data) && null !== $data['distribution']) {
            $object->setDistribution($data['distribution']);
            unset($data['distribution']);
        } elseif (\array_key_exists('distribution', $data) && null === $data['distribution']) {
            $object->setDistribution(null);
        }
        if (\array_key_exists('adresse_ligne', $data) && null !== $data['adresse_ligne']) {
            $object->setAdresseLigne($data['adresse_ligne']);
            unset($data['adresse_ligne']);
        } elseif (\array_key_exists('adresse_ligne', $data) && null === $data['adresse_ligne']) {
            $object->setAdresseLigne(null);
        }
        if (\array_key_exists('complement_adresse', $data) && null !== $data['complement_adresse']) {
            $object->setComplementAdresse($data['complement_adresse']);
            unset($data['complement_adresse']);
        } elseif (\array_key_exists('complement_adresse', $data) && null === $data['complement_adresse']) {
            $object->setComplementAdresse(null);
        }
        if (\array_key_exists('indication', $data) && null !== $data['indication']) {
            $object->setIndication($data['indication']);
            unset($data['indication']);
        } elseif (\array_key_exists('indication', $data) && null === $data['indication']) {
            $object->setIndication(null);
        }
        if (\array_key_exists('pays', $data) && null !== $data['pays']) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
            $object->setPays(null);
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
