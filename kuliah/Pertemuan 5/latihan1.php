<?php

//Membuat array
/*
 membuat array
*/

$hari = array('Senin', 'Selasa','Rabu');
$bulan=['Januari','Februari','Maret'];


$Array1 = ['Daffa', 19, true];
$binatang = ['🐱‍👤','🐱‍🐉','🦍','🦉','🐣'];

$tahun1945 = ['💣','🏙','⚠'];

//Mencetak satu element array menggunakan index
// contohnya : echo $var[index];

echo $binatang[1];
echo "<hr>";

//mecetak seluruh array
// bisa menggunakan var_dump atau print_r

var_dump ($hari);
echo "<br>";

print_r ($bulan);
echo "<br>";

var_dump ($Array1);
echo "<br>";

print_r ($binatang);
echo "<hr>";


//manipulasi isi array

//isi element menggunakan index

$hari[3]= 'kamis'; //tpi tidak disarankan , karena harus tahu betul tempat array
//print_r ($hari);
echo "<br>";

//menambahkah element di akhir array menggunakan index kosong []----------
$hari[] = "jum'at"; //penambahan data di akhir disebut 'append'
//tapi tidak bisa ditambahkan lebih dari satu, jadi harus bin kudu satu-satu
$hari[] = 'sabtu';
//bisa menambahkan banyak, cuman bukan gini caranya
print_r ($hari);
echo "<br>";

//menambahkan element baru di akhir array menggunakan array_push() -> bisa menambahkan banyak element
// contohnya gini : array_push(var, element yang mau ditambah dipisah dengan koma (,));

array_push($bulan,'april','mei','juni','juli');
print_r ($bulan);
echo "<hr>";


// menambahkan element baru, di-awal array menggunakan array_unshift.
// tadi kan udah tuh penambahan array di akhir, nah ini di awal
// code nya : array_unshift(var,element);

array_unshift($binatang,'🐒'); //monyet akan pindah ke depan, jadi index 0 = monyet
// kalau mau nambah baru, tinggal tambah coma (,) sama seperti array_push
print_r($binatang);
echo "<hr>";

//menghapus element akhir di array-----------------------------------
//menggunakan code  array_pop(var);

array_pop($tahun1945);
print_r($tahun1945);
echo "<br>";

//menghapus element awal di array
//menggunakan code array_shift(var);

array_shift($tahun1945);
print_r($tahun1945);
?>