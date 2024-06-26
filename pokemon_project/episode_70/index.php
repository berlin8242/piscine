<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="blogForm" onsubmit="return addArticle()">
      Title: <input type="text" id="title"><br>
      Content: <textarea id="content"></textarea><br>
      <button type="submit">Add Article</button>
  </form>
  <div id="blogArticles">
      
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
  
  <?php
  $title = htmlspecialchars($_POST['title']="");
  $content = htmlspecialchars($_POST['content']="");
  $articles = [];
  if (file_exists('articles.json')) {
      $articles = json_decode(file_get_contents('articles.json'), true);
  }
  $articles[] = ['title' => $title, 'content' => $content];
  file_put_contents('articles.json', json_encode($articles));
  echo "<div><h2>$title</h2><p>$content</p></div>";
  ?> 
</body>
</html>
