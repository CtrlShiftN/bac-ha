<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>100 Integers</title>
</head>

<body>
	<!-- 
     Using while, 
        sum 100 first integers (1-100)
        then print numbers divided by 3 bw 20-50 
        and break at 50 
    -->
	<?php
	$numberOfIntegers = 100;
	$a = 1;
	$sum = 0;
	while ($a <= $numberOfIntegers) {
		// sum 100 first integers (1-100)
		$sum += $a;
		// print numbers divided by 3 bw 20-50
		if ($a >= 20 && $a <= 50) {
			if ($a % 3 == 0) {
				echo "<p>Numbers divided by 3 bw 20-50: ". $a ."</p>";
			}
		}
		// break at 50
		// if ($a == 50) {
		// 	break;
		// }
		$a++;
	}
	echo "<p>Sum: ". $sum ."</p>";
	?>
</body>

</html>