<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attaques
 *
 * @ORM\Table(name="attaques", indexes={@ORM\Index(name="FK_attaques_typesId", columns={"TypeId"})})
 * @ORM\Entity
 */
class Attaques
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=12, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="Puissance", type="smallint", nullable=true)
     */
    private $puissance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Precis", type="boolean", nullable=true)
     */
    private $precis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Types
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypeId", referencedColumnName="Id")
     * })
     */
    private $typeid;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Attaques
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set puissance
     *
     * @param integer $puissance
     *
     * @return Attaques
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return integer
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set precis
     *
     * @param boolean $precis
     *
     * @return Attaques
     */
    public function setPrecis($precis)
    {
        $this->precis = $precis;

        return $this;
    }

    /**
     * Get precis
     *
     * @return boolean
     */
    public function getPrecis()
    {
        return $this->precis;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeid
     *
     * @param \AppBundle\Entity\Types $typeid
     *
     * @return Attaques
     */
    public function setTypeid(\AppBundle\Entity\Types $typeid = null)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return \AppBundle\Entity\Types
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
