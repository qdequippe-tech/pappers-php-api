<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Dessin;
use Qdequippe\Pappers\Api\Model\DessinDesignsItem;
use Qdequippe\Pappers\Api\Model\PersonneDessin;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DessinNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Dessin::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Dessin::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Dessin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero', $data) && null !== $data['numero']) {
            $object->setNumero($data['numero']);
            unset($data['numero']);
        } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
            $object->setNumero(null);
        }
        if (\array_key_exists('depositaires', $data) && null !== $data['depositaires']) {
            $values = [];
            foreach ($data['depositaires'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PersonneDessin::class, 'json', $context);
            }
            $object->setDepositaires($values);
            unset($data['depositaires']);
        } elseif (\array_key_exists('depositaires', $data) && null === $data['depositaires']) {
            $object->setDepositaires(null);
        }
        if (\array_key_exists('mandataires', $data) && null !== $data['mandataires']) {
            $values_1 = [];
            foreach ($data['mandataires'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, PersonneDessin::class, 'json', $context);
            }
            $object->setMandataires($values_1);
            unset($data['mandataires']);
        } elseif (\array_key_exists('mandataires', $data) && null === $data['mandataires']) {
            $object->setMandataires(null);
        }
        if (\array_key_exists('lien_image', $data) && null !== $data['lien_image']) {
            $object->setLienImage($data['lien_image']);
            unset($data['lien_image']);
        } elseif (\array_key_exists('lien_image', $data) && null === $data['lien_image']) {
            $object->setLienImage(null);
        }
        if (\array_key_exists('lieu_enregistrement', $data) && null !== $data['lieu_enregistrement']) {
            $object->setLieuEnregistrement($data['lieu_enregistrement']);
            unset($data['lieu_enregistrement']);
        } elseif (\array_key_exists('lieu_enregistrement', $data) && null === $data['lieu_enregistrement']) {
            $object->setLieuEnregistrement(null);
        }
        if (\array_key_exists('date_enregistrement', $data) && null !== $data['date_enregistrement']) {
            $object->setDateEnregistrement(\DateTime::createFromFormat('Y-m-d', $data['date_enregistrement'])->setTime(0, 0, 0));
            unset($data['date_enregistrement']);
        } elseif (\array_key_exists('date_enregistrement', $data) && null === $data['date_enregistrement']) {
            $object->setDateEnregistrement(null);
        }
        if (\array_key_exists('designs', $data) && null !== $data['designs']) {
            $values_2 = [];
            foreach ($data['designs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, DessinDesignsItem::class, 'json', $context);
            }
            $object->setDesigns($values_2);
            unset($data['designs']);
        } elseif (\array_key_exists('designs', $data) && null === $data['designs']) {
            $object->setDesigns(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numero')) {
            $dataArray['numero'] = $data->getNumero();
        }
        if ($data->isInitialized('depositaires') && null !== $data->getDepositaires()) {
            $values = [];
            foreach ($data->getDepositaires() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['depositaires'] = $values;
        }
        if ($data->isInitialized('mandataires') && null !== $data->getMandataires()) {
            $values_1 = [];
            foreach ($data->getMandataires() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['mandataires'] = $values_1;
        }
        if ($data->isInitialized('lienImage')) {
            $dataArray['lien_image'] = $data->getLienImage();
        }
        if ($data->isInitialized('lieuEnregistrement')) {
            $dataArray['lieu_enregistrement'] = $data->getLieuEnregistrement();
        }
        if ($data->isInitialized('dateEnregistrement')) {
            $dataArray['date_enregistrement'] = $data->getDateEnregistrement()?->format('Y-m-d');
        }
        if ($data->isInitialized('designs') && null !== $data->getDesigns()) {
            $values_2 = [];
            foreach ($data->getDesigns() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['designs'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Dessin::class => false];
    }
}
