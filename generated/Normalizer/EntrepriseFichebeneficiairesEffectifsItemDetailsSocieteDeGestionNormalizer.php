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

class EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }
        if (\array_key_exists('siren', $data) && null !== $data['siren']) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        } elseif (\array_key_exists('siren', $data) && null === $data['siren']) {
            $object->setSiren(null);
        }
        if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
            $object->setGreffe(null);
        }
        if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
            $object->setAdresse($data['adresse']);
            unset($data['adresse']);
        } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
            $object->setAdresse(null);
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
        if ($object->isInitialized('nom') && null !== $object->getNom()) {
            $data['nom'] = $object->getNom();
        }
        if ($object->isInitialized('siren') && null !== $object->getSiren()) {
            $data['siren'] = $object->getSiren();
        }
        if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
            $data['greffe'] = $object->getGreffe();
        }
        if ($object->isInitialized('adresse') && null !== $object->getAdresse()) {
            $data['adresse'] = $object->getAdresse();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['code_postal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('ville') && null !== $object->getVille()) {
            $data['ville'] = $object->getVille();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
