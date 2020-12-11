<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");

$id=$_POST["id"];
$judul=$_POST["judul"];
$gambar=$_POST["gambar"];
$isi=$_POST["isi"];

$query = "UPDATE `data_menu` SET `judul`='$judul',`gambar`='$gambar', `isi`='$isi' WHERE `id`=$id";
$result = mysqli_query($conn, $query);

echo 'Data berhasil diupdate!';
?>