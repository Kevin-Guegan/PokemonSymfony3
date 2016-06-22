<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gagne
 *
 * @ORM\Table(name="gagne", indexes={@ORM\Index(name="IDX_E594C27D5738798", columns={"dresseursId"})})
 * @ORM\Entity
 */
class Gagne
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obtention", type="date", nullable=true)
     */
    private $obtention;

    /**
     * @var boolean
     *
     * @ORM\Column(name="badgesId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $badgesid;

    /**
     * @var \AppBundle\Entity\Dresseurs
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Dresseurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dresseursId", referencedColumnName="Id")
     * })
     */
    private $dresseursid;



    /**
     * Set obtention
     *
     * @param \DateTime $obtention
     *
     * @return Gagne
     */
    public function setObtention($obtention)
    {
        $this->obtention = $obtention;

        return $this;
    }

    /**
     * Get obtention
     *
     * @return \DateTime
     */
    public function getObtention()
    {
        return $this->obtention;
    }

    /**
     * Set badgesid
     *
     * @param boolean $badgesid
     *
     * @return Gagne
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
     * Set dresseursid
     *
     * @param \AppBundle\Entity\Dresseurs $dresseursid
     *
     * @return Gagne
     */
    public function setDresseursid(\AppBundle\Entity\Dresseurs $dresseursid)
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
}
