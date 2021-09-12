<?php

namespace App\Controllers;

use App\Models\Quote;
use App\Models\Apimodel;
use Symfony\Component\Routing\RouteCollection;

class QuoteController
{
    public function showQuotes(RouteCollection $routes)
    {

        $charactersApi = new Apimodel();
        $moviesApi = new Apimodel();
        $quotesApi = new Apimodel();

        $lotrMovies = $moviesApi->getMovies();
        $lotrCharacters = $charactersApi->getCharacters();
        $lotrQuotes = $quotesApi->getQuotes();

        $quoteDetails = [];

        foreach ($lotrQuotes["docs"] as $quote){

            $quoteNew = new Quote();

            $quoteNew->setMovie($quote['movie'], $lotrMovies);
            $quoteNew->setCharacter($quote['character'], $lotrCharacters);
            $quoteNew->setDialog($quote['dialog']);

            $quoteDetails[] = $quoteNew;
        };

        require_once APP_ROOT . '/views/quotes.php';
    }
}