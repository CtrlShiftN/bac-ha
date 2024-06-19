<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>

<body>
	<header></header>
	<main>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="text" name="username" placeholder="Enter your name...">
			<button>Submit</button>
		</form>
		<hr>
		<p>Your payload: </p>
		<?php
			if (isset($_POST['username'])) {
				echo "Username: ".$_POST['username'];
			}
		?>
	</main>
	<footer></footer>
</body>

</html>