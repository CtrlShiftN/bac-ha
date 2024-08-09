<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Table</title>
    <style>
        #chessTable {
            /* width: 100%; */
            background-color: white;
            border: 1px solid black;
        }

        td {
            padding: 30px;
            border: 0.5px solid black;
        }

        .bg-lightgreen {
            background-color: lightgreen;
        }
    </style>
</head>

<body>
    <?php
    function isPrime($number) {
        if ($number < 2) {
            return false;
        }else {
            for ($i=2; $i <= sqrt($number); $i++) { 
				if ($number % $i == 0) {
					return false;
				}
			}
        }
		return true;
    }
    ?>
    <table id="chessTable">
        <?php
        $size = 10;
        $count = 1;
        for ($i = 0; $i < $size; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $size; $j++) {
                if (isPrime($count)) {
                    echo "<td class='bg-lightgreen'>" . $count . "</td>";
                } else {
                    echo "<td>" . $count . "</td>";
                }
                $count++;
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>