<?php
// membuat koneksi
$conn=mysqli_connect("localhost","root","","uas_dww");
// cek koneksi jika error
if (!$conn) {
    die('Koneksi Error : '.mysqli_connect_errno() 
    .' - '.mysqli_connect_error());
 }

$result=mysqli_query($conn,"SELECT * FROM film");  

function getAllFilm(){
    global $conn;
    $query = "SELECT * FROM film WHERE jenis_film LIKE 'Movies%'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getAllSeries(){
    global $conn;
    $query = "SELECT * FROM film WHERE jenis_film LIKE 'Series%'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getAllPopular(){
    global $conn;
    $query = "SELECT * FROM film WHERE jenis_film LIKE '%popular'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function query($query_kedua)
{
    global $conn; 
    $result = mysqli_query($conn,$query_kedua);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[]=$row;    
    }
    return $rows;
}

function login(){
    global $conn;
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $query = "SELECT * FROM user WHERE username = '$username";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
        }else{
            return false;
        }
    }else{
        return false;
    }
}
function registrasi($data)
{
    global $conn;
 
    $username=strtolower(stripcslashes($data['username']));
    
    $password=mysqli_real_escape_string($conn,$data['password']); 
    $password2=mysqli_real_escape_string($conn,$data['password2']); 

    $result=mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");

    if(mysqli_fetch_assoc($result))
    {
        echo "
            <script>
                alert('username sudah ada');
            </script>
        ";
        return false;
    }

    if($password!==$password2)
    {
        echo"
        <script> 
            alert('password anda tidak sama');
        </script>
        ";
        return false;
    }


        $password=password_hash($password,PASSWORD_DEFAULT);
    mysqli_query($conn,"INSERT INTO user VALUES ('','$username','$password')");

    return mysqli_affected_rows($conn); 
}
?>