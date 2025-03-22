<?php
require "./connect.php"; 

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['create'])) {
   
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

   
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit)
              VALUES ('$judul', '$penulis', '$tahun_terbit')";

    
    mysqli_query($conn, $query);

   
    if (mysqli_affected_rows($conn) > 0) {
        
        header("Location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>
