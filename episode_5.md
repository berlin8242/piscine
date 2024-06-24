### Chapitre 5 : La Montagne des Maîtres

Bravo, jeune dresseur ! Tu as maîtrisé la Vallée des Styles et es maintenant prêt à gravir la Montagne des Maîtres. Ici, tu apprendras à intégrer PHP avec HTML et CSS pour créer des pages web dynamiques. Les défis deviennent encore plus passionnants !

#### **Niveau 5 : Le chevalier du code (Avancé)**

**Mission 41 : L'épée brillante**

- **Objectif** : Crée un bouton stylisé avec CSS.
- **Description** : Utilise CSS pour créer un bouton attrayant.
- **XP** : 20 points
- **Documentation** : [CSS Buttons](https://www.w3schools.com/css/css3_buttons.asp)

**Mission 42 : Les symboles anciens**

- **Objectif** : Utilise Font Awesome pour ajouter des icônes.
- **Description** : Ajoute des icônes en utilisant la bibliothèque Font Awesome.
- **XP** : 20 points
- **Documentation** : [Font Awesome Icons](https://www.w3schools.com/icons/fontawesome_icons_intro.asp)

**Mission 43 : La jauge de puissance**

- **Objectif** : Crée une barre de progression avec CSS.
- **Description** : Utilise CSS pour créer une barre de progression animée.
- **XP** : 25 points
- **Documentation** : [CSS Progress Bar](https://www.w3schools.com/howto/howto_css_progressbar.asp)

**Mission 44 : La porte mystique**

- **Objectif** : Crée un modal avec HTML, CSS, et JavaScript.
- **Description** : Utilise HTML, CSS et JavaScript pour créer un modal fonctionnel.
- **XP** : 25 points
- **Documentation** : [CSS Modal](https://www.w3schools.com/howto/howto_css_modals.asp)

**Mission 45 : Les fondations solides**

- **Objectif** : Utilise PHP pour afficher du texte dynamique.
- **Description** : Utilise PHP pour afficher du texte en fonction de conditions dynamiques.
- **XP** : 30 points
- **Documentation** : [PHP Echo](https://www.w3schools.com/php/php_echo_print.asp)

**Mission 46 : Le bouclier immobile**

- **Objectif** : Crée un header et un footer réutilisables avec PHP.
- **Description** : Utilise PHP `include` pour créer des fichiers header et footer réutilisables.
- **XP** : 30 points
- **Documentation** : [PHP Include](https://www.w3schools.com/php/php_includes.asp)

**Mission 47 : Les nuages mouvants**

- **Objectif** : Utilise PHP pour traiter un formulaire HTML.
- **Description** : Crée un formulaire HTML et traite les données soumises avec PHP.
- **XP** : 35 points
- **Documentation** : [PHP Form Handling](https://www.w3schools.com/php/php_forms.asp)

**Mission 48 : Le refuge caché**

- **Objectif** : Crée une barre latérale dynamique avec PHP.
- **Description** : Utilise PHP pour créer une barre latérale dont le contenu change dynamiquement.
- **XP** : 35 points
- **Documentation** : [PHP Include](https://www.w3schools.com/php/php_includes.asp)

**Mission 49 : Les flammes dansantes**

- **Objectif** : Crée un système de navigation dynamique avec PHP.
- **Description** : Utilise PHP pour générer un menu de navigation dynamique en fonction de l'utilisateur connecté.
- **XP** : 40 points
- **Documentation** : [PHP Sessions](https://www.w3schools.com/php/php_sessions.asp)

**Mission 50 : Le chemin éclairé**

- **Objectif** : Crée une page de profil utilisateur dynamique avec PHP.
- **Description** : Utilise PHP pour afficher les informations de profil utilisateur.
- **XP** : 50 points
- **Documentation** : [PHP Sessions](https://www.w3schools.com/php/php_sessions.asp)

---

### Détails des Missions

#### **Mission 41 : L'épée brillante**

- **Description** : Crée un bouton stylisé avec des effets de survol et des transitions.
- **Exemple CSS** :
  ```css
  .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      transition: background-color 0.3s;
  }
  .button:hover {
      background-color: #45a049;
  }
  ```
- **Exemple HTML** :
  ```html
  <button class="button">Click Me</button>
  ```

#### **Mission 42 : Les symboles anciens**

- **Description** : Utilise Font Awesome pour ajouter des icônes dans tes boutons.
- **Exemple HTML** :
  ```html
  <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>
      <button class="button"><i class="fas fa-thumbs-up"></i> Like</button>
  </body>
  ```
- **Documentation** : [Font Awesome Icons](https://www.w3schools.com/icons/fontawesome_icons_intro.asp)

#### **Mission 43 : La jauge de puissance**

- **Description** : Crée une barre de progression animée qui se remplit lorsque la page se charge.
- **Exemple CSS** :
  ```css
  .progress-container {
      width: 100%;
      background-color: #f3f3f3;
  }
  .progress-bar {
      width: 1%;
      height: 30px;
      background-color: #4CAF50;
  }
  @keyframes progress {
      from { width: 1%; }
      to { width: 100%; }
  }
  .progress-bar {
      animation: progress 2s ease-in-out forwards;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="progress-container">
      <div class="progress-bar"></div>
  </div>
  ```

#### **Mission 44 : La porte mystique**

- **Description** : Crée un modal qui s'ouvre et se ferme avec JavaScript.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <head>
      <style>
          .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
              padding-top: 60px;
          }
          .modal-content {
              background-color: #fefefe;
              margin: 5% auto;
              padding: 20px;
              border: 1px solid #888;
              width: 80%;
          }
          .close {
              color: #aaa;
              float: right;
              font-size: 28px;
              font-weight: bold;
          }
          .close:hover,
          .close:focus {
              color: black;
              text-decoration: none;
              cursor: pointer;
          }
      </style>
  </head>
  <body>
      <h2>Modal Example</h2>
      <button id="myBtn">Open Modal</button>
      <div id="myModal" class="modal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <p>Some text in the Modal..</p>
          </div>
      </div>
      <script>
          var modal = document.getElementById("myModal");
          var btn = document.getElementById("myBtn");
          var span = document.getElementsByClassName("close")[0];
          btn.onclick = function() {
              modal.style.display = "block";
          }
          span.onclick = function() {
              modal.style.display = "none";
          }
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
      </script>
  </body>
  ```

#### **Mission 45 : Les fondations solides**

- **Description** : Utilise PHP pour afficher du texte dynamique en fonction de conditions spécifiques.
- **Exemple PHP** :
  ```php
  <!DOCTYPE html>
  <html>
  <body>
      <?php
      $hour = date("H");
      if ($hour < 12) {
          echo "Good morning!";
      } elseif ($hour < 18) {
          echo "Good afternoon!";
      } else {
          echo "Good evening!";
      }
      ?>
  </body>
  </html>
  ```

#### **Mission 46 : Le bouclier immobile**

- **Description** : Crée des fichiers `header.php` et `footer.php` réutilisables et incluez-les dans votre page principale.
- **Exemple PHP** :
  ```php
  <!-- header.php -->
  <div class="

header">
      <h1>Welcome to My Website</h1>
      <p>My supercool header</p>
  </div>
  ```
  ```php
  <!-- footer.php -->
  <div class="footer">
      <p>Footer Information</p>
  </div>
  ```
  ```php
  <!-- index.php -->
  <!DOCTYPE html>
  <html>
  <body>
      <?php include 'header.php'; ?>
      <h2>Home Page</h2>
      <p>Some text..</p>
      <?php include 'footer.php'; ?>
  </body>
  </html>
  ```

#### **Mission 47 : Les nuages mouvants**

- **Description** : Crée un formulaire HTML et traite les données soumises avec PHP.
- **Exemple HTML/PHP** :
  ```html
  <!-- form.html -->
  <form action="welcome.php" method="post">
      Name: <input type="text" name="name"><br>
      Email: <input type="text" name="email"><br>
      <input type="submit">
  </form>
  ```
  ```php
  <!-- welcome.php -->
  <!DOCTYPE html>
  <html>
  <body>
      Welcome <?php echo $_POST["name"]; ?><br>
      Your email address is: <?php echo $_POST["email"]; ?>
  </body>
  </html>
  ```

#### **Mission 48 : Le refuge caché**

- **Description** : Utilise PHP pour créer une barre latérale dont le contenu change dynamiquement.
- **Exemple PHP** :
  ```php
  <!DOCTYPE html>
  <html>
  <body>
      <div class="sidebar">
          <?php
          $day = date("l");
          if ($day == "Monday") {
              echo "Happy Monday!";
          } elseif ($day == "Friday") {
              echo "TGIF!";
          } else {
              echo "Have a nice day!";
          }
          ?>
      </div>
  </body>
  </html>
  ```

#### **Mission 49 : Les flammes dansantes**

- **Description** : Utilise PHP pour générer un menu de navigation dynamique en fonction de l'utilisateur connecté.
- **Exemple PHP** :
  ```php
  <?php
  session_start();
  $_SESSION["username"] = "JohnDoe"; // Simulate a logged-in user
  ?>
  <!DOCTYPE html>
  <html>
  <body>
      <ul class="nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <?php
          if (isset($_SESSION["username"])) {
              echo '<li><a href="profile.php">Profile</a></li>';
              echo '<li><a href="logout.php">Logout</a></li>';
          } else {
              echo '<li><a href="login.php">Login</a></li>';
              echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
      </ul>
  </body>
  </html>
  ```

#### **Mission 50 : Le chemin éclairé**

- **Description** : Crée une page de profil utilisateur dynamique avec PHP.
- **Exemple PHP** :
  ```php
  <?php
  session_start();
  $_SESSION["username"] = "JohnDoe"; // Simulate a logged-in user
  $_SESSION["email"] = "john.doe@example.com"; // Simulate a logged-in user email
  ?>
  <!DOCTYPE html>
  <html>
  <body>
      <h2>User Profile</h2>
      <p>Username: <?php echo $_SESSION["username"]; ?></p>
      <p>Email: <?php echo $_SESSION["email"]; ?></p>
  </body>
  </html>
  ```

Bonne chance, jeune dresseur ! Chaque mission accomplie te rapprochera du titre de Maître du Web. À toi de jouer !