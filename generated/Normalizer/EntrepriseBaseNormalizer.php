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

class EntrepriseBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseBase' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseBase' === \get_class($data);
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
        $object = new \Qdequippe\Pappers\Api\Model\EntrepriseBase();
        if (\array_key_exists('capital', $data) && \is_int($data['capital'])) {
            $data['capital'] = (float) $data['capital'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        }
        if (\array_key_exists('siren_formate', $data)) {
            $object->setSirenFormate($data['siren_formate']);
            unset($data['siren_formate']);
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
        if (\array_key_exists('sexe', $data)) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        }
        if (\array_key_exists('code_naf', $data)) {
            $object->setCodeNaf($data['code_naf']);
            unset($data['code_naf']);
        }
        if (\array_key_exists('libelle_code_naf', $data)) {
            $object->setLibelleCodeNaf($data['libelle_code_naf']);
            unset($data['libelle_code_naf']);
        }
        if (\array_key_exists('domaine_activite', $data)) {
            $object->setDomaineActivite($data['domaine_activite']);
            unset($data['domaine_activite']);
        }
        if (\array_key_exists('conventions_collectives', $data)) {
            $values = [];
            foreach ($data['conventions_collectives'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseBaseConventionsCollectivesItem', 'json', $context);
            }
            $object->setConventionsCollectives($values);
            unset($data['conventions_collectives']);
        }
        if (\array_key_exists('date_creation', $data)) {
            $object->setDateCreation(\DateTime::createFromFormat('Y-m-d', $data['date_creation'])->setTime(0, 0, 0));
            unset($data['date_creation']);
        }
        if (\array_key_exists('date_creation_formate', $data)) {
            $object->setDateCreationFormate($data['date_creation_formate']);
            unset($data['date_creation_formate']);
        }
        if (\array_key_exists('entreprise_cessee', $data)) {
            $object->setEntrepriseCessee($data['entreprise_cessee']);
            unset($data['entreprise_cessee']);
        }
        if (\array_key_exists('date_cessation', $data)) {
            $object->setDateCessation($data['date_cessation']);
            unset($data['date_cessation']);
        }
        if (\array_key_exists('entreprise_employeuse', $data)) {
            $object->setEntrepriseEmployeuse($data['entreprise_employeuse']);
            unset($data['entreprise_employeuse']);
        }
        if (\array_key_exists('categorie_juridique', $data)) {
            $object->setCategorieJuridique($data['categorie_juridique']);
            unset($data['categorie_juridique']);
        }
        if (\array_key_exists('forme_juridique', $data)) {
            $object->setFormeJuridique($data['forme_juridique']);
            unset($data['forme_juridique']);
        }
        if (\array_key_exists('effectif', $data)) {
            $object->setEffectif($data['effectif']);
            unset($data['effectif']);
        }
        if (\array_key_exists('effectif_min', $data)) {
            $object->setEffectifMin($data['effectif_min']);
            unset($data['effectif_min']);
        }
        if (\array_key_exists('effectif_max', $data)) {
            $object->setEffectifMax($data['effectif_max']);
            unset($data['effectif_max']);
        }
        if (\array_key_exists('tranche_effectif', $data)) {
            $object->setTrancheEffectif($data['tranche_effectif']);
            unset($data['tranche_effectif']);
        }
        if (\array_key_exists('annee_effectif', $data)) {
            $object->setAnneeEffectif($data['annee_effectif']);
            unset($data['annee_effectif']);
        }
        if (\array_key_exists('capital', $data)) {
            $object->setCapital($data['capital']);
            unset($data['capital']);
        }
        if (\array_key_exists('statut_rcs', $data)) {
            $object->setStatutRcs($data['statut_rcs']);
            unset($data['statut_rcs']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('siren') && null !== $object->getSiren()) {
            $data['siren'] = $object->getSiren();
        }
        if ($object->isInitialized('sirenFormate') && null !== $object->getSirenFormate()) {
            $data['siren_formate'] = $object->getSirenFormate();
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
        if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
            $data['sexe'] = $object->getSexe();
        }
        if ($object->isInitialized('codeNaf') && null !== $object->getCodeNaf()) {
            $data['code_naf'] = $object->getCodeNaf();
        }
        if ($object->isInitialized('libelleCodeNaf') && null !== $object->getLibelleCodeNaf()) {
            $data['libelle_code_naf'] = $object->getLibelleCodeNaf();
        }
        if ($object->isInitialized('domaineActivite') && null !== $object->getDomaineActivite()) {
            $data['domaine_activite'] = $object->getDomaineActivite();
        }
        if ($object->isInitialized('conventionsCollectives') && null !== $object->getConventionsCollectives()) {
            $values = [];
            foreach ($object->getConventionsCollectives() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['conventions_collectives'] = $values;
        }
        if ($object->isInitialized('dateCreation') && null !== $object->getDateCreation()) {
            $data['date_creation'] = $object->getDateCreation()->format('Y-m-d');
        }
        if ($object->isInitialized('dateCreationFormate') && null !== $object->getDateCreationFormate()) {
            $data['date_creation_formate'] = $object->getDateCreationFormate();
        }
        if ($object->isInitialized('entrepriseCessee') && null !== $object->getEntrepriseCessee()) {
            $data['entreprise_cessee'] = $object->getEntrepriseCessee();
        }
        if ($object->isInitialized('dateCessation') && null !== $object->getDateCessation()) {
            $data['date_cessation'] = $object->getDateCessation();
        }
        if ($object->isInitialized('entrepriseEmployeuse') && null !== $object->getEntrepriseEmployeuse()) {
            $data['entreprise_employeuse'] = $object->getEntrepriseEmployeuse();
        }
        if ($object->isInitialized('categorieJuridique') && null !== $object->getCategorieJuridique()) {
            $data['categorie_juridique'] = $object->getCategorieJuridique();
        }
        if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
            $data['forme_juridique'] = $object->getFormeJuridique();
        }
        if ($object->isInitialized('effectif') && null !== $object->getEffectif()) {
            $data['effectif'] = $object->getEffectif();
        }
        if ($object->isInitialized('effectifMin') && null !== $object->getEffectifMin()) {
            $data['effectif_min'] = $object->getEffectifMin();
        }
        if ($object->isInitialized('effectifMax') && null !== $object->getEffectifMax()) {
            $data['effectif_max'] = $object->getEffectifMax();
        }
        if ($object->isInitialized('trancheEffectif') && null !== $object->getTrancheEffectif()) {
            $data['tranche_effectif'] = $object->getTrancheEffectif();
        }
        if ($object->isInitialized('anneeEffectif') && null !== $object->getAnneeEffectif()) {
            $data['annee_effectif'] = $object->getAnneeEffectif();
        }
        if ($object->isInitialized('capital') && null !== $object->getCapital()) {
            $data['capital'] = $object->getCapital();
        }
        if ($object->isInitialized('statutRcs') && null !== $object->getStatutRcs()) {
            $data['statut_rcs'] = $object->getStatutRcs();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
