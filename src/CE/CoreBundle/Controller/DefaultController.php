<?php

namespace CE\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CECoreBundle:Default:index.html.twig');
    }
}
