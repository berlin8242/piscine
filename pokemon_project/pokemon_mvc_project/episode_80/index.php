<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
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

<?php
$userModel = new UserModel();
$users = $userModel->getAllUsers();
?>
</body>
</html>