<?php

declare(strict_types=1);

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

class AssociationPublicationsJoafeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\AssociationPublicationsJoafe' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\AssociationPublicationsJoafe' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\AssociationPublicationsJoafe();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero_parution', $data)) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        }
        if (\array_key_exists('date_parution', $data)) {
            $object->setDateParution($data['date_parution']);
            unset($data['date_parution']);
        }
        if (\array_key_exists('date_declaration', $data)) {
            $object->setDateDeclaration($data['date_declaration']);
            unset($data['date_declaration']);
        }
        if (\array_key_exists('numero_annonce', $data)) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        }
        if (\array_key_exists('titre', $data)) {
            $object->setTitre($data['titre']);
            unset($data['titre']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('prefecture', $data)) {
            $object->setPrefecture($data['prefecture']);
            unset($data['prefecture']);
        }
        if (\array_key_exists('objet', $data)) {
            $object->setObjet($data['objet']);
            unset($data['objet']);
        }
        if (\array_key_exists('site_web', $data)) {
            $object->setSiteWeb($data['site_web']);
            unset($data['site_web']);
        }
        if (\array_key_exists('adresse', $data)) {
            $object->setAdresse($data['adresse']);
            unset($data['adresse']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
}
