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

class BodaccCreationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\BodaccCreation' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\BodaccCreation' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\BodaccCreation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numero_parution', $data)) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('numero_annonce', $data)) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        }
        if (\array_key_exists('bodacc', $data)) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('greffe', $data)) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        }
        if (\array_key_exists('nom_entreprise', $data)) {
            $object->setNomEntreprise($data['nom_entreprise']);
            unset($data['nom_entreprise']);
        }
        if (\array_key_exists('personne_morale', $data)) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        }
        if (\array_key_exists('denomination', $data)) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        }
        if (\array_key_exists('prenom', $data)) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        }
        if (\array_key_exists('administration', $data)) {
            $object->setAdministration($data['administration']);
            unset($data['administration']);
        }
        if (\array_key_exists('adresse', $data)) {
            $object->setAdresse($data['adresse']);
            unset($data['adresse']);
        }
        if (\array_key_exists('capital', $data)) {
            $object->setCapital($data['capital']);
            unset($data['capital']);
        }
        if (\array_key_exists('activite', $data)) {
            $object->setActivite($data['activite']);
            unset($data['activite']);
        }
        if (\array_key_exists('date_debut_activite', $data)) {
            $object->setDateDebutActivite($data['date_debut_activite']);
            unset($data['date_debut_activite']);
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
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('numeroAnnonce') && null !== $object->getNumeroAnnonce()) {
            $data['numero_annonce'] = $object->getNumeroAnnonce();
        }
        if ($object->isInitialized('bodacc') && null !== $object->getBodacc()) {
            $data['bodacc'] = $object->getBodacc();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('greffe') && null !== $object->getGreffe()) {
            $data['greffe'] = $object->getGreffe();
        }
        if ($object->isInitialized('nomEntreprise') && null !== $object->getNomEntreprise()) {
            $data['nom_entreprise'] = $object->getNomEntreprise();
        }
        if ($object->isInitialized('personneMorale') && null !== $object->getPersonneMorale()) {
            $data['personne_morale'] = $object->getPersonneMorale();
        }
        if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
            $data['denomination'] = $object->getDenomination();
        }
        if ($object->isInitialized('nom') && null !== $object->getNom()) {
            $data['nom'] = $object->getNom();
        }
        if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
            $data['prenom'] = $object->getPrenom();
        }
        if ($object->isInitialized('administration') && null !== $object->getAdministration()) {
            $data['administration'] = $object->getAdministration();
        }
        if ($object->isInitialized('adresse') && null !== $object->getAdresse()) {
            $data['adresse'] = $object->getAdresse();
        }
        if ($object->isInitialized('capital') && null !== $object->getCapital()) {
            $data['capital'] = $object->getCapital();
        }
        if ($object->isInitialized('activite') && null !== $object->getActivite()) {
            $data['activite'] = $object->getActivite();
        }
        if ($object->isInitialized('dateDebutActivite') && null !== $object->getDateDebutActivite()) {
            $data['date_debut_activite'] = $object->getDateDebutActivite();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
