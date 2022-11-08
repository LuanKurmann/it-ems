<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('article', new Route(constant('URL_SUBFOLDER') . '/article/{id}', array('controller' => 'ArticleController', 'method'=>'showAction'), array('id' => '[0-9]+')));