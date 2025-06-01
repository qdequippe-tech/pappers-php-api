<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\AssociationAdresseGestionnaire;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AssociationAdresseGestionnaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AssociationAdresseGestionnaire::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AssociationAdresseGestionnaire::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new AssociationAdresseGestionnaire();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gestionnaire', $data) && null !== $data['gestionnaire']) {
            $object->setGestionnaire($data['gestionnaire']);
            unset($data['gestionnaire']);
        } elseif (\array_key_exists('gestionnaire', $data) && null === $data['gestionnaire']) {
            $object->setGestionnaire(null);
        }
        if (\array_key_exists('code_postal', $data) && null !== $data['code_postal']) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        } elseif (\array_key_exists('code_postal', $data) && null === $data['code_postal']) {
            $object->setCodePostal(null);
        }
        if (\array_key_exists('ville', $data) && null !== $data['ville']) {
            $object->setVille($data['ville']);
            unset($data['ville']);
        } elseif (\array_key_exists('ville', $data) && null === $data['ville']) {
            $object->setVille(null);
        }
        if (\array_key_exists('distribution', $data) && null !== $data['distribution']) {
            $object->setDistribution($data['distribution']);
            unset($data['distribution']);
        } elseif (\array_key_exists('distribution', $data) && null === $data['distribution']) {
            $object->setDistribution(null);
        }
        if (\array_key_exists('adresse_ligne', $data) && null !== $data['adresse_ligne']) {
            $object->setAdresseLigne($data['adresse_ligne']);
            unset($data['adresse_ligne']);
        } elseif (\array_key_exists('adresse_ligne', $data) && null === $data['adresse_ligne']) {
            $object->setAdresseLigne(null);
        }
        if (\array_key_exists('complement_adresse', $data) && null !== $data['complement_adresse']) {
            $object->setComplementAdresse($data['complement_adresse']);
            unset($data['complement_adresse']);
        } elseif (\array_key_exists('complement_adresse', $data) && null === $data['complement_adresse']) {
            $object->setComplementAdresse(null);
        }
        if (\array_key_exists('indication', $data) && null !== $data['indication']) {
            $object->setIndication($data['indication']);
            unset($data['indication']);
        } elseif (\array_key_exists('indication', $data) && null === $data['indication']) {
            $object->setIndication(null);
        }
        if (\array_key_exists('pays', $data) && null !== $data['pays']) {
            $object->setPays($data['pays']);
            unset($data['pays']);
        } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
            $object->setPays(null);
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
        if ($data->isInitialized('gestionnaire') && null !== $data->getGestionnaire()) {
            $dataArray['gestionnaire'] = $data->getGestionnaire();
        }
        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['code_postal'] = $data->getCodePostal();
        }
        if ($data->isInitialized('ville') && null !== $data->getVille()) {
            $dataArray['ville'] = $data->getVille();
        }
        if ($data->isInitialized('distribution') && null !== $data->getDistribution()) {
            $dataArray['distribution'] = $data->getDistribution();
        }
        if ($data->isInitialized('adresseLigne') && null !== $data->getAdresseLigne()) {
            $dataArray['adresse_ligne'] = $data->getAdresseLigne();
        }
        if ($data->isInitialized('complementAdresse') && null !== $data->getComplementAdresse()) {
            $dataArray['complement_adresse'] = $data->getComplementAdresse();
        }
        if ($data->isInitialized('indication') && null !== $data->getIndication()) {
            $dataArray['indication'] = $data->getIndication();
        }
        if ($data->isInitialized('pays') && null !== $data->getPays()) {
            $dataArray['pays'] = $data->getPays();
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
        return [AssociationAdresseGestionnaire::class => false];
    }
}
