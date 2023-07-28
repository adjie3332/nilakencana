<?php
include "../../koneksi.php";
include "../cek_session.php";

// Mendapatkan data yang dikirimkan melalui form
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal_diperbarui = date('Y-m-d'); // Mendapatkan tanggal dan waktu saat ini

// Cek apakah ada file gambar yang diunggah
if ($_FILES['gambar']['name'] != '') {
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_path = "folder_gambar/" . $gambar;

    // Upload gambar ke folder gambar
    move_uploaded_file($gambar_tmp, $gambar_path);

    // Query update data dengan gambar
    $sql = "UPDATE galeri SET judul = '$judul', deskripsi = '$deskripsi', gambar = '$gambar', date = '$tanggal_diperbarui' WHERE id = '$id'";
} else {
    // Query update data tanpa gambar
    $sql = "UPDATE galeri SET judul = '$judul', deskripsi = '$deskripsi', date = '$tanggal_diperbarui' WHERE id = '$id'";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil diubah');</script>";
    echo "<script>window.location.replace('view.php');</script>";
} else {
    echo "<script>alert('Gagal mengubah data');</script>";
    echo "<script>window.location.replace('view.php');</script>";
}

$conn->close();
?>
