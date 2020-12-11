<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");

$id = $_GET['id'];
$query = "DELETE FROM `data_menu` WHERE id=$id";
$result = mysqli_query($conn, $query);

header("location:view_data_menu.php");
?>