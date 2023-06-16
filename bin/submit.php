<?php
session_start();


if (isset($_POST['ndp'])) 
{
    $ndp = $_POST['nama'];
    $katalaluan = $_POST['katalaluan'];

    $sql = "INSERT INTO login (nama,katalaluan)
    VALUES ('$nama','$katalauan')";

    $hasil = mysqli_query($samb, $sql);

    if ($hasil) {
            echo "<script>alert('PENDAFTARAN BERJAYA');
            window.location='menu.php'</script>";
    }else{
            echo "<script>alert('PENDAFTARAN GAGAL!');
            window.location='menu.php'</script>";
    }
} 
?>
<html>
<body>

<fieldset>
            <link rel="stylesheet" href="submit.css">

            <h1>ANDA TELAH BERJAYA MENDAFTAR</h1>

            <button><a href="index.php">Back</a></button>


</select>
</form>
<!-- </fieldset> -->
</form>
</fieldset>
</body>
</html>