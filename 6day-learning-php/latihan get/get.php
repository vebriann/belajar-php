<?php

// if isset di gunakan untuk mengecek SUPERGLOBALS $_GET apakah ada nilainya atau cuman variabel kosong
if ( !isset($_GET["namaMobil"]) || !isset($_GET["modelMobil"]) || !isset($_GET["typeMobil"]) || !isset($_GET["SegmenMobil"]) || !isset($_GET["JenisMobil"])) {

    // header di gunakan untuk mengembalikan ke tampilan sebelumnya jika data $_GET tidak ada atau di sebut juga dengan Redirect
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="content">
        <div class="card">
            <img src="<?= $_GET["fotoMobil"]?>" alt="foto items">
            <div class="card-model">
                <h4>Nama: <?= $_GET["namaMobil"]?></h4>
                <h4>Model: <?= $_GET["modelMobil"]?></h4>
                <h4>Type: <?= $_GET["typeMobil"]?></h4>
                <h4>Segmen: <?= $_GET["SegmenMobil"]?></h4>
                <h4>Jenis Penggerak: <?= $_GET["JenisMobil"]?></h4>
            </div>
        </div>

    </div>
</body>
</html>