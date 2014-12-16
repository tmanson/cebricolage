<?php

namespace CE\EmployeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CEEmployeeBundle:Default:index.html.twig', array('name' => $name));
    }
}
