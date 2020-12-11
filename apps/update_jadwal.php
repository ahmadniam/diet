<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");


$id=$_POST["id"];
$id_user=$_POST["id_user"];
$jenis_data=$_POST["jenis_data"];
$detail=$_POST["detail"];
$tambahan=$_POST["tambahan"];
$tanggal=$_POST["formatted_date"];
$waktu=$_POST["formatted_time"];

//echo "INSERT INTO jadwal_diet (id,id_user,jenis,detail,info_tambahan,tanggal,waktu) VALUES ('NULL', '$id_user','$jenis_data', '$detail', '$tambahan', '$tanggal', '$waktu')";
// $sql = "UPDATE INTO jadwal_diet (id,id_user,jenis,detail,info_tambahan,tanggal,waktu) VALUES ('NULL', '$id_user','$jenis_data', '$detail', '$tambahan', '$tanggal', '$waktu')";

$query = "UPDATE `jadwal_diet` SET `jenis`='$jenis_data',`detail`='$detail', `info_tambahan`='$tambahan',`tanggal`='$tanggal',`waktu`='$waktu'  WHERE `id`=$id";
// echo $query;
$result = mysqli_query($conn, $query);




?>