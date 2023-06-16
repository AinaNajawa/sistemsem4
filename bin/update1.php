<?php
include "config.php";

session_start();
if (isset($_POST['ndp'])) {
    $nama = $_POST['nama'];
    $ndp = $_POST['ndp'];
    $katalaluan = $_POST['katalaluan'];
    $telefon = $_POST['telefon'];
    $tinggi = $_POST['tinggi'];
    $badan = $_POST['badan'];

    // ini adalah untuk keluarkan data untuk ke page lain
    $sql = "INSERT INTO update1 (nama, ndp, katalaluan, telefon, tinggi, badan)
    VALUES ('$nama', '$ndp', '$katalaluan', '$telefon', '$tinggi', '$badan')";

    $hasil = mysqli_query($conn, $sql);

    if ($hasil) {
        echo "<script>alert('DELETE AHLI BERJAYA');
        window.location='submit.php'</script>";
    } else {
        echo "<script>alert('DELETE AHLI GAGAL!');
        window.location='menu.php'</script>";
    }
}


// Hapus rekod update1
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $result = mysqli_query($conn, "DELETE FROM update1 WHERE  nama = '$nama'");

    if ($result) {
        echo "<script>alert('Rekod update anda berjaya dipadam');
        window.location='submit.php'</script>";
    } else {
        echo "<script>alert('Gagal memadam rekod update');
        window.location='update1.php'</script>";
    }
}

// Update rekod update1
if (isset($_GET['update_id'])) {
    $id = $_GET['update_id'];
    // Lakukan tindakan update yang sesuai berdasarkan $id
    // Contoh: Membuka borang pengemaskinian data atau melaksanakan operasi kemaskini
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="update_1.css">
</head>
<body>
    <fieldset>
    <h1>Sila Edit</h1>

    <table>
        <tr class="name">
            <th>Nama</th>
            <th>NDP</th>
            <th>Kata Laluan</th>
            <th>Telefon</th>
            <th>Tinggi</th>
            <th>Berat Badan</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <!-- Data update1 -->
        <?php
        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Sambungan pangkalan data gagal: " . mysqli_connect_error());
        }

        $result = mysqli_query($conn, "SELECT * FROM update1");

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['ndp']."</td>";
                echo "<td>".$row['katalaluan']."</td>";
                echo "<td>".$row['telefon']."</td>";
                echo "<td>".$row['tinggi']."</td>";
                echo "<td>".$row['badan']."</td>";
                // echo "<td><a href='update1.php?delete_id=".$row['nama']."'>Delete</a></td>";
                // echo "<td><a href='update1.php?update_id=".$row['nama']."'>Update</a></td>"; 
                echo "<td><a href='update1.php?delete_id=".$row['nama']."'>Delete</a></td>";
                echo "<td><a href='update1.php?update_id=".$row['nama']."'>Update</a></td>";
                echo "</tr>";

               

            }
        } else {
            // echo "<tr><td colspan='7'>Tiada rekod update</td></tr>";
        }
        ?>
    </table>
    <button><a href="menu.php">Back</a></button>
    </fieldset>
</body>
</html>
