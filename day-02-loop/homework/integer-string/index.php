<?php
$number = 10;
// n-
for ($i = 1; $i <= $number; $i++) {
	echo $i;
	if ($i < $number) {
		echo "-";
	}else {
		continue;
	}
}
echo "<br>";
// -n
for ($i = 1; $i <= $number; $i++) {
	if ($i > 1) {
		echo "-";
	}
	echo $i;
}
echo "<br>";
// implode
$integerArr = [];
for ($i = 1; $i <= $number; $i++) {
	$integerArr[] = $i;
}
// var_dump($integerArr);
echo implode("-", $integerArr);
