<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Prueba/Default/index.html.twig');
    }
    public function nombreAction($nPila = "sin parámetros")
    {
        return $this->render('@Prueba/Default/nombre.html.twig', array("nombre" =>$nPila));
    }
    public function contactarAction($lugar)
    {
        if($lugar == "Sevilla"){
            return $this->render('@Prueba/Default/nombre.html.twig', array("nombre" =>$nPila));
        }elseif($lugar=="Valencia"){
            return $this->redirect($this->generateUrl("prueba_contactarVlc"));
        }elseif($lugar=="Google"){
            return  $this->redirect("http://www.google.es");
        }else{
            throw $this->createNotFoundException("tas equivocao");
        }
    }
    public function contactarVlcAction()
    {
         return $this->render('@Prueba/Default/contactarVlc.html.twig');
        
    }
    public function nombreRAction($nPila = "sin parámetros")
    {

        return new response("<html><head></head><body>Nombre pila: ". $nPila . "</bodh></html>");

    }

    public function redireccionAction(){
        return $this->redirectToRoute("prueba_homepage");
//        return $this->render('@Prueba/Default/redireccion.html.twig');
    }
}
