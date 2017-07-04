<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {


    	$name = 'test';
    	$page = 'd';


    	$em = $this->getDoctrine();
    	$user = $em->getRepository('AppBundle:User')->findAll();

    	dump($user);

    	$url = $this->generateUrl( 'posts', array('slug'=>'my-bkig-post') );
    	dump($url);
    	return $this->render('AppBundle:Default:index.html.twig', [
    		'name' => $name,
    		'page' => $page,
    		'url' => $url,
    		'user' => $user
    		]); 

    }
}
