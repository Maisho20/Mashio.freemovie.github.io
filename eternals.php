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
        <img src="https://image.tmdb.org/t/p/original/lyvszvJJqqI8aqBJ70XzdCNoK0y.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Eternals</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                6.3
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
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi2791161881/1434659607842-pgv4ql-1629364833022.mp4?Expires=1671528154&Signature=YrvBZVevQ7DKJgkvH2-2W98rT7YzX22-aR0-55dY9nZjk2Nm1Fy-9zDOkZvZKiz8Fb83-jfcXpUt~6gIUoFff0laUO~qptfTsTXIHakS59NR0r0kmbUOcNwQcC5kfPJ2sjmk9Z-ysOd81GNk3unhDArMeJ0sECw84L4ykprF3G8usQQDoikSyrp~mSA5QzTix-vqKqzoZLMDkk6BiJetXbfg9GnwgzcXZc0lwxNWd72gl4o3sW8sxzBCXYxQyInt1ybVRfY0khHwidb2jUwkGP9Opb8szbdcmxRosY6n6whdBdp7mAs95QeZZJHA2rXVCJZi9SIOnQa0xXFe4whFnw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                <!-- close video -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Eternals</h2>
        <p>The Eternals are a team of ancient aliens who have been living on Earth in secret for thousands of years. When an unexpected tragedy forces them out of the shadows, they are forced to reunite against mankind’s most ancient enemy, the Deviants.</p>
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYTI3ZDEwYjktZjVhYS00NTlhLTkwOWEtNjM1MzEyMWU5M2QyXkEyXkFqcGdeQXVyMTE3ODY2Nzk@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Gemma Chan</span>
                <br>
                <span class="cast-ass">Sersi</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BODg3MzYwMjE4N15BMl5BanBnXkFtZTcwMjU5NzAzNw@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Angelina Jolie</span>
                <br>
                <span class="cast-ass">Thena</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTUyMDgxNDYxOV5BMl5BanBnXkFtZTgwMTExMDEwMDI@._V1_FMjpg_UX586_.jpg" alt="" class="cast-img">
                <span class="cast-title">Richard Madden</span>
                <br>
                <span class="cast-ass">Ikaris</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMzkyMTk2NzM2Ml5BMl5BanBnXkFtZTcwNDQ4MjYzMg@@._V1_FMjpg_UX283_.jpg" alt="" class="cast-img">
                <span class="cast-title">Salma Hayek</span>
                <br>
                <span class="cast-ass">Ajak</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYWUyODI4MmYtNjdlYS00NWRhLTgwNjQtNGRjYWE3ZTAyNzQ2XkEyXkFqcGdeQXVyMTI2Nzk2MjQ1._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Kumail Nanjiani</span>
                <br>
                <span class="cast-ass">Kingo</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYmEyZTIwZDgtNzE2Yy00N2I2LTgxYmQtNDA0ZDFmZWFiYjJmXkEyXkFqcGdeQXVyMTk2NDIwNw@@._V1_FMjpg_UX1037_.jpg" alt="" class="cast-img">
                <span class="cast-title">Lia McHugh</span>
                <br>
                <span class="cast-ass">Sprite</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BODAxOWZmODMtOTVmYy00ZWZjLTlhMzktMTc1OTgxNTMyNTk5XkEyXkFqcGdeQXVyMjE0NjY2NTA@._V1_FMjpg_UX1242_.jpg" alt="" class="cast-img">
                <span class="cast-title">Brian Tyree Henry</span>
                <br>
                <span class="cast-ass">Phastos</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYTQ5MzZiMzEtNjJjOS00ZGRjLTg4YzctZTljODUwMTg2ZjdiXkEyXkFqcGdeQXVyNjkzNjQ5NjU@._V1_FMjpg_UX853_.jpg" alt="" class="cast-img">
                <span class="cast-title">Lauren Ridloff</span>
                <br>
                <span class="cast-ass">Makkari</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMjJkNTk0NGQtOGU3NS00M2JlLTg2NzktNjQ1ZTU2YzU0YWI2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UY720_.jpg" alt="" class="cast-img">
                <span class="cast-title">Ma Dong-seok</span>
                <br>
                <span class="cast-ass">Gilgamesh</span>
            </div>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi2791161881/1434659607842-pgv4ql-1629364833022.mp4?Expires=1671528154&Signature=YrvBZVevQ7DKJgkvH2-2W98rT7YzX22-aR0-55dY9nZjk2Nm1Fy-9zDOkZvZKiz8Fb83-jfcXpUt~6gIUoFff0laUO~qptfTsTXIHakS59NR0r0kmbUOcNwQcC5kfPJ2sjmk9Z-ysOd81GNk3unhDArMeJ0sECw84L4ykprF3G8usQQDoikSyrp~mSA5QzTix-vqKqzoZLMDkk6BiJetXbfg9GnwgzcXZc0lwxNWd72gl4o3sW8sxzBCXYxQyInt1ybVRfY0khHwidb2jUwkGP9Opb8szbdcmxRosY6n6whdBdp7mAs95QeZZJHA2rXVCJZi9SIOnQa0xXFe4whFnw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi2791161881/1434659607842-pgv4ql-1629364833022.mp4?Expires=1671528154&Signature=YrvBZVevQ7DKJgkvH2-2W98rT7YzX22-aR0-55dY9nZjk2Nm1Fy-9zDOkZvZKiz8Fb83-jfcXpUt~6gIUoFff0laUO~qptfTsTXIHakS59NR0r0kmbUOcNwQcC5kfPJ2sjmk9Z-ysOd81GNk3unhDArMeJ0sECw84L4ykprF3G8usQQDoikSyrp~mSA5QzTix-vqKqzoZLMDkk6BiJetXbfg9GnwgzcXZc0lwxNWd72gl4o3sW8sxzBCXYxQyInt1ybVRfY0khHwidb2jUwkGP9Opb8szbdcmxRosY6n6whdBdp7mAs95QeZZJHA2rXVCJZi9SIOnQa0xXFe4whFnw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi2791161881/1434659607842-pgv4ql-1629364833022.mp4?Expires=1671528154&Signature=YrvBZVevQ7DKJgkvH2-2W98rT7YzX22-aR0-55dY9nZjk2Nm1Fy-9zDOkZvZKiz8Fb83-jfcXpUt~6gIUoFff0laUO~qptfTsTXIHakS59NR0r0kmbUOcNwQcC5kfPJ2sjmk9Z-ysOd81GNk3unhDArMeJ0sECw84L4ykprF3G8usQQDoikSyrp~mSA5QzTix-vqKqzoZLMDkk6BiJetXbfg9GnwgzcXZc0lwxNWd72gl4o3sW8sxzBCXYxQyInt1ybVRfY0khHwidb2jUwkGP9Opb8szbdcmxRosY6n6whdBdp7mAs95QeZZJHA2rXVCJZi9SIOnQa0xXFe4whFnw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
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