<?php

// variable global Scope
$x = 10;

function contohX() {
    // gunakan global untuk mengambil data dalam variabel di luar function 
    global $x;
    echo $x;
}

contohX();
echo "<br>";
echo $x;


// variabel SUPERGLOBALS ( Semua variabelnya bersifat assosiative)
// contoh variable 
// $_GET, $_POST, $_REQUESTS, $_SESSION, $_COOKIE, $_SERVER, $_ENV

// variable $_GET

$_GET["nama"] = "Vebrian Nikola S.";
var_dump($_GET);



?>