<?php
session_start();

include('functions.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header('location: ../index.php');
        $_SESSION['login'] = true;
    } else {
        echo "<script>
                alert('Username/Password Salah!');
                window.location = '../login-signup.php';
            </script>";
    }
}


?>