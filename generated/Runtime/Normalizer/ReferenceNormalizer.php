<?php

namespace Qdequippe\Pappers\Api\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4) {
    class ReferenceNormalizer implements NormalizerInterface
    {
        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $ref = [];
            $ref['$ref'] = (string) $object->getReferenceUri();

            return $ref;
        }

        public function supportsNormalization($data, $format = null): bool
        {
            return $data instanceof Reference;
        }
    }
} else {
    class ReferenceNormalizer implements NormalizerInterface
    {
        public function normalize($object, $format = null, array $context = [])
        {
            $ref = [];
            $ref['$ref'] = (string) $object->getReferenceUri();

            return $ref;
        }

        public function supportsNormalization($data, $format = null): bool
        {
            return $data instanceof Reference;
        }
    }
}
