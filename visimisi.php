<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="true">
  <title>visimisi</title>
  <?php
  // Panggil koneksi database
  include "koneksi.php";
  ?>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
    }

    section#abuabu {
      background-color: #ffffff;
    }

    #sejarah {
      text-align: center;
    }

    section.abuabu {
      background-color: #ffffff;
    }

    .vision-mission {
      background-color: white;
      padding: 50px 0;
    }

    .container-vm {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .vision,
    .mission {
      width: 100%;
      background-color: rgb(189, 189, 189);
      padding: 10px;
      margin-bottom: 50px;
      box-shadow: 0px 0px 20px rgb(0, 0, 0);
    }

    .vision h2,
    .mission h2 {
      margin-bottom: 30px;
    }

    .mission ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      text-align: justify;
    }

    .mission li {
      margin-bottom: 10px;
      padding-left: 20px;
      position: relative;
    }

    .mission li::before {
      content: "\2022";
      position: absolute;
      left: 0;
      top: 3px;
    }

    @media (min-width: 768px) {
      .vision,
      .mission {
        width: 100%;
      }
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
      margin-top: 33px;
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
  </style>
</head>

<body>
  <section class="vision-mission" id="sejarah">
    <h3>VISI DAN MISI</h3>

    <?php
    // Query untuk mengambil data visi dan misi dari tabel
    $sql = "SELECT * FROM visi_misi";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $visi = $row["visi"];
        $misi = unserialize($row["misi"]);
    ?>

    <div class="container-vm">
        <div class="vision">
            <h2>Visi</h2>
            <p><?= $visi ?></p>
        </div>

        <div class="mission">
            <h2>Misi</h2>
            <ul>
                <?php foreach ($misi as $item) { ?>
                <li>
                    <p><?= $item ?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <?php
    } else {
        echo 'Tidak ada data visi dan misi.';
    }

    // Tutup koneksi
    $conn->close();
    ?>


    <p><a href="index.php" class="tombol">BACK</a></p>
  </section>
</body>

</html>
