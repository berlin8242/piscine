### Chapitre 4 : La Vallée des Styles

Félicitations, jeune dresseur ! Tu as traversé les Plaines CSS et es prêt à aborder la Vallée des Styles, où tu apprendras à créer des éléments essentiels pour tes pages web, tels que des en-têtes et des pieds de page stylisés. Prépare-toi à relever des défis encore plus complexes !

#### **Niveau 4 : Le voyageur aguerri (Intermédiaire)**

**Mission 31 : L'équilibre**

- **Objectif** : Centre un élément avec CSS.
- **Description** : Utilise la propriété `text-align` pour centrer le texte à l'intérieur d'un conteneur et `margin` pour centrer un bloc.
- **XP** : 10 points
- **Documentation** : [CSS Centering](https://www.w3schools.com/css/css_align.asp)

**Mission 32 : Les ombres mouvantes**

- **Objectif** : Utilise les pseudo-classes CSS.
- **Description** : Applique des styles aux éléments lors de certaines interactions (par exemple, `:hover`).
- **XP** : 10 points
- **Documentation** : [CSS Pseudo-classes](https://www.w3schools.com/css/css_pseudo_classes.asp)

**Mission 33 : Les pierres d'équilibre**

- **Objectif** : Ajoute des colonnes avec Flexbox.
- **Description** : Utilise Flexbox pour créer une mise en page à colonnes flexibles.
- **XP** : 15 points
- **Documentation** : [CSS Flexbox](https://www.w3schools.com/css/css3_flexbox.asp)

**Mission 34 : Le sentier balisé**

- **Objectif** : Crée un menu de navigation simple.
- **Description** : Utilise les listes non ordonnées et le CSS pour créer un menu de navigation horizontal.
- **XP** : 15 points
- **Documentation** : [CSS Navigation Bar](https://www.w3schools.com/css/css_navbar.asp)

**Mission 35 : Le jardin structuré**

- **Objectif** : Crée une grille avec CSS Grid.
- **Description** : Utilise CSS Grid pour créer une mise en page en grille.
- **XP** : 15 points
- **Documentation** : [CSS Grid](https://www.w3schools.com/css/css_grid.asp)

**Mission 36 : Les éclats de lumière**

- **Objectif** : Ajoute une animation CSS.
- **Description** : Utilise les animations CSS pour ajouter des effets dynamiques.
- **XP** : 20 points
- **Documentation** : [CSS Animations](https://www.w3schools.com/css/css3_animations.asp)

**Mission 37 : Le fluide temporel**

- **Objectif** : Crée une transition CSS.
- **Description** : Utilise les transitions CSS pour ajouter des effets de changement progressif.
- **XP** : 20 points
- **Documentation** : [CSS Transitions](https://www.w3schools.com/css/css3_transitions.asp)

**Mission 38 : Les écrans changeants**

- **Objectif** : Utilise des media queries pour rendre la page responsive.
- **Description** : Utilise les media queries pour adapter la mise en page à différentes tailles d'écran.
- **XP** : 20 points
- **Documentation** : [CSS Media Queries](https://www.w3schools.com/css/css_rwd_mediaqueries.asp)

**Mission 39 : La carte de visite**

- **Objectif** : Crée une carte de visite avec CSS.
- **Description** : Utilise HTML et CSS pour créer une carte de visite stylisée.
- **XP** : 25 points
- **Documentation** : [CSS Card](https://www.w3schools.com/howto/howto_css_cards.asp)

**Mission 40 : Le tableau magique**

- **Objectif** : Crée un tableau responsive avec CSS.
- **Description** : Utilise HTML et CSS pour créer un tableau qui s'adapte aux différentes tailles d'écran.
- **XP** : 25 points
- **Documentation** : [CSS Responsive Table](https://www.w3schools.com/howto/howto_css_table_responsive.asp)

---

### Détails des Missions

#### **Mission 31 : L'équilibre**

- **Description** : Centre un paragraphe de texte à l'intérieur d'un conteneur div et centre également ce conteneur horizontalement sur la page.
- **Exemple CSS** :
  ```css
  .center-text {
      text-align: center;
  }
  .center-block {
      width: 50%;
      margin: 0 auto;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="center-block">
      <p class="center-text">Ceci est un texte centré.</p>
  </div>
  ```

#### **Mission 32 : Les ombres mouvantes**

- **Description** : Utilise les pseudo-classes CSS pour changer la couleur de fond d'un bouton lorsqu'il est survolé par la souris.
- **Exemple CSS** :
  ```css
  .button {
      background-color: blue;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
  }
  .button:hover {
      background-color: green;
  }
  ```
- **Exemple HTML** :
  ```html
  <button class="button">Hover me</button>
  ```

#### **Mission 33 : Les pierres d'équilibre**

- **Description** : Utilise Flexbox pour créer une mise en page à deux colonnes.
- **Exemple CSS** :
  ```css
  .container {
      display: flex;
  }
  .column {
      flex: 50%;
      padding: 10px;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="container">
      <div class="column" style="background-color:lightblue;">
          Colonne 1
      </div>
      <div class="column" style="background-color:lightgreen;">
          Colonne 2
      </div>
  </div>
  ```

#### **Mission 34 : Le sentier balisé**

- **Description** : Crée un menu de navigation horizontal utilisant des listes non ordonnées et le CSS.
- **Exemple CSS** :
  ```css
  .navbar {
      overflow: hidden;
      background-color: #333;
  }
  .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }
  .navbar a:hover {
      background-color: #ddd;
      color: black;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="navbar">
      <a href="#home">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
  </div>
  ```

#### **Mission 35 : Le jardin structuré**

- **Description** : Utilise CSS Grid pour créer une mise en page en grille avec trois colonnes et deux lignes.
- **Exemple CSS** :
  ```css
  .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      gap: 10px;
      background-color: #2196F3;
      padding: 10px;
  }
  .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 20px;
      font-size: 30px;
      text-align: center;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="grid-container">
      <div class="grid-item">1</div>
      <div class="grid-item">2</div>
      <div class="grid-item">3</div>
      <div class="grid-item">4</div>
      <div class="grid-item">5</div>
      <div class="grid-item">6</div>
  </div>
  ```

#### **Mission 36 : Les éclats de lumière**

- **Description** : Ajoute une animation CSS qui change la couleur de fond d'un élément de rouge à jaune.
- **Exemple CSS** :
  ```css
  @keyframes example {
      from {background-color: red;}
      to {background-color: yellow;}
  }
  .animated {
      width: 100px;
      height: 100px;
      background-color: red;
      animation-name: example;
      animation-duration: 4s;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="animated"></div>
  ```

#### **Mission 37 : Le fluide temporel**

- **Description** : Ajoute une transition CSS qui agrandit un élément lorsque la souris passe dessus.
- **Exemple CSS** :
  ```css
  .transition {
      width: 100px;
      height: 100px;
      background-color: blue;
      transition: width 2s, height 2s, transform 2s;
  }
  .transition:hover {
      width: 200px;
      height: 200px;
      transform: rotate(180deg);
  }
  ```
- **Exemple HTML**

 :
  ```html
  <div class="transition"></div>
  ```

#### **Mission 38 : Les écrans changeants**

- **Description** : Utilise des media queries pour changer la couleur de fond de la page en fonction de la taille de l'écran.
- **Exemple CSS** :
  ```css
  body {
      background-color: lightblue;
  }
  @media (max-width: 600px) {
      body {
          background-color: lightgreen;
      }
  }
  ```
- **Exemple HTML** :
  ```html
  <body>
      <h1>Resize the browser window to see the effect!</h1>
  </body>
  ```

#### **Mission 39 : La carte de visite**

- **Description** : Crée une carte de visite stylisée avec des informations de contact.
- **Exemple CSS** :
  ```css
  .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
  }
  .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .container {
      padding: 2px 16px;
  }
  ```
- **Exemple HTML** :
  ```html
  <div class="card">
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
      <div class="container">
          <h4><b>John Doe</b></h4>
          <p>Architect & Engineer</p>
      </div>
  </div>
  ```

#### **Mission 40 : Le tableau magique**

- **Description** : Crée un tableau responsive qui s'adapte aux différentes tailles d'écran.
- **Exemple CSS** :
  ```css
  .responsive-table {
      border-collapse: collapse;
      width: 100%;
      margin: 20px 0;
  }
  .responsive-table th, .responsive-table td {
      border: 1px solid #ddd;
      padding: 8px;
  }
  .responsive-table th {
      background-color: #f2f2f2;
  }
  @media screen and (max-width: 600px) {
      .responsive-table thead {
          display: none;
      }
      .responsive-table td {
          display: block;
          width: 100%;
      }
      .responsive-table td::before {
          content: attr(data-label);
          float: left;
          font-weight: bold;
      }
  }
  ```
- **Exemple HTML** :
  ```html
  <table class="responsive-table">
      <thead>
          <tr>
              <th>Name</th>
              <th>Age</th>
              <th>Country</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td data-label="Name">John Doe</td>
              <td data-label="Age">29</td>
              <td data-label="Country">USA</td>
          </tr>
          <tr>
              <td data-label="Name">Anna Smith</td>
              <td data-label="Age">24</td>
              <td data-label="Country">UK</td>
          </tr>
      </tbody>
  </table>
  ```

Bonne chance, jeune dresseur ! Chaque mission accomplie te rapprochera du titre de Maître du Web. À toi de jouer !