<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faiblecontre
 *
 * @ORM\Table(name="faiblecontre", indexes={@ORM\Index(name="FK_faiblecontre_typesId_1", columns={"typesId_1"})})
 * @ORM\Entity
 */
class Faiblecontre
{
    /**
     * @var string
     *
     * @ORM\Column(name="modificateur", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $modificateur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typesId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typesid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typesId_1", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typesid1;



    /**
     * Set modificateur
     *
     * @param string $modificateur
     *
     * @return Faiblecontre
     */
    public function setModificateur($modificateur)
    {
        $this->modificateur = $modificateur;

        return $this;
    }

    /**
     * Get modificateur
     *
     * @return string
     */
    public function getModificateur()
    {
        return $this->modificateur;
    }

    /**
     * Set typesid
     *
     * @param boolean $typesid
     *
     * @return Faiblecontre
     */
    public function setTypesid($typesid)
    {
        $this->typesid = $typesid;

        return $this;
    }

    /**
     * Get typesid
     *
     * @return boolean
     */
    public function getTypesid()
    {
        return $this->typesid;
    }

    /**
     * Set typesid1
     *
     * @param boolean $typesid1
     *
     * @return Faiblecontre
     */
    public function setTypesid1($typesid1)
    {
        $this->typesid1 = $typesid1;

        return $this;
    }

    /**
     * Get typesid1
     *
     * @return boolean
     */
    public function getTypesid1()
    {
        return $this->typesid1;
    }
}
