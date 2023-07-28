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
    <title>Edit Data</title>

    <!-- Fontfaces CSS-->
    <link href="../../templates/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../templates/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../templates/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../templates/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../templates/css/theme.css" rel="stylesheet" media="all">
    <?php
        include '../../koneksi.php';
        include '../cek_session.php';
    ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
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
                            <a href="../sejarah/view.php">
                                <i class="fas fa-history"></i>Sejarah</a>
                        </li>
                        <li>
                            <a href="view.php">
                                <i class="fas fa-bullseye"></i>Visi - Misi</a>
                        </li>
                        <li>
                            <a href="../galeri/view.php">
                                <i class="fas fa-image"></i>Galeri</a>
                        </li>
                        <li>
                            <a href="../struktur/view.php">
                                <i class="fas fa-group"></i>Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="../aboutus/view.php">
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
                <a href="#">
                    <img src="../../asset/logo karang taruna.png" alt="Karang Taruna" width="40px" height="40px" />
                </a>Karang Taruna
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="../admin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="../sejarah/view.php">
                                <i class="fas fa-history"></i>Sejarah</a>
                        </li>
                        <li class="active has-sub">
                            <a href="view.php">
                                <i class="fas fa-bullseye"></i>Visi - Misi</a>
                        </li>
                        <li>
                            <a href="../galeri/view.php">
                                <i class="fas fa-image"></i>Galeri</a>
                        </li>
                        <li>
                            <a href="../struktur/view.php">
                                <i class="fas fa-group"></i>Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="../aboutus/view.php">
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
            <?php
            include '../navbar.php';
            ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="card">
                                    <div class="card-header">
                                        <strong>Mengedit</strong> Deskripsi Visi - Misi
                                    </div>
                                    <div class="card-body card-block">
                                        <?php
                                        // Mendapatkan ID data yang akan diupdate
                                        $id = $_GET['id'];

                                        // Query untuk mendapatkan data berdasarkan ID
                                        $sql = "SELECT * FROM visi_misi WHERE id = '$id'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            $row = $result->fetch_assoc();
                                        ?>
                                        <form action="proses_update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <div class="row form-group">
                                                <div class="col">
                                                    <label for="deskripsiVisi" class="form-control-label">Visi</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <textarea name="deskripsiVisi" id="textarea-input" rows="9" placeholder="Masukkan Deskripsi Visi..." class="form-control"><?php echo $row['visi']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col">
                                                    <label for="deskripsiMisi" class="form-control-label">Misi</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <ul class="list-unstyled" id="list-misi">
                                                        <?php
                                                        $misiArr = unserialize($row['misi']);
                                                        if (!empty($misiArr)) {
                                                            foreach ($misiArr as $key => $misi) {
                                                        ?>
                                                        <li>
                                                            <div class="input-group">
                                                                <input type="text" name="deskripsiMisi[]" value="<?php echo $misi; ?>" placeholder="Masukkan Deskripsi Misi" class="form-control">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-danger btn-remove-misi"><i class="fa fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php
                                                            }
                                                        } else {
                                                        ?>
                                                        <li>
                                                            <div class="input-group">
                                                                <input type="text" name="deskripsiMisi[]" placeholder="Masukkan Deskripsi Misi" class="form-control">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-danger btn-remove-misi"><i class="fa fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                    <button type="button" class="btn btn-primary btn-sm mt-3" id="btn-add-misi">Tambah Misi</button>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col">
                                                    <label for="deskripsi" class="form-control-label">Deskripsi Visi - Misi</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <textarea name="deskripsi" id="textarea-input" rows="9" placeholder="Masukkan Deskripsi..." class="form-control"><?php echo $row['keterangan']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success btn-sm" name="submit">
                                                    <i class="fa fa-refresh"></i> Ubah Data
                                                </button>
                                            </div>
                                        </form>
                                        <?php } ?>
                                    </div>

            </div>
            <!-- END PAGE CONTENT -->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../templates/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../templates/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../templates/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../templates/vendor/slick/slick.min.js">
    </script>
    <script src="../../templates/vendor/wow/wow.min.js"></script>
    <script src="../../templates/vendor/animsition/animsition.min.js"></script>
    <script src="../../templates/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../templates/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../templates/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../templates/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../templates/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../templates/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../templates/vendor/select2/select2.min.js">
    </script>

    <!-- Tambahkan SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function() {
        // Tambahkan input misi
        $("#btn-add-misi").click(function() {
            var newInput = '<li><div class="input-group"><input type="text" name="deskripsiMisi[]" placeholder="Masukkan Deskripsi Misi" class="form-control"><div class="input-group-append"><button type="button" class="btn btn-danger btn-remove-misi"><i class="fa fa-times"></i></button></div></div></li>';
            $("#list-misi").append(newInput);
        });

        // Hapus input misi
        $(document).on("click", ".btn-remove-misi", function() {
            $(this).closest("li").remove();
        });
    });
    </script>




    <!-- Main JS-->
    <script src="../../templates/js/main.js"></script>

</body>

</html>