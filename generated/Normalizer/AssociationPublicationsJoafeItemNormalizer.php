<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\AssociationPublicationsJoafeItem;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroParution') && null !== $data->getNumeroParution()) {
            $dataArray['numero_parution'] = $data->getNumeroParution();
        }
        if ($data->isInitialized('dateParution') && null !== $data->getDateParution()) {
            $dataArray['date_parution'] = $data->getDateParution();
        }
        if ($data->isInitialized('dateDeclaration') && null !== $data->getDateDeclaration()) {
            $dataArray['date_declaration'] = $data->getDateDeclaration();
        }
        if ($data->isInitialized('numeroAnnonce') && null !== $data->getNumeroAnnonce()) {
            $dataArray['numero_annonce'] = $data->getNumeroAnnonce();
        }
        if ($data->isInitialized('titre') && null !== $data->getTitre()) {
            $dataArray['titre'] = $data->getTitre();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('prefecture') && null !== $data->getPrefecture()) {
            $dataArray['prefecture'] = $data->getPrefecture();
        }
        if ($data->isInitialized('objet') && null !== $data->getObjet()) {
            $dataArray['objet'] = $data->getObjet();
        }
        if ($data->isInitialized('siteWeb') && null !== $data->getSiteWeb()) {
            $dataArray['site_web'] = $data->getSiteWeb();
        }
        if ($data->isInitialized('adresse') && null !== $data->getAdresse()) {
            $dataArray['adresse'] = $data->getAdresse();
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
        return [AssociationPublicationsJoafeItem::class => false];
    }
}
