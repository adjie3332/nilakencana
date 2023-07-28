<?php
$servername = "localhost"; // Nama server database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna database
$dbname = "karangtaruna"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
