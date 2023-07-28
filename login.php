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
    <title>Login</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="asset/logo karang taruna.png" alt="CoolAdmin" width='80px' height='80px'>
                            </a>
                        </div>
                        <div class="login-logo">
                            <a href="#">
                                <h2>Karang Taruna</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign In</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="register.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    session_start(); // Pastikan sesi telah dimulai
    include 'koneksi.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Lakukan pengecekan login di database
        $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'AND password='$password'");
        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            $row = mysqli_fetch_assoc($query);
            if ($row['is_verif'] == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                header("location: admin/admin.php");
                exit;
            } else {
                $pesan = "Silahkan verifikasi akun Anda.";
                echo "<script>alert('$pesan');</script>";
            }
        } else {
            $pesan = "Username atau Password salah!";
            echo '<script>alert("'.$pesan.'"); window.location.href = "login.php";</script>';
            exit;
        }        
    }
    ?>

<!-- Tambahkan pesan alert di bawah form login -->
<script>
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] !== '') {
        $pesan = $_GET['pesan'];
        echo "alert('$pesan');";
    } ?>
</script>


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