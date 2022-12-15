<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheproceduresCollectivesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type de la procédure collective.
     *
     * @var string
     */
    protected $type;
    /**
     * Date de début de la procédure collective, au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $dateDebut;
    /**
     * Date de fin de la procédure collective, au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $dateFin;
    /**
     * Liste des publications relatives à la procédure collective.
     *
     * @var Bodacc[]
     */
    protected $publicationsBodacc;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type de la procédure collective.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type de la procédure collective.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Date de début de la procédure collective, au format AAAA-MM-JJ.
     */
    public function getDateDebut(): string
    {
        return $this->dateDebut;
    }

    /**
     * Date de début de la procédure collective, au format AAAA-MM-JJ.
     */
    public function setDateDebut(string $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Date de fin de la procédure collective, au format AAAA-MM-JJ.
     */
    public function getDateFin(): string
    {
        return $this->dateFin;
    }

    /**
     * Date de fin de la procédure collective, au format AAAA-MM-JJ.
     */
    public function setDateFin(string $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Liste des publications relatives à la procédure collective.
     *
     * @return Bodacc[]
     */
    public function getPublicationsBodacc(): array
    {
        return $this->publicationsBodacc;
    }

    /**
     * Liste des publications relatives à la procédure collective.
     *
     * @param Bodacc[] $publicationsBodacc
     */
    public function setPublicationsBodacc(array $publicationsBodacc): self
    {
        $this->initialized['publicationsBodacc'] = true;
        $this->publicationsBodacc = $publicationsBodacc;

        return $this;
    }
}
