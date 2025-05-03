<?php
include 'connect.php';

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['create'])) {
    // Ambil data dari form
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    // Query INSERT
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit)
              VALUES ('$judul', '$penulis', '$tahun_terbit')";

    // Eksekusi query
    mysqli_query($conn, $query);

    // Cek apakah baris terpengaruh
    if (mysqli_affected_rows($conn) > 0) {
        // Berhasil, arahkan ke katalog_buku.php
        header("Location: katalog_buku.php");
    } else {
        // Gagal menambahkan data
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>
