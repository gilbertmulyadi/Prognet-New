<?php
$host = "prognet.localnet";
$username = "2205551057";
$password = "2205551057";
$database = "db_2205551057";
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa keberhasilan koneksi
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
