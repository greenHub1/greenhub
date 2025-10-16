<?php
include('koneksi.php'); // koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $telepon = $_POST['telepon'] ?? '';
    $lokasi = $_POST['lokasi'] ?? '';
    $jenis_sampah = $_POST['jenis_sampah'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';

    // upload foto
    $foto = "";
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir);
        $foto = $target_dir . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
    }

    // simpan ke database
    $sql = "INSERT INTO laporan_sampah (nama, telepon, lokasi, jenis_sampah, deskripsi, foto)
            VALUES ('$nama', '$telepon', '$lokasi', '$jenis_sampah', '$deskripsi', '$foto')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Laporan berhasil dikirim!'); window.location='form_laporan.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    die("Form belum dikirim!");
}
?>
