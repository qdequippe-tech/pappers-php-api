<?php

namespace Qdequippe\Pappers\Api\Model;

class RechercheBeneficiairesGetResponse200 extends \ArrayObject
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
     * Liste des bénéficiaires effectifs qui correspondent à la recherche.
     *
     * @var list<RechercheBeneficiairesGetResponse200ResultatsItem>|null
     */
    protected $resultats;
    /**
     * Nombre de bénéficiaires effectifs qui correspondent à la recherche.
     *
     * @var int|null
     */
    protected $total;
    /**
     * Page actuelle.
     *
     * @var int|null
     */
    protected $page;

    /**
     * Liste des bénéficiaires effectifs qui correspondent à la recherche.
     *
     * @return list<RechercheBeneficiairesGetResponse200ResultatsItem>|null
     */
    public function getResultats(): ?array
    {
        return $this->resultats;
    }

    /**
     * Liste des bénéficiaires effectifs qui correspondent à la recherche.
     *
     * @param list<RechercheBeneficiairesGetResponse200ResultatsItem>|null $resultats
     */
    public function setResultats(?array $resultats): self
    {
        $this->initialized['resultats'] = true;
        $this->resultats = $resultats;

        return $this;
    }

    /**
     * Nombre de bénéficiaires effectifs qui correspondent à la recherche.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Nombre de bénéficiaires effectifs qui correspondent à la recherche.
     */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * Page actuelle.
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * Page actuelle.
     */
    public function setPage(?int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }
}
