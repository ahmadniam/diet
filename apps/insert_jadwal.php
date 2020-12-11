<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id_user=$_POST["id_user"];
$jenis_data=$_POST["jenis_data"];
$detail=$_POST["detail"];
$tambahan=$_POST["tambahan"];
$tanggal=$_POST["formatted_date"];
$waktu=$_POST["formatted_time"];

//echo "INSERT INTO jadwal_diet (id,id_user,jenis,detail,info_tambahan,tanggal,waktu) VALUES ('NULL', '$id_user','$jenis_data', '$detail', '$tambahan', '$tanggal', '$waktu')";
$sql = "INSERT INTO jadwal_diet (id,id_user,jenis,detail,info_tambahan,tanggal,waktu) VALUES ('NULL', '$id_user','$jenis_data', '$detail', '$tambahan', '$tanggal', '$waktu')";

 // echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil ditambahkan!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>