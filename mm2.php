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
    <title>Ms. Marvel Episode 2</title>

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
        <img src="https://image.tmdb.org/t/p/original/aemUtd7mjsVy1A0L4mMWZR1kKNA.jpg" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>Ms. Marvel Episode 2</h2>
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
            <a href="mm1.php" class="button">
                <i class='bx bxs-skip-previous-circle'></i>
                <span class="button-tittle">PREV</span>
            </a>
            <!-- <a href="mm.php" class="button">
                <i class='bx bx-menu'></i>
                <span class="button-tittle">ALL</span>
            </a> -->
            <a href="mm3.php" class="button">
                <i class='bx bxs-skip-next-circle'></i>
                <span class="button-tittle">NEXT</span>
            </a>
        </div>
        <h1>Crushed</h1>
        <h2>Ms. Marvel Episode 2</h2>
        <p>Kamala and Bruno explore the source of her newfound powers just in time for a perilous adventure.</p>
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