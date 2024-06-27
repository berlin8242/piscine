<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="adminDashboard">
        
<?php
$data = [
    "Total Users" => 123,
    "Total Sales" => 4567
];
    foreach ($data as $key => $value) {
        echo "<p>$key: $value</p>";
    }
?>
</div>

<button onclick="refreshDashboard()">Refresh</button>

<script>
    function refreshDashboard() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "dashboard_data.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("adminDashboard").innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script>

<?php
$data = [
    "Total Users" => 123,
    "Total Sales" => 4567
];
    foreach ($data as $key => $value) {
        echo "<p>$key: $value</p>";
    }
?>
</body>
</html>
