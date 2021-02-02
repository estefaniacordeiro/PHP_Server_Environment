<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment</title>
    <link rel='stylesheet' href="script.css">
</head>
<body>

    <?php

    session_start();

    if(!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
        $url = 'index.php';
        header('Location: ' . $url);
        die();
    }
    echo "<h3>You have successfully logged in!</h3>";

    ?>

    <!-- <h3>You have successfully logged in!</h3> -->
    <button class="log"><a href="close_session.php">Log out</a></button>

</body>
</html>