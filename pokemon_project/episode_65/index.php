<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="image" id="image"><br>
        <button type="button" onclick="uploadImage()">Upload</button>
    </form>
    <div id="gallery">

        <?php
        $files = glob("uploads/*.*");
        foreach ($files as $file) {
            echo "<img src='$file' width='100'>";
        }
        ?>
    </div>
    <script>
        function uploadImage() {
            var formData = new FormData(document.getElementById("uploadForm"));
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "upload_image.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("gallery").innerHTML += '<img src="' + xhr.responseText + '" width="100">';
                }
            };
            xhr.send(formData);
        }
    </script>
    
    <?php
    if ($_FILES['image']['name']="") {
        $filename = "uploads/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $filename);
        echo $filename;
    }
    ?>
</body>
</html>
