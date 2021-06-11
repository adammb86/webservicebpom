<?php
include 'koneksi.php';

$jenisProduk = $_POST['jenis_produk'];
$namaProduk = $_POST['nama_produk'];
$jumlahStok = $_POST['jumlah_stok'];
$harga = $_POST['harga'];

$sql = "INSERT INTO produk VALUES(DEFAULT, ?, ?, ?, ?, DEFAULT, DEFAULT)";

$stmt = $mysqli->prepare($sql) or die (mysqli_error($mysqli));
$stmt->bind_param("ssii", $jenisProduk, $namaProduk, $jumlahStok, $harga);
$stmt->execute();

$response = [
    'message' => 'success'
];

header('Content-type: application/json');
echo json_encode($response);