<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Username Extractor</title>
</head>

<body>
	<?php
	$exampleEmail = "thevu@gmail.com";
	// Method 01
	$emailLength = strlen($exampleEmail);
	$result = "";
	for ($i = 0; $i < $emailLength; $i++) {
		if ($exampleEmail[$i] != "@") {
			$result .= $exampleEmail[$i];
		}else {
			break;
		}
	}
	// echo $result;
	// Method 02
	$emailInfoArr = explode("@", $exampleEmail);
	var_dump($emailInfoArr);
	echo "<br>";
	echo $emailInfoArr[0];
	?>
</body>

</html>