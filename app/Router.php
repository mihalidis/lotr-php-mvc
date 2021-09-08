<?php

namespace App;

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;

class Router
{
    public function __invoke(RouteCollection $routes)
    {
        $context = new RequestContext();

        // Routing can match routes with incoming requests
        // the URL matcher takes in the request URI and will check if there is a match with the routes defined in routes/web.php. If there is a match, the function call_user_func_array will do the magic, calling the right method of the right controller.
        //Moreover, we used the function array_walk to cast the numeric values into integer values, because in our class methods we used the explicit type declaration.
        $matcher = new UrlMatcher($routes, $context);

        try {
            $matcher = $matcher->match($_SERVER['REQUEST_URI']);

            // Cast params to int if numeric
            array_walk($matcher, function(&$param)
            {
                if(is_numeric($param))
                {
                    $param = (int) $param;
                }
            });

            // https://github.com/gmaccario/simple-mvc-php-framework/issues/2
            // Issue #2: Fix Non-static method ... should not be called statically
            $className = '\\App\\Controllers\\' . $matcher['controller'];
            $classInstance = new $className();

            // Add routes as paramaters to the next class
            $params = array_merge(array_slice($matcher, 2, -1), array('routes' => $routes));

            call_user_func_array(array($classInstance, $matcher['method']), $params);

        } catch (MethodNotAllowedException $e) {
            echo 'Route method is not allowed.';
        } catch (ResourceNotFoundException $e) {
            echo 'Route does not exists.';
        } catch (NoConfigurationException $e) {
            echo 'Configuration does not exists.';
        }
    }
}

// Invoke
$router = new Router();
$router($routes);