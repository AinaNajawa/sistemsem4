<?php 
session_start();
include "config.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($samb,"SELECT * FROM `login` WHERE nama='$username' AND katalaluan='$pass'");

    $result = mysqli_num_rows($sql);
    if (mysqli_num_rows($sql) == 0){
        echo "salah";

    }else{
        echo "betul";
$_SESSION['name'] = $username;
        header("Location: home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPOP IDOL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SELAMAT DATANG KE PENDAFTARAN IDOL KPOP MALAYSIA</h1>
    <div class="box">
    <h1 class="div">Pendaftaran Untuk Ahli Bts Baharu</h1>
    <form action="" method="post">
        <div>
            <label for="username">Nama Pengguna</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" name="submit" value="login">
            <button><a href="Home.php">Register</a></button>
            <button type="reset">Reset</button>
        </div>
    </form>
    </div>
</body>
</html>