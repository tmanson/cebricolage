<?php

namespace CE\PermanenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CE\PermanenceBundle\Entity\Permanence;
use CE\PermanenceBundle\Form\PermanenceType;

/**
 * Permanence controller.
 *
 */
class PermanenceController extends Controller
{

    /**
     * Lists all Permanence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CEPermanenceBundle:Permanence')->findAll();

        return $this->render('CEPermanenceBundle:Permanence:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Permanence entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Permanence();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('permanence_management_show', array('id' => $entity->getId())));
        }

        return $this->render('CEPermanenceBundle:Permanence:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Permanence entity.
     *
     * @param Permanence $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Permanence $entity)
    {
        $form = $this->createForm(new PermanenceType(), $entity, array(
            'action' => $this->generateUrl('permanence_management_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Permanence entity.
     *
     */
    public function newAction()
    {
        $entity = new Permanence();
        $form   = $this->createCreateForm($entity);

        return $this->render('CEPermanenceBundle:Permanence:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Permanence entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CEPermanenceBundle:Permanence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Permanence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CEPermanenceBundle:Permanence:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Permanence entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CEPermanenceBundle:Permanence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Permanence entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CEPermanenceBundle:Permanence:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Permanence entity.
    *
    * @param Permanence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Permanence $entity)
    {
        $form = $this->createForm(new PermanenceType(), $entity, array(
            'action' => $this->generateUrl('permanence_management_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Permanence entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CEPermanenceBundle:Permanence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Permanence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('permanence_management_edit', array('id' => $id)));
        }

        return $this->render('CEPermanenceBundle:Permanence:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Permanence entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CEPermanenceBundle:Permanence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Permanence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('permanence_management'));
    }

    /**
     * Creates a form to delete a Permanence entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('permanence_management_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
