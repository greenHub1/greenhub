<?php
include('koneksi.php');

$nama = "Bank Sampah Hijau Lestari";
$alamat = "Jl. Tokojo RT.06, Kijang Kota, Bintan Timur";
$jam_operasional = "08:00 - 16:00";
$kontak = "0812-5678-9012";
$status = "Buka";
$jenis_sampah = "Plastik,Kertas,Logam,Kaca";
$maps_link = "https://maps.app.goo.gl/3GWqqcUJWRhyLqCW9";
$latitude = 0.91868;
$longitude = 104.57188;

$sql = "INSERT INTO bank_sampah (nama, alamat, jam_operasional, kontak, status, jenis_sampah, maps_link, latitude, longitude)
        VALUES ('$nama', '$alamat', '$jam_operasional', '$kontak', '$status', '$jenis_sampah', '$maps_link', '$latitude', '$longitude')";

if (mysqli_query($conn, $sql)) {
  echo "Data bank sampah berhasil ditambahkan!";
} else {
  echo "Error: " . mysqli_error($conn);
}
?>
