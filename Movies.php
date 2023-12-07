<?php
$imdb = 'https://imdb.com/title/';

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['q'])) {
    require_once './classes/MovieSearch.php';

    $search = new MovieSearch();
    $moviesList = $search->searchMovies($_GET['q']);
}
?>

<div>
    <h1>OMDB API</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        <label for="searchTerm">Effectuer une recherche :</label>
        <input type="text" id="searchTerm" name="q" required>
        <button type="submit">Rechercher</button>
    </form>
</div>

<?php
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
                    <p>Voir les détails <a href="<?= $imdb . $movie['imdbID'] ?>" target="_blank">IMDB</a></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
} else if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['q'])) {
    echo 'Aucun film trouvé pour la recherche : ' . $_GET['q'];
}
?>