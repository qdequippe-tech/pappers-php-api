<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Association;
use Qdequippe\Pappers\Api\Model\AssociationAdresseGestionnaire;
use Qdequippe\Pappers\Api\Model\AssociationAdresseSiege;
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
    class AssociationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Association::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Association::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new Association();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_waldec', $data) && null !== $data['is_waldec']) {
                $object->setIsWaldec($data['is_waldec']);
                unset($data['is_waldec']);
            } elseif (\array_key_exists('is_waldec', $data) && null === $data['is_waldec']) {
                $object->setIsWaldec(null);
            }
            if (\array_key_exists('id_association', $data) && null !== $data['id_association']) {
                $object->setIdAssociation($data['id_association']);
                unset($data['id_association']);
            } elseif (\array_key_exists('id_association', $data) && null === $data['id_association']) {
                $object->setIdAssociation(null);
            }
            if (\array_key_exists('id_ex_association', $data) && null !== $data['id_ex_association']) {
                $object->setIdExAssociation($data['id_ex_association']);
                unset($data['id_ex_association']);
            } elseif (\array_key_exists('id_ex_association', $data) && null === $data['id_ex_association']) {
                $object->setIdExAssociation(null);
            }
            if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
                $object->setDenomination($data['denomination']);
                unset($data['denomination']);
            } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
                $object->setDenomination(null);
            }
            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
                unset($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }
            if (\array_key_exists('numero_rup', $data) && null !== $data['numero_rup']) {
                $object->setNumeroRup($data['numero_rup']);
                unset($data['numero_rup']);
            } elseif (\array_key_exists('numero_rup', $data) && null === $data['numero_rup']) {
                $object->setNumeroRup(null);
            }
            if (\array_key_exists('objet', $data) && null !== $data['objet']) {
                $object->setObjet($data['objet']);
                unset($data['objet']);
            } elseif (\array_key_exists('objet', $data) && null === $data['objet']) {
                $object->setObjet(null);
            }
            if (\array_key_exists('objet_social_1', $data) && null !== $data['objet_social_1']) {
                $object->setObjetSocial1($data['objet_social_1']);
                unset($data['objet_social_1']);
            } elseif (\array_key_exists('objet_social_1', $data) && null === $data['objet_social_1']) {
                $object->setObjetSocial1(null);
            }
            if (\array_key_exists('categorie_social_1', $data) && null !== $data['categorie_social_1']) {
                $object->setCategorieSocial1($data['categorie_social_1']);
                unset($data['categorie_social_1']);
            } elseif (\array_key_exists('categorie_social_1', $data) && null === $data['categorie_social_1']) {
                $object->setCategorieSocial1(null);
            }
            if (\array_key_exists('objet_social_2', $data) && null !== $data['objet_social_2']) {
                $object->setObjetSocial2($data['objet_social_2']);
                unset($data['objet_social_2']);
            } elseif (\array_key_exists('objet_social_2', $data) && null === $data['objet_social_2']) {
                $object->setObjetSocial2(null);
            }
            if (\array_key_exists('categorie_social_2', $data) && null !== $data['categorie_social_2']) {
                $object->setCategorieSocial2($data['categorie_social_2']);
                unset($data['categorie_social_2']);
            } elseif (\array_key_exists('categorie_social_2', $data) && null === $data['categorie_social_2']) {
                $object->setCategorieSocial2(null);
            }
            if (\array_key_exists('date_creation', $data) && null !== $data['date_creation']) {
                $object->setDateCreation($data['date_creation']);
                unset($data['date_creation']);
            } elseif (\array_key_exists('date_creation', $data) && null === $data['date_creation']) {
                $object->setDateCreation(null);
            }
            if (\array_key_exists('date_derniere_declaration', $data) && null !== $data['date_derniere_declaration']) {
                $object->setDateDerniereDeclaration($data['date_derniere_declaration']);
                unset($data['date_derniere_declaration']);
            } elseif (\array_key_exists('date_derniere_declaration', $data) && null === $data['date_derniere_declaration']) {
                $object->setDateDerniereDeclaration(null);
            }
            if (\array_key_exists('date_publication_creation', $data) && null !== $data['date_publication_creation']) {
                $object->setDatePublicationCreation($data['date_publication_creation']);
                unset($data['date_publication_creation']);
            } elseif (\array_key_exists('date_publication_creation', $data) && null === $data['date_publication_creation']) {
                $object->setDatePublicationCreation(null);
            }
            if (\array_key_exists('date_declaration_dissolution', $data) && null !== $data['date_declaration_dissolution']) {
                $object->setDateDeclarationDissolution($data['date_declaration_dissolution']);
                unset($data['date_declaration_dissolution']);
            } elseif (\array_key_exists('date_declaration_dissolution', $data) && null === $data['date_declaration_dissolution']) {
                $object->setDateDeclarationDissolution(null);
            }
            if (\array_key_exists('groupement', $data) && null !== $data['groupement']) {
                $object->setGroupement($data['groupement']);
                unset($data['groupement']);
            } elseif (\array_key_exists('groupement', $data) && null === $data['groupement']) {
                $object->setGroupement(null);
            }
            if (\array_key_exists('position_activite', $data) && null !== $data['position_activite']) {
                $object->setPositionActivite($data['position_activite']);
                unset($data['position_activite']);
            } elseif (\array_key_exists('position_activite', $data) && null === $data['position_activite']) {
                $object->setPositionActivite(null);
            }
            if (\array_key_exists('nature', $data) && null !== $data['nature']) {
                $object->setNature($data['nature']);
                unset($data['nature']);
            } elseif (\array_key_exists('nature', $data) && null === $data['nature']) {
                $object->setNature(null);
            }
            if (\array_key_exists('site_web', $data) && null !== $data['site_web']) {
                $object->setSiteWeb($data['site_web']);
                unset($data['site_web']);
            } elseif (\array_key_exists('site_web', $data) && null === $data['site_web']) {
                $object->setSiteWeb(null);
            }
            if (\array_key_exists('telephone', $data) && null !== $data['telephone']) {
                $object->setTelephone($data['telephone']);
                unset($data['telephone']);
            } elseif (\array_key_exists('telephone', $data) && null === $data['telephone']) {
                $object->setTelephone(null);
            }
            if (\array_key_exists('email', $data) && null !== $data['email']) {
                $object->setEmail($data['email']);
                unset($data['email']);
            } elseif (\array_key_exists('email', $data) && null === $data['email']) {
                $object->setEmail(null);
            }
            if (\array_key_exists('adresse_siege', $data) && null !== $data['adresse_siege']) {
                $object->setAdresseSiege($this->denormalizer->denormalize($data['adresse_siege'], AssociationAdresseSiege::class, 'json', $context));
                unset($data['adresse_siege']);
            } elseif (\array_key_exists('adresse_siege', $data) && null === $data['adresse_siege']) {
                $object->setAdresseSiege(null);
            }
            if (\array_key_exists('adresse_gestionnaire', $data) && null !== $data['adresse_gestionnaire']) {
                $object->setAdresseGestionnaire($this->denormalizer->denormalize($data['adresse_gestionnaire'], AssociationAdresseGestionnaire::class, 'json', $context));
                unset($data['adresse_gestionnaire']);
            } elseif (\array_key_exists('adresse_gestionnaire', $data) && null === $data['adresse_gestionnaire']) {
                $object->setAdresseGestionnaire(null);
            }
            if (\array_key_exists('observation', $data) && null !== $data['observation']) {
                $object->setObservation($data['observation']);
                unset($data['observation']);
            } elseif (\array_key_exists('observation', $data) && null === $data['observation']) {
                $object->setObservation(null);
            }
            if (\array_key_exists('code_gestion', $data) && null !== $data['code_gestion']) {
                $object->setCodeGestion($data['code_gestion']);
                unset($data['code_gestion']);
            } elseif (\array_key_exists('code_gestion', $data) && null === $data['code_gestion']) {
                $object->setCodeGestion(null);
            }
            if (\array_key_exists('dirigeant_civilite', $data) && null !== $data['dirigeant_civilite']) {
                $object->setDirigeantCivilite($data['dirigeant_civilite']);
                unset($data['dirigeant_civilite']);
            } elseif (\array_key_exists('dirigeant_civilite', $data) && null === $data['dirigeant_civilite']) {
                $object->setDirigeantCivilite(null);
            }
            if (\array_key_exists('derniere_maj', $data) && null !== $data['derniere_maj']) {
                $object->setDerniereMaj($data['derniere_maj']);
                unset($data['derniere_maj']);
            } elseif (\array_key_exists('derniere_maj', $data) && null === $data['derniere_maj']) {
                $object->setDerniereMaj(null);
            }
            if (\array_key_exists('publications_joafe', $data) && null !== $data['publications_joafe']) {
                $values = [];
                foreach ($data['publications_joafe'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AssociationPublicationsJoafeItem::class, 'json', $context);
                }
                $object->setPublicationsJoafe($values);
                unset($data['publications_joafe']);
            } elseif (\array_key_exists('publications_joafe', $data) && null === $data['publications_joafe']) {
                $object->setPublicationsJoafe(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
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
                $values = [];
                foreach ($object->getPublicationsJoafe() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['publications_joafe'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Association::class => false];
        }
    }
} else {
    class AssociationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Association::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Association::class === $data::class;
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
            $object = new Association();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_waldec', $data) && null !== $data['is_waldec']) {
                $object->setIsWaldec($data['is_waldec']);
                unset($data['is_waldec']);
            } elseif (\array_key_exists('is_waldec', $data) && null === $data['is_waldec']) {
                $object->setIsWaldec(null);
            }
            if (\array_key_exists('id_association', $data) && null !== $data['id_association']) {
                $object->setIdAssociation($data['id_association']);
                unset($data['id_association']);
            } elseif (\array_key_exists('id_association', $data) && null === $data['id_association']) {
                $object->setIdAssociation(null);
            }
            if (\array_key_exists('id_ex_association', $data) && null !== $data['id_ex_association']) {
                $object->setIdExAssociation($data['id_ex_association']);
                unset($data['id_ex_association']);
            } elseif (\array_key_exists('id_ex_association', $data) && null === $data['id_ex_association']) {
                $object->setIdExAssociation(null);
            }
            if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
                $object->setDenomination($data['denomination']);
                unset($data['denomination']);
            } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
                $object->setDenomination(null);
            }
            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
                unset($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }
            if (\array_key_exists('numero_rup', $data) && null !== $data['numero_rup']) {
                $object->setNumeroRup($data['numero_rup']);
                unset($data['numero_rup']);
            } elseif (\array_key_exists('numero_rup', $data) && null === $data['numero_rup']) {
                $object->setNumeroRup(null);
            }
            if (\array_key_exists('objet', $data) && null !== $data['objet']) {
                $object->setObjet($data['objet']);
                unset($data['objet']);
            } elseif (\array_key_exists('objet', $data) && null === $data['objet']) {
                $object->setObjet(null);
            }
            if (\array_key_exists('objet_social_1', $data) && null !== $data['objet_social_1']) {
                $object->setObjetSocial1($data['objet_social_1']);
                unset($data['objet_social_1']);
            } elseif (\array_key_exists('objet_social_1', $data) && null === $data['objet_social_1']) {
                $object->setObjetSocial1(null);
            }
            if (\array_key_exists('categorie_social_1', $data) && null !== $data['categorie_social_1']) {
                $object->setCategorieSocial1($data['categorie_social_1']);
                unset($data['categorie_social_1']);
            } elseif (\array_key_exists('categorie_social_1', $data) && null === $data['categorie_social_1']) {
                $object->setCategorieSocial1(null);
            }
            if (\array_key_exists('objet_social_2', $data) && null !== $data['objet_social_2']) {
                $object->setObjetSocial2($data['objet_social_2']);
                unset($data['objet_social_2']);
            } elseif (\array_key_exists('objet_social_2', $data) && null === $data['objet_social_2']) {
                $object->setObjetSocial2(null);
            }
            if (\array_key_exists('categorie_social_2', $data) && null !== $data['categorie_social_2']) {
                $object->setCategorieSocial2($data['categorie_social_2']);
                unset($data['categorie_social_2']);
            } elseif (\array_key_exists('categorie_social_2', $data) && null === $data['categorie_social_2']) {
                $object->setCategorieSocial2(null);
            }
            if (\array_key_exists('date_creation', $data) && null !== $data['date_creation']) {
                $object->setDateCreation($data['date_creation']);
                unset($data['date_creation']);
            } elseif (\array_key_exists('date_creation', $data) && null === $data['date_creation']) {
                $object->setDateCreation(null);
            }
            if (\array_key_exists('date_derniere_declaration', $data) && null !== $data['date_derniere_declaration']) {
                $object->setDateDerniereDeclaration($data['date_derniere_declaration']);
                unset($data['date_derniere_declaration']);
            } elseif (\array_key_exists('date_derniere_declaration', $data) && null === $data['date_derniere_declaration']) {
                $object->setDateDerniereDeclaration(null);
            }
            if (\array_key_exists('date_publication_creation', $data) && null !== $data['date_publication_creation']) {
                $object->setDatePublicationCreation($data['date_publication_creation']);
                unset($data['date_publication_creation']);
            } elseif (\array_key_exists('date_publication_creation', $data) && null === $data['date_publication_creation']) {
                $object->setDatePublicationCreation(null);
            }
            if (\array_key_exists('date_declaration_dissolution', $data) && null !== $data['date_declaration_dissolution']) {
                $object->setDateDeclarationDissolution($data['date_declaration_dissolution']);
                unset($data['date_declaration_dissolution']);
            } elseif (\array_key_exists('date_declaration_dissolution', $data) && null === $data['date_declaration_dissolution']) {
                $object->setDateDeclarationDissolution(null);
            }
            if (\array_key_exists('groupement', $data) && null !== $data['groupement']) {
                $object->setGroupement($data['groupement']);
                unset($data['groupement']);
            } elseif (\array_key_exists('groupement', $data) && null === $data['groupement']) {
                $object->setGroupement(null);
            }
            if (\array_key_exists('position_activite', $data) && null !== $data['position_activite']) {
                $object->setPositionActivite($data['position_activite']);
                unset($data['position_activite']);
            } elseif (\array_key_exists('position_activite', $data) && null === $data['position_activite']) {
                $object->setPositionActivite(null);
            }
            if (\array_key_exists('nature', $data) && null !== $data['nature']) {
                $object->setNature($data['nature']);
                unset($data['nature']);
            } elseif (\array_key_exists('nature', $data) && null === $data['nature']) {
                $object->setNature(null);
            }
            if (\array_key_exists('site_web', $data) && null !== $data['site_web']) {
                $object->setSiteWeb($data['site_web']);
                unset($data['site_web']);
            } elseif (\array_key_exists('site_web', $data) && null === $data['site_web']) {
                $object->setSiteWeb(null);
            }
            if (\array_key_exists('telephone', $data) && null !== $data['telephone']) {
                $object->setTelephone($data['telephone']);
                unset($data['telephone']);
            } elseif (\array_key_exists('telephone', $data) && null === $data['telephone']) {
                $object->setTelephone(null);
            }
            if (\array_key_exists('email', $data) && null !== $data['email']) {
                $object->setEmail($data['email']);
                unset($data['email']);
            } elseif (\array_key_exists('email', $data) && null === $data['email']) {
                $object->setEmail(null);
            }
            if (\array_key_exists('adresse_siege', $data) && null !== $data['adresse_siege']) {
                $object->setAdresseSiege($this->denormalizer->denormalize($data['adresse_siege'], AssociationAdresseSiege::class, 'json', $context));
                unset($data['adresse_siege']);
            } elseif (\array_key_exists('adresse_siege', $data) && null === $data['adresse_siege']) {
                $object->setAdresseSiege(null);
            }
            if (\array_key_exists('adresse_gestionnaire', $data) && null !== $data['adresse_gestionnaire']) {
                $object->setAdresseGestionnaire($this->denormalizer->denormalize($data['adresse_gestionnaire'], AssociationAdresseGestionnaire::class, 'json', $context));
                unset($data['adresse_gestionnaire']);
            } elseif (\array_key_exists('adresse_gestionnaire', $data) && null === $data['adresse_gestionnaire']) {
                $object->setAdresseGestionnaire(null);
            }
            if (\array_key_exists('observation', $data) && null !== $data['observation']) {
                $object->setObservation($data['observation']);
                unset($data['observation']);
            } elseif (\array_key_exists('observation', $data) && null === $data['observation']) {
                $object->setObservation(null);
            }
            if (\array_key_exists('code_gestion', $data) && null !== $data['code_gestion']) {
                $object->setCodeGestion($data['code_gestion']);
                unset($data['code_gestion']);
            } elseif (\array_key_exists('code_gestion', $data) && null === $data['code_gestion']) {
                $object->setCodeGestion(null);
            }
            if (\array_key_exists('dirigeant_civilite', $data) && null !== $data['dirigeant_civilite']) {
                $object->setDirigeantCivilite($data['dirigeant_civilite']);
                unset($data['dirigeant_civilite']);
            } elseif (\array_key_exists('dirigeant_civilite', $data) && null === $data['dirigeant_civilite']) {
                $object->setDirigeantCivilite(null);
            }
            if (\array_key_exists('derniere_maj', $data) && null !== $data['derniere_maj']) {
                $object->setDerniereMaj($data['derniere_maj']);
                unset($data['derniere_maj']);
            } elseif (\array_key_exists('derniere_maj', $data) && null === $data['derniere_maj']) {
                $object->setDerniereMaj(null);
            }
            if (\array_key_exists('publications_joafe', $data) && null !== $data['publications_joafe']) {
                $values = [];
                foreach ($data['publications_joafe'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AssociationPublicationsJoafeItem::class, 'json', $context);
                }
                $object->setPublicationsJoafe($values);
                unset($data['publications_joafe']);
            } elseif (\array_key_exists('publications_joafe', $data) && null === $data['publications_joafe']) {
                $object->setPublicationsJoafe(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
                $values = [];
                foreach ($object->getPublicationsJoafe() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['publications_joafe'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Association::class => false];
        }
    }
}
