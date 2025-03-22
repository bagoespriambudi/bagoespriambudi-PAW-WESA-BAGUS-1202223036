<?php
require "./connect.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tb_buku WHERE id = '$id'";
    
    mysqli_query($conn, $query);
    
    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>
