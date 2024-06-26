<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST['message']);
      echo "Thank you, $name. Your message has been received.";
  }
?>
</body>
</html>
