<?php

include "koneksi.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Generate token for verification link
$token = bin2hex(random_bytes(16));

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ktnilakencana@gmail.com';                     //SMTP username
    $mail->Password   = 'nqftpvxcrtrghzlv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ktnilakencana@gmail.com', 'Nila Kencana');
    $mail->addAddress($email, $username);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Verifikasi Email';
    $mail->Body    = 'Halo, ' . $username . '. Klik tautan berikut untuk verifikasi email Anda: <a href="http://localhost/coba_skrip/NILA%20KENCANA/MAGANG/verifikasi_email.php?token=' . $token . '">Verifikasi Email</a>';

    if ($mail->send()) {
        $query = "INSERT INTO admin (username, email, password, verification_code) VALUES ('$username', '$email', '$password','$token')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Redirect user to a page displaying a success message
            echo "<script>alert('Berhasil mendaftar. Silakan cek email Anda untuk verifikasi!');window.location='login.php'</script>";
        } else {
            die("Query gagal dijalankan: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        };
    } else {
        echo "Email tidak dapat dikirimkan..";
    };
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
