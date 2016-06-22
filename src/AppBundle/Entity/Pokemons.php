<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemons
 *
 * @ORM\Table(name="pokemons", indexes={@ORM\Index(name="FK_pokemons_id_dresseur", columns={"dresseursId"}), @ORM\Index(name="FK_pokemons_id_type_pokemons", columns={"typedepokemonsId"})})
 * @ORM\Entity
 */
class Pokemons
{
    /**
     * @var string
     *
     * @ORM\Column(name="Surnom", type="string", length=30, nullable=false)
     */
    private $surnom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Niveau", type="boolean", nullable=true)
     */
    private $niveau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Capture", type="date", nullable=false)
     */
    private $capture;

    /**
     * @var integer
     *
     * @ORM\Column(name="attaquesId_1", type="smallint", nullable=true)
     */
    private $attaquesid1;

    /**
     * @var integer
     *
     * @ORM\Column(name="attaquesId_2", type="smallint", nullable=true)
     */
    private $attaquesid2;

    /**
     * @var integer
     *
     * @ORM\Column(name="attaquesId_3", type="smallint", nullable=true)
     */
    private $attaquesid3;

    /**
     * @var integer
     *
     * @ORM\Column(name="attaquesId_4", type="smallint", nullable=true)
     */
    private $attaquesid4;

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
     * @var \AppBundle\Entity\Typedepokemons
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Typedepokemons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typedepokemonsId", referencedColumnName="Id")
     * })
     */
    private $typedepokemonsid;



    /**
     * Set surnom
     *
     * @param string $surnom
     *
     * @return Pokemons
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

    /**
     * Get surnom
     *
     * @return string
     */
    public function getSurnom()
    {
        return $this->surnom;
    }

    /**
     * Set niveau
     *
     * @param boolean $niveau
     *
     * @return Pokemons
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return boolean
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set capture
     *
     * @param \DateTime $capture
     *
     * @return Pokemons
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get capture
     *
     * @return \DateTime
     */
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * Set attaquesid1
     *
     * @param integer $attaquesid1
     *
     * @return Pokemons
     */
    public function setAttaquesid1($attaquesid1)
    {
        $this->attaquesid1 = $attaquesid1;

        return $this;
    }

    /**
     * Get attaquesid1
     *
     * @return integer
     */
    public function getAttaquesid1()
    {
        return $this->attaquesid1;
    }

    /**
     * Set attaquesid2
     *
     * @param integer $attaquesid2
     *
     * @return Pokemons
     */
    public function setAttaquesid2($attaquesid2)
    {
        $this->attaquesid2 = $attaquesid2;

        return $this;
    }

    /**
     * Get attaquesid2
     *
     * @return integer
     */
    public function getAttaquesid2()
    {
        return $this->attaquesid2;
    }

    /**
     * Set attaquesid3
     *
     * @param integer $attaquesid3
     *
     * @return Pokemons
     */
    public function setAttaquesid3($attaquesid3)
    {
        $this->attaquesid3 = $attaquesid3;

        return $this;
    }

    /**
     * Get attaquesid3
     *
     * @return integer
     */
    public function getAttaquesid3()
    {
        return $this->attaquesid3;
    }

    /**
     * Set attaquesid4
     *
     * @param integer $attaquesid4
     *
     * @return Pokemons
     */
    public function setAttaquesid4($attaquesid4)
    {
        $this->attaquesid4 = $attaquesid4;

        return $this;
    }

    /**
     * Get attaquesid4
     *
     * @return integer
     */
    public function getAttaquesid4()
    {
        return $this->attaquesid4;
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
     * @return Pokemons
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
     * Set typedepokemonsid
     *
     * @param \AppBundle\Entity\Typedepokemons $typedepokemonsid
     *
     * @return Pokemons
     */
    public function setTypedepokemonsid(\AppBundle\Entity\Typedepokemons $typedepokemonsid = null)
    {
        $this->typedepokemonsid = $typedepokemonsid;

        return $this;
    }

    /**
     * Get typedepokemonsid
     *
     * @return \AppBundle\Entity\Typedepokemons
     */
    public function getTypedepokemonsid()
    {
        return $this->typedepokemonsid;
    }
}
