<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY</title>
    <?php
      include 'koneksi.php';
      $sql = "SELECT * FROM galeri";
      $query = mysqli_query($conn, $sql);
    ?>
    <style>
      * {
        box-sizing: border-box;
      }
      section.abuabu {
        background-color: #ffffff;
        padding: 20px;
      }
      #sejarah {
        text-align: center;
      }
      .sejarah {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
      }
      .grid-container {
        display: grid;
        grid-row-gap: 20px;
        grid-column-gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        background-color: #ffffff;
        padding: 20px;
        box-sizing: border-box;
      }
      .grid-item {
        color: white;
        background-color: #000000;
        border: 3px solid rgba(0, 0, 0, 0.979);
        padding: 10px;
        text-align: center;
        border-radius: 15px;
      }
      .grid-item:hover {
        transition: all 0.3s ease-in-out;
        transform: scale(1.2);
      }
      .tombol {
        background-color: #171717;
        height: 30px;
        line-height: 32px;
        color: #fff;
        text-decoration: none;
        display: inline-block;
        padding: 0px 20px 0px 20px;
        font-size: 13px;
        border-radius: 15px;
        margin-top: 20px;
      }
      section h3 {
        font-size: 25pt;
      }
      section h3::after {
        content: "";
        border-bottom: 5px solid #000000;
        width: 52px;
        display: block;
        margin: 20px auto;
      }
      @media (max-width: 768px) {
        .grid-container {
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
      }
      </style>
</head>
<body>
    <section class="abuabu" id="sejarah">
      <h3>GALLERY</h3>
      <div class="grid-container">
      <!-- Tampilkan data dalam format HTML -->
      <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="grid-item">
          <img src="admin/galeri/folder_gambar/<?php echo $row['gambar']; ?>" style="width: 100%;">
          <div class="desc"><?php echo $row['judul']; ?></div>
        </div>
      <?php } ?>

          <!-- <div class="grid-item">
            <img src="asset/bersama.jpeg" style="width: 100%;">
            <div class="desc">FOTO BERSAMA</div>
          </div>
          <div class="grid-item">
            <img src="asset/hadiah.jpeg" style="width: 100%;">
            <div class="desc">DOORPRIZE</div>
          </div>
          <div class="grid-item">
            <img src="asset/pentas1.jpeg" style="width: 100%;">
            <div class="desc">PENTAS SENI</div>
          </div>
          <div class="grid-item">
            <img src="asset/peresmian3.jpeg" style="width: 100%;">
            <div class="desc">PERESMIAN POSYANDU</div>
          </div>
          <div class="grid-item">
            <img src="asset/posyandu4.jpeg" style="width: 100%;">
            <div class="desc">POSYANDU REMAJA</div>
          </div>
          <div class="grid-item">
            <img src="asset/posyandu5.jpeg" style="width: 100%;">
            <div class="desc">POSYANDU REMAJA</div>
          </div>
          <div class="grid-item">
            <img src="asset/PERESMIAN POSYANDU_1.jpg" style="width: 100%;">
            <div class="desc">PERESMIAN POSYANDU REMAJA</div>
          </div>
          <div class="grid-item">
            <img src="asset/PERESMIAN POSYANDU_2.jpg" style="width: 100%;">
            <div class="desc">PERESMIAN POSYANDU REMAJA</div>
          </div>
          <div class="grid-item">
            <img src="asset/POSYANDU_1.jpg" style="width: 100%;">
            <div class="desc">POSYANDU REMAJA</div>
          </div>
          <div class="grid-item">
            <img src="asset/POSYANDU_2.jpg" style="width: 100%;">
            <div class="desc">POSYANDU REMAJA </div>
          </div>
          <div class="grid-item">
            <img src="asset/PENTAS DAN TEATER_1.jpg" style="width: 100%;">
            <div class="desc">PENTAS SENI & TEATHER </div>
          </div>
          <div class="grid-item">
            <img src="asset/PENTAS DAN TEATER_2.jpg" style="width: 100%;">
            <div class="desc">PENTAS SENI & TEATHER</div>
          </div>
          <div class="grid-item">
            <img src="asset/PENTAS DAN TEATER_3.jpg" style="width: 100%;">
            <div class="desc">PENTAS SENI & TEATHER</div>
          </div>
          <div class="grid-item">
            <img src="asset/BAKSOS.jpg" style="width: 100%;">
            <div class="desc">BAKTI SOSIAL</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_1.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_2.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_3.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_4.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_5.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN </div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_6.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN </div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_7.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_8.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_9.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_10.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN</div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_11.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN </div>
          </div>
          <div class="grid-item">
            <img src="asset/HUT RI_12.jpg" style="width: 100%;">
            <div class="desc">HUT KEMERDEKAAN </div>
          </div> -->
      </div>
      <p><a href="index.php" class="tombol">BACK</a></p>
    </section>
</body>
</html>