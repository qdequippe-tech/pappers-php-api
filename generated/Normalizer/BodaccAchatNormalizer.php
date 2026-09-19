<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\BodaccAchat;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BodaccAchatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return BodaccAchat::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && BodaccAchat::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new BodaccAchat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('personne_morale', $data) && \is_int($data['personne_morale'])) {
            $data['personne_morale'] = (bool) $data['personne_morale'];
        }
        if (\array_key_exists('numero_parution', $data) && null !== $data['numero_parution']) {
            $object->setNumeroParution($data['numero_parution']);
            unset($data['numero_parution']);
        } elseif (\array_key_exists('numero_parution', $data) && null === $data['numero_parution']) {
            $object->setNumeroParution(null);
            unset($data['numero_parution']);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
            unset($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
            unset($data['date']);
        }
        if (\array_key_exists('numero_annonce', $data) && null !== $data['numero_annonce']) {
            $object->setNumeroAnnonce($data['numero_annonce']);
            unset($data['numero_annonce']);
        } elseif (\array_key_exists('numero_annonce', $data) && null === $data['numero_annonce']) {
            $object->setNumeroAnnonce(null);
            unset($data['numero_annonce']);
        }
        if (\array_key_exists('bodacc', $data) && null !== $data['bodacc']) {
            $object->setBodacc($data['bodacc']);
            unset($data['bodacc']);
        } elseif (\array_key_exists('bodacc', $data) && null === $data['bodacc']) {
            $object->setBodacc(null);
            unset($data['bodacc']);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('greffe', $data) && null !== $data['greffe']) {
            $object->setGreffe($data['greffe']);
            unset($data['greffe']);
        } elseif (\array_key_exists('greffe', $data) && null === $data['greffe']) {
            $object->setGreffe(null);
            unset($data['greffe']);
        }
        if (\array_key_exists('nom_entreprise', $data) && null !== $data['nom_entreprise']) {
            $object->setNomEntreprise($data['nom_entreprise']);
            unset($data['nom_entreprise']);
        } elseif (\array_key_exists('nom_entreprise', $data) && null === $data['nom_entreprise']) {
            $object->setNomEntreprise(null);
            unset($data['nom_entreprise']);
        }
        if (\array_key_exists('personne_morale', $data) && null !== $data['personne_morale']) {
            $object->setPersonneMorale($data['personne_morale']);
            unset($data['personne_morale']);
        } elseif (\array_key_exists('personne_morale', $data) && null === $data['personne_morale']) {
            $object->setPersonneMorale(null);
            unset($data['personne_morale']);
        }
        if (\array_key_exists('denomination', $data) && null !== $data['denomination']) {
            $object->setDenomination($data['denomination']);
            unset($data['denomination']);
        } elseif (\array_key_exists('denomination', $data) && null === $data['denomination']) {
            $object->setDenomination(null);
            unset($data['denomination']);
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
            unset($data['nom']);
        }
        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
            unset($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
            unset($data['prenom']);
        }
        if (\array_key_exists('administration', $data) && null !== $data['administration']) {
            $object->setAdministration($data['administration']);
            unset($data['administration']);
        } elseif (\array_key_exists('administration', $data) && null === $data['administration']) {
            $object->setAdministration(null);
            unset($data['administration']);
        }
        if (\array_key_exists('adresse', $data) && null !== $data['adresse']) {
            $object->setAdresse($data['adresse']);
            unset($data['adresse']);
        } elseif (\array_key_exists('adresse', $data) && null === $data['adresse']) {
            $object->setAdresse(null);
            unset($data['adresse']);
        }
        if (\array_key_exists('commentaires', $data) && null !== $data['commentaires']) {
            $object->setCommentaires($data['commentaires']);
            unset($data['commentaires']);
        } elseif (\array_key_exists('commentaires', $data) && null === $data['commentaires']) {
            $object->setCommentaires(null);
            unset($data['commentaires']);
        }
        if (\array_key_exists('oppositions', $data) && null !== $data['oppositions']) {
            $object->setOppositions($data['oppositions']);
            unset($data['oppositions']);
        } elseif (\array_key_exists('oppositions', $data) && null === $data['oppositions']) {
            $object->setOppositions(null);
            unset($data['oppositions']);
        }
        if (\array_key_exists('declaration_creance', $data) && null !== $data['declaration_creance']) {
            $object->setDeclarationCreance($data['declaration_creance']);
            unset($data['declaration_creance']);
        } elseif (\array_key_exists('declaration_creance', $data) && null === $data['declaration_creance']) {
            $object->setDeclarationCreance(null);
            unset($data['declaration_creance']);
        }
        if (\array_key_exists('publication_legale', $data) && null !== $data['publication_legale']) {
            $object->setPublicationLegale($data['publication_legale']);
            unset($data['publication_legale']);
        } elseif (\array_key_exists('publication_legale', $data) && null === $data['publication_legale']) {
            $object->setPublicationLegale(null);
            unset($data['publication_legale']);
        }
        if (\array_key_exists('denomination_ancien_proprietaire', $data) && null !== $data['denomination_ancien_proprietaire']) {
            $object->setDenominationAncienProprietaire($data['denomination_ancien_proprietaire']);
            unset($data['denomination_ancien_proprietaire']);
        } elseif (\array_key_exists('denomination_ancien_proprietaire', $data) && null === $data['denomination_ancien_proprietaire']) {
            $object->setDenominationAncienProprietaire(null);
            unset($data['denomination_ancien_proprietaire']);
        }
        if (\array_key_exists('siren_ancien_proprietaire', $data) && null !== $data['siren_ancien_proprietaire']) {
            $object->setSirenAncienProprietaire($data['siren_ancien_proprietaire']);
            unset($data['siren_ancien_proprietaire']);
        } elseif (\array_key_exists('siren_ancien_proprietaire', $data) && null === $data['siren_ancien_proprietaire']) {
            $object->setSirenAncienProprietaire(null);
            unset($data['siren_ancien_proprietaire']);
        }
        if (\array_key_exists('denomination_ancien_exploitant', $data) && null !== $data['denomination_ancien_exploitant']) {
            $object->setDenominationAncienExploitant($data['denomination_ancien_exploitant']);
            unset($data['denomination_ancien_exploitant']);
        } elseif (\array_key_exists('denomination_ancien_exploitant', $data) && null === $data['denomination_ancien_exploitant']) {
            $object->setDenominationAncienExploitant(null);
            unset($data['denomination_ancien_exploitant']);
        }
        if (\array_key_exists('siren_ancien_exploitant', $data) && null !== $data['siren_ancien_exploitant']) {
            $object->setSirenAncienExploitant($data['siren_ancien_exploitant']);
            unset($data['siren_ancien_exploitant']);
        } elseif (\array_key_exists('siren_ancien_exploitant', $data) && null === $data['siren_ancien_exploitant']) {
            $object->setSirenAncienExploitant(null);
            unset($data['siren_ancien_exploitant']);
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
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('numeroAnnonce') && null !== $data->getNumeroAnnonce()) {
            $dataArray['numero_annonce'] = $data->getNumeroAnnonce();
        }
        if ($data->isInitialized('bodacc') && null !== $data->getBodacc()) {
            $dataArray['bodacc'] = $data->getBodacc();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('greffe') && null !== $data->getGreffe()) {
            $dataArray['greffe'] = $data->getGreffe();
        }
        if ($data->isInitialized('nomEntreprise') && null !== $data->getNomEntreprise()) {
            $dataArray['nom_entreprise'] = $data->getNomEntreprise();
        }
        if ($data->isInitialized('personneMorale') && null !== $data->getPersonneMorale()) {
            $dataArray['personne_morale'] = $data->getPersonneMorale();
        }
        if ($data->isInitialized('denomination') && null !== $data->getDenomination()) {
            $dataArray['denomination'] = $data->getDenomination();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }
        if ($data->isInitialized('administration') && null !== $data->getAdministration()) {
            $dataArray['administration'] = $data->getAdministration();
        }
        if ($data->isInitialized('adresse') && null !== $data->getAdresse()) {
            $dataArray['adresse'] = $data->getAdresse();
        }
        if ($data->isInitialized('commentaires') && null !== $data->getCommentaires()) {
            $dataArray['commentaires'] = $data->getCommentaires();
        }
        if ($data->isInitialized('oppositions') && null !== $data->getOppositions()) {
            $dataArray['oppositions'] = $data->getOppositions();
        }
        if ($data->isInitialized('declarationCreance') && null !== $data->getDeclarationCreance()) {
            $dataArray['declaration_creance'] = $data->getDeclarationCreance();
        }
        if ($data->isInitialized('publicationLegale') && null !== $data->getPublicationLegale()) {
            $dataArray['publication_legale'] = $data->getPublicationLegale();
        }
        if ($data->isInitialized('denominationAncienProprietaire') && null !== $data->getDenominationAncienProprietaire()) {
            $dataArray['denomination_ancien_proprietaire'] = $data->getDenominationAncienProprietaire();
        }
        if ($data->isInitialized('sirenAncienProprietaire') && null !== $data->getSirenAncienProprietaire()) {
            $dataArray['siren_ancien_proprietaire'] = $data->getSirenAncienProprietaire();
        }
        if ($data->isInitialized('denominationAncienExploitant') && null !== $data->getDenominationAncienExploitant()) {
            $dataArray['denomination_ancien_exploitant'] = $data->getDenominationAncienExploitant();
        }
        if ($data->isInitialized('sirenAncienExploitant') && null !== $data->getSirenAncienExploitant()) {
            $dataArray['siren_ancien_exploitant'] = $data->getSirenAncienExploitant();
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
        return [BodaccAchat::class => false];
    }
}
