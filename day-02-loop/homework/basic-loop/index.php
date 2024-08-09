<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basic loop</title>
	<style>
		.text-red {
			color: red;
		}

		.text-blue {
			color: blue;
		}

		.numbers:nth-child(even) {
			color: red;
		}

		.numbers:nth-child(odd) {
			color: blue;
		}
	</style>
</head>

<body>
	<header></header>
	<main>
		<?php
		$number = 10;
		// for loop: 1
		// for ($i = 1; $i <= $number; $i++) {
		// 	if ($i % 2 == 0) {
		// 		echo "<p class='text-red'>" . $i . "</p>";
		// 	} else {
		// 		echo "<p class='text-blue'>" . $i . "</p>";
		// 	}
		// }
		// for loop 2
		for ($i = 1; $i <= $number; $i++) {
			echo "<p class='numbers'>" . $i . "</p>";
		}
		// while loop
		$a = 1;
		while ($a <= $number) {
			echo "<p class='numbers'>" . $a . "</p>";
			$a++;
		}
		?>
	</main>
	<footer></footer>
</body>

</html>