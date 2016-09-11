<?php

namespace HunterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HunterBundle\Entity\Store;
use HunterBundle\Form\StoreType;

/**
 * Store controller.
 *
 * @Route("/store")
 */
class StoreController extends Controller
{
    /**
     * Lists all Store entities.
     *
     * @Route("/", name="store_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stores = $em->getRepository('HunterBundle:Store')->findAll();

        return $this->render('store/index.html.twig', array(
            'stores' => $stores,
        ));
    }

    /**
     * Creates a new Store entity.
     *
     * @Route("/new", name="store_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $store = new Store();
        $form = $this->createForm('HunterBundle\Form\StoreType', $store);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($store);
            $em->flush();

            return $this->redirectToRoute('store_show', array('id' => $store->getId()));
        }

        return $this->render('store/new.html.twig', array(
            'store' => $store,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Store entity.
     *
     * @Route("/{id}", name="store_show")
     * @Method("GET")
     */
    public function showAction(Store $store)
    {
        $deleteForm = $this->createDeleteForm($store);

        return $this->render('store/show.html.twig', array(
            'store' => $store,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Store entity.
     *
     * @Route("/{id}/edit", name="store_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Store $store)
    {
        $deleteForm = $this->createDeleteForm($store);
        $editForm = $this->createForm('HunterBundle\Form\StoreType', $store);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($store);
            $em->flush();

            return $this->redirectToRoute('store_edit', array('id' => $store->getId()));
        }

        return $this->render('store/edit.html.twig', array(
            'store' => $store,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Store entity.
     *
     * @Route("/{id}", name="store_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Store $store)
    {
        $form = $this->createDeleteForm($store);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($store);
            $em->flush();
        }

        return $this->redirectToRoute('store_index');
    }

    /**
     * Creates a form to delete a Store entity.
     *
     * @param Store $store The Store entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Store $store)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('store_delete', array('id' => $store->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
