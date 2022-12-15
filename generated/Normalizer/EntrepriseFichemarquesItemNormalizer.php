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

class EntrepriseFichemarquesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItem' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero', $data)) {
            $object->setNumero($data['numero']);
            unset($data['numero']);
        }
        if (\array_key_exists('date_enregistrement', $data)) {
            $object->setDateEnregistrement($data['date_enregistrement']);
            unset($data['date_enregistrement']);
        }
        if (\array_key_exists('date_expiration', $data)) {
            $object->setDateExpiration($data['date_expiration']);
            unset($data['date_expiration']);
        }
        if (\array_key_exists('lieu_enregistrement', $data)) {
            $object->setLieuEnregistrement($data['lieu_enregistrement']);
            unset($data['lieu_enregistrement']);
        }
        if (\array_key_exists('statut', $data)) {
            $object->setStatut($data['statut']);
            unset($data['statut']);
        }
        if (\array_key_exists('texte', $data)) {
            $object->setTexte($data['texte']);
            unset($data['texte']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('lien_image', $data)) {
            $object->setLienImage($data['lien_image']);
            unset($data['lien_image']);
        }
        if (\array_key_exists('descriptions', $data)) {
            $values = [];
            foreach ($data['descriptions'] as $value) {
                $values[] = $value;
            }
            $object->setDescriptions($values);
            unset($data['descriptions']);
        }
        if (\array_key_exists('classes', $data)) {
            $values_1 = [];
            foreach ($data['classes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemClassesItem', 'json', $context);
            }
            $object->setClasses($values_1);
            unset($data['classes']);
        }
        if (\array_key_exists('deposant', $data)) {
            $object->setDeposant($this->denormalizer->denormalize($data['deposant'], 'Qdequippe\\Pappers\\Api\\Model\\PersonneMarque', 'json', $context));
            unset($data['deposant']);
        }
        if (\array_key_exists('mandataire', $data)) {
            $object->setMandataire($this->denormalizer->denormalize($data['mandataire'], 'Qdequippe\\Pappers\\Api\\Model\\PersonneMarque', 'json', $context));
            unset($data['mandataire']);
        }
        if (\array_key_exists('evenements', $data)) {
            $values_2 = [];
            foreach ($data['evenements'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemEvenementsItem', 'json', $context);
            }
            $object->setEvenements($values_2);
            unset($data['evenements']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('numero') && null !== $object->getNumero()) {
            $data['numero'] = $object->getNumero();
        }
        if ($object->isInitialized('dateEnregistrement') && null !== $object->getDateEnregistrement()) {
            $data['date_enregistrement'] = $object->getDateEnregistrement();
        }
        if ($object->isInitialized('dateExpiration') && null !== $object->getDateExpiration()) {
            $data['date_expiration'] = $object->getDateExpiration();
        }
        if ($object->isInitialized('lieuEnregistrement') && null !== $object->getLieuEnregistrement()) {
            $data['lieu_enregistrement'] = $object->getLieuEnregistrement();
        }
        if ($object->isInitialized('statut') && null !== $object->getStatut()) {
            $data['statut'] = $object->getStatut();
        }
        if ($object->isInitialized('texte') && null !== $object->getTexte()) {
            $data['texte'] = $object->getTexte();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('lienImage') && null !== $object->getLienImage()) {
            $data['lien_image'] = $object->getLienImage();
        }
        if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
            $values = [];
            foreach ($object->getDescriptions() as $value) {
                $values[] = $value;
            }
            $data['descriptions'] = $values;
        }
        if ($object->isInitialized('classes') && null !== $object->getClasses()) {
            $values_1 = [];
            foreach ($object->getClasses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['classes'] = $values_1;
        }
        if ($object->isInitialized('deposant') && null !== $object->getDeposant()) {
            $data['deposant'] = $this->normalizer->normalize($object->getDeposant(), 'json', $context);
        }
        if ($object->isInitialized('mandataire') && null !== $object->getMandataire()) {
            $data['mandataire'] = $this->normalizer->normalize($object->getMandataire(), 'json', $context);
        }
        if ($object->isInitialized('evenements') && null !== $object->getEvenements()) {
            $values_2 = [];
            foreach ($object->getEvenements() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['evenements'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }

        return $data;
    }
}
