<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\AppelOffreEntreprise;
use Qdequippe\Pappers\Api\Model\AppelOffreGagne;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AppelOffreGagneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AppelOffreGagne::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AppelOffreGagne::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new AppelOffreGagne();
        if (\array_key_exists('montant', $data) && \is_int($data['montant'])) {
            $data['montant'] = (float) $data['montant'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('montant', $data) && null !== $data['montant']) {
            $object->setMontant($data['montant']);
            unset($data['montant']);
        } elseif (\array_key_exists('montant', $data) && null === $data['montant']) {
            $object->setMontant(null);
        }
        if (\array_key_exists('duree_mois', $data) && null !== $data['duree_mois']) {
            $object->setDureeMois($data['duree_mois']);
            unset($data['duree_mois']);
        } elseif (\array_key_exists('duree_mois', $data) && null === $data['duree_mois']) {
            $object->setDureeMois(null);
        }
        if (\array_key_exists('date_notification', $data) && null !== $data['date_notification']) {
            $object->setDateNotification(\DateTime::createFromFormat('Y-m-d', $data['date_notification'])->setTime(0, 0, 0));
            unset($data['date_notification']);
        } elseif (\array_key_exists('date_notification', $data) && null === $data['date_notification']) {
            $object->setDateNotification(null);
        }
        if (\array_key_exists('date_publication', $data) && null !== $data['date_publication']) {
            $object->setDatePublication(\DateTime::createFromFormat('Y-m-d', $data['date_publication'])->setTime(0, 0, 0));
            unset($data['date_publication']);
        } elseif (\array_key_exists('date_publication', $data) && null === $data['date_publication']) {
            $object->setDatePublication(null);
        }
        if (\array_key_exists('objet', $data) && null !== $data['objet']) {
            $object->setObjet($data['objet']);
            unset($data['objet']);
        } elseif (\array_key_exists('objet', $data) && null === $data['objet']) {
            $object->setObjet(null);
        }
        if (\array_key_exists('code_categorie', $data) && null !== $data['code_categorie']) {
            $object->setCodeCategorie($data['code_categorie']);
            unset($data['code_categorie']);
        } elseif (\array_key_exists('code_categorie', $data) && null === $data['code_categorie']) {
            $object->setCodeCategorie(null);
        }
        if (\array_key_exists('libelle_categorie', $data) && null !== $data['libelle_categorie']) {
            $object->setLibelleCategorie($data['libelle_categorie']);
            unset($data['libelle_categorie']);
        } elseif (\array_key_exists('libelle_categorie', $data) && null === $data['libelle_categorie']) {
            $object->setLibelleCategorie(null);
        }
        if (\array_key_exists('id_macellum', $data) && null !== $data['id_macellum']) {
            $object->setIdMacellum($data['id_macellum']);
            unset($data['id_macellum']);
        } elseif (\array_key_exists('id_macellum', $data) && null === $data['id_macellum']) {
            $object->setIdMacellum(null);
        }
        if (\array_key_exists('statut_procedure', $data) && null !== $data['statut_procedure']) {
            $object->setStatutProcedure($data['statut_procedure']);
            unset($data['statut_procedure']);
        } elseif (\array_key_exists('statut_procedure', $data) && null === $data['statut_procedure']) {
            $object->setStatutProcedure(null);
        }
        if (\array_key_exists('acheteur', $data) && null !== $data['acheteur']) {
            $object->setAcheteur($this->denormalizer->denormalize($data['acheteur'], AppelOffreEntreprise::class, 'json', $context));
            unset($data['acheteur']);
        } elseif (\array_key_exists('acheteur', $data) && null === $data['acheteur']) {
            $object->setAcheteur(null);
        }
        if (\array_key_exists('titulaire', $data) && null !== $data['titulaire']) {
            $object->setTitulaire($this->denormalizer->denormalize($data['titulaire'], AppelOffreEntreprise::class, 'json', $context));
            unset($data['titulaire']);
        } elseif (\array_key_exists('titulaire', $data) && null === $data['titulaire']) {
            $object->setTitulaire(null);
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
        if ($data->isInitialized('montant')) {
            $dataArray['montant'] = $data->getMontant();
        }
        if ($data->isInitialized('dureeMois')) {
            $dataArray['duree_mois'] = $data->getDureeMois();
        }
        if ($data->isInitialized('dateNotification')) {
            $dataArray['date_notification'] = $data->getDateNotification()?->format('Y-m-d');
        }
        if ($data->isInitialized('datePublication')) {
            $dataArray['date_publication'] = $data->getDatePublication()?->format('Y-m-d');
        }
        if ($data->isInitialized('objet')) {
            $dataArray['objet'] = $data->getObjet();
        }
        if ($data->isInitialized('codeCategorie')) {
            $dataArray['code_categorie'] = $data->getCodeCategorie();
        }
        if ($data->isInitialized('libelleCategorie')) {
            $dataArray['libelle_categorie'] = $data->getLibelleCategorie();
        }
        if ($data->isInitialized('idMacellum')) {
            $dataArray['id_macellum'] = $data->getIdMacellum();
        }
        if ($data->isInitialized('statutProcedure')) {
            $dataArray['statut_procedure'] = $data->getStatutProcedure();
        }
        if ($data->isInitialized('acheteur') && null !== $data->getAcheteur()) {
            $dataArray['acheteur'] = $this->normalizer->normalize($data->getAcheteur(), 'json', $context);
        }
        if ($data->isInitialized('titulaire') && null !== $data->getTitulaire()) {
            $dataArray['titulaire'] = $this->normalizer->normalize($data->getTitulaire(), 'json', $context);
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
        return [AppelOffreGagne::class => false];
    }
}
