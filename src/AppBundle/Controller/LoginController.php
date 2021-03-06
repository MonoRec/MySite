<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
    	// get the login error if there is one
    	$error = $authUtils->getLastAuthenticationError();

    	// last username entered by the user
    	$lastUsername = $authUtils->getLastUsername();

    	return $this->render('AppBundle:Login:login.html.twig', array(
    		'last_username' => $lastUsername,
    		'error'         => $error,
    		));
    }

    /**
    * @Route("/logout", name="logout")
    */
    public function logoutAction() {

    }
}
