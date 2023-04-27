<!DOCTYPE html>

<?php

session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>
            window.location = 'login-signup.php';
        </script>";
    die;
}

include('actions/functions.php');
$data_monokotil = tumbuhanMonokotil();

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Plants </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/UAS.css">
</head>

<body>
    <!-- Header-->
    <header class="header">
        <a href="UAS.html" class="logo"> <img class="logo2" src='imgs/FX13_plant.svg'>Plant</a>
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
            <input type="email" placeholder="Enter your email" class="box">
            <input type="password" placeholder="Enter your password" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember-me</label>
            </div>
            <a href="#" class="btn">login</a>
        </form>


    </header>

    <!-- End -->

    <!-- Home -->
    <section class="home" id="home" style="background: url(imgs/home12.jpg) no-repeat; min-height: 100vh; display: flex;align-items: center;
    background-size: cover;background-position: top;">
        <div class="content">
            <h3> Tumbuhan </h3><br />
            <h3> Monokotil</h3>
            <a style="margin-left: 7rem;" href='#about' class='btn'> Let's Go</a>
        </div>
        <img src="imgs/bottom_wave.png" alt="" class="wave">
    </section>

    <!-- End -->

    <section class="about" id="about">
        <h2 style="top:125%" class="deco-title">About Us</h2>
        <div class="box-container">
            <div class="image">
                <img class="foto" src="imgs/potato1.jpg" alt="">
                <p>kentang</p>
            </div>

            <div class='content'>
                <h3 class="title">Monokotil</h3><br /><br />
                <p style="text-align:justify"><span style='margin-left:60px'>Monokotil</span> atau tumbuhan berkeping
                    satu merupakan tumbuhan yang berbunga, tetapi bijinya tidak bisa
                    membelah karena hanya mempunyai satu daun lembaga. Kelompok tumbuhan monokotil ini diakui sebagai
                    takson dalam sistem klasifikasi tumbuhan yang mempunyai beberapa variasi nama seperti
                    Monocotyledoneae, Liliidae, dan Liliopsida.
                </p>
                <p style="text-align:justify"><span style='margin-left:60px'> Akan</span> tetapi, ada satu suku dengan
                    jumlah anggota terbesar dalam dunia tumbuhan berbunga, yaitu suku Orchidaceae. Orchidaceae ini
                    merupakan suku anggrek-anggrekan dan ada sekitar lima puluh ribu sampai enam puluh ribu jenis
                    tumbuhan monokotil yang satu ini.</p>
                </p>

            </div>
        </div>
    </section>


    <!-- banner-->
    <section class="banner">
        <div class="row">
            <div class="content">
                <p><span style="margin-left: 60px;">Berdasarkan</span> analisis filogeni, kelompok ini diketahui
                    bersifat monofiletik atau holofiletik. Sistem klasifikasi APG II mengakui monokotil sebagai klad
                    yang disebut Monokotil. Kelompok tumbuhan ini mencakup berbagai tumbuhan paling berguna dalam
                    kehidupan manusia. Sebagai sumber pangan, sumber energi nabati, sumber bahan baku industri,
                    perumahan, dekorasi, pakaian, media penulisan, zat pewarna, dan sebagainya.</p>
                <p><span style="margin-left: 60px;">Terdapat</span> sekitar 50 ribu hingga 60 ribu jenis yang telah
                    dikenal; menurut IUCN terdapat 59.300 jenis. Orchidaceae (suku anggrek-anggrekan) adalah suku yang
                    memiliki anggota terbesar dalam dunia tumbuhan berbunga, dengan 20 ribu jenis.</p>
            </div>

            <div class="image">
                <img src="imgs/gallery1.jpg">
                <p> Anggrek Bulan Ungu</p>
            </div>
        </div>
    </section>

    <!-- Gallery-->
    <section class="gallery" id="gallery">

        <h2 class="heading"> Gallery</h2>
        <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/crocus.jpg">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/buaya.jfif">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/padi.jfif">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/aparagus.jpg">
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End-->

    <!-- Contoh-->
    <section class="contoh" id="contoh">
        <h2 class="heading">Contoh</h2>
        <div class="box-container">
            <?php foreach ($data_monokotil as $monokotil): ?>
                <div class="box">
                    <img src="imgs/<?= $monokotil['gambar'] ?>" alt="">
                    <h3>
                        <?= $monokotil['nama'] ?>
                    </h3>
                    <h4 class="title">
                        (
                        <?= $monokotil['nama_biologi'] ?>
                        )
                    </h4>
                    <p class="desk">
                        <?= $monokotil['deskripsi'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!--End-->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/UAS.js"></script>
</body>

</html>