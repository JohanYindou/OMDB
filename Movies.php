<?php
$imdb = 'https://imdb.com/title/';
?>
<div>
    <h1>OMDB API</h1>
    <form >
        <label for="searchTerm">Effectuer une recherche :</label>
        <input type="text" id="searchTerm" name="q" required>
        <button type="submit">Rechercher</button>
    </form>
</div>

<?php
if (!empty($moviesList)) {
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
} else {
    echo 'Aucun film trouvé. ';
}
?>