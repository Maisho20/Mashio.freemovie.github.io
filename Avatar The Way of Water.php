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
        <img src="https://image.tmdb.org/t/p/original/fkGR1ltNbvERk3topo4dP3gWsvR.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Avatar: The Way of Water</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                8.1
            </div>
            <div class="tags">
                <span>Action,</span>
                <span>Adventure,</span>
                <span>Fantasy</span>
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi2341127449/1434659607842-pgv4ql-1669098432793.mp4?Expires=1671677654&Signature=mywZjE9FXo7jLyHi3LHcVjzL6z6Sb9fosOKpwGQ~kuJ~P8Ywaa1d0G4y1cskWSX9~~bvt9wp07dYVemdqFVl~arF71Jd9nPz8Xqsuz0~dzqRZBJawOfM8PG2cTsoGeJeLyyajkN-W9T-h50JBDX5I9qzmZGrc359Ypu5Fdkd9Jf42yeQvAB~SaMvgblpTWrQCd1ZU8QktJ3qJDGhg6IFJYqRPeNHnwsIa1vTp~AlQfsux4ErUx-WxuvNARdNhKenwupEbSN9n30Myd52d~roAKt1WZ0m7hiKAqy9JtyiT4KrfhfBruc40Vz3qub50JIeoowoASHzTtMXeU1KmX4bew__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Avatar: The Way of Water</h2>
        <p>Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BZWUwNmEwZTUtYzMxMS00ODg5LTlmYjItMGU4ZjNmN2Q1NjkwXkEyXkFqcGdeQXVyMTM1MjAxMDc3._V1_FMjpg_UX567_.jpg" alt="" class="cast-img">
                <span class="cast-title">Sam Worthington</span>
                <br>
                <span class="cast-ass">Jake Sully</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMGNhNzdlMTAtZGE2NS00MmU5LWIzNmYtMjVlNThiNmU1ZWY4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Zoe Saldana</span>
                <br>
                <span class="cast-ass">Neytiri</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMGVmYjQyZGItMGI1MC00OWRkLThhYzUtMTcxNDg5NjFjZjhjXkEyXkFqcGdeQXVyNTU4MTY0MTk@._V1_FMjpg_UX1080_.jpg" alt="" class="cast-img">
                <span class="cast-title">Britain Dalton</span>
                <br>
                <span class="cast-ass">Lo'ak</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMzNiODE4ZmItOWQ0My00NjBlLWIxZTMtMTZjY2U4ZGViN2I4XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_FMjpg_UX1200_.jpg" alt="" class="cast-img">
                <span class="cast-title">Jamie Flatters</span>
                <br>
                <span class="cast-ass">Neteyam</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYjNiMjU5NjYtYTRmNy00Y2FlLWJmYWEtOTE4NmM2YzYzNDYxXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Jack Champion</span>
                <br>
                <span class="cast-ass">Spider</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTIxMzA1MDQyM15BMl5BanBnXkFtZTYwNzMwMjI3._V1_FMjpg_UX485_.jpg" alt="" class="cast-img">
                <span class="cast-title">Cliff Curtis</span>
                <br>
                <span class="cast-ass">Tonowari</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNzkyYTgzMWEtNGUyZi00ZjA3LThmODctOGRhN2MxYjc3MDZmXkEyXkFqcGdeQXVyMzk0NDMzOQ@@._V1_FMjpg_UX1170_.jpg" alt="" class="cast-img">
                <span class="cast-title">Joel David Moore</span>
                <br>
                <span class="cast-ass">Norm</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://layarkacaxxi.icu/f/dmg5esxgz8m-j7k/0886609f0ca5e93a95cd978267ed01ec" target="_blank" download>Download</a>
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