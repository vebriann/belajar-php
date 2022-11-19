<?php

// array bersi 1 
$murid = array("tegar", "vebrian", "jeus");

// array versi 2
$namaMurid = ["tegar", "vebrian", "jeus"];

// array dengan type data campuran
$namaMuridCampuran = [123, "vebrian", false];

// var_dump atau print_f dapat menampilkan array

var_dump($namaMuridCampuran);
echo "<br>";
print_r($namaMuridCampuran);


// menambahkan array baru menggunakan [] jadi nama variable[]
$namaMuridCampuran[] = "88";
echo "<br>";
print_r($namaMuridCampuran);


// array for / foreach
$angka = [3,5,7,2,4,8,5,77];




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar Array </title>
        <style>
            div {
                background-color: red ;
                width: 20px;
                float: left;
                height: auto;
                margin: 10px;
                text-align: center;
                }
            .clear {
                clear: left;
                }
        </style>
</head>
<body>
    <!-- perulangan pada array versi 1 -->
    <?php for($i = 0; $i < count($angka); $i++) :
        ?>
        <div>
            <?php echo "$angka[$i]";?>
        </div>
    <?php endfor ?>

    <div class="clear"></div>

    <!-- perulangan pada array versi 2 ( Lebih mudah karena foreach di gunakan untuk looping array) -->
    <?php foreach($angka as $i) :
            ?>
            <div>
                <?php echo "$i";?>
            </div>
    <?php endforeach ?>
</body>
</html>

