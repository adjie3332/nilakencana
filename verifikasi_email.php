<?php
include "koneksi.php";

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Periksa apakah token ada di database
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE verification_code='$token'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        // Verifikasi akun
        $updateQuery = mysqli_query($conn, "UPDATE admin SET is_verif=1 WHERE verification_code='$token'");
        if ($updateQuery) {
            // Akun berhasil diverifikasi
            echo "<script>alert('Akun Anda telah berhasil diverifikasi. Silakan masuk ke Login.');</script>";
            echo "<script>window.location.replace('login.php');</script>";
        } else {
            echo "Gagal memperbarui status verifikasi akun.";
        }
    } else {
        echo "<script>('Token verifikasi tidak valid atau akun telah diverifikasi sebelumnya.');";
    }
} else {
    echo "Token verifikasi tidak tersedia.";
}
?>
