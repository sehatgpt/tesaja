<?php
// index.php - Halaman utama
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>rajametod.com - Konten PLR Premium Berkualitas</title>
    
    <!-- Deskripsi SEO -->
    <meta name="description" content="Akses tak terbatas ke 10.000+ produk PLR berkualitas tinggi. Metode cuan tak biasa, langsung praktik, langsung panen. Dapatkan tools, panduan, dan hak rebranding penuh hanya di rajametod.com.">
    <meta name="keywords" content="PLR, cuan online, konten digital, bisnis digital, metode cuan, ebook PLR, template bisnis, rebranding, passive income">
    <meta name="author" content="rajametod.com">

    <!-- Favicon -->
    <link rel="icon" href="/assets/favicon.ico" type="image/x-icon">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://rajametod.com/">
    <meta property="og:title" content="rajametod.com - Konten PLR Premium Berkualitas">
    <meta property="og:description" content="Metode Gila, Cuan Nyata. Langsung Praktik, Langsung Panen. Dapatkan akses ke perpustakaan konten digital siap jual dan strategi cuan tanpa teori rumit.">
    <meta property="og:image" content="https://rajametod.com/assets/preview.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="rajametod.com - Konten PLR Premium Berkualitas">
    <meta name="twitter:description" content="Metode Gila, Cuan Nyata. Langsung Praktik, Langsung Panen.">
    <meta name="twitter:image" content="https://rajametod.com/assets/preview.jpg">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Custom JS (jika ada) -->
    <!-- <script src="/assets/js/main.js" defer></script> -->

    <!-- Tambahan keamanan (opsional) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="assets/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8B5CF6',
                        secondary: '#7C3AED',
                        dark: '#111827',
                        light: '#F3F4F6'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 text-white min-h-screen">
<?php if (isset($_SESSION['user_id'])): ?>
<!-- Quick access for logged-in users -->
<div class="w-full text-center text-sm py-2 bg-black/40 text-gray-200">
    Kamu sudah masuk. <a href="home.php" class="underline hover:no-underline">Buka Dashboard</a>
</div>
<?php endif; ?>

   <!-- Navigation -->
   <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="px-6 py-20 md:py-32 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Cara Cuan <span class="text-purple-400">Gak Biasa</span> Hasil Luar biasa
                </h1>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">Metode Gila, Cuan Nyata.

Langsung Praktik Sekarang, Langsung Panen cuannya.  Lengkap dengan perpustakaan besar konten hak label pribadi berkualitas tinggi yang dapat direkam dan dijual sebagai milik Anda sendiri. </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <form method="POST" action="register.php" class="flex-1">
                        <div class="flex flex-col sm:flex-row gap-4">
                          
                            <button class="px-8 py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg font-semibold shadow-lg hover:from-purple-600 hover:to-pink-600 transition transform hover:scale-105">
            🚀 Daftar & Dapatkan Akses
        </button>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <img src="assets/image/hero.webp" alt="PLR Content" class="rounded-xl w-full">
                </div>
            </div>
        </div>
    </section>
 

    <!-- Features Section -->
    <section id="fitur" class="px-6 py-20 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">🚀 “Kami tidak menjual mimpi <span class="text-purple-400">kami siapkan senjata! Anda tinggal tembak pasarnya</span></h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                💼 “Dari pemula jadi pengusaha digital — mulai hari ini, mulai dari rajametod.com.”
            </p>
			
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
		
		 <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-coins  text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">RAJA BERBAGI Metode Rahasia Cuan Online</h3>
   
    <p class="text-gray-300 mb-6">
        Dapatkan akses ke <strong class="text-white">101+ metode menghasilkan uang</strong> dengan cara tidak biasa. Dirancang untuk Anda yang ingin cuan cepat tanpa teori rumit — semua sudah diuji dan terbukti!
    </p>
    
