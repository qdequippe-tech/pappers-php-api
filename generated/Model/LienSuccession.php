<?php

namespace Qdequippe\Pappers\Api\Model;

class LienSuccession extends \ArrayObject
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
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     *
     * @var string|null
     */
    protected $siret;
    /**
     * Date à laquelle la succession a eu lieu.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Vrai si le lien de succession concerne l'établissement siège, faux sinon.
     *
     * @var bool|null
     */
    protected $transfertSiege;
    /**
     * Vrai s'il y a [continuité économique](https://www.sirene.fr/sirene/public/variable/continuiteEconomique), faux sinon.
     *
     * @var bool|null
     */
    protected $continuiteEconomique;

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    /**
     * Date à laquelle la succession a eu lieu.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date à laquelle la succession a eu lieu.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Vrai si le lien de succession concerne l'établissement siège, faux sinon.
     */
    public function getTransfertSiege(): ?bool
    {
        return $this->transfertSiege;
    }

    /**
     * Vrai si le lien de succession concerne l'établissement siège, faux sinon.
     */
    public function setTransfertSiege(?bool $transfertSiege): self
    {
        $this->initialized['transfertSiege'] = true;
        $this->transfertSiege = $transfertSiege;

        return $this;
    }

    /**
     * Vrai s'il y a [continuité économique](https://www.sirene.fr/sirene/public/variable/continuiteEconomique), faux sinon.
     */
    public function getContinuiteEconomique(): ?bool
    {
        return $this->continuiteEconomique;
    }

    /**
     * Vrai s'il y a [continuité économique](https://www.sirene.fr/sirene/public/variable/continuiteEconomique), faux sinon.
     */
    public function setContinuiteEconomique(?bool $continuiteEconomique): self
    {
        $this->initialized['continuiteEconomique'] = true;
        $this->continuiteEconomique = $continuiteEconomique;

        return $this;
    }
}
