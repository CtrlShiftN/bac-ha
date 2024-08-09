<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chess Table</title>
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
		tr:nth-child(odd) td:nth-child(odd) {
			background-color: black;
		}
		tr:nth-child(even) td:nth-child(even) {
			background-color: black;
		}
	</style>
</head>

<body>
	<table id="chessTable">
		<?php
		$size = 8;
		for ($i = 0; $i < $size; $i++) {
			echo "<tr>";
			for ($j = 0; $j < $size; $j++) {
				echo "<td></td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>