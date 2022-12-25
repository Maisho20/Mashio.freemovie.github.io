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
        <img src="https://image.tmdb.org/t/p/original/bOGkgRGdhrBYJSLpXaxhXVstddV.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Avengers: Infinity War</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                8.4
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi974436377/1434659607842-pgv4ql-1521206475966.mp4?Expires=1671380374&Signature=cqc6Y~aiOuFrO~Nq3KOl9YI3wNimtTaq~sEzu9yCmRyrpdBRw49ayV-zHBph6jj5QyZjHbUeGltbjS2JjplL6oy4yWX9ggZOppqyDlQUGAbsD8UyFAOxQuJJIHquFjMup7okYLfQw49S4iHiVgrCM-0pumRWilqMBcdudonQvxDWEutU1mokeUYz-A8Gqhh465tfnWuJD~V7-b54ROblSa52bSyqk~7EtGxWZ86MEE7wSqcXwdvKHSLxHvcqLsdJGfBUOybMZfam0UbdAb5~e8oe1xh01MVB6cV3oW-zSSnVH2eNOw7DKB4vH11x28rLrnjIeyzI~pijISyIIzpbcg__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Avengers: Infinity War</h2>
        <p>As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment – the fate of Earth and existence itself has never been more uncertain.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Robert Downey Jr.</span>
                <br>
                <span class="cast-ass">Tony Stark / Iron Man</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BOTU2MTI0NTIyNV5BMl5BanBnXkFtZTcwMTA4Nzc3OA@@._V1_FMjpg_UX384_.jpg" alt="" class="cast-img">
                <span class="cast-title">Chris Hemsworth</span>
                <br>
                <span class="cast-ass">Thor Odinson</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNzZiNTEyNTItYjNhMS00YjI2LWIwMWQtZmYwYTRlNjMyZTJjXkEyXkFqcGdeQXVyMTExNzQzMDE0._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Tom Holland</span>
                <br>
                <span class="cast-ass">Peter Parker / Spider-Man</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTU2NTg1OTQzMF5BMl5BanBnXkFtZTcwNjIyMjkyMg@@._V1_FMjpg_UX285_.jpg" alt="" class="cast-img">
                <span class="cast-title">Chris Evans</span>
                <br>
                <span class="cast-ass">Steve Rogers / Captain America</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTk2OTY5MzcwMV5BMl5BanBnXkFtZTgwODM4MDI5MjI@._V1_FMjpg_UX750_.jpg" alt="" class="cast-img">
                <span class="cast-title">Chadwick Boseman</span>
                <br>
                <span class="cast-ass">T'Challa / Black Panther</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNWIzZTI1ODUtZTUzMC00NTdiLWFlOTYtZTg4MGZkYmU4YzNlXkEyXkFqcGdeQXVyNTExOTk5Nzg@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Mark Ruffalo</span>
                <br>
                <span class="cast-ass">Bruce Banner / The Hulk</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTM3OTUwMDYwNl5BMl5BanBnXkFtZTcwNTUyNzc3Nw@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Scarlett Johansson</span>
                <br>
                <span class="cast-ass">Natasha Romanoff / Black Widow</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi974436377/1434659607842-pgv4ql-1521206475966.mp4?Expires=1671380374&Signature=cqc6Y~aiOuFrO~Nq3KOl9YI3wNimtTaq~sEzu9yCmRyrpdBRw49ayV-zHBph6jj5QyZjHbUeGltbjS2JjplL6oy4yWX9ggZOppqyDlQUGAbsD8UyFAOxQuJJIHquFjMup7okYLfQw49S4iHiVgrCM-0pumRWilqMBcdudonQvxDWEutU1mokeUYz-A8Gqhh465tfnWuJD~V7-b54ROblSa52bSyqk~7EtGxWZ86MEE7wSqcXwdvKHSLxHvcqLsdJGfBUOybMZfam0UbdAb5~e8oe1xh01MVB6cV3oW-zSSnVH2eNOw7DKB4vH11x28rLrnjIeyzI~pijISyIIzpbcg__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi974436377/1434659607842-pgv4ql-1521206475966.mp4?Expires=1671380374&Signature=cqc6Y~aiOuFrO~Nq3KOl9YI3wNimtTaq~sEzu9yCmRyrpdBRw49ayV-zHBph6jj5QyZjHbUeGltbjS2JjplL6oy4yWX9ggZOppqyDlQUGAbsD8UyFAOxQuJJIHquFjMup7okYLfQw49S4iHiVgrCM-0pumRWilqMBcdudonQvxDWEutU1mokeUYz-A8Gqhh465tfnWuJD~V7-b54ROblSa52bSyqk~7EtGxWZ86MEE7wSqcXwdvKHSLxHvcqLsdJGfBUOybMZfam0UbdAb5~e8oe1xh01MVB6cV3oW-zSSnVH2eNOw7DKB4vH11x28rLrnjIeyzI~pijISyIIzpbcg__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi974436377/1434659607842-pgv4ql-1521206475966.mp4?Expires=1671380374&Signature=cqc6Y~aiOuFrO~Nq3KOl9YI3wNimtTaq~sEzu9yCmRyrpdBRw49ayV-zHBph6jj5QyZjHbUeGltbjS2JjplL6oy4yWX9ggZOppqyDlQUGAbsD8UyFAOxQuJJIHquFjMup7okYLfQw49S4iHiVgrCM-0pumRWilqMBcdudonQvxDWEutU1mokeUYz-A8Gqhh465tfnWuJD~V7-b54ROblSa52bSyqk~7EtGxWZ86MEE7wSqcXwdvKHSLxHvcqLsdJGfBUOybMZfam0UbdAb5~e8oe1xh01MVB6cV3oW-zSSnVH2eNOw7DKB4vH11x28rLrnjIeyzI~pijISyIIzpbcg__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
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