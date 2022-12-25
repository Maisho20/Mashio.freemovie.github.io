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
        <img src="https://image.tmdb.org/t/p/original/5RHc3iiLMQgjNU1mCJ9SM17JQAj.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Doctor Strange: in the Multiverse of Madness</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                6,9
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi2922431257/1434659607842-pgv4ql-1640278965383.mp4?Expires=1671336607&Signature=nOgUcv7fH5ZQi6TtWXSavP6LUTSaQXtkqdSvv6CpHfnlyJ5HlSaRRIBBiJpaWDD2D3HHiAFlK3vJ0dl7DR-YzmqahypakiLhJv4t5ouXRNDTJCRWjSyRGdO2IffgWRHriTuH6kgUaBzQLH1h7JTekR0dQqyQHFxViBiPAmnFEB0XNKq3MEw~SfN8Obtb1ktWW39reZKcUS7rJkVwGfsKTxZ1wmI02krcJckPXk~RiHcqvTfJd1w8Ol0DmJZBm1cwv50xBDS02Bevn0Jwm1NS~H4bp2Er4PtPvULH3BPSQfalfWkg-TFjg33cmbW9y5XLPFhkjasnDZc0FucVzaI7ag__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Doctor Strange: in the Multiverse of Madness</h2>
        <p>Doctor Strange, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Benedict Cumberbatch</span>
                <br>
                <span class="cast-ass">Dr. Stephen Strange</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMjEzMjA0ODk1OF5BMl5BanBnXkFtZTcwMTA4ODM3OQ@@._V1_FMjpg_UX640_.jpg" alt="" class="cast-img">
                <span class="cast-title">Elizabeth Olsen</span>
                <br>
                <span class="cast-ass">Wanda Maximoff / The Scarlet Witch</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMDMxOGExNWItYjM4YS00ZDJhLWJiM2UtMTViYjhhNTM4OGYxXkEyXkFqcGdeQXVyMTgyMzY5MTk@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Benedict Wong</span>
                <br>
                <span class="cast-ass">Wong / Defender Wong</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BOWM0NGFkYmQtYjM4My00YzQ0LWJjOWItM2VkNWE1Nzc3MTI4XkEyXkFqcGdeQXVyODU1ODI5NDA@._V1_FMjpg_UX529_.jpg" alt="" class="cast-img">
                <span class="cast-title">Xochitl Gomez</span>
                <br>
                <span class="cast-ass">America Chavez</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTc0MzU5ODQ5OF5BMl5BanBnXkFtZTYwODIwODk1._V1_FMjpg_UX282_.jpg" alt="" class="cast-img">
                <span class="cast-title">Patrick Stewart</span>
                <br>
                <span class="cast-ass">Charles Xavier / Professor X</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNzA5MDEyMTY3Nl5BMl5BanBnXkFtZTgwODQ0MjcxMDE@._V1_FMjpg_UY337_.jpg" alt="" class="cast-img">
                <span class="cast-title">Chiwetel Ejiofor</span>
                <br>
                <span class="cast-ass">Karl Mordo / Master Mordo</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTY5ODcxMDU4NV5BMl5BanBnXkFtZTcwMjAzNjQyNQ@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Rachel McAdams</span>
                <br>
                <span class="cast-ass">Dr. Christine Palmer</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi2922431257/1434659607842-pgv4ql-1640278965383.mp4?Expires=1671336607&Signature=nOgUcv7fH5ZQi6TtWXSavP6LUTSaQXtkqdSvv6CpHfnlyJ5HlSaRRIBBiJpaWDD2D3HHiAFlK3vJ0dl7DR-YzmqahypakiLhJv4t5ouXRNDTJCRWjSyRGdO2IffgWRHriTuH6kgUaBzQLH1h7JTekR0dQqyQHFxViBiPAmnFEB0XNKq3MEw~SfN8Obtb1ktWW39reZKcUS7rJkVwGfsKTxZ1wmI02krcJckPXk~RiHcqvTfJd1w8Ol0DmJZBm1cwv50xBDS02Bevn0Jwm1NS~H4bp2Er4PtPvULH3BPSQfalfWkg-TFjg33cmbW9y5XLPFhkjasnDZc0FucVzaI7ag__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi2922431257/1434659607842-pgv4ql-1640278965383.mp4?Expires=1671336607&Signature=nOgUcv7fH5ZQi6TtWXSavP6LUTSaQXtkqdSvv6CpHfnlyJ5HlSaRRIBBiJpaWDD2D3HHiAFlK3vJ0dl7DR-YzmqahypakiLhJv4t5ouXRNDTJCRWjSyRGdO2IffgWRHriTuH6kgUaBzQLH1h7JTekR0dQqyQHFxViBiPAmnFEB0XNKq3MEw~SfN8Obtb1ktWW39reZKcUS7rJkVwGfsKTxZ1wmI02krcJckPXk~RiHcqvTfJd1w8Ol0DmJZBm1cwv50xBDS02Bevn0Jwm1NS~H4bp2Er4PtPvULH3BPSQfalfWkg-TFjg33cmbW9y5XLPFhkjasnDZc0FucVzaI7ag__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi2922431257/1434659607842-pgv4ql-1640278965383.mp4?Expires=1671336607&Signature=nOgUcv7fH5ZQi6TtWXSavP6LUTSaQXtkqdSvv6CpHfnlyJ5HlSaRRIBBiJpaWDD2D3HHiAFlK3vJ0dl7DR-YzmqahypakiLhJv4t5ouXRNDTJCRWjSyRGdO2IffgWRHriTuH6kgUaBzQLH1h7JTekR0dQqyQHFxViBiPAmnFEB0XNKq3MEw~SfN8Obtb1ktWW39reZKcUS7rJkVwGfsKTxZ1wmI02krcJckPXk~RiHcqvTfJd1w8Ol0DmJZBm1cwv50xBDS02Bevn0Jwm1NS~H4bp2Er4PtPvULH3BPSQfalfWkg-TFjg33cmbW9y5XLPFhkjasnDZc0FucVzaI7ag__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
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