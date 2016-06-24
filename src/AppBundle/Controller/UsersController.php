<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\PokemonUsers;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends FOSRestController
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
        $users = $em->getRepository('AppBundle:PokemonUsers')->findAll();

        return $users;
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
     * @param PokemonUsers $user
     * @return array
     */
    public function getUserAction(PokemonUsers $user)
    {
        return $user;
    }


    /**
     * @ApiDoc(
     *   resource=true,
     *   section="Ajoute un utilisateur",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="username",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="Pseudo de l'utilisateur",
     *      },
     *     {
     *          "name"="login",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="login de l'utilisateur",
     *      },
     *      {
     *          "name"="password",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="password de l'utilisateur",
     *      },
     *      {
     *          "name"="email",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="email de l'utilisateur",
     *      },
     *   }
     * )
     *
     * @param Request $request
     * @return View
     */
    public function postUserAction(Request $request): View
    {
        $requestData = $request->request->get('users');

        $user = new PokemonUsers();
        $user->setUsername($request->request->get('username'));
        $user->setEmail($request->request->get('email'));
        $user->setPassword($request->request->get('password'));
        $user->setIsactive(true);

        return $this->validateAndStoreUser($user);
    }

    /**
     * @param PokemonUsers $user
     * @return View
     */
    private function validateAndStoreUser(PokemonUsers $user): View
    {
        // Get validator service
        $validator = $this->get('validator');

        // Validate the object
        $listErrors = $validator->validate($user);

        // If form is valid
        if (count($listErrors) == 0) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $statusCode = 200;
            $content = 'User stored';
        } else {
            $statusCode = 400;

            // Return the form errors as content
            $content = $listErrors;
        }

        return $this->view($content, $statusCode)->setFormat('json');
    }

}
