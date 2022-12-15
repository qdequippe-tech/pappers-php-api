<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EtablissementFicheDomiciliation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Nom de l'entreprise de domiciliation.
     *
     * @var string
     */
    protected $nom;
    /**
     * Siren de l'entreprise de domiciliation.
     *
     * @var string
     */
    protected $siren;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Nom de l'entreprise de domiciliation.
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Nom de l'entreprise de domiciliation.
     */
    public function setNom(string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Siren de l'entreprise de domiciliation.
     */
    public function getSiren(): string
    {
        return $this->siren;
    }

    /**
     * Siren de l'entreprise de domiciliation.
     */
    public function setSiren(string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }
}
