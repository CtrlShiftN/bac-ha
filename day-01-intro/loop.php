<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
<header></header>
    <main>
        <?php
        $number = 20000;
        // Multi
        if ($number % 2 == 0) {
            echo "Even";
        }else if ($number % 3 == 0) {
            echo "Divided by 3";
        }else if ($number % 4 == 0) {
            echo "Divided by 4";
        }else if ($number % 5 == 0) {
            echo "Divided by 5";
        }else if ($number % 6 == 0) {
            echo "Divided by 6";
        }else if ($number % 7 == 0) {
            echo "Divided by 7";
        }else if ($number % 8 == 0) {
            echo "Divided by 8";
        }else if ($number % 9 == 0) {
            echo "Divided by 9";
        }else if ($number % 10 == 0) {
            echo "Divided by 10";
        }else {
            echo "Others";
        }
        echo "<hr>";
        for ($i=2; $i <= $number ; $i++) { 
            if ($number % $i == 0) {
                echo $number . " is divided by " . $i . "<br>";
            }
        }
        ?>
    </main>
    <footer></footer>
</body>
</html>