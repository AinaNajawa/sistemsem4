<?php
include "config.php";

if (isset($_POST['nama'])) {
  
    $nama = $_POST['nama'];
    $ndp = $_POST['ndp'];
    $katalaluan = $_POST['katalaluan'];
    $telefon = $_POST['telefon'];
    $tinggi = $_POST['tinggi'];
    $badan = $_POST['badan'];

    $sql = "INSERT INTO update1 (nama, ndp, katalaluan, telefon, tinggi, badan)
    VALUES ('$nama', '$ndp', '$katalaluan', '$telefon', '$tinggi', '$badan')";
    
    $hasil = mysqli_query($con, $sql);
    
    if ($hasil) {
        echo "<script>alert('PENDAFTARAN BERJAYA');
        window.location='update1.php'</script>";
    } else {
        echo "<script>alert('PENDAFTARAN GAGAL!');
        window.location='login_1.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="home1.css">

</head>
<body>

    <fieldset>
        <h1 class="register">MASUKKAN BAIODATA DIRI ANDA</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NDP :</td>
                    <td><input type="number" name="ndp"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="katalaluan"></td>
                </tr>
                <tr>
                    <td>Nombor Telefon:</td>
                    <td><input type="number" name="telefon"></td>
                </tr>
                <tr>
                    <td>Tinggi:</td>
                    <td><input type="number" name="tinggi"></td>
                </tr>
                <tr>
                    <td>Berat Badan:</td>
                    <td><input type="number" name="badan"></td>
                </tr>
            </table>
            <p>
                <button type="reset">Reset</button>
                <!-- <button type="submit">Submit</button> -->
                <button><a href="biodata.php">Submit</a></button>
                <button><a href="index.php">Back</a></button>
            </p>
        </form>
    </fieldset>
</body>
</html>