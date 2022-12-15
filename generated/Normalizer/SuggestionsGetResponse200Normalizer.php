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

class SuggestionsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resultats_nom_entreprise', $data)) {
            $values = [];
            foreach ($data['resultats_nom_entreprise'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsNomEntrepriseItem', 'json', $context);
            }
            $object->setResultatsNomEntreprise($values);
            unset($data['resultats_nom_entreprise']);
        }
        if (\array_key_exists('resultats_denomination', $data)) {
            $values_1 = [];
            foreach ($data['resultats_denomination'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsDenominationItem', 'json', $context);
            }
            $object->setResultatsDenomination($values_1);
            unset($data['resultats_denomination']);
        }
        if (\array_key_exists('resultats_nom_complet', $data)) {
            $values_2 = [];
            foreach ($data['resultats_nom_complet'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsNomCompletItem', 'json', $context);
            }
            $object->setResultatsNomComplet($values_2);
            unset($data['resultats_nom_complet']);
        }
        if (\array_key_exists('resultats_representant', $data)) {
            $values_3 = [];
            foreach ($data['resultats_representant'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsRepresentantItem', 'json', $context);
            }
            $object->setResultatsRepresentant($values_3);
            unset($data['resultats_representant']);
        }
        if (\array_key_exists('resultats_siren', $data)) {
            $values_4 = [];
            foreach ($data['resultats_siren'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsSirenItem', 'json', $context);
            }
            $object->setResultatsSiren($values_4);
            unset($data['resultats_siren']);
        }
        if (\array_key_exists('resultats_siret', $data)) {
            $values_5 = [];
            foreach ($data['resultats_siret'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsSiretItem', 'json', $context);
            }
            $object->setResultatsSiret($values_5);
            unset($data['resultats_siret']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
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
        if ($object->isInitialized('resultatsNomEntreprise') && null !== $object->getResultatsNomEntreprise()) {
            $values = [];
            foreach ($object->getResultatsNomEntreprise() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['resultats_nom_entreprise'] = $values;
        }
        if ($object->isInitialized('resultatsDenomination') && null !== $object->getResultatsDenomination()) {
            $values_1 = [];
            foreach ($object->getResultatsDenomination() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['resultats_denomination'] = $values_1;
        }
        if ($object->isInitialized('resultatsNomComplet') && null !== $object->getResultatsNomComplet()) {
            $values_2 = [];
            foreach ($object->getResultatsNomComplet() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['resultats_nom_complet'] = $values_2;
        }
        if ($object->isInitialized('resultatsRepresentant') && null !== $object->getResultatsRepresentant()) {
            $values_3 = [];
            foreach ($object->getResultatsRepresentant() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['resultats_representant'] = $values_3;
        }
        if ($object->isInitialized('resultatsSiren') && null !== $object->getResultatsSiren()) {
            $values_4 = [];
            foreach ($object->getResultatsSiren() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['resultats_siren'] = $values_4;
        }
        if ($object->isInitialized('resultatsSiret') && null !== $object->getResultatsSiret()) {
            $values_5 = [];
            foreach ($object->getResultatsSiret() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['resultats_siret'] = $values_5;
        }
        foreach ($object as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_6;
            }
        }

        return $data;
    }
}
