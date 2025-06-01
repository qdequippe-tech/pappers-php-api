<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\LienSuccession;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LienSuccessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LienSuccession::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LienSuccession::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new LienSuccession();
        if (\array_key_exists('transfert_siege', $data) && \is_int($data['transfert_siege'])) {
            $data['transfert_siege'] = (bool) $data['transfert_siege'];
        }
        if (\array_key_exists('continuite_economique', $data) && \is_int($data['continuite_economique'])) {
            $data['continuite_economique'] = (bool) $data['continuite_economique'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siret', $data) && null !== $data['siret']) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
        } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
            $object->setSiret(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('transfert_siege', $data) && null !== $data['transfert_siege']) {
            $object->setTransfertSiege($data['transfert_siege']);
            unset($data['transfert_siege']);
        } elseif (\array_key_exists('transfert_siege', $data) && null === $data['transfert_siege']) {
            $object->setTransfertSiege(null);
        }
        if (\array_key_exists('continuite_economique', $data) && null !== $data['continuite_economique']) {
            $object->setContinuiteEconomique($data['continuite_economique']);
            unset($data['continuite_economique']);
        } elseif (\array_key_exists('continuite_economique', $data) && null === $data['continuite_economique']) {
            $object->setContinuiteEconomique(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('transfertSiege') && null !== $data->getTransfertSiege()) {
            $dataArray['transfert_siege'] = $data->getTransfertSiege();
        }
        if ($data->isInitialized('continuiteEconomique') && null !== $data->getContinuiteEconomique()) {
            $dataArray['continuite_economique'] = $data->getContinuiteEconomique();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LienSuccession::class => false];
    }
}
