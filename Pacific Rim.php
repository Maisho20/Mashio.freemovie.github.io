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
    <title>Avatar: The Way of Water</title>

    <!-- link box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- link ke css -->
    <link rel="stylesheet" href="style.css">

    <!-- link swiper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <!-- untuk menambahkan gambar ikon -->
    <link rel="shorcut icon" href="LOGO.png" type="image">
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
                <a href="index.php#home" class="nav-link">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-tittle">Home</span>
                </a>

                <a href="index.php#popular" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-tittle">Popular</span>
                </a>
                
                <a href="index.php#movies" class="nav-link">
                    <i class='bx bx-movie-play'></i>
                    <span class="nav-link-tittle">Movies</span>
                </a>
                
                <a href="index.php#series" class="nav-link">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-tittle">Series</span>
                </a>
                
            </div>

            <!-- search box -->
            <!-- <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search Movies">
                <img src="bx-search.svg" alt="" class="box-search">
            </div> -->

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
    
    <!-- main -->
    <div class="play-container container">
        <!-- play image -->
        <img src="https://image.tmdb.org/t/p/original/ig7qUy7drkEFZNCK7gi0hMn1WMN.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Pacific Rim (2013)</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                6.9
            </div>
            <div class="tags">
                <span>Action,</span>
                <span>Adventure,</span>
                <span>Sci-Fi</span>
            </div>
            <!-- trailer button -->
            <!-- <a href="multivers.html" class="play-movie">
                <i class='bx bx-right-arrow'></i>
            </a> -->
        </div>
        <!-- play btn -->
        <i class='bx bx-right-arrow play-movie'></i>
        <!-- video container -->
        <div class="video-container">
            <!-- video box -->
            <div class="video-box">
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi1369752345/1434659607842-pgv4ql-1632281728566.mp4?Expires=1671529937&Signature=WZb-fqx90RXGAKsf~~QAYM~ZmU9UPfNarWrBNr9Uw3StUVq-2clLApYLgh-fYeT~nrcGyQg1e9mut3LlvAdBtaJGayzBI48xn54WqpuVZbeW91u4IZtZmMw~D25PtqSV-OEM6mIlT5YbtMiN0MQDqiW2VsTu-~p7e94QiW3NtXOaHXRNz2SKiSUNoqDUiJxY7n2br6kzofs0-23uDWA3GGibQ99k6Evk2oCCTbfD74fokgtdBJHyhua2ZLoS~DHi5DoXTWo-1~jHL9NO3LAdI1iQPSUw5ylgERB-FmYZGYeo-KM41kYQw~viGADkEuHgHEkb1jY6gay-cQcwnXUWFA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Pacific Rim (2013)</h2>
        <p>As war between humankind and monstrous sea creatures wages on, a former pilot and a trainee are paired up to drive a seemingly obsolete special weapon in a desperate effort to save the world.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMjE5NjE5Mzk2MV5BMl5BanBnXkFtZTcwODI5MDE1Ng@@._V1_FMjpg_UX284_.jpg" alt="" class="cast-img">
                <span class="cast-title">Charlie Hunnam</span>
                <br>
                <span class="cast-ass">Raleigh Becket</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNzEzMTI2NjEyNF5BMl5BanBnXkFtZTcwNTA0OTE4OA@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Idris Elba</span>
                <br>
                <span class="cast-ass">Stacker Pentecost</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTI5NjE0MjcwN15BMl5BanBnXkFtZTYwMDcxNTA1._V1_FMjpg_UX267_.jpg" alt="" class="cast-img">
                <span class="cast-title">Rinko Kikuchi</span>
                <br>
                <span class="cast-ass">Mako Mori</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BZmRjYmU0NDgtNTdiNS00N2Y4LTg5MzctNTU3NGNkOTgxYWE2XkEyXkFqcGdeQXVyMTA2MDIzMDE5._V1_FMjpg_UY576_.jpg" alt="" class="cast-img">
                <span class="cast-title">Burn Gorman</span>
                <br>
                <span class="cast-ass">Hermann Gottlieb</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYjI2YWE1ODUtNTFjNy00MDgyLWJmNzgtNjBiZWE1NDY1YzFhXkEyXkFqcGdeQXVyODgwOTcwMDY@._V1_FMjpg_UX749_.jpg" alt="" class="cast-img">
                <span class="cast-title">Charlie Day</span>
                <br>
                <span class="cast-ass">Dr. Newton Geiszler</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTY0NzAzMTEyOV5BMl5BanBnXkFtZTcwNjYwMzYwNg@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Ron Perlman</span>
                <br>
                <span class="cast-ass">Hannibal Chau</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTM3MDgyMzY2Nl5BMl5BanBnXkFtZTcwMjc2MjMzMQ@@._V1_FMjpg_UX350_.jpg" alt="" class="cast-img">
                <span class="cast-title">Clifton Collins Jr.</span>
                <br>
                <span class="cast-ass">Ops Tendo Choi</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi1369752345/1434659607842-pgv4ql-1632281728566.mp4?Expires=1671529937&Signature=WZb-fqx90RXGAKsf~~QAYM~ZmU9UPfNarWrBNr9Uw3StUVq-2clLApYLgh-fYeT~nrcGyQg1e9mut3LlvAdBtaJGayzBI48xn54WqpuVZbeW91u4IZtZmMw~D25PtqSV-OEM6mIlT5YbtMiN0MQDqiW2VsTu-~p7e94QiW3NtXOaHXRNz2SKiSUNoqDUiJxY7n2br6kzofs0-23uDWA3GGibQ99k6Evk2oCCTbfD74fokgtdBJHyhua2ZLoS~DHi5DoXTWo-1~jHL9NO3LAdI1iQPSUw5ylgERB-FmYZGYeo-KM41kYQw~viGADkEuHgHEkb1jY6gay-cQcwnXUWFA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi1369752345/1434659607842-pgv4ql-1632281728566.mp4?Expires=1671529937&Signature=WZb-fqx90RXGAKsf~~QAYM~ZmU9UPfNarWrBNr9Uw3StUVq-2clLApYLgh-fYeT~nrcGyQg1e9mut3LlvAdBtaJGayzBI48xn54WqpuVZbeW91u4IZtZmMw~D25PtqSV-OEM6mIlT5YbtMiN0MQDqiW2VsTu-~p7e94QiW3NtXOaHXRNz2SKiSUNoqDUiJxY7n2br6kzofs0-23uDWA3GGibQ99k6Evk2oCCTbfD74fokgtdBJHyhua2ZLoS~DHi5DoXTWo-1~jHL9NO3LAdI1iQPSUw5ylgERB-FmYZGYeo-KM41kYQw~viGADkEuHgHEkb1jY6gay-cQcwnXUWFA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi1369752345/1434659607842-pgv4ql-1632281728566.mp4?Expires=1671529937&Signature=WZb-fqx90RXGAKsf~~QAYM~ZmU9UPfNarWrBNr9Uw3StUVq-2clLApYLgh-fYeT~nrcGyQg1e9mut3LlvAdBtaJGayzBI48xn54WqpuVZbeW91u4IZtZmMw~D25PtqSV-OEM6mIlT5YbtMiN0MQDqiW2VsTu-~p7e94QiW3NtXOaHXRNz2SKiSUNoqDUiJxY7n2br6kzofs0-23uDWA3GGibQ99k6Evk2oCCTbfD74fokgtdBJHyhua2ZLoS~DHi5DoXTWo-1~jHL9NO3LAdI1iQPSUw5ylgERB-FmYZGYeo-KM41kYQw~viGADkEuHgHEkb1jY6gay-cQcwnXUWFA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
        </div>
    </div>

    <!-- click button -->
    <button onclick="topFunction()" id="myBtn" title="Go to Top"><i class="arrow up"></i></button>

    <!-- footer & copy kanan -->
    <div class="copyright">
        &copy; Copyright Sabbaha Naufal 2022
    </div>

    <!-- link swiper files -->
    <script src="swiper-bundle.min.js"></script>
    <!-- link ke js -->
    <script src="main.js"></script>
</body>
</html>