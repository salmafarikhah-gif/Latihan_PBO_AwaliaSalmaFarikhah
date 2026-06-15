<?php
$host     = "localhost";
$username = "root";         
$password = "";             
$database = "nama_db_mu";   // Sesuaikan dengan nama database kamu

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>