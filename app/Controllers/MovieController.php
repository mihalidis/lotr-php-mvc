<?php

namespace App\Controllers;

use App\Models\Movie;
use App\Models\Apimodel;
use Symfony\Component\Routing\RouteCollection;

class MovieController
{
    public function showMovies(RouteCollection $routes)
    {
        $moviesApi = new Apimodel();
        $lotrMovies = $moviesApi->getMovies();

        $movieDetails = [];

        foreach ($lotrMovies["docs"] as $movie){
            $movieNew = new Movie();

            $movieNew->setName($movie['name']);
            $movieNew->setBudgetInMillions((string) $movie['budgetInMillions']);
            $movieNew->setAcademyAwardNominations((string) $movie['academyAwardNominations']);
            $movieNew->setAcademyAwardWins((string) $movie['academyAwardWins']);
            $movieNew->setRottenTomatoesScore((string) $movie['rottenTomatoesScore']);

            $movieDetails[] = $movieNew;
        }

        require_once APP_ROOT . '/views/movies.php';
    }
}