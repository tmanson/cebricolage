<?php

namespace CE\PermanenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CEPermanenceBundle:Default:index.html.twig');
    }
}
