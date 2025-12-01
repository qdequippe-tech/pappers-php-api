<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheinformationsBoursieres extends \ArrayObject
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
     * Vrai si l'entreprise fait partie de l'indice CAC 40, faux sinon.
     *
     * @var bool|null
     */
    protected $cac40;
    /**
     * Liste des codes ISIN de l'entreprise.
     *
     * @var list<string>|null
     */
    protected $isin;
    /**
     * Liste des symboles boursiers de l'entreprise.
     *
     * @var list<string>|null
     */
    protected $symboles;
    /**
     * Liste des documents boursiers de l'entreprise. Uniquement présent si le champ supplémentaire `informations_boursieres:documents` est demandé.
     *
     * @var list<EntrepriseFicheinformationsBoursieresDocumentsItem>|null
     */
    protected $documents;

    /**
     * Vrai si l'entreprise fait partie de l'indice CAC 40, faux sinon.
     */
    public function getCac40(): ?bool
    {
        return $this->cac40;
    }

    /**
     * Vrai si l'entreprise fait partie de l'indice CAC 40, faux sinon.
     */
    public function setCac40(?bool $cac40): self
    {
        $this->initialized['cac40'] = true;
        $this->cac40 = $cac40;

        return $this;
    }

    /**
     * Liste des codes ISIN de l'entreprise.
     *
     * @return list<string>|null
     */
    public function getIsin(): ?array
    {
        return $this->isin;
    }

    /**
     * Liste des codes ISIN de l'entreprise.
     *
     * @param list<string>|null $isin
     */
    public function setIsin(?array $isin): self
    {
        $this->initialized['isin'] = true;
        $this->isin = $isin;

        return $this;
    }

    /**
     * Liste des symboles boursiers de l'entreprise.
     *
     * @return list<string>|null
     */
    public function getSymboles(): ?array
    {
        return $this->symboles;
    }

    /**
     * Liste des symboles boursiers de l'entreprise.
     *
     * @param list<string>|null $symboles
     */
    public function setSymboles(?array $symboles): self
    {
        $this->initialized['symboles'] = true;
        $this->symboles = $symboles;

        return $this;
    }

    /**
     * Liste des documents boursiers de l'entreprise. Uniquement présent si le champ supplémentaire `informations_boursieres:documents` est demandé.
     *
     * @return list<EntrepriseFicheinformationsBoursieresDocumentsItem>|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Liste des documents boursiers de l'entreprise. Uniquement présent si le champ supplémentaire `informations_boursieres:documents` est demandé.
     *
     * @param list<EntrepriseFicheinformationsBoursieresDocumentsItem>|null $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;

        return $this;
    }
}
