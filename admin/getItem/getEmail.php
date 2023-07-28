<?php
    // Query untuk mengambil data email dari database
    $username = $_SESSION['username'];
    $query = mysqli_query($conn, "SELECT email FROM admin WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);
    $email = $data['email'];
?>