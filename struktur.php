<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STRUKTUR</title>
  <?php
      include 'koneksi.php';
      $sql = "SELECT * FROM struktur";
      $query = mysqli_query($conn, $sql);
    ?>
  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      padding: 0;
    }
    
    section.abuabu {
      background-color: #ffffff;
      padding: 20px;
    }
    
    #sejarah {
      text-align: center;
    }
    
    .grid-container {
      display: grid;
      grid-gap: 40px;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      color: rgb(0, 0, 0);
      background-color: rgb(220, 217, 217);
      margin: 0 auto;
      padding: 0 20px;
      border-radius: 40px;
      box-shadow: 6px 10px 10px 10px rgb(0, 0, 0);
    }
    
    .grid-item {
      color: white;
      background-color: #000000;
      border: 2px solid rgba(0, 0, 0, 0.979);
      padding: 8px;
      text-align: center;
      border-radius: 40px;
    }
    
    section h3 {
      font-size: 25pt;
      margin: 20px 0;
      text-align: center;
      position: relative;
    }
    
    section h3::after {
      content: "";
      border-bottom: 5px solid #000000;
      width: 52px;
      display: block;
      margin: 20px auto;
    }
    
    .tombol {
      background-color: #171717;
      height: 30px;
      line-height: 32px;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      padding: 0px 20px;
      font-size: 13px;
      border-radius: 15px;
      margin-top: 33px;
    }
    
    @media (max-width: 768px) {
      .grid-container {
        margin: 0;
        padding: 0;
      }
    
      .grid-item {
        margin-bottom: 20px;
        margin-top: 20px;
      }
    }
  </style>
</head>

<body>
  <main>
    <section class="abuabu" id="sejarah">
      <h3>STRUKTUR ORGANISASI KARANG TARUNA NILA KENCANA</h3>
      <div class="grid-container">
      <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="grid-item">
          <img src="admin/struktur/folder_gambar/<?php echo $row['struktur']; ?>" style="width: 100%;" alt="Image">
        </div>
        <?php } ?>
      </div>
      <p><a href="index.php" class="tombol">BACK</a></p>
    </section>
  </main>
</body>

</html>
