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
    <title> JIMIN</title>
    <link rel="stylesheet" href="v1.css">
</head>
<body>
<fieldset>
    <h1>Biodata Park Ji-Min</h1>
    <p><img src="img/jimin.png" alt=""></p>


    <button><a href="index.php">Logout</a></button>
    <button><a href="v.php">Back</a></button>
     <p>Nama Pangilan: JImin</p>
     <p>Nama Betul: Park Ji-Min</p>
     <p>Umur: </p>
     <p>Tinggi: 173.6cm</p>
     <p>Berat Badan: 61 kg</p>
     <p>Darah: A</p>
     <p>Tarikh Lahir: 13 Oktober 1995</p>
     <p>Tempat Lahir: Busan, Korea Selatan</p>
     <p>Kebolehan: Menyani, Menari,Rep</p>
     <p>Makanan Kesekaan: Ayam,Buah-Buahan, Kimchi</p>




</fieldset> 
</body>
</html>