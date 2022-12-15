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

class EtablissementRechercheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EtablissementRecherche' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EtablissementRecherche' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EtablissementRecherche();
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (float) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (float) $data['longitude'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
        }
        if (\array_key_exists('siret_formate', $data)) {
            $object->setSiretFormate($data['siret_formate']);
            unset($data['siret_formate']);
        }
        if (\array_key_exists('nic', $data)) {
            $object->setNic($data['nic']);
            unset($data['nic']);
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
        if (\array_key_exists('adresse_ligne_1', $data)) {
            $object->setAdresseLigne1($data['adresse_ligne_1']);
            unset($data['adresse_ligne_1']);
        }
        if (\array_key_exists('adresse_ligne_2', $data)) {
            $object->setAdresseLigne2($data['adresse_ligne_2']);
            unset($data['adresse_ligne_2']);
        }
        if (\array_key_exists('code_postal', $data)) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        if (\array_key_exists('ville', $data)) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        }
        if (\array_key_exists('latitude', $data)) {
            $object->setLatitude($data['latitude']);
            unset($data['latitude']);
        }
        if (\array_key_exists('longitude', $data)) {
            $object->setLongitude($data['longitude']);
            unset($data['longitude']);
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
        if ($object->isInitialized('siret') && null !== $object->getSiret()) {
            $data['siret'] = $object->getSiret();
        }
        if ($object->isInitialized('siretFormate') && null !== $object->getSiretFormate()) {
            $data['siret_formate'] = $object->getSiretFormate();
        }
        if ($object->isInitialized('nic') && null !== $object->getNic()) {
            $data['nic'] = $object->getNic();
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
        if ($object->isInitialized('adresseLigne1') && null !== $object->getAdresseLigne1()) {
            $data['adresse_ligne_1'] = $object->getAdresseLigne1();
        }
        if ($object->isInitialized('adresseLigne2') && null !== $object->getAdresseLigne2()) {
            $data['adresse_ligne_2'] = $object->getAdresseLigne2();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['code_postal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('ville') && null !== $object->getVille()) {
            $data['ville'] = $object->getVille();
        }
        if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
            $data['latitude'] = $object->getLatitude();
        }
        if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
            $data['longitude'] = $object->getLongitude();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
