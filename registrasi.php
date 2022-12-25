<?php
    require 'functions.php';

    if(isset($_POST['register']))
    {
        if(registrasi($_POST)>0)
        {
            echo "
                <style>
                    alert('user berhasil ditambahkan');
                </style>
            ";
        }else
        {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Registrasi</title>
    <!-- link box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- link ke css -->
    <link rel="stylesheet" href="registrasi.css">

    <!-- link swiper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <!-- untuk menambahkan gambar ikon -->
    <link rel="shorcut icon" href="LOGO.png" type="image">
    <style>
       label  {
            display:block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="judul">
            <span>Free</span>Movies
        </div>
        <div class="box">
            <div class="form">
                <h1>Registrasi</h1>
                <div class="inputbox">
                    <input type="text" name="username" id="username" autocapitalize="none" required="required">
                    <span for="username">Username</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" id="password" required="required">
                    <span for="password">Password</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="password2" id="password2" required="required">
                    <span for="password2">Konfirmasi Password</span>
                    <i></i>
                </div>
                <button type="submit" name="register">Registrasi</button>
            </div>
        </div>
    </form>
    
    <!-- link swiper files -->
    <script src="swiper-bundle.min.js"></script>
    <!-- link ke js -->
    <script src="main.js"></script>
</body> 
</html>