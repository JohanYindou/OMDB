# TP OMDB

Ce projet utilise l'API OMDB (Open Movie Database) pour effectuer des recherches de films et afficher les détails des films trouvés.

## Description

Ce projet est une application simple permettant de rechercher des informations sur des films en utilisant l'API OMDB. L'application propose un formulaire de recherche où les utilisateurs peuvent saisir le titre d'un film pour obtenir des détails comme le titre, l'affiche, etc.

## Fonctionnalités

- Recherche de films par titre
- Affichage des détails des films trouvés
- Accès aux détails des films sur le site IMDB

## Structure du projet

Le projet est organisé de la manière suivante :

- **`MovieSearch.php`**: Classe pour interagir avec l'API OMDB et effectuer des recherches de films.
- **`index.php`**: Fichier principal de l'application, affiche le formulaire de recherche et les résultats de la recherche.
- **`Movies.php`**: Fichier qui composant qui affiche les films
- **`README.md`**: Ce fichier, contenant des informations sur le projet.

## Installation

1. Cloner le dépôt : `git clone https://github.com/JohanYindou/OMDB`
2. Placer les fichiers sur un serveur web ou local (WAMP, XAMPP, etc.).
3. Assurez-vous d'avoir une connexion Internet active pour effectuer les requêtes à l'API OMDB.

## Utilisation

1. Ouvrez le navigateur et accédez à l'URL où les fichiers du projet sont hébergés.
2. Sur la page principale (`index.php`), saisissez le titre d'un film dans le formulaire de recherche.
3. Soumettez le formulaire pour afficher les détails des films correspondants.

## Remarques

- Assurez-vous d'avoir une clé API valide pour l'API OMDB et de l'ajouter dans le fichier `MovieSearch.php` pour que les requêtes fonctionnent correctement.
- Ce projet est à but éducatif et peut être étendu pour inclure plus de fonctionnalités ou une meilleure interface utilisateur.
