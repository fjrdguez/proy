<?php

namespace EmpresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EmpresaBundle\Entity\empresa;
use EmpresaBundle\Entity\TipoEmpresa;
use EmpresaBundle\Form\empresaType;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Empresa/Default/index.html.twig');
    }
    public function createAction()
    {
        $empresa = new empresa();
        $empresa->setNombre("Empresa Daw2");
        $empresa->setNumEmpleados(25);
        $mang = $this->getDoctrine()->getManager();
        $mang->persist($empresa);
        $mang->flush();

        return $this->render('@Empresa/Default/index.html.twig', array("empId" => $empresa->getId()));
    }
    public function buscarAction($id){
        $rep = $this->getDoctrine()->getRepository("EmpresaBundle:empresa");
        $empresa = $rep->find($id);
        return $this->render('@Empresa/Default/buscar.html.twig', array("empresa" => $empresa));
    }
     public function buscarNombreAction($nombre){
        $rep = $this->getDoctrine()->getRepository("EmpresaBundle:empresa");
        $empresa = $rep->findOneByNombre($nombre);
        return $this->render('@Empresa/Default/buscar.html.twig', array("empresa" => $empresa));
    }
    public function updateAction(){
        $rep = $this->getDoctrine()->getRepository("EmpresaBundle:empresa");
        $empresa = $rep->find(1);
        if(!$empresa){
            throw new exception("No existe id");
        }
        $empresa->setNombre("nuevo nombre");
        $mang = $this->getDoctrine()->getManager();
        $mang->persist($empresa);
        $mang->flush();
        return $this->render('@Empresa/Default/update.html.twig', array("empresa" => $empresa));
        }
    public function nuevoAction(Request $req){
        $empresa = new empresa();
        $form = $this->createForm( empresaType::class);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid()){
            $empresa = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();
            
        }
        return $this->render("@Empresa/Default/nuevo.html.twig", array("form" =>$form->createView()));
    }       
    public function nuevoTipoAction(){
        $tipo = new TipoEmpresa();
        $tipo->setNombre("Sociedad Anónima");
        $empresa = new empresa();
        $empresa->setNombre("Paco, S.A.");
        $empresa->setCiudad("Madrid");
        $empresa->setNumEmpleados(5);
        $empresa->setTipo($tipo);
        $em = $this->getDoctrine()->getManager();
        $em->persist($tipo);
        $em->persist($empresa);
        $em->flush();
        return $this->render("@Empresa/Default/nuevoTipo.html.twig");        
    } 
public function listaNombresAction(){
    $nombre = ["Paco", "Pilar", "Daniel", "Antonio", "Rosa", "Carmen"];
    return $this->render("@Empresa/Default/listaNombres.html.twig", array("nombres"=>$nombre));        
}
}
