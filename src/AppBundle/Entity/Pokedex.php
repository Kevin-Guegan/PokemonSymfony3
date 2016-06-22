<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokedex
 *
 * @ORM\Table(name="pokedex")
 * @ORM\Entity
 */
class Pokedex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



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
