<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ScoringFinancierDetailsScore;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ScoringFinancierDetailsScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ScoringFinancierDetailsScore::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ScoringFinancierDetailsScore::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ScoringFinancierDetailsScore();
        if (\array_key_exists('score_ebit_ca', $data) && \is_int($data['score_ebit_ca'])) {
            $data['score_ebit_ca'] = (float) $data['score_ebit_ca'];
        }
        if (\array_key_exists('score_fonds_de_roulement', $data) && \is_int($data['score_fonds_de_roulement'])) {
            $data['score_fonds_de_roulement'] = (float) $data['score_fonds_de_roulement'];
        }
        if (\array_key_exists('score_tresorerie_nette', $data) && \is_int($data['score_tresorerie_nette'])) {
            $data['score_tresorerie_nette'] = (float) $data['score_tresorerie_nette'];
        }
        if (\array_key_exists('score_dettes_fiscales_va', $data) && \is_int($data['score_dettes_fiscales_va'])) {
            $data['score_dettes_fiscales_va'] = (float) $data['score_dettes_fiscales_va'];
        }
        if (\array_key_exists('score_cash_flow', $data) && \is_int($data['score_cash_flow'])) {
            $data['score_cash_flow'] = (float) $data['score_cash_flow'];
        }
        if (\array_key_exists('score_dettes_fiscales_ca', $data) && \is_int($data['score_dettes_fiscales_ca'])) {
            $data['score_dettes_fiscales_ca'] = (float) $data['score_dettes_fiscales_ca'];
        }
        if (\array_key_exists('score_charges_financieres_nettes', $data) && \is_int($data['score_charges_financieres_nettes'])) {
            $data['score_charges_financieres_nettes'] = (float) $data['score_charges_financieres_nettes'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('score_ebit_ca', $data) && null !== $data['score_ebit_ca']) {
            $object->setScoreEbitCa($data['score_ebit_ca']);
            unset($data['score_ebit_ca']);
        } elseif (\array_key_exists('score_ebit_ca', $data) && null === $data['score_ebit_ca']) {
            $object->setScoreEbitCa(null);
        }
        if (\array_key_exists('score_fonds_de_roulement', $data) && null !== $data['score_fonds_de_roulement']) {
            $object->setScoreFondsDeRoulement($data['score_fonds_de_roulement']);
            unset($data['score_fonds_de_roulement']);
        } elseif (\array_key_exists('score_fonds_de_roulement', $data) && null === $data['score_fonds_de_roulement']) {
            $object->setScoreFondsDeRoulement(null);
        }
        if (\array_key_exists('score_tresorerie_nette', $data) && null !== $data['score_tresorerie_nette']) {
            $object->setScoreTresorerieNette($data['score_tresorerie_nette']);
            unset($data['score_tresorerie_nette']);
        } elseif (\array_key_exists('score_tresorerie_nette', $data) && null === $data['score_tresorerie_nette']) {
            $object->setScoreTresorerieNette(null);
        }
        if (\array_key_exists('score_dettes_fiscales_va', $data) && null !== $data['score_dettes_fiscales_va']) {
            $object->setScoreDettesFiscalesVa($data['score_dettes_fiscales_va']);
            unset($data['score_dettes_fiscales_va']);
        } elseif (\array_key_exists('score_dettes_fiscales_va', $data) && null === $data['score_dettes_fiscales_va']) {
            $object->setScoreDettesFiscalesVa(null);
        }
        if (\array_key_exists('score_cash_flow', $data) && null !== $data['score_cash_flow']) {
            $object->setScoreCashFlow($data['score_cash_flow']);
            unset($data['score_cash_flow']);
        } elseif (\array_key_exists('score_cash_flow', $data) && null === $data['score_cash_flow']) {
            $object->setScoreCashFlow(null);
        }
        if (\array_key_exists('score_dettes_fiscales_ca', $data) && null !== $data['score_dettes_fiscales_ca']) {
            $object->setScoreDettesFiscalesCa($data['score_dettes_fiscales_ca']);
            unset($data['score_dettes_fiscales_ca']);
        } elseif (\array_key_exists('score_dettes_fiscales_ca', $data) && null === $data['score_dettes_fiscales_ca']) {
            $object->setScoreDettesFiscalesCa(null);
        }
        if (\array_key_exists('score_charges_financieres_nettes', $data) && null !== $data['score_charges_financieres_nettes']) {
            $object->setScoreChargesFinancieresNettes($data['score_charges_financieres_nettes']);
            unset($data['score_charges_financieres_nettes']);
        } elseif (\array_key_exists('score_charges_financieres_nettes', $data) && null === $data['score_charges_financieres_nettes']) {
            $object->setScoreChargesFinancieresNettes(null);
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
        if ($data->isInitialized('scoreEbitCa') && null !== $data->getScoreEbitCa()) {
            $dataArray['score_ebit_ca'] = $data->getScoreEbitCa();
        }
        if ($data->isInitialized('scoreFondsDeRoulement') && null !== $data->getScoreFondsDeRoulement()) {
            $dataArray['score_fonds_de_roulement'] = $data->getScoreFondsDeRoulement();
        }
        if ($data->isInitialized('scoreTresorerieNette') && null !== $data->getScoreTresorerieNette()) {
            $dataArray['score_tresorerie_nette'] = $data->getScoreTresorerieNette();
        }
        if ($data->isInitialized('scoreDettesFiscalesVa') && null !== $data->getScoreDettesFiscalesVa()) {
            $dataArray['score_dettes_fiscales_va'] = $data->getScoreDettesFiscalesVa();
        }
        if ($data->isInitialized('scoreCashFlow') && null !== $data->getScoreCashFlow()) {
            $dataArray['score_cash_flow'] = $data->getScoreCashFlow();
        }
        if ($data->isInitialized('scoreDettesFiscalesCa') && null !== $data->getScoreDettesFiscalesCa()) {
            $dataArray['score_dettes_fiscales_ca'] = $data->getScoreDettesFiscalesCa();
        }
        if ($data->isInitialized('scoreChargesFinancieresNettes') && null !== $data->getScoreChargesFinancieresNettes()) {
            $dataArray['score_charges_financieres_nettes'] = $data->getScoreChargesFinancieresNettes();
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
        return [ScoringFinancierDetailsScore::class => false];
    }
}
