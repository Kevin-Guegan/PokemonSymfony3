<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Npc
 *
 * @ORM\Table(name="npc")
 * @ORM\Entity
 */
class Npc
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=15, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Profession", type="string", length=25, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte", type="string", length=140, nullable=true)
     */
    private $texte;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Npc
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
     * Set profession
     *
     * @param string $profession
     *
     * @return Npc
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Npc
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
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
}
