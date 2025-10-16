<?php
$host = "localhost";   // alamat server database
$user = "root";        // username default XAMPP
$pass = "";            // password default kosong
$db   = "greenhub_db"; // nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil!";
?>
