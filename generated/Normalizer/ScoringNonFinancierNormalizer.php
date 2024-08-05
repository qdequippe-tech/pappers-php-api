<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\ScoringNonFinancier;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class ScoringNonFinancierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ScoringNonFinancier::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ScoringNonFinancier::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new ScoringNonFinancier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('note', $data) && null !== $data['note']) {
                $object->setNote($data['note']);
                unset($data['note']);
            } elseif (\array_key_exists('note', $data) && null === $data['note']) {
                $object->setNote(null);
            }
            if (\array_key_exists('score', $data) && null !== $data['score']) {
                $object->setScore($data['score']);
                unset($data['score']);
            } elseif (\array_key_exists('score', $data) && null === $data['score']) {
                $object->setScore(null);
            }
            if (\array_key_exists('date_calcul', $data) && null !== $data['date_calcul']) {
                $object->setDateCalcul($data['date_calcul']);
                unset($data['date_calcul']);
            } elseif (\array_key_exists('date_calcul', $data) && null === $data['date_calcul']) {
                $object->setDateCalcul(null);
            }
            if (\array_key_exists('erreur', $data) && null !== $data['erreur']) {
                $object->setErreur($data['erreur']);
                unset($data['erreur']);
            } elseif (\array_key_exists('erreur', $data) && null === $data['erreur']) {
                $object->setErreur(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('note') && null !== $object->getNote()) {
                $data['note'] = $object->getNote();
            }
            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }
            if ($object->isInitialized('dateCalcul') && null !== $object->getDateCalcul()) {
                $data['date_calcul'] = $object->getDateCalcul();
            }
            if ($object->isInitialized('erreur') && null !== $object->getErreur()) {
                $data['erreur'] = $object->getErreur();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ScoringNonFinancier::class => false];
        }
    }
} else {
    class ScoringNonFinancierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ScoringNonFinancier::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ScoringNonFinancier::class === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new ScoringNonFinancier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('note', $data) && null !== $data['note']) {
                $object->setNote($data['note']);
                unset($data['note']);
            } elseif (\array_key_exists('note', $data) && null === $data['note']) {
                $object->setNote(null);
            }
            if (\array_key_exists('score', $data) && null !== $data['score']) {
                $object->setScore($data['score']);
                unset($data['score']);
            } elseif (\array_key_exists('score', $data) && null === $data['score']) {
                $object->setScore(null);
            }
            if (\array_key_exists('date_calcul', $data) && null !== $data['date_calcul']) {
                $object->setDateCalcul($data['date_calcul']);
                unset($data['date_calcul']);
            } elseif (\array_key_exists('date_calcul', $data) && null === $data['date_calcul']) {
                $object->setDateCalcul(null);
            }
            if (\array_key_exists('erreur', $data) && null !== $data['erreur']) {
                $object->setErreur($data['erreur']);
                unset($data['erreur']);
            } elseif (\array_key_exists('erreur', $data) && null === $data['erreur']) {
                $object->setErreur(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('note') && null !== $object->getNote()) {
                $data['note'] = $object->getNote();
            }
            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }
            if ($object->isInitialized('dateCalcul') && null !== $object->getDateCalcul()) {
                $data['date_calcul'] = $object->getDateCalcul();
            }
            if ($object->isInitialized('erreur') && null !== $object->getErreur()) {
                $data['erreur'] = $object->getErreur();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ScoringNonFinancier::class => false];
        }
    }
}
