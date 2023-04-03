<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = ['Qdequippe\\Pappers\\Api\\Model\\EntrepriseBase' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseBaseNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseBaseConventionsCollectivesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseBaseConventionsCollectivesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFiche' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFicheNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichefinancesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichefinancesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectesNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivisionNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMoraleNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectesNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivisionNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMoraleNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirectsNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivisionNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMoraleNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestionNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichedepotsActesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichedepotsActesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichedepotsActesItemActesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichedepotsActesItemActesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichecomptesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichecomptesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFicheproceduresCollectivesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFicheproceduresCollectivesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichederniersStatuts' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichederniersStatutsNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFicheextraitImmatriculation' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFicheextraitImmatriculationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichernm' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichernmNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichemarquesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemClassesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichemarquesItemClassesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseFichemarquesItemEvenementsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseFichemarquesItemEvenementsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseRecherche' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseRechercheNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFiche' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EtablissementFicheNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EtablissementFicheDomiciliation' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EtablissementFicheDomiciliationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EtablissementRecherche' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EtablissementRechercheNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Representant' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RepresentantNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RepresentantRecherche' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RepresentantRechercheNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Beneficiaire' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BeneficiaireNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Document' => 'Qdequippe\\Pappers\\Api\\Normalizer\\DocumentNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\DocumentActe' => 'Qdequippe\\Pappers\\Api\\Normalizer\\DocumentActeNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\DocumentActetitresItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\DocumentActetitresItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\DocumentComptes' => 'Qdequippe\\Pappers\\Api\\Normalizer\\DocumentComptesNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Publication' => 'Qdequippe\\Pappers\\Api\\Normalizer\\PublicationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Bodacc' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccCreation' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccCreationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccImmatriculation' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccImmatriculationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccModification' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccModificationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccAchat' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccAchatNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccVente' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccVenteNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccRadiation' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccRadiationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccProcedureCollective' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccProcedureCollectiveNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\BodaccDepotDesComptes' => 'Qdequippe\\Pappers\\Api\\Normalizer\\BodaccDepotDesComptesNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\PersonneMarque' => 'Qdequippe\\Pappers\\Api\\Normalizer\\PersonneMarqueNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Ratios' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RatiosNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Association' => 'Qdequippe\\Pappers\\Api\\Normalizer\\AssociationNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseSiege' => 'Qdequippe\\Pappers\\Api\\Normalizer\\AssociationAdresseSiegeNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\AssociationAdresseGestionnaire' => 'Qdequippe\\Pappers\\Api\\Normalizer\\AssociationAdresseGestionnaireNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\AssociationPublicationsJoafe' => 'Qdequippe\\Pappers\\Api\\Normalizer\\AssociationPublicationsJoafeNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\LienSuccession' => 'Qdequippe\\Pappers\\Api\\Normalizer\\LienSuccessionNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\Cartographie' => 'Qdequippe\\Pappers\\Api\\Normalizer\\CartographieNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\CartographieEntreprisesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\CartographieEntreprisesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\CartographiePersonnesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\CartographiePersonnesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheGetResponse200ResultatsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheGetResponse200ResultatsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheGetResponse200ResultatsItempublicationsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheGetResponse200ResultatsItempublicationsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheDirigeantsGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheDirigeantsGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheDirigeantsGetResponse200ResultatsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheDirigeantsGetResponse200ResultatsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheBeneficiairesGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheBeneficiairesGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheBeneficiairesGetResponse200ResultatsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheBeneficiairesGetResponse200ResultatsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheDocumentsGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\RechercheDocumentsGetResponse200ResultatsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RechercheDocumentsGetResponse200ResultatsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\RecherchePublicationsGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RecherchePublicationsGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\RecherchePublicationsGetResponse200ResultatsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\RecherchePublicationsGetResponse200ResultatsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsNomEntrepriseItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200ResultatsNomEntrepriseItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsDenominationItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200ResultatsDenominationItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsNomCompletItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200ResultatsNomCompletItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsRepresentantItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200ResultatsRepresentantItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsSirenItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200ResultatsSirenItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuggestionsGetResponse200ResultatsSiretItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuggestionsGetResponse200ResultatsSiretItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseComptesGetResponse200ItemItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItemSectionsItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseComptesGetResponse200ItemItemSectionsItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\SuiviJetonsGetResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\SuiviJetonsGetResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\ListePostBodyItem' => 'Qdequippe\\Pappers\\Api\\Normalizer\\ListePostBodyItemNormalizer', 'Qdequippe\\Pappers\\Api\\Model\\ListePostResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\ListePostResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\ListePostResponse201' => 'Qdequippe\\Pappers\\Api\\Normalizer\\ListePostResponse201Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\ListeDeleteResponse200' => 'Qdequippe\\Pappers\\Api\\Normalizer\\ListeDeleteResponse200Normalizer', 'Qdequippe\\Pappers\\Api\\Model\\ListeInformationsPostBody' => 'Qdequippe\\Pappers\\Api\\Normalizer\\ListeInformationsPostBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Qdequippe\\Pappers\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[\get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
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
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
