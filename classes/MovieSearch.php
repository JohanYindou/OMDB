<?php

class MovieSearch
{
    public $apiKey = '1e6e9ace';
    public $apiURL = 'https://www.omdbapi.com/';

    private $movies = [];
    private $search = '';

    public function searchMovies($searchValue)
    {
        $url = $this->apiURL . '?apikey=' . $this->apiKey . '&s=' . urlencode($searchValue);
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (isset($data['Search'])) {
            $this->setMovies($data['Search']);
        }

        return $data['Search'] ?? [];
    }

    public function setMovies($movies)
    {
        $this->movies = $movies;
    }

    public function getMovies()
    {
        return $this->movies;
    }

    public function setSearch($search)
    {
        $this->search = $search;
    }

    public function getSearch()
    {
        return $this->search;
    }
}