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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // viahome_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'viahome_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_viahome_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'viahome_homepage'));
            }

            return $ret;
        }
        not_viahome_homepage:

        // via_page_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'via_page_contact',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ('/admin/login' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ('/admin/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_sonata_user_admin_security_check;
                    }

                    return $ret;
                }
                not_sonata_user_admin_security_check:

            }

            // sonata_user_admin_security_logout
            if ('/admin/logout' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

            if (0 === strpos($pathinfo, '/admin/resetting')) {
                // sonata_user_admin_resetting_request
                if ('/admin/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_route' => 'sonata_user_admin_resetting_request',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_sonata_user_admin_resetting_request;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_request:

                // sonata_user_admin_resetting_reset
                if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sonata_user_admin_resetting_reset;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_reset:

                // sonata_user_admin_resetting_send_email
                if ('/admin/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_sonata_user_admin_resetting_send_email;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_send_email:

                // sonata_user_admin_resetting_check_email
                if ('/admin/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_sonata_user_admin_resetting_check_email;
                    }

                    return $ret;
                }
                not_sonata_user_admin_resetting_check_email:

            }

            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_sonata_admin_redirect;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect'));
                }

                return $ret;
            }
            not_sonata_admin_redirect:

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // admin_sonata_user_user_list
                    if ('/admin/sonata/user/user/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                    }

                    // admin_sonata_user_user_create
                    if ('/admin/sonata/user/user/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                    }

                    // admin_sonata_user_user_batch
                    if ('/admin/sonata/user/user/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                    }

                    // admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                    }

                    // admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                    }

                    // admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                    }

                    // admin_sonata_user_user_export
                    if ('/admin/sonata/user/user/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // admin_sonata_user_group_list
                    if ('/admin/sonata/user/group/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                    }

                    // admin_sonata_user_group_create
                    if ('/admin/sonata/user/group/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                    }

                    // admin_sonata_user_group_batch
                    if ('/admin/sonata/user/group/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                    }

                    // admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                    }

                    // admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                    }

                    // admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                    }

                    // admin_sonata_user_group_export
                    if ('/admin/sonata/user/group/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/page')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/page/page')) {
                        // admin_sonata_page_page_list
                        if ('/admin/sonata/page/page/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_list',  '_route' => 'admin_sonata_page_page_list',);
                        }

                        // admin_sonata_page_page_create
                        if ('/admin/sonata/page/page/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_create',  '_route' => 'admin_sonata_page_page_create',);
                        }

                        // admin_sonata_page_page_batch
                        if ('/admin/sonata/page/page/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_batch',  '_route' => 'admin_sonata_page_page_batch',);
                        }

                        // admin_sonata_page_page_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_edit',));
                        }

                        // admin_sonata_page_page_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_delete',));
                        }

                        // admin_sonata_page_page_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_show',));
                        }

                        // admin_sonata_page_page_export
                        if ('/admin/sonata/page/page/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_export',  '_route' => 'admin_sonata_page_page_export',);
                        }

                        // admin_sonata_page_page_block_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/list$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_list',));
                        }

                        // admin_sonata_page_page_block_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/create$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_create',));
                        }

                        // admin_sonata_page_page_block_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/batch$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_batch',));
                        }

                        // admin_sonata_page_page_block_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_edit',));
                        }

                        // admin_sonata_page_page_block_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_delete',));
                        }

                        // admin_sonata_page_page_block_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_show',));
                        }

                        // admin_sonata_page_page_block_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/export$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_export',));
                        }

                        // admin_sonata_page_page_block_view
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/view$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_view',));
                        }

                        // admin_sonata_page_page_block_savePosition
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/save\\-position$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_savePosition')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_savePosition',));
                        }

                        // admin_sonata_page_page_block_switchParent
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/switch\\-parent$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_switchParent')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::switchParentAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_switchParent',));
                        }

                        // admin_sonata_page_page_block_composePreview
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<block_id>[^/]++)/compose_preview$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_composePreview')), array (  'block_id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::composePreviewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_composePreview',));
                        }

                        // admin_sonata_page_page_snapshot_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/list$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_list',));
                        }

                        // admin_sonata_page_page_snapshot_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/create$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_create',));
                        }

                        // admin_sonata_page_page_snapshot_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/batch$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_batch',));
                        }

                        // admin_sonata_page_page_snapshot_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_edit',));
                        }

                        // admin_sonata_page_page_snapshot_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_delete',));
                        }

                        // admin_sonata_page_page_snapshot_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_show',));
                        }

                        // admin_sonata_page_page_snapshot_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/export$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_export',));
                        }

                        // admin_sonata_page_page_compose
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/compose$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_compose')), array (  'id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::composeAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_compose',));
                        }

                        // admin_sonata_page_page_compose_container_show
                        if (0 === strpos($pathinfo, '/admin/sonata/page/page/compose/container') && preg_match('#^/admin/sonata/page/page/compose/container(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_compose_container_show')), array (  'id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::composeContainerShowAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_compose_container_show',));
                        }

                        // admin_sonata_page_page_tree
                        if ('/admin/sonata/page/page/tree' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageAdminController::treeAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_tree',  '_route' => 'admin_sonata_page_page_tree',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/sonata/page/block')) {
                        // admin_sonata_page_block_list
                        if ('/admin/sonata/page/block/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_list',  '_route' => 'admin_sonata_page_block_list',);
                        }

                        // admin_sonata_page_block_create
                        if ('/admin/sonata/page/block/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_create',  '_route' => 'admin_sonata_page_block_create',);
                        }

                        // admin_sonata_page_block_batch
                        if ('/admin/sonata/page/block/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_batch',  '_route' => 'admin_sonata_page_block_batch',);
                        }

                        // admin_sonata_page_block_edit
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_edit',));
                        }

                        // admin_sonata_page_block_delete
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_delete',));
                        }

                        // admin_sonata_page_block_show
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_show',));
                        }

                        // admin_sonata_page_block_export
                        if ('/admin/sonata/page/block/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_export',  '_route' => 'admin_sonata_page_block_export',);
                        }

                        // admin_sonata_page_block_view
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/view$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_view',));
                        }

                        // admin_sonata_page_block_savePosition
                        if ('/admin/sonata/page/block/save-position' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_savePosition',  '_route' => 'admin_sonata_page_block_savePosition',);
                        }

                        // admin_sonata_page_block_switchParent
                        if ('/admin/sonata/page/block/switch-parent' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::switchParentAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_switchParent',  '_route' => 'admin_sonata_page_block_switchParent',);
                        }

                        // admin_sonata_page_block_composePreview
                        if (preg_match('#^/admin/sonata/page/block/(?P<block_id>[^/]++)/compose_preview$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_composePreview')), array (  'block_id' => NULL,  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::composePreviewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_composePreview',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/block/shared')) {
                            // admin_sonata_page_block/shared_list
                            if ('/admin/sonata/page/block/shared/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_list',  '_route' => 'admin_sonata_page_block/shared_list',);
                            }

                            // admin_sonata_page_block/shared_create
                            if ('/admin/sonata/page/block/shared/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_create',  '_route' => 'admin_sonata_page_block/shared_create',);
                            }

                            // admin_sonata_page_block/shared_batch
                            if ('/admin/sonata/page/block/shared/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_batch',  '_route' => 'admin_sonata_page_block/shared_batch',);
                            }

                            // admin_sonata_page_block/shared_edit
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_edit',));
                            }

                            // admin_sonata_page_block/shared_delete
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_delete',));
                            }

                            // admin_sonata_page_block/shared_show
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_show',));
                            }

                            // admin_sonata_page_block/shared_export
                            if ('/admin/sonata/page/block/shared/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_export',  '_route' => 'admin_sonata_page_block/shared_export',);
                            }

                            // admin_sonata_page_block/shared_view
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/view$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_view')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_view',));
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/sonata/page/snapshot')) {
                        // admin_sonata_page_snapshot_list
                        if ('/admin/sonata/page/snapshot/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_list',  '_route' => 'admin_sonata_page_snapshot_list',);
                        }

                        // admin_sonata_page_snapshot_create
                        if ('/admin/sonata/page/snapshot/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_create',  '_route' => 'admin_sonata_page_snapshot_create',);
                        }

                        // admin_sonata_page_snapshot_batch
                        if ('/admin/sonata/page/snapshot/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_batch',  '_route' => 'admin_sonata_page_snapshot_batch',);
                        }

                        // admin_sonata_page_snapshot_edit
                        if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_edit',));
                        }

                        // admin_sonata_page_snapshot_delete
                        if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_delete',));
                        }

                        // admin_sonata_page_snapshot_show
                        if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_show',));
                        }

                        // admin_sonata_page_snapshot_export
                        if ('/admin/sonata/page/snapshot/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_export',  '_route' => 'admin_sonata_page_snapshot_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/sonata/page/site')) {
                        // admin_sonata_page_site_list
                        if ('/admin/sonata/page/site/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_list',  '_route' => 'admin_sonata_page_site_list',);
                        }

                        // admin_sonata_page_site_create
                        if ('/admin/sonata/page/site/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_create',  '_route' => 'admin_sonata_page_site_create',);
                        }

                        // admin_sonata_page_site_batch
                        if ('/admin/sonata/page/site/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_batch',  '_route' => 'admin_sonata_page_site_batch',);
                        }

                        // admin_sonata_page_site_edit
                        if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_edit',));
                        }

                        // admin_sonata_page_site_delete
                        if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_delete',));
                        }

                        // admin_sonata_page_site_show
                        if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_show',));
                        }

                        // admin_sonata_page_site_export
                        if ('/admin/sonata/page/site/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_export',  '_route' => 'admin_sonata_page_site_export',);
                        }

                        // admin_sonata_page_site_snapshots
                        if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/snapshots$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_snapshots')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::snapshotsAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_snapshots',));
                        }

                    }

                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
