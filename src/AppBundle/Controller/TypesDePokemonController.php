<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Typedepokemons;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class TypesDePokemonController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * Cette fonction retourne tous les pokemons
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Retourne les pokemons"
     * )
     *
     * @return array
     */
    public function getTypedepokemonsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $typedepokemons = $em->getRepository('AppBundle:Typedepokemons')->findAll();

        return array('pokemons' => $typedepokemons);
    }

    /**
     * Cette fonction retourne un pokemon
     *
     * @ApiDoc(
     *  description="Retourne un pokemon",
     *  parameters={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="identifiant du pokemon"}
     *  }
     * )
     *
     * @param User $user
     * @return array
     */
    public function getTypedepokemonAction(Typedepokemons $typedepokemons)
    {
        return array('pokemon' => $typedepokemons);
    }
}
