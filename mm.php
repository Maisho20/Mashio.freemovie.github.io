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
    <title>Ms. Marvel</title>

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
        <img src="https://m.media-amazon.com/images/M/MV5BY2M4NzRmZmYtMThkNC00ZmQ4LTkxNTctMGMzOThjMDQ3NTg3XkEyXkFqcGdeQXVyNzk3NDUzNTc@._V1_.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Ms. Marvel</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                6.2
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
        <!-- <i class='bx bx-right-arrow play-movie'></i> -->
        <!-- video container -->
        <!-- <div class="video-container">
            video box
            <div class="video-box">
                <video id="myvideo" src="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" controls></video>
                close video
                <i class='bx bx-x close-video'></i>
            </div>
        </div> -->
    </div>
    <!-- about -->
    <div class="about-movie container">
        <h2>Ms. Marvel</h2>
        <p>Kamala is a superhero fan with an imagination, particularly when it comes to Captain Marvel; Kamala feels like she doesn't fit in at school and sometimes even at home, that is until she gets superpowers like the heroes she's looked up to.</p>
        
        <!-- <div class="episode"> -->
            <!-- heading -->
            <!-- <div>
                <span class="season">1</span>
                <span class="title">
                    Season 1
                    <i>09. Jun, 2021</i>
                </span>
            </div> -->
            <!-- konten -->
        <!-- </div> -->
        
        <section class="episode">
            <p>Seasons and episodes</p>
            <div class="heading-series" onclick="myFunction()">
                <span class="season">1</span>
                <span class="title">
                    Season 1
                    <i>08. Jun, 2022</i>
                </span>
            </div>
            <div id="hide">
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/gaBBBVXwSED1XNHe2wyQypp6ead.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-1</div>
                    <div class="episodiotitle">
                        <a href="mm1.php">Generation Why</a> <br>
                        <span class="date">08. Jun, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/aemUtd7mjsVy1A0L4mMWZR1kKNA.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-2</div>
                    <div class="episodiotitle">
                        <a href="mm2.php">Crushed</a> <br>
                        <span class="date">15. Jun, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/9xFmSh70LOfX7L7irdVyyJ2xRSp.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-3</div>
                    <div class="episodiotitle">
                        <a href="mm3.php">Destined</a> <br>
                        <span class="date">22. Jun, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/aRR3GD9S2yHeVG7CCV5M1DTWHJc.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-4</div>
                    <div class="episodiotitle">
                        <a href="mm4.php">Seeing Red</a> <br>
                        <span class="date">29. Jun, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/2QQbp3vAnptEr8VRYmZCRqO5rPD.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-5</div>
                    <div class="episodiotitle">
                        <a href="mm5.php">Time and Again</a> <br>
                        <span class="date">06. Jul, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/3cbOYF4iX2jEi5lTDQ5C0xAchPo.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-6</div>
                    <div class="episodiotitle">
                        <a href="mm6.php">No Normal</a> <br>
                        <span class="date">13. Jul, 2022</span>
                    </div>
                </li>
            </div>
            
            <!-- <li class="episodes">
                <div>
                    <img src="https://image.tmdb.org/t/p/w154/gxh0k3aADsYkt9tgkfm2kGn2qQj.jpg">
                    <p>1 - 1</p>
                    <a href="https://88.210.12.206/episode/loki-season-1-episode-1/">Glorious Purpose</a> 
                    <span class="date">09. Jun, 2021</span>
                </div>
            </li> -->
            <!-- <p>Seasons and episodes</p> -->
            <!-- heading -->
            <!-- <div>
                <span class="season">1</span>
                <span class="title">
                    Season 1
                    <i>09. Jun, 2021</i>
                </span>
            </div> -->
            <!-- konten -->
        </section>
        
        <!-- cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BODIyNDM3YzMtN2E5MS00ZmI0LWEyZTEtY2UxMTZhOGIwODk2XkEyXkFqcGdeQXVyMTM1OTA5NzIw._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Iman Vellani</span>
                <br>
                <span class="cast-ass">Kamala Khan</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMzM2YTliNzQtMDBkNC00NzEwLTg0ODctOWU2ZmUyNDY1MzlhXkEyXkFqcGdeQXVyMjEwMzg3OTU@._V1_FMjpg_UX483_.jpg" alt="" class="cast-img">
                <span class="cast-title">Matt Lintz</span>
                <br>
                <span class="cast-ass">Bruno</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMDFkMmMwM2ItODhlMy00MzdkLTlkYTAtMjFkMjEwMmZiNWQzXkEyXkFqcGdeQXVyNjcyNjk3Mjc@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Yasmeen Fletcher</span>
                <br>
                <span class="cast-ass">Nakia</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMWIzMzA0ZDEtYTY4ZS00MTk2LTk4ZWUtZjcxNjZjYjM2NzJmXkEyXkFqcGdeQXVyMTUyNjQ5NTc1._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Nimra Bucha</span>
                <br>
                <span class="cast-ass">Najma</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNDU1ZGJlYzYtNDBhNC00M2I1LWExMzItNGZhMmVmNzMxMTM2XkEyXkFqcGdeQXVyMTExMjEyMTUz._V1_FMjpg_UX1200_.jpg" alt="" class="cast-img">
                <span class="cast-title">Laurel Marsden</span>
                <br>
                <span class="cast-ass">Zoe</span>
            </div>
            <!-- <div class="cast-box">
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
            </div> -->
        </div>
    </div>

    <!-- download -->
    <!-- <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>480p</a>
            <a href="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>720p</a>
            <a href="https://imdb-video.media-imdb.com/vi2681061913/1434659607842-pgv4ql-1656703360231.mp4?Expires=1671527899&Signature=Nuzsm7dvxx4n4ibtcHaN3Y4k68TlRV4D4IqZy4w3qcNdvvE1srjfZJyXPfLmHaTyAiVO58A6EI5LpQMtcb3tR8WVc3MBsmJPIGXnyJ-XyvejvZpvD7b~rM-C7wY4lnM5CEEt7u3TCcvqC3uuSLRGPJWTVOuwjM-q-GSizaZ8OgDZ2QvbHX7jH29teJgrr1pudXqvoZudo~qE0YTCNDP2wBXOXueUI76z0ixA0b-YC85~AOxhcXgyi75Cy8549b0Acaq3~AaiQZiMJ-NHPKuLCciH6k98bw1EskR3Spo9v0PRNzwkSs4UajtWbLnxqt4-4fuJvRJAHk7LqfuWqOMfEw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" download>1080p</a>
        </div>
    </div> -->

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