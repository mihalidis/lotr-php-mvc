
<?php
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system (We use Route and RouteCollection classes from the Symfony Routing component in order to create and list all the routes we need.)
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));

$routes->add('characters', new Route(constant('URL_SUBFOLDER') . '/characters', array('controller' => 'CharacterController', 'method'=>'showCharacters'), array()));

$routes->add('books', new Route(constant('URL_SUBFOLDER') . '/books', array('controller' => 'BookController', 'method'=>'showBooks'), array()));

$routes->add('movies', new Route(constant('URL_SUBFOLDER') . '/movies', array('controller' => 'MovieController', 'method'=>'showMovies'), array()));

$routes->add('quotes', new Route(constant('URL_SUBFOLDER') . '/quotes', array('controller' => 'QuoteController', 'method'=>'showQuotes'), array()));

// auth pages
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'UserController', 'method'=>'registerUser'), array()));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'UserController', 'method'=>'loginUser'), array()));