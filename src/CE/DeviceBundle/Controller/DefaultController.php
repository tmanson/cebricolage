<?php

namespace CE\DeviceBundle\Controller;

use CE\DeviceBundle\Entity\Device;
use CE\DeviceBundle\Entity\Image;
use CE\DeviceBundle\Form\DeviceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncode;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CEDeviceBundle:Default:deviceManagement.html.twig');
    }

    public function getDevicesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $devices = $em->getRepository('CEDeviceBundle:Device')->findAll();
        $devicesJson['data'] = array();
        foreach ($devices as $device) {
            $categories = $device->getCategories()->getValues();
            $retCategories = array();
            foreach ($categories as $cat){
                $retCategories[] = $cat->getLibelle();
            }
            $image = $device->getImage();
            $imageUrl = '';
            if(isset($image)){
                $imageUrl = $this->get('request')->getBasePath() . DIRECTORY_SEPARATOR . Image::getUploadDir() . DIRECTORY_SEPARATOR . $image->getUrl();
            }
            $devicesJson['data'][] = array(
                'id' => $device->getId(),
                'image' =>$imageUrl,
                'reference' => $device->getReference(),
                'designation' => $device->getLibelle(),
                'marque' => $device->getMarque()->__toString(),
                'modele' => $device->getModele(),
                'categories' => $retCategories,
                'commentaire' => $device->getCommentaire(),
                'disponibilite' => $device->getDisponibleLib(),
                'dateAchat' => $device->getDateAchat()->format('d/m/Y'),
            );
        }
        return new JsonResponse($devicesJson);
    }

    public function createAction(Request $request)
    {
        $device = new Device();
        $device->setEtat(1);
        $form = $this->createForm(new DeviceType(), $device);

        $form->add(
            'submit',
            'submit',
            array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-sm btn-success'))
        );
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $device->setDisponible(false);
            $device->setDisponibleLib("Vient d'être créé");
            $image = $device->getImage();
            if (isset($image)) {
                $image->upload();
            }
            $em->persist($device);
            $em->flush();
            return $this->redirect($this->generateUrl('device_management'));
        }
        return $this->render('CEDeviceBundle:Default:create.html.twig', array('form' => $form->createView()));
    }

    public function editAction($id, Request $request)
    {
        $device = $this->getDoctrine()->getRepository('CEDeviceBundle:Device')->findOneById($id);
        $form = $this->createForm(new DeviceType(), $device);
        $form->add(
            'submit',
            'submit',
            array('label' => 'Modifier', 'attr' => array('class' => 'btn btn-sm btn-success'))
        );
        $form->handleRequest($request);
        $deleteForm = $this->createDeleteForm();

        if ($form->isValid()) {
            $image = $device->getImage();
            if (isset($image)) {
                $image->upload();
            }
            if(null!==$device->getDisponibleLib()){
                $device->setDisponible(false);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('device_management'));
        }
        return $this->render(
            'CEDeviceBundle:Default:edit.html.twig',
            array(
                'form' => $form->createView(),
                'device' => $device,
                'delete_form' => $deleteForm->createView()
            )
        );
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CEDeviceBundle:Device')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find device entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('device_management'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm()
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('device_delete'))
            ->setMethod('DELETE')
            ->add(
                'submit',
                'submit',
                array('label' => 'Supprimer', 'attr' => array('class' => 'btn btn-sm btn-warning'))
            )
            ->getForm();
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
            $device->setDisponibleLib(null);
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
