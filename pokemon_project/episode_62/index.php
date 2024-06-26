<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

<?php
  $username = htmlspecialchars($_POST['username']="");
  $comment = htmlspecialchars($_POST['comment']="");
  echo "<p><b>$username:</b> $comment</p>";
?>

</body>
</html>
