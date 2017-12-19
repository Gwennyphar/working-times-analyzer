<?php

namespace AppBundle\TimeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\TimeBundle\Entity\time;
use AppBundle\TimeBundle\Form\timeType;

/**
 * time controller.
 *
 */
class timeController extends Controller
{
	/**
     * parse csvfile.
     *
     */
	public function csvAction($file)
    {
		$zeile = 0;
        $read = fopen ($_SERVER['DOCUMENT_ROOT'].'/timelog.csv','r');
        $write = fopen('daten.csv', 'w');
        $header = array('ID', 'User', 'Datum', 'Kommen', 'Gehen', 'Pause', 'Arbeitsstunden');
        /**
         * timelog.csv einlesen und nach User trennen
         */
         if($read != FALSE) {
			 //fputcsv($write, $header, ";");
			 while ($data = fgetcsv($read, 1000, ";")) {
				 if(in_array('04B8E69A983C80', $data, true)) {
					 fputcsv($write, $data, ";");
				 }
			 }
			 fclose($read);
			 $read = fopen ('timelog.csv','r');
			 while ($data = fgetcsv($read, 1000, ";")) {
				 if(in_array('0452E99A983C81', $data, true)) {
					 fputcsv($write, $data, ";");
				 }
			 }
			 fclose($write);
		 }
		 else {
			 echo "Fehler!";
		 }
		 return $this->render('AppBundleTimeBundle:time:import.html.twig', array(
			'import' => $file,
         ));
    }
    /**
     * Lists all time entities.
     *
     */
    public function indexAction()
    {
		$userId = 1;
        $em = $this->getDoctrine()->getManager();;
        //$em = $this->getDoctrine()->getEntityManager();
		$connection = $em->getConnection();
		$user = $connection->prepare("SELECT user.name, time.vname, 
		time.name, time.datum, time.kommen, time.gehen, time.pause, 
		time.total, status.name, time.bemerkung
		FROM user
		INNER JOIN time ON user.id = time.user_id
		INNER JOIN status ON time.status_id = status.id
		WHERE user.id = time.user_id
		ORDER BY user.name");
		$user->bindValue('id', $userId);
		$user->execute();
		$entities = $user->fetchAll();

        $entities = $em->getRepository('AppBundleTimeBundle:time')->findAll();
        return $this->render('AppBundleTimeBundle:time:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new time entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new time();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('time_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundleTimeBundle:time:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a time entity.
     *
     * @param time $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(time $entity)
    {
        $form = $this->createForm(new timeType(), $entity, array(
            'action' => $this->generateUrl('time_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Speichern'));
        return $form;
    }

    /**
     * Displays a form to create a new time entity.
     *
     */
    public function newAction()
    {
        $entity = new time();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundleTimeBundle:time:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a time entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundleTimeBundle:time')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find time entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundleTimeBundle:time:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing time entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundleTimeBundle:time')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find time entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundleTimeBundle:time:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a time entity.
    *
    * @param time $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(time $entity)
    {
        $form = $this->createForm(new timeType(), $entity, array(
            'action' => $this->generateUrl('time_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Aktualisieren'));

        return $form;
    }
    /**
     * Edits an existing time entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundleTimeBundle:time')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find time entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('time_edit', array('id' => $id)));
        }

        return $this->render('AppBundleTimeBundle:time:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a time entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundleTimeBundle:time')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find time entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('time'));
    }

    /**
     * Creates a form to delete a time entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('time_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Löschen'))
            ->getForm()
        ;
    }
}
