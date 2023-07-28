<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scable=no">
  <meta name="HandheldFriendly" content="true">
    <title>karangtaruna.com</title>
    <link rel="stylesheet" href="public/style.css">
    <?php
      include "koneksi.php";
    ?>
</head>
<body>
  <nav>
    <div class="layar-dalam">
        <div class="logo">
            <a href=""><img src="asset/logo karang taruna.png" class="putih" /></a>
            <a href=""><img src="asset/logo karang taruna.png" class="hitam" /></a>
        </div>
        <div class="menu">
            <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#profile">PROFILE</a></li>
                <li><a href="#gallery">GALLERY</a></li>
                <li><a href="#aboutus">ABOUT US</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="layar-penuh">
    <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop><source src="asset/video.mp4" type="video/mp4"></video>
        <div class="intro">
            <h3>KARANG TARUNA NILA KENCANA</h3>
            <p>Desa Gonilan</p>
            <p><a href="https://wa.me/+6285725510553" class="tombol">MORE INFO</a></p>
        </div>
    </header>
</div>
  <main>
    <section class="abuabu" id="profile">
      <h3>PROFILE</h3>
      <div class="layar-dalam profile">
        <div>
          <img src="asset/sejarah.png">
          <h6>SEJARAH</h6>
          <div>
            <p style="text-align: justify; font-size: 14px;" id="sejarahKeterangan">
              <?php
                // Query untuk mengambil data dari tabel sejarah
                $sql = "SELECT * FROM sejarah";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // Output data ke dalam baris tabel
                  while($row = $result->fetch_assoc()) {
                    echo $row["keterangan"];
                  }
                } else {
                  echo "Tidak Ada Data";
                }
              ?>
            </p>
            <p><a href="sejarah.php" class="tombol">READ MORE</a></p>
          </div>
        </div>
        <div>
          <img src="asset/visimisi.png">
          <h6>VISI DAN MISI</h6>
          <?php
            // Query untuk mengambil data dari tabel visi dan misi
            $sql = "SELECT * FROM visi_misi";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // Output data ke dalam baris tabel
            while($row = $result->fetch_assoc()) {
            echo "<p style='text-align: justify; font-size: 14px;'>".$row["keterangan"]."</p>";
            }
            } else {
            echo "Tidak Ada Data";
            }
          ?>
          <p><a href="visimisi.php" class="tombol">READ MORE</a></p>
        </div>

        <div>
          <img src="asset/strukturorganisasi.png" />
          <h6>STRUKTUR ORGANISASI</h6>
          <?php
            // Query untuk mengambil data dari tabel struktur organisasi
            $sql = "SELECT * FROM struktur";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // Output data ke dalam baris tabel
            while($row = $result->fetch_assoc()) {
            echo "<p style='text-align: justify; font-size: 14px;'>".$row["deskripsi"]."</p>";
            }
            } else {
            echo "Tidak Ada Data";
            }
          ?>
          <p><a href="struktur.php" class="tombol">READ MORE</a></p>
        </div>
      </div>
    </section>

    <section class="abuabu" id="gallery">
    <h3>GALLERY</h3>
      <div class="grid-container">
      <?php
        // Lakukan proses pengambilan data dari tabel "galeri" di sini
        // Contoh kode pengambilan data menggunakan mysqli_query:
        $result = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC LIMIT 4");
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="grid-item">
          <img src="admin/galeri/folder_gambar/<?php echo $row['gambar']; ?>" style="width: 100%; height: 100%">
        </div>
      <?php
        }
      ?>
      </div>
      <div>
        <p><a href="gallery.php" class="tombol">READ MORE</a></p>
      </div>
    </section>

    <section class="quote">
      <div class="layar-dalam">
        <p style="font-family: open sans; text-align: center;">"Seribu orang tua bisa bermimpi, satu orang pemuda bisa mengubah dunia."</p>
        <h6 style="font-family: open sans; text-align: center;">-Bung Karno</h6>
      </div>
    </section>

    <section id="aboutus" style="margin-top: 10px;">
      <div class="layar-dalam">
        <h3>TEAM</h3>
        <div class="tim">
          <?php
            $sql = "SELECT * FROM aboutus";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($query)) {
          ?>
            <div>
              <img src="admin/aboutus/folder_gambar/<?php echo $row['foto']; ?>" />
              <h6><?php echo $row['nama']; ?></h6>
              <span><?php echo $row['keterangan']; ?></span>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
    </section>

    <section class="abuabu" id="sejarah"
    style="background-color: rgb(255, 255, 255); padding-bottom: 2px; padding-top: 2px; margin-top: 80px;">
    <h3>CONTACT</h3>
    <div class="footersec" id="contact">
      <footer class="footer-distributed">
        <div class="footer-left">
          <img src="asset/logo karang taruna.png" alt="logo" style="width: 40%;">
          <h3><span style="font: 'Open Sans', cursive; color: white;">Karang Taruna<br><br>Nila Kencana</span></h3>
          <p class="footer-links" style="color: white; font-size: 13px; font-style: normal;">
            <a href="#home" class="link-1">Home</a>
            <a href="#profile">Profile</a>
            <a href="#gallery">Gallery</a>
            <a href="#aboutus">About Us</a>
            <a href="#contact">Contact</a>
          </p>
        </div>

        <div class="footer-center">
          <div>
            <p style="color: white; font-size: 18px; margin: 0px; font-style: cursive;">Alamat</p><br>
            <p class="footer-company-about" style="color: white; font-size: 13px; font-style: normal;">Desa Gonilan,
              Kecamatan Kartasura, Kabupaten Sukoharjo</p><br>
          </div>
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1346.4967185794942!2d110.7673306348823!3d-7.550939969016565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14670b729d43%3A0x3bd15b7ac4d5b5f9!2sBalai%20Desa%20Gonilan!5e0!3m2!1sid!2sus!4v1680747183391!5m2!1sid!2sus"
              width="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="footer-right">
          <p style="color: white; font-size: 18px; margin: 0px;">Tentang Kami</p><br>
          <p class="footer-company-about"
            style="color: white; font-size: 13px; font-style: normal;">Untuk info lebih lanjut, silakan hubungi akun sosial media kami dibawah ini.</p>
          <div class="footer-icons">
            <a href="https://wa.me/+6285725510553"><img src="asset/whatsapp.png" width="100%" height="100%"></a>
            <a href="#"><img src="asset/youtube.png" width="100%" height="100%"></a>
            <a href="#"><img src="asset/instagram.png" width="100%" height="100%"></a>
            <a href="#"><img src="asset/email.png" width="100%" height="100%"></a>
          </div>
        </div>

        <p class="footer-company-name"
          style="color: white; font-size: 14px; font-style: normal;">© Tim Magang 2023</p>
      </footer>
    </div>
  </section>
    </main>
    <?php
    ?>
</body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="public/javascript.js"></script>
</html>