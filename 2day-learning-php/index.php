<?php 

// perulangan pada php
// while, do while, for, foreach ( khusus untuk foreach hanya di gunakan untuk array saja)

// perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "hello world <br>";
}

// jadi variabel $i bernilai 0 karna di situ terdapat $i = 0
// fungsi $i ( Sesuaikan Perkondisian Contoh < ) lalu tambahkan banyaknya perloopingan contoh 5 
// fungsi $i++ untuk menambahkan nilai 0 sampai ke nilai yang di inginkan

// perulangan while
$i = 0;
while ($i <= 5) { // while akan terus terulang jika nilai pada variabel $i berkondisi true 
    echo "$i <br>"; // echo akan terus tercetak jika nilai bernilai true, dan akan berhenti ketika bernilai false
$i++; // fungsi Increment menambahkan nilai awal agar terus bertambah, ingat penulisan Increment harus di dalam while dan di bawah while

}

// perulangan do while
$i = 10;
do {
    echo " $i Hellow World <br>";
$i++; // fungsi Increment menambahkan nilai awal agar terus bertambah, ingat penulisan Increment harus di dalam while dan di bawah while
}
while ( $i < 10); // pada do while jika nilai berkondisi false maka akan tetap di eksekusi setidaknya 1 kali untuk pengecekan


// percabangan php
// if else
// if else if else

$i = 5;

// contoh program percabangan if else
if ($i < 6) {
    echo "true";
}
else {
    echo "false";
}

// contoh program percabangan if else if else
if ($i > 6) {
    echo "true";
}
else if ($i == 6) 
    echo "bingo";
else {
    echo "false";
}

?>