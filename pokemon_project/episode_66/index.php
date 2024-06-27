<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="chatForm">
    <input type="text" id="username" placeholder="Username"><br>
    <input type="text" id="message" placeholder="Message"><br>
    <button type="button" onclick="sendMessage()">Send</button>
</form>

<div id="chatMessages">
        
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
    
<?php
$username = htmlspecialchars($_POST['username']="");
$message = htmlspecialchars($_POST['message']="");
$messages = [];
if (file_exists('messages.json')) {
    $messages = json_decode(file_get_contents('messages.json'), true);
}
$messages[] = ['username' => $username, 'message' => $message];
file_put_contents('messages.json', json_encode($messages));
echo "<p><b>$username:</b> $message</p>";
?>
    
<?php
if (file_exists('messages.json')) {
    $messages = json_decode(file_get_contents('messages.json'), true);
    foreach ($messages as $msg) {
        echo "<p><b>{$msg['username']}:</b> {$msg['message']}</p>";
    }
}
    ?>
</body>
</html>
