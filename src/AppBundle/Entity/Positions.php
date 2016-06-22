<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Positions
 *
 * @ORM\Table(name="positions", indexes={@ORM\Index(name="FK_positions_id_zones", columns={"zonesId"}), @ORM\Index(name="FK_positions_id_arene", columns={"arenesId"})})
 * @ORM\Entity
 */
class Positions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Arenes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Arenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arenesId", referencedColumnName="Id")
     * })
     */
    private $arenesid;

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
     * Set x
     *
     * @param integer $x
     *
     * @return Positions
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return Positions
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return integer
     */
    public function getY()
    {
        return $this->y;
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
     * Set arenesid
     *
     * @param \AppBundle\Entity\Arenes $arenesid
     *
     * @return Positions
     */
    public function setArenesid(\AppBundle\Entity\Arenes $arenesid = null)
    {
        $this->arenesid = $arenesid;

        return $this;
    }

    /**
     * Get arenesid
     *
     * @return \AppBundle\Entity\Arenes
     */
    public function getArenesid()
    {
        return $this->arenesid;
    }

    /**
     * Set zonesid
     *
     * @param \AppBundle\Entity\Zones $zonesid
     *
     * @return Positions
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
