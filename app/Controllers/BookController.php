<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\Apimodel;
use Symfony\Component\Routing\RouteCollection;

class BookController
{
    public function showBooks(RouteCollection $routes)
    {
        $booksApi = new Apimodel();

        $lotrBooks = $booksApi->getBooks();

        $bookDetails = [];

        foreach ($lotrBooks["docs"] as $book){
            $bookNew = new Book();
            $bookNew->setName($book['name']);

            $bookDetails[] = $bookNew;
        }

        require_once APP_ROOT . '/views/books.php';
    }
}