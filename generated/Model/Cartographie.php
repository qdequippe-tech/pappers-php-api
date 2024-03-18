<?php

namespace Qdequippe\Pappers\Api\Model;

class Cartographie extends \ArrayObject
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
     * Liste des noeuds entreprises.
     *
     * @var list<CartographieEntreprisesItem>|null
     */
    protected $entreprises;
    /**
     * Liste des noeuds personnes (dirigeants ou bénéficiaires effectifs).
     *
     * @var list<CartographiePersonnesItem>|null
     */
    protected $personnes;
    /**
     * Liste des arêtes liant les noeuds entreprises avec des noeuds personnes.
     *
     * @var list<list<mixed>>|null
     */
    protected $liensEntreprisesPersonnes;
    /**
     * Liste des arêtes liant les noeuds entreprises avec des d'autres noeuds entreprises.
     *
     * @var list<list<string>>|null
     */
    protected $liensEntreprisesEntreprises;
    /**
     * Description des paramètres ayant été automatiquement modifiés.
     *
     * @var array<string, mixed>|null
     */
    protected $modificationsEffectuees;

    /**
     * Liste des noeuds entreprises.
     *
     * @return list<CartographieEntreprisesItem>|null
     */
    public function getEntreprises(): ?array
    {
        return $this->entreprises;
    }

    /**
     * Liste des noeuds entreprises.
     *
     * @param list<CartographieEntreprisesItem>|null $entreprises
     */
    public function setEntreprises(?array $entreprises): self
    {
        $this->initialized['entreprises'] = true;
        $this->entreprises = $entreprises;

        return $this;
    }

    /**
     * Liste des noeuds personnes (dirigeants ou bénéficiaires effectifs).
     *
     * @return list<CartographiePersonnesItem>|null
     */
    public function getPersonnes(): ?array
    {
        return $this->personnes;
    }

    /**
     * Liste des noeuds personnes (dirigeants ou bénéficiaires effectifs).
     *
     * @param list<CartographiePersonnesItem>|null $personnes
     */
    public function setPersonnes(?array $personnes): self
    {
        $this->initialized['personnes'] = true;
        $this->personnes = $personnes;

        return $this;
    }

    /**
     * Liste des arêtes liant les noeuds entreprises avec des noeuds personnes.
     *
     * @return list<list<mixed>>|null
     */
    public function getLiensEntreprisesPersonnes(): ?array
    {
        return $this->liensEntreprisesPersonnes;
    }

    /**
     * Liste des arêtes liant les noeuds entreprises avec des noeuds personnes.
     *
     * @param list<list<mixed>>|null $liensEntreprisesPersonnes
     */
    public function setLiensEntreprisesPersonnes(?array $liensEntreprisesPersonnes): self
    {
        $this->initialized['liensEntreprisesPersonnes'] = true;
        $this->liensEntreprisesPersonnes = $liensEntreprisesPersonnes;

        return $this;
    }

    /**
     * Liste des arêtes liant les noeuds entreprises avec des d'autres noeuds entreprises.
     *
     * @return list<list<string>>|null
     */
    public function getLiensEntreprisesEntreprises(): ?array
    {
        return $this->liensEntreprisesEntreprises;
    }

    /**
     * Liste des arêtes liant les noeuds entreprises avec des d'autres noeuds entreprises.
     *
     * @param list<list<string>>|null $liensEntreprisesEntreprises
     */
    public function setLiensEntreprisesEntreprises(?array $liensEntreprisesEntreprises): self
    {
        $this->initialized['liensEntreprisesEntreprises'] = true;
        $this->liensEntreprisesEntreprises = $liensEntreprisesEntreprises;

        return $this;
    }

    /**
     * Description des paramètres ayant été automatiquement modifiés.
     *
     * @return array<string, mixed>|null
     */
    public function getModificationsEffectuees(): ?iterable
    {
        return $this->modificationsEffectuees;
    }

    /**
     * Description des paramètres ayant été automatiquement modifiés.
     *
     * @param array<string, mixed>|null $modificationsEffectuees
     */
    public function setModificationsEffectuees(?iterable $modificationsEffectuees): self
    {
        $this->initialized['modificationsEffectuees'] = true;
        $this->modificationsEffectuees = $modificationsEffectuees;

        return $this;
    }
}
