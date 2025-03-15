<?php
include 'connect.php';
// ==================1==================
// Cek apakah ada GET parameter 'id' dan simpan ke variabel $id
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ==================2==================
    // Definisikan query untuk menghapus data berdasarkan $id
    $query = "DELETE FROM tb_buku WHERE id = '$id'";
    
    // ==================3==================
    // Eksekusi query
    mysqli_query($conn, $query);
    
    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>
