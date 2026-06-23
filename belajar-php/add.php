<?php
include 'config.php';

if(isset($_POST['simpan'])){

    $sql = "INSERT INTO products
    (kode_produk,nama_produk,harga,stock)
    VALUES (?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['kode_produk'],
        $_POST['nama_produk'],
        $_POST['harga'],
        $_POST['stock']
    ]);

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<form method="post">

<input type="text" name="kode_produk" class="form-control mb-2" placeholder="Kode Produk">

<input type="text" name="nama_produk" class="form-control mb-2" placeholder="Nama Produk">

<input type="number" name="harga" class="form-control mb-2" placeholder="Harga">

<input type="number" name="stock" class="form-control mb-2" placeholder="Stok">

<button name="simpan" class="btn btn-primary">Simpan</button>

</form>

</div>

</body>
</html>