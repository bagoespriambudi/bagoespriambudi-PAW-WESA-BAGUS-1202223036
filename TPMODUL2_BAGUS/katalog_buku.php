<?php
include 'connect.php';

// ==================1==================
// Definisikan query untuk mengambil semua data buku
$query = "SELECT * FROM tb_buku";
$result = mysqli_query($conn, $query);

$bukus = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bukus[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Katalog Buku</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1>Katalog Buku</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($bukus) == 0) : ?>
                    <tr>
                        <th colspan="5" class="text-center">
                            TIDAK ADA DATA DALAM KATALOG
                        </th>
                    </tr>
                <?php else: ?>
                    <!-- Mulai penomoran dari 1 -->
                    <?php $no = 1; ?>
                    <?php foreach ($bukus as $buku) : ?>
                        <tr>
                            <!-- ==================2================== -->
                            <!-- Tampilkan data buku -->
                            <td><?= $no++; ?></td>
                            <td><?= $buku['judul']; ?></td>
                            <td><?= $buku['penulis']; ?></td>
                            <td><?= $buku['tahun_terbit']; ?></td>
                            <td>
                                <a
                                    href="edit_buku.php?id=<?= $buku['id']; ?>"
                                    class="btn btn-primary"
                                >
                                    Edit
                                </a>
                                <a
                                    href="delete.php?id=<?= $buku['id']; ?>"
                                    class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data?')"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    ></script>
</body>
</html>
