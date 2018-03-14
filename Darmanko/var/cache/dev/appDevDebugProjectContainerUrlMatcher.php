<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
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
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

        // snt_darmanko_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'snt_darmanko_homepage');
            }

            return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'snt_darmanko_homepage',);
        }

        // list
        if ('/accueil' === $pathinfo) {
            return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\reservationController::listAction',  '_route' => 'list',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // login
            if ('/admin/login' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::loginAction',  '_route' => 'login',);
            }

            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::accueilAction',  '_route' => 'admin',);
            }

            // bien
            if ('/admin/bien' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::bienAction',  '_route' => 'bien',);
            }

            if (0 === strpos($pathinfo, '/admin/reservation')) {
                // enCours
                if ('/admin/reservationEnCours' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::enCoursAction',  '_route' => 'enCours',);
                }

                // reservation
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation')), array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::reservationAction',));
                }

            }

            // contrat
            if (0 === strpos($pathinfo, '/admin/contrat') && preg_match('#^/admin/contrat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat')), array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::contratAction',));
            }

            // localite
            if ('/admin/localite' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::localiteAction',  '_route' => 'localite',);
            }

            // type
            if ('/admin/type' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::typeAction',  '_route' => 'type',);
            }

            if (0 === strpos($pathinfo, '/admin/ajax')) {
                // ajaxLocalite
                if ('/admin/ajaxLocalite' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::ajaxLocaliteAction',  '_route' => 'ajaxLocalite',);
                }

                // ajaxType
                if ('/admin/ajaxtype' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::ajaxtypeAction',  '_route' => 'ajaxType',);
                }

                // ajaxAddSelect
                if ('/admin/ajaxAddSelect' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::ajaxAddSelectAction',  '_route' => 'ajaxAddSelect',);
                }

                // ajaxConnexion
                if ('/admin/ajaxConnexion' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\adminController::ajaxConnexionAction',  '_route' => 'ajaxConnexion',);
                }

            }

        }

        // detail
        if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\reservationController::detailAction',));
        }

        if (0 === strpos($pathinfo, '/darmanko')) {
            // upload
            if ('/darmanko/upload' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\reservationController::uploadAction',  '_route' => 'upload',);
            }

            // catalogue
            if ('/darmanko' === $pathinfo) {
                return array (  '_controller' => 'SNT\\DarmankoBundle\\Controller\\reservationController::catalogueAction',  '_route' => 'catalogue',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