</div>


            <!-- Feature 1 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-cube text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Perpustakaan Konten Lengkap</h3>
                <p class="text-gray-300">
                    Akses tak terbatas ke 10.000+ produk PLR dalam berbagai kategori termasuk ebook, kursus online, 
                    template, grafik, dan perangkat lunak siap pakai.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-recycle text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Hak Rebranding Penuh</h3>
                <p class="text-gray-300">
                    Miliki hak penuh untuk mengubah nama, mendesain ulang, dan menjual semua produk sebagai milik Anda 
                    tanpa batasan atau royalti.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-bolt text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Akses Instan 24/7</h3>
                <p class="text-gray-300">
                    Unduh dan gunakan konten kapan saja, di mana saja. Perpustakaan kami selalu terbuka dan terus 
                    diperbarui setiap minggu.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Bisnis Siap Pakai</h3>
                <p class="text-gray-300">
                    Dapatkan paket bisnis lengkap dengan funnel penjualan, halaman arahan, dan materi pemasaran 
                    yang siap digunakan.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Pelatihan & Panduan</h3>
                <p class="text-gray-300">
                    Akses video pelatihan eksklusif yang mengajarkan cara memonetisasi konten PLR, membangun audiens, 
                    dan menghasilkan pendapatan pasif.
                </p>
            </div>
<!-- Feature 1 -->
<div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
    <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
        <i class="fas fa-cube text-2xl text-purple-400"></i>
    </div>
   
    <ul class="text-gray-300 list-disc list-inside space-y-1">
        <li><strong>Tested & Proven</strong> oleh praktisi digital</li>
        <li><strong>Step-by-step guide</strong> (PDF & Video)</li>
        <li><strong>Tools & Template</strong> disertakan</li>
        <li><strong>Lifetime Access</strong> & Update gratis</li>
        <li><strong>Garansi Uang Kembali</strong></li>
    </ul>
</div>

            <!-- Feature 6 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:bg-white/15 transition">
                <div class="w-14 h-14 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-headset text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Dukungan Ahli</h3>
                <p class="text-gray-300">
                    Dapatkan bantuan dari tim ahli kami melalui komunitas eksklusif dan dukungan pelanggan 24/7 
                    untuk memastikan kesuksesan Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="harga" class="px-6 py-20 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Paket Berlangganan <span class="text-purple-400">rajametod.com</span></h2>
            <p class="text-xl text-gray-300">Pilih opsi yang paling sesuai dengan kebutuhan Anda</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Monthly Plan -->
           <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 transform hover:scale-105 transition"> 
    <h3 class="text-2xl font-bold mb-2">Langganan Bulanan</h3>
    
    <div class="text-4xl font-bold mb-1">
        Rp 228.000 <span class="text-xl font-normal text-gray-400">/bulan</span>
    </div>
    <p class="text-xs text-gray-400 italic mb-4">* Komitmen minimal 3 bulan</p>
    
    <p class="text-gray-300 mb-6">Solusi fleksibel untuk mulai menjadi Raja cuan.</p>
    
    <ul class="space-y-3 mb-8">
        <li class="flex items-center">
            <i class="fas fa-check text-green-400 mr-3"></i>
            Akses penuh ke 10.000+ produk PLR
        </li>
        <li class="flex items-center">
            <i class="fas fa-check text-green-400 mr-3"></i>
            Hak rebranding penuh tanpa batas
        </li>
        <li class="flex items-center">
            <i class="fas fa-check text-green-400 mr-3"></i>
            Unduh tak terbatas
        </li>
        <li class="flex items-center">
            <i class="fas fa-check text-green-400 mr-3"></i>
            Pelatihan eksklusif & panduan
        </li>
        <li class="flex items-center">
            <i class="fas fa-check text-green-400 mr-3"></i>
            Komunitas premium
        </li>
        <li class="flex items-center">
            <i class="fas fa-check text-green-400 mr-3"></i>
            Update konten mingguan
        </li>
    </ul>
	
