<?php

namespace Qdequippe\Pappers\Api\Model;

class SuggestionsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Liste des entreprises dont le nom (dénomination ou nom/prénom) peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `nom_entreprise`.
     *
     * @var SuggestionsGetResponse200ResultatsNomEntrepriseItem[]|null
     */
    protected $resultatsNomEntreprise;
    /**
     * Liste des entreprises dont la dénomination peut compléter la recherche textuelle (concerne les personnes morales seulement). Uniquement présent si le paramètre `cibles` contient `denomination`.
     *
     * @var SuggestionsGetResponse200ResultatsDenominationItem[]|null
     */
    protected $resultatsDenomination;
    /**
     * Liste des entreprises dont le nom complet (nom + prénom ou prénom + nom) peut compléter la recherche textuelle (concerne les personnes physiques seulement). Uniquement présent si le paramètre `cibles` contient `nom_complet`.
     *
     * @var SuggestionsGetResponse200ResultatsNomCompletItem[]|null
     */
    protected $resultatsNomComplet;
    /**
     * Liste des représentants dont le nom complet (nom + prénom ou prénom + nom) peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `representant`.
     *
     * @var SuggestionsGetResponse200ResultatsRepresentantItem[]|null
     */
    protected $resultatsRepresentant;
    /**
     * Liste des entreprises dont le numéro SIREN peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `siren`.
     *
     * @var SuggestionsGetResponse200ResultatsSirenItem[]|null
     */
    protected $resultatsSiren;
    /**
     * Liste des entreprises dont le numéro SIRET peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `siret`.
     *
     * @var SuggestionsGetResponse200ResultatsSiretItem[]|null
     */
    protected $resultatsSiret;

    /**
     * Liste des entreprises dont le nom (dénomination ou nom/prénom) peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `nom_entreprise`.
     *
     * @return SuggestionsGetResponse200ResultatsNomEntrepriseItem[]|null
     */
    public function getResultatsNomEntreprise(): ?array
    {
        return $this->resultatsNomEntreprise;
    }

    /**
     * Liste des entreprises dont le nom (dénomination ou nom/prénom) peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `nom_entreprise`.
     *
     * @param SuggestionsGetResponse200ResultatsNomEntrepriseItem[]|null $resultatsNomEntreprise
     */
    public function setResultatsNomEntreprise(?array $resultatsNomEntreprise): self
    {
        $this->initialized['resultatsNomEntreprise'] = true;
        $this->resultatsNomEntreprise = $resultatsNomEntreprise;

        return $this;
    }

    /**
     * Liste des entreprises dont la dénomination peut compléter la recherche textuelle (concerne les personnes morales seulement). Uniquement présent si le paramètre `cibles` contient `denomination`.
     *
     * @return SuggestionsGetResponse200ResultatsDenominationItem[]|null
     */
    public function getResultatsDenomination(): ?array
    {
        return $this->resultatsDenomination;
    }

    /**
     * Liste des entreprises dont la dénomination peut compléter la recherche textuelle (concerne les personnes morales seulement). Uniquement présent si le paramètre `cibles` contient `denomination`.
     *
     * @param SuggestionsGetResponse200ResultatsDenominationItem[]|null $resultatsDenomination
     */
    public function setResultatsDenomination(?array $resultatsDenomination): self
    {
        $this->initialized['resultatsDenomination'] = true;
        $this->resultatsDenomination = $resultatsDenomination;

        return $this;
    }

    /**
     * Liste des entreprises dont le nom complet (nom + prénom ou prénom + nom) peut compléter la recherche textuelle (concerne les personnes physiques seulement). Uniquement présent si le paramètre `cibles` contient `nom_complet`.
     *
     * @return SuggestionsGetResponse200ResultatsNomCompletItem[]|null
     */
    public function getResultatsNomComplet(): ?array
    {
        return $this->resultatsNomComplet;
    }

    /**
     * Liste des entreprises dont le nom complet (nom + prénom ou prénom + nom) peut compléter la recherche textuelle (concerne les personnes physiques seulement). Uniquement présent si le paramètre `cibles` contient `nom_complet`.
     *
     * @param SuggestionsGetResponse200ResultatsNomCompletItem[]|null $resultatsNomComplet
     */
    public function setResultatsNomComplet(?array $resultatsNomComplet): self
    {
        $this->initialized['resultatsNomComplet'] = true;
        $this->resultatsNomComplet = $resultatsNomComplet;

        return $this;
    }

    /**
     * Liste des représentants dont le nom complet (nom + prénom ou prénom + nom) peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `representant`.
     *
     * @return SuggestionsGetResponse200ResultatsRepresentantItem[]|null
     */
    public function getResultatsRepresentant(): ?array
    {
        return $this->resultatsRepresentant;
    }

    /**
     * Liste des représentants dont le nom complet (nom + prénom ou prénom + nom) peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `representant`.
     *
     * @param SuggestionsGetResponse200ResultatsRepresentantItem[]|null $resultatsRepresentant
     */
    public function setResultatsRepresentant(?array $resultatsRepresentant): self
    {
        $this->initialized['resultatsRepresentant'] = true;
        $this->resultatsRepresentant = $resultatsRepresentant;

        return $this;
    }

    /**
     * Liste des entreprises dont le numéro SIREN peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `siren`.
     *
     * @return SuggestionsGetResponse200ResultatsSirenItem[]|null
     */
    public function getResultatsSiren(): ?array
    {
        return $this->resultatsSiren;
    }

    /**
     * Liste des entreprises dont le numéro SIREN peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `siren`.
     *
     * @param SuggestionsGetResponse200ResultatsSirenItem[]|null $resultatsSiren
     */
    public function setResultatsSiren(?array $resultatsSiren): self
    {
        $this->initialized['resultatsSiren'] = true;
        $this->resultatsSiren = $resultatsSiren;

        return $this;
    }

    /**
     * Liste des entreprises dont le numéro SIRET peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `siret`.
     *
     * @return SuggestionsGetResponse200ResultatsSiretItem[]|null
     */
    public function getResultatsSiret(): ?array
    {
        return $this->resultatsSiret;
    }

    /**
     * Liste des entreprises dont le numéro SIRET peut compléter la recherche textuelle. Uniquement présent si le paramètre `cibles` contient `siret`.
     *
     * @param SuggestionsGetResponse200ResultatsSiretItem[]|null $resultatsSiret
     */
    public function setResultatsSiret(?array $resultatsSiret): self
    {
        $this->initialized['resultatsSiret'] = true;
        $this->resultatsSiret = $resultatsSiret;

        return $this;
    }
}
