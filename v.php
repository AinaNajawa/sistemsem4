<?php
session_start();
include "config.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
}
?>
<!-- HTML Bermula -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIM TAE HYUNG</title>
    <link rel="stylesheet" href="v1.css">
</head>
<body>
<fieldset>
    <h1>Biodata Kim Yae Hyung</h1>
    <p><img src="img/tyhung_.png" alt=""></p>

    <button><a href="index.php">Login</a></button>
    <button><a href="biodata.php">Back</a></button>
     <button><a href="jimin.php">Next</a></button>


    <p>Nama Pangilan: V</p>
    <p>Nama Panjang: Kim Tae Hyung</p>
    <p>Tarikh Lahir: 30 December 1995</p>
    <p>Zodiak: Capricorn</p>
    <p>Tempat Lahir: Daegu</p>
    <p>Tinggi: 178</p>
    <p>Berat Badan: 62kg</p>
    <p>Darah: AB</p>
    <p>Air Kesukaan: Coklat Panas</p>
    <p>Bakat: Penyani, Menari, Berlakun</p>
    <p>Bahasa: Korea,Inggeris, Jepun</p>


</fieldset> 
</body>
</html>