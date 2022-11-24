<?php
// mengkoneksikan php dengan database

$db = mysqli_connect(
    "localhost",
    "root",
    "",
    "data_pelanggan");

// mengambil data tabel dari object result
// 4 cara mengambil fecth / data result
// mysqli_fetch_row() // mengembalikan array numerik contoh ( var_dump($table["1"]);)
// mysqli_fetch_assoc() // mengembalikan array assosiative contoh ( var_dump($table["api_key"]); )
// mysqli_fetch_array() // mengembalikan keduanya ( numerik & assosiative) contoh ( var_dump($table);)
// mysqli_fetch_object() // mengambil semua data pada table
// $tabel = mysqli_fetch_assoc($result);

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    if ( !$result ) {
        echo mysqli_error($db);
        exit;
    }
    $data = [];
    while ($data_query = mysqli_fetch_assoc($result)) {
        $data[] = $data_query;
    }
    return $data;    
    
}





?>