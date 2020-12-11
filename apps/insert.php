<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$jenis_data=$_POST["jenis_data"];
$judul=$_POST["judul"];
$gambar=$_POST["gambar"];
$isi=$_POST["isi"];

$sql = "INSERT INTO $jenis_data (id, judul, gambar, isi) VALUES ('NULL', '$judul','$gambar', '$isi')";

// echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil ditambahkan!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();



?>