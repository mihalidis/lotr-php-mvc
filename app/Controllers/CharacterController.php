<?php
namespace App\Controllers;

use App\Models\Character;
use App\Models\Apimodel;
use Symfony\Component\Routing\RouteCollection;

class CharacterController
{
    // getting character infos from API
    public function showCharacters(RouteCollection $routes)
    {
        $charactersApi = new Apimodel();

        $lotrCharacters = $charactersApi->getCharacters();

        $characterDetails = [];

        foreach ($lotrCharacters["docs"] as $character){
            $characterNew = new Character();

            $characterNew->setName($character['name']);
            $characterNew->setRace($character['race']);
            $characterNew->setRealm($character['realm']);

            if($characterNew->getRace() != '' || $characterNew->getRace() != NULL) {
                $characterDetails[] = $characterNew;
            }

        }

        require_once APP_ROOT . '/views/characters.php';
    }
}