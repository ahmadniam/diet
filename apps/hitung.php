<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$tanggal=$_POST["tanggal"];
$id_user=$_POST["id_user"];
$radioValue=$_POST["radioValue"];
$berat=$_POST["berat"];
$tinggi=$_POST["tinggi"];
$usia=$_POST["usia"];
$aktivitas=$_POST["aktivitas"];

// echo $radioValue;
// echo $berat;
// echo $tinggi;
// echo $usia;
// echo $aktivitas;
if($aktivitas=="1"){
	$akt=1.2;
}
elseif ($aktivitas=="2") {
	$akt=1.375;
}
elseif ($aktivitas=="3") {
	$akt=1.55;
}
elseif ($aktivitas=="4") {
	$akt=1.725;
}
elseif ($aktivitas=="5") {
	$akt=1.9;
}

if($radioValue=="pria"){
	$jenis_kelamin=66.47;
	$kalori=($jenis_kelamin+(13.75*$berat)+(5.003*$tinggi)-(6.755*$usia))*$akt;
}
else{
	$jenis_kelamin=655.1;
	$kalori=($jenis_kelamin+(9.563* $berat)+(1.85*$tinggi)-(4.676*$usia))*$akt;
}

$sql = "INSERT INTO progres_diet (id,id_user,tanggal,berat,kalori) VALUES ('NULL', '$id_user','$tanggal','$berat', '$kalori')";
//echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil ditambahkan!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<div>$kalori adalah total kalori yang anda butuhkan</div>";
?>