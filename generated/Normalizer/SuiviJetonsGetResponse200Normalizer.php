<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200;
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
    class SuiviJetonsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SuiviJetonsGetResponse200::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SuiviJetonsGetResponse200::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new SuiviJetonsGetResponse200();
            if (\array_key_exists('jetons_abonnement', $data) && \is_int($data['jetons_abonnement'])) {
                $data['jetons_abonnement'] = (float) $data['jetons_abonnement'];
            }
            if (\array_key_exists('jetons_abonnement_utilises', $data) && \is_int($data['jetons_abonnement_utilises'])) {
                $data['jetons_abonnement_utilises'] = (float) $data['jetons_abonnement_utilises'];
            }
            if (\array_key_exists('jetons_pay_as_you_go_restants', $data) && \is_int($data['jetons_pay_as_you_go_restants'])) {
                $data['jetons_pay_as_you_go_restants'] = (float) $data['jetons_pay_as_you_go_restants'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('jetons_abonnement', $data) && null !== $data['jetons_abonnement']) {
                $object->setJetonsAbonnement($data['jetons_abonnement']);
                unset($data['jetons_abonnement']);
            } elseif (\array_key_exists('jetons_abonnement', $data) && null === $data['jetons_abonnement']) {
                $object->setJetonsAbonnement(null);
            }
            if (\array_key_exists('jetons_abonnement_utilises', $data) && null !== $data['jetons_abonnement_utilises']) {
                $object->setJetonsAbonnementUtilises($data['jetons_abonnement_utilises']);
                unset($data['jetons_abonnement_utilises']);
            } elseif (\array_key_exists('jetons_abonnement_utilises', $data) && null === $data['jetons_abonnement_utilises']) {
                $object->setJetonsAbonnementUtilises(null);
            }
            if (\array_key_exists('jetons_pay_as_you_go_restants', $data) && null !== $data['jetons_pay_as_you_go_restants']) {
                $object->setJetonsPayAsYouGoRestants($data['jetons_pay_as_you_go_restants']);
                unset($data['jetons_pay_as_you_go_restants']);
            } elseif (\array_key_exists('jetons_pay_as_you_go_restants', $data) && null === $data['jetons_pay_as_you_go_restants']) {
                $object->setJetonsPayAsYouGoRestants(null);
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
            if ($object->isInitialized('jetonsAbonnement') && null !== $object->getJetonsAbonnement()) {
                $data['jetons_abonnement'] = $object->getJetonsAbonnement();
            }
            if ($object->isInitialized('jetonsAbonnementUtilises') && null !== $object->getJetonsAbonnementUtilises()) {
                $data['jetons_abonnement_utilises'] = $object->getJetonsAbonnementUtilises();
            }
            if ($object->isInitialized('jetonsPayAsYouGoRestants') && null !== $object->getJetonsPayAsYouGoRestants()) {
                $data['jetons_pay_as_you_go_restants'] = $object->getJetonsPayAsYouGoRestants();
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
            return [SuiviJetonsGetResponse200::class => false];
        }
    }
} else {
    class SuiviJetonsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SuiviJetonsGetResponse200::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SuiviJetonsGetResponse200::class === $data::class;
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
            $object = new SuiviJetonsGetResponse200();
            if (\array_key_exists('jetons_abonnement', $data) && \is_int($data['jetons_abonnement'])) {
                $data['jetons_abonnement'] = (float) $data['jetons_abonnement'];
            }
            if (\array_key_exists('jetons_abonnement_utilises', $data) && \is_int($data['jetons_abonnement_utilises'])) {
                $data['jetons_abonnement_utilises'] = (float) $data['jetons_abonnement_utilises'];
            }
            if (\array_key_exists('jetons_pay_as_you_go_restants', $data) && \is_int($data['jetons_pay_as_you_go_restants'])) {
                $data['jetons_pay_as_you_go_restants'] = (float) $data['jetons_pay_as_you_go_restants'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('jetons_abonnement', $data) && null !== $data['jetons_abonnement']) {
                $object->setJetonsAbonnement($data['jetons_abonnement']);
                unset($data['jetons_abonnement']);
            } elseif (\array_key_exists('jetons_abonnement', $data) && null === $data['jetons_abonnement']) {
                $object->setJetonsAbonnement(null);
            }
            if (\array_key_exists('jetons_abonnement_utilises', $data) && null !== $data['jetons_abonnement_utilises']) {
                $object->setJetonsAbonnementUtilises($data['jetons_abonnement_utilises']);
                unset($data['jetons_abonnement_utilises']);
            } elseif (\array_key_exists('jetons_abonnement_utilises', $data) && null === $data['jetons_abonnement_utilises']) {
                $object->setJetonsAbonnementUtilises(null);
            }
            if (\array_key_exists('jetons_pay_as_you_go_restants', $data) && null !== $data['jetons_pay_as_you_go_restants']) {
                $object->setJetonsPayAsYouGoRestants($data['jetons_pay_as_you_go_restants']);
                unset($data['jetons_pay_as_you_go_restants']);
            } elseif (\array_key_exists('jetons_pay_as_you_go_restants', $data) && null === $data['jetons_pay_as_you_go_restants']) {
                $object->setJetonsPayAsYouGoRestants(null);
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
            if ($object->isInitialized('jetonsAbonnement') && null !== $object->getJetonsAbonnement()) {
                $data['jetons_abonnement'] = $object->getJetonsAbonnement();
            }
            if ($object->isInitialized('jetonsAbonnementUtilises') && null !== $object->getJetonsAbonnementUtilises()) {
                $data['jetons_abonnement_utilises'] = $object->getJetonsAbonnementUtilises();
            }
            if ($object->isInitialized('jetonsPayAsYouGoRestants') && null !== $object->getJetonsPayAsYouGoRestants()) {
                $data['jetons_pay_as_you_go_restants'] = $object->getJetonsPayAsYouGoRestants();
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
            return [SuiviJetonsGetResponse200::class => false];
        }
    }
}
