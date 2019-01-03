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


        // tasks
        if (preg_match('#^/(?P<_locale>[^/]++)/tasks$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasks')), array (  '_controller' => 'Lljm\\TasksBundle\\Controller\\DefaultController::indexAction',));
        }

        // tasks_taskadd
        if (preg_match('#^/(?P<_locale>[^/]++)/taskadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasks_taskadd')), array (  '_controller' => 'Lljm\\TasksBundle\\Controller\\DefaultController::taskaddAction',));
        }

        // tasks_taskdel
        if (preg_match('#^/(?P<_locale>[^/]++)/taskdel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasks_taskdel')), array (  '_controller' => 'Lljm\\TasksBundle\\Controller\\DefaultController::taskdelAction',));
        }

        // tasks_taskedit
        if (preg_match('#^/(?P<_locale>[^/]++)/taskedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasks_taskedit')), array (  '_controller' => 'Lljm\\TasksBundle\\Controller\\DefaultController::taskeditAction',));
        }

        // geolocation_index
        if (preg_match('#^/(?P<_locale>[^/]++)/geolocation_index(?:/(?P<datefrom>[^/,]++)(?:,(?P<dateto>[^/,]++)(?:,(?P<userid>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'geolocation_index')), array (  '_controller' => 'Lljm\\GeolocationBundle\\Controller\\DefaultController::indexAction',  'datefrom' => '',  'dateto' => '',  'userid' => '',));
        }

        // geolocation_remotelog
        if (0 === strpos($pathinfo, '/geolocation_remotelog') && preg_match('#^/geolocation_remotelog/(?P<userid>[^/,]++),(?P<latitude>[^/,]++),(?P<longitude>[^/,]++),(?P<altitude>[^/,]++),(?P<speed>[^/,]++),(?P<direction>[^/,]++),(?P<battery>[^/,]++),(?P<logdate>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'geolocation_remotelog')), array (  '_controller' => 'Lljm\\GeolocationBundle\\Controller\\RemotelogController::logrecordAction',));
        }

        // admin_user
        if (preg_match('#^/(?P<_locale>[^/]++)/admin_user$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user')), array (  '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::indexAction',));
        }

        // admin_useradd
        if (preg_match('#^/(?P<_locale>[^/]++)/admin_useradd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_useradd')), array (  '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::adduserAction',));
        }

        // admin_userdel
        if (preg_match('#^/(?P<_locale>[^/]++)/admin_userdel/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_userdel')), array (  '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::deluserAction',));
        }

        // admin_useredit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin_useredit/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_useredit')), array (  '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::edituserAction',));
        }

        // health_weight
        if (preg_match('#^/(?P<_locale>[^/]++)/weight(?:/(?P<datefrom>[^/,]++)(?:,(?P<dateto>[^/,]++)(?:,(?P<user>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'health_weight')), array (  '_controller' => 'Lljm\\HealthBundle\\Controller\\WeightController::indexAction',  'datefrom' => '',  'dateto' => '',  'user' => '',));
        }

        // health_weightadd
        if (preg_match('#^/(?P<_locale>[^/]++)/weightadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'health_weightadd')), array (  '_controller' => 'Lljm\\HealthBundle\\Controller\\WeightController::weightaddAction',));
        }

        // health_height
        if (preg_match('#^/(?P<_locale>[^/]++)/height(?:/(?P<datefrom>[^/,]++)(?:,(?P<dateto>[^/,]++)(?:,(?P<user>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'health_height')), array (  '_controller' => 'Lljm\\HealthBundle\\Controller\\HeightController::indexAction',  'datefrom' => '',  'dateto' => '',  'user' => '',));
        }

        // health_heightadd
        if (preg_match('#^/(?P<_locale>[^/]++)/heightadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'health_heightadd')), array (  '_controller' => 'Lljm\\HealthBundle\\Controller\\HeightController::heightaddAction',));
        }

        // lljm_home_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lljm_home_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lljm_home_homepage')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\DefaultController::indexAction',));
        }

        // home_about
        if (preg_match('#^/(?P<_locale>[^/]++)/about$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_about')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\AboutController::indexAction',));
        }

        // home_house
        if (preg_match('#^/(?P<_locale>[^/]++)/house$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_house')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::houseAction',));
        }

        // home_houseadd
        if (preg_match('#^/(?P<_locale>[^/]++)/houseadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_houseadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::houseaddAction',));
        }

        // home_houseedit
        if (preg_match('#^/(?P<_locale>[^/]++)/houseedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_houseedit')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::houseeditAction',));
        }

        // home_housedel
        if (preg_match('#^/(?P<_locale>[^/]++)/housedel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_housedel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::housedelAction',));
        }

        // home_zone
        if (preg_match('#^/(?P<_locale>[^/]++)/zone$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_zone')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zoneAction',));
        }

        // home_zoneadd
        if (preg_match('#^/(?P<_locale>[^/]++)/zoneadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_zoneadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zoneaddAction',));
        }

        // home_zoneedit
        if (preg_match('#^/(?P<_locale>[^/]++)/zoneedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_zoneedit')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zoneeditAction',));
        }

        // home_zonedel
        if (preg_match('#^/(?P<_locale>[^/]++)/zonedel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_zonedel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zonedelAction',));
        }

        // home_subzone
        if (preg_match('#^/(?P<_locale>[^/]++)/subzone$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_subzone')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzoneAction',));
        }

        // home_subzoneadd
        if (preg_match('#^/(?P<_locale>[^/]++)/subzoneadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_subzoneadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzoneaddAction',));
        }

        // home_subzoneedit
        if (preg_match('#^/(?P<_locale>[^/]++)/subzoneedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_subzoneedit')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzoneeditAction',));
        }

        // home_subzonedel
        if (preg_match('#^/(?P<_locale>[^/]++)/subzonedel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_subzonedel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzonedelAction',));
        }

        // home_node
        if (preg_match('#^/(?P<_locale>[^/]++)/node$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_node')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodeAction',));
        }

        // home_nodeadd
        if (preg_match('#^/(?P<_locale>[^/]++)/nodeadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_nodeadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodeaddAction',));
        }

        // home_nodeedit
        if (preg_match('#^/(?P<_locale>[^/]++)/nodeedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_nodeedit')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodeeditAction',));
        }

        // home_nodedel
        if (preg_match('#^/(?P<_locale>[^/]++)/nodedel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_nodedel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodedelAction',));
        }

        // home_tempvisual
        if (preg_match('#^/(?P<_locale>[^/]++)/tempvisual(?:/(?P<daterx>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_tempvisual')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\TempvisualController::indexAction',  'daterx' => '',));
        }

        // home_humidvisual
        if (preg_match('#^/(?P<_locale>[^/]++)/humidvisual(?:/(?P<daterx>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_humidvisual')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HumidvisualController::indexAction',  'daterx' => '',));
        }

        // home_elecvisual
        if (preg_match('#^/(?P<_locale>[^/]++)/elecvisual$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_elecvisual')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ElecvisualController::yearoverviewAction',));
        }

        // home_eleclogdel
        if (preg_match('#^/(?P<_locale>[^/]++)/eleclogdel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_eleclogdel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ElecvisualController::logdelAction',));
        }

        // home_eleclogadd
        if (preg_match('#^/(?P<_locale>[^/]++)/eleclogadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_eleclogadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\ElecvisualController::logaddAction',));
        }

        // home_watervisual
        if (preg_match('#^/(?P<_locale>[^/]++)/watervisual$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_watervisual')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\WatervisualController::yearoverviewAction',));
        }

        // home_waterlogdel
        if (preg_match('#^/(?P<_locale>[^/]++)/waterlogdel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_waterlogdel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\WatervisualController::logdelAction',));
        }

        // home_waterlogadd
        if (preg_match('#^/(?P<_locale>[^/]++)/waterlogadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_waterlogadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\WatervisualController::logaddAction',));
        }

        // home_gasvisual
        if (preg_match('#^/(?P<_locale>[^/]++)/gasvisual$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_gasvisual')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\GasvisualController::yearoverviewAction',));
        }

        // home_gaslogdel
        if (preg_match('#^/(?P<_locale>[^/]++)/gaslogdel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_gaslogdel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\GasvisualController::logdelAction',));
        }

        // home_gaslogadd
        if (preg_match('#^/(?P<_locale>[^/]++)/gaslogadd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_gaslogadd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\GasvisualController::logaddAction',));
        }

        // home_meter
        if (preg_match('#^/(?P<_locale>[^/]++)/meter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_meter')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::meterAction',));
        }

        // home_meteradd
        if (preg_match('#^/(?P<_locale>[^/]++)/meteradd$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_meteradd')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::meteraddAction',));
        }

        // home_meteredit
        if (preg_match('#^/(?P<_locale>[^/]++)/meteredit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_meteredit')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::metereditAction',));
        }

        // home_meterdel
        if (preg_match('#^/(?P<_locale>[^/]++)/meterdel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_meterdel')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::meterdelAction',));
        }

        // home_action_light
        if (preg_match('#^/(?P<_locale>[^/]++)/action_light$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_action_light')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\LightController::indexAction',));
        }

        // home_action_heating
        if (preg_match('#^/(?P<_locale>[^/]++)/action_heating$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_action_heating')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::indexAction',));
        }

        // home_action_heatingedit
        if (preg_match('#^/(?P<_locale>[^/]++)/action_heatingedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_action_heatingedit')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::editAction',));
        }

        // home_zoneheatingmodeupdate
        if (preg_match('#^/(?P<_locale>[^/]++)/zoneheatingmodeupdate(?:/(?P<heatingmode>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_zoneheatingmodeupdate')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::allzoneupdateAction',  'heatingmode' => '',));
        }

        // home_action_ventilation
        if (preg_match('#^/(?P<_locale>[^/]++)/action_ventilation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_action_ventilation')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\VentilationController::indexAction',));
        }

        // home_onezoneheatingmodeupdate
        if (preg_match('#^/(?P<_locale>[^/]++)/onezoneheatingmodeupdate/(?P<heatingmode>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_onezoneheatingmodeupdate')), array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::onezoneupdateAction',  'heatingmode' => '',  'zoneid' => '',));
        }

        // lljm_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lljm_homepage');
            }

            return array (  '_controller' => 'Lljm\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'lljm_homepage',);
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>[^/]++)/login$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',));
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>[^/]++)/login_check$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>[^/]++)/logout$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',));
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_profile_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',));
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>[^/]++)/register/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',));
        }
        not_fos_user_registration_register:

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/register/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirmed$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/request$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
