<?php

if (!empty($_GET['u'])){

if($_GET['u'] == "home"){
?>

<?php include_once('home.php'); ?>

<?php
} else if ($_GET['u'] == "MenuDiet"){
?>

<?php include_once('view_menu_diet.php'); ?>

<?php
} else if ($_GET['u'] == "TipsDiet"){
?>

<?php include_once('view_tips_diet.php'); ?>

<?php
} else if ($_GET['u'] == "KalkulatorDiet"){
?>

<?php include_once('kalkulator.php'); ?>

<?php
} else if ($_GET['u'] == "JadwalDiet"){
?>

<?php include_once('jadwal_diet.php'); ?>

<?php
} else if ($_GET['u'] == "ProgressDiet"){
?>

<?php include_once('progress_diet.php'); ?>

<?php
} else if ($_GET['u'] == "Reward"){
?>

<?php include_once('reward.php'); ?>


<?php
}
}
?>
