<?php
include "../../koneksi.php";
include "../cek_session.php";

// Mendapatkan data yang dikirimkan melalui form
$id = $_POST['id'];
$deskripsi = $_POST['deskripsi'];

// Cek apakah ada file gambar yang diunggah
if ($_FILES['gambar']['name'] != '') {
    // Mendapatkan informasi gambar yang diunggah
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_path = "folder_gambar/" . $gambar;

    // Upload gambar baru ke folder gambar
    move_uploaded_file($gambar_tmp, $gambar_path);

    // Query untuk mendapatkan data gambar lama
    $sql_select = "SELECT struktur FROM struktur WHERE id = '$id'";
    $result_select = $conn->query($sql_select);

    if ($result_select->num_rows > 0) {
        $row_select = $result_select->fetch_assoc();
        $gambar_lama = $row_select['gambar'];

        // Hapus gambar lama jika ada
        if (file_exists($gambar_lama)) {
            unlink($gambar_lama);
        }
    }

    // Query untuk update data dengan gambar baru
    $sql = "UPDATE struktur SET deskripsi = '$deskripsi', struktur = '$gambar' WHERE id = '$id'";
} else {
    // Query untuk update data tanpa gambar
    $sql = "UPDATE struktur SET deskripsi = '$deskripsi' WHERE id = '$id'";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil diupdate');</script>";
    echo "<script>window.location.replace('view.php');</script>";
} else {
    echo "<script>alert('Gagal mengupdate data');</script>";
    echo "<script>window.location.replace('view.php');</script>";
}

$conn->close();
?>