</div>


            <!-- Lifetime Plan (Recommended) -->
            <div class="bg-gradient-to-b from-purple-500/20 to-transparent backdrop-blur-sm rounded-2xl p-8 border-2 border-purple-500 transform scale-105 md:scale-100 transition relative">
                <div class="absolute top-0 right-0 bg-purple-500 text-white text-sm font-bold px-4 py-1 rounded-bl-lg">
                    HEMAT 70%
                </div>
                <h3 class="text-2xl font-bold mb-2">Akses Seumur Hidup</h3>
                <div class="text-4xl font-bold mb-4">Rp 1.339.000 <span class="text-xl font-normal text-gray-400">sekali bayar</span></div>
                <p class="text-gray-300 mb-6">Investasi satu kali untuk akses seumur hidup - pilihan paling hemat!</p>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-400 mr-3"></i>
                        Semua fitur paket bulanan
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-400 mr-3"></i>
                        Akses seumur hidup tanpa biaya berlangganan
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-400 mr-3"></i>
                        Hak unduh selamanya
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-400 mr-3"></i>
                        Bonus eksklusif anggota seumur hidup
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-400 mr-3"></i>
                        Prioritas akses konten baru
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-400 mr-3"></i>
                        Sertifikat keanggotaan seumur hidup
                    </li>
                </ul>
            </div>
        </div>
    </section>
	 <button class="premium-btn" onclick="window.location.href='register.php';" style="width: 100%; margin-top: 2rem;">
    🔥 AKSES PREMIUM SEKARANG
</button>
<section class="container mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-3 gap-10">
  <!-- Step 1 -->
  <div class="bg-white/5 border border-white/20 rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center text-center backdrop-blur-sm">
    <div class="w-16 h-16 flex items-center justify-center bg-green-500/20 rounded-full mb-4">
      <i class="fas fa-download text-green-400 text-2xl"></i>
    </div>
    <h2 class="text-lg font-semibold text-green-400">Langkah 1</h2>
    <h3 class="text-xl font-bold mt-1 text-white">Akses Konten Premium</h3>
    <p class="text-gray-300 mt-2 text-sm">
      Jelajahi perpustakaan produk digital profesional kami yang dikurasi, siap untuk disesuaikan.
    </p>
    <img src="assets/image/step1.webp" alt="Akses Konten" class="w-full h-48 object-cover rounded-lg mt-6">
  </div>

  <!-- Step 2 -->
  <div class="bg-white/5 border border-white/20 rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center text-center backdrop-blur-sm">
    <div class="w-16 h-16 flex items-center justify-center bg-green-500/20 rounded-full mb-4">
      <i class="fas fa-brush text-green-400 text-2xl"></i>
    </div>
    <h2 class="text-lg font-semibold text-green-400">Langkah 2</h2>
    <h3 class="text-xl font-bold mt-1 text-white">Merek & Kustomisasi</h3>
    <p class="text-gray-300 mt-2 text-sm">
      Ubah produk dengan identitas merek unik Anda menggunakan metode dan alat profesional kami.
    </p>
    <img src="assets/image/step2.webp" alt="Merek & Kustomisasi" class="w-full h-48 object-cover rounded-lg mt-6">
  </div>

  <!-- Step 3 -->
  <div class="bg-white/5 border border-white/20 rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center text-center backdrop-blur-sm">
    <div class="w-16 h-16 flex items-center justify-center bg-green-500/20 rounded-full mb-4">
      <i class="fas fa-dollar-sign text-green-400 text-2xl"></i>
    </div>
    <h2 class="text-lg font-semibold text-green-400">Langkah 3</h2>
    <h3 class="text-xl font-bold mt-1 text-white">Luncurkan Strategi Raja</h3>
    <p class="text-gray-300 mt-2 text-sm">
      Mulailah menghasilkan cuan dan menjadi Raja dari produk bermerek Anda di berbagai platform dan pasar.
    </p>
    <img src="assets/image/step3.webp" alt="Luncurkan Bisnis" class="w-full h-48 object-cover rounded-lg mt-6">
  </div>
