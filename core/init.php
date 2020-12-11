<?php
session_start();

$timeout = 5; // Set timeout menit
$logout_redirect_url = "../index.php"; // Set logout URL

$timeout = $timeout * 60; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Oops !!!, Silakan Login Kembali!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();

date_default_timezone_set('Asia/Jakarta');

require_once ('../db/koneksi.php');

?>
