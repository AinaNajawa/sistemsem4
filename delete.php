<?php
// Sambung ke pangkalan data
require('config.php');

// Pemastikan pengguna login terlebih dahulu
// include('pengesahan_guru.php');

// Dapatkan ID guru dari URL
$id = $_GET['code_delete_id'];

// Hapus rekod ALUMI semasa
$result = mysqli_query($samb, "DELETE FROM update_table WHERE id = '$id'");

// Papar mesej jika berjaya hapus
if ($result) {
    echo "<script>alert('Maklumat anda telah berjaya dihapus');
    window.location= 'update.php'</script>";
} else {
    echo "<script>alert('Gagal menghapus maklumat');
    window.location= 'code_delete.php'</script>";
}
?>