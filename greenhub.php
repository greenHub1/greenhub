<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHub - Edukasi & Pengelolaan Sampah Plastik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #a7f3d0 0%, #34d399 50%, #10b981 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 0.8s ease forwards;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #10b981;
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: #10b981;
            font-weight: 600;
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #10b981, #34d399);
            border-radius: 2px;
        }
        
        .icon-bounce {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        .pulse-green {
            animation: pulseGreen 2s infinite;
        }
        
        @keyframes pulseGreen {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(16, 185, 129, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }
        
        .step-number {
            background: linear-gradient(135deg, #10b981, #34d399);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mr-3 pulse-green">
                            <span class="text-white font-bold text-xl">🌿</span>
                        </div>
                        <div>
                            <span class="text-2xl font-bold text-gray-800">GreenHub</span>
                            <p class="text-xs text-green-600 font-medium">Bijak Kelola Sampah, Selamatkan Bumi</p>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="#home" class="nav-link active px-3 py-2 text-sm font-medium">Beranda</a>
                        <a href="#edukasi" class="nav-link px-3 py-2 text-sm font-medium text-gray-700">Edukasi</a>
                        <a href="#tutorial" class="nav-link px-3 py-2 text-sm font-medium text-gray-700">Tutorial</a>
                        <a href="#laporan" class="nav-link px-3 py-2 text-sm font-medium text-gray-700">Laporan Sampah</a>
                        <a href="#bank-sampah" class="nav-link px-3 py-2 text-sm font-medium text-gray-700">Bank Sampah</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-green-500 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-green-500">Beranda</a>
                <a href="#edukasi" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-500">Edukasi</a>
                <a href="#tutorial" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-500">Tutorial</a>
                <a href="#laporan" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-500">Laporan Sampah</a>
                <a href="#bank-sampah" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-500">Bank Sampah</a>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="pt-16">
        <div class="gradient-bg text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center fade-in">
                    <div class="flex justify-center items-center mb-8 space-x-4">
                        <div class="text-6xl icon-bounce">🗑️</div>
                        <div class="text-6xl icon-bounce" style="animation-delay: 0.2s">♻️</div>
                        <div class="text-6xl icon-bounce" style="animation-delay: 0.4s">💻</div>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        <span class="text-yellow-300">Edukasi & Pengelolaan</span><br>
                        <span class="text-white">Sampah Plastik</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto">
                        Platform digital untuk meningkatkan kesadaran masyarakat dalam mengelola sampah plastik dan menjaga kelestarian lingkungan
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="scrollToSection('edukasi')" class="bg-white text-green-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
                            🎓 Pelajari Sekarang
                        </button>
                        <button onclick="scrollToSection('tutorial')" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-green-600 transition duration-300">
                            🛠️ Lihat Tutorial
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats Section -->
        <div class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                    <div class="fade-in card-hover bg-green-50 p-6 rounded-xl">
                        <div class="text-4xl mb-3">🌊</div>
                        <div class="text-3xl font-bold text-green-600 mb-2">8 Juta Ton</div>
                        <p class="text-gray-600">Plastik masuk ke laut setiap tahun</p>
                    </div>
                    <div class="fade-in card-hover bg-blue-50 p-6 rounded-xl">
                        <div class="text-4xl mb-3">⏰</div>
                        <div class="text-3xl font-bold text-blue-600 mb-2">450 Tahun</div>
                        <p class="text-gray-600">Waktu terurai botol plastik</p>
                    </div>
                    <div class="fade-in card-hover bg-yellow-50 p-6 rounded-xl">
                        <div class="text-4xl mb-3">🐟</div>
                        <div class="text-3xl font-bold text-yellow-600 mb-2">90%</div>
                        <p class="text-gray-600">Burung laut tercemar plastik</p>
                    </div>
                    <div class="fade-in card-hover bg-red-50 p-6 rounded-xl">
                        <div class="text-4xl mb-3">🌍</div>
                        <div class="text-3xl font-bold text-red-600 mb-2">1 Juta</div>
                        <p class="text-gray-600">Botol plastik dibeli per menit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edukasi Section -->
    <section id="edukasi" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">📚 Edukasi Sampah Plastik</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Pelajari fakta menarik dan tips praktis untuk mengurangi dampak sampah plastik
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-red-400 to-pink-500 flex items-center justify-center">
                        <span class="text-6xl">⚠️</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3">Bahaya Sampah Plastik</h3>
                        <p class="text-gray-600 mb-4">Dampak negatif sampah plastik terhadap lingkungan, kesehatan manusia, dan kehidupan laut.</p>
                        <button onclick="showArticle('bahaya')" class="text-green-600 font-semibold hover:text-green-800 transition duration-300">Baca Selengkapnya →</button>
                    </div>
                </div>
                
                <!-- Article 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-green-400 to-emerald-500 flex items-center justify-center">
                        <span class="text-6xl">💡</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3">Tips Mengurangi Plastik</h3>
                        <p class="text-gray-600 mb-4">Cara praktis mengurangi penggunaan plastik dalam kehidupan sehari-hari di rumah dan kantor.</p>
                        <button onclick="showArticle('tips')" class="text-green-600 font-semibold hover:text-green-800 transition duration-300">Baca Selengkapnya →</button>
                    </div>
                </div>
                
                <!-- Article 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-blue-400 to-cyan-500 flex items-center justify-center">
                        <span class="text-6xl">🔄</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3">Daur Ulang Plastik</h3>
                        <p class="text-gray-600 mb-4">Panduan lengkap cara memilah dan mendaur ulang berbagai jenis sampah plastik dengan benar.</p>
                        <button onclick="showArticle('daur-ulang')" class="text-green-600 font-semibold hover:text-green-800 transition duration-300">Baca Selengkapnya →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tutorial Section -->
    <section id="tutorial" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">🛠️ Tutorial Kreatif</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Panduan membuat produk berguna dari barang bekas untuk mengurangi sampah
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Tutorial 1 -->
                <div class="bg-gray-50 rounded-xl p-8 card-hover">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-3xl">🗑️</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Tong Sampah dari Ember Bekas</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-center">Ubah ember bekas menjadi tong sampah cantik untuk pemilahan sampah di rumah.</p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">1</span>
                            <span class="text-sm">Siapkan ember bekas dan cat</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">2</span>
                            <span class="text-sm">Bersihkan ember hingga bersih</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">3</span>
                            <span class="text-sm">Cat dengan warna sesuai jenis sampah</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">4</span>
                            <span class="text-sm">Tambahkan label dan stiker</span>
                        </div>
                    </div>
                    <button onclick="showTutorial('tong-sampah')" class="w-full mt-6 bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">
                        Lihat Tutorial Lengkap
                    </button>
                </div>
                
                <!-- Tutorial 2 -->
                <div class="bg-gray-50 rounded-xl p-8 card-hover">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-3xl">👜</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Tas Kain Pengganti Kantong Plastik</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-center">Buat tas belanja ramah lingkungan dari kain bekas untuk mengurangi kantong plastik.</p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">1</span>
                            <span class="text-sm">Pilih kain bekas yang kuat</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">2</span>
                            <span class="text-sm">Potong sesuai pola tas</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">3</span>
                            <span class="text-sm">Jahit bagian samping dan bawah</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">4</span>
                            <span class="text-sm">Pasang tali atau pegangan</span>
                        </div>
                    </div>
                    <button onclick="showTutorial('tas-kain')" class="w-full mt-6 bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Lihat Tutorial Lengkap
                    </button>
                </div>
                
                <!-- Tutorial 3 -->
                <div class="bg-gray-50 rounded-xl p-8 card-hover">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-3xl">🪴</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Pot Tanaman dari Botol Plastik</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-center">Manfaatkan botol plastik bekas untuk membuat pot tanaman yang unik dan menarik.</p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">1</span>
                            <span class="text-sm">Siapkan botol plastik besar</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">2</span>
                            <span class="text-sm">Potong bagian atas botol</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">3</span>
                            <span class="text-sm">Buat lubang drainase</span>
                        </div>
                        <div class="flex items-center">
                            <span class="step-number w-8 h-8 text-white rounded-full flex items-center justify-center text-sm mr-4 font-semibold">4</span>
                            <span class="text-sm">Hias dan isi dengan tanah</span>
                        </div>
                    </div>
                    <button onclick="showTutorial('pot-tanaman')" class="w-full mt-6 bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300">
                        Lihat Tutorial Lengkap
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Laporan Sampah Section -->
    <section id="laporan" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">📋 Laporan Sampah</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Laporkan kondisi sampah di lingkungan sekitar untuk tindak lanjut yang lebih baik
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Form Laporan -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-semibold mb-6 flex items-center">
                        <span class="mr-3">📝</span>
                        Form Pelaporan
                    </h3>
                    <form id="reportForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pelapor</label>
                                <input type="text" id="reporterName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">No. Telepon</label>
                                <input type="tel" id="reporterPhone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="08xxxxxxxxxx">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi Sampah</label>
                            <input type="text" id="wasteLocation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Contoh: Jl. Merdeka No. 123, Jakarta">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Sampah</label>
                            <select id="wasteType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">Pilih jenis sampah</option>
                                <option value="plastik">Sampah Plastik</option>
                                <option value="organik">Sampah Organik</option>
                                <option value="kertas">Sampah Kertas</option>
                                <option value="logam">Sampah Logam</option>
                                <option value="kaca">Sampah Kaca</option>
                                <option value="campuran">Sampah Campuran</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Kondisi</label>
                            <textarea id="wasteDescription" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Jelaskan kondisi sampah, volume, dan dampaknya..."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Foto (Opsional)</label>
                            <input type="file" id="wastePhoto" accept="image/*" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, maksimal 5MB</p>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white py-4 rounded-lg font-semibold hover:bg-green-700 transition duration-300">
                            📤 Kirim Laporan
                        </button>
                    </form>
                </div>
                
                <!-- Laporan Terbaru -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-semibold mb-6 flex items-center">
                        <span class="mr-3">📊</span>
                        Laporan Terbaru
                    </h3>
                    <div id="reportsList" class="space-y-6">
                        <div class="border-l-4 border-red-500 pl-4 py-3 bg-red-50 rounded-r-lg">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                                <span class="text-sm text-gray-500">2 jam lalu</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-1"><strong>Lokasi:</strong> Pasar BINCEN, Tanjung Pinang Timur</p>
                            <p class="text-sm text-gray-600 mb-1"><strong>Jenis:</strong> Sampah Plastik</p>
                            <p class="text-sm text-gray-600">Tumpukan botol plastik di sekitar pasar, mengganggu aktivitas pedagang.</p>
                            <span class="inline-block mt-2 px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Sedang Ditindaklanjuti</span>
                        </div>
                        
                        <div class="border-l-4 border-green-500 pl-4 py-3 bg-green-50 rounded-r-lg">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-semibold text-gray-800">Sari Dewi</h4>
                                <span class="text-sm text-gray-500">5 jam lalu</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-1"><strong>Lokasi:</strong> Pantai Setumu, Dompak, Kota Tanjung Pinang</p>
                            <p class="text-sm text-gray-600 mb-1"><strong>Jenis:</strong> Sampah Campuran</p>
                            <p class="text-sm text-gray-600">Sampah plastik dan organik mengapung di di daerah pantai, mencemari air.</p>
                            <span class="inline-block mt-2 px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Selesai Dibersihkan</span>
                        </div>
                        
                        <div class="border-l-4 border-blue-500 pl-4 py-3 bg-blue-50 rounded-r-lg">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-semibold text-gray-800">Ahmad Rizki</h4>
                                <span class="text-sm text-gray-500">1 hari lalu</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-1"><strong>Lokasi:</strong> Taman Batu 10, Pinang Kencana</p>
                            <p class="text-sm text-gray-600 mb-1"><strong>Jenis:</strong> Sampah Plastik</p>
                            <p class="text-sm text-gray-600">Banyak kemasan makanan berserakan di area taman setelah weekend.</p>
                            <span class="inline-block mt-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Laporan Baru</span>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-semibold text-gray-800 mb-2">📈 Statistik Laporan</h4>
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="text-gray-600">Total Laporan:</span>
                                <span class="font-semibold text-green-600 ml-2">127</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Selesai:</span>
                                <span class="font-semibold text-blue-600 ml-2">89</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Proses:</span>
                                <span class="font-semibold text-yellow-600 ml-2">23</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Baru:</span>
                                <span class="font-semibold text-red-600 ml-2">15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Bank Sampah Section -->
<section id="bank-sampah" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">🏦 Bank Sampah</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Temukan lokasi bank sampah dan titik pengumpulan daur ulang terdekat di wilayah Kijang, Bintan Timur.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Map Section -->
            <div class="bg-gray-50 rounded-xl p-8">
                <h3 class="text-2xl font-semibold mb-6 flex items-center">
                    <span class="mr-3">🗺️</span>
                    Peta Lokasi (Pasar Barek Motor - Kijang)
                </h3>

                <!-- ✅ Google Maps Interaktif -->
                <div class="rounded-lg overflow-hidden mb-6" style="height: 400px;">
                    <iframe
                        width="100%"
                        height="100%"
                        style="border:0;"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.238943429074!2d104.57188197497934!3d0.9186839992160317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98b2c4f29ef23%3A0x8f54d96415ff9c1e!2sPasar%20Barek%20Motor%2C%20Kijang%2C%20Bintan%20Timur%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1728786500000!5m2!1sid!2sid">
                    </iframe>
                </div>

                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-green-500 rounded-full mr-2"></div>
                        <span>Bank Sampah Aktif</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-blue-500 rounded-full mr-2"></div>
                        <span>Titik Pengumpulan</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-yellow-500 rounded-full mr-2"></div>
                        <span>Pusat Daur Ulang</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-purple-500 rounded-full mr-2"></div>
                        <span>Drop Box</span>
                    </div>
                </div>
            </div>

            <!-- Daftar Bank Sampah -->
            <div class="space-y-6">
                <h3 class="text-2xl font-semibold flex items-center">
                    <span class="mr-3">📍</span>
                    Daftar Bank Sampah Terdekat
                </h3>

                <!-- Bank Sampah 1 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Bank Sampah Unit Penyu Lekang</h4>
                            <p class="text-sm text-gray-600">Jl. Tokojo RT.06 RW.013, Kijang Kota, Bintan Timur</p>
                        </div>
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">Buka</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                        <div>
                            <span class="text-gray-500">Jam Operasional:</span>
                            <p class="font-medium">08:00 - 16:00</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Kontak:</span>
                            <p class="font-medium">0812-5678-9012</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Plastik</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Kertas</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Logam</span>
                    </div>
                    <a href="https://www.google.com/maps/place/Jl.+Tokojo,+Kijang+Kota,+Bintan+Timur" target="_blank"
                       class="w-full block text-center bg-green-600 text-white py-2 rounded-lg font-medium hover:bg-green-700 transition duration-300">
                        📍 Lihat Lokasi
                    </a>
                </div>

                <!-- Bank Sampah 2 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Bank Sampah Gunung Kijang</h4>
                            <p class="text-sm text-gray-600">Kawal, Gunung Kijang, Bintan</p>
                        </div>
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">Buka</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                        <div>
                            <span class="text-gray-500">Jam Operasional:</span>
                            <p class="font-medium">08:00 - 15:00</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Kontak:</span>
                            <p class="font-medium">0813-9999-3456</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Plastik</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Kertas</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Kaca</span>
                    </div>
                    <a href="https://www.google.com/maps/search/Bank+Sampah+Gunung+Kijang,+Bintan" target="_blank"
                       class="w-full block text-center bg-green-600 text-white py-2 rounded-lg font-medium hover:bg-green-700 transition duration-300">
                        📍 Lihat Lokasi
                    </a>
                </div>

                <!-- Bank Sampah 3 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Bank Sampah Kuantan Bersih</h4>
                            <p class="text-sm text-gray-600">Tanjungpinang, Kepulauan Riau</p>
                        </div>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Tutup</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                        <div>
                            <span class="text-gray-500">Jam Operasional:</span>
                            <p class="font-medium">09:00 - 17:00</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Kontak:</span>
                            <p class="font-medium">0814-2222-7890</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Plastik</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Kertas</span>
                        <span class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded">Elektronik</span>
                    </div>
                    <a href="https://www.google.com/maps/search/Bank+Sampah+Kuantan+Bersih,+Tanjungpinang" target="_blank"
                       class="w-full block text-center bg-green-600 text-white py-2 rounded-lg font-medium hover:bg-green-700 transition duration-300">
                        📍 Lihat Lokasi
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
                    
                    <!-- Jadwal Kegiatan -->
                    <div class="bg-blue-50 rounded-xl p-6 mt-8">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="mr-2">📅</span>
                            Jadwal Kegiatan Mendatang
                        </h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Aksi Bersih Pantai</p>
                                    <p class="text-sm text-gray-600">Pantai Setumu, Dompak, Kota Tanjung Pinang</p>
                                </div>
                                <span class="text-sm font-medium text-blue-600">15 Okt 2025</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Workshop Daur Ulang</p>
                                    <p class="text-sm text-gray-600">Community Center Bank Sampah</p>
                                </div>
                                <span class="text-sm font-medium text-blue-600">22 Okt 2025</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Kampanye Zero Waste</p>
                                    <p class="text-sm text-gray-600">TanjungPinang City Centre</p>
                                </div>
                                <span class="text-sm font-medium text-blue-600">29 Okt 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gradient-to-r from-green-500 to-emerald-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">📧 Dapatkan Update Terbaru</h2>
            <p class="text-xl text-green-100 mb-8">
                Berlangganan newsletter untuk mendapat tips, berita, dan kegiatan lingkungan terbaru
            </p>
            <form id="newsletterForm" class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" id="newsletterEmail" placeholder="Masukkan email Anda" class="flex-1 px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-white focus:outline-none">
                <button type="submit" class="bg-white text-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    Berlangganan
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mr-3">
                            <span class="text-white font-bold text-xl">🌿</span>
                        </div>
                        <div>
                            <span class="text-2xl font-bold">GreenHub</span>
                            <p class="text-sm text-green-400">Bijak Kelola Sampah, Selamatkan Bumi</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Platform digital untuk edukasi dan pengelolaan sampah plastik. Bersama-sama kita wujudkan lingkungan yang lebih bersih dan sehat untuk generasi mendatang.
                    </p>
                    <div class="flex space-x-4">
    <!-- Instagram -->
    <a href="https://www.instagram.com/namakamu" target="_blank"
       class="w-10 h-10 bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 rounded-full flex items-center justify-center text-white hover:opacity-90 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
            <path d="M7.75 2C4.67893 2 2 4.67893 2 7.75V16.25C2 19.3211 4.67893 22 7.75 22H16.25C19.3211 22 22 19.3211 22 16.25V7.75C22 4.67893 19.3211 2 16.25 2H7.75ZM12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7ZM18.5 6.25C18.5 5.55964 17.9404 5 17.25 5C16.5596 5 16 5.55964 16 6.25C16 6.94036 16.5596 7.5 17.25 7.5C17.9404 7.5 18.5 6.94036 18.5 6.25Z"/>
        </svg>
    </a>

    <!-- YouTube -->
    <a href="https://www.youtube.com/@namakamu" target="_blank"
       class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M21.8 8.001a2.75 2.75 0 0 0-1.937-1.937C18.077 5.75 12 5.75 12 5.75s-6.077 0-7.863.314A2.75 2.75 0 0 0 2.2 8.001C1.885 9.787 1.885 12 1.885 12s0 2.213.314 3.999a2.75 2.75 0 0 0 1.937 1.937C5.923 18.25 12 18.25 12 18.25s6.077 0 7.863-.314a2.75 2.75 0 0 0 1.937-1.937C22.115 14.213 22.115 12 22.115 12s0-2.213-.314-3.999ZM9.75 14.75v-5.5l4.5 2.75-4.5 2.75Z"/>
        </svg>
    </a>

    <!-- X (Twitter) -->
    <a href="https://x.com/namakamu" target="_blank"
       class="w-10 h-10 bg-black rounded-full flex items-center justify-center text-white hover:bg-gray-800 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
            <path d="M18.244 2H21l-6.33 7.23L22 22h-5.657l-4.409-6.254L6.016 22H3.259l6.63-7.574L2 2h5.826l4.007 5.714L18.244 2zm-2.013 18h1.431L8.204 4h-1.5l9.527 16z"/>
        </svg>
    </a>
</div>

                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Menu Utama</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-green-400 transition duration-300">Beranda</a></li>
                        <li><a href="#edukasi" class="text-gray-300 hover:text-green-400 transition duration-300">Edukasi</a></li>
                        <li><a href="#tutorial" class="text-gray-300 hover:text-green-400 transition duration-300">Tutorial</a></li>
                        <li><a href="#laporan" class="text-gray-300 hover:text-green-400 transition duration-300">Laporan Sampah</a></li>
                        <li><a href="#bank-sampah" class="text-gray-300 hover:text-green-400 transition duration-300">Bank Sampah</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center">
                            <span class="mr-2">📧</span>
                            info@greenhub.id
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">📱</span>
                            +62 812-3457-1111
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">📍</span>
                            Kijang, Bintan Timur
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">🕒</span>
                            24/7 Online Support
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 GreenHub. Semua hak dilindungi. Dibuat dengan ❤️ untuk lingkungan yang lebih baik.</p>
            </div>
        </div>
    </footer>

    <!-- Modal for Articles -->
    <div id="articleModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-full overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 id="modalTitle" class="text-2xl font-bold"></h2>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div id="modalContent" class="prose max-w-none"></div>
            </div>
        </div>
    </div>

    <!-- Modal for Tutorials -->
    <div id="tutorialModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-full overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 id="tutorialModalTitle" class="text-2xl font-bold"></h2>
                    <button onclick="closeTutorialModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div id="tutorialModalContent" class="prose max-w-none"></div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Update active navigation link
        window.addEventListener('scroll', function() {
            const sections = ['home', 'edukasi', 'tutorial', 'laporan', 'bank-sampah'];
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const element = document.getElementById(section);
                const rect = element.getBoundingClientRect();
                if (rect.top <= 100 && rect.bottom >= 100) {
                    current = section;
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Article content
        const articles = {
            'bahaya': {
                title: '⚠️ Bahaya Sampah Plastik',
                content: `
                    <h3>Dampak Terhadap Lingkungan</h3>
                    <p>Sampah plastik merupakan ancaman serius bagi ekosistem bumi. Setiap tahun, jutaan ton plastik berakhir di lautan dan mencemari lingkungan.</p>
                    
                    <h3>🌊 Pencemaran Laut</h3>
                    <ul>
                        <li>8 juta ton plastik masuk ke laut setiap tahunnya</li>
                        <li>Membentuk "pulau sampah" raksasa di tengah lautan</li>
                        <li>Mengancam kehidupan 700 spesies laut</li>
                        <li>Mikroplastik masuk ke rantai makanan</li>
                    </ul>
                    
                    <h3>🏞️ Kerusakan Ekosistem</h3>
                    <ul>
                        <li>Pencemaran tanah dan air tanah</li>
                        <li>Gangguan pada habitat satwa liar</li>
                        <li>Pelepasan gas beracun saat dibakar</li>
                        <li>Penyumbatan saluran air dan banjir</li>
                    </ul>
                    
                    <h3>👥 Dampak Kesehatan Manusia</h3>
                    <ul>
                        <li>Mikroplastik dalam makanan dan minuman</li>
                        <li>Gangguan sistem endokrin</li>
                        <li>Potensi kanker dari bahan kimia plastik</li>
                        <li>Masalah pernapasan dari pembakaran plastik</li>
                    </ul>
                    
                    <h3>💡 Fakta Mengejutkan</h3>
                    <p><strong>Tahukah Anda?</strong> Botol plastik membutuhkan 450 tahun untuk terurai sepenuhnya, sedangkan kantong plastik membutuhkan 10-20 tahun. Dalam waktu tersebut, satu botol plastik dapat mencemari lingkungan selama puluhan generasi!</p>
                `
            },
            'tips': {
                title: '💡 Tips Mengurangi Plastik',
                content: `
                    <h3>Langkah Praktis di Rumah</h3>
                    <p>Mengurangi penggunaan plastik dimulai dari kebiasaan kecil di rumah yang dapat memberikan dampak besar bagi lingkungan.</p>
                    
                    <h3>🏠 Di Rumah</h3>
                    <ul>
                        <li><strong>Gunakan botol minum dan tumbler:</strong> Hindari membeli air kemasan</li>
                        <li><strong>Tas belanja kain:</strong> Bawa tas sendiri saat berbelanja</li>
                        <li><strong>Wadah makanan kaca:</strong> Ganti wadah plastik dengan kaca atau stainless steel</li>
                        <li><strong>Sedotan bambu/stainless:</strong> Hindari sedotan plastik sekali pakai</li>
                        <li><strong>Sabun batang:</strong> Pilih sabun batang daripada sabun cair dalam kemasan plastik</li>
                    </ul>
                    
                    <h3>🛒 Saat Berbelanja</h3>
                    <ul>
                        <li>Pilih produk dengan kemasan minimal</li>
                        <li>Beli dalam jumlah besar untuk mengurangi kemasan</li>
                        <li>Pilih produk dengan kemasan yang dapat didaur ulang</li>
                        <li>Hindari produk dengan kemasan berlapis-lapis</li>
                        <li>Bawa wadah sendiri untuk membeli makanan</li>
                    </ul>
                    
                    <h3>🏢 Di Kantor</h3>
                    <ul>
                        <li>Gunakan alat tulis yang dapat diisi ulang</li>
                        <li>Bawa bekal dalam wadah kaca</li>
                        <li>Gunakan printer bolak-balik untuk menghemat kertas</li>
                        <li>Pilih dispenser air daripada galon plastik</li>
                    </ul>
                    
                    <h3>🎯 Target Mingguan</h3>
                    <p><strong>Minggu 1:</strong> Mulai dengan botol minum sendiri<br>
                    <strong>Minggu 2:</strong> Tambahkan tas belanja kain<br>
                    <strong>Minggu 3:</strong> Ganti sedotan dengan yang ramah lingkungan<br>
                    <strong>Minggu 4:</strong> Evaluasi dan tambah kebiasaan baru</p>
                `
            },
            'daur-ulang': {
                title: '🔄 Daur Ulang Plastik',
                content: `
                    <h3>Panduan Lengkap Daur Ulang</h3>
                    <p>Daur ulang yang benar dapat mengurangi sampah plastik hingga 80% dan menghemat energi hingga 70% dibanding produksi plastik baru.</p>
                    
                    <h3>🔢 Kode Daur Ulang Plastik</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                        <div class="border p-4 rounded-lg">
                            <h4><strong>Kode 1 (PET):</strong></h4>
                            <p>Botol minuman, wadah makanan<br>
                            <span class="text-green-600">✅ Mudah didaur ulang</span></p>
                        </div>
                        <div class="border p-4 rounded-lg">
                            <h4><strong>Kode 2 (HDPE):</strong></h4>
                            <p>Botol susu, deterjen, shampo<br>
                            <span class="text-green-600">✅ Mudah didaur ulang</span></p>
                        </div>
                        <div class="border p-4 rounded-lg">
                            <h4><strong>Kode 3 (PVC):</strong></h4>
                            <p>Pipa, mainan, kemasan<br>
                            <span class="text-red-600">❌ Sulit didaur ulang</span></p>
                        </div>
                        <div class="border p-4 rounded-lg">
                            <h4><strong>Kode 4 (LDPE):</strong></h4>
                            <p>Kantong plastik, pembungkus<br>
                            <span class="text-yellow-600">⚠️ Terbatas</span></p>
                        </div>
                    </div>
                    
                    <h3>📋 Langkah-langkah Daur Ulang</h3>
                    <ol>
                        <li><strong>Identifikasi:</strong> Periksa kode daur ulang di bagian bawah kemasan</li>
                        <li><strong>Bersihkan:</strong> Cuci bersih dari sisa makanan atau minuman</li>
                        <li><strong>Pisahkan:</strong> Kelompokkan berdasarkan jenis plastik</li>
                        <li><strong>Kumpulkan:</strong> Simpan dalam wadah terpisah</li>
                        <li><strong>Serahkan:</strong> Bawa ke bank sampah atau pengepul</li>
                    </ol>
                    
                    <h3>💰 Nilai Ekonomis</h3>
                    <ul>
                        <li><strong>Botol PET:</strong> Rp 3.000-4.000/kg</li>
                        <li><strong>Plastik HDPE:</strong> Rp 2.500-3.500/kg</li>
                        <li><strong>Gelas plastik:</strong> Rp 1.500-2.000/kg</li>
                        <li><strong>Kantong plastik:</strong> Rp 1.000-1.500/kg</li>
                    </ul>
                    
                    <h3>🌟 Tips Sukses</h3>
                    <p>Mulai dengan mengumpulkan plastik dari rumah sendiri. Libatkan keluarga dan tetangga untuk hasil yang lebih maksimal. Ingat, konsistensi adalah kunci keberhasilan program daur ulang!</p>
                `
            }
        };

        // Tutorial content
        const tutorials = {
            'tong-sampah': {
                title: '🗑️ Tutorial Tong Sampah dari Ember Bekas',
                content: `
                    <h3>Bahan yang Dibutuhkan</h3>
                    <ul>
                        <li>Ember bekas (ukuran sedang/besar)</li>
                        <li>Cat akrilik (hijau, kuning, merah, biru)</li>
                        <li>Kuas cat</li>
                        <li>Stiker label atau kertas</li>
                        <li>Spidol permanen</li>
                        <li>Amplas halus</li>
                        <li>Primer (opsional)</li>
                    </ul>
                    
                    <h3>Langkah-langkah Pembuatan</h3>
                    
                    <h4>1. Persiapan Ember</h4>
                    <ul>
                        <li>Bersihkan ember dari kotoran dan sisa-sisa</li>
                        <li>Amplas permukaan ember agar cat menempel dengan baik</li>
                        <li>Bilas dengan air bersih dan keringkan</li>
                    </ul>
                    
                    <h4>2. Pengecatan</h4>
                    <ul>
                        <li><strong>Hijau:</strong> Untuk sampah organik (sisa makanan, daun)</li>
                        <li><strong>Kuning:</strong> Untuk sampah anorganik (plastik, kaleng)</li>
                        <li><strong>Merah:</strong> Untuk sampah B3 (baterai, lampu)</li>
                        <li><strong>Biru:</strong> Untuk kertas dan kardus</li>
                    </ul>
                    
                    <h4>3. Penambahan Label</h4>
                    <ul>
                        <li>Buat label dengan tulisan jenis sampah</li>
                        <li>Tambahkan gambar/ikon untuk memudahkan identifikasi</li>
                        <li>Tempel label di bagian depan ember</li>
                    </ul>
                    
                    <h4>4. Finishing</h4>
                    <ul>
                        <li>Biarkan cat mengering sempurna (24 jam)</li>
                        <li>Tambahkan tutup jika diperlukan</li>
                        <li>Letakkan di tempat yang mudah diakses</li>
                    </ul>
                    
                    <h3>💡 Tips Tambahan</h3>
                    <ul>
                        <li>Gunakan cat yang tahan cuaca jika diletakkan di luar</li>
                        <li>Buat lubang kecil di tutup untuk ventilasi</li>
                        <li>Tambahkan roda kecil di bawah untuk memudahkan pemindahan</li>
                        <li>Buat beberapa ukuran sesuai kebutuhan ruangan</li>
                    </ul>
                    
                    <h3>🌟 Manfaat</h3>
                    <p>Dengan membuat tong sampah sendiri, Anda tidak hanya menghemat biaya tetapi juga membantu mengurangi sampah ember bekas. Satu keluarga dapat menghemat hingga Rp 200.000 untuk pembelian tong sampah baru!</p>
                `
            },
            'tas-kain': {
                title: '👜 Tutorial Tas Kain Pengganti Kantong Plastik',
                content: `
                    <h3>Bahan yang Dibutuhkan</h3>
                    <ul>
                        <li>Kain kanvas atau katun tebal (50cm x 80cm)</li>
                        <li>Benang jahit yang kuat</li>
                        <li>Jarum jahit atau mesin jahit</li>
                        <li>Gunting kain</li>
                        <li>Penggaris dan pensil</li>
                        <li>Jarum pentul</li>
                        <li>Setrika (opsional)</li>
                    </ul>
                    
                    <h3>Pola dan Ukuran</h3>
                    <ul>
                        <li><strong>Badan tas:</strong> 40cm x 35cm (2 potong)</li>
                        <li><strong>Tali pegangan:</strong> 50cm x 8cm (2 potong)</li>
                        <li><strong>Kelim atas:</strong> 3cm dari tepi atas</li>
                    </ul>
                    
                    <h3>Langkah-langkah Pembuatan</h3>
                    
                    <h4>1. Persiapan Kain</h4>
                    <ul>
                        <li>Cuci dan setrika kain untuk menghilangkan susut</li>
                        <li>Gambar pola pada kain sesuai ukuran</li>
                        <li>Potong kain dengan hati-hati</li>
                        <li>Beri tanda untuk posisi tali pegangan</li>
                    </ul>
                    
                    <h4>2. Membuat Tali Pegangan</h4>
                    <ul>
                        <li>Lipat kain tali memanjang menjadi 3 bagian</li>
                        <li>Jahit sepanjang tepi dengan jahitan lurus</li>
                        <li>Balik tali agar jahitan berada di dalam</li>
                        <li>Setrika untuk hasil yang rapi</li>
                    </ul>
                    
                    <h4>3. Menyatukan Badan Tas</h4>
                    <ul>
                        <li>Letakkan kedua potongan badan tas berhadapan</li>
                        <li>Jahit bagian samping dan bawah dengan kelim 1cm</li>
                        <li>Potong sudut bawah untuk membentuk dasar tas</li>
                        <li>Balik tas agar sisi yang baik berada di luar</li>
                    </ul>
                    
                    <h4>4. Memasang Tali Pegangan</h4>
                    <ul>
                        <li>Tentukan posisi tali (biasanya 8cm dari samping)</li>
                        <li>Jepit tali pada posisi yang sudah ditentukan</li>
                        <li>Jahit tali dengan jahitan kotak untuk kekuatan extra</li>
                        <li>Pastikan kedua tali sama panjang</li>
                    </ul>
                    
                    <h4>5. Finishing</h4>
                    <ul>
                        <li>Buat kelim di bagian atas tas (3cm)</li>
                        <li>Jahit kelim dengan jahitan lurus</li>
                        <li>Rapikan benang-benang yang tersisa</li>
                        <li>Setrika tas untuk hasil yang profesional</li>
                    </ul>
                    
                    <h3>🎨 Variasi Kreatif</h3>
                    <ul>
                        <li>Tambahkan saku kecil di bagian depan</li>
                        <li>Gunakan kain bermotif untuk tampilan menarik</li>
                        <li>Buat tas dengan ukuran berbeda untuk kebutuhan berbeda</li>
                        <li>Tambahkan kancing atau resleting untuk penutup</li>
                    </ul>
                    
                    <h3>💰 Analisis Biaya</h3>
                    <p><strong>Biaya pembuatan:</strong> Rp 15.000 - 25.000 per tas<br>
                    <strong>Penghematan:</strong> Rp 500 per kantong plastik x 100 kali pakai = Rp 50.000<br>
                    <strong>Keuntungan bersih:</strong> Rp 25.000 - 35.000 per tas</p>
                    
                    <h3>🌍 Dampak Lingkungan</h3>
                    <p>Satu tas kain dapat menggantikan hingga 1.000 kantong plastik selama masa pakainya. Ini berarti mengurangi 2-3 kg sampah plastik per tahun per tas!</p>
                `
            },
            'pot-tanaman': {
                title: '🪴 Tutorial Pot Tanaman dari Botol Plastik',
                content: `
                    <h3>Bahan yang Dibutuhkan</h3>
                    <ul>
                        <li>Botol plastik bekas (1.5L atau 2L)</li>
                        <li>Cutter atau gunting</li>
                        <li>Paku atau jarum tebal</li>
                        <li>Cat akrilik atau cat semprot</li>
                        <li>Kuas (jika menggunakan cat akrilik)</li>
                        <li>Amplas halus</li>
                        <li>Tanah dan pupuk kompos</li>
                        <li>Kerikil kecil untuk drainase</li>
                    </ul>
                    
                    <h3>Jenis Botol yang Cocok</h3>
                    <ul>
                        <li><strong>Botol 600ml:</strong> Untuk tanaman kecil (sukulen, kaktus)</li>
                        <li><strong>Botol 1.5L:</strong> Untuk tanaman sedang (cabai, tomat cherry)</li>
                        <li><strong>Botol 2L:</strong> Untuk tanaman besar (sayuran hijau)</li>
                        <li><strong>Galon bekas:</strong> Untuk tanaman merambat</li>
                    </ul>
                    
                    <h3>Langkah-langkah Pembuatan</h3>
                    
                    <h4>1. Persiapan Botol</h4>
                    <ul>
                        <li>Bersihkan botol dari label dan lem</li>
                        <li>Cuci bersih dengan sabun dan keringkan</li>
                        <li>Amplas permukaan botol agar cat menempel baik</li>
                        <li>Tentukan tinggi pemotongan (biasanya 2/3 dari tinggi botol)</li>
                    </ul>
                    
                    <h4>2. Pemotongan dan Lubang Drainase</h4>
                    <ul>
                        <li>Potong botol sesuai ukuran yang diinginkan</li>
                        <li>Haluskan tepi potongan dengan amplas</li>
                        <li>Buat 5-7 lubang kecil di bagian bawah untuk drainase</li>
                        <li>Pastikan lubang tidak terlalu besar agar tanah tidak keluar</li>
                    </ul>
                    
                    <h4>3. Dekorasi dan Pengecatan</h4>
                    <ul>
                        <li>Aplikasikan primer jika menggunakan cat akrilik</li>
                        <li>Cat dengan warna sesuai selera (hijau, coklat, atau warna natural)</li>
                        <li>Biarkan kering sempurna (4-6 jam)</li>
                        <li>Tambahkan motif atau gambar jika diinginkan</li>
                    </ul>
                    
                    <h4>4. Sistem Drainase</h4>
                    <ul>
                        <li>Masukkan kerikil kecil setebal 2-3cm di bagian bawah</li>
                        <li>Tambahkan potongan kain atau kertas koran di atas kerikil</li>
                        <li>Ini mencegah tanah menyumbat lubang drainase</li>
                    </ul>
                    
                    <h4>5. Penanaman</h4>
                    <ul>
                        <li>Campurkan tanah dengan kompos (perbandingan 2:1)</li>
                        <li>Isi pot hingga 3/4 bagian</li>
                        <li>Tanam bibit atau benih sesuai kedalaman yang direkomendasikan</li>
                        <li>Siram dengan air secukupnya</li>
                    </ul>
                    
                    <h3>🌱 Tanaman yang Cocok</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                        <div class="border p-4 rounded-lg">
                            <h4><strong>Tanaman Hias:</strong></h4>
                            <ul>
                                <li>Sukulen dan kaktus mini</li>
                                <li>Tanaman spider (laba-laba)</li>
                                <li>Pothos</li>
                                <li>Lidah buaya kecil</li>
                            </ul>
                        </div>
                        <div class="border p-4 rounded-lg">
                            <h4><strong>Tanaman Konsumsi:</strong></h4>
                            <ul>
                                <li>Cabai rawit</li>
                                <li>Tomat cherry</li>
                                <li>Selada dan bayam</li>
                                <li>Kemangi dan basil</li>
                            </ul>
                        </div>
                    </div>
                    
                    <h3>🔧 Variasi Kreatif</h3>
                    <ul>
                        <li><strong>Pot Gantung:</strong> Buat lubang di samping untuk tali gantung</li>
                        <li><strong>Sistem Hidroponik:</strong> Gunakan botol bagian atas sebagai reservoir</li>
                        <li><strong>Vertical Garden:</strong> Susun beberapa pot untuk taman vertikal</li>
                        <li><strong>Self-Watering:</strong> Buat sistem penyiraman otomatis dengan sumbu</li>
                    </ul>
                    
                    <h3>💡 Tips Perawatan</h3>
                    <ul>
                        <li>Letakkan di tempat yang mendapat sinar matahari cukup</li>
                        <li>Siram secara teratur tapi jangan berlebihan</li>
                        <li>Beri pupuk organik setiap 2 minggu</li>
                        <li>Ganti tanah setiap 6 bulan untuk hasil optimal</li>
                    </ul>
                    
                    <h3>📊 Manfaat</h3>
                    <p><strong>Lingkungan:</strong> Mengurangi 1 botol plastik dari sampah<br>
                    <strong>Ekonomi:</strong> Menghemat Rp 15.000-30.000 untuk pot baru<br>
                    <strong>Kesehatan:</strong> Menyediakan sayuran segar di rumah<br>
                    <strong>Edukasi:</strong> Mengajarkan anak tentang daur ulang dan berkebun</p>
                `
            }
        };

        // Show article modal
        function showArticle(type) {
            const modal = document.getElementById('articleModal');
            const title = document.getElementById('modalTitle');
            const content = document.getElementById('modalContent');
            
            title.textContent = articles[type].title;
            content.innerHTML = articles[type].content;
            modal.classList.remove('hidden');
        }

        // Show tutorial modal
        function showTutorial(type) {
            const modal = document.getElementById('tutorialModal');
            const title = document.getElementById('tutorialModalTitle');
            const content = document.getElementById('tutorialModalContent');
            
            title.textContent = tutorials[type].title;
            content.innerHTML = tutorials[type].content;
            modal.classList.remove('hidden');
        }

        // Close modals
        function closeModal() {
            document.getElementById('articleModal').classList.add('hidden');
        }

        function closeTutorialModal() {
            document.getElementById('tutorialModal').classList.add('hidden');
        }

        // Handle report form submission
        document.getElementById('reportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('reporterName').value;
            const phone = document.getElementById('reporterPhone').value;
            const location = document.getElementById('wasteLocation').value;
            const type = document.getElementById('wasteType').value;
            const description = document.getElementById('wasteDescription').value;
            
            if (!name || !phone || !location || !type || !description) {
                alert('Mohon lengkapi semua field yang wajib diisi!');
                return;
            }
            
            // Add to reports list
            const reportsList = document.getElementById('reportsList');
            const colors = ['red', 'blue', 'green', 'yellow', 'purple'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            
            const typeNames = {
                plastik: 'Sampah Plastik',
                organik: 'Sampah Organik',
                kertas: 'Sampah Kertas',
                logam: 'Sampah Logam',
                kaca: 'Sampah Kaca',
                campuran: 'Sampah Campuran'
            };
            
            const newReport = document.createElement('div');
            newReport.className = `border-l-4 border-${randomColor}-500 pl-4 py-3 bg-${randomColor}-50 rounded-r-lg`;
            newReport.innerHTML = `
                <div class="flex justify-between items-start mb-2">
                    <h4 class="font-semibold text-gray-800">${name}</h4>
                    <span class="text-sm text-gray-500">Baru saja</span>
                </div>
                <p class="text-sm text-gray-600 mb-1"><strong>Lokasi:</strong> ${location}</p>
                <p class="text-sm text-gray-600 mb-1"><strong>Jenis:</strong> ${typeNames[type]}</p>
                <p class="text-sm text-gray-600">${description}</p>
                <span class="inline-block mt-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Laporan Baru</span>
            `;
            
            reportsList.insertBefore(newReport, reportsList.firstChild);
            
            // Reset form
            this.reset();
            
            alert('Terima kasih! Laporan Anda telah berhasil dikirim dan akan segera ditindaklanjuti oleh tim kami.');
        });

        // Handle newsletter form submission
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('newsletterEmail').value;
            
            if (!email) {
                alert('Mohon masukkan alamat email Anda!');
                return;
            }
            
            // Reset form
            this.reset();
            
            alert('Terima kasih! Anda telah berhasil berlangganan newsletter GreenHub. Kami akan mengirimkan update terbaru ke email Anda.');
        });

        // Add click handlers for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                scrollToSection(targetId);
                
                // Close mobile menu if open
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        // Observe all elements that should animate
        document.querySelectorAll('.card-hover, .fade-in').forEach(el => {
            observer.observe(el);
        });

        // Close modals when clicking outside
        window.addEventListener('click', function(e) {
            const articleModal = document.getElementById('articleModal');
            const tutorialModal = document.getElementById('tutorialModal');
            
            if (e.target === articleModal) {
                closeModal();
            }
            if (e.target === tutorialModal) {
                closeTutorialModal();
            }
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'98de69f2267f6bf4',t:'MTc2MDM1NDA3MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
