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

class AssociationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\Association' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\Association' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\Association();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_waldec', $data)) {
            $object->setIsWaldec($data['is_waldec']);
            unset($data['is_waldec']);
        }
        if (\array_key_exists('id_association', $data)) {
            $object->setIdAssociation($data['id_association']);
            unset($data['id_association']);
        }
        if (\array_key_exists('id_ex_association', $data)) {
            $object->setIdExAssociation($data['id_ex_association']);
            unset($data['id_ex_association']);
        }
        if (\array_key_exists('denomination', $data)) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
        }
        if (\array_key_exists('numero_rup', $data)) {
            $object->setNumeroRup($data['numero_rup']);
            unset($data['numero_rup']);
        }
        if (\array_key_exists('objet', $data)) {
            $object->setObjet($data['objet']);
            unset($data['objet']);
        }
        if (\array_key_exists('objet_social_1', $data)) {
            $object->setObjetSocial1($data['objet_social_1']);
            unset($data['objet_social_1']);
        }
        if (\array_key_exists('categorie_social_1', $data)) {
            $object->setCategorieSocial1($data['categorie_social_1']);
            unset($data['categorie_social_1']);
        }
        if (\array_key_exists('objet_social_2', $data)) {
            $object->setObjetSocial2($data['objet_social_2']);
            unset($data['objet_social_2']);
        }
        if (\array_key_exists('categorie_social_2', $data)) {
            $object->setCategorieSocial2($data['categorie_social_2']);
            unset($data['categorie_social_2']);
        }
        if (\array_key_exists('date_creation', $data)) {
            $object->setDateCreation($data['date_creation']);
            unset($data['date_creation']);
        }
        if (\array_key_exists('date_derniere_declaration', $data)) {
            $object->setDateDerniereDeclaration($data['date_derniere_declaration']);
            unset($data['date_derniere_declaration']);
        }
        if (\array_key_exists('date_publication_creation', $data)) {
            $object->setDatePublicationCreation($data['date_publication_creation']);
            unset($data['date_publication_creation']);
        }
        if (\array_key_exists('date_declaration_dissolution', $data)) {
            $object->setDateDeclarationDissolution($data['date_declaration_dissolution']);
            unset($data['date_declaration_dissolution']);
        }
        if (\array_key_exists('groupement', $data)) {
            $object->setGroupement($data['groupement']);
            unset($data['groupement']);
        }
        if (\array_key_exists('position_activite', $data)) {
            $object->setPositionActivite($data['position_activite']);
            unset($data['position_activite']);
        }
        if (\array_key_exists('nature', $data)) {
            $object->setNature($data['nature']);
            unset($data['nature']);
        }
        if (\array_key_exists('site_web', $data)) {
            $object->setSiteWeb($data['site_web']);
            unset($data['site_web']);
        }
        if (\array_key_exists('telephone', $data)) {
            $object->setTelephone($data['telephone']);
            unset($data['telephone']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('adresse_siege', $data)) {
            $object->setAdresseSiege($this->denormalizer->denormalize($data['adresse_siege'], 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseSiege', 'json', $context));
            unset($data['adresse_siege']);
        }
        if (\array_key_exists('adresse_gestionnaire', $data)) {
            $object->setAdresseGestionnaire($this->denormalizer->denormalize($data['adresse_gestionnaire'], 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseGestionnaire', 'json', $context));
            unset($data['adresse_gestionnaire']);
        }
        if (\array_key_exists('observation', $data)) {
            $object->setObservation($data['observation']);
            unset($data['observation']);
        }
        if (\array_key_exists('code_gestion', $data)) {
            $object->setCodeGestion($data['code_gestion']);
            unset($data['code_gestion']);
        }
        if (\array_key_exists('dirigeant_civilite', $data)) {
            $object->setDirigeantCivilite($data['dirigeant_civilite']);
            unset($data['dirigeant_civilite']);
        }
        if (\array_key_exists('derniere_maj', $data)) {
            $object->setDerniereMaj($data['derniere_maj']);
            unset($data['derniere_maj']);
        }
        if (\array_key_exists('publications_joafe', $data)) {
            $object->setPublicationsJoafe($this->denormalizer->denormalize($data['publications_joafe'], 'Qdequippe\\Pappers\\Api\\Model\\AssociationPublicationsJoafe', 'json', $context));
            unset($data['publications_joafe']);
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
        if ($object->isInitialized('isWaldec') && null !== $object->getIsWaldec()) {
            $data['is_waldec'] = $object->getIsWaldec();
        }
        if ($object->isInitialized('idAssociation') && null !== $object->getIdAssociation()) {
            $data['id_association'] = $object->getIdAssociation();
        }
        if ($object->isInitialized('idExAssociation') && null !== $object->getIdExAssociation()) {
            $data['id_ex_association'] = $object->getIdExAssociation();
        }
        if ($object->isInitialized('denomination') && null !== $object->getDenomination()) {
            $data['denomination'] = $object->getDenomination();
        }
        if ($object->isInitialized('siret') && null !== $object->getSiret()) {
            $data['siret'] = $object->getSiret();
        }
        if ($object->isInitialized('numeroRup') && null !== $object->getNumeroRup()) {
            $data['numero_rup'] = $object->getNumeroRup();
        }
        if ($object->isInitialized('objet') && null !== $object->getObjet()) {
            $data['objet'] = $object->getObjet();
        }
        if ($object->isInitialized('objetSocial1') && null !== $object->getObjetSocial1()) {
            $data['objet_social_1'] = $object->getObjetSocial1();
        }
        if ($object->isInitialized('categorieSocial1') && null !== $object->getCategorieSocial1()) {
            $data['categorie_social_1'] = $object->getCategorieSocial1();
        }
        if ($object->isInitialized('objetSocial2') && null !== $object->getObjetSocial2()) {
            $data['objet_social_2'] = $object->getObjetSocial2();
        }
        if ($object->isInitialized('categorieSocial2') && null !== $object->getCategorieSocial2()) {
            $data['categorie_social_2'] = $object->getCategorieSocial2();
        }
        if ($object->isInitialized('dateCreation') && null !== $object->getDateCreation()) {
            $data['date_creation'] = $object->getDateCreation();
        }
        if ($object->isInitialized('dateDerniereDeclaration') && null !== $object->getDateDerniereDeclaration()) {
            $data['date_derniere_declaration'] = $object->getDateDerniereDeclaration();
        }
        if ($object->isInitialized('datePublicationCreation') && null !== $object->getDatePublicationCreation()) {
            $data['date_publication_creation'] = $object->getDatePublicationCreation();
        }
        if ($object->isInitialized('dateDeclarationDissolution') && null !== $object->getDateDeclarationDissolution()) {
            $data['date_declaration_dissolution'] = $object->getDateDeclarationDissolution();
        }
        if ($object->isInitialized('groupement') && null !== $object->getGroupement()) {
            $data['groupement'] = $object->getGroupement();
        }
        if ($object->isInitialized('positionActivite') && null !== $object->getPositionActivite()) {
            $data['position_activite'] = $object->getPositionActivite();
        }
        if ($object->isInitialized('nature') && null !== $object->getNature()) {
            $data['nature'] = $object->getNature();
        }
        if ($object->isInitialized('siteWeb') && null !== $object->getSiteWeb()) {
            $data['site_web'] = $object->getSiteWeb();
        }
        if ($object->isInitialized('telephone') && null !== $object->getTelephone()) {
            $data['telephone'] = $object->getTelephone();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('adresseSiege') && null !== $object->getAdresseSiege()) {
            $data['adresse_siege'] = $this->normalizer->normalize($object->getAdresseSiege(), 'json', $context);
        }
        if ($object->isInitialized('adresseGestionnaire') && null !== $object->getAdresseGestionnaire()) {
            $data['adresse_gestionnaire'] = $this->normalizer->normalize($object->getAdresseGestionnaire(), 'json', $context);
        }
        if ($object->isInitialized('observation') && null !== $object->getObservation()) {
            $data['observation'] = $object->getObservation();
        }
        if ($object->isInitialized('codeGestion') && null !== $object->getCodeGestion()) {
            $data['code_gestion'] = $object->getCodeGestion();
        }
        if ($object->isInitialized('dirigeantCivilite') && null !== $object->getDirigeantCivilite()) {
            $data['dirigeant_civilite'] = $object->getDirigeantCivilite();
        }
        if ($object->isInitialized('derniereMaj') && null !== $object->getDerniereMaj()) {
            $data['derniere_maj'] = $object->getDerniereMaj();
        }
        if ($object->isInitialized('publicationsJoafe') && null !== $object->getPublicationsJoafe()) {
            $data['publications_joafe'] = $this->normalizer->normalize($object->getPublicationsJoafe(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
