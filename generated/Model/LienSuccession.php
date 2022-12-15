<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class LienSuccession extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     *
     * @var string
     */
    protected $siret;
    /**
     * Date à laquelle la succession a eu lieu.
     *
     * @var string
     */
    protected $date;
    /**
     * Vrai si le lien de succession concerne l'établissement siège, faux sinon.
     *
     * @var bool
     */
    protected $transfertSiege;
    /**
     * Vrai s'il y a [continuité économique](https://www.sirene.fr/sirene/public/variable/continuiteEconomique), faux sinon.
     *
     * @var bool
     */
    protected $continuiteEconomique;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function getSiret(): string
    {
        return $this->siret;
    }

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function setSiret(string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    /**
     * Date à laquelle la succession a eu lieu.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Date à laquelle la succession a eu lieu.
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Vrai si le lien de succession concerne l'établissement siège, faux sinon.
     */
    public function getTransfertSiege(): bool
    {
        return $this->transfertSiege;
    }

    /**
     * Vrai si le lien de succession concerne l'établissement siège, faux sinon.
     */
    public function setTransfertSiege(bool $transfertSiege): self
    {
        $this->initialized['transfertSiege'] = true;
        $this->transfertSiege = $transfertSiege;

        return $this;
    }

    /**
     * Vrai s'il y a [continuité économique](https://www.sirene.fr/sirene/public/variable/continuiteEconomique), faux sinon.
     */
    public function getContinuiteEconomique(): bool
    {
        return $this->continuiteEconomique;
    }

    /**
     * Vrai s'il y a [continuité économique](https://www.sirene.fr/sirene/public/variable/continuiteEconomique), faux sinon.
     */
    public function setContinuiteEconomique(bool $continuiteEconomique): self
    {
        $this->initialized['continuiteEconomique'] = true;
        $this->continuiteEconomique = $continuiteEconomique;

        return $this;
    }
}
