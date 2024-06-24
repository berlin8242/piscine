### Chapitre 9 : La Quête Ultime - Créer un Site Pokémon

Bravo, jeune dresseur ! Tu es maintenant prêt pour le défi ultime : créer un site web dédié aux Pokémon en utilisant toutes les compétences que tu as acquises jusqu'à présent. Ce projet te permettra de mettre en pratique Bootstrap, PHP, JavaScript, et le modèle MVC pour créer une application complète. Prépare-toi à relever des défis encore plus exaltants !

#### **Niveau 9 : Le Maître Pokémon (Maîtrise)**

**Mission 81 : La page d'accueil Pokémon**

- **Objectif** : Crée une page d'accueil pour le site Pokémon.
- **Description** : Utilise Bootstrap pour créer une page d'accueil accueillante avec des informations sur le site.
- **XP** : 60 points
- **Documentation** : [Bootstrap Navbar](https://getbootstrap.com/docs/5.0/components/navbar/), [Bootstrap Jumbotron](https://getbootstrap.com/docs/5.0/components/jumbotron/)

**Mission 82 : Le modèle de données Pokémon**

- **Objectif** : Crée un modèle en PHP pour gérer les données des Pokémon.
- **Description** : Utilise PHP pour définir un modèle de données pour les Pokémon, incluant leurs caractéristiques.
- **XP** : 65 points
- **Documentation** : [PHP Classes and Objects](https://www.php.net/manual/en/language.oop5.basic.php)

**Mission 83 : Le contrôleur Pokémon**

- **Objectif** : Crée un contrôleur en PHP pour gérer les interactions avec les Pokémon.
- **Description** : Utilise PHP pour créer un contrôleur qui gère les requêtes liées aux Pokémon.
- **XP** : 65 points
- **Documentation** : [PHP MVC Controller](https://www.php.net/manual/en/language.oop5.php)

**Mission 84 : La vue des Pokémon**

- **Objectif** : Crée une vue en PHP pour afficher les Pokémon.
- **Description** : Utilise Bootstrap pour styliser la vue des Pokémon.
- **XP** : 65 points
- **Documentation** : [Bootstrap Cards](https://getbootstrap.com/docs/5.0/components/card/)

**Mission 85 : La recherche de Pokémon**

- **Objectif** : Implémente une fonctionnalité de recherche pour trouver des Pokémon.
- **Description** : Utilise JavaScript et PHP pour créer une barre de recherche dynamique.
- **XP** : 70 points
- **Documentation** : [JavaScript Fetch API](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API), [PHP Form Handling](https://www.w3schools.com/php/php_forms.asp)

**Mission 86 : L'ajout de Pokémon**

- **Objectif** : Crée un formulaire pour ajouter de nouveaux Pokémon.
- **Description** : Utilise Bootstrap pour styliser le formulaire et PHP pour traiter les données.
- **XP** : 70 points
- **Documentation** : [Bootstrap Forms](https://getbootstrap.com/docs/5.0/forms/overview/)

**Mission 87 : La mise à jour des Pokémon**

- **Objectif** : Implémente une fonctionnalité pour mettre à jour les informations des Pokémon.
- **Description** : Utilise PHP et JavaScript pour permettre la mise à jour des données des Pokémon.
- **XP** : 70 points
- **Documentation** : [PHP File Handling](https://www.w3schools.com/php/php_file_create.asp), [JavaScript DOM Manipulation](https://www.w3schools.com/js/js_htmldom.asp)

**Mission 88 : La suppression de Pokémon**

- **Objectif** : Implémente une fonctionnalité pour supprimer des Pokémon.
- **Description** : Utilise PHP pour gérer la suppression des Pokémon et JavaScript pour l'interaction utilisateur.
- **XP** : 70 points
- **Documentation** : [PHP File Handling](https://www.w3schools.com/php/php_file_create.asp)

**Mission 89 : La page de détails Pokémon**

- **Objectif** : Crée une page de détails pour chaque Pokémon.
- **Description** : Utilise PHP et Bootstrap pour afficher les détails de chaque Pokémon de manière attrayante.
- **XP** : 75 points
- **Documentation** : [Bootstrap Modal](https://getbootstrap.com/docs/5.0/components/modal/)

**Mission 90 : Le déploiement du site Pokémon**

- **Objectif** : Déploie le site Pokémon sur un serveur.
- **Description** : Utilise un service d'hébergement web pour déployer ton site Pokémon en ligne.
- **XP** : 80 points
- **Documentation** : [Deploy PHP Application](https://www.php.net/manual/en/install.php)

---

### Détails des Missions

#### **Mission 81 : La page d'accueil Pokémon**

- **Description** : Crée une page d'accueil accueillante avec une navigation et une introduction au site.
- **Exemple HTML** :
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Pokémon Site</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Pokémon Site</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Pokémon</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <div class="container mt-5">
          <div class="jumbotron">
              <h1 class="display-4">Bienvenue sur le site Pokémon</h1>
              <p class="lead">Découvrez et gérez vos Pokémon préférés.</p>
              <hr class="my-4">
              <p>Utilisez la barre de navigation pour explorer les fonctionnalités du site.</p>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```

#### **Mission 82 : Le modèle de données Pokémon**

- **Description** : Crée un modèle PHP pour gérer les données des Pokémon.
- **Exemple PHP** :
  ```php
  <!-- models/PokemonModel.php -->
  <?php
  class PokemonModel {
      private $pokemons = [];

      public function __construct() {
          if (file_exists('pokemons.json')) {
              $this->pokemons = json_decode(file_get_contents('pokemons.json'), true);
          }
      }

      public function getAllPokemons() {
          return $this->pokemons;
      }

      public function addPokemon($pokemon) {
          $this->pokemons[] = $pokemon;
          file_put_contents('pokemons.json', json_encode($this->pokemons));
      }

      public function updatePokemon($index, $pokemon) {
          $this->pokemons[$index] = $pokemon;
          file_put_contents('pokemons.json', json_encode($this->pokemons));
      }

      public function deletePokemon($index) {
          array_splice($this->pokemons, $index, 1);
          file_put_contents('pokemons.json', json_encode($this->pokemons));
      }
  }
  ```

#### **Mission 83 : Le contrôleur Pokémon**

- **Description** : Crée un contrôleur en PHP pour gérer les interactions avec les Pokémon.
- **Exemple PHP** :
  ```php
  <!-- controllers/PokemonController.php -->
  <?php
  class PokemonController {
      private $model;

      public function __construct($model) {
          $this->model = $model;
      }

      public function listPokemons() {
          $pokemons = $this->model->getAllPokemons();
          require 'views/pokemon_list.php';
      }

      public function addPokemon($pokemon) {
          $this->model->addPokemon($pokemon);
      }

      public function updatePokemon($index, $pokemon) {
          $this->model->updatePokemon($index, $pokemon);
      }

      public function deletePokemon($index) {
          $this->model->deletePokemon($index);
      }
  }
  ```

#### **Mission 84 : La vue des Pokémon**

- **Description** : Crée une vue en PHP pour afficher les Pokémon avec Bootstrap.
- **Exemple PHP/HTML** :
  ```php
  <!-- views/pokemon_list.php -->
  <?php
  require 'models/PokemonModel.php';
  $model = new PokemonModel();
  $pokemons = $model->getAllPokemons();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <

link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Pokémon List</title>
  </head>
  <body>
      <div class="container mt-5">
          <h1>Pokémon List</h1>
          <div class="row">
              <?php foreach ($pokemons as $index => $pokemon): ?>
                  <div class="col-md-4">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $pokemon['name']; ?></h5>
                              <p class="card-text">Type: <?php echo $pokemon['type']; ?></p>
                              <p class="card-text">Level: <?php echo $pokemon['level']; ?></p>
                              <a href="#" class="btn btn-primary">View Details</a>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```

#### **Mission 85 : La recherche de Pokémon**

- **Description** : Implémente une barre de recherche dynamique pour trouver des Pokémon.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Search Pokémon</title>
  </head>
  <body>
      <div class="container mt-5">
          <h1>Search Pokémon</h1>
          <input type="text" id="searchInput" class="form-control" placeholder="Search Pokémon..." onkeyup="searchPokemon()">
          <div id="pokemonList" class="row mt-3">
              <!-- Pokémon list will be populated by PHP -->
              <?php
              require 'models/PokemonModel.php';
              $model = new PokemonModel();
              $pokemons = $model->getAllPokemons();
              foreach ($pokemons as $index => $pokemon): ?>
                  <div class="col-md-4 pokemon-item">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $pokemon['name']; ?></h5>
                              <p class="card-text">Type: <?php echo $pokemon['type']; ?></p>
                              <p class="card-text">Level: <?php echo $pokemon['level']; ?></p>
                              <a href="#" class="btn btn-primary">View Details</a>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
      <script>
          function searchPokemon() {
              let input = document.getElementById('searchInput').value.toUpperCase();
              let items = document.getElementsByClassName('pokemon-item');
              for (let i = 0; i < items.length; i++) {
                  let title = items[i].getElementsByClassName('card-title')[0];
                  if (title.innerHTML.toUpperCase().indexOf(input) > -1) {
                      items[i].style.display = "";
                  } else {
                      items[i].style.display = "none";
                  }
              }
          }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```

#### **Mission 86 : L'ajout de Pokémon**

- **Description** : Crée un formulaire pour ajouter de nouveaux Pokémon.
- **Exemple HTML/PHP** :
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Add Pokémon</title>
  </head>
  <body>
      <div class="container mt-5">
          <h1>Add New Pokémon</h1>
          <form action="add_pokemon.php" method="post">
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" class="form-control" id="type" name="type" required>
              </div>
              <div class="mb-3">
                  <label for="level" class="form-label">Level</label>
                  <input type="number" class="form-control" id="level" name="level" required>
              </div>
              <button type="submit" class="btn btn-primary">Add Pokémon</button>
          </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```
  ```php
  <!-- add_pokemon.php -->
  <?php
  require 'models/PokemonModel.php';
  $model = new PokemonModel();
  $pokemon = [
      'name' => $_POST['name'],
      'type' => $_POST['type'],
      'level' => $_POST['level']
  ];
  $model->addPokemon($pokemon);
  header('Location: pokemon_list.php');
  ```

#### **Mission 87 : La mise à jour des Pokémon**

- **Description** : Implémente une fonctionnalité pour mettre à jour les informations des Pokémon.
- **Exemple HTML/PHP** :
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Update Pokémon</title>
  </head>
  <body>
      <div class="container mt-5">
          <h1>Update Pokémon</h1>
          <?php
          require 'models/PokemonModel.php';
          $model = new PokemonModel();
          $pokemon = $model->getAllPokemons()[$_GET['index']];
          ?>
          <form action="update_pokemon.php" method="post">
              <input type="hidden" name="index" value="<?php echo $_GET['index']; ?>">
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $pokemon['name']; ?>" required>
              </div>
              <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" class="form-control" id="type" name="type" value="<?php echo $pokemon['type']; ?>" required>
              </div>
              <div class="mb-3">
                  <label for="level" class="form-label">Level</label>
                  <input type="number" class="form-control" id="level" name="level" value="<?php echo $pokemon['level']; ?>" required>
              </div>
              <button type="submit" class="btn btn-primary">Update Pokémon</button>
          </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```
  ```php
  <!-- update_pokemon.php -->
  <?php
  require 'models/PokemonModel.php';
  $model = new PokemonModel();
  $index = $_POST['index'];
  $pokemon = [
      'name' => $_POST['name'],
      'type' => $_POST['type'],
      'level' => $_POST['level']
  ];
  $model->updatePokemon($index, $pokemon);
  header('Location: pokemon_list.php');
  ```

#### **Mission 88 : La suppression de Pokémon**

- **Description** : Implémente une fonctionnalité pour supprimer des Pokémon.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Delete Pokémon</title>
  </head>
  <body>
      <div class="container mt-5">
          <h1>Pokémon List</h1>
          <div class="row">
              <?php
              require 'models

/PokemonModel.php';
              $model = new PokemonModel();
              $pokemons = $model->getAllPokemons();
              foreach ($pokemons as $index => $pokemon): ?>
                  <div class="col-md-4 pokemon-item">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $pokemon['name']; ?></h5>
                              <p class="card-text">Type: <?php echo $pokemon['type']; ?></p>
                              <p class="card-text">Level: <?php echo $pokemon['level']; ?></p>
                              <a href="delete_pokemon.php?index=<?php echo $index; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Pokémon?')">Delete</a>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```
  ```php
  <!-- delete_pokemon.php -->
  <?php
  require 'models/PokemonModel.php';
  $model = new PokemonModel();
  $index = $_GET['index'];
  $model->deletePokemon($index);
  header('Location: pokemon_list.php');
  ```

#### **Mission 89 : La page de détails Pokémon**

- **Description** : Crée une page de détails pour chaque Pokémon.
- **Exemple HTML/PHP** :
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Pokémon Details</title>
  </head>
  <body>
      <div class="container mt-5">
          <h1>Pokémon Details</h1>
          <?php
          require 'models/PokemonModel.php';
          $model = new PokemonModel();
          $pokemon = $model->getAllPokemons()[$_GET['index']];
          ?>
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"><?php echo $pokemon['name']; ?></h5>
                  <p class="card-text">Type: <?php echo $pokemon['type']; ?></p>
                  <p class="card-text">Level: <?php echo $pokemon['level']; ?></p>
              </div>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  ```

#### **Mission 90 : Le déploiement du site Pokémon**

- **Description** : Déploie le site Pokémon sur un serveur en ligne.
- **Documentation** :
  - Choisir un hébergement web (ex. : Bluehost, SiteGround, etc.).
  - Utiliser un client FTP (ex. : FileZilla) pour transférer les fichiers sur le serveur.
  - Configurer la base de données si nécessaire.
  - Tester le site en ligne pour s'assurer que tout fonctionne correctement.
  - Utiliser un nom de domaine pour rendre le site accessible.

Bonne chance, jeune dresseur ! Chaque mission accomplie te rapprochera du titre de Maître du Web. À toi de jouer !