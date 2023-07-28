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
    <title>View</title>

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
                            <a href="view.php">
                                <i class="fas fa-history"></i>Sejarah</a>
                        </li>
                        <li>
                            <a href="../visimisi/view.php">
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
                                <i class="fas fa-user"></i>About Us</a>
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
                    <h3 class="title-5 m-b-35">Visi - Misi</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">

                            </div>
                            <div class="table-data__tool-right">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari Data..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Deskripsi Visi - Misi</th>
                                        <th>Tanggal Diperbarui</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Proses pencarian
                                    $search = isset($_POST['search']) ? $_POST['search'] : '';
                                    $sql = "SELECT * FROM visi_misi WHERE keterangan LIKE '%$search%'";
                                    $result = $conn->query($sql);

                                    $items_per_page = 10; // Jumlah item per halaman
                                    $total_items = $result->num_rows; // Total jumlah item
                                    $total_pages = ceil($total_items / $items_per_page); // Total jumlah halaman

                                    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                        $current_page = $_GET['page'];
                                    } else {
                                        $current_page = 1;
                                    }

                                    $offset = ($current_page - 1) * $items_per_page; // Offset data yang akan ditampilkan

                                    $sql .= " LIMIT $items_per_page OFFSET $offset";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        $counter = $offset + 1; // Counter untuk nomor urut

                                        // Output data ke dalam baris tabel
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $counter; ?></td>
                                                <td><?php echo $row["visi"]; ?></td>
                                                <td>
                                                    <ul>
                                                        <?php
                                                        // Mengurai serialized array misi menjadi array asli
                                                        $misi_array = unserialize($row["misi"]);

                                                        // Menampilkan misi sebagai elemen <li>
                                                        foreach ($misi_array as $misi_item) {
                                                            echo "<li>$misi_item</li>";
                                                        }
                                                        ?>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <span class="block-email"><?php echo $row["keterangan"]; ?></span>
                                                </td>
                                                <td><?php echo $row["date"]; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <a href="update.php?id=<?php echo $row["id"] ?>"><i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            $counter++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>Tidak ada data.</td></tr>";
                                    }

                                    // Tutup koneksi
                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <nav>
                                <ul class="pagination">
                                    <?php
                                    if ($total_pages > 1) {
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            echo "<li class='page-item";
                                            if ($i == $current_page) {
                                                echo " active";
                                            }
                                            echo "'><a class='page-link' href='view.php?page=$i'>$i</a></li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            <!-- END PAGE CONTAINER-->
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

    <!-- Main JS-->
    <script src="../../templates/js/main.js"></script>

</body>

</html>