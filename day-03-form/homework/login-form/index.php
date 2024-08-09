<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
		.text-danger {
			color: red;
		}
	</style>
</head>

<body>
	<h3>Sign in</h3>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
		<label for="username">Username</label>
		<br />
		<input type="text" name="username" id="username" placeholder="username" required>
		<br />
		<label for="password">Password</label>
		<br />
		<input type="password" name="password" id="password" placeholder="password" required>
		<br /><br />
		<input type="submit" value="Login">
	</form>
	<?php
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == 'admin' && $password == 'admin') {
			echo "<p>Dang nhap thanh cong!</p>";
		} else {
			echo "<p class='text-danger'>Thong tin dang nhap khong chinh xac...</p>";
		}
	}
	?>
</body>

</html>