<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evolueen
 *
 * @ORM\Table(name="evolueen")
 * @ORM\Entity
 */
class Evolueen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="typedepokemonsId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typedepokemonsid;

    /**
     * @var integer
     *
     * @ORM\Column(name="typedepokemonsId_2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typedepokemonsid2;



    /**
     * Set typedepokemonsid
     *
     * @param integer $typedepokemonsid
     *
     * @return Evolueen
     */
    public function setTypedepokemonsid($typedepokemonsid)
    {
        $this->typedepokemonsid = $typedepokemonsid;

        return $this;
    }

    /**
     * Get typedepokemonsid
     *
     * @return integer
     */
    public function getTypedepokemonsid()
    {
        return $this->typedepokemonsid;
    }

    /**
     * Set typedepokemonsid2
     *
     * @param integer $typedepokemonsid2
     *
     * @return Evolueen
     */
    public function setTypedepokemonsid2($typedepokemonsid2)
    {
        $this->typedepokemonsid2 = $typedepokemonsid2;

        return $this;
    }

    /**
     * Get typedepokemonsid2
     *
     * @return integer
     */
    public function getTypedepokemonsid2()
    {
        return $this->typedepokemonsid2;
    }
}
