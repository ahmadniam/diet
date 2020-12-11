<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");

$id = $_GET['id'];
$query = "DELETE FROM `jadwal_diet` WHERE id=$id";
$result = mysqli_query($conn, $query);

header("location:jadwal_diet.php");
?>