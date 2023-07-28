<?php
session_start(); // Pastikan sesi telah dimulai

// Periksa apakah pengguna telah login atau tidak
if (!isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
    header("Location: ../../login.php");
    exit;
}

// Anda juga dapat mengakses informasi pengguna yang disimpan dalam session
$username = $_SESSION['username'];
?>
