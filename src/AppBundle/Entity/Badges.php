<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badges
 *
 * @ORM\Table(name="badges", indexes={@ORM\Index(name="FK_badges_id_dresseur", columns={"dresseursId"}), @ORM\Index(name="FK_badges_id_zones", columns={"zonesId"})})
 * @ORM\Entity
 */
class Badges
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=7, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Dresseurs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dresseurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dresseursId", referencedColumnName="Id")
     * })
     */
    private $dresseursid;

    /**
     * @var \AppBundle\Entity\Zones
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Zones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zonesId", referencedColumnName="Id")
     * })
     */
    private $zonesid;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Badges
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dresseursid
     *
     * @param \AppBundle\Entity\Dresseurs $dresseursid
     *
     * @return Badges
     */
    public function setDresseursid(\AppBundle\Entity\Dresseurs $dresseursid = null)
    {
        $this->dresseursid = $dresseursid;

        return $this;
    }

    /**
     * Get dresseursid
     *
     * @return \AppBundle\Entity\Dresseurs
     */
    public function getDresseursid()
    {
        return $this->dresseursid;
    }

    /**
     * Set zonesid
     *
     * @param \AppBundle\Entity\Zones $zonesid
     *
     * @return Badges
     */
    public function setZonesid(\AppBundle\Entity\Zones $zonesid = null)
    {
        $this->zonesid = $zonesid;

        return $this;
    }

    /**
     * Get zonesid
     *
     * @return \AppBundle\Entity\Zones
     */
    public function getZonesid()
    {
        return $this->zonesid;
    }
}
