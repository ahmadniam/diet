<?php

$dbhost = 'localhost';
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';     // ini berlaku di xampp
$dbname = 'PPL';

// melakukan koneksi ke database
$link = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($link->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}
