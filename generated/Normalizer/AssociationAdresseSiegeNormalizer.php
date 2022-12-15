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

class AssociationAdresseSiegeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseSiege' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseSiege' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\AssociationAdresseSiege();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code_postal', $data)) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        if (\array_key_exists('code_insee', $data)) {
            $object->setCodeInsee($data['code_insee']);
            unset($data['code_insee']);
        }
        if (\array_key_exists('ville', $data)) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        }
        if (\array_key_exists('numero_voie', $data)) {
            $object->setNumeroVoie($data['numero_voie']);
            unset($data['numero_voie']);
        }
        if (\array_key_exists('indice_repetition', $data)) {
            $object->setIndiceRepetition($data['indice_repetition']);
            unset($data['indice_repetition']);
        }
        if (\array_key_exists('type_voie', $data)) {
            $object->setTypeVoie($data['type_voie']);
            unset($data['type_voie']);
        }
        if (\array_key_exists('libelle_voie', $data)) {
            $object->setLibelleVoie($data['libelle_voie']);
            unset($data['libelle_voie']);
        }
        if (\array_key_exists('complement_adresse', $data)) {
            $object->setComplementAdresse($data['complement_adresse']);
            unset($data['complement_adresse']);
        }
        if (\array_key_exists('distribution', $data)) {
            $object->setDistribution($data['distribution']);
            unset($data['distribution']);
        }
        if (\array_key_exists('adresse_ligne_1', $data)) {
            $object->setAdresseLigne1($data['adresse_ligne_1']);
            unset($data['adresse_ligne_1']);
        }
        if (\array_key_exists('adresse_ligne_2', $data)) {
            $object->setAdresseLigne2($data['adresse_ligne_2']);
            unset($data['adresse_ligne_2']);
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
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['code_postal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('codeInsee') && null !== $object->getCodeInsee()) {
            $data['code_insee'] = $object->getCodeInsee();
        }
        if ($object->isInitialized('ville') && null !== $object->getVille()) {
            $data['ville'] = $object->getVille();
        }
        if ($object->isInitialized('numeroVoie') && null !== $object->getNumeroVoie()) {
            $data['numero_voie'] = $object->getNumeroVoie();
        }
        if ($object->isInitialized('indiceRepetition') && null !== $object->getIndiceRepetition()) {
            $data['indice_repetition'] = $object->getIndiceRepetition();
        }
        if ($object->isInitialized('typeVoie') && null !== $object->getTypeVoie()) {
            $data['type_voie'] = $object->getTypeVoie();
        }
        if ($object->isInitialized('libelleVoie') && null !== $object->getLibelleVoie()) {
            $data['libelle_voie'] = $object->getLibelleVoie();
        }
        if ($object->isInitialized('complementAdresse') && null !== $object->getComplementAdresse()) {
            $data['complement_adresse'] = $object->getComplementAdresse();
        }
        if ($object->isInitialized('distribution') && null !== $object->getDistribution()) {
            $data['distribution'] = $object->getDistribution();
        }
        if ($object->isInitialized('adresseLigne1') && null !== $object->getAdresseLigne1()) {
            $data['adresse_ligne_1'] = $object->getAdresseLigne1();
        }
        if ($object->isInitialized('adresseLigne2') && null !== $object->getAdresseLigne2()) {
            $data['adresse_ligne_2'] = $object->getAdresseLigne2();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
