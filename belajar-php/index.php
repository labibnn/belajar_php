<?php
include 'config.php';
$data = $pdo->query("SELECT * FROM products")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ERP Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Data Produk</h2>

    <a href="add.php" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($data as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['kode_produk']; ?></td>
            <td><?= $row['nama_produk']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['stock']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

                <a href="hapus.php?id=<?= $row['id']; ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Hapus data?')">Hapus</a>

                <a href="update_stok.php?id=<?= $row['id']; ?>&aksi=tambah"
                class="btn btn-success btn-sm">+ Stok</a>

                <a href="update_stok.php?id=<?= $row['id']; ?>&aksi=kurang"
                class="btn btn-secondary btn-sm">- Stok</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>