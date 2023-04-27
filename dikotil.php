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
$data_dikotil = tumbuhanDikotil();
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
            <a href='monokotil.php'>monokotil</a>
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
    <section class="home" id="home" style="background: url(imgs/home16.jpg) no-repeat; min-height: 100vh;
    display: flex;align-items: center; background-size: cover;background-position: top;">
        <div class="content">
            <h3> Tumbuhan </h3>
            <h3>Dikotil</h3>
            <a style="margin-left: 7rem;" href='#about' class='btn'> Let's Go</a>
        </div>
        <img src="imgs/bottom_wave.png" alt="" class="wave">
    </section>

    <!-- End -->

    <section class="about" id="about">
        <h2 style="top:125%" class="deco-title">About Us</h2>
        <div class="box-container">
            <div class="image">
                <img class="foto" src="imgs/strawberry.jpg" alt="">
                <p>strawberry</p>
            </div>

            <div class='content'>
                <h3 class="title">Dikotil</h3><br /><br />
                <p style="text-align:justify"><span style='margin-left:60px'>Tumbuhan Dikotil</span> adalah tumbuhan
                    berbunga yang mempunyai biji berkeping dua. Pada Tumbuhan dikotil bijinya dilindungi oleh daun buah
                    atau disebut karpel. Tumbuhan yang tergolong tumbuhan dikotil memiliki sepasang daun lembaga atau
                    kotiledon.
                </p>
                <p style="text-align:justify"><span style='margin-left:60px'> Daun</span> lembaga ini sudah terbentuk
                    sejak tahap biji, oleh karenanya sebagian besar anggotanya memiliki biji-bijian yang mudah terbelah
                    menjadi dua bagian. Hal inilah yang jadi pembeda antara tumbuhan dikotil dengan monokotil. </p>

            </div>
        </div>
    </section>


    <!-- banner-->
    <section class="banner">
        <div class="row">
            <div class="content">
                <p><span style='margin-left:60px;'>Kelas </span> Magnoliopsida dipakai sebagai nama takson bagi semua
                    tumbuhan berbunga bukan monokotil. Magnoliopsida adalah nama yang dipakai untuk menggantikan nama
                    yang dipakai sistem klasifikasi yang lebih lama, kelas Dicotyledoneae (kelas "tumbuhan berdaun
                    lembaga dua" atau "tumbuhan dikotil"). Sistem klasifikasi APG II, yang perlahan-lahan mulai luas
                    dipergunakan, tidak mengakui kelompok ini lagi karena bersifat parafiletik </p>
            </div>

            <div class="image">
                <img src="imgs/cabe.jpg">
                <p>Cabe-cabe</p>
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
                        <img src="imgs/apel.jpg">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/manggis.jpg">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/durian.jpg">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/semangka.jpg">
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
            <?php foreach ($data_dikotil as $dikotil): ?>
                <div class="box">
                    <img src="imgs/<?= $dikotil['gambar'] ?>" alt="">
                    <h3>
                        <?= $dikotil['nama'] ?>
                    </h3>
                    <h4 class="title">
                        (
                        <?= $dikotil['nama_biologi'] ?>
                        )
                    </h4>
                    <p class="desk">
                        <?= $dikotil['deskripsi'] ?>
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