<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/time')) {
            // time
            if (rtrim($pathinfo, '/') === '/time') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'time');
                }

                return array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::indexAction',  '_route' => 'time',);
            }

            // time_show
            if (preg_match('#^/time/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'time_show')), array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::showAction',));
            }

            // time_new
            if ($pathinfo === '/time/new') {
                return array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::newAction',  '_route' => 'time_new',);
            }

            // time_create
            if ($pathinfo === '/time/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_time_create;
                }

                return array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::createAction',  '_route' => 'time_create',);
            }
            not_time_create:

            // time_edit
            if (preg_match('#^/time/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'time_edit')), array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::editAction',));
            }

            // time_update
            if (preg_match('#^/time/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_time_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'time_update')), array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::updateAction',));
            }
            not_time_update:

            // time_delete
            if (preg_match('#^/time/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_time_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'time_delete')), array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\timeController::deleteAction',));
            }
            not_time_delete:

        }

        // app_bundle_time_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_bundle_time_homepage')), array (  '_controller' => 'AppBundle\\TimeBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
