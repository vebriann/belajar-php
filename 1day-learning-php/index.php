<?php

// echo (mencetak value yang ada di echo) //
echo "penulisan echo";
echo "<br>";

// print (mencetak value yang ada di print) //
print "penulisan print";
echo "<br>";

// print_r (mencetak value yang berada di list) //
print_r("penulisan print_r");
echo "<br>";

// var dump (menampilkan informasi value seperti type data dan font-size) //
var_dump("Penulisan var_dump");
echo "<br>";

// variable pada php //

// Non intaporasi
$namasaya = "Vebrian";
echo "Hai Nama Saya Adalah $namasaya";
echo "<br>";

// Berintaporasi (maka variable tidak bisa di panggil)

$namasaya = "Vebrian";
echo 'Hai Nama Saya Adalah $namasaya';
echo "<br>";

// aritmatika pada php (tidak pakai variabel x, y)

echo 1 + 1;
echo "<br>";


// aritmatika pada php (menggunakan variabel x, y)

$x = 1;
$y = 1;
echo $x * $y;
echo "<br>";

// penggabungan string (memakai . )

echo "Vebrian" . "Developer"; // tidak ada spasi
echo "Vebrian" . " " . "Developer"; // ada spasi
echo "<br>";

// contoh beberapa assignment pada php
// =, +=, -=, *=, /=, %=, .= 

// contoh assignment +=

$variabelx = 1;
$variabelx += 5; // arti dari += adalah ketika terdapat 2 variable sama maka akan di eksekusi sesuai aritmatika yang berada di belakang = 

echo $variabelx;
echo "<br>";

// contoh beberapa perbandingan pada php ( biasa di gunakan untuk perkondisian atau menentukan boolean false / true )
// <, >, <=, >=, == 

// Example Program
var_dump(1 > 5); // maka akan bernilai false karna perkondisianya adalah apakah 1 lebih besar dari 5
echo "<br>";
var_dump(1 < 5); // maka akan bernilai false karna perkondisianya adalah apakah 1 lebih besar dari 5
echo "<br>";
var_dump(1 == "1"); // maka akan bernilai true karna perbandingan == mungkin karena string sama int tidak ngaruh ( ga tau juga si hehehee )
echo "<br>";
var_dump(1 != "1"); // maka bernilai false karna 1 tidak sama dengan 1 harusnya 1 tidak sama dengan 2 ( untuk nilai bisa di costum sendiri selama nilai tersebut tidak sama)
echo "<br>";
var_dump(1 != 2); // maka bernilai true

// identtitas ( cek identitas nilai contohnya pada type data )

// ===, !==

// Example Program
var_dump(1 === "1"); // maka akan menghasilkan boolean false karna type datanya tidak sama
echo "<br>";
var_dump("1" === "1"); // maka akan menghasilkan boolean true karna type datanya sama 


// logika 
// &&, ||, !

// Example Program
$s = 10; // nilai untuk perkondisian
var_dump($s == 10 && $x <= 20); // akan bernilai true jika 2 kondisi true
echo "<br>";
var_dump($s == 10 || $x == "10"); // akan bernilai true walau pun kondisinya tidak sama atau ada true ada juga false


?>