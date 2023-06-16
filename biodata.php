<?php

session_start();
include "config.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];


}
?>
<!--HTML Bermula -->

<!DOCTYPE html>
<html lang="en">
<head>
<fieldset>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biodata1.css">
    <title>BIODATA AHLI GRUP</title>
    
     <h1>Biodata Ahli Grup</h1>
    
     <tr>
        <td><h2>JUNG KOOK</h2></td>
     </tr>
     <p><img src="img/jungkook.png" alt=""></p>
     
     <button><a href="index.php">login</a></button>
     <button><a href="v.php">Next</a></button>
     <button><a href="Jimin.php">Jimin</a></button>

     <p>Nama Penuh: Jeon Jung Kook</p>
     <p>Umur: 25 Tahun</p>
     <p>Zodial: Virgo</p>
     <p>Tempat Lahir: Busan, Korea Selatan</p>
     <p>Tarikh Lahir: 1 september 1997</p>
     <p>Bakat: Menyayi, Menari</p>
     <p>Tinggi Badan: 178cm</p>
     <p>Berat Badan: 66kg</p>
     <p>Jenis Darah: A</p>
     <p>Makanan Kesukaan: Diperbuat Daripada Tepung</p>
     <p>Benda Menakutkan: Serangga</p>
     <p>Aktiviti: Suka Bina Dadan</p>

    </fieldset>
</body>
</html>