<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\AssociationPublicationsJoafeItem;
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
    class AssociationPublicationsJoafeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AssociationPublicationsJoafeItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AssociationPublicationsJoafeItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new AssociationPublicationsJoafeItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
                $object->setNumeroParution($data['numero_parution']);
                unset($data['numero_parution']);
            } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
                $object->setNumeroParution(null);
            }
            if (\array_key_exists('date_parution', $data) && null !== $data['date_parution']) {
                $object->setDateParution($data['date_parution']);
                unset($data['date_parution']);
            } elseif (\array_key_exists('date_parution', $data) && null === $data['date_parution']) {
                $object->setDateParution(null);
            }
            if (\array_key_exists('date_declaration', $data) && null !== $data['date_declaration']) {
                $object->setDateDeclaration($data['date_declaration']);
                unset($data['date_declaration']);
            } elseif (\array_key_exists('date_declaration', $data) && null === $data['date_declaration']) {
                $object->setDateDeclaration(null);
            }
            if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
                $object->setNumeroAnnonce($data['numero_annonce']);
                unset($data['numero_annonce']);
            } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
                $object->setNumeroAnnonce(null);
            }
            if (\array_key_exists('titre', $data) && null !== $data['titre']) {
                $object->setTitre($data['titre']);
                unset($data['titre']);
            } elseif (\array_key_exists('titre', $data) && null === $data['titre']) {
                $object->setTitre(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('prefecture', $data) && null !== $data['prefecture']) {
                $object->setPrefecture($data['prefecture']);
                unset($data['prefecture']);
            } elseif (\array_key_exists('prefecture', $data) && null === $data['prefecture']) {
                $object->setPrefecture(null);
            }
            if (\array_key_exists('objet', $data) && null !== $data['objet']) {
                $object->setObjet($data['objet']);
                unset($data['objet']);
            } elseif (\array_key_exists('objet', $data) && null === $data['objet']) {
                $object->setObjet(null);
            }
            if (\array_key_exists('site_web', $data) && null !== $data['site_web']) {
                $object->setSiteWeb($data['site_web']);
                unset($data['site_web']);
            } elseif (\array_key_exists('site_web', $data) && null === $data['site_web']) {
                $object->setSiteWeb(null);
            }
            if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
                $object->setAdresse($data['adresse']);
                unset($data['adresse']);
            } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
                $object->setAdresse(null);
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
            if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
                $data['numero_parution'] = $object->getNumeroParution();
            }
            if ($object->isInitialized('dateParution') && null !== $object->getDateParution()) {
                $data['date_parution'] = $object->getDateParution();
            }
            if ($object->isInitialized('dateDeclaration') && null !== $object->getDateDeclaration()) {
                $data['date_declaration'] = $object->getDateDeclaration();
            }
            if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
                $data['numero_annonce'] = $object->getNumeroAnnonce();
            }
            if ($object->isInitialized('titre') && null !== $object->getTitre()) {
                $data['titre'] = $object->getTitre();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('prefecture') && null !== $object->getPrefecture()) {
                $data['prefecture'] = $object->getPrefecture();
            }
            if ($object->isInitialized('objet') && null !== $object->getObjet()) {
                $data['objet'] = $object->getObjet();
            }
            if ($object->isInitialized('siteWeb') && null !== $object->getSiteWeb()) {
                $data['site_web'] = $object->getSiteWeb();
            }
            if ($object->isInitialized('adresse') && null !== $object->getAdresse()) {
                $data['adresse'] = $object->getAdresse();
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
            return [AssociationPublicationsJoafeItem::class => false];
        }
    }
} else {
    class AssociationPublicationsJoafeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AssociationPublicationsJoafeItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AssociationPublicationsJoafeItem::class === $data::class;
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
            $object = new AssociationPublicationsJoafeItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
                $object->setNumeroParution($data['numero_parution']);
                unset($data['numero_parution']);
            } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
                $object->setNumeroParution(null);
            }
            if (\array_key_exists('date_parution', $data) && null !== $data['date_parution']) {
                $object->setDateParution($data['date_parution']);
                unset($data['date_parution']);
            } elseif (\array_key_exists('date_parution', $data) && null === $data['date_parution']) {
                $object->setDateParution(null);
            }
            if (\array_key_exists('date_declaration', $data) && null !== $data['date_declaration']) {
                $object->setDateDeclaration($data['date_declaration']);
                unset($data['date_declaration']);
            } elseif (\array_key_exists('date_declaration', $data) && null === $data['date_declaration']) {
                $object->setDateDeclaration(null);
            }
            if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
                $object->setNumeroAnnonce($data['numero_annonce']);
                unset($data['numero_annonce']);
            } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
                $object->setNumeroAnnonce(null);
            }
            if (\array_key_exists('titre', $data) && null !== $data['titre']) {
                $object->setTitre($data['titre']);
                unset($data['titre']);
            } elseif (\array_key_exists('titre', $data) && null === $data['titre']) {
                $object->setTitre(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('prefecture', $data) && null !== $data['prefecture']) {
                $object->setPrefecture($data['prefecture']);
                unset($data['prefecture']);
            } elseif (\array_key_exists('prefecture', $data) && null === $data['prefecture']) {
                $object->setPrefecture(null);
            }
            if (\array_key_exists('objet', $data) && null !== $data['objet']) {
                $object->setObjet($data['objet']);
                unset($data['objet']);
            } elseif (\array_key_exists('objet', $data) && null === $data['objet']) {
                $object->setObjet(null);
            }
            if (\array_key_exists('site_web', $data) && null !== $data['site_web']) {
                $object->setSiteWeb($data['site_web']);
                unset($data['site_web']);
            } elseif (\array_key_exists('site_web', $data) && null === $data['site_web']) {
                $object->setSiteWeb(null);
            }
            if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
                $object->setAdresse($data['adresse']);
                unset($data['adresse']);
            } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
                $object->setAdresse(null);
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
            if ($object->isInitialized('numeroParution') && null !== $object->getNumeroParution()) {
                $data['numero_parution'] = $object->getNumeroParution();
            }
            if ($object->isInitialized('dateParution') && null !== $object->getDateParution()) {
                $data['date_parution'] = $object->getDateParution();
            }
            if ($object->isInitialized('dateDeclaration') && null !== $object->getDateDeclaration()) {
                $data['date_declaration'] = $object->getDateDeclaration();
            }
            if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
                $data['numero_annonce'] = $object->getNumeroAnnonce();
            }
            if ($object->isInitialized('titre') && null !== $object->getTitre()) {
                $data['titre'] = $object->getTitre();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('prefecture') && null !== $object->getPrefecture()) {
                $data['prefecture'] = $object->getPrefecture();
            }
            if ($object->isInitialized('objet') && null !== $object->getObjet()) {
                $data['objet'] = $object->getObjet();
            }
            if ($object->isInitialized('siteWeb') && null !== $object->getSiteWeb()) {
                $data['site_web'] = $object->getSiteWeb();
            }
            if ($object->isInitialized('adresse') && null !== $object->getAdresse()) {
                $data['adresse'] = $object->getAdresse();
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
            return [AssociationPublicationsJoafeItem::class => false];
        }
    }
}
