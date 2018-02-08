<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventosController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('PruebaBundle:Eventos');
        $events = $repository->findAll();

        return $this->render('@Prueba/Eventos/all.html.twig', array("eventos"=>$events));
    }
 
}
