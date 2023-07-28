<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Fontfaces CSS-->
    <link href="templates/css/font-face.css" rel="stylesheet" media="all">
    <link href="templates/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="templates/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="templates/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="templates/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="templates/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="templates/css/theme.css" rel="stylesheet" media="all">
    <?php
    // Include file koneksi.php untuk menghubungkan ke database
    include 'koneksi.php';

    // Cek apakah ada data yang dikirimkan melalui form
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
        // Ambil data dari form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Query untuk menyimpan data ke database
        $query = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if($result){
            // Jika data berhasil disimpan, arahkan pengguna ke halaman login
            header("location: login.php");
            exit();
        }else{
            // Jika terjadi kesalahan saat menyimpan data, tampilkan pesan error
            echo "<script>alert('Terjadi kesalahan saat mendaftar. Silakan coba lagi!');</script>";
        }
    }
?>

</head>

<body class="animsition">
<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="asset/logo karang taruna.png" alt="CoolAdmin" width='60px' height='60px'>
                            </a>
                        </div>
                        <div class="login-logo">
                            <a href="#">
                                <h2>Karang Taruna</h2>
                                <span>Daftar untuk lanjut.</span>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="register.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="login.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="templates/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="templates/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="templates/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="templates/vendor/slick/slick.min.js">
    </script>
    <script src="templates/vendor/wow/wow.min.js"></script>
    <script src="templates/vendor/animsition/animsition.min.js"></script>
    <script src="templates/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="templates/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="templates/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="templates/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="templates/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="templates/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="templates/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="templates/js/main.js"></script>

</body>

</html>
<!-- end document-->