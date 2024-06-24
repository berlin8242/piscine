### Chapitre 6 : La Forteresse du Codage

Bravo, jeune dresseur ! Tu as maîtrisé la Montagne des Maîtres et es maintenant prêt à pénétrer dans la Forteresse du Codage. Ici, tu apprendras à utiliser JavaScript pour rendre tes pages web interactives et dynamiques. Les défis sont de plus en plus captivants !

#### **Niveau 6 : Le mage du style (Avancé)**

**Mission 51 : Le sol sacré**

- **Objectif** : Crée un footer fixe avec CSS.
- **Description** : Utilise CSS pour créer un pied de page qui reste en bas de la fenêtre, même lorsque la page est scrollée.
- **XP** : 20 points
- **Documentation** : [CSS Fixed Footer](https://www.w3schools.com/howto/howto_css_fixed_footer.asp)

**Mission 52 : La baguette magique**

- **Objectif** : Utilise des variables CSS.
- **Description** : Utilise les variables CSS pour simplifier et organiser tes styles.
- **XP** : 25 points
- **Documentation** : [CSS Variables](https://www.w3schools.com/css/css3_variables.asp)

**Mission 53 : La porte cachée**

- **Objectif** : Crée un menu dropdown avec CSS et JavaScript.
- **Description** : Utilise CSS et JavaScript pour créer un menu déroulant.
- **XP** : 30 points
- **Documentation** : [CSS Dropdowns](https://www.w3schools.com/css/css_dropdowns.asp)

**Mission 54 : La galerie des illusions**

- **Objectif** : Crée un carrousel d'images avec CSS et JavaScript.
- **Description** : Utilise CSS et JavaScript pour créer un carrousel d'images interactif.
- **XP** : 35 points
- **Documentation** : [CSS Slideshow](https://www.w3schools.com/howto/howto_js_slideshow.asp)

**Mission 55 : Le labyrinthe parfait**

- **Objectif** : Utilise CSS Grid pour un layout complexe.
- **Description** : Utilise CSS Grid pour créer une mise en page complexe avec plusieurs zones.
- **XP** : 35 points
- **Documentation** : [CSS Grid Layout](https://www.w3schools.com/css/css_grid.asp)

**Mission 56 : Le détecteur de secrets**

- **Objectif** : Crée une barre de recherche stylisée avec CSS et JavaScript.
- **Description** : Utilise CSS et JavaScript pour créer une barre de recherche stylisée et fonctionnelle.
- **XP** : 35 points
- **Documentation** : [CSS Search Bar](https://www.w3schools.com/howto/howto_css_searchbar.asp)

**Mission 57 : Les changements rapides**

- **Objectif** : Ajoute des transitions CSS sur les hover.
- **Description** : Utilise les transitions CSS pour créer des effets de changement progressif lors du survol.
- **XP** : 25 points
- **Documentation** : [CSS Transitions](https://www.w3schools.com/css/css3_transitions.asp)

**Mission 58 : Les marques d'honneur**

- **Objectif** : Crée des badges avec CSS et JavaScript.
- **Description** : Utilise CSS et JavaScript pour créer des badges dynamiques qui affichent des notifications.
- **XP** : 30 points
- **Documentation** : [CSS Badges](https://www.w3schools.com/howto/howto_css_badges.asp)

**Mission 59 : La plume d'écrivain**

- **Objectif** : Crée un effet de machine à écrire avec CSS et JavaScript.
- **Description** : Utilise CSS et JavaScript pour créer un effet de machine à écrire sur du texte.
- **XP** : 35 points
- **Documentation** : [Typewriter Effect](https://www.w3schools.com/howto/howto_js_typewriter.asp)

**Mission 60 : L'alerte sonore**

- **Objectif** : Crée une alerte stylisée avec CSS et JavaScript.
- **Description** : Utilise CSS et JavaScript pour créer des alertes stylisées et interactives.
- **XP** : 35 points
- **Documentation** : [JavaScript Alerts](https://www.w3schools.com/js/js_popup.asp)

---

### Détails des Missions

#### **Mission 51 : Le sol sacré**

- **Description** : Crée un footer qui reste fixé en bas de la fenêtre du navigateur.
- **Exemple CSS** :
  ```css
  .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="footer">
      <p>Footer</p>
  </div>
  ```

#### **Mission 52 : La baguette magique**

- **Description** : Utilise des variables CSS pour définir et utiliser des couleurs et des espacements.
- **Exemple CSS** :
  ```css
  :root {
      --main-bg-color: coral;
      --main-text-color: white;
      --main-padding: 10px;
  }
  body {
      background-color: var(--main-bg-color);
      color: var(--main-text-color);
      padding: var(--main-padding);
  }
  ```

#### **Mission 53 : La porte cachée**

- **Description** : Crée un menu dropdown qui s'affiche au clic d'un bouton.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <style>
      .dropdown {
          position: relative;
          display: inline-block;
      }
      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }
      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }
      .dropdown-content a:hover {
          background-color: #f1f1f1;
      }
      .dropdown:hover .dropdown-content {
          display: block;
      }
  </style>
  <div class="dropdown">
      <button onclick="toggleDropdown()">Dropdown</button>
      <div id="myDropdown" class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
      </div>
  </div>
  <script>
      function toggleDropdown() {
          document.getElementById("myDropdown").classList.toggle("show");
      }
      window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
              var dropdowns = document.getElementsByClassName("dropdown-content");
              for (var i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                  }
              }
          }
      }
  </script>
  ```

#### **Mission 54 : La galerie des illusions**

- **Description** : Crée un carrousel d'images avec des boutons pour naviguer entre les images.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <style>
      .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
      }
      .mySlides {
          display: none;
      }
      .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
      }
      .next {
          right: 0;
          border-radius: 3px 0 0 3px;
      }
      .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
      }
  </style>
  <div class="slideshow-container">
      <div class="mySlides">
          <img src="img1.jpg" style="width:100%">
      </div>
      <div class="mySlides">
          <img src="img2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
          <img src="img3.jpg" style="width:100%">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
          showSlides(slideIndex += n);
      }

      function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex =

 slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          slides[slideIndex-1].style.display = "block";
      }
  </script>
  ```

#### **Mission 55 : Le labyrinthe parfait**

- **Description** : Utilise CSS Grid pour créer un layout complexe avec plusieurs zones.
- **Exemple CSS** :
  ```css
  .grid-container {
      display: grid;
      grid-template-areas: 
        'header header header header'
        'nav main main aside'
        'footer footer footer footer';
      grid-gap: 10px;
  }
  .header {
      grid-area: header;
      background-color: lightblue;
  }
  .nav {
      grid-area: nav;
      background-color: lightgreen;
  }
  .main {
      grid-area: main;
      background-color: lightyellow;
  }
  .aside {
      grid-area: aside;
      background-color: lightcoral;
  }
  .footer {
      grid-area: footer;
      background-color: lightgray;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="grid-container">
      <div class="header">Header</div>
      <div class="nav">Navigation</div>
      <div class="main">Main Content</div>
      <div class="aside">Aside</div>
      <div class="footer">Footer</div>
  </div>
  ```

#### **Mission 56 : Le détecteur de secrets**

- **Description** : Crée une barre de recherche stylisée avec CSS et ajoute une fonctionnalité JavaScript pour filtrer les résultats en temps réel.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <style>
      .search-container {
          max-width: 300px;
          margin: auto;
      }
      input[type=text] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
      }
  </style>
  <div class="search-container">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
      <ul id="myUL">
          <li><a href="#">John Doe</a></li>
          <li><a href="#">Jane Doe</a></li>
          <li><a href="#">Jim Brown</a></li>
          <li><a href="#">Jake White</a></li>
      </ul>
  </div>
  <script>
      function myFunction() {
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName("li");
          for (i = 0; i < li.length; i++) {
              a = li[i].getElementsByTagName("a")[0];
              txtValue = a.textContent || a.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
              } else {
                  li[i].style.display = "none";
              }
          }
      }
  </script>
  ```

#### **Mission 57 : Les changements rapides**

- **Description** : Ajoute des transitions CSS pour créer des effets de changement progressif lors du survol.
- **Exemple CSS** :
  ```css
  .box {
      width: 100px;
      height: 100px;
      background-color: blue;
      transition: width 2s, height 2s, transform 2s;
  }
  .box:hover {
      width: 200px;
      height: 200px;
      transform: rotate(180deg);
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="box"></div>
  ```

#### **Mission 58 : Les marques d'honneur**

- **Description** : Crée des badges avec CSS et JavaScript qui affichent des notifications dynamiques.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <style>
      .badge {
          position: relative;
          display: inline-block;
          padding: 10px 20px;
          background-color: #4CAF50;
          color: white;
          border-radius: 12px;
      }
      .badge::after {
          content: attr(data-count);
          position: absolute;
          top: -10px;
          right: -10px;
          width: 20px;
          height: 20px;
          background-color: red;
          color: white;
          border-radius: 50%;
          text-align: center;
          line-height: 20px;
      }
  </style>
  <div class="badge" id="myBadge" data-count="1">Notifications</div>
  <button onclick="increaseBadgeCount()">Increase</button>
  <script>
      function increaseBadgeCount() {
          var badge = document.getElementById("myBadge");
          var count = parseInt(badge.getAttribute("data-count"));
          badge.setAttribute("data-count", count + 1);
      }
  </script>
  ```

#### **Mission 59 : La plume d'écrivain**

- **Description** : Crée un effet de machine à écrire sur du texte en utilisant CSS et JavaScript.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <style>
      .typewriter h1 {
          overflow: hidden;
          border-right: .15em solid orange;
          white-space: nowrap;
          margin: 0 auto;
          letter-spacing: .15em;
          animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
      }
      @keyframes typing {
          from { width: 0 }
          to { width: 100% }
      }
      @keyframes blink-caret {
          from, to { border-color: transparent }
          50% { border-color: orange; }
      }
  </style>
  <div class="typewriter">
      <h1>Typing Effect</h1>
  </div>
  ```

#### **Mission 60 : L'alerte sonore**

- **Description** : Crée des alertes stylisées et interactives avec CSS et JavaScript.
- **Exemple HTML/CSS/JavaScript** :
  ```html
  <style>
      .alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
          margin-bottom: 15px;
          transition: opacity 0.6s;
      }
      .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
      }
      .closebtn:hover {
          color: black;
      }
  </style>
  <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      This is an alert box.
  </div>
  ```

Bonne chance, jeune dresseur ! Chaque mission accomplie te rapprochera du titre de Maître du Web. À toi de jouer !