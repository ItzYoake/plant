<?php

include('functions.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    register($username, $password);
    echo "<script>
                alert('Pendaftaran Berhasil! Silahkan Login!');
                window.location = '../login-signup.php';
            </script>";
}


?>