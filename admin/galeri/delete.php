<?php
include '../../koneksi.php';
include '../cek_session.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data gambar sebelum dihapus
    $sql = "SELECT gambar FROM galeri WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $gambar = $row['gambar'];

    // Hapus data dari tabel galeri
    $deleteQuery = "DELETE FROM galeri WHERE id = $id";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Hapus juga file gambar dari direktori
        $folder_gambar = "folder_gambar/";
        $path = $folder_gambar . $gambar;
        if (file_exists($path)) {
            unlink($path); // Hapus file gambar
        }

        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.replace('view.php');</script>";
        exit;
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
        echo "<script>window.location.replace('view.php');</script>";
        exit;
    }
}
?>
