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
        <img src="https://image.tmdb.org/t/p/original/4DlpPJOzaZleypbfbuOJlv5pSPw.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Pacific Rim: Uprising</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                5.6
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi652654617/1434659607842-pgv4ql-1516810209789.mp4?Expires=1671528012&Signature=eMbiS3UyPXXUEUap~WYDflV1ZExkdZX-CAayreqTvZsEDLHM1PRr1pglzCJW6nWPHmaAaOPEsLMZxM0zsil9HtuNWye3r~~rsKWlJFEoCa-7BwE-7IH17zrAlmjIbqrjQS5hwmM9-R8vQ6UTjS7kP0CYB2ja2mR6JD4mJP~MAXcPZ2e5tHW8pCeJH6xkps2aDE1gOCYOSHoOAa6Y~HsPa7kCYfugRMhM0feNN9pAubqTgrI3RUzPBUJkAanA51TK51NbFJ7Ux9Wgnh~eoWWjztK1qmO~6kYbM5Sysxkc5TTdbl13Y6Tx3wNw9q7INRrX7byAMlSRZPaQqqUY5Xg2eA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Pacific Rim: Uprising</h2>
        <p>It has been ten years since The Battle of the Breach and the oceans are still, but restless. Vindicated by the victory at the Breach, the Jaeger program has evolved into the most powerful global defense force in human history. The PPDC now calls upon the best and brightest to rise up and become the next generation of heroes when the Kaiju threat returns.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMDg4NWZjNmEtZWVmNC00MzdhLTlhOTEtZmViYjdmMzhjMTAyXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">John Boyega</span>
                <br>
                <span class="cast-ass">Jake Pentecost</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BODQ4ODU5NjIxMF5BMl5BanBnXkFtZTgwNzIzNTIzNzM@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Scott Eastwood</span>
                <br>
                <span class="cast-ass">Nate Lambert</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTU1NzA0MjEwNV5BMl5BanBnXkFtZTgwNTE5ODczNjM@._V1_FMjpg_UX503_.jpg" alt="" class="cast-img">
                <span class="cast-title">Cailee Spaeny</span>
                <br>
                <span class="cast-ass">Amara Namani</span>
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
                <img src="https://m.media-amazon.com/images/M/MV5BMTI5NjE0MjcwN15BMl5BanBnXkFtZTYwMDcxNTA1._V1_FMjpg_UX267_.jpg" alt="" class="cast-img">
                <span class="cast-title">Rinko Kikuchi</span>
                <br>
                <span class="cast-ass">Mako Mori</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTc1MDMzMjg1OV5BMl5BanBnXkFtZTgwODcxMzM0MzE@._V1_FMjpg_UX1152_.jpg" alt="" class="cast-img">
                <span class="cast-title">Tian Jing</span>
                <br>
                <span class="cast-ass">Liwen Shao</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi652654617/1434659607842-pgv4ql-1516810209789.mp4?Expires=1671528012&Signature=eMbiS3UyPXXUEUap~WYDflV1ZExkdZX-CAayreqTvZsEDLHM1PRr1pglzCJW6nWPHmaAaOPEsLMZxM0zsil9HtuNWye3r~~rsKWlJFEoCa-7BwE-7IH17zrAlmjIbqrjQS5hwmM9-R8vQ6UTjS7kP0CYB2ja2mR6JD4mJP~MAXcPZ2e5tHW8pCeJH6xkps2aDE1gOCYOSHoOAa6Y~HsPa7kCYfugRMhM0feNN9pAubqTgrI3RUzPBUJkAanA51TK51NbFJ7Ux9Wgnh~eoWWjztK1qmO~6kYbM5Sysxkc5TTdbl13Y6Tx3wNw9q7INRrX7byAMlSRZPaQqqUY5Xg2eA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi652654617/1434659607842-pgv4ql-1516810209789.mp4?Expires=1671528012&Signature=eMbiS3UyPXXUEUap~WYDflV1ZExkdZX-CAayreqTvZsEDLHM1PRr1pglzCJW6nWPHmaAaOPEsLMZxM0zsil9HtuNWye3r~~rsKWlJFEoCa-7BwE-7IH17zrAlmjIbqrjQS5hwmM9-R8vQ6UTjS7kP0CYB2ja2mR6JD4mJP~MAXcPZ2e5tHW8pCeJH6xkps2aDE1gOCYOSHoOAa6Y~HsPa7kCYfugRMhM0feNN9pAubqTgrI3RUzPBUJkAanA51TK51NbFJ7Ux9Wgnh~eoWWjztK1qmO~6kYbM5Sysxkc5TTdbl13Y6Tx3wNw9q7INRrX7byAMlSRZPaQqqUY5Xg2eA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi652654617/1434659607842-pgv4ql-1516810209789.mp4?Expires=1671528012&Signature=eMbiS3UyPXXUEUap~WYDflV1ZExkdZX-CAayreqTvZsEDLHM1PRr1pglzCJW6nWPHmaAaOPEsLMZxM0zsil9HtuNWye3r~~rsKWlJFEoCa-7BwE-7IH17zrAlmjIbqrjQS5hwmM9-R8vQ6UTjS7kP0CYB2ja2mR6JD4mJP~MAXcPZ2e5tHW8pCeJH6xkps2aDE1gOCYOSHoOAa6Y~HsPa7kCYfugRMhM0feNN9pAubqTgrI3RUzPBUJkAanA51TK51NbFJ7Ux9Wgnh~eoWWjztK1qmO~6kYbM5Sysxkc5TTdbl13Y6Tx3wNw9q7INRrX7byAMlSRZPaQqqUY5Xg2eA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
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