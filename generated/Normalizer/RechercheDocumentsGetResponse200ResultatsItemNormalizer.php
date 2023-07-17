<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RechercheDocumentsGetResponse200ResultatsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200ResultatsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200ResultatsItem' === $data::class;
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
        $object = new RechercheDocumentsGetResponse200ResultatsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('date_depot', $data) && null !== $data['date_depot']) {
            $object->setDateDepot(\DateTime::createFromFormat('Y-m-d', $data['date_depot'])->setTime(0, 0, 0));
            unset($data['date_depot']);
        } elseif (\array_key_exists('date_depot', $data) && null === $data['date_depot']) {
            $object->setDateDepot(null);
        }
        if (\array_key_exists('mentions', $data) && null !== $data['mentions']) {
            $values = [];
            foreach ($data['mentions'] as $value) {
                $values[] = $value;
            }
            $object->setMentions($values);
            unset($data['mentions']);
        } elseif (\array_key_exists('mentions', $data) && null === $data['mentions']) {
            $object->setMentions(null);
        }
        if (\array_key_exists('entreprise', $data) && null !== $data['entreprise']) {
            $object->setEntreprise($this->denormalizer->denormalize($data['entreprise'], 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseRecherche', 'json', $context));
            unset($data['entreprise']);
        } elseif (\array_key_exists('entreprise', $data) && null === $data['entreprise']) {
            $object->setEntreprise(null);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('dateDepot') && null !== $object->getDateDepot()) {
            $data['date_depot'] = $object->getDateDepot()->format('Y-m-d');
        }
        if ($object->isInitialized('mentions') && null !== $object->getMentions()) {
            $values = [];
            foreach ($object->getMentions() as $value) {
                $values[] = $value;
            }
            $data['mentions'] = $values;
        }
        if ($object->isInitialized('entreprise') && null !== $object->getEntreprise()) {
            $data['entreprise'] = $this->normalizer->normalize($object->getEntreprise(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200ResultatsItem' => false];
    }
}
