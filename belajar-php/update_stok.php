<?php
include 'config.php';

$id = $_GET['id'];
$aksi = $_GET['aksi'];

if($aksi == "tambah"){
    $sql = "UPDATE products SET stock = stock + 1 WHERE id=?";
}else{
    $sql = "UPDATE products SET stock = stock - 1 WHERE id=?";
}

$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location:index.php");
?>