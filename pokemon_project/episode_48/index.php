<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <?php
        $day = date("l");
        if ($day == "Monday") {
            echo "Happy Monday!";
        } elseif ($day == "Friday") {
            echo "TGIF!";
        } else {
            echo "Have a nice day!";
        }
        ?>
    </div>
</body>
</html>
