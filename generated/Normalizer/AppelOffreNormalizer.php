<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\AppelOffre;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\InvalidDateException;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AppelOffreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AppelOffre::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AppelOffre::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new AppelOffre();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('montant', $data) && \is_int($data['montant'])) {
            $data['montant'] = (float) $data['montant'];
        }
        if (\array_key_exists('montant', $data) && null !== $data['montant']) {
            $object->setMontant($data['montant']);
            unset($data['montant']);
        } elseif (\array_key_exists('montant', $data) && null === $data['montant']) {
            $object->setMontant(null);
            unset($data['montant']);
        }
        if (\array_key_exists('duree_mois', $data) && null !== $data['duree_mois']) {
            $object->setDureeMois($data['duree_mois']);
            unset($data['duree_mois']);
        } elseif (\array_key_exists('duree_mois', $data) && null === $data['duree_mois']) {
            $object->setDureeMois(null);
            unset($data['duree_mois']);
        }
        if (\array_key_exists('date_notification', $data) && null !== $data['date_notification']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date_notification']);
            if (false === $date) {
                throw new InvalidDateException($data['date_notification'], 'Y-m-d');
            }
            $object->setDateNotification($date->setTime(0, 0, 0));
            unset($data['date_notification']);
        } elseif (\array_key_exists('date_notification', $data) && null === $data['date_notification']) {
            $object->setDateNotification(null);
            unset($data['date_notification']);
        }
        if (\array_key_exists('date_publication', $data) && null !== $data['date_publication']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['date_publication']);
            if (false === $date_1) {
                throw new InvalidDateException($data['date_publication'], 'Y-m-d');
            }
            $object->setDatePublication($date_1->setTime(0, 0, 0));
            unset($data['date_publication']);
        } elseif (\array_key_exists('date_publication', $data) && null === $data['date_publication']) {
            $object->setDatePublication(null);
            unset($data['date_publication']);
        }
        if (\array_key_exists('objet', $data) && null !== $data['objet']) {
            $object->setObjet($data['objet']);
            unset($data['objet']);
        } elseif (\array_key_exists('objet', $data) && null === $data['objet']) {
            $object->setObjet(null);
            unset($data['objet']);
        }
        if (\array_key_exists('code_categorie', $data) && null !== $data['code_categorie']) {
            $object->setCodeCategorie($data['code_categorie']);
            unset($data['code_categorie']);
        } elseif (\array_key_exists('code_categorie', $data) && null === $data['code_categorie']) {
            $object->setCodeCategorie(null);
            unset($data['code_categorie']);
        }
        if (\array_key_exists('libelle_categorie', $data) && null !== $data['libelle_categorie']) {
            $object->setLibelleCategorie($data['libelle_categorie']);
            unset($data['libelle_categorie']);
        } elseif (\array_key_exists('libelle_categorie', $data) && null === $data['libelle_categorie']) {
            $object->setLibelleCategorie(null);
            unset($data['libelle_categorie']);
        }
        if (\array_key_exists('id_macellum', $data) && null !== $data['id_macellum']) {
            $object->setIdMacellum($data['id_macellum']);
            unset($data['id_macellum']);
        } elseif (\array_key_exists('id_macellum', $data) && null === $data['id_macellum']) {
            $object->setIdMacellum(null);
            unset($data['id_macellum']);
        }
        if (\array_key_exists('statut_procedure', $data) && null !== $data['statut_procedure']) {
            $object->setStatutProcedure($data['statut_procedure']);
            unset($data['statut_procedure']);
        } elseif (\array_key_exists('statut_procedure', $data) && null === $data['statut_procedure']) {
            $object->setStatutProcedure(null);
            unset($data['statut_procedure']);
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
        if ($data->isInitialized('montant') && null !== $data->getMontant()) {
            $dataArray['montant'] = $data->getMontant();
        }
        if ($data->isInitialized('dureeMois') && null !== $data->getDureeMois()) {
            $dataArray['duree_mois'] = $data->getDureeMois();
        }
        if ($data->isInitialized('dateNotification') && null !== $data->getDateNotification()) {
            $dataArray['date_notification'] = $data->getDateNotification()?->format('Y-m-d');
        }
        if ($data->isInitialized('datePublication') && null !== $data->getDatePublication()) {
            $dataArray['date_publication'] = $data->getDatePublication()?->format('Y-m-d');
        }
        if ($data->isInitialized('objet') && null !== $data->getObjet()) {
            $dataArray['objet'] = $data->getObjet();
        }
        if ($data->isInitialized('codeCategorie') && null !== $data->getCodeCategorie()) {
            $dataArray['code_categorie'] = $data->getCodeCategorie();
        }
        if ($data->isInitialized('libelleCategorie') && null !== $data->getLibelleCategorie()) {
            $dataArray['libelle_categorie'] = $data->getLibelleCategorie();
        }
        if ($data->isInitialized('idMacellum') && null !== $data->getIdMacellum()) {
            $dataArray['id_macellum'] = $data->getIdMacellum();
        }
        if ($data->isInitialized('statutProcedure') && null !== $data->getStatutProcedure()) {
            $dataArray['statut_procedure'] = $data->getStatutProcedure();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AppelOffre::class => false];
    }
}
