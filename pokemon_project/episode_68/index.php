<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="profileForm" onsubmit="return updateProfile()">
        Name: <input type="text" id="name" value="John Doe"><br>
        Email: <input type="text" id="email" value="john.doe@example.com"><br>
        <button type="submit">Update</button>
    </form>
    <div id="profileResult">
        
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
    
    <?php
    $name = htmlspecialchars($_POST['name']="");
    $email = htmlspecialchars($_POST['email']="");
    echo "Profile updated: $name, $email";
    ?>
</body>
</html>
