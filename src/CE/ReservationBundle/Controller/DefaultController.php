<?php

namespace CE\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CEReservationBundle:Default:index.html.twig', array('name' => $name));
    }
}
