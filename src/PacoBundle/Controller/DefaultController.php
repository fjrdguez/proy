<?php

namespace PacoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PacoBundle:Default:index.html.twig');
    }
}
