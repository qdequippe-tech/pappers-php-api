<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheparcellesDetenues extends \ArrayObject
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
     * Liste des locaux et parcelles détenus (maximum 200 résultats).
     *
     * @var list<EntrepriseFicheparcellesDetenuesResultatsItem>|null
     */
    protected $resultats;
    /**
     * Nombre total de locaux et parcelles détenus par la personne morale.
     *
     * @var int|null
     */
    protected $total;
    /**
     * Vrai si le nombre total de locaux et parcelles détenus est supérieur à 200, faux sinon.
     *
     * @var bool|null
     */
    protected $incomplet;

    /**
     * Liste des locaux et parcelles détenus (maximum 200 résultats).
     *
     * @return list<EntrepriseFicheparcellesDetenuesResultatsItem>|null
     */
    public function getResultats(): ?array
    {
        return $this->resultats;
    }

    /**
     * Liste des locaux et parcelles détenus (maximum 200 résultats).
     *
     * @param list<EntrepriseFicheparcellesDetenuesResultatsItem>|null $resultats
     */
    public function setResultats(?array $resultats): self
    {
        $this->initialized['resultats'] = true;
        $this->resultats = $resultats;

        return $this;
    }

    /**
     * Nombre total de locaux et parcelles détenus par la personne morale.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Nombre total de locaux et parcelles détenus par la personne morale.
     */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * Vrai si le nombre total de locaux et parcelles détenus est supérieur à 200, faux sinon.
     */
    public function getIncomplet(): ?bool
    {
        return $this->incomplet;
    }

    /**
     * Vrai si le nombre total de locaux et parcelles détenus est supérieur à 200, faux sinon.
     */
    public function setIncomplet(?bool $incomplet): self
    {
        $this->initialized['incomplet'] = true;
        $this->incomplet = $incomplet;

        return $this;
    }
}
