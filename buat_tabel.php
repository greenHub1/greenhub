<?php
include('koneksi.php');

$sql = "CREATE TABLE IF NOT EXISTS bank_sampah (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  alamat VARCHAR(255) NOT NULL,
  jam_operasional VARCHAR(50),
  kontak VARCHAR(20),
  status ENUM('Buka', 'Tutup') DEFAULT 'Buka',
  jenis_sampah VARCHAR(255),
  maps_link TEXT,
  latitude DOUBLE,
  longitude DOUBLE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Tabel bank_sampah berhasil dibuat!";
} else {
  echo "Error: " . mysqli_error($conn);
}
?>
