<?php

namespace App\Controllers;

use App\Models\Character;
use Symfony\Component\Routing\RouteCollection;

class CharacterController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $character = new Character();
        $character->read($id);

        require_once APP_ROOT . '/views/character.php';
    }
}