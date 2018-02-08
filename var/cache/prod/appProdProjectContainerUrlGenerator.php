<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'prueba_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_nombre' => array (  0 =>   array (    0 => 'nPila',  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nPila',    ),    1 =>     array (      0 => 'text',      1 => '/prueba/nombre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_contactar' => array (  0 =>   array (    0 => 'lugar',  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::contactarAction',    'lugar' => 'Sevilla',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lugar',    ),    1 =>     array (      0 => 'text',      1 => '/prueba/contactar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_contactarVlc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::contactarVlcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/contactarVlc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_nombreR' => array (  0 =>   array (    0 => 'nPila',  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nPila',    ),    1 =>     array (      0 => 'text',      1 => '/prueba/nombreR',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_nombre_sinParametros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/nombre/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_redireccion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::redireccionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/redireccion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_eventos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\EventosController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/eventos/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\AlumnoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumno/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\AlumnoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumno/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paco_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PacoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paco/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
