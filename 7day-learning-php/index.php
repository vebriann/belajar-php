<?php

// mengkoneksikan php dengan database

$db = mysqli_connect(
    "localhost",
    "root",
    "",
    "data_pelanggan"
);

// mengambil data dari tabel yang ada di database
$result = mysqli_query($db, "SELECT * FROM data");

if ( !$result ) {
    echo mysqli_error($db);
    exit;
}

// mengambil data tabel dari object result
// 4 cara mengambil fecth / data result
// mysqli_fetch_row() // mengembalikan array numerik contoh ( var_dump($table["1"]);)
// mysqli_fetch_assoc() // mengembalikan array assosiative contoh ( var_dump($table["api_key"]); )
// mysqli_fetch_array() // mengembalikan keduanya ( numerik & assosiative) contoh ( var_dump($table);)
// mysqli_fetch_object() // mengambil semua data pada table






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php while ($tabel = mysqli_fetch_assoc($result)) :?>
            <div class="card">
                    <h1>Biodata</h1>
                    <h2>Nama: <?= $tabel["nama"];?></h2>
                    <h2>ApiKey: <?= $tabel["api_key"];?></h2>
                    <h2>Tanggal: <?= $tabel["tanggal"];?></h2>
                </div>
            <?php endwhile?>
        </div>
</body>
</html>