</section>

    <!-- Trust Indicators -->
    <section class="px-6 py-8 max-w-7xl mx-auto">
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 text-center">
            <div>
                <div class="text-3xl font-bold text-purple-400">10.000+</div>
                <div class="text-gray-300">Produk Tersedia</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-purple-400">5.000+</div>
                <div class="text-gray-300">Anggota Bahagia</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-purple-400">97%</div>
                <div class="text-gray-300">Tingkat Kepuasan</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-purple-400">24/7</div>
                <div class="text-gray-300">Dukungan Pelanggan</div>
            </div>
        </div>
    </section>
	<!-- Testimoni Section -->
<section class="py-16 bg-gray-900 text-white overflow-hidden">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Mereka Sudah Cuan, <span class="text-purple-400">Sekarang Giliran Anda!</span></h2>
        <p class="text-gray-400 mb-12 max-w-2xl mx-auto">
            Lihat bagaimana ratusan anggota berhasil menghasilkan uang dengan metode gila tapi nyata dari rajametod.com
        </p>
    </div>

    <!-- Testimoni Carousel -->
    <div class="relative">
        <div class="testimoni-track flex animate-scroll">
            <!-- Testimoni 1 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/8B5CF6/FFFFFF?text=BS" alt="Budi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <p class="text-sm text-gray-400">Jakarta</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Dalam 3 minggu, saya dapat Rp 12 juta dari ebook PLR. Metode gila tapi nyata!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/7C3AED/FFFFFF?text=SR" alt="Siti" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Siti Rahayu</h4>
                            <p class="text-sm text-gray-400">Bandung</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Saya ibu rumah tangga, sekarang bisa beli mobil dari hasil jualan template. Gak percaya!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/6D28D9/FFFFFF?text=AW" alt="Andi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Andi Wijaya</h4>
                            <p class="text-sm text-gray-400">Surabaya</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Langsung praktik, 7 hari pertama cuan Rp 3,2 juta. Ini bukan mimpi!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 4 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/5B21B6/FFFFFF?text=DE" alt="Dewi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Dewi Anggraeni</h4>
                            <p class="text-sm text-gray-400">Medan</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Template funnel penjualan langsung laris! Cuan Rp 8 juta di bulan pertama."</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 5 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/4C1D95/FFFFFF?text=JR" alt="Joko" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Joko R.</h4>
                            <p class="text-sm text-gray-400">Yogyakarta</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Metode cuan gak biasa ini beneran work! Dari nol jadi punya penghasilan online."</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 6 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/3B0764/FFFFFF?text=FA" alt="Fajar" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Fajar A.</h4>
                            <p class="text-sm text-gray-400">Semarang</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Saya baru 2 minggu, sudah dapat Rp 5,7 juta. Ini bukan scam, ini cuan nyata!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 7 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/8B5CF6/FFFFFF?text=MK" alt="Maya" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Maya K.</h4>
                            <p class="text-sm text-gray-400">Malang</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Pelatihannya step-by-step, langsung bisa praktek. Cuan pertama Rp 2,3 juta!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 8 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/7C3AED/FFFFFF?text=RR" alt="Rian" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Rian R.</h4>
                            <p class="text-sm text-gray-400">Bali</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Akses seumur hidup + update gratis? Worth it banget! Cuan terus tanpa modal besar."</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 9 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/6D28D9/FFFFFF?text=TP" alt="Tono" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Tono P.</h4>
                            <p class="text-sm text-gray-400">Palembang</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Dari kerja kantoran gajinya Rp 4 juta, sekarang dari rajametod cuan Rp 15 juta/bulan!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 10 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/5B21B6/FFFFFF?text=NL" alt="Nina" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Nina L.</h4>
                            <p class="text-sm text-gray-400">Makassar</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Komunitasnya aktif, dukungan 24/7. Saya langsung dibimbing sampai cuan!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 11 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/4C1D95/FFFFFF?text=AR" alt="Ari" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Ari Setiawan</h4>
                            <p class="text-sm text-gray-400">Denpasar</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Metode gila tapi terbukti! 101+ cara cuan online, semua bisa langsung dipraktekkan."</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 12 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/3B0764/FFFFFF?text=DI" alt="Dini" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Dini P.</h4>
                            <p class="text-sm text-gray-400">Balikpapan</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Saya pemula, tapi bisa cuan Rp 4,8 juta di minggu pertama. Luar biasa!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 13 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/8B5CF6/FFFFFF?text=RI" alt="Rudi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Rudi I.</h4>
                            <p class="text-sm text-gray-400">Pekanbaru</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Garansi uang kembali membuat saya tenang. Ternyata gak perlu refund, langsung cuan!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 14 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/7C3AED/FFFFFF?text=EA" alt="Eko" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Eko A.</h4>
                            <p class="text-sm text-gray-400">Solo</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Template-nya siap pakai, tinggal jual. Cuan pertama Rp 3,1 juta. Gila!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 15 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/6D28D9/FFFFFF?text=VI" alt="Vina" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Vina S.</h4>
                            <p class="text-sm text-gray-400">Tangerang</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Pelatihannya jelas, semua step-by-step. Sekarang saya punya penghasilan pasif!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 16 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/5B21B6/FFFFFF?text=FA" alt="Farid" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Farid H.</h4>
                            <p class="text-sm text-gray-400">Depok</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Saya sudah coba banyak kursus, ini yang paling efektif. Cuan nyata, bukan janji!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 17 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/4C1D95/FFFFFF?text=AN" alt="Angga" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Angga P.</h4>
                            <p class="text-sm text-gray-400">Bogor</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Bisnis siap pakai + funnel penjualan = cuan instan. Mantap!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 18 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/3B0764/FFFFFF?text=ME" alt="Meta" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Meta D.</h4>
                            <p class="text-sm text-gray-400">Bandar Lampung</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Saya bisa kerja dari rumah, cuan Rp 7 juta/bulan. Ini solusi buat ibu-ibu!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 19 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/8B5CF6/FFFFFF?text=HA" alt="Hadi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Hadi S.</h4>
                            <p class="text-sm text-gray-400">Cirebon</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Akses 24/7 + update mingguan = cuan terus tanpa henti. Keren!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 20 -->
            <div class="flex-shrink-0 w-80 mx-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition">
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/60x60/7C3AED/FFFFFF?text=LI" alt="Lina" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Lina M.</h4>
                            <p class="text-sm text-gray-400">Pontianak</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300 italic">"Dari nganggur jadi punya bisnis online. Terima kasih rajametod!"</p>
                    <div class="flex mt-3 text-yellow-400">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Duplicate for seamless loop -->
            <!-- Ulangi lagi dari 1-20 untuk loop tanpa jeda -->
        </div>
    </div>

    <!-- CTA -->
    <div class="text-center mt-12">
        <a href="register.php" class="inline-block px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold text-lg hover:from-purple-600 hover:to-pink-600 transition transform hover:scale-105 shadow-lg">
            🔥 Gabung Sekarang & Mulai Cuan!
        </a>
    </div>
