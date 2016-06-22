<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UsersController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * Cette fonction retourne tous les utilisateurs
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Retourne les utilisateurs"
     * )
     *
     * @return array
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        return array('users' => $users);
    }

    /**
     * Cette fonction retourne un utilisateur
     *
     * @ApiDoc(
     *  description="Retourne un utilisateur",
     *  parameters={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="identifiant de l'utilisateur"}
     *  }
     * )
     *
     * @param User $user
     * @return array
     */
    public function getUserAction(User $user)
    {
        return array('user' => $user);
    }
    
}
