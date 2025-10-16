<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Sampah</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-lg">
  <h1 class="text-2xl font-bold text-center text-green-700 mb-4">🗑️ Kirim Laporan Sampah</h1>

  <form action="simpan_laporan.php" method="POST" enctype="multipart/form-data" class="space-y-4">
    <input type="text" name="nama" placeholder="Nama Anda" required class="w-full border rounded-lg p-2">
    <input type="text" name="telepon" placeholder="Nomor Telepon" class="w-full border rounded-lg p-2">
    <input type="text" name="lokasi" placeholder="Lokasi Kejadian" required class="w-full border rounded-lg p-2">
    <select name="jenis_sampah" required class="w-full border rounded-lg p-2">
      <option value="">-- Pilih Jenis Sampah --</option>
      <option value="Plastik">Plastik</option>
      <option value="Kertas">Kertas</option>
      <option value="Kaca">Kaca</option>
      <option value="Logam">Logam</option>
    </select>
    <textarea name="deskripsi" placeholder="Deskripsi singkat..." class="w-full border rounded-lg p-2"></textarea>
    <input type="file" name="foto" class="w-full border rounded-lg p-2">
    <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Kirim Laporan</button>
  </form>
</div>

</body>
</html>
