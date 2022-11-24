<?php

if (isset($_POST["submit"]) ) {
    
    if ($_POST["emailsaya"] == "vebrian@gmail.com" && $_POST["passwordsaya"] == "test") {
        header("Location: post.php");
        exit;
    } 
    else {
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan POST</title>
</head>
<body>
    <?php if (isset($error)): ?>
        <p>Error</p>
    <?php endif?>
    <form action="" method="post">
        <label for="nick">nama:</label>
        <input type="text" name="namasaya" id="nick">
        <label for="maile">email:</label>
        <input type="email" name="emailsaya" id="maile">
        <label for="pasw">pass:</label>
        <input type="password" name="passwordsaya" id="pasw">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>