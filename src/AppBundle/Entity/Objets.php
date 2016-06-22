<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objets
 *
 * @ORM\Table(name="objets", indexes={@ORM\Index(name="FK_objets_id_nonjoueur", columns={"npcId"}), @ORM\Index(name="FK_objets_id_typeObjet", columns={"typeObjetId"})})
 * @ORM\Entity
 */
class Objets
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quantite", type="boolean", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Npc
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Npc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npcId", referencedColumnName="Id")
     * })
     */
    private $npcid;

    /**
     * @var \AppBundle\Entity\Typeobjet
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Typeobjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeObjetId", referencedColumnName="Id")
     * })
     */
    private $typeobjetid;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Objets
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
     * Set quantite
     *
     * @param boolean $quantite
     *
     * @return Objets
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return boolean
     */
    public function getQuantite()
    {
        return $this->quantite;
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
     * Set npcid
     *
     * @param \AppBundle\Entity\Npc $npcid
     *
     * @return Objets
     */
    public function setNpcid(\AppBundle\Entity\Npc $npcid = null)
    {
        $this->npcid = $npcid;

        return $this;
    }

    /**
     * Get npcid
     *
     * @return \AppBundle\Entity\Npc
     */
    public function getNpcid()
    {
        return $this->npcid;
    }

    /**
     * Set typeobjetid
     *
     * @param \AppBundle\Entity\Typeobjet $typeobjetid
     *
     * @return Objets
     */
    public function setTypeobjetid(\AppBundle\Entity\Typeobjet $typeobjetid = null)
    {
        $this->typeobjetid = $typeobjetid;

        return $this;
    }

    /**
     * Get typeobjetid
     *
     * @return \AppBundle\Entity\Typeobjet
     */
    public function getTypeobjetid()
    {
        return $this->typeobjetid;
    }
}
