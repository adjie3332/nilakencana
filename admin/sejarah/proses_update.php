<?php
// Koneksi ke database
include "../../koneksi.php";

// Mendapatkan data dari form
$id = $_POST['id'];
$keterangan = $_POST['sejarah'];
$deskripsi = $_POST['deskripsi'];
$date = date('Y-m-d'); // Mendapatkan tanggal dan waktu saat ini

// Query untuk memperbarui data
$sql = "UPDATE sejarah SET keterangan = '$keterangan', deskripsi = '$deskripsi', date = '$date' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    // Jika update berhasil
    echo "<script>alert('Data berhasil diubah');</script>";
    echo "<script>window.location.replace('view.php');</script>";
} else {
    // Jika update gagal
    echo "<script>alert('Gagal mengubah data');</script>";
    echo "<script>window.location.replace('view.php');</script>";
}

// Menutup koneksi ke database
$conn->close();
?>
