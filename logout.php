<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.php");
    exit;
}

session_destroy();
session_unset();

echo "
    <script>
        alert('Logout Berhasil');
        document.location.href = 'index.php';
    </script>
";
?>