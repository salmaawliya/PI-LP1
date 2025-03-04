<?php
$host = "localhost";
$user = "root";  // Ubah jika MySQL menggunakan user lain
$pass = "Qwerty123";      // Isi jika ada password
$db   = "pi-lp1-db";  // Isi nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>