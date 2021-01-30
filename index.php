<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <h1>
        <?php
            date_default_timezone_set("Europe/Amsterdam");
            $time = date("H");
            if ($time>="6" AND $time<"12"){
                echo "Goede morgen! <br>";
                echo "Het is nu ", date("H:i");
                echo "<body style='background-image: url(images/morning.png)'>";
            } elseif ($time>="12" AND $time<"18"){
                echo "Goede middag! <br>";
                echo "Het is nu ", date("H:i");
                echo "<body style='background-image: url(images/afternoon.png)'>";
            } elseif ($time>="18" AND $time<="23"){
                echo "Goede avond! <br>";
                echo "Het is nu ", date("H:i");
                echo "<body style='background-image: url(images/evening.png)'>";
            } elseif ($time>="0" AND $time<"6"){
                echo "Goede nacht! <br>";
                echo "Het is nu ", date("H:i");
                echo "<body style='background-image: url(images/night.png)'>";
            } else {
                echo "Time is broken";
            }
        ?>
    </h1>
</body>
</html>