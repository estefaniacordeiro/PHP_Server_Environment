<?php

//Hardcoded variables
$userEmail = 'admin@gmail.com';
$userPassword = 'admin';

session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == $userEmail && $password == $userPassword) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $url = 'panel.php';
        header('Location: ' . $url);
        die();
    } else {
        echo "<script>alert('This user doesnt exist!');</script>";
        $url = 'index.php';
        header('Location: ' . $url);
        die();
    }
}

?>