<?php

namespace CE\ReservationBundle\Controller;

use CE\ReservationBundle\Entity\ReservationList;
use CE\ReservationBundle\Form\ListReservationType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CE\ReservationBundle\Entity\Reservation;
use CE\ReservationBundle\Form\ReservationType;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Reservation controller.
 *
 */
class ReservationController extends Controller
{
    const RESTITUE_STATUS = 3;
    const EMPRUNT_STATUS = 2;
    const RESERVATION_STATUS = 1;
    const EMPRUNT_CODE = 'EMPRUNT';
    const RESERVATION_CODE = 'RESERVATION';

    /**
     * Lists all Reservation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CEReservationBundle:Reservation')->findByReservationStatus(ReservationController::RESERVATION_STATUS);
        $emprunts = $em->getRepository('CEReservationBundle:Reservation')->findByReservationStatus(ReservationController::EMPRUNT_STATUS);

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
        $statusId = $request->get('status');
        $reservations = new ReservationList();
        $form = $this->createCreateForm($reservations);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $status = $this->getStatusRepository()->findOneById($statusId);

            foreach ($form->getData()['reservations'] as $reservation) {

                $em2 = $this->getDoctrine()->getManager();
                $reservatsCheck = $em2->getRepository('CEReservationBundle:Reservation')->findByDate($reservation->getStartDate(), $reservation->getEndDate());

                $resa_ok = 'OK';
                foreach ($reservatsCheck as $resa) {
                    if (($resa->getDevice()->getId()) == ($reservation->getDevice()->getId())) {
                        // FIXME Je ne sais pas qui a osé faire un truc dégueulasse comme ça !
                        $Mes = "Reservation déja en cours pour le matériel : " . $reservation->getDevice()->getLibelle() . ", entre le " . date('d M Y', $reservation->getStartDate()->getTimestamp()) . " et le " . date('d M Y', $reservation->getEndDate()->getTimestamp());
                        echo "<script type='text/javascript'>alert('{$Mes}')</script>";
                        $resa_ok = 'KO';
                    }
                }
                if ($resa_ok == 'OK') {
                    $reservation->setStatus($status);
                    $em->persist($reservation);
                } else {
                    flush();
                    sleep(1);
                }
            }
            $em->flush();
            return $this->redirect($this->generateUrl('reservation'));
        }
        return $this->render('CEReservationBundle:Reservation:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reservation entity.
     *
     * @param Reservation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm($entities)
    {
        $form = $this->createForm(new ListReservationType(), array('reservations' => $entities->getReservations()), array(
            'action' => $this->generateUrl('reservation_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Reservation entity.
     *
     */
    public function newAction($statusCode)
    {
        $reservations = new ReservationList();
        $reservations->addReservation(new Reservation());
        if ((strcmp($statusCode, ReservationController::EMPRUNT_CODE) == 0)) {
            $statusReservation = ReservationController::EMPRUNT_STATUS;
        } else {
            $statusReservation = ReservationController::RESERVATION_STATUS;
        }

        $form = $this->createCreateForm($reservations);

        return $this->render('CEReservationBundle:Reservation:new.html.twig', array(
            'form' => $form->createView(),
            'status' => $statusReservation,
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
            'entity' => $entity,
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
        $entity = $em->getRepository('CEReservationBundle:Reservation')->findOneById($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }
        $statusReservation = $entity->getStatus()->getId();;
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CEReservationBundle:Reservation:edit.html.twig', array(
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'status' => $statusReservation,
        ));
    }

