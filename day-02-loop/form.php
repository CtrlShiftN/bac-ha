<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <header></header>
    <main>
        <form action="">
            <input type="text" name="q" placeholder="Enter something..." />
            <br>
            <input type="email" name="email" placeholder="Enter your email..." />
            <br>
            <input type="text" name="tel" placeholder="Enter your phone number..." pattern="(84|0[3|5|7|8|9])+([0-9]{8})" aria-label="Wrong format" required />
            <button>Submit</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>