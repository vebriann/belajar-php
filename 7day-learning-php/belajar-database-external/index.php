<?php

// untuk menganggil function yang ada di file lain 
require 'function.php';

// $data_pembeli di gunakan untuk variable
// query merupakan nama function 
// dan "SELECT * FROM data" 
$data_pembeli = query("SELECT * FROM data");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
</head>
<body>
    <?php foreach ($data_pembeli as $pembeli) : ?>
        <h1><?=$pembeli["nama"]?></h1>
        <h1><?=$pembeli["api_key"]?></h1>
        <h1><?=$pembeli["tanggal"]?></h1>
        <h1>-------</h1>
    <?php endforeach?>
</body>
</html>