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
        <img src="https://image.tmdb.org/t/p/original/w2PMyoyLU22YvrGK3smVM9fW1jj.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Captain Marvel</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                6.8
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi70105625/1434659607842-pgv4ql-1546918253990.mp4?Expires=1671382605&Signature=gEq1h22K3tVKKpu3RXfdQCsiNYO5p~1GXVkK0tmMyo2T25GKVAc8AuMB4maF7IFPVLHc~4VeU8x51aBIe7L84s~y-n2IUsLGTZ9oqkjkJuV46wrfJEYBvdOUmc9fgx0~iTNIFWl1hcU~lexz6ey5n~qjCpCuVcYf~I4lRF-weBLe7j4RpX~yJNEn78u~IpGcjTGYSbMRex9Qchg7PdPGJ-oRCOiKEHqmpTk-EuuF~VOxYvx4YaxBEvmy0a2r1mBy6yWWwXR2CyIom6OOtv4BAd~1-hTV0uregSZwlyZgcaiFpumgkxbwrLjU~JxWTB8-NNlVDCir4Cl4vjFuyzt-eQ__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Captain Marvel</h2>
        <p>The story follows Carol Danvers as she becomes one of the universe’s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races. Set in the 1990s, Captain Marvel is an all-new adventure from a previously unseen period in the history of the Marvel Cinematic Universe.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNDE4ZWY1ZTUtYjNhMy00MTQyLWFmMjktNTkyYTFjOGRlNDk0XkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Brie Larson</span>
                <br>
                <span class="cast-ass">Carol Danvers / Vers / Captain Marvel</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTQ1NTQwMTYxNl5BMl5BanBnXkFtZTYwMjA1MzY1._V1_FMjpg_UX266_.jpg" alt="" class="cast-img">
                <span class="cast-title">Samuel L. Jackson</span>
                <br>
                <span class="cast-ass">Nick Fury</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMjA3NzcyMDcyMF5BMl5BanBnXkFtZTcwNjQwMTczMQ@@._V1_FMjpg_UX450_.jpg" alt="" class="cast-img">
                <span class="cast-title">Ben Mendelsohn</span>
                <br>
                <span class="cast-ass">Talos / Keller</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTc4ODQ1ODM5Ml5BMl5BanBnXkFtZTcwOTU2NDk3OQ@@._V1_FMjpg_UX683_.jpg" alt="" class="cast-img">
                <span class="cast-title">Annette Bening</span>
                <br>
                <span class="cast-ass">Supreme Intelligence / Dr. Wendy Lawson / Mar-Vell</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMjQ2NTM4MzI4M15BMl5BanBnXkFtZTcwOTkxMjcxNA@@._V1_FMjpg_UX295_.jpg" alt="" class="cast-img">
                <span class="cast-title">Djimon Hounsou</span>
                <br>
                <span class="cast-ass">Korath</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BZmEzNDA3MDktZDdjMS00YTNjLTg1ZmUtMWIxZGNlMzY3OGU5XkEyXkFqcGdeQXVyMTExNzQ3MzAw._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Lee Pace</span>
                <br>
                <span class="cast-ass">Ronan</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYTI3ZDEwYjktZjVhYS00NTlhLTkwOWEtNjM1MzEyMWU5M2QyXkEyXkFqcGdeQXVyMTE3ODY2Nzk@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Gemma Chan</span>
                <br>
                <span class="cast-ass">Minn-Erva</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi70105625/1434659607842-pgv4ql-1546918253990.mp4?Expires=1671382605&Signature=gEq1h22K3tVKKpu3RXfdQCsiNYO5p~1GXVkK0tmMyo2T25GKVAc8AuMB4maF7IFPVLHc~4VeU8x51aBIe7L84s~y-n2IUsLGTZ9oqkjkJuV46wrfJEYBvdOUmc9fgx0~iTNIFWl1hcU~lexz6ey5n~qjCpCuVcYf~I4lRF-weBLe7j4RpX~yJNEn78u~IpGcjTGYSbMRex9Qchg7PdPGJ-oRCOiKEHqmpTk-EuuF~VOxYvx4YaxBEvmy0a2r1mBy6yWWwXR2CyIom6OOtv4BAd~1-hTV0uregSZwlyZgcaiFpumgkxbwrLjU~JxWTB8-NNlVDCir4Cl4vjFuyzt-eQ__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi70105625/1434659607842-pgv4ql-1546918253990.mp4?Expires=1671382605&Signature=gEq1h22K3tVKKpu3RXfdQCsiNYO5p~1GXVkK0tmMyo2T25GKVAc8AuMB4maF7IFPVLHc~4VeU8x51aBIe7L84s~y-n2IUsLGTZ9oqkjkJuV46wrfJEYBvdOUmc9fgx0~iTNIFWl1hcU~lexz6ey5n~qjCpCuVcYf~I4lRF-weBLe7j4RpX~yJNEn78u~IpGcjTGYSbMRex9Qchg7PdPGJ-oRCOiKEHqmpTk-EuuF~VOxYvx4YaxBEvmy0a2r1mBy6yWWwXR2CyIom6OOtv4BAd~1-hTV0uregSZwlyZgcaiFpumgkxbwrLjU~JxWTB8-NNlVDCir4Cl4vjFuyzt-eQ__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi70105625/1434659607842-pgv4ql-1546918253990.mp4?Expires=1671382605&Signature=gEq1h22K3tVKKpu3RXfdQCsiNYO5p~1GXVkK0tmMyo2T25GKVAc8AuMB4maF7IFPVLHc~4VeU8x51aBIe7L84s~y-n2IUsLGTZ9oqkjkJuV46wrfJEYBvdOUmc9fgx0~iTNIFWl1hcU~lexz6ey5n~qjCpCuVcYf~I4lRF-weBLe7j4RpX~yJNEn78u~IpGcjTGYSbMRex9Qchg7PdPGJ-oRCOiKEHqmpTk-EuuF~VOxYvx4YaxBEvmy0a2r1mBy6yWWwXR2CyIom6OOtv4BAd~1-hTV0uregSZwlyZgcaiFpumgkxbwrLjU~JxWTB8-NNlVDCir4Cl4vjFuyzt-eQ__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
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