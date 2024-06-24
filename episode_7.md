### Chapitre 7 : La Citadelle du Développement

Bravo, jeune dresseur ! Tu as conquis la Forteresse du Codage et es maintenant prêt à explorer la Citadelle du Développement. Ici, tu apprendras à combiner JavaScript et PHP pour créer des pages web encore plus dynamiques et interactives. Prépare-toi à relever des défis encore plus captivants !

#### **Niveau 7 : Le maître du web (Expert)**

**Mission 61 : Les cartes mouvantes**

- **Objectif** : Crée un formulaire de contact dynamique avec PHP et JavaScript.
- **Description** : Utilise PHP pour traiter les données du formulaire et JavaScript pour valider les entrées avant soumission.
- **XP** : 40 points
- **Documentation** : [PHP Form Handling](https://www.w3schools.com/php/php_forms.asp), [JavaScript Form Validation](https://www.w3schools.com/js/js_validation.asp)

**Mission 62 : Les reflets parfaits**

- **Objectif** : Crée une application de commentaires en temps réel avec PHP et JavaScript (AJAX).
- **Description** : Utilise PHP pour gérer les commentaires et JavaScript (AJAX) pour les afficher en temps réel.
- **XP** : 45 points
- **Documentation** : [PHP AJAX](https://www.w3schools.com/php/php_ajax_php.asp)

**Mission 63 : Les lentilles magiques**

- **Objectif** : Crée un tableau interactif avec filtrage et tri en utilisant PHP et JavaScript.
- **Description** : Utilise PHP pour récupérer les données et JavaScript pour filtrer et trier les données dans le tableau.
- **XP** : 45 points
- **Documentation** : [JavaScript Array Sort](https://www.w3schools.com/js/js_array_sort.asp)

**Mission 64 : Les trésors**

- **Objectif** : Crée un système de to-do list avec PHP et JavaScript.
- **Description** : Utilise PHP pour sauvegarder les tâches dans un fichier et JavaScript pour ajouter, supprimer et marquer les tâches comme complétées.
- **XP** : 45 points
- **Documentation** : [PHP File Handling](https://www.w3schools.com/php/php_file_create.asp), [JavaScript DOM Manipulation](https://www.w3schools.com/js/js_htmldom.asp)

**Mission 65 : La galerie des merveilles**

- **Objectif** : Crée une galerie d'images interactive avec PHP et JavaScript.
- **Description** : Utilise PHP pour gérer les images et JavaScript pour afficher les images en mode galerie.
- **XP** : 45 points
- **Documentation** : [PHP File Upload](https://www.w3schools.com/php/php_file_upload.asp), [JavaScript Image Gallery](https://www.w3schools.com/howto/howto_js_slideshow.asp)

**Mission 66 : Le messager**

- **Objectif** : Crée une application de chat simple avec PHP et JavaScript (AJAX).
- **Description** : Utilise PHP pour gérer les messages et JavaScript (AJAX) pour les envoyer et les recevoir en temps réel.
- **XP** : 50 points
- **Documentation** : [PHP AJAX Chat](https://www.w3schools.com/php/php_ajax_php.asp)

**Mission 67 : Les mouvements harmonieux**

- **Objectif** : Crée un calculateur de budget interactif avec PHP et JavaScript.
- **Description** : Utilise PHP pour sauvegarder les données de budget et JavaScript pour effectuer les calculs en temps réel.
- **XP** : 50 points
- **Documentation** : [PHP File Handling](https://www.w3schools.com/php/php_file_create.asp), [JavaScript Calculations](https://www.w3schools.com/js/js_arithmetic.asp)

**Mission 68 : La page de gloire**

- **Objectif** : Crée une page de profil utilisateur interactive avec PHP et JavaScript.
- **Description** : Utilise PHP pour gérer les informations utilisateur et JavaScript pour les afficher et les mettre à jour dynamiquement.
- **XP** : 50 points
- **Documentation** : [PHP Sessions](https://www.w3schools.com/php/php_sessions.asp), [JavaScript DOM Manipulation](https://www.w3schools.com/js/js_htmldom.asp)

**Mission 69 : La salle de contrôle**

- **Objectif** : Crée un tableau de bord administrateur avec PHP et JavaScript.
- **Description** : Utilise PHP pour récupérer et afficher les données et JavaScript pour rendre le tableau de bord interactif.
- **XP** : 55 points
- **Documentation** : [JavaScript Chart](https://www.chartjs.org/)

**Mission 70 : Le journal des aventuriers**

- **Objectif** : Crée un blog avec PHP et JavaScript.
- **Description** : Utilise PHP pour gérer les articles de blog et JavaScript pour les afficher et les mettre à jour dynamiquement.
- **XP** : 55 points
- **Documentation** : [PHP CRUD](https://www.w3schools.com/php/php_mysql_crud.asp), [JavaScript AJAX](https://www.w3schools.com/js/js_ajax_intro.asp)

---

### Détails des Missions

#### **Mission 61 : Les cartes mouvantes**

- **Description** : Crée un formulaire de contact avec validation JavaScript avant de soumettre les données à un script PHP qui les traite et affiche un message de confirmation.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="contactForm" action="contact.php" method="post" onsubmit="return validateForm()">
      Name: <input type="text" name="name" id="name"><br>
      Email: <input type="text" name="email" id="email"><br>
      Message: <textarea name="message" id="message"></textarea><br>
      <input type="submit" value="Submit">
  </form>
  <script>
      function validateForm() {
          var name = document.getElementById("name").value;
          var email = document.getElementById("email").value;
          var message = document.getElementById("message").value;
          if (name == "" || email == "" || message == "") {
              alert("All fields must be filled out");
              return false;
          }
          return true;
      }
  </script>
  ```
  ```php
  <!-- contact.php -->
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST['message']);
      echo "Thank you, $name. Your message has been received.";
  }
  ?>
  ```

#### **Mission 62 : Les reflets parfaits**

- **Description** : Crée une application de commentaires qui utilise AJAX pour envoyer et recevoir les commentaires sans recharger la page.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="commentForm">
      <input type="text" id="username" placeholder="Username"><br>
      <textarea id="comment" placeholder="Comment"></textarea><br>
      <button type="button" onclick="submitComment()">Submit</button>
  </form>
  <div id="comments"></div>
  <script>
      function submitComment() {
          var xhr = new XMLHttpRequest();
          var username = document.getElementById("username").value;
          var comment = document.getElementById("comment").value;
          xhr.open("POST", "comments.php", true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("comments").innerHTML = xhr.responseText;
              }
          };
          xhr.send("username=" + username + "&comment=" + comment);
      }
  </script>
  ```
  ```php
  <!-- comments.php -->
  <?php
  $username = htmlspecialchars($_POST['username']);
  $comment = htmlspecialchars($_POST['comment']);
  echo "<p><b>$username:</b> $comment</p>";
  ?>
  ```

#### **Mission 63 : Les lentilles magiques**

- **Description** : Crée un tableau interactif qui permet de trier et filtrer les données.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search for names..">
  <table id="dataTable">
      <thead>
          <tr>
              <th onclick="sortTable(0)">Name</th>
              <th onclick="sortTable(1)">Age</th>
              <th onclick="sortTable(2)">Country</th>
          </tr>
      </thead>
      <tbody>
          <!-- Rows will be populated by PHP -->
          <?php
          $data = [
              ["John Doe", 29, "USA"],
              ["Jane Doe", 24, "UK"],
              ["Jim Brown", 32, "Canada"],
              ["Jake White", 27, "Australia"]
          ];
          foreach ($data as $row) {
              echo "<tr>";
              foreach ($row as $cell) {
                  echo "<td>$cell</td>";
              }
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
  <script>
      function sortTable(n) {
          var table,

 rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById("dataTable");
          switching = true;
          dir = "asc"; 
          while (switching) {
              switching = false;
              rows = table.rows;
              for (i = 1; i < (rows.length - 1); i++) {
                  shouldSwitch = false;
                  x = rows[i].getElementsByTagName("TD")[n];
                  y = rows[i + 1].getElementsByTagName("TD")[n];
                  if (dir == "asc") {
                      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                          shouldSwitch = true;
                          break;
                      }
                  } else if (dir == "desc") {
                      if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                          shouldSwitch = true;
                          break;
                      }
                  }
              }
              if (shouldSwitch) {
                  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                  switching = true;
                  switchcount ++;      
              } else {
                  if (switchcount == 0 && dir == "asc") {
                      dir = "desc";
                      switching = true;
                  }
              }
          }
      }
      function filterTable() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("searchInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("dataTable");
          tr = table.getElementsByTagName("tr");
          for (i = 1; i < tr.length; i++) {
              tr[i].style.display = "none";
              td = tr[i].getElementsByTagName("td");
              for (var j = 0; j < td.length; j++) {
                  if (td[j]) {
                      txtValue = td[j].textContent || td[j].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          tr[i].style.display = "";
                          break;
                      }
                  }
              }
          }
      }
  </script>
  ```

#### **Mission 64 : Les trésors**

- **Description** : Crée une to-do list où les tâches peuvent être ajoutées, supprimées et marquées comme complétées. Les tâches sont sauvegardées sur le serveur avec PHP.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <input type="text" id="taskInput" placeholder="New task...">
  <button onclick="addTask()">Add</button>
  <ul id="taskList">
      <!-- Tasks will be populated by PHP -->
      <?php
      if (file_exists('tasks.json')) {
          $tasks = json_decode(file_get_contents('tasks.json'), true);
          foreach ($tasks as $task) {
              echo "<li>$task <button onclick='deleteTask(this)'>Delete</button> <button onclick='completeTask(this)'>Complete</button></li>";
          }
      }
      ?>
  </ul>
  <script>
      function addTask() {
          var task = document.getElementById("taskInput").value;
          if (task === "") {
              alert("Task cannot be empty");
              return;
          }
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "add_task.php", true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  var li = document.createElement("li");
                  li.innerHTML = task + ' <button onclick="deleteTask(this)">Delete</button> <button onclick="completeTask(this)">Complete</button>';
                  document.getElementById("taskList").appendChild(li);
                  document.getElementById("taskInput").value = "";
              }
          };
          xhr.send("task=" + task);
      }
      function deleteTask(button) {
          var li = button.parentElement;
          li.parentElement.removeChild(li);
      }
      function completeTask(button) {
          var li = button.parentElement;
          li.style.textDecoration = "line-through";
      }
  </script>
  ```
  ```php
  <!-- add_task.php -->
  <?php
  $task = htmlspecialchars($_POST['task']);
  $tasks = [];
  if (file_exists('tasks.json')) {
      $tasks = json_decode(file_get_contents('tasks.json'), true);
  }
  $tasks[] = $task;
  file_put_contents('tasks.json', json_encode($tasks));
  echo "Task added";
  ?>
  ```

#### **Mission 65 : La galerie des merveilles**

- **Description** : Crée une galerie d'images où les images peuvent être ajoutées via un formulaire de téléchargement et affichées en mode galerie.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="uploadForm" enctype="multipart/form-data">
      <input type="file" name="image" id="image"><br>
      <button type="button" onclick="uploadImage()">Upload</button>
  </form>
  <div id="gallery">
      <!-- Images will be populated by PHP -->
      <?php
      $files = glob("uploads/*.*");
      foreach ($files as $file) {
          echo "<img src='$file' width='100'>";
      }
      ?>
  </div>
  <script>
      function uploadImage() {
          var formData = new FormData(document.getElementById("uploadForm"));
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "upload_image.php", true);
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("gallery").innerHTML += '<img src="' + xhr.responseText + '" width="100">';
              }
          };
          xhr.send(formData);
      }
  </script>
  ```
  ```php
  <!-- upload_image.php -->
  <?php
  if ($_FILES['image']['name']) {
      $filename = "uploads/" . basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'], $filename);
      echo $filename;
  }
  ?>
  ```

#### **Mission 66 : Le messager**

- **Description** : Crée une application de chat simple où les messages peuvent être envoyés et reçus en temps réel en utilisant AJAX.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="chatForm">
      <input type="text" id="username" placeholder="Username"><br>
      <input type="text" id="message" placeholder="Message"><br>
      <button type="button" onclick="sendMessage()">Send</button>
  </form>
  <div id="chatMessages">
      <!-- Messages will be populated by PHP -->
      <?php
      if (file_exists('messages.json')) {
          $messages = json_decode(file_get_contents('messages.json'), true);
          foreach ($messages as $msg) {
              echo "<p><b>{$msg['username']}:</b> {$msg['message']}</p>";
          }
      }
      ?>
  </div>
  <script>
      function sendMessage() {
          var xhr = new XMLHttpRequest();
          var username = document.getElementById("username").value;
          var message = document.getElementById("message").value;
          xhr.open("POST", "send_message.php", true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("chatMessages").innerHTML += xhr.responseText;
                  document.getElementById("message").value = "";
              }
          };
          xhr.send("username=" + username + "&message=" + message);
      }
      function fetchMessages() {
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "fetch_messages.php", true);
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("chatMessages").innerHTML = xhr.responseText;
              }
          };
          xhr.send();
      }
      setInterval(fetchMessages, 3000);
  </script>
  ```
  ```php
  <!-- send_message.php -->
  <?php
  $username = htmlspecialchars($_POST['username']);
  $message = htmlspecialchars($_POST['message']);
  $messages = [];
  if (file_exists('messages.json')) {
      $messages = json_decode(file_get_contents('messages.json'), true);
  }
  $messages[] = ['username' => $username, 'message' => $message];
  file_put_contents('messages.json', json_encode($messages));
  echo "<p><b>$username:</b> $message</p>";
  ?>
  ```
  ```php
  <!-- fetch_messages.php -->
  <?php
  if (file_exists('messages.json')) {
      $messages = json_decode(file_get_contents('messages.json'), true);
      foreach ($messages as $msg) {
          echo "<p><b>{$msg['username']}:</b> {$msg['message']}</p>";
      }
  }
  ?>
  ```

#### **Mission 67 : Les mouvements harmonieux**

- **Description** : Crée un calculateur de budget où les entrées de revenus et de dépenses peuvent être ajoutées et les totaux calculés en temps

 réel.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="budgetForm">
      <input type="text" id="income" placeholder="Income"><br>
      <input type="text" id="expense" placeholder="Expense"><br>
      <button type="button" onclick="calculateBudget()">Calculate</button>
  </form>
  <div id="budgetResult">
      <!-- Budget result will be displayed here -->
  </div>
  <script>
      function calculateBudget() {
          var income = parseFloat(document.getElementById("income").value) || 0;
          var expense = parseFloat(document.getElementById("expense").value) || 0;
          var total = income - expense;
          document.getElementById("budgetResult").innerHTML = "Total: $" + total;
      }
  </script>
  ```

#### **Mission 68 : La page de gloire**

- **Description** : Crée une page de profil utilisateur où les informations peuvent être mises à jour et affichées dynamiquement.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="profileForm" onsubmit="return updateProfile()">
      Name: <input type="text" id="name" value="John Doe"><br>
      Email: <input type="text" id="email" value="john.doe@example.com"><br>
      <button type="submit">Update</button>
  </form>
  <div id="profileResult">
      <!-- Profile result will be displayed here -->
  </div>
  <script>
      function updateProfile() {
          var name = document.getElementById("name").value;
          var email = document.getElementById("email").value;
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "update_profile.php", true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("profileResult").innerHTML = xhr.responseText;
              }
          };
          xhr.send("name=" + name + "&email=" + email);
          return false;
      }
  </script>
  ```
  ```php
  <!-- update_profile.php -->
  <?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  echo "Profile updated: $name, $email";
  ?>
  ```

#### **Mission 69 : La salle de contrôle**

- **Description** : Crée un tableau de bord administrateur où les données sont affichées et peuvent être mises à jour dynamiquement.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <div id="adminDashboard">
      <!-- Dashboard data will be populated by PHP -->
      <?php
      $data = [
          "Total Users" => 123,
          "Total Sales" => 4567
      ];
      foreach ($data as $key => $value) {
          echo "<p>$key: $value</p>";
      }
      ?>
  </div>
  <button onclick="refreshDashboard()">Refresh</button>
  <script>
      function refreshDashboard() {
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "dashboard_data.php", true);
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("adminDashboard").innerHTML = xhr.responseText;
              }
          };
          xhr.send();
      }
  </script>
  ```
  ```php
  <!-- dashboard_data.php -->
  <?php
  $data = [
      "Total Users" => 123,
      "Total Sales" => 4567
  ];
  foreach ($data as $key => $value) {
      echo "<p>$key: $value</p>";
  }
  ?>
  ```

#### **Mission 70 : Le journal des aventuriers**

- **Description** : Crée un blog où les articles peuvent être ajoutés, affichés et mis à jour dynamiquement.
- **Exemple HTML/PHP/JavaScript** :
  ```html
  <form id="blogForm" onsubmit="return addArticle()">
      Title: <input type="text" id="title"><br>
      Content: <textarea id="content"></textarea><br>
      <button type="submit">Add Article</button>
  </form>
  <div id="blogArticles">
      <!-- Blog articles will be populated by PHP -->
      <?php
      if (file_exists('articles.json')) {
          $articles = json_decode(file_get_contents('articles.json'), true);
          foreach ($articles as $article) {
              echo "<div><h2>{$article['title']}</h2><p>{$article['content']}</p></div>";
          }
      }
      ?>
  </div>
  <script>
      function addArticle() {
          var title = document.getElementById("title").value;
          var content = document.getElementById("content").value;
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "add_article.php", true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("blogArticles").innerHTML += xhr.responseText;
                  document.getElementById("title").value = "";
                  document.getElementById("content").value = "";
              }
          };
          xhr.send("title=" + title + "&content=" + content);
          return false;
      }
  </script>
  ```
  ```php
  <!-- add_article.php -->
  <?php
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);
  $articles = [];
  if (file_exists('articles.json')) {
      $articles = json_decode(file_get_contents('articles.json'), true);
  }
  $articles[] = ['title' => $title, 'content' => $content];
  file_put_contents('articles.json', json_encode($articles));
  echo "<div><h2>$title</h2><p>$content</p></div>";
  ?>
  ```

Bonne chance, jeune dresseur ! Chaque mission accomplie te rapprochera du titre de Maître du Web. À toi de jouer !