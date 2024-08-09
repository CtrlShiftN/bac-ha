<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Average</title>
</head>

<body>
	<?php
	$numberArr = [3, 54, 2, 8, 43, 1, 26];
	$min = $numberArr[0];
	$max = $numberArr[0];
	$sum = 0;
	$count = count($numberArr);
	$average = 0;
	for ($i = 0; $i < count($numberArr); $i++) {
		// find min
		if ($min > $numberArr[$i]) {
			$min = $numberArr[$i];
		}
		// find max
		if ($max < $numberArr[$i]) {
			$max = $numberArr[$i];
		}
		// sum
		$sum += $numberArr[$i]; // $sum = $sum + $numberArr[$i];
	}
	echo "<p> Min: ". $min ."</p>";
	echo "<p> Max: ". $max ."</p>";
	echo "<p> Average: ". $sum / $count ."</p>";
	?>
</body>

</html>