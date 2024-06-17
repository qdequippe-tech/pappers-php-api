<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem;
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
    class EntrepriseFichemarquesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new EntrepriseFichemarquesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('numero', $data) && null !== $data['numero']) {
                $object->setNumero($data['numero']);
                unset($data['numero']);
            } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
                $object->setNumero(null);
            }
            if (\array_key_exists('date_enregistrement', $data) && null !== $data['date_enregistrement']) {
                $object->setDateEnregistrement($data['date_enregistrement']);
                unset($data['date_enregistrement']);
            } elseif (\array_key_exists('date_enregistrement', $data) && null === $data['date_enregistrement']) {
                $object->setDateEnregistrement(null);
            }
            if (\array_key_exists('date_expiration', $data) && null !== $data['date_expiration']) {
                $object->setDateExpiration($data['date_expiration']);
                unset($data['date_expiration']);
            } elseif (\array_key_exists('date_expiration', $data) && null === $data['date_expiration']) {
                $object->setDateExpiration(null);
            }
            if (\array_key_exists('lieu_enregistrement', $data) && null !== $data['lieu_enregistrement']) {
                $object->setLieuEnregistrement($data['lieu_enregistrement']);
                unset($data['lieu_enregistrement']);
            } elseif (\array_key_exists('lieu_enregistrement', $data) && null === $data['lieu_enregistrement']) {
                $object->setLieuEnregistrement(null);
            }
            if (\array_key_exists('statut', $data) && null !== $data['statut']) {
                $object->setStatut($data['statut']);
                unset($data['statut']);
            } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
                $object->setStatut(null);
            }
            if (\array_key_exists('texte', $data) && null !== $data['texte']) {
                $object->setTexte($data['texte']);
                unset($data['texte']);
            } elseif (\array_key_exists('texte', $data) && null === $data['texte']) {
                $object->setTexte(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('lien_image', $data) && null !== $data['lien_image']) {
                $object->setLienImage($data['lien_image']);
                unset($data['lien_image']);
            } elseif (\array_key_exists('lien_image', $data) && null === $data['lien_image']) {
                $object->setLienImage(null);
            }
            if (\array_key_exists('descriptions', $data) && null !== $data['descriptions']) {
                $values = [];
                foreach ($data['descriptions'] as $value) {
                    $values[] = $value;
                }
                $object->setDescriptions($values);
                unset($data['descriptions']);
            } elseif (\array_key_exists('descriptions', $data) && null === $data['descriptions']) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('classes', $data) && null !== $data['classes']) {
                $values_1 = [];
                foreach ($data['classes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemClassesItem', 'json', $context);
                }
                $object->setClasses($values_1);
                unset($data['classes']);
            } elseif (\array_key_exists('classes', $data) && null === $data['classes']) {
                $object->setClasses(null);
            }
            if (\array_key_exists('deposant', $data) && null !== $data['deposant']) {
                $object->setDeposant($this->denormalizer->denormalize($data['deposant'], 'Qdequippe\Pappers\Api\Model\PersonneMarque', 'json', $context));
                unset($data['deposant']);
            } elseif (\array_key_exists('deposant', $data) && null === $data['deposant']) {
                $object->setDeposant(null);
            }
            if (\array_key_exists('mandataire', $data) && null !== $data['mandataire']) {
                $object->setMandataire($this->denormalizer->denormalize($data['mandataire'], 'Qdequippe\Pappers\Api\Model\PersonneMarque', 'json', $context));
                unset($data['mandataire']);
            } elseif (\array_key_exists('mandataire', $data) && null === $data['mandataire']) {
                $object->setMandataire(null);
            }
            if (\array_key_exists('evenements', $data) && null !== $data['evenements']) {
                $values_2 = [];
                foreach ($data['evenements'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemEvenementsItem', 'json', $context);
                }
                $object->setEvenements($values_2);
                unset($data['evenements']);
            } elseif (\array_key_exists('evenements', $data) && null === $data['evenements']) {
                $object->setEvenements(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
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

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem' => false];
        }
    }
} else {
    class EntrepriseFichemarquesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem' === $data::class;
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
            $object = new EntrepriseFichemarquesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('numero', $data) && null !== $data['numero']) {
                $object->setNumero($data['numero']);
                unset($data['numero']);
            } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
                $object->setNumero(null);
            }
            if (\array_key_exists('date_enregistrement', $data) && null !== $data['date_enregistrement']) {
                $object->setDateEnregistrement($data['date_enregistrement']);
                unset($data['date_enregistrement']);
            } elseif (\array_key_exists('date_enregistrement', $data) && null === $data['date_enregistrement']) {
                $object->setDateEnregistrement(null);
            }
            if (\array_key_exists('date_expiration', $data) && null !== $data['date_expiration']) {
                $object->setDateExpiration($data['date_expiration']);
                unset($data['date_expiration']);
            } elseif (\array_key_exists('date_expiration', $data) && null === $data['date_expiration']) {
                $object->setDateExpiration(null);
            }
            if (\array_key_exists('lieu_enregistrement', $data) && null !== $data['lieu_enregistrement']) {
                $object->setLieuEnregistrement($data['lieu_enregistrement']);
                unset($data['lieu_enregistrement']);
            } elseif (\array_key_exists('lieu_enregistrement', $data) && null === $data['lieu_enregistrement']) {
                $object->setLieuEnregistrement(null);
            }
            if (\array_key_exists('statut', $data) && null !== $data['statut']) {
                $object->setStatut($data['statut']);
                unset($data['statut']);
            } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
                $object->setStatut(null);
            }
            if (\array_key_exists('texte', $data) && null !== $data['texte']) {
                $object->setTexte($data['texte']);
                unset($data['texte']);
            } elseif (\array_key_exists('texte', $data) && null === $data['texte']) {
                $object->setTexte(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('lien_image', $data) && null !== $data['lien_image']) {
                $object->setLienImage($data['lien_image']);
                unset($data['lien_image']);
            } elseif (\array_key_exists('lien_image', $data) && null === $data['lien_image']) {
                $object->setLienImage(null);
            }
            if (\array_key_exists('descriptions', $data) && null !== $data['descriptions']) {
                $values = [];
                foreach ($data['descriptions'] as $value) {
                    $values[] = $value;
                }
                $object->setDescriptions($values);
                unset($data['descriptions']);
            } elseif (\array_key_exists('descriptions', $data) && null === $data['descriptions']) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('classes', $data) && null !== $data['classes']) {
                $values_1 = [];
                foreach ($data['classes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemClassesItem', 'json', $context);
                }
                $object->setClasses($values_1);
                unset($data['classes']);
            } elseif (\array_key_exists('classes', $data) && null === $data['classes']) {
                $object->setClasses(null);
            }
            if (\array_key_exists('deposant', $data) && null !== $data['deposant']) {
                $object->setDeposant($this->denormalizer->denormalize($data['deposant'], 'Qdequippe\Pappers\Api\Model\PersonneMarque', 'json', $context));
                unset($data['deposant']);
            } elseif (\array_key_exists('deposant', $data) && null === $data['deposant']) {
                $object->setDeposant(null);
            }
            if (\array_key_exists('mandataire', $data) && null !== $data['mandataire']) {
                $object->setMandataire($this->denormalizer->denormalize($data['mandataire'], 'Qdequippe\Pappers\Api\Model\PersonneMarque', 'json', $context));
                unset($data['mandataire']);
            } elseif (\array_key_exists('mandataire', $data) && null === $data['mandataire']) {
                $object->setMandataire(null);
            }
            if (\array_key_exists('evenements', $data) && null !== $data['evenements']) {
                $values_2 = [];
                foreach ($data['evenements'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemEvenementsItem', 'json', $context);
                }
                $object->setEvenements($values_2);
                unset($data['evenements']);
            } elseif (\array_key_exists('evenements', $data) && null === $data['evenements']) {
                $object->setEvenements(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem' => false];
        }
    }
}
