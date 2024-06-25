<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $hour = date(10);
        if ($hour < 12) {
    echo "Good morning!";
    } elseif ($hour < 18) {
    echo "Good afternoon!";
    } else {
    echo "Good evening!";
    }
    ?>

</body>
</html>
