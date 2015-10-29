<?php

namespace CE\DeviceBundle\Controller;

use CE\DeviceBundle\Entity\Device;
use CE\DeviceBundle\Form\DeviceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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

        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array( 'class' => 'btn btn-sm btn-success')));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $device->setDisponible(false);
            $device->setDisponibleLib("Vient d'être créé");
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
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array( 'class' => 'btn btn-sm btn-success')));
        return $this->render('CEDeviceBundle:Default:edit.html.twig', array('form' => $form->createView(), 'device' =>$device));
    }

    public function getDevicesAction(){
        $em = $this->getDoctrine()->getManager();
        $devices = $em->getRepository('CEDeviceBundle:Device')->findAll();
        return $this->render('CEDeviceBundle:Default:list.html.twig', array(
            'devices' => $devices,
        ));
    }

    public function activateAction(Request $request)
    {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $id = $request->get('id');
            if (!isset($id)) {
                throw $this->createNotFoundException('Id not given.');
            }
            $device = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findOneById($id);
            $device->setDisponible(true);
            $em->flush();

            $response = new JsonResponse();
            $response->setData(array('id' => $device->getId()));
            return $response;
        }
        return null;
    }
    public function deActivateAction(Request $request)
    {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $id = $request->get('id');
            $commentaire = $request->get('commentaire');
            if (!isset($id)) {
                throw $this->createNotFoundException('Id not given.');
            }
            if (!isset($commentaire)) {
                throw $this->createNotFoundException('Commentaire not given.');
            }
            $device = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findOneById($id);
            $device->setDisponible(false);
            $device->setDisponibleLib($commentaire);
            $em->flush();

            $response = new JsonResponse();
            $response->setData(array('id' => $device->getId()));
            return $response;
        }
        return null;
    }
}
