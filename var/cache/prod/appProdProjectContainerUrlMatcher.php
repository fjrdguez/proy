<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/prueba')) {
            // prueba_homepage
            if ('/prueba' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'prueba_homepage',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'prueba_homepage'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/prueba/nombre')) {
                // prueba_nombre
                if (preg_match('#^/prueba/nombre/(?P<nPila>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_nombre')), array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreAction',));
                }

                // prueba_nombreR
                if (0 === strpos($pathinfo, '/prueba/nombreR') && preg_match('#^/prueba/nombreR/(?P<nPila>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_nombreR')), array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreRAction',));
                }

                // prueba_nombre_sinParametros
                if ('/prueba/nombre' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreAction',  '_route' => 'prueba_nombre_sinParametros',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'prueba_nombre_sinParametros'));
                    }

                    return $ret;
                }

            }

            elseif (0 === strpos($pathinfo, '/prueba/contactar')) {
                // prueba_contactar
                if (preg_match('#^/prueba/contactar(?:/(?P<lugar>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_contactar')), array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::contactarAction',  'lugar' => 'Sevilla',));
                }

                // prueba_contactarVlc
                if ('/prueba/contactarVlc' === $pathinfo) {
                    return array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::contactarVlcAction',  '_route' => 'prueba_contactarVlc',);
                }

            }

            // prueba_redireccion
            if ('/prueba/redireccion' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::redireccionAction',  '_route' => 'prueba_redireccion',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'prueba_redireccion'));
                }

                return $ret;
            }

            // all_eventos
            if ('/prueba/eventos/all' === $pathinfo) {
                return array (  '_controller' => 'PruebaBundle\\Controller\\EventosController::allAction',  '_route' => 'all_eventos',);
            }

        }

        // paco_homepage
        if ('/paco' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'PacoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'paco_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'paco_homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/alumno')) {
            // alumno_homepage
            if ('/alumno' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PruebaBundle\\Controller\\AlumnoController::indexAction',  '_route' => 'alumno_homepage',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'alumno_homepage'));
                }

                return $ret;
            }

            // alumno_list
            if ('/alumno/list' === $pathinfo) {
                return array (  '_controller' => 'PruebaBundle\\Controller\\AlumnoController::listAction',  '_route' => 'alumno_list',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