    /**
     * Creates a form to edit a Reservation entity.
     *
     * @param ReservationList $entities The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm($entity)
    {
        $form = $this->createForm(new ReservationType(), $entity, array(
            'action' => $this->generateUrl('reservation_update', array('id' => $entity->getId())),
            'method' => 'POST'
        ));
        return $form;
    }

    /**
     * Edits an existing Reservation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $statusId = $request->get('status');
        $entity = $em->getRepository('CEReservationBundle:Reservation')->findOneById($id);
        $editForm = $this->createEditForm($entity);

        $editForm->handleRequest($request);
        if ($editForm->isValid()) {

            $em->flush();
            return $this->redirect($this->generateUrl('reservation'));
        }

        $deleteForm = $this->createDeleteForm($id);
        return $this->render('CEReservationBundle:Reservation:edit.html.twig', array(
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Reservation entity.
     * @return JSON contenant l'ID de l'entité supprimé si il y a eu une erreur, null sinon
     *
     */
    public function deleteAction()
    {
        $request = $this->container->get('request');
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }
        $em->remove($entity);
        $em->flush();
        $response = new JsonResponse();
        $response->setData(array('id' => $entity->getId()));
        return $response;
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
            ->getForm();
    }

    /**
     *
     *
     */
    public function empruntAction()
    {
        return $this->changeReservationStatus(ReservationController::EMPRUNT_STATUS);
    }

    /**
     *
     *
     */
    public function restitueAction($commentaire)
    {
        return $this->changeReservationStatus(ReservationController::RESTITUE_STATUS);
    }

    /**
     * Change le stauts d'une reservation
     * @statusId l'identifiant du status à appliquer
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function changeReservationStatus($statusId, $commentaire='')
    {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $id = $request->get('id');
            $commentaire = $request->get('commentaire');
            if(!isset($id)) {
                throw $this->createNotFoundException('Id not given.');
            }

            $entity = $em->getRepository('CEReservationBundle:Reservation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reservation entity.');
            }

            $status = $em->getRepository('CEReservationBundle:ReservationStatus')->findOneById($statusId);
            $entity->setStatus($status);
            $entity->setCommentaire($commentaire);
            $entity->setReturnTime(new Date());
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
        return $this->getList(ReservationController::EMPRUNT_STATUS, 'Liste du matériel emprunté', 'Restitué', 'restitue', 'restitue_reload', 'EMPRUNT');
    }

    /**
     * Liste les reservations.
     *
     */
    public function getReservationAction()
    {
        return $this->getList(ReservationController::RESERVATION_STATUS, 'Liste du matériel réservé', 'Emprunté', 'emprunt', 'emprunt_reload', 'RESERVATION');
    }

    /**
     * @param $statusId int le status id des reservation à récupérer
     * @param $titre string le titre de la liste
     * @param $actionLib string le libellé de l'action sur les reservation
     * @param $listId int l'identifiant de la liste
     * @param $jsActionFunction string le nom de la fonction JS qui effectue l'action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function getList($statusId, $titre, $actionLib, $jsActionFunction, $jsReloadAction, $statusCode)
    {
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('CEReservationBundle:Reservation')->findByReservationStatus($statusId);
        $reservationsJson['data'] = array();
        foreach ($reservations as $resa) {
            $reservationsJson['data'][] = array(
                'id' => $resa->getId(),
                'device' => $resa->getDevice()->__toString(),
                'user' => $resa->getUser()->__toString(),
                'startDate' => $resa->getStartDate()->format('d/m/Y'),
                'endDate' => $resa->getEndDate()->format('d/m/Y'),
            );
        }
        return new JsonResponse($reservationsJson);
    }

    private function getStatusRepository()
    {
        return $this->getDoctrine()->getRepository('CEReservationBundle:ReservationStatus');
    }

    public function getReservedPeriodForAction($deviceId)
    {
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('CEReservationBundle:Reservation')->findByDevice($deviceId);
        $period = array();
        foreach ($reservations as $resa) {
            $period[] = array($resa->getStartDate()->getTimestamp(), $resa->getEndDate()->getTimestamp());
        }
        $response = new JsonResponse();
        $response->setData($period);
        //[["2015-03-20","2015-03-27"],["2015-04-25","2015-04-27"]];
        return $response;
    }
}
