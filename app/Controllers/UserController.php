<?php

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class UserController  {

    public function registerUser(RouteCollection $routes) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User();
            $create_user = $user->create($_POST);
            if($create_user) {
                $last_id = $user->connect()->lastInsertId();
                require_once APP_ROOT . '/views/home.php';
            }
        } else {
            require_once APP_ROOT . '/views/register.php';
        }
    }


    public function loginUser(RouteCollection $routes) {
        require_once APP_ROOT . '/views/login.php';
    }
}
