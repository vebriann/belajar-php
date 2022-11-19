<?php

$siswaTelkom = [
    ["Vebrian", "pplg", "pplg1", "30"], 
    ["Tegar", "pplg", "pplg1", "22"], 
    ["Andre", "pplg", "pplg1", "2"]
];

// array dengan key dan value

$mahasiswaIT = [
    ["nama" => "Vebrian",
        "jurusan" => "pplg",
        "kelas" => "pplg1",
        "absen" => "30"
    ],
    [
        "nama" => "Tegar",
        "jurusan" => "pplg",
        "kelas" => "pplg1",
        "absen" => "22"
    ],
    [
        "nama" => "Andre",
        "jurusan" => "pplg",
        "kelas" => "pplg1",
        "absen" => "2"
    ]

];
// cara ambil valuenya yaitu tentuin valuenya berada pada index berapa
//             index, value
echo $mahasiswaIT[1]["nama"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array assosiative foreach</title>
</head>
<body>
    <?php foreach ($siswaTelkom as $siswa) :?>
        <ul>
            <li>Nama: <?=$siswa[0]?></li>
            <li>Jurusan: <?=$siswa[1]?></li>
            <li>Kelas: <?=$siswa[2]?></li>
            <li>Absen: <?=$siswa[3]?></li>
        </ul>
    <?php endforeach?>

    <!-- Array Menggunakan key & value -->
    <?php foreach ($mahasiswaIT as $siswa) :?>
        <ul>
            <li>Nama: <?=$siswa["nama"]?></li>
            <li>Jurusan: <?=$siswa["jurusan"]?></li>
            <li>Kelas: <?=$siswa["kelas"]?></li>
            <li>Absen: <?=$siswa["absen"]?></li>
        </ul>
    <?php endforeach?>
</body>
</html>