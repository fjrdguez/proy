<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlumnoController extends Controller
{
    public function indexAction(){
        return $this->render('@Prueba/Alumnos/index.html.twig');
    }
    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository('PruebaBundle:Eventos');
        $events = $repository->findAll();

        return $this->render('@Prueba/Alumnos/list.html.twig', array("eventos"=>$events));
    }
 
}