</section>

<!-- CSS untuk Animasi Scroll -->
<style>
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .animate-scroll {
        display: flex;
        animation: scroll 30s linear infinite;
        width: 200%; /* Duplikasi item untuk loop */
    }

    .animate-scroll:hover {
        animation-play-state: paused;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .testimoni-track {
            animation: scroll 60s linear infinite;
        }
        .w-80 { width: 280px; }
    }
</style>
   <!-- FAQ Section -->
<section id="faq" class="px-6 py-20 max-w-4xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Pertanyaan Umum</h2>
        <p class="text-xl text-gray-300">Temukan jawaban untuk pertanyaan Anda tentang rajametod.com</p>
    </div>

    <div class="space-y-6">
        <!-- FAQ Item -->
        <div class="faq-item bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 cursor-pointer">
            <h3 class="faq-question text-xl font-bold mb-3 flex items-center">
                <i class="fas fa-plus-circle mr-3 text-purple-400 transition-transform duration-300"></i>
                Apa perbedaan antara paket bulanan dan akses seumur hidup?
            </h3>
            <div class="faq-answer text-gray-300 hidden">
                <p>
                    Paket bulanan berharga Rp 128.000 per bulan dengan pembayaran berulang, sementara paket akses seumur hidup 
                    hanya Rp 739.000 sekali bayar tanpa biaya berlangganan di masa depan. Dengan paket seumur hidup, 
                    Anda menghemat lebih dari Rp 8 juta dalam 1 tahun dan mendapatkan bonus eksklusif.
                </p>
            </div>
        </div>

        <div class="faq-item bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 cursor-pointer">
            <h3 class="faq-question text-xl font-bold mb-3 flex items-center">
                <i class="fas fa-plus-circle mr-3 text-purple-400 transition-transform duration-300"></i>
                Apa itu PLR dan bagaimana cara kerjanya?
            </h3>
            <div class="faq-answer text-gray-300 hidden">
                <p>
                    PLR (Private Label Rights) adalah lisensi yang memberi Anda hak untuk membeli produk digital, 
                    mengubah namanya, mendesain ulang, dan menjualnya sebagai milik Anda sendiri. Dengan rajametod.com, 
                    Anda mendapatkan akses ke ribuan produk PLR yang bisa Anda gunakan untuk membangun bisnis digital 
                    tanpa harus membuat konten dari nol.
                </p>
            </div>
        </div>

        <div class="faq-item bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 cursor-pointer">
            <h3 class="faq-question text-xl font-bold mb-3 flex items-center">
                <i class="fas fa-plus-circle mr-3 text-purple-400 transition-transform duration-300"></i>
                Apakah saya bisa membatalkan langganan bulanan kapan saja?
            </h3>
            <div class="faq-answer text-gray-300 hidden">
                <p>
                    Ya, Anda bisa membatalkan langganan bulanan kapan saja tanpa biaya penalti. Namun, kami sangat 
                    menyarankan paket akses seumur hidup karena jauh lebih hemat dan memberi Anda keamanan akses 
                    tanpa khawatir tentang pembayaran bulanan.
                </p>
            </div>
        </div>

        <div class="faq-item bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 cursor-pointer">
            <h3 class="faq-question text-xl font-bold mb-3 flex items-center">
                <i class="fas fa-plus-circle mr-3 text-purple-400 transition-transform duration-300"></i>
                Bagaimana jika saya tidak puas dengan layanan Anda?
            </h3>
            <div class="faq-answer text-gray-300 hidden">
                <p>
                    Kami menawarkan jaminan uang kembali 30 hari tanpa syarat untuk kedua paket. Jika Anda tidak puas dengan 
                    layanan kami dalam 30 hari pertama, cukup hubungi tim dukungan kami dan kami akan mengembalikan uang Anda 
                    secara penuh, termasuk untuk paket akses seumur hidup.
                </p>
            </div>
        </div>

        <div class="faq-item bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 cursor-pointer">
            <h3 class="faq-question text-xl font-bold mb-3 flex items-center">
                <i class="fas fa-plus-circle mr-3 text-purple-400 transition-transform duration-300"></i>
                Apakah saya perlu memiliki pengalaman teknis untuk menggunakan layanan ini?
            </h3>
            <div class="faq-answer text-gray-300 hidden">
                <p>
                    Tidak sama sekali! Kami menyediakan panduan langkah demi langkah dan pelatihan untuk membantu Anda 
                    memulai, bahkan jika Anda pemula total. Produk kami dirancang agar mudah digunakan oleh siapa saja.
                </p>
            </div>
        </div>
    </div>
</section>


  <?php include 'footer.php'; ?>
	
	<script>
document.querySelectorAll('.faq-item').forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('i');

    question.addEventListener('click', () => {
        const isOpen = !answer.classList.contains('hidden');

        // Tutup semua FAQ terlebih dahulu
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
        document.querySelectorAll('.faq-item i').forEach(i => i.classList.remove('rotate-45'));

        // Jika sebelumnya tertutup, buka
        if (!isOpen) {
            answer.classList.remove('hidden');
            icon.classList.add('rotate-45');
        }
    });
});
</script>

</body>
</html>
