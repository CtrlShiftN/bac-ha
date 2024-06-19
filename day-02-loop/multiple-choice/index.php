<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multiple choice</title>
</head>

<body>
	<header></header>
	<main>
		<form action="process.php" method="POST">
			<div class="question">
				<h2>What is the capital of France?</h2>
				<input type="radio" name="question_1" value="Tokyo" /> Tokyo
				<input type="radio" name="question_1" value="Hanoi" /> Hanoi
				<input type="radio" name="question_1" value="Paris" /> Paris
				<input type="radio" name="question_1" value="New York" /> New York
			</div>

			<input type="submit" value="Submit" />
		</form>
	</main>
	<footer></footer>
</body>

</html>