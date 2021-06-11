<?php
include 'koneksi.php';

$sql = "SELECT * FROM produk";
$result = $mysqli->query($sql);

$data = [];
while ($item = $result->fetch_object()) {
    $data[] = $item;
}

$response = [
    'message' => 'success',
    'data' => $data
];

header('Content-type: application/json');
echo json_encode($response);