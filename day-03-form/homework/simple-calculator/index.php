<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="first-number">Nhập số a</label>
        <br />
        <input type="number" name="first-number" id="first-number" placeholder="Enter your first number" required />
        <br />
        <label for="second-number">Nhập số b</label>
        <br />
        <input type="number" name="second-number" id="second-number" placeholder="Enter your second number" required />
        <br /> <br />
        <input type="submit" name="sum" value="a + b" />
        <input type="submit" name="sub" value="a - b" />
        <input type="submit" name="mul" value="a * b" />
        <input type="submit" name="div" value="a / b" />
    </form>
    <?php
    if (isset($_POST['first-number']) && isset($_POST['second-number'])) {
        $firstNumber = $_POST['first-number'];
        $secondNumber = $_POST['second-number'];
        // TODO: CSS for these warning message
        if (!is_numeric($firstNumber)) {
            echo "First number is not a number";
        }
        if (!is_numeric($secondNumber)) {
            echo "Second number is not a number";
        }
        // check submit button
        if (isset($_POST['sum'])) {
            echo $firstNumber + $secondNumber;
        }
        // TODO: Do the rest for sub, mul, div
    }
    ?>
</body>
</html>