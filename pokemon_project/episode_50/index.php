<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  session_start();
  $_SESSION["username"] = "Johan82";
  $_SESSION["email"] = "johan.caron@example.com"; 
?>

<h2>User Profile</h2>
<p>Username: <?php echo $_SESSION["username"]; ?></p>
<p>Email: <?php echo $_SESSION["email"]; ?></p>
</body>
</html>
