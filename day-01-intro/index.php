<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        $greeting = "Hello, ";
        $username = "Nam";
        echo "<p>".$greeting.$username."</p>";
        echo "<p>".$greeting.$username."</p>";
        // echo $username;
        date_default_timezone_set("Asia/Bangkok");
        echo date("d-m-Y H:i:s");
    ?>
</body>
</html>