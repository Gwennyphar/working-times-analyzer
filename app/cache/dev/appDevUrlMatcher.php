<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/f315b8c')) {
            // _assetic_f315b8c
            if ($pathinfo === '/css/f315b8c.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f315b8c',);
            }

            if (0 === strpos($pathinfo, '/css/f315b8c_part_1_')) {
                if (0 === strpos($pathinfo, '/css/f315b8c_part_1_bootstrap')) {
                    if (0 === strpos($pathinfo, '/css/f315b8c_part_1_bootstrap-theme')) {
                        // _assetic_f315b8c_0
                        if ($pathinfo === '/css/f315b8c_part_1_bootstrap-theme_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f315b8c_0',);
                        }

                        if (0 === strpos($pathinfo, '/css/f315b8c_part_1_bootstrap-theme.')) {
                            // _assetic_f315b8c_1
                            if ($pathinfo === '/css/f315b8c_part_1_bootstrap-theme.css_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f315b8c_1',);
                            }

                            // _assetic_f315b8c_2
                            if ($pathinfo === '/css/f315b8c_part_1_bootstrap-theme.min_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f315b8c_2',);
                            }

                        }

                    }

                    // _assetic_f315b8c_3
                    if ($pathinfo === '/css/f315b8c_part_1_bootstrap_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_f315b8c_3',);
                    }

                    if (0 === strpos($pathinfo, '/css/f315b8c_part_1_bootstrap.')) {
                        // _assetic_f315b8c_4
                        if ($pathinfo === '/css/f315b8c_part_1_bootstrap.css_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_f315b8c_4',);
                        }

                        // _assetic_f315b8c_5
                        if ($pathinfo === '/css/f315b8c_part_1_bootstrap.min_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_f315b8c_5',);
                        }

                    }

                }

                // _assetic_f315b8c_6
                if ($pathinfo === '/css/f315b8c_part_1_main_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_f315b8c_6',);
                }

            }

        }

        // _assetic_46414bd
        if ($pathinfo === '/js/46414bd.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '46414bd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_46414bd',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
