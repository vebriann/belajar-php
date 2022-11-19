<?php 

$siswaTelkom1 = ["vebrian", "xpplg1", "30", "pplg"];

$siswaTelkom2 = [
    ["vebrian", "xpplg1", "30", "pplg"],
    ["tegar", "xpplg1", "22", "pplg"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <ul>
        <!-- Array Versi 1 yang -->
        <?php foreach($siswaTelkom1 as $siswa): ?>
            <li>
            <?= $siswa?>
            </li>
        <?php endforeach?>
    </ul>

    <!-- Array Versi 2  -->
    <?php foreach($siswaTelkom2 as $siswa): ?>
        <ul>
            <li><?= $siswa[0]?></li>
            <li><?= $siswa[1]?></li>
            <li><?= $siswa[2]?></li>
            <li><?= $siswa[3]?></li>
        </ul>
    <?php endforeach?>

</body>
</html>
