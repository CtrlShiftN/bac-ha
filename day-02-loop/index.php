<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Pyramid</title>
</head>
<body>
    <?php
        $line = 4;
        for($i = 1; $i <= $line; $i++){
            // Left side
            // Space
            for ($j=$line-$i; $j >= 1; $j--) { 
                echo "&nbsp;&nbsp;&nbsp;";
            }
            // Asterisk
            for ($q=0; $q < $i; $q++) { 
                echo 2**$q."&nbsp;";
            }
            // Right side
            for ($k=$i - 1; $k > 0; $k--) { 
                echo 2**($k-1)."&nbsp;";
            }
            echo "<br>";
        }
    ?>
</body>
</html>