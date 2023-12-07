<?php
require __DIR__ . "/classes/MovieSearch.php";

// // OMDB API
// $API = 'https://www.omdbapi.com/?apikey=1e6e9ace';

$search = new MovieSearch();

// Utilisation de la fonction searchMovies() pour récupérer les films
?>

<head>
    <meta charset="UTF-8">
    <title>
        TP OMDB
    </title>
    <style>
        <?php include './styles/style.css'; ?>
    </style>
</head>

<body>
    <div>
        <h1>OMDB API</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
            <label for="searchTerm">Effectuer une recherche :</label>
            <input type="text" id="searchTerm" name="q" required>
            <button type="submit">Rechercher</button>
        </form>
    </div>

    <?php

    require __DIR__ . '/Movies.php';

    if (isset($_GET['q'])) {
        $searchTerm = $_GET['q'];
        $search->searchMovies($searchTerm);
        $moviesList = $search->getMovies();

        require_once __DIR__ . '/Movies.php'; // Affiche la liste des films
    } else {
        echo "Aucun terme de recherche n'a été fourni.";
    }

    ?>