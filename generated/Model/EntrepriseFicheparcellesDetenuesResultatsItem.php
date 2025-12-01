<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheparcellesDetenuesResultatsItem extends \ArrayObject
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
     * Parcelle cadastrale du bien détenu.
     *
     * @var string|null
     */
    protected $parcelleCadastrale;
    /**
     * Type du bien détenu.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Numéro de la voie du bien détenu.
     *
     * @var float|null
     */
    protected $numeroVoie;
    /**
     * Type de voie du bien détenu.
     *
     * @var string|null
     */
    protected $typeVoie;
    /**
     * Libellé de la voie du bien détenu.
     *
     * @var string|null
     */
    protected $libelleVoie;
    /**
     * Code commune du bien détenu.
     *
     * @var string|null
     */
    protected $codeCommune;
    /**
     * Nom de la commune du bien détenu.
     *
     * @var string|null
     */
    protected $nomCommune;
    /**
     * Contenance de la parcelle (en m²).
     *
     * @var string|null
     */
    protected $contenance;

    /**
     * Parcelle cadastrale du bien détenu.
     */
    public function getParcelleCadastrale(): ?string
    {
        return $this->parcelleCadastrale;
    }

    /**
     * Parcelle cadastrale du bien détenu.
     */
    public function setParcelleCadastrale(?string $parcelleCadastrale): self
    {
        $this->initialized['parcelleCadastrale'] = true;
        $this->parcelleCadastrale = $parcelleCadastrale;

        return $this;
    }

    /**
     * Type du bien détenu.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type du bien détenu.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Numéro de la voie du bien détenu.
     */
    public function getNumeroVoie(): ?float
    {
        return $this->numeroVoie;
    }

    /**
     * Numéro de la voie du bien détenu.
     */
    public function setNumeroVoie(?float $numeroVoie): self
    {
        $this->initialized['numeroVoie'] = true;
        $this->numeroVoie = $numeroVoie;

        return $this;
    }

    /**
     * Type de voie du bien détenu.
     */
    public function getTypeVoie(): ?string
    {
        return $this->typeVoie;
    }

    /**
     * Type de voie du bien détenu.
     */
    public function setTypeVoie(?string $typeVoie): self
    {
        $this->initialized['typeVoie'] = true;
        $this->typeVoie = $typeVoie;

        return $this;
    }

    /**
     * Libellé de la voie du bien détenu.
     */
    public function getLibelleVoie(): ?string
    {
        return $this->libelleVoie;
    }

    /**
     * Libellé de la voie du bien détenu.
     */
    public function setLibelleVoie(?string $libelleVoie): self
    {
        $this->initialized['libelleVoie'] = true;
        $this->libelleVoie = $libelleVoie;

        return $this;
    }

    /**
     * Code commune du bien détenu.
     */
    public function getCodeCommune(): ?string
    {
        return $this->codeCommune;
    }

    /**
     * Code commune du bien détenu.
     */
    public function setCodeCommune(?string $codeCommune): self
    {
        $this->initialized['codeCommune'] = true;
        $this->codeCommune = $codeCommune;

        return $this;
    }

    /**
     * Nom de la commune du bien détenu.
     */
    public function getNomCommune(): ?string
    {
        return $this->nomCommune;
    }

    /**
     * Nom de la commune du bien détenu.
     */
    public function setNomCommune(?string $nomCommune): self
    {
        $this->initialized['nomCommune'] = true;
        $this->nomCommune = $nomCommune;

        return $this;
    }

    /**
     * Contenance de la parcelle (en m²).
     */
    public function getContenance(): ?string
    {
        return $this->contenance;
    }

    /**
     * Contenance de la parcelle (en m²).
     */
    public function setContenance(?string $contenance): self
    {
        $this->initialized['contenance'] = true;
        $this->contenance = $contenance;

        return $this;
    }
}
