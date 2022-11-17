<?php 

function salam() {
    date_default_timezone_set("Asia/Jakarta");
    $waktu = date("H:i", time());
    if ($waktu <= "09.00") {
        $waktu1 = "pagi";
    }
    else if ($waktu <= "14.00") {
        $waktu1 = "siang";
    }
    else if ($waktu <= "17.00") {
        $waktu1 = "sore";
    }
    else {
        $waktu1 = "malam";
    }

    return "selamat $waktu1, vebriann";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh function pada php</title>
</head>
<body>
    <h1><?= salam() ?></h1>
</body>
</html>