<?php

namespace CE\DeviceBundle\Controller;

use CE\DeviceBundle\Entity\Device;
use CE\DeviceBundle\Form\DeviceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $devices = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findAll();

        return $this->render('CEDeviceBundle:Default:deviceManagement.html.twig', array('devices' => $devices));
    }

    public function createAction(Request $request)
    {
        $device = new Device();
        $device->setEtat(1);
        $form = $this->createForm(new DeviceType(), $device);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($device);
            $em->flush();

            $devices = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findAll();
            return $this->render('CEDeviceBundle:Default:deviceManagement.html.twig', array('devices' => $devices));
        }

        return $this->render('CEDeviceBundle:Default:create.html.twig', array('form' => $form->createView()));
    }

    public function editAction($id, Request $request)
    {
        $device = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findOneById($id);
        $form = $this->createForm(new DeviceType(), $device);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $devices = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findAll();
            return $this->render('CEDeviceBundle:Default:deviceManagement.html.twig', array('devices' => $devices));
        }

        return $this->render('CEDeviceBundle:Default:create.html.twig', array('form' => $form->createView()));
    }
}
