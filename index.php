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





    <!-- Home -->
    <section class="home" id="home">
        <div class="content">
            <h3> Klasifikasi </h3><br />
            <h3>Tumbuhan</h3><br />
            <a style="margin-left: 7rem;" href='#about' class='btn'> Let's Go</a>
        </div>
        <img src="imgs/bottom_wave.png" alt="" class="wave">
    </section>

    <!-- End -->

    <section class="about" id="about">
        <h2 class="deco-title">About Us</h2>
        <div class="box-container">
            <div class="image">
                <img class="foto" src="imgs/nanas.jpg" alt="">
                <p>nanas</p>
            </div>

            <div class='content'>
                <h3 class="title">Klasifikasi Tumbuhan</h3><br /><br />
                <p style='text-align:justify;'><span style="margin-left:60px;">Klasifikasi</span> tumbuhan adalah
                    pembentukan kelompok-kelompok dari seluruh tumbuhan yang ada di bumi ini
                    hingga dapat disusun takson-takson secara teratur mengikuti suatu hierarki. Sifat-sifat yang
                    dijadikan dasar dalam mengadakan klasifikasi berbeda-beda tergantung orang yang mengadakan
                    klasifikasi dan tujuan yang ingin dicapai dengan pengklasifikasian itu. <a href="#monodiko"><i>Read
                            more</i></a>
                </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>Monokotil</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>Dikotil</h3>
                    </div>
                </div>
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
                        <img src="imgs/gallery1.jpg">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/gallery2.jpg">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/gallery3.jpg">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="imgs/gallery4.jpg">
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End-->

    <!-- Plants-->
    <section class="plant" id="plant">
        <h2 class="heading" id="monodiko"> Tumbuhan Monokotil & Dikotil </h2>
        <div class="box-container">
            <div class="box">
                <img src="imgs/jagung.jpg" alt="">
                <div class="content">
                    <h3>Jagung</h3>
                    <a href="monokotil.php" class="btn">see details</a>
                </div>
            </div>

            <div class="box">
                <img src="imgs/gallery2.jpg" alt="">
                <div class="content">
                    <h3>Jeruk</h3>
                    <a href="dikotil.php" class="btn">see details</a>
                </div>
            </div>
        </div>

        <a href="tambahdata.php" class="btn btn-tambah">Tambah Data</a>

    </section>




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/UAS.js"></script>
</body>

</html>