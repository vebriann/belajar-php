<?php

// array data mobil 
$dataMobile = [
    [
        "fotoMobile" => "https://images.autofun.co.id/file1/382ed63971b04dcb879b9fd8da56520a_456x258.jpg",
        "namaMobile" => "Lamborghini Aventador LP 750-4 Superveloce",
        "model" => "Lamborghini Aventador",
        "typeBody" => "Coupe",
        "Segmen" => "Mobile Sport",
        "Jenis" => "AT",
    ],
    [
        "fotoMobile" => "https://i.pinimg.com/originals/d2/09/9b/d2099bfd938858a0fb140de5b9a922ef.png",
        "namaMobile" => "Lamborghini Aventador LP 750-4 Roadster",
        "model" => "Lamborghini Aventador",
        "typeBody" => "Convertible",
        "Segmen" => "Mobile Sport",
        "Jenis" => "AT",
    ],
    [
        "fotoMobile" => "https://p4.wallpaperbetter.com/wallpaper/988/813/287/lamborghini-aventador-svj-2018-4k-wallpaper-preview.jpg",
        "namaMobile" => "Lamborghini Aventador LP 750-4",
        "model" => "Lamborghini Aventador",
        "typeBody" => "Convertible",
        "Segmen" => "Mobile Sport",
        "Jenis" => "AT",
    ],

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array Multi</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="content">
        <?php foreach ($dataMobile as $mobile) :?>
            <div class="card">
                <img src="<?= $mobile["fotoMobile"]?>" alt="foto items">
                <div class="card-model">
                    <h4>Nama: <?= $mobile["namaMobile"]?></h4>
                    <h4>Model: <?= $mobile["model"]?></h4>
                    <h4>Type: <?= $mobile["typeBody"]?></h4>
                    <h4>Segmen: <?= $mobile["Segmen"]?></h4>
                    <h4>Jenis Penggerak: <?= $mobile["Jenis"]?></h4>

                </div>
            </div>
        <?php endforeach?>
    </div>
</body>
</html>