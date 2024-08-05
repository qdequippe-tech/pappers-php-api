<?php

namespace Qdequippe\Pappers\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Qdequippe\Pappers\Api\Model\Association;
use Qdequippe\Pappers\Api\Model\AssociationAdresseGestionnaire;
use Qdequippe\Pappers\Api\Model\AssociationAdresseSiege;
use Qdequippe\Pappers\Api\Model\AssociationPublicationsJoafe;
use Qdequippe\Pappers\Api\Model\Beneficiaire;
use Qdequippe\Pappers\Api\Model\Bodacc;
use Qdequippe\Pappers\Api\Model\BodaccAchat;
use Qdequippe\Pappers\Api\Model\BodaccCreation;
use Qdequippe\Pappers\Api\Model\BodaccDepotDesComptes;
use Qdequippe\Pappers\Api\Model\BodaccImmatriculation;
use Qdequippe\Pappers\Api\Model\BodaccModification;
use Qdequippe\Pappers\Api\Model\BodaccProcedureCollective;
use Qdequippe\Pappers\Api\Model\BodaccRadiation;
use Qdequippe\Pappers\Api\Model\BodaccVente;
use Qdequippe\Pappers\Api\Model\Cartographie;
use Qdequippe\Pappers\Api\Model\CartographieEntreprisesItem;
use Qdequippe\Pappers\Api\Model\CartographiePersonnesItem;
use Qdequippe\Pappers\Api\Model\ConformitePersonnePhysiqueGetResponse200;
use Qdequippe\Pappers\Api\Model\Document;
use Qdequippe\Pappers\Api\Model\DocumentActe;
use Qdequippe\Pappers\Api\Model\DocumentActetitresItem;
use Qdequippe\Pappers\Api\Model\DocumentComptes;
use Qdequippe\Pappers\Api\Model\EntrepriseBase;
use Qdequippe\Pappers\Api\Model\EntrepriseBaseConventionsCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFiche;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision;
use Qdequippe\Pappers\Api\Model\EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale;
use Qdequippe\Pappers\Api\Model\EntrepriseFichecomptesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichedepotsActesItemActesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichederniersStatuts;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheetablissement;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheextraitImmatriculation;
use Qdequippe\Pappers\Api\Model\EntrepriseFichefinancesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemClassesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichemarquesItemEvenementsItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFicheproceduresCollectivesItem;
use Qdequippe\Pappers\Api\Model\EntrepriseFichernm;
use Qdequippe\Pappers\Api\Model\EntrepriseRecherche;
use Qdequippe\Pappers\Api\Model\EtablissementFiche;
use Qdequippe\Pappers\Api\Model\EtablissementFicheDomiciliation;
use Qdequippe\Pappers\Api\Model\EtablissementRecherche;
use Qdequippe\Pappers\Api\Model\Labels;
use Qdequippe\Pappers\Api\Model\LabelsBase;
use Qdequippe\Pappers\Api\Model\LabelsBaseInscriptionsItem;
use Qdequippe\Pappers\Api\Model\LienSuccession;
use Qdequippe\Pappers\Api\Model\ListeDeleteResponse200;
use Qdequippe\Pappers\Api\Model\ListeInformationsPostBody;
use Qdequippe\Pappers\Api\Model\ListePostBodyItem;
use Qdequippe\Pappers\Api\Model\ListePostResponse200;
use Qdequippe\Pappers\Api\Model\ListePostResponse201;
use Qdequippe\Pappers\Api\Model\PersonneMarque;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposee;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItem;
use Qdequippe\Pappers\Api\Model\PersonnePolitiquementExposeeFonctionsItemSourcesItem;
use Qdequippe\Pappers\Api\Model\Publication;
use Qdequippe\Pappers\Api\Model\Ratios;
use Qdequippe\Pappers\Api\Model\RechercheBeneficiairesGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheBeneficiairesGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Model\RechercheDirigeantsGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheDirigeantsGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheDocumentsGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Model\RechercheGetResponse200ResultatsItempublicationsItem;
use Qdequippe\Pappers\Api\Model\RecherchePublicationsGetResponse200;
use Qdequippe\Pappers\Api\Model\RecherchePublicationsGetResponse200ResultatsItem;
use Qdequippe\Pappers\Api\Model\Representant;
use Qdequippe\Pappers\Api\Model\RepresentantEntreprise;
use Qdequippe\Pappers\Api\Model\RepresentantRecherche;
use Qdequippe\Pappers\Api\Model\RepresentantSuggestions;
use Qdequippe\Pappers\Api\Model\Sanction;
use Qdequippe\Pappers\Api\Model\SanctionSourcesItem;
use Qdequippe\Pappers\Api\Model\ScoringFinancier;
use Qdequippe\Pappers\Api\Model\ScoringFinancierDetailsScore;
use Qdequippe\Pappers\Api\Model\ScoringNonFinancier;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsDenominationItem;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsNomCompletItem;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsNomEntrepriseItem;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsRepresentantItem;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsSirenItem;
use Qdequippe\Pappers\Api\Model\SuggestionsGetResponse200ResultatsSiretItem;
use Qdequippe\Pappers\Api\Model\SuiviJetonsGetResponse200;
use Qdequippe\Pappers\Api\Runtime\Normalizer\CheckArray;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ReferenceNormalizer;
use Qdequippe\Pappers\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = [
            EntrepriseBase::class => EntrepriseBaseNormalizer::class,

            EntrepriseBaseConventionsCollectivesItem::class => EntrepriseBaseConventionsCollectivesItemNormalizer::class,

            EntrepriseFiche::class => EntrepriseFicheNormalizer::class,

            EntrepriseFicheetablissement::class => EntrepriseFicheetablissementNormalizer::class,

            EntrepriseFichefinancesItem::class => EntrepriseFichefinancesItemNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItem::class => EntrepriseFichebeneficiairesEffectifsItemNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivisionNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMoraleNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivisionNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMoraleNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirectsNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivisionNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMoraleNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion::class => EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestionNormalizer::class,

            EntrepriseFichedepotsActesItem::class => EntrepriseFichedepotsActesItemNormalizer::class,

            EntrepriseFichedepotsActesItemActesItem::class => EntrepriseFichedepotsActesItemActesItemNormalizer::class,

            EntrepriseFichecomptesItem::class => EntrepriseFichecomptesItemNormalizer::class,

            EntrepriseFicheproceduresCollectivesItem::class => EntrepriseFicheproceduresCollectivesItemNormalizer::class,

            EntrepriseFichederniersStatuts::class => EntrepriseFichederniersStatutsNormalizer::class,

            EntrepriseFicheextraitImmatriculation::class => EntrepriseFicheextraitImmatriculationNormalizer::class,

            EntrepriseFichernm::class => EntrepriseFichernmNormalizer::class,

            EntrepriseFichemarquesItem::class => EntrepriseFichemarquesItemNormalizer::class,

            EntrepriseFichemarquesItemClassesItem::class => EntrepriseFichemarquesItemClassesItemNormalizer::class,

            EntrepriseFichemarquesItemEvenementsItem::class => EntrepriseFichemarquesItemEvenementsItemNormalizer::class,

            EntrepriseRecherche::class => EntrepriseRechercheNormalizer::class,

            EtablissementFiche::class => EtablissementFicheNormalizer::class,

            EtablissementFicheDomiciliation::class => EtablissementFicheDomiciliationNormalizer::class,

            EtablissementRecherche::class => EtablissementRechercheNormalizer::class,

            RepresentantSuggestions::class => RepresentantSuggestionsNormalizer::class,

            Representant::class => RepresentantNormalizer::class,

            PersonnePolitiquementExposee::class => PersonnePolitiquementExposeeNormalizer::class,

            PersonnePolitiquementExposeeFonctionsItem::class => PersonnePolitiquementExposeeFonctionsItemNormalizer::class,

            PersonnePolitiquementExposeeFonctionsItemSourcesItem::class => PersonnePolitiquementExposeeFonctionsItemSourcesItemNormalizer::class,

            Sanction::class => SanctionNormalizer::class,

            SanctionSourcesItem::class => SanctionSourcesItemNormalizer::class,

            RepresentantEntreprise::class => RepresentantEntrepriseNormalizer::class,

            RepresentantRecherche::class => RepresentantRechercheNormalizer::class,

            Beneficiaire::class => BeneficiaireNormalizer::class,

            Document::class => DocumentNormalizer::class,

            DocumentActe::class => DocumentActeNormalizer::class,

            DocumentActetitresItem::class => DocumentActetitresItemNormalizer::class,

            DocumentComptes::class => DocumentComptesNormalizer::class,

            Publication::class => PublicationNormalizer::class,

            Bodacc::class => BodaccNormalizer::class,

            BodaccCreation::class => BodaccCreationNormalizer::class,

            BodaccImmatriculation::class => BodaccImmatriculationNormalizer::class,

            BodaccModification::class => BodaccModificationNormalizer::class,

            BodaccAchat::class => BodaccAchatNormalizer::class,

            BodaccVente::class => BodaccVenteNormalizer::class,

            BodaccRadiation::class => BodaccRadiationNormalizer::class,

            BodaccProcedureCollective::class => BodaccProcedureCollectiveNormalizer::class,

            BodaccDepotDesComptes::class => BodaccDepotDesComptesNormalizer::class,

            PersonneMarque::class => PersonneMarqueNormalizer::class,

            Ratios::class => RatiosNormalizer::class,

            Association::class => AssociationNormalizer::class,

            AssociationAdresseSiege::class => AssociationAdresseSiegeNormalizer::class,

            AssociationAdresseGestionnaire::class => AssociationAdresseGestionnaireNormalizer::class,

            AssociationPublicationsJoafe::class => AssociationPublicationsJoafeNormalizer::class,

            ScoringNonFinancier::class => ScoringNonFinancierNormalizer::class,

            ScoringFinancier::class => ScoringFinancierNormalizer::class,

            ScoringFinancierDetailsScore::class => ScoringFinancierDetailsScoreNormalizer::class,

            LabelsBase::class => LabelsBaseNormalizer::class,

            LabelsBaseInscriptionsItem::class => LabelsBaseInscriptionsItemNormalizer::class,

            Labels::class => LabelsNormalizer::class,

            LienSuccession::class => LienSuccessionNormalizer::class,

            Cartographie::class => CartographieNormalizer::class,

            CartographieEntreprisesItem::class => CartographieEntreprisesItemNormalizer::class,

            CartographiePersonnesItem::class => CartographiePersonnesItemNormalizer::class,

            RechercheGetResponse200::class => RechercheGetResponse200Normalizer::class,

            RechercheGetResponse200ResultatsItem::class => RechercheGetResponse200ResultatsItemNormalizer::class,

            RechercheGetResponse200ResultatsItempublicationsItem::class => RechercheGetResponse200ResultatsItempublicationsItemNormalizer::class,

            RechercheDirigeantsGetResponse200::class => RechercheDirigeantsGetResponse200Normalizer::class,

            RechercheDirigeantsGetResponse200ResultatsItem::class => RechercheDirigeantsGetResponse200ResultatsItemNormalizer::class,

            RechercheBeneficiairesGetResponse200::class => RechercheBeneficiairesGetResponse200Normalizer::class,

            RechercheBeneficiairesGetResponse200ResultatsItem::class => RechercheBeneficiairesGetResponse200ResultatsItemNormalizer::class,

            RechercheDocumentsGetResponse200::class => RechercheDocumentsGetResponse200Normalizer::class,

            RechercheDocumentsGetResponse200ResultatsItem::class => RechercheDocumentsGetResponse200ResultatsItemNormalizer::class,

            RecherchePublicationsGetResponse200::class => RecherchePublicationsGetResponse200Normalizer::class,

            RecherchePublicationsGetResponse200ResultatsItem::class => RecherchePublicationsGetResponse200ResultatsItemNormalizer::class,

            SuggestionsGetResponse200::class => SuggestionsGetResponse200Normalizer::class,

            SuggestionsGetResponse200ResultatsNomEntrepriseItem::class => SuggestionsGetResponse200ResultatsNomEntrepriseItemNormalizer::class,

            SuggestionsGetResponse200ResultatsDenominationItem::class => SuggestionsGetResponse200ResultatsDenominationItemNormalizer::class,

            SuggestionsGetResponse200ResultatsNomCompletItem::class => SuggestionsGetResponse200ResultatsNomCompletItemNormalizer::class,

            SuggestionsGetResponse200ResultatsRepresentantItem::class => SuggestionsGetResponse200ResultatsRepresentantItemNormalizer::class,

            SuggestionsGetResponse200ResultatsSirenItem::class => SuggestionsGetResponse200ResultatsSirenItemNormalizer::class,

            SuggestionsGetResponse200ResultatsSiretItem::class => SuggestionsGetResponse200ResultatsSiretItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItem::class => EntrepriseComptesGetResponse200ItemItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItemSectionsItem::class => EntrepriseComptesGetResponse200ItemItemSectionsItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class => EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem::class => EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItemNormalizer::class,

            ConformitePersonnePhysiqueGetResponse200::class => ConformitePersonnePhysiqueGetResponse200Normalizer::class,

            SuiviJetonsGetResponse200::class => SuiviJetonsGetResponse200Normalizer::class,

            ListePostBodyItem::class => ListePostBodyItemNormalizer::class,

            ListePostResponse200::class => ListePostResponse200Normalizer::class,

            ListePostResponse201::class => ListePostResponse201Normalizer::class,

            ListeDeleteResponse200::class => ListeDeleteResponse200Normalizer::class,

            ListeInformationsPostBody::class => ListeInformationsPostBodyNormalizer::class,

            Reference::class => ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[$object::class];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
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

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                EntrepriseBase::class => false,
                EntrepriseBaseConventionsCollectivesItem::class => false,
                EntrepriseFiche::class => false,
                EntrepriseFicheetablissement::class => false,
                EntrepriseFichefinancesItem::class => false,
                EntrepriseFichebeneficiairesEffectifsItem::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion::class => false,
                EntrepriseFichedepotsActesItem::class => false,
                EntrepriseFichedepotsActesItemActesItem::class => false,
                EntrepriseFichecomptesItem::class => false,
                EntrepriseFicheproceduresCollectivesItem::class => false,
                EntrepriseFichederniersStatuts::class => false,
                EntrepriseFicheextraitImmatriculation::class => false,
                EntrepriseFichernm::class => false,
                EntrepriseFichemarquesItem::class => false,
                EntrepriseFichemarquesItemClassesItem::class => false,
                EntrepriseFichemarquesItemEvenementsItem::class => false,
                EntrepriseRecherche::class => false,
                EtablissementFiche::class => false,
                EtablissementFicheDomiciliation::class => false,
                EtablissementRecherche::class => false,
                RepresentantSuggestions::class => false,
                Representant::class => false,
                PersonnePolitiquementExposee::class => false,
                PersonnePolitiquementExposeeFonctionsItem::class => false,
                PersonnePolitiquementExposeeFonctionsItemSourcesItem::class => false,
                Sanction::class => false,
                SanctionSourcesItem::class => false,
                RepresentantEntreprise::class => false,
                RepresentantRecherche::class => false,
                Beneficiaire::class => false,
                Document::class => false,
                DocumentActe::class => false,
                DocumentActetitresItem::class => false,
                DocumentComptes::class => false,
                Publication::class => false,
                Bodacc::class => false,
                BodaccCreation::class => false,
                BodaccImmatriculation::class => false,
                BodaccModification::class => false,
                BodaccAchat::class => false,
                BodaccVente::class => false,
                BodaccRadiation::class => false,
                BodaccProcedureCollective::class => false,
                BodaccDepotDesComptes::class => false,
                PersonneMarque::class => false,
                Ratios::class => false,
                Association::class => false,
                AssociationAdresseSiege::class => false,
                AssociationAdresseGestionnaire::class => false,
                AssociationPublicationsJoafe::class => false,
                ScoringNonFinancier::class => false,
                ScoringFinancier::class => false,
                ScoringFinancierDetailsScore::class => false,
                LabelsBase::class => false,
                LabelsBaseInscriptionsItem::class => false,
                Labels::class => false,
                LienSuccession::class => false,
                Cartographie::class => false,
                CartographieEntreprisesItem::class => false,
                CartographiePersonnesItem::class => false,
                RechercheGetResponse200::class => false,
                RechercheGetResponse200ResultatsItem::class => false,
                RechercheGetResponse200ResultatsItempublicationsItem::class => false,
                RechercheDirigeantsGetResponse200::class => false,
                RechercheDirigeantsGetResponse200ResultatsItem::class => false,
                RechercheBeneficiairesGetResponse200::class => false,
                RechercheBeneficiairesGetResponse200ResultatsItem::class => false,
                RechercheDocumentsGetResponse200::class => false,
                RechercheDocumentsGetResponse200ResultatsItem::class => false,
                RecherchePublicationsGetResponse200::class => false,
                RecherchePublicationsGetResponse200ResultatsItem::class => false,
                SuggestionsGetResponse200::class => false,
                SuggestionsGetResponse200ResultatsNomEntrepriseItem::class => false,
                SuggestionsGetResponse200ResultatsDenominationItem::class => false,
                SuggestionsGetResponse200ResultatsNomCompletItem::class => false,
                SuggestionsGetResponse200ResultatsRepresentantItem::class => false,
                SuggestionsGetResponse200ResultatsSirenItem::class => false,
                SuggestionsGetResponse200ResultatsSiretItem::class => false,
                EntrepriseComptesGetResponse200ItemItem::class => false,
                EntrepriseComptesGetResponse200ItemItemSectionsItem::class => false,
                EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class => false,
                EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem::class => false,
                ConformitePersonnePhysiqueGetResponse200::class => false,
                SuiviJetonsGetResponse200::class => false,
                ListePostBodyItem::class => false,
                ListePostResponse200::class => false,
                ListePostResponse201::class => false,
                ListeDeleteResponse200::class => false,
                ListeInformationsPostBody::class => false,
                Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = [
            EntrepriseBase::class => EntrepriseBaseNormalizer::class,

            EntrepriseBaseConventionsCollectivesItem::class => EntrepriseBaseConventionsCollectivesItemNormalizer::class,

            EntrepriseFiche::class => EntrepriseFicheNormalizer::class,

            EntrepriseFicheetablissement::class => EntrepriseFicheetablissementNormalizer::class,

            EntrepriseFichefinancesItem::class => EntrepriseFichefinancesItemNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItem::class => EntrepriseFichebeneficiairesEffectifsItemNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivisionNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMoraleNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivisionNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class => EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMoraleNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirectsNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivisionNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale::class => EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMoraleNormalizer::class,

            EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion::class => EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestionNormalizer::class,

            EntrepriseFichedepotsActesItem::class => EntrepriseFichedepotsActesItemNormalizer::class,

            EntrepriseFichedepotsActesItemActesItem::class => EntrepriseFichedepotsActesItemActesItemNormalizer::class,

            EntrepriseFichecomptesItem::class => EntrepriseFichecomptesItemNormalizer::class,

            EntrepriseFicheproceduresCollectivesItem::class => EntrepriseFicheproceduresCollectivesItemNormalizer::class,

            EntrepriseFichederniersStatuts::class => EntrepriseFichederniersStatutsNormalizer::class,

            EntrepriseFicheextraitImmatriculation::class => EntrepriseFicheextraitImmatriculationNormalizer::class,

            EntrepriseFichernm::class => EntrepriseFichernmNormalizer::class,

            EntrepriseFichemarquesItem::class => EntrepriseFichemarquesItemNormalizer::class,

            EntrepriseFichemarquesItemClassesItem::class => EntrepriseFichemarquesItemClassesItemNormalizer::class,

            EntrepriseFichemarquesItemEvenementsItem::class => EntrepriseFichemarquesItemEvenementsItemNormalizer::class,

            EntrepriseRecherche::class => EntrepriseRechercheNormalizer::class,

            EtablissementFiche::class => EtablissementFicheNormalizer::class,

            EtablissementFicheDomiciliation::class => EtablissementFicheDomiciliationNormalizer::class,

            EtablissementRecherche::class => EtablissementRechercheNormalizer::class,

            RepresentantSuggestions::class => RepresentantSuggestionsNormalizer::class,

            Representant::class => RepresentantNormalizer::class,

            PersonnePolitiquementExposee::class => PersonnePolitiquementExposeeNormalizer::class,

            PersonnePolitiquementExposeeFonctionsItem::class => PersonnePolitiquementExposeeFonctionsItemNormalizer::class,

            PersonnePolitiquementExposeeFonctionsItemSourcesItem::class => PersonnePolitiquementExposeeFonctionsItemSourcesItemNormalizer::class,

            Sanction::class => SanctionNormalizer::class,

            SanctionSourcesItem::class => SanctionSourcesItemNormalizer::class,

            RepresentantEntreprise::class => RepresentantEntrepriseNormalizer::class,

            RepresentantRecherche::class => RepresentantRechercheNormalizer::class,

            Beneficiaire::class => BeneficiaireNormalizer::class,

            Document::class => DocumentNormalizer::class,

            DocumentActe::class => DocumentActeNormalizer::class,

            DocumentActetitresItem::class => DocumentActetitresItemNormalizer::class,

            DocumentComptes::class => DocumentComptesNormalizer::class,

            Publication::class => PublicationNormalizer::class,

            Bodacc::class => BodaccNormalizer::class,

            BodaccCreation::class => BodaccCreationNormalizer::class,

            BodaccImmatriculation::class => BodaccImmatriculationNormalizer::class,

            BodaccModification::class => BodaccModificationNormalizer::class,

            BodaccAchat::class => BodaccAchatNormalizer::class,

            BodaccVente::class => BodaccVenteNormalizer::class,

            BodaccRadiation::class => BodaccRadiationNormalizer::class,

            BodaccProcedureCollective::class => BodaccProcedureCollectiveNormalizer::class,

            BodaccDepotDesComptes::class => BodaccDepotDesComptesNormalizer::class,

            PersonneMarque::class => PersonneMarqueNormalizer::class,

            Ratios::class => RatiosNormalizer::class,

            Association::class => AssociationNormalizer::class,

            AssociationAdresseSiege::class => AssociationAdresseSiegeNormalizer::class,

            AssociationAdresseGestionnaire::class => AssociationAdresseGestionnaireNormalizer::class,

            AssociationPublicationsJoafe::class => AssociationPublicationsJoafeNormalizer::class,

            ScoringNonFinancier::class => ScoringNonFinancierNormalizer::class,

            ScoringFinancier::class => ScoringFinancierNormalizer::class,

            ScoringFinancierDetailsScore::class => ScoringFinancierDetailsScoreNormalizer::class,

            LabelsBase::class => LabelsBaseNormalizer::class,

            LabelsBaseInscriptionsItem::class => LabelsBaseInscriptionsItemNormalizer::class,

            Labels::class => LabelsNormalizer::class,

            LienSuccession::class => LienSuccessionNormalizer::class,

            Cartographie::class => CartographieNormalizer::class,

            CartographieEntreprisesItem::class => CartographieEntreprisesItemNormalizer::class,

            CartographiePersonnesItem::class => CartographiePersonnesItemNormalizer::class,

            RechercheGetResponse200::class => RechercheGetResponse200Normalizer::class,

            RechercheGetResponse200ResultatsItem::class => RechercheGetResponse200ResultatsItemNormalizer::class,

            RechercheGetResponse200ResultatsItempublicationsItem::class => RechercheGetResponse200ResultatsItempublicationsItemNormalizer::class,

            RechercheDirigeantsGetResponse200::class => RechercheDirigeantsGetResponse200Normalizer::class,

            RechercheDirigeantsGetResponse200ResultatsItem::class => RechercheDirigeantsGetResponse200ResultatsItemNormalizer::class,

            RechercheBeneficiairesGetResponse200::class => RechercheBeneficiairesGetResponse200Normalizer::class,

            RechercheBeneficiairesGetResponse200ResultatsItem::class => RechercheBeneficiairesGetResponse200ResultatsItemNormalizer::class,

            RechercheDocumentsGetResponse200::class => RechercheDocumentsGetResponse200Normalizer::class,

            RechercheDocumentsGetResponse200ResultatsItem::class => RechercheDocumentsGetResponse200ResultatsItemNormalizer::class,

            RecherchePublicationsGetResponse200::class => RecherchePublicationsGetResponse200Normalizer::class,

            RecherchePublicationsGetResponse200ResultatsItem::class => RecherchePublicationsGetResponse200ResultatsItemNormalizer::class,

            SuggestionsGetResponse200::class => SuggestionsGetResponse200Normalizer::class,

            SuggestionsGetResponse200ResultatsNomEntrepriseItem::class => SuggestionsGetResponse200ResultatsNomEntrepriseItemNormalizer::class,

            SuggestionsGetResponse200ResultatsDenominationItem::class => SuggestionsGetResponse200ResultatsDenominationItemNormalizer::class,

            SuggestionsGetResponse200ResultatsNomCompletItem::class => SuggestionsGetResponse200ResultatsNomCompletItemNormalizer::class,

            SuggestionsGetResponse200ResultatsRepresentantItem::class => SuggestionsGetResponse200ResultatsRepresentantItemNormalizer::class,

            SuggestionsGetResponse200ResultatsSirenItem::class => SuggestionsGetResponse200ResultatsSirenItemNormalizer::class,

            SuggestionsGetResponse200ResultatsSiretItem::class => SuggestionsGetResponse200ResultatsSiretItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItem::class => EntrepriseComptesGetResponse200ItemItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItemSectionsItem::class => EntrepriseComptesGetResponse200ItemItemSectionsItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class => EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemNormalizer::class,

            EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem::class => EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItemNormalizer::class,

            ConformitePersonnePhysiqueGetResponse200::class => ConformitePersonnePhysiqueGetResponse200Normalizer::class,

            SuiviJetonsGetResponse200::class => SuiviJetonsGetResponse200Normalizer::class,

            ListePostBodyItem::class => ListePostBodyItemNormalizer::class,

            ListePostResponse200::class => ListePostResponse200Normalizer::class,

            ListePostResponse201::class => ListePostResponse201Normalizer::class,

            ListeDeleteResponse200::class => ListeDeleteResponse200Normalizer::class,

            ListeInformationsPostBody::class => ListeInformationsPostBodyNormalizer::class,

            Reference::class => ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[$object::class];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
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

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                EntrepriseBase::class => false,
                EntrepriseBaseConventionsCollectivesItem::class => false,
                EntrepriseFiche::class => false,
                EntrepriseFicheetablissement::class => false,
                EntrepriseFichefinancesItem::class => false,
                EntrepriseFichebeneficiairesEffectifsItem::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale::class => false,
                EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion::class => false,
                EntrepriseFichedepotsActesItem::class => false,
                EntrepriseFichedepotsActesItemActesItem::class => false,
                EntrepriseFichecomptesItem::class => false,
                EntrepriseFicheproceduresCollectivesItem::class => false,
                EntrepriseFichederniersStatuts::class => false,
                EntrepriseFicheextraitImmatriculation::class => false,
                EntrepriseFichernm::class => false,
                EntrepriseFichemarquesItem::class => false,
                EntrepriseFichemarquesItemClassesItem::class => false,
                EntrepriseFichemarquesItemEvenementsItem::class => false,
                EntrepriseRecherche::class => false,
                EtablissementFiche::class => false,
                EtablissementFicheDomiciliation::class => false,
                EtablissementRecherche::class => false,
                RepresentantSuggestions::class => false,
                Representant::class => false,
                PersonnePolitiquementExposee::class => false,
                PersonnePolitiquementExposeeFonctionsItem::class => false,
                PersonnePolitiquementExposeeFonctionsItemSourcesItem::class => false,
                Sanction::class => false,
                SanctionSourcesItem::class => false,
                RepresentantEntreprise::class => false,
                RepresentantRecherche::class => false,
                Beneficiaire::class => false,
                Document::class => false,
                DocumentActe::class => false,
                DocumentActetitresItem::class => false,
                DocumentComptes::class => false,
                Publication::class => false,
                Bodacc::class => false,
                BodaccCreation::class => false,
                BodaccImmatriculation::class => false,
                BodaccModification::class => false,
                BodaccAchat::class => false,
                BodaccVente::class => false,
                BodaccRadiation::class => false,
                BodaccProcedureCollective::class => false,
                BodaccDepotDesComptes::class => false,
                PersonneMarque::class => false,
                Ratios::class => false,
                Association::class => false,
                AssociationAdresseSiege::class => false,
                AssociationAdresseGestionnaire::class => false,
                AssociationPublicationsJoafe::class => false,
                ScoringNonFinancier::class => false,
                ScoringFinancier::class => false,
                ScoringFinancierDetailsScore::class => false,
                LabelsBase::class => false,
                LabelsBaseInscriptionsItem::class => false,
                Labels::class => false,
                LienSuccession::class => false,
                Cartographie::class => false,
                CartographieEntreprisesItem::class => false,
                CartographiePersonnesItem::class => false,
                RechercheGetResponse200::class => false,
                RechercheGetResponse200ResultatsItem::class => false,
                RechercheGetResponse200ResultatsItempublicationsItem::class => false,
                RechercheDirigeantsGetResponse200::class => false,
                RechercheDirigeantsGetResponse200ResultatsItem::class => false,
                RechercheBeneficiairesGetResponse200::class => false,
                RechercheBeneficiairesGetResponse200ResultatsItem::class => false,
                RechercheDocumentsGetResponse200::class => false,
                RechercheDocumentsGetResponse200ResultatsItem::class => false,
                RecherchePublicationsGetResponse200::class => false,
                RecherchePublicationsGetResponse200ResultatsItem::class => false,
                SuggestionsGetResponse200::class => false,
                SuggestionsGetResponse200ResultatsNomEntrepriseItem::class => false,
                SuggestionsGetResponse200ResultatsDenominationItem::class => false,
                SuggestionsGetResponse200ResultatsNomCompletItem::class => false,
                SuggestionsGetResponse200ResultatsRepresentantItem::class => false,
                SuggestionsGetResponse200ResultatsSirenItem::class => false,
                SuggestionsGetResponse200ResultatsSiretItem::class => false,
                EntrepriseComptesGetResponse200ItemItem::class => false,
                EntrepriseComptesGetResponse200ItemItemSectionsItem::class => false,
                EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem::class => false,
                EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem::class => false,
                ConformitePersonnePhysiqueGetResponse200::class => false,
                SuiviJetonsGetResponse200::class => false,
                ListePostBodyItem::class => false,
                ListePostResponse200::class => false,
                ListePostResponse201::class => false,
                ListeDeleteResponse200::class => false,
                ListeInformationsPostBody::class => false,
                Reference::class => false,
            ];
        }
    }
}
