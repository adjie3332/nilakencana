<?php
include "../../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $deskripsiVisi = $_POST['deskripsiVisi'];
    $deskripsiMisi = $_POST['deskripsiMisi'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_diperbarui = date('Y-m-d'); // Tanggal diperbarui diambil dari hari ini

    // Mengatur array misi
    $misiArray = array();
    foreach ($deskripsiMisi as $misi) {
        $misiArray[] = $misi;
    }
    
    // Serialize the misi array
    $serializedMisi = serialize($deskripsiMisi);

    // Memperbarui data visi, misi, dan keterangan di tabel visi_misi
    $sql = "UPDATE visi_misi SET visi='$deskripsiVisi', misi='$serializedMisi', keterangan='$deskripsi', date='$tanggal_diperbarui' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.replace('view.php');</script>";
        exit;
    } else {
        echo "<script>alert('Data gagal diubah');</script>";
        echo "<script>window.location.replace('view.php');</script>";
        exit;
    }
}
?>
