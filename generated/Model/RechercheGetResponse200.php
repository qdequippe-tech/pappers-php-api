<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class RechercheGetResponse200 extends \ArrayObject
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
     * Liste des entreprises qui correspondent à la recherche.
     *
     * @var RechercheGetResponse200ResultatsItem[]
     */
    protected $resultats;
    /**
     * Nombre d'entreprises qui correspondent à la recherche.
     *
     * @var int
     */
    protected $total;
    /**
     * Page actuelle.
     *
     * @var int
     */
    protected $page;
    /**
     * Présent uniquement en cas d'utilisation du paramètre `curseur`. Contient le curseur courant à envoyer en paramètre `curseur` de la requête suivantes.
     *
     * @var string
     */
    protected $curseurSuivant;

    /**
     * Liste des entreprises qui correspondent à la recherche.
     *
     * @return RechercheGetResponse200ResultatsItem[]
     */
    public function getResultats(): array
    {
        return $this->resultats;
    }

    /**
     * Liste des entreprises qui correspondent à la recherche.
     *
     * @param RechercheGetResponse200ResultatsItem[] $resultats
     */
    public function setResultats(array $resultats): self
    {
        $this->initialized['resultats'] = true;
        $this->resultats = $resultats;

        return $this;
    }

    /**
     * Nombre d'entreprises qui correspondent à la recherche.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Nombre d'entreprises qui correspondent à la recherche.
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * Page actuelle.
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Page actuelle.
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * Présent uniquement en cas d'utilisation du paramètre `curseur`. Contient le curseur courant à envoyer en paramètre `curseur` de la requête suivantes.
     */
    public function getCurseurSuivant(): string
    {
        return $this->curseurSuivant;
    }

    /**
     * Présent uniquement en cas d'utilisation du paramètre `curseur`. Contient le curseur courant à envoyer en paramètre `curseur` de la requête suivantes.
     */
    public function setCurseurSuivant(string $curseurSuivant): self
    {
        $this->initialized['curseurSuivant'] = true;
        $this->curseurSuivant = $curseurSuivant;

        return $this;
    }
}
