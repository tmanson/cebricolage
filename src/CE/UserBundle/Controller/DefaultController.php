<?php

namespace CE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CEUserBundle:Default:index.html.twig', array('error' => null));
    }
}
