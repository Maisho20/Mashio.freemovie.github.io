<?php
    session_start();

    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:login.php");
        exit;
    }
    require 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeMovies</title>

    <!-- link ke css -->
    <link rel="stylesheet" href="style.css">

    <!-- link box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- link swiper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <!-- untuk menambahkan gambar ikon -->
    <link rel="shorcut icon" href="Logo.png" type="image">
</head>
<body>

    <!-- Header -->
    <header>

        <!-- tulisan kiri -->
        <div class="nav container">
            <a href="index.php" class="logo">
                <span>Free</span>Movies
            </a>

            <!-- bar navigasi -->
            <div class="navbar">
                <a href="#home" class="nav-link">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-tittle">Home</span>
                </a>

                <a href="#popular" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-tittle">Popular</span>
                </a>
                
                <a href="#movies" class="nav-link">
                    <i class='bx bx-movie-play'></i>
                    <span class="nav-link-tittle">Movies</span>
                </a>
                
                <a href="#series" class="nav-link">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-tittle">Series</span>
                </a>
            </div>
            <!-- Login -->
            
            <div class="nav-login">
            <?php
            if(!$_SESSION["login"]){
                echo '
                <a href="login.php" class="user">
                    <i class="bx bx-log-in"></i>
                </a>
                ';
            }
            ?>
                <a href="logout.php" class="user">
                    <i class='bx bx-log-out'></i>
                </a>
            </div>
        </div>
    </header>

    <!-- home -->
    <section class="home container" id="home">

        <!-- foto home -->
        <img src="./Img/Po.jpg" alt="" class="home-img">
        <!-- text -->
        <div class="home-text">
            <h1 class="home-title">Doctor Strange: <br>in the Multiverse of Madness</h1>
            <p>5 Mei 2022</p>
            <a href="multivers.php" class="watch-btn">
                <i class='bx bx-play-circle'></i>
                <span>Play Films</span>
            </a>
        </div>
    </section>

    <!-- popular films -->
    <section class="popular container" id="popular">
        <!-- heading -->
        <div class="heading">
            <h2 class="heading-title">Popular</h2>
        </div>
        <!-- konten -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">

                <!-- popular -->
                <?php
                $i = 1;
                $allFilm  = getAllPopular();
                while ($row = mysqli_fetch_assoc($allFilm)) {
                ?>
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="./Img/<?= $row["gambar"];  ?>" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">
                                <?= $row["judul"];  ?>
                            </h2>
                            <span class="movie-type">
                                <?= $row["genre"];  ?>
                            </span>
                            <a href="<?= $row["ref"];  ?>" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
              </div>
              <div class="swiper-button-next" style="display: none;"></div>
              <div class="swiper-button-prev" style="display: none;"></div>
        </div>
    </section>
    <!-- end popular -->

    <!-- kumpulan film -->
    <section class="movies container" id="movies">
        <div class="heading">
            <h2 class="heading-title">Movies</h2>
        </div>

        <div class="movies-konten">

            <!-- film -->
            <?php
            $i = 1;
            $allFilm  = getAllFilm();
            while ($row = mysqli_fetch_assoc($allFilm)) {
            ?>
            <div class="movie-box">
                <img src="./Img/<?= $row["gambar"];  ?>" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">
                        <?= $row["judul"];  ?>
                    </h2>
                    <span class="movie-type">
                    <?= $row["genre"];  ?>
                    </span>
                    <a href="<?= $row["ref"];  ?>" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>

    <!-- series -->
    <section class="series container" id="series">
        <div class="heading">
            <h2 class="heading-title">Series</h2>
        </div>

        <div class="series-konten">

            <!-- series 1 -->
            <?php
            $i = 1;
            $allFilm  = getAllSeries();
            while ($row = mysqli_fetch_assoc($allFilm)) {
            ?>
            <div class="series-box">
                <img src="./Img/<?= $row["gambar"];  ?>" alt="" class="series-box-img">
                <div class="box-text">
                    <h2 class="series-title">
                        <?= $row["judul"];  ?>
                    </h2>
                    <span class="series-type">
                    <?= $row["genre"];  ?>
                    </span>
                    <a href="<?= $row["ref"];  ?>" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>

    <!-- click button -->
    <button onclick="topFunction()" id="myBtn" title="Go to Top"><i class="arrow up"></i></button>

    <!-- footer & copy kanan -->
    <div class="copyright">
        &copy; Copyright Sabbaha Naufal 2022
    </div>

    <!-- link swiper JS -->
    <script src="swiper-bundle.min.js"></script>
    <!-- link ke js -->
    <script src="main.js"></script>
</body>
</html>