<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/posts", name="posts")
     */
    public function indexAction()
    {
        return $this->render('BlogBlogBundle:Default:index.html.twig');
    }
}
