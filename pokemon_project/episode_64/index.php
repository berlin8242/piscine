<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" id="taskInput" placeholder="New task...">
  <button onclick="addTask()">Add</button>
  <ul id="taskList">

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

  <?php
  $task = htmlspecialchars($_POST['task']="");
  $tasks = [];
  if (file_exists('tasks.json')) {
      $tasks = json_decode(file_get_contents('tasks.json'), true);
  }
  $tasks[] = $task;
  file_put_contents('tasks.json', json_encode($tasks));
  echo "Task added";
  ?>
</body>
</html>
