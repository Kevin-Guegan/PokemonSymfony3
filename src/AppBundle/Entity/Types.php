<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Types
 *
 * @ORM\Table(name="types")
 * @ORM\Entity
 */
class Types
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=7, nullable=false)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Typedepokemons", mappedBy="typesid")
     */
    private $typedepokemonsid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typedepokemonsid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Types
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
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add typedepokemonsid
     *
     * @param \AppBundle\Entity\Typedepokemons $typedepokemonsid
     *
     * @return Types
     */
    public function addTypedepokemonsid(\AppBundle\Entity\Typedepokemons $typedepokemonsid)
    {
        $this->typedepokemonsid[] = $typedepokemonsid;

        return $this;
    }

    /**
     * Remove typedepokemonsid
     *
     * @param \AppBundle\Entity\Typedepokemons $typedepokemonsid
     */
    public function removeTypedepokemonsid(\AppBundle\Entity\Typedepokemons $typedepokemonsid)
    {
        $this->typedepokemonsid->removeElement($typedepokemonsid);
    }

    /**
     * Get typedepokemonsid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypedepokemonsid()
    {
        return $this->typedepokemonsid;
    }
}
