<?php

namespace CE\ReservationBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CE\ReservationBundle\Entity\Reservation;
use CE\ReservationBundle\Form\ReservationType;
use CE\ReservationBundle\Entity\ReservationStatus;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Reservation controller.
 *
 */
class ReservationController extends Controller
{

    /**
     * Lists all Reservation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CEReservationBundle:Reservation')->findByReservationStatus(1);
        $emprunts = $em->getRepository('CEReservationBundle:Reservation')->findByReservationStatus(2);

        return $this->render('CEReservationBundle:Reservation:index.html.twig', array(
            'entities' => $entities,
            'emprunts' => $emprunts,
        ));
    }
    /**
     * Creates a new Reservation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Reservation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $statusReservation = $this->getDoctrine()->getRepository('CEReservationBundle:ReservationStatus')->findOneById(1);
            $entity->setStatus($statusReservation);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reservation_show', array('id' => $entity->getId())));
        }

        return $this->render('CEReservationBundle:Reservation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reservation entity.
     *
     * @param Reservation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reservation $entity)
    {
        $form = $this->createForm(new ReservationType(), $entity, array(
            'action' => $this->generateUrl('reservation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reservation entity.
     *
     */
    public function newAction()
    {
        $entity = new Reservation();
        $form   = $this->createCreateForm($entity);

        return $this->render('CEReservationBundle:Reservation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reservation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CEReservationBundle:Reservation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reservation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CEReservationBundle:Reservation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Reservation entity.
    *
    * @param Reservation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reservation $entity)
    {
        $form = $this->createForm(new ReservationType(), $entity, array(
            'action' => $this->generateUrl('reservation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reservation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reservation_edit', array('id' => $id)));
        }

        return $this->render('CEReservationBundle:Reservation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Reservation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reservation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reservation'));
    }

    /**
     * Creates a form to delete a Reservation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
     *
     *
     */
    public function empruntAction()
    {
        return $this->changeReservationStatus(2);
    }

    /**
     *
     *
     */
    public function restitueAction()
    {
        return $this->changeReservationStatus(3);
    }

    /**
     * Change le stauts d'une reservation
     * @statusId l'identifiant du status à appliquer
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function changeReservationStatus($statusId)
    {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $id = $request->get('id');
            if(!isset($id)) {
                throw $this->createNotFoundException('Id not given.');
            }

            $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reservation entity.');
            }

            $status = $em->getRepository('CEReservationBundle:ReservationStatus')->findOneById($statusId);
            $entity->setStatus($status);
            $em->flush();

            $response = new JsonResponse();
            $response->setData(array('id' => $entity->getId()));
            return $response;
        }
        return null;
    }


    /**
     * Liste les emprunts.
     *
     */
    public function getEmpruntAction()
    {
        return $this->getList(2,'Liste du matériel emprunté','Restitué','restitue');
    }

    /**
     * Liste les reservations.
     *
     */
    public function getReservationAction()
    {
        return $this->getList(1,'Liste du matériel réservé','Emprunté','emprunt');
    }

    /**
     * @param $statusId le status id des reservation à récupérer
     * @param $titre le titre de la liste
     * @param $actionLib le libellé de l'action sur les reservation
     * @param $listId l'identifiant de la liste
     * @param $jsActionFunction le nom de la fonction JS qui effectue l'action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function getList($statusId, $titre, $actionLib, $jsActionFunction){
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('CEReservationBundle:Reservation')->findByReservationStatus($statusId);
        return $this->render('CEReservationBundle:Reservation:list.html.twig', array(
            'entities' => $reservations,
            'titre' => $titre,
            'action' => $actionLib,
            'jsActionFunction'=> $jsActionFunction
        ));
    }

    /**
     * Liste les devices.
     *
     */
    public function getDevicesAction()
    {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $startDate = $request->get('startDate');
            $endDate = $request->get('endDate');

            $reservationsSurLaPeriode = $em->getRepository('CEReservationBundle:Reservation')->findByDate($startDate, $endDate);
            $devices = $em->getRepository('CEReservationBundle:Devices')->findAll();
            //Recup all device

            // on supprime les devices reservés

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reservation entity.');
            }

            $status = $em->getRepository('CEReservationBundle:ReservationStatus')->findOneById($statusId);
            $entity->setStatus($status);
            $em->flush();

            $response = new JsonResponse();
            $response->setData(array('id' => $entity->getId()));
            return $response;
        }
        return null;
    }
}
