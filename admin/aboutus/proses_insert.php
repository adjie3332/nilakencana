<?php
include '../../koneksi.php';
include '../cek_session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['nama'];
    $deskripsi = $_POST['keterangan'];
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $tanggal_dibuat = date('Y-m-d'); // Tanggal dibuat diambil dari hari ini

    // Tentukan folder penyimpanan gambar
    $folder_gambar = "folder_gambar/";

    // Pindahkan gambar ke folder yang ditentukan
    move_uploaded_file($gambar_tmp, $folder_gambar.$gambar);

    // Insert data ke database
    $sql = "INSERT INTO aboutus (nama, keterangan, foto, date) VALUES ('$judul', '$deskripsi', '$gambar', '$tanggal_dibuat')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.replace('view.php');</script>";
        exit;
    } else {
        echo "<script>alert('Gagal menambahkan data');</script>";
        echo "<script>window.location.replace('view.php');</script>";
        exit;
    }
}
?>
