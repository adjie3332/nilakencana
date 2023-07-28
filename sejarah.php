<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
    <?php
    include 'koneksi.php';

    // Mengambil data dari deskripsi
    $sql = "SELECT * FROM sejarah";
    $result = mysqli_query($conn, $sql);
    ?>

    <style>
        * {
            box-sizing: border-box;
        }

        section.abuabu {
            background-color: #ffffff;
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
            grid-row-gap: 40px;
            grid-column-gap: 50px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            margin: 0 auto;
            padding: 0 20px;
            color: rgb(0, 0, 0);
            background-color: rgb(220, 217, 217);
            border-radius: 60px;
            box-shadow: 6px 10px 10px 10px rgb(0, 0, 0);
        }

        img {
            width: 100%;
            height: auto;
            padding-top: 3vw;
        }

        @media (min-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        .tombol {
            background-color: #171717;
            height: 30px;
            line-height: 32px;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            padding: 0 20px;
            font-size: 13px;
            border-radius: 15px;
            margin-top: 20px;
            margin-bottom: 20px;
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

        p {
            text-align: justify;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <main>
        <section class="abuabu" id="sejarah">
            <h3>SEJARAH</h3>

            <div class="grid-container">
                <div>
                    <img src="asset/logo karang taruna (1).png">
                </div>
                <div>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        // Data ditemukan
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Lakukan sesuatu dengan data yang ditemukan
                        ?>
                            <div>
                                <?= $row["deskripsi"] ?>
                            </div>
                        <?php
                        }
                    } else {
                        // Data tidak ditemukan
                        echo "Data tidak ditemukan.";
                    }
                
                    mysqli_close($conn);
                    ?>
                </div>
            </div><br><br>
            <a href="index.php" class="tombol">BACK</a>
        </section>
    </main>
</body>

</html>