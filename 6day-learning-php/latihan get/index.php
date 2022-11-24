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
    <title>Profil</title>
</head>
<body>
    <ul>
        <li>
            <img src="<?=$dataMobile[1]["fotoMobile"]?>" alt="foto mobil" style="width: 100px; height: 100px;">
            <a href="get.php?fotoMobil=<?=$dataMobile[1]["fotoMobile"];?>&namaMobil=<?=$dataMobile[1]["namaMobile"]?>&modelMobil=<?=$dataMobile[1]["model"];?>&typeMobil=<?=$dataMobile[1]["typeBody"];?>&SegmenMobil=<?=$dataMobile[1]["Segmen"]?>&JenisMobil=<?=$dataMobile[1]["Jenis"]?>">Link</a>
        </li>
    </ul>
</body>
</html>