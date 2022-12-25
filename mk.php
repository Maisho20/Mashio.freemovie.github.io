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
    <title>Moon Knight</title>

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
        <img src="https://m.media-amazon.com/images/M/MV5BZGFjNDAyN2ItNmU1NC00MDQ2LWExMGMtMjZmYmQ0MWRlNGJmXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Moon Knight</h2>
            <!-- ratings -->
            <div class="rating">
                <i class='bx bxs-star'></i>
                7.3
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
        <!-- <i class='bx bx-right-arrow play-movie'></i> -->
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
        <h2>Moon Knight</h2>
        <p>Steven Grant discovers he's been granted the powers of an Egyptian moon god. But he soon finds out that these newfound powers can be both a blessing and a curse to his troubled life.</p>
        
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
                    <i>30. Mar, 2022</i>
                </span>
            </div>
            <div id="hide">
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/uA81REU7p7bniOQfplpbGIMWCe.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-1</div>
                    <div class="episodiotitle">
                        <a href="mk1.php">The Goldfish Problem</a> <br>
                        <span class="date">30. Mar, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/oLmV6R7PoEMLJJ62bE4idOoG9WX.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-2</div>
                    <div class="episodiotitle">
                        <a href="mk2.php">Summon the Suit</a> <br>
                        <span class="date">06. Apr, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/2TuF6ZbrUzvH1xcvFHZHIITwFiA.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-3</div>
                    <div class="episodiotitle">
                        <a href="mk3.php">The Friendly Type</a> <br>
                        <span class="date">13. Apr, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/ujPdwFsye9ojzFjPTcJ2yk227K7.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-4</div>
                    <div class="episodiotitle">
                        <a href="mk4.php">The Tomb</a> <br>
                        <span class="date">20. Apr, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/sYnW3wMnmAYK9SHtsOGqVFlZNde.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-5</div>
                    <div class="episodiotitle">
                        <a href="mk5.php">Asylum</a> <br>
                        <span class="date">27. Apr, 2022</span>
                    </div>
                </li>
                <li class="mark">
                    <div class="image-eps">
                        <img src="https://image.tmdb.org/t/p/w154/owNx8ZoryZZzp6WYqmTV9Umf1bQ.jpg">
                    </div>
                    <div class="numerando" style="border-right: 1px solid white;">1-6</div>
                    <div class="episodiotitle">
                        <a href="mk6.php">Gods and Monsters</a> <br>
                        <span class="date">04. May, 2022</span>
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
                <img src="https://m.media-amazon.com/images/M/MV5BMTQ2ODE2NDQ5OF5BMl5BanBnXkFtZTcwOTU3OTM1OQ@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">Oscar Isaac</span>
                <br>
                <span class="cast-ass">Steven Grant / Marc Spector / Moon Knight / Mr. Knight</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYWViYWU1MjQtZmYwMy00ZjUyLTkyYzgtMmZhMmUwNDU0ZTI4XkEyXkFqcGdeQXVyNDAzNDk0MTQ@._V1_FMjpg_UX1241_.jpg" alt="" class="cast-img">
                <span class="cast-title">May Calamawy</span>
                <br>
                <span class="cast-ass">Layla El-Faouly</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BMTk4NDMxMTI0MF5BMl5BanBnXkFtZTYwMjE3ODE0._V1_FMjpg_UX283_.jpg" alt="" class="cast-img">
                <span class="cast-title">Ethan Hawke</span>
                <br>
                <span class="cast-ass">Arthur Harrow</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BNDQ2MzQ2ODYxM15BMl5BanBnXkFtZTcwODY3NTIxNw@@._V1_.jpg" alt="" class="cast-img">
                <span class="cast-title">F. Murray Abraham</span>
                <br>
                <span class="cast-ass">Khonshu (voice)</span>
            </div>
            <div class="cast-box">
                <img src="https://m.media-amazon.com/images/M/MV5BYzA0NTk2NWUtMTJkZi00MGU1LWI1MjItZGIwNzMwMzMwZTk1XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_FMjpg_UY399_.jpg" alt="" class="cast-img">
                <span class="cast-title">Antonia Salib</span>
                <br>
                <span class="cast-ass">Taweret</span>
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