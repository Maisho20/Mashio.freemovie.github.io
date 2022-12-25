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
        <img src="https://image.tmdb.org/t/p/original/ynUgLlrTASSz87Op39DKj6SHeOR.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Thor: Love and Thunder</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                6.3
            </div>
            <div class="tags">
                <span>Action,</span>
                <span>Adventure,</span>
                <span>Comedy</span>
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Thor: Love and Thunder</h2>
        <p>After his retirement is interrupted by Gorr the God Butcher, a galactic killer who seeks the extinction of the gods, Thor enlists the help of King Valkyrie, Korg, and ex-girlfriend Jane Foster, who now inexplicably wields Mjolnir as the Mighty Thor. Together they embark upon a harrowing cosmic adventure to uncover the mystery of the God Butcher’s vengeance and stop him before it’s too late.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BOTU2MTI0NTIyNV5BMl5BanBnXkFtZTcwMTA4Nzc3OA@@._V1_FMjpg_UX384_.jpg" alt="" class="cast-img">
                <span class="cast-title">Chris Hemsworth</span>
                <br>
                <span class="cast-ass">Thor Odinson</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYzU0ZGRhZWItMGJlNy00YzlkLWIzOWYtNDA2NzlhMDg3YjMwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Natalie Portman</span>
                <br>
                <span class="cast-ass">Jane Foster / The Mighty Thor</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTkxMzk4MjQ4MF5BMl5BanBnXkFtZTcwMzExODQxOA@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Christian Bale</span>
                <br>
                <span class="cast-ass">Gorr</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNjk4MDU3NDg4NF5BMl5BanBnXkFtZTcwMjMxMjcwNA@@._V1_FMjpg_UX667_.jpg" alt="" class="cast-img">
                <span class="cast-title">Tessa Thompson</span>
                <br>
                <span class="cast-ass">King Valkyrie</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTQyMTExNTMxOF5BMl5BanBnXkFtZTcwNDg1NzkzNw@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Russell Crowe</span>
                <br>
                <span class="cast-ass">Zeus</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNzEzMTI2NjEyNF5BMl5BanBnXkFtZTcwNTA0OTE4OA@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Idris Elba</span>
                <br>
                <span class="cast-ass">Heimdall</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTY0MzU1MTEzMl5BMl5BanBnXkFtZTgwMDY3OTA2MDE@._V1_FMjpg_UX445_.jpg" alt="" class="cast-img">
                <span class="cast-title">Jaimie Alexander</span>
                <br>
                <span class="cast-ass">Sif</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
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