<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan dan percabangan pada table</title>
</head>
<style>
    .column-true {
        background-color: green;
    }
    .column-false {
        background-color: red;
    }
</style>
<body>
    <!-- Contoh Penulisan perulangan for pada html versi 1-->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($d = 1; $d <= 4; $d++) {
            echo "</tr>";
                for ($r = 1; $r <=5; $r++ ) {
                    echo "<td> $d, $r </td>";
                }
            echo "</tr>";
            }
        ?>
    </table>
    <br>
    <!-- Contoh Penulisan perulangan for pada html versi 2-->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($d = 1; $d <= 4; $d++) : ?>
        <tr>
            <?php for ($r = 1; $r <= 5; $r++) { ?>
                <td>
                <?php echo "$d, $r"; ?>
                </td>
            <?php }?>
        </tr>
        <?php endfor ?>
    </table>
    <br>
    <!-- Contoh Penulisan perulangan & percabangan pada html versi 1-->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($d = 1; $d <= 4; $d++) {
                if ($d %2 == 1) {
                    echo '<tr class="column-true">';
                }
                else {
                    echo '<tr class="column-false">';
                }
                    for ($r = 1; $r <=5; $r++ ) {
                        echo "<td> $d, $r </td>";
                    }
                    
                    echo "</tr>";
            }
        ?>
    </table>
    <br>
    <!-- Contoh Penulisan perulangan & percabangan pada html versi 2-->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($d = 1; $d <= 4; $d++) : ?>

            <?php if ($d %2 == 1) : ?>
                <tr class="column-true">
            <?php else : ?>
                <tr class="column-false">
            <?php endif ?> 

                <?php for ($r = 1; $r <= 5; $r++) { ?>
                    <td>
                    <?php echo "$d, $r"; ?>
                    </td>
                <?php }?>
                
            </tr>

        <?php endfor ?>
    </table>
</body>
</html>