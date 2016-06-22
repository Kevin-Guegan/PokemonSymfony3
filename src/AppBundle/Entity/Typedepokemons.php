<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typedepokemons
 *
 * @ORM\Table(name="typedepokemons")
 * @ORM\Entity
 */
class Typedepokemons
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=10, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="attaque", type="smallint", nullable=true)
     */
    private $attaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="attaque_spe", type="smallint", nullable=true)
     */
    private $attaqueSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="defence", type="smallint", nullable=true)
     */
    private $defence;

    /**
     * @var integer
     *
     * @ORM\Column(name="defence_spe", type="smallint", nullable=true)
     */
    private $defenceSpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="vitesse", type="smallint", nullable=true)
     */
    private $vitesse;

    /**
     * @var integer
     *
     * @ORM\Column(name="pv", type="smallint", nullable=true)
     */
    private $pv;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pokedex", type="smallint", nullable=false)
     */
    private $idPokedex;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Types", inversedBy="typedepokemonsid")
     * @ORM\JoinTable(name="possedelestypes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="typedepokemonsId", referencedColumnName="Id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="typesId", referencedColumnName="Id")
     *   }
     * )
     */
    private $typesid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Zones", mappedBy="typedepokemonsid")
     */
    private $zonesid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typesid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->zonesid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Typedepokemons
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
     * Set attaque
     *
     * @param integer $attaque
     *
     * @return Typedepokemons
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return integer
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set attaqueSpe
     *
     * @param integer $attaqueSpe
     *
     * @return Typedepokemons
     */
    public function setAttaqueSpe($attaqueSpe)
    {
        $this->attaqueSpe = $attaqueSpe;

        return $this;
    }

    /**
     * Get attaqueSpe
     *
     * @return integer
     */
    public function getAttaqueSpe()
    {
        return $this->attaqueSpe;
    }

    /**
     * Set defence
     *
     * @param integer $defence
     *
     * @return Typedepokemons
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Get defence
     *
     * @return integer
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Set defenceSpe
     *
     * @param integer $defenceSpe
     *
     * @return Typedepokemons
     */
    public function setDefenceSpe($defenceSpe)
    {
        $this->defenceSpe = $defenceSpe;

        return $this;
    }

    /**
     * Get defenceSpe
     *
     * @return integer
     */
    public function getDefenceSpe()
    {
        return $this->defenceSpe;
    }

    /**
     * Set vitesse
     *
     * @param integer $vitesse
     *
     * @return Typedepokemons
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return integer
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set pv
     *
     * @param integer $pv
     *
     * @return Typedepokemons
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return integer
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set idPokedex
     *
     * @param integer $idPokedex
     *
     * @return Typedepokemons
     */
    public function setIdPokedex($idPokedex)
    {
        $this->idPokedex = $idPokedex;

        return $this;
    }

    /**
     * Get idPokedex
     *
     * @return integer
     */
    public function getIdPokedex()
    {
        return $this->idPokedex;
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
     * Add typesid
     *
     * @param \AppBundle\Entity\Types $typesid
     *
     * @return Typedepokemons
     */
    public function addTypesid(\AppBundle\Entity\Types $typesid)
    {
        $this->typesid[] = $typesid;

        return $this;
    }

    /**
     * Remove typesid
     *
     * @param \AppBundle\Entity\Types $typesid
     */
    public function removeTypesid(\AppBundle\Entity\Types $typesid)
    {
        $this->typesid->removeElement($typesid);
    }

    /**
     * Get typesid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypesid()
    {
        return $this->typesid;
    }

    /**
     * Add zonesid
     *
     * @param \AppBundle\Entity\Zones $zonesid
     *
     * @return Typedepokemons
     */
    public function addZonesid(\AppBundle\Entity\Zones $zonesid)
    {
        $this->zonesid[] = $zonesid;

        return $this;
    }

    /**
     * Remove zonesid
     *
     * @param \AppBundle\Entity\Zones $zonesid
     */
    public function removeZonesid(\AppBundle\Entity\Zones $zonesid)
    {
        $this->zonesid->removeElement($zonesid);
    }

    /**
     * Get zonesid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZonesid()
    {
        return $this->zonesid;
    }
}
