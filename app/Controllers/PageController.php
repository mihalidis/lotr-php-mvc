<?php

namespace App\Controllers;

use App\Models\Character;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        $routeToProduct = str_replace('{id}', 1, $routes->get('character')->getPath());

        require_once APP_ROOT . '/views/home.php';
    }
}