<?php

$imdb = 'https://imdb.com/title/';

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['q'])) {
    require_once './classes/MovieSearch.php';

    $search = new MovieSearch();
    $moviesList = $search->searchMovies($_GET['q']);
}
if (isset($moviesList) && !empty($moviesList)) {
    ?>
    <div class="movies">
        <?php foreach ($moviesList as $movie): ?>
            <div class="movie">
                <div class="movie-info">
                    <img src="<?= ($movie['Poster'] !== 'N/A' ? $movie['Poster'] : 'https://placehold.co/300x450/000000/FFF?text=Non+disponible') ?>"
                        alt="<?= $movie['Title'] ?>" />
                    <h3>
                        <?= $movie['Title'] ?>
                    </h3>
                    <p><a href="<?= $imdb . $movie['imdbID'] ?>" target="_blank">Voir sur IMDB</a></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </body>
    <?php
} else if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['q'])) {
    echo 'Aucun film trouvé pour la recherche : ' . $_GET['q'];
}
?>