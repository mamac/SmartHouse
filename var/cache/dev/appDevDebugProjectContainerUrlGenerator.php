<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'geolocation_index' => array (  0 =>   array (    0 => '_locale',    1 => 'datefrom',    2 => 'dateto',    3 => 'userid',  ),  1 =>   array (    '_controller' => 'Lljm\\GeolocationBundle\\Controller\\DefaultController::indexAction',    'datefrom' => '',    'dateto' => '',    'userid' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/]++',      3 => 'userid',    ),    1 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'dateto',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/,]++',      3 => 'datefrom',    ),    3 =>     array (      0 => 'text',      1 => '/geolocation_index',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'geolocation_remotelog' => array (  0 =>   array (    0 => 'userid',    1 => 'latitude',    2 => 'longitude',    3 => 'altitude',    4 => 'speed',    5 => 'direction',    6 => 'battery',    7 => 'logdate',  ),  1 =>   array (    '_controller' => 'Lljm\\GeolocationBundle\\Controller\\RemotelogController::logrecordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/]++',      3 => 'logdate',    ),    1 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'battery',    ),    2 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'direction',    ),    3 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'speed',    ),    4 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'altitude',    ),    5 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'longitude',    ),    6 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'latitude',    ),    7 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/,]++',      3 => 'userid',    ),    8 =>     array (      0 => 'text',      1 => '/geolocation_remotelog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_user',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_useradd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::adduserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_useradd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_userdel' => array (  0 =>   array (    0 => '_locale',    1 => 'username',  ),  1 =>   array (    '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::deluserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    1 =>     array (      0 => 'text',      1 => '/admin_userdel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_useredit' => array (  0 =>   array (    0 => '_locale',    1 => 'username',  ),  1 =>   array (    '_controller' => 'Lljm\\AdminBundle\\Controller\\UserController::edituserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    1 =>     array (      0 => 'text',      1 => '/admin_useredit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'health_weight' => array (  0 =>   array (    0 => '_locale',    1 => 'datefrom',    2 => 'dateto',    3 => 'user',  ),  1 =>   array (    '_controller' => 'Lljm\\HealthBundle\\Controller\\WeightController::indexAction',    'datefrom' => '',    'dateto' => '',    'user' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/]++',      3 => 'user',    ),    1 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'dateto',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/,]++',      3 => 'datefrom',    ),    3 =>     array (      0 => 'text',      1 => '/weight',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'health_weightadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HealthBundle\\Controller\\WeightController::weightaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/weightadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'health_height' => array (  0 =>   array (    0 => '_locale',    1 => 'datefrom',    2 => 'dateto',    3 => 'user',  ),  1 =>   array (    '_controller' => 'Lljm\\HealthBundle\\Controller\\HeightController::indexAction',    'datefrom' => '',    'dateto' => '',    'user' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/]++',      3 => 'user',    ),    1 =>     array (      0 => 'variable',      1 => ',',      2 => '[^/,]++',      3 => 'dateto',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/,]++',      3 => 'datefrom',    ),    3 =>     array (      0 => 'text',      1 => '/height',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'health_heightadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HealthBundle\\Controller\\HeightController::heightaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/heightadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lljm_home_homepage' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_about' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\AboutController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_house' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::houseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/house',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_houseadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::houseaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/houseadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_houseedit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::houseeditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/houseedit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_housedel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HouseController::housedelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/housedel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_zone' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zone',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_zoneadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zoneaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zoneadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_zoneedit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zoneeditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zoneedit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_zonedel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ZoneController::zonedelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zonedel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_subzone' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subzone',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_subzoneadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzoneaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subzoneadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_subzoneedit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzoneeditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/subzoneedit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_subzonedel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\SubzoneController::subzonedelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/subzonedel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_node' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/node',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_nodeadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodeaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nodeadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_nodeedit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodeeditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/nodeedit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_nodedel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\NodeController::nodedelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/nodedel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_tempvisual' => array (  0 =>   array (    0 => '_locale',    1 => 'daterx',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\TempvisualController::indexAction',    'daterx' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'daterx',    ),    1 =>     array (      0 => 'text',      1 => '/tempvisual',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_humidvisual' => array (  0 =>   array (    0 => '_locale',    1 => 'daterx',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HumidvisualController::indexAction',    'daterx' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'daterx',    ),    1 =>     array (      0 => 'text',      1 => '/humidvisual',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_elecvisual' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ElecvisualController::yearoverviewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/elecvisual',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_eleclogdel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ElecvisualController::logdelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eleclogdel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_eleclogadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\ElecvisualController::logaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleclogadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_watervisual' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\WatervisualController::yearoverviewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/watervisual',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_waterlogdel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\WatervisualController::logdelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/waterlogdel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_waterlogadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\WatervisualController::logaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/waterlogadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_gasvisual' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\GasvisualController::yearoverviewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gasvisual',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_gaslogdel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\GasvisualController::logdelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gaslogdel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_gaslogadd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\GasvisualController::logaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gaslogadd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_meter' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::meterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/meter',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_meteradd' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::meteraddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/meteradd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_meteredit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::metereditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/meteredit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_meterdel' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\MeterController::meterdelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/meterdel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_action_light' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\LightController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/action_light',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_action_heating' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/action_heating',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_action_heatingedit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/action_heatingedit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_zoneheatingmodeupdate' => array (  0 =>   array (    0 => '_locale',    1 => 'heatingmode',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::allzoneupdateAction',    'heatingmode' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'heatingmode',    ),    1 =>     array (      0 => 'text',      1 => '/zoneheatingmodeupdate',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_action_ventilation' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\VentilationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/action_ventilation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_onezoneheatingmodeupdate' => array (  0 =>   array (    0 => '_locale',    1 => 'heatingmode',    2 => 'id',  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\HeatingController::onezoneupdateAction',    'heatingmode' => '',    'zoneid' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'heatingmode',    ),    2 =>     array (      0 => 'text',      1 => '/onezoneheatingmodeupdate',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lljm_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lljm\\HomeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => '_locale',    1 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => '_locale',    1 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
