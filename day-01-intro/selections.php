<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selections</title>
</head>
<body>
    <header></header>
    <main>
        <?php
        // Single
            $number = 9;
            if ($number > 10) {
                echo "Number is bigger than 10";
            }else {
                echo "Number is smaller or equal to 10";
            }
            echo "<hr>";
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
        // Switch
        switch ($number % 3) {
            case 0:
                echo "Divided by 3";
                break;
            case 1:
                echo "Remainer = 1";
                break;
            case 2:
                echo "Remainer = 2";
                break;
            default:
                # code...
                break;
        }
        ?>
    </main>
    <footer></footer>
</body>
</html>