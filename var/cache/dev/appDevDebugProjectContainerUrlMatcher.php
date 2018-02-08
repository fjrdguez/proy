<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_homepage'));
                }

                return $ret;
            }

            // api_homepage
            if ('/api' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_homepage',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_homepage'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/api/empresa')) {
                // api_getEmpresaById
                if (preg_match('#^/api/empresa(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_getEmpresaById;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_getEmpresaById')), array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::getEmpresaByIdGetMethodAction',  'id' => 0,));
                }
                not_api_getEmpresaById:

                // api_createEmpresa
                if ('/api/empresa/create' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_createEmpresa;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::createEmpresaAction',  '_route' => 'api_createEmpresa',);
                }
                not_api_createEmpresa:

            }

            elseif (0 === strpos($pathinfo, '/alumno')) {
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

        }

        // usuarios_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UsuariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuarios_default_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'usuarios_default_index'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios
            if ('/usuarios' === $pathinfo) {
                return array (  '_controller' => 'UsuariosBundle\\Controller\\DefaultController::usuariosAction',  '_route' => 'usuarios',);
            }

            // login
            if ('/usuarios/login' === $pathinfo) {
                return array (  '_controller' => 'UsuariosBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/usuarios/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

        }

        // user_registation
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'UsuariosBundle\\Controller\\DefaultController::registerAction',  '_route' => 'user_registation',);
        }

        if (0 === strpos($pathinfo, '/futbol')) {
            if (0 === strpos($pathinfo, '/futbol/equipo')) {
                // equipo_index
                if ('/futbol/equipo' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_equipo_index;
                    }

                    $ret = array (  '_controller' => 'FutbolBundle\\Controller\\EquipoController::indexAction',  '_route' => 'equipo_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'equipo_index'));
                    }

                    return $ret;
                }
                not_equipo_index:

                // equipo_show
                if (preg_match('#^/futbol/equipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_equipo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_show')), array (  '_controller' => 'FutbolBundle\\Controller\\EquipoController::showAction',));
                }
                not_equipo_show:

                // equipo_new
                if ('/futbol/equipo/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_equipo_new;
                    }

                    return array (  '_controller' => 'FutbolBundle\\Controller\\EquipoController::newAction',  '_route' => 'equipo_new',);
                }
                not_equipo_new:

                // equipo_edit
                if (preg_match('#^/futbol/equipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_equipo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_edit')), array (  '_controller' => 'FutbolBundle\\Controller\\EquipoController::editAction',));
                }
                not_equipo_edit:

                // equipo_delete
                if (preg_match('#^/futbol/equipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_equipo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_delete')), array (  '_controller' => 'FutbolBundle\\Controller\\EquipoController::deleteAction',));
                }
                not_equipo_delete:

            }

            elseif (0 === strpos($pathinfo, '/futbol/entrenador')) {
                // entrenador_index
                if ('/futbol/entrenador' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_entrenador_index;
                    }

                    $ret = array (  '_controller' => 'FutbolBundle\\Controller\\EntrenadorController::indexAction',  '_route' => 'entrenador_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entrenador_index'));
                    }

                    return $ret;
                }
                not_entrenador_index:

                // entrenador_show
                if (preg_match('#^/futbol/entrenador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_entrenador_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrenador_show')), array (  '_controller' => 'FutbolBundle\\Controller\\EntrenadorController::showAction',));
                }
                not_entrenador_show:

                // entrenador_new
                if ('/futbol/entrenador/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_entrenador_new;
                    }

                    return array (  '_controller' => 'FutbolBundle\\Controller\\EntrenadorController::newAction',  '_route' => 'entrenador_new',);
                }
                not_entrenador_new:

                // entrenador_edit
                if (preg_match('#^/futbol/entrenador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_entrenador_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrenador_edit')), array (  '_controller' => 'FutbolBundle\\Controller\\EntrenadorController::editAction',));
                }
                not_entrenador_edit:

                // entrenador_delete
                if (preg_match('#^/futbol/entrenador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_entrenador_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrenador_delete')), array (  '_controller' => 'FutbolBundle\\Controller\\EntrenadorController::deleteAction',));
                }
                not_entrenador_delete:

            }

            // futbol_homepage
            if ('/futbol' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FutbolBundle\\Controller\\DefaultController::indexAction',  '_route' => 'futbol_homepage',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'futbol_homepage'));
                }

                return $ret;
            }

        }

        elseif (0 === strpos($pathinfo, '/empresa')) {
            // empresa_index
            if ('/empresa' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_empresa_index;
                }

                $ret = array (  '_controller' => 'EmpresaBundle\\Controller\\empresaController::indexAction',  '_route' => 'empresa_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'empresa_index'));
                }

                return $ret;
            }
            not_empresa_index:

            // empresa_show
            if (preg_match('#^/empresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_empresa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'EmpresaBundle\\Controller\\empresaController::showAction',));
            }
            not_empresa_show:

            // empresa_new
            if ('/empresa/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_empresa_new;
                }

                return array (  '_controller' => 'EmpresaBundle\\Controller\\empresaController::newAction',  '_route' => 'empresa_new',);
            }
            not_empresa_new:

            // empresa_edit
            if (preg_match('#^/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_empresa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'EmpresaBundle\\Controller\\empresaController::editAction',));
            }
            not_empresa_edit:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'EmpresaBundle\\Controller\\empresaController::deleteAction',));
            }
            not_empresa_delete:

        }

        elseif (0 === strpos($pathinfo, '/prueba')) {
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
