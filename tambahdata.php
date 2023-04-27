<!DOCTYPE html>

<?php

session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>
            window.location = 'login-signup.php';
        </script>";
    die;
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/UAS.css">
    <link rel="stylesheet" href="css/tambah-data.css">
</head>

<body>

    <!-- Header-->
    <header class="header">
        <a href="#" class="logo"> <img class="logo2" src='imgs/FX13_plant.svg'>Plant</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="monokotil.php">monokotil</a>
            <a href="dikotil.php">dikotil</a>
            <a href="#gallery">gallery</a>

        </nav>
        <div class="icons">
            <div id="login-btn" class="fas fa-user" onclick="getInfo()"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <!--Login Form-->

        <form action="" class="login-form">
            <h3>login form</h3>
            <input type="email" placeholder="Enter your email" class="box" id="username">
            <input type="password" placeholder="Enter your password" class="box" id="password">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember-me</label>
            </div>
            <a href="" class="btn" onclick="getInfo()">login</a>
        </form>

    </header>

    <!-- End -->

    <section>
        <h1>Tambah Data</h1>

        <form action="actions/tambah-data.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="jenis-tumbuhan">Jenis Tumbuhan</label>
                <select name="jenis-tumbuhan" id="jenis-tumbuhan" required>
                    <option value="monokotil">Monokotil</option>
                    <option value="dikotil">Dikotil</option>
                </select>
            </div>
            <div>
                <label for="nama-tumbuhan">Nama Tumbuhan</label>
                <input type="text" name="nama" id="nama-tumbuhan" required>
            </div>
            <div>
                <label for="nama-biologi">Nama Biologi</label>
                <input type="text" name="nama-biologi" id="nama-biologi" required>
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" required>
            </div>
            <div>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" required>
            </div>
            <button type="submit" name="tambah">Tambah</button>
        </form>
    </section>

    <script src="js/UAS.js"></script>
</body>

</html>