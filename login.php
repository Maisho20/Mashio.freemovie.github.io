<?php
session_start();
require 'functions.php';

//cek cookie
if(isset($_COOKIE['id'])&& isset($_COOKIE['usename']))
{
    $id=$_COOKIE['id'];
    $key=$_COOKIE['key'];

    // ambil username berdasarkan id
    $result=mysqli_query($conn,"SELECT username FROM user WHERE id=$id");
    $row=mysqli_fetch_assoc($result);

    //cek cookie dan username
    if($key === hash('sha256',$row['username']))
    {
        $_SESSION['login']=true;
    }    
}

if(isset($_SESSION["login"]))
{
    header("location:index.php"); 
    exit;
}


if(isset($_POST["login"]))
{
        $username=$_POST["username"];
        $password=$_POST["password"];
    
    
    $result=mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

    if(mysqli_num_rows($result)===1)
    {
        $row=mysqli_fetch_assoc($result); 
        
        if(password_verify($password,$row["password"]))
        {
            //set session
            $_SESSION["login"]=true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["username"];

            //cek remember me
            if(isset($_POST['remember']))
            {
                //enkripsi cookie menggunakan hash tipe sha256
                setcookie('id',$row['id'],time()+60);
                setcookie('key',hash('sha256',$row['username']),time()+60);
            }

            //redirect ke halaman index.php 
            header("Location:index.php");
            exit;
        } 
    }
    $error=true;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- link box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- link ke css -->
    <link rel="stylesheet" href="login.css">

    <!-- link swiper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <!-- untuk menambahkan gambar ikon -->
    <link rel="shorcut icon" href="LOGO.png" type="image">
</head>
<body>
    <?php if(isset($error)):?>
        <p style="color:red;font-style:bold">
        Username dan password salah</p>
        
    <?php endif?>
    <form action="" method="post">
        <div class="judul">
            <span>Free</span>Movies
        </div>
        <div class="box">
            <div class="form">
                <h1>Login</h1>
                <div class="inputbox">
                    <input type="text" name="username" id="username" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" id="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="link">
                    <a href="registrasi.php">Don't have Password</a>
                </div>
                <button type="submit" name="login">Login</button>
            </div>
        </div>
    </form>

    <!-- link swiper files -->
    <script src="swiper-bundle.min.js"></script>
    <!-- link ke js -->
    <script src="main.js"></script>
</body>
</html>