<?php
// Mulai session
session_start();

// Koneksi ke MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_login";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
