<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('article', new Route(constant('URL_SUBFOLDER') . '/article/{id}', array('controller' => 'ArticleController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('mail', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'mailer', 'method'=>'indexAction'), array()));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'LoginController', 'method'=>'indexAction'), array()));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'LogoutController', 'method' => 'indexAction'), array()));
$routes->add('registration', new Route(constant('URL_SUBFOLDER') . '/registration', array('controller' => 'RegistrationController', 'method' => 'indexAction')));
