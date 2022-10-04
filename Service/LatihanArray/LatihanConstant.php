<?php

// const CHECK_STATUS = 'HADIR';

const NAMA_GORENGAN = [
// Constant dengan Nilai Array Biasa
'TAHU ISI', 'BALA-BALA', 'BAKWAN'
];

const STUDENTS = [
// Constant dengan Nilai Array Asosiasi
'name' => 'Arief',
'age' => 17,
'role' => 'Students',
'is_active' => true
];

const USER = [
// Const dengan Nilai Multi Dimensi
[
'name' => 'MagicKB',
'age' => 28,
'role' => 'Students',
'is_active' => true
],
[
'name' => 'DaprKB',
'age' => 19,
'role' => 'Guru',
'is_active' => true
],
[
'name' => 'BinatangKetek',
'age' => 20,
'role' => 'Students',
'is_active' => false
]
];

$index = 1;

// foreach (NAMA_GORENGAN as $key => $value) {
// echo $key + 1 . '. ' . $value . '<br>';
// }
// var_dump(STUDENTS);
// Check Nilai Seluruh Array
// var_dump(USER[0]);
 

foreach (USER as $key => $value) {
echo 'No' . '. ' . $index++ . '<br>';
echo 'Nama: ' . $value['name'] . '<br>';
echo 'Umur: ' . $value['age'] . '<br>';
echo 'Role: ' . $value['role'] . '<br>';
echo 'Status: ' . $value['is_active'];
echo '<hr>';
}
class User{
public $gorengan = [
'Tempe Goreng' , 'Pisang Goreng' , 'Molen' , 'Risol' , 'Godok - Godok'
];

public $anjas = [
[
'id' => 1,
'name' => 'Suryadi',
'address' => 'Penuin',
'age' => 19
],
[
'id' => 2,
'name' => 'Andrew',
'address' => 'Teratai',
'age' => 17
],
[
'id' => 3,
'name' => 'Robin Cibai',
'address' => 'Baloi Permai',
'age' => 18
]
];

public $isFound;
public $index = 1;


public function getId(){
foreach ($this->anjas as $users => $value) {
echo $value . "<br>";
}
}
// public function getGorengan($name){
// $index = 1;
// echo 'Data didalam gorengan' . '<br>';
// foreach ($this->gorengan as $item) {
// echo $this->index++ .
// }
// }
// public function getGorengan(){
// // melakukan perulangan
// $index = 1;
// foreach ($this->gorengan as $item) {
// echo $index++ . '. ' . $item . '<br>';
// }
// }
}

// Inisialisasi class objek
$user = new User();

echo $user->getId();

// echo $user->getGorengan() . '<br>';
// echo $user->getGorengan();

// Nilai Constant Menggunakan Method Define dengan 1 Nilai
define('CHECK_STATUS', 'Hadir');
// Menampilkan Nilai
var_dump(CHECK_STATUS);
