<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM produk WHERE id = ?";

$stmt = $mysqli->prepare($sql) or die (mysqli_error($mysqli));
$stmt->bind_param("i", $id);
$stmt->execute();

$response = [
    'message' => 'success'
];

header('Content-type: application/json');
echo json_encode($response);