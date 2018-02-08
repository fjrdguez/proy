<?php

namespace EmpresaBundle\Controller;

use EmpresaBundle\Entity\empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Empresa controller.
 *
 */
class empresaController extends Controller
{
    /**
     * Lists all empresa entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $empresas = $em->getRepository('EmpresaBundle:empresa')->findAll();

        return $this->render('empresa/index.html.twig', array(
            'empresas' => $empresas,
        ));
    }

    /**
     * Creates a new empresa entity.
     *
     */
    public function newAction(Request $request)
    {
        $empresa = new Empresa();
        $form = $this->createForm('EmpresaBundle\Form\empresaType', $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();

            return $this->redirectToRoute('empresa_show', array('id' => $empresa->getId()));
        }

        return $this->render('empresa/new.html.twig', array(
            'empresa' => $empresa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a empresa entity.
     *
     */
    public function showAction(empresa $empresa)
    {
        $deleteForm = $this->createDeleteForm($empresa);

        return $this->render('empresa/show.html.twig', array(
            'empresa' => $empresa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing empresa entity.
     *
     */
    public function editAction(Request $request, empresa $empresa)
    {
        $deleteForm = $this->createDeleteForm($empresa);
        $editForm = $this->createForm('EmpresaBundle\Form\empresaType', $empresa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('empresa_edit', array('id' => $empresa->getId()));
        }

        return $this->render('empresa/edit.html.twig', array(
            'empresa' => $empresa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a empresa entity.
     *
     */
    public function deleteAction(Request $request, empresa $empresa)
    {
        $form = $this->createDeleteForm($empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($empresa);
            $em->flush();
        }

        return $this->redirectToRoute('empresa_index');
    }

    /**
     * Creates a form to delete a empresa entity.
     *
     * @param empresa $empresa The empresa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(empresa $empresa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('empresa_delete', array('id' => $empresa->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
