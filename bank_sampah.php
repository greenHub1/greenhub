<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Bank Sampah - GreenHub</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-10">

<h1 class="text-3xl font-bold mb-6 text-green-700">🏦 Daftar Bank Sampah</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<?php
$query = mysqli_query($conn, "SELECT * FROM bank_sampah");
while($data = mysqli_fetch_array($query)) {
?>
  <div class="bg-white shadow rounded-xl p-6">
    <h3 class="text-lg font-semibold"><?= $data['nama'] ?></h3>
    <p class="text-sm text-gray-600"><?= $data['alamat'] ?></p>
    <p class="text-sm text-gray-500 mt-2"><?= $data['jam_operasional'] ?></p>
    <a href="<?= $data['maps_link'] ?>" target="_blank"
       class="inline-block mt-3 bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700 transition">
       📍 Lihat Lokasi
    </a>
  </div>
<?php } ?>
</div>

</body>
</html>
