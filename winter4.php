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
    <title>The Falcon and the Winter Soldier Episode 4</title>

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
        <img src="https://image.tmdb.org/t/p/original/4TEsU66PQT7G2cexbliJcpvTPbH.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>The Falcon and the Winter Soldier Episode 4</h2>
            <!-- ratings -->
            <!-- <div class="rating">
                <i class='bx bxs-star'></i>
                8.4
            </div>
            <div class="tags">
                <span>Action,</span>
                <span>Adventure,</span>
                <span>Sci-Fi</span>
            </div> -->
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
        <div class="bttn">
            <a href="winter3.php" class="button">
                <i class='bx bxs-skip-previous-circle'></i>
                <span class="button-tittle">PREV</span>
            </a>
            <!-- <a href="winter.php" class="button">
                <i class='bx bx-menu'></i>
                <span class="button-tittle">ALL</span>
            </a> -->
            <a href="winter5.php" class="button">
                <i class='bx bxs-skip-next-circle'></i>
                <span class="button-tittle">NEXT</span>
            </a>
        </div>
        <h1>The Whole World Is Watching</h1>
        <h2>The Falcon and the Winter Soldier Episode 4</h2>
        <p>John Walker loses patience with Sam and Bucky as they learn more about Karli Morgenthau.</p>
        <li class="mark">
            <div class="image-eps">
                <img src="https://image.tmdb.org/t/p/w154/9c9EUdeFfkyfCsHK65gtXRACRcZ.jpg">
            </div>
            <div class="numerando" style="border-right: 1px solid white;">1-1</div>
            <div class="episodiotitle">
                <a href="winter1.php">New World Order</a> <br>
                <span class="date">19. Mar, 2021</span>
            </div>
        </li>
        <li class="mark">
            <div class="image-eps">
                <img src="https://image.tmdb.org/t/p/w154/2e7oMGT1I6GXLfWLhdfRtAbrwBr.jpg">
            </div>
            <div class="numerando" style="border-right: 1px solid white;">1-2</div>
            <div class="episodiotitle">
                <a href="winter2.php">The Star-Spangled Man</a> <br>
                <span class="date">26. Mar, 2021</span>
            </div>
        </li>
        <li class="mark">
            <div class="image-eps">
                <img src="https://image.tmdb.org/t/p/w154/hPUqRJmslgeuaTVKogf9eVtgNs9.jpg">
            </div>
            <div class="numerando" style="border-right: 1px solid white;">1-3</div>
            <div class="episodiotitle">
                <a href="winter3.php">Power Broker</a> <br>
                <span class="date">02. Apr, 2021</span>
            </div>
        </li>
        <li class="mark">
            <div class="image-eps">
                <img src="https://image.tmdb.org/t/p/w154/4TEsU66PQT7G2cexbliJcpvTPbH.jpg">
            </div>
            <div class="numerando" style="border-right: 1px solid white;">1-4</div>
            <div class="episodiotitle">
                <a href="winter4.php">The Whole World Is Watching</a> <br>
                <span class="date">09. Apr, 2021</span>
            </div>
        </li>
        <li class="mark">
            <div class="image-eps">
                <img src="https://image.tmdb.org/t/p/w154/yEhyuWXJ17CNqv7KkxSWw3mmsB8.jpg">
            </div>
            <div class="numerando" style="border-right: 1px solid white;">1-5</div>
            <div class="episodiotitle">
                <a href="winter5.php">Truth</a> <br>
                <span class="date">16. Apr, 2021</span>
            </div>
        </li>
        <li class="mark">
            <div class="image-eps">
                <img src="https://image.tmdb.org/t/p/w154/qXxCqMP7aj3rGndhVfGUyyU6hyq.jpg">
            </div>
            <div class="numerando" style="border-right: 1px solid white;">1-6</div>
            <div class="episodiotitle">
                <a href="winter6.php">One World, One People</a> <br>
                <span class="date">23. Apr, 2021</span>
            </div>
        </li>
        </div>
    </div>

    <!-- download -->
    <div class="download">
        <h2 class="download-title">Download Series</h2>
        <div class="download-links">
            <a href="https://imdb-video.media-imdb.com/vi974436377/1434659607842-pgv4ql-1521206475966.mp4?Expires=1671380374&Signature=cqc6Y~aiOuFrO~Nq3KOl9YI3wNimtTaq~sEzu9yCmRyrpdBRw49ayV-zHBph6jj5QyZjHbUeGltbjS2JjplL6oy4yWX9ggZOppqyDlQUGAbsD8UyFAOxQuJJIHquFjMup7okYLfQw49S4iHiVgrCM-0pumRWilqMBcdudonQvxDWEutU1mokeUYz-A8Gqhh465tfnWuJD~V7-b54ROblSa52bSyqk~7EtGxWZ86MEE7wSqcXwdvKHSLxHvcqLsdJGfBUOybMZfam0UbdAb5~e8oe1xh01MVB6cV3oW-zSSnVH2eNOw7DKB4vH11x28rLrnjIeyzI~pijISyIIzpbcg__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA" target="_blank" download>Download</a>
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