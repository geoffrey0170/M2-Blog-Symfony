<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{

  /**
   * @Route("/", name="blogpratik_homepage")
   */
    public function indexAction()
    {
        return $this->render('BlogBundle:Blog:index.html.twig');
    }

}