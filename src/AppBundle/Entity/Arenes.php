<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arenes
 *
 * @ORM\Table(name="arenes", indexes={@ORM\Index(name="FK_arenes_id_positions", columns={"positionsId"})})
 * @ORM\Entity
 */
class Arenes
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25, nullable=false)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="badgesId", type="boolean", nullable=false)
     */
    private $badgesid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Positions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Positions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="positionsId", referencedColumnName="Id")
     * })
     */
    private $positionsid;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Arenes
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
     * Set badgesid
     *
     * @param boolean $badgesid
     *
     * @return Arenes
     */
    public function setBadgesid($badgesid)
    {
        $this->badgesid = $badgesid;

        return $this;
    }

    /**
     * Get badgesid
     *
     * @return boolean
     */
    public function getBadgesid()
    {
        return $this->badgesid;
    }

    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set positionsid
     *
     * @param \AppBundle\Entity\Positions $positionsid
     *
     * @return Arenes
     */
    public function setPositionsid(\AppBundle\Entity\Positions $positionsid = null)
    {
        $this->positionsid = $positionsid;

        return $this;
    }

    /**
     * Get positionsid
     *
     * @return \AppBundle\Entity\Positions
     */
    public function getPositionsid()
    {
        return $this->positionsid;
    }
}
