### Chapitre 8 : Le Temple de l'Expérience Utilisateur (UX/UI) avec Bootstrap et MVC

Bravo, jeune dresseur ! Tu es maintenant prêt à maîtriser Bootstrap pour le design UX/UI et à implémenter le modèle MVC pour une structure de code propre et maintenable. Prépare-toi pour des défis encore plus sophistiqués !

#### **Niveau 8 : Le sage du design (Expert)**

**Mission 71 : L'interface enchantée**

- **Objectif** : Utilise Bootstrap pour styliser un formulaire de contact.
- **Description** : Applique des classes Bootstrap pour créer un formulaire de contact élégant.
- **XP** : 40 points
- **Documentation** : [Bootstrap Forms](https://getbootstrap.com/docs/5.0/forms/overview/)

**Mission 72 : Les couleurs des étoiles**

- **Objectif** : Personnalise les couleurs avec Bootstrap.
- **Description** : Utilise les classes utilitaires de Bootstrap pour personnaliser les couleurs de ton site web.
- **XP** : 45 points
- **Documentation** : [Bootstrap Utilities](https://getbootstrap.com/docs/5.0/utilities/colors/)

**Mission 73 : La typographie magique**

- **Objectif** : Utilise Bootstrap pour styliser la typographie.
- **Description** : Applique des classes Bootstrap pour améliorer la typographie de ton site.
- **XP** : 45 points
- **Documentation** : [Bootstrap Typography](https://getbootstrap.com/docs/5.0/content/typography/)

**Mission 74 : Le layout harmonieux**

- **Objectif** : Crée un layout responsive avec Bootstrap.
- **Description** : Utilise les classes de grille Bootstrap pour créer un layout qui s'adapte aux différentes tailles d'écran.
- **XP** : 50 points
- **Documentation** : [Bootstrap Grid System](https://getbootstrap.com/docs/5.0/layout/grid/)

**Mission 75 : Les composants réactifs**

- **Objectif** : Crée des boutons réactifs avec Bootstrap.
- **Description** : Utilise les classes Bootstrap pour créer des boutons interactifs et stylisés.
- **XP** : 50 points
- **Documentation** : [Bootstrap Buttons](https://getbootstrap.com/docs/5.0/components/buttons/)

**Mission 76 : La galerie éclatante**

- **Objectif** : Crée une galerie d'images interactive avec Bootstrap.
- **Description** : Utilise les composants de Bootstrap pour créer une galerie d'images élégante et responsive.
- **XP** : 50 points
- **Documentation** : [Bootstrap Cards](https://getbootstrap.com/docs/5.0/components/card/)

**Mission 77 : Le modèle MVC**

- **Objectif** : Implémente le modèle MVC dans une application web.
- **Description** : Utilise le modèle MVC pour organiser le code de ton application web en séparant les responsabilités entre le modèle, la vue et le contrôleur.
- **XP** : 60 points
- **Documentation** : [Understanding MVC](https://www.smashingmagazine.com/2011/10/getting-started-with-mvc-for-php/)

**Mission 78 : Le contrôleur dynamique**

- **Objectif** : Crée un contrôleur en PHP pour gérer les requêtes utilisateur.
- **Description** : Implémente un contrôleur en PHP qui traite les requêtes utilisateur et interagit avec le modèle et la vue.
- **XP** : 60 points
- **Documentation** : [PHP MVC Controller](https://www.php.net/manual/en/language.oop5.php)

**Mission 79 : Le modèle structuré**

- **Objectif** : Crée un modèle en PHP pour interagir avec les données.
- **Description** : Implémente un modèle en PHP qui gère la logique de la base de données et les opérations CRUD.
- **XP** : 60 points
- **Documentation** : [PHP Data Objects (PDO)](https://www.php.net/manual/en/book.pdo.php)

**Mission 80 : La vue interactive**

- **Objectif** : Crée des vues en PHP pour afficher les données à l'utilisateur.
- **Description** : Implémente des vues en PHP qui affichent les données en utilisant Bootstrap pour le stylisme.
- **XP** : 60 points
- **Documentation** : [PHP Templates](https://www.php.net/manual/en/language.basic-syntax.phpmode.php)

---

### Détails des Missions

#### **Mission 71 : L'interface enchantée**

- **Description** : Crée un formulaire de contact élégant avec Bootstrap.
- **Exemple HTML** :
  ```html
  <form class="container mt-5">
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Your Name">
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
      </div>
      <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  ```

#### **Mission 72 : Les couleurs des étoiles**

- **Description** : Utilise les utilitaires de couleur Bootstrap pour personnaliser ton site.
- **Exemple HTML** :
  ```html
  <div class="container mt-5">
      <h1 class="text-primary">Primary Text</h1>
      <p class="text-success">This is a success message.</p>
      <div class="bg-warning text-white p-3">Warning Background</div>
  </div>
  ```

#### **Mission 73 : La typographie magique**

- **Description** : Applique des classes Bootstrap pour améliorer la typographie.
- **Exemple HTML** :
  ```html
  <div class="container mt-5">
      <h1 class="display-1">Display 1</h1>
      <h2 class="display-2">Display 2</h2>
      <p class="lead">This is a lead paragraph.</p>
      <p class="font-italic">Italic text</p>
  </div>
  ```

#### **Mission 74 : Le layout harmonieux**

- **Description** : Crée un layout responsive avec le système de grille Bootstrap.
- **Exemple HTML** :
  ```html
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-4">Column 1</div>
          <div class="col-md-4">Column 2</div>
          <div class="col-md-4">Column 3</div>
      </div>
      <div class="row mt-3">
          <div class="col-sm-6">Column 1</div>
          <div class="col-sm-6">Column 2</div>
      </div>
  </div>
  ```

#### **Mission 75 : Les composants réactifs**

- **Description** : Crée des boutons interactifs et stylisés avec Bootstrap.
- **Exemple HTML** :
  ```html
  <div class="container mt-5">
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-light">Light</button>
      <button type="button" class="btn btn-dark">Dark</button>
  </div>
  ```

#### **Mission 76 : La galerie éclatante**

- **Description** : Crée une galerie d'images élégante et responsive avec Bootstrap.
- **Exemple HTML** :
  ```html
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <img src="image1.jpg" class="card-img-top" alt="Image 1">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <img src="image2.jpg" class="card-img-top" alt="Image 2">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="

card">
                  <img src="image3.jpg" class="card-img-top" alt="Image 3">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  ```

#### **Mission 77 : Le modèle MVC**

- **Description** : Implémente le modèle MVC dans une application web.
- **Exemple PHP (Structure du projet)** :
  ```
  my_mvc_app/
  ├── controllers/
  │   └── MainController.php
  ├── models/
  │   └── UserModel.php
  ├── views/
  │   └── home.php
  ├── index.php
  └── router.php
  ```
  ```php
  <!-- index.php -->
  <?php
  require 'router.php';
  ```

#### **Mission 78 : Le contrôleur dynamique**

- **Description** : Crée un contrôleur en PHP pour gérer les requêtes utilisateur.
- **Exemple PHP** :
  ```php
  <!-- controllers/MainController.php -->
  <?php
  class MainController {
      public function home() {
          require 'views/home.php';
      }
  }
  ```

#### **Mission 79 : Le modèle structuré**

- **Description** : Crée un modèle en PHP pour interagir avec les données.
- **Exemple PHP** :
  ```php
  <!-- models/UserModel.php -->
  <?php
  class UserModel {
      private $data = [
          ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
          ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com'],
      ];

      public function getAllUsers() {
          return $data;
      }
  }
  ```

#### **Mission 80 : La vue interactive**

- **Description** : Crée des vues en PHP pour afficher les données à l'utilisateur.
- **Exemple PHP/HTML** :
  ```php
  <!-- views/home.php -->
  <?php
  $userModel = new UserModel();
  $users = $userModel->getAllUsers();
  ?>
  <!DOCTYPE html>
  <html>
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container mt-5">
          <h1>Users</h1>
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($users as $user): ?>
                      <tr>
                          <td><?php echo $user['id']; ?></td>
                          <td><?php echo $user['name']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
  </body>
  </html>
  ```

Bonne chance, jeune dresseur ! Chaque mission accomplie te rapprochera du titre de Maître du Web. À toi de jouer !