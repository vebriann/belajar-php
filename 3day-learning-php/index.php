<?php 
// contoh function tanggal pada php
// bisa memanggil Date 
// valuenya bisa ( l yang artinya hari contohnya seperti Wednesday )
// valuenya bisa ( d sama seperti di atas cuma berbentuk angka contohnya 06)
// valuenya bisa ( m yang artinya bulan tetapi berbentuk angka contohnya 11 )
// valuenya bisa ( y yang artinya tahun contohnya 22 )

// valuenya bisa ( D sama seperti di atas cuma di panggilnya bukan angka melainkan string contohnya Wed )
// valuenya bisa ( M yang artinya bulan tetapi berbentuk string contohnya Nov )
// valuenya bisa ( y yang artinya tahun contoh 2022 )

// ada beberapa function yang akan sering di gunakan yaitu
// time()
// date()
// mktime()
// strtotime()




// perlu di ingat bahwa value l di hilangin tidak masalah

// contoh yang full angka value huruf besar
echo Date("l, D-M-Y");

// contoh yang string + angka value huruf kecil

echo "<br>";
echo Date("l, m-m-y");


// contoh function time/waktu pada php

echo "<br>";
echo time();

// menghitung hari menggunakan function time di php 

echo "<br>";
echo Date("l, D-M-Y", time()+60*60*24*2);

// angka 60 pertama merupakan detik 
// angka 60 ke dua merupakan menit
// angka 24 ke tiga merupakan jam
// angka 2 ke empat merupakan hari
// jadi perumpamaannya adalah
// 1 hari 24 jam, 1 jam 60 menit, 1 menit 60 detik
// maka di tulis dari detik ke hari untuk memanipulasi hari menggunakan php
// aritmaktika ( + ) berfungsi untuk menambah hari dan ( - ) berfungsi untuk mengurangi hari



// menghitung hari menggunakan mktime
// mktime berfungsi untuk membuat waktu sendiri secara costum
// value atau cara penulisan (jam, menit, detik, bulan, tanggal, tahun)

echo "<br>";
echo Date("l, M-D-Y",mktime(0, 0, 0, 8, 23, 2006));

// strtotime shortcut tanggal sama seperti di atas cuma beda penulisan saja

echo strtotime("30 aug 2004");
echo "<br>";
echo Date("l, D-M-Y",strtotime("30 aug 2003"))

// *tambahan 
// string

// strlen() len dari sebuah string 
// strcmp() untuk membandingkan 2 buah string
// explode() mengambil nama file 
// htmlspecialchars() menjaga website kita dari orang yang iseng, yang ingin masuk ke website kita

// utility
// var_dump()
// isset() mengcek sebuah variabel agar tidak ada duplikat
// empty() mengcek sebuah value atau nilai pada suatu variabel
// die() untuk mematikan sebuah program
// sleep() memberikan waktu tidur atau jeda pada suatu program


?>