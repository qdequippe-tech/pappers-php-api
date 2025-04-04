<?php

namespace Qdequippe\Pappers\Api\Model;

class SuiviJetonsGetResponse200 extends \ArrayObject
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
     * Le nombre de crédits mensuels initiaux de votre abonnement.
     *
     * @var float|null
     */
    protected $jetonsAbonnement;
    /**
     * Le nombre de crédits mensuels de votre abonnement que vous avez utilisés.
     *
     * @var float|null
     */
    protected $jetonsAbonnementUtilises;
    /**
     * Le nombre de crédits pay as you go qu'il vous reste.
     *
     * @var float|null
     */
    protected $jetonsPayAsYouGoRestants;

    /**
     * Le nombre de crédits mensuels initiaux de votre abonnement.
     */
    public function getJetonsAbonnement(): ?float
    {
        return $this->jetonsAbonnement;
    }

    /**
     * Le nombre de crédits mensuels initiaux de votre abonnement.
     */
    public function setJetonsAbonnement(?float $jetonsAbonnement): self
    {
        $this->initialized['jetonsAbonnement'] = true;
        $this->jetonsAbonnement = $jetonsAbonnement;

        return $this;
    }

    /**
     * Le nombre de crédits mensuels de votre abonnement que vous avez utilisés.
     */
    public function getJetonsAbonnementUtilises(): ?float
    {
        return $this->jetonsAbonnementUtilises;
    }

    /**
     * Le nombre de crédits mensuels de votre abonnement que vous avez utilisés.
     */
    public function setJetonsAbonnementUtilises(?float $jetonsAbonnementUtilises): self
    {
        $this->initialized['jetonsAbonnementUtilises'] = true;
        $this->jetonsAbonnementUtilises = $jetonsAbonnementUtilises;

        return $this;
    }

    /**
     * Le nombre de crédits pay as you go qu'il vous reste.
     */
    public function getJetonsPayAsYouGoRestants(): ?float
    {
        return $this->jetonsPayAsYouGoRestants;
    }

    /**
     * Le nombre de crédits pay as you go qu'il vous reste.
     */
    public function setJetonsPayAsYouGoRestants(?float $jetonsPayAsYouGoRestants): self
    {
        $this->initialized['jetonsPayAsYouGoRestants'] = true;
        $this->jetonsPayAsYouGoRestants = $jetonsPayAsYouGoRestants;

        return $this;
    }
}
