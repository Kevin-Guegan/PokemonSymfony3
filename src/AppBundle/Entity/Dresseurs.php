<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dresseurs
 *
 * @ORM\Table(name="dresseurs", indexes={@ORM\Index(name="FK_dresseurs_id_nonjoueur", columns={"npcId"})})
 * @ORM\Entity
 */
class Dresseurs
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=15, nullable=false)
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
     * @var \AppBundle\Entity\Npc
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Npc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npcId", referencedColumnName="Id")
     * })
     */
    private $npcid;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Dresseurs
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
     * Set npcid
     *
     * @param \AppBundle\Entity\Npc $npcid
     *
     * @return Dresseurs
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
}
