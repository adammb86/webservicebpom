<?php

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "webservices";

$mysqli = @new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die("Koneksi Error: " . $mysqli->connect_error);
}