<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class RechercheDocumentsGetResponse200ResultatsItem extends \ArrayObject
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
     * Type de document.
     *
     * @var string
     */
    protected $type;
    /**
     * Date de dépôt du document.
     *
     * @var \DateTime
     */
    protected $dateDepot;
    /**
     * Mentions de la recherche dans le document.
     *
     * @var string[]
     */
    protected $mentions;
    /**
     * @var EntrepriseRecherche
     */
    protected $entreprise;

    /**
     * Type de document.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type de document.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Date de dépôt du document.
     */
    public function getDateDepot(): \DateTime
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt du document.
     */
    public function setDateDepot(\DateTime $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Mentions de la recherche dans le document.
     *
     * @return string[]
     */
    public function getMentions(): array
    {
        return $this->mentions;
    }

    /**
     * Mentions de la recherche dans le document.
     *
     * @param string[] $mentions
     */
    public function setMentions(array $mentions): self
    {
        $this->initialized['mentions'] = true;
        $this->mentions = $mentions;

        return $this;
    }

    public function getEntreprise(): EntrepriseRecherche
    {
        return $this->entreprise;
    }

    public function setEntreprise(EntrepriseRecherche $entreprise): self
    {
        $this->initialized['entreprise'] = true;
        $this->entreprise = $entreprise;

        return $this;
    }
}
