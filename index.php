<?php
require __DIR__ . "/classes/MovieSearch.php";

// // OMDB API
// $API = 'https://www.omdbapi.com/?apikey=1e6e9ace';

$search = new MovieSearch();

// Utilisation de la fonction searchMovies() pour récupérer les films

require __DIR__ .'/Movies.php';

if (isset($_GET['q'])) {
    $searchTerm = $_GET['q'];
    $search->searchMovies($searchTerm);
    $moviesList = $search->getMovies();

    require_once __DIR__ . '/Movies.php'; // Affiche la liste des films
} else {
    echo "Aucun terme de recherche n'a été fourni.";
}




?>
