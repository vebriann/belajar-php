<?php
// Assosiative array

$hari = array("senin", "Selasa", "Rabu");
$bulan = ["Januhari", "Februari", "Maret"];
$arr = [100, "teks",True];
// Menampilkan Array
// versi debugging

var_dump($hari);
echo "<br>";
print_r($bulan);

// echo hanya bisa menampilkan 1 element pada array 
echo "$arr[0]";

// array multidimensi

$angka = [[1,2,3],[4,5,6],[7,8,9]];
echo "<br>";
echo $angka[2][1];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>array multidimensi / bersarang</title>
    </head>
    <style>
        div {
            background-color: red;
            width: auto;
            height: auto;
            padding: 10px;
            margin: 10px;
            float: left;
        }
    </style>
    <body>
        <!-- foreach pada array multidimensi -->
        <?php foreach ($angka as $i) :?>
            <?php foreach ($i as $x) :?>
                <div> 
                    <?= $x ?>
                </div>
            <?php endforeach ?>
        <?php endforeach ?>
    </body>
</html>