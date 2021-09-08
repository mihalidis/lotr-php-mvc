
<?php
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system (We use Route and RouteCollection classes from the Symfony Routing component in order to create and list all the routes we need.)
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('character', new Route(constant('URL_SUBFOLDER') . '/character/{id}', array('controller' => 'CharacterController', 'method'=>'showAction'), array('id' => '[0-9]+')));