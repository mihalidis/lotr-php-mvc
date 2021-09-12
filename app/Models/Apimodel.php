<?php

namespace app\Models;

class Apimodel
{
    protected $books;
    protected $characters;
    protected $movies;
    protected $quotes;

    public function getBooks()
    {
        $url = "https://the-one-api.dev/v2/book";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Authorization: Bearer " . API_KEY,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $this->books = json_decode($resp, true);

        return $this->books;
    }

    public function getCharacters()
    {
        $url = "https://the-one-api.dev/v2/character";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Authorization: Bearer " . API_KEY,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $this->characters = json_decode($resp, true);

        return $this->characters;
    }

    public function getMovies()
    {
        $url = "https://the-one-api.dev/v2/movie";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Authorization: Bearer " . API_KEY,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $this->movies = json_decode($resp, true);

        return $this->movies;
    }

    public function getQuotes()
    {
        $url = "https://the-one-api.dev/v2/quote";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Authorization: Bearer " . API_KEY,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $this->quotes = json_decode($resp, true);

        return $this->quotes;
    }

    public function setBooks($books): void
    {
        $this->books = $books;
    }

    public function setCharacters($characters): void
    {
        $this->characters = $characters;
    }

    public function setMovies($movies): void
    {
        $this->movies = $movies;
    }

    public function setQuotes($quotes): void
    {
        $this->quotes = $quotes;
    }
}