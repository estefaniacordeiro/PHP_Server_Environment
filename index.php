<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment</title>
    <link rel='stylesheet' href="script.css">
</head>
<body>
    <form class="form" action="validate.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="admin@gmail.com">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="admin" minlength="3">
        <input class="log" type="submit" value="Log in">
    </form>

</body>
</html>
