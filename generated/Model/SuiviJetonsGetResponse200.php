<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class SuiviJetonsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Le nombre de jetons mensuels initiaux de votre abonnement.
     *
     * @var float
     */
    protected $jetonsAbonnement;
    /**
     * Le nombre de jetons mensuels de votre abonnement que vous avez utilisés.
     *
     * @var float
     */
    protected $jetonsAbonnementUtilises;
    /**
     * Le nombre de jetons pay as you go qu'il vous reste.
     *
     * @var float
     */
    protected $jetonsPayAsYouGoRestants;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Le nombre de jetons mensuels initiaux de votre abonnement.
     */
    public function getJetonsAbonnement(): float
    {
        return $this->jetonsAbonnement;
    }

    /**
     * Le nombre de jetons mensuels initiaux de votre abonnement.
     */
    public function setJetonsAbonnement(float $jetonsAbonnement): self
    {
        $this->initialized['jetonsAbonnement'] = true;
        $this->jetonsAbonnement = $jetonsAbonnement;

        return $this;
    }

    /**
     * Le nombre de jetons mensuels de votre abonnement que vous avez utilisés.
     */
    public function getJetonsAbonnementUtilises(): float
    {
        return $this->jetonsAbonnementUtilises;
    }

    /**
     * Le nombre de jetons mensuels de votre abonnement que vous avez utilisés.
     */
    public function setJetonsAbonnementUtilises(float $jetonsAbonnementUtilises): self
    {
        $this->initialized['jetonsAbonnementUtilises'] = true;
        $this->jetonsAbonnementUtilises = $jetonsAbonnementUtilises;

        return $this;
    }

    /**
     * Le nombre de jetons pay as you go qu'il vous reste.
     */
    public function getJetonsPayAsYouGoRestants(): float
    {
        return $this->jetonsPayAsYouGoRestants;
    }

    /**
     * Le nombre de jetons pay as you go qu'il vous reste.
     */
    public function setJetonsPayAsYouGoRestants(float $jetonsPayAsYouGoRestants): self
    {
        $this->initialized['jetonsPayAsYouGoRestants'] = true;
        $this->jetonsPayAsYouGoRestants = $jetonsPayAsYouGoRestants;

        return $this;
    }
}
