<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'aina' && $password === '2002723') {
        echo "<script>alert('BERJAYA');
        window.location='update1.php'</script>";
    } else {
        echo "<script>alert('GAGAL!'); 
        window.location='login_1.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Untuk Ahli Bts Baharu</title>
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
    <fieldset>
        <h1 class="div">Pendaftaran Untuk Ahli Bts Baharu</h1>
        <img class="img" src="img/logo_bts.jpg" alt="" width="170" height="170"><br>
        <form action="" method="POST"><br>
            <h2>SILA LOGIN</h2>
            <table>
                <tr>
                    <td>Nama Pengguna :</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Katalaluan :</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <p>
                <button type="reset">Reset</button>
                <button type="update" href= "update1.php" name="login">Login</button>
                <button><a href="menu.php">Register</a></button>
            </p>
        </form>
    </fieldset>
</body>
</html>
