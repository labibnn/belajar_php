<?php
include 'config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);

$data = $stmt->fetch();

if(isset($_POST['update'])){

    $sql = "UPDATE products
            SET kode_produk=?,
                nama_produk=?,
                harga=?
            WHERE id=?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['kode_produk'],
        $_POST['nama_produk'],
        $_POST['harga'],
        $id
    ]);

    header("Location:index.php");
}
?>

<form method="post">

<input type="text" name="kode_produk" value="<?= $data['kode_produk']; ?>">

<input type="text" name="nama_produk" value="<?= $data['nama_produk']; ?>">

<input type="number" name="harga" value="<?= $data['harga']; ?>">

<button name="update">Update</button>

</form>