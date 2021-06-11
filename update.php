<?php
include 'koneksi.php';

$id = $_GET['id'];
$jenisProduk = $_POST['jenis_produk'];
$namaProduk = $_POST['nama_produk'];
$jumlahStok = $_POST['jumlah_stok'];
$harga = $_POST['harga'];

$sql = "UPDATE produk SET jenis_produk = ?, nama_produk = ?, jumlah_stok = ?, harga = ? WHERE id = ?";

$stmt = $mysqli->prepare($sql) or die (mysqli_error($mysqli));
$stmt->bind_param("ssiii", $jenisProduk, $namaProduk, $jumlahStok, $harga, $id);
$stmt->execute();

$response = [
    'message' => 'success'
];

header('Content-type: application/json');
echo json_encode($response);