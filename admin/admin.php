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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../templates/css/font-face.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../templates/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../templates/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../templates/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../templates/css/theme.css" rel="stylesheet" media="all">
    <?php
    include '../koneksi.php';
    session_start(); // Pastikan sesi telah dimulai

    // Periksa apakah pengguna telah login atau tidak
    if (!isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
        header("Location: ../login.php");
        exit;
    }

    // Anda juga dapat mengakses informasi pengguna yang disimpan dalam session
    $username = $_SESSION['username'];
    include 'getItem/getEmail.php';
    ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../index.php">
                            <img src="../asset/logo karang taruna.png" alt="Karang Taruna" height="40px" width="40px" />
                        </a>Karang Taruna
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="sejarah/view.php">
                                <i class="fas fa-history"></i>Sejarah</a>
                        </li>
                        <li>
                            <a href="visimisi/view.php">
                                <i class="fas fa-bullseye"></i>Visi - Misi</a>
                        </li>
                        <li>
                            <a href="galeri/view.php">
                                <i class="fas fa-image"></i>Galeri</a>
                        </li>
                        <li>
                            <a href="struktur/view.php">
                                <i class="fas fa-group"></i>Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="aboutus/view.php">
                                <i class="fas fa-user-circle"></i>About Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="../index.php">
                    <img src="../asset/logo karang taruna.png" alt="Karang Taruna" height="40px" width="40px" />
                </a>Karang Taruna
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="admin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="sejarah/view.php">
                                <i class="fas fa-history"></i>Sejarah</a>
                        </li>
                        <li>
                            <a href="visimisi/view.php">
                                <i class="fas fa-bullseye"></i>Visi - Misi</a>
                        </li>
                        <li>
                            <a href="galeri/view.php">
                                <i class="fas fa-image"></i>Galeri</a>
                        </li>
                        <li>
                            <a href="struktur/view.php">
                                <i class="fas fa-group"></i>Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="aboutus/view.php">
                                <i class="fas fa-user-circle"></i>About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="position: relative; display: flex; justify-content: flex-end !important; align-items: flex-end;">
                            <!-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> -->
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../asset/logo karang taruna.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['username'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../asset/logo karang taruna.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['username'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $email ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">DASHBOARD</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <!-- Tombol Sejarah -->
                            <div class="col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Sejarah</h2>
                                                <span>History</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <a href="sejarah/view.php"><button class="btn btn-primary">Lihat Sejarah</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol Visi-Misi -->
                            <div class="col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-eye"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Visi - Misi</h2>
                                                <span>Vision - Mission</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <a href="visimisi/view.php"><button class="btn btn-primary">Lihat Visi-Misi</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol Galeri -->
                            <div class="col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-image"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Galeri</h2>
                                                <span>Gallery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <a href="galeri/view.php"><button class="btn btn-primary">Lihat Galeri</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol Struktur -->
                            <div class="col-lg-4">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-group"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Struktur Organisasi</h2>
                                                <span>Organizational Structure</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <a href="struktur/view.php"><button class="btn btn-primary">Lihat Struktur</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MAIN CONTENT-->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../templates/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../templates/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../templates/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../templates/vendor/slick/slick.min.js">
    </script>
    <script src="../templates/vendor/wow/wow.min.js"></script>
    <script src="../templates/vendor/animsition/animsition.min.js"></script>
    <script src="../templates/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../templates/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../templates/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../templates/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../templates/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../templates/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../templates/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../templates/js/main.js"></script>

</body>

</html>
<!-- end document-->
