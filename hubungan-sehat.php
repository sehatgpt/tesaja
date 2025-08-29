<?php
// hubungan-sehat.php - Halaman Hubungan Sehat
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hubungan Sehat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body class="font-inter text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="#" class="text-xl font-bold text-purple-600">Hubungan Sehat</a>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="hover:text-purple-600">Beranda</a>
                    <a href="#" class="hover:text-purple-600">Artikel</a>
                    <a href="#" class="hover:text-purple-600">Kuis</a>
                    <a href="#" class="hover:text-purple-600">Tantangan</a>
                    <a href="#" class="hover:text-purple-600">Jurnal</a>
                    <a href="#" class="hover:text-purple-600">Meditasi</a>
                </div>
                <div>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Mulai Gratis</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="bg-gradient-to-r from-purple-600 to-pink-500 text-white">
        <div class="max-w-4xl mx-auto text-center py-20 px-4">
            <h1 class="text-4xl font-bold mb-4">Hubungan Sehat</h1>
            <p class="text-lg mb-8">Bangun koneksi yang lebih kuat dengan panduan berbasis sains. Tingkatkan komunikasi, empati, dan keintiman dalam hubungan Anda.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="px-8 py-3 bg-white text-purple-700 rounded font-semibold">Mulai Perjalanan</a>
                <a href="#" class="px-8 py-3 bg-purple-800 text-white rounded font-semibold">Mulai Gratis</a>
                <a href="#" class="px-8 py-3 border border-white rounded font-semibold">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 text-center gap-8">
            <div>
                <p class="text-3xl font-bold text-purple-600">50K+</p>
                <p>Pasangan Bahagia</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-purple-600">200+</p>
                <p>Artikel & Tips</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-purple-600">52</p>
                <p>Tantangan Mingguan</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-purple-600">95%</p>
                <p>Tingkat Kepuasan</p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Fitur Lengkap untuk Hubungan Sehat</h2>
            <p class="text-center mb-16">Temukan berbagai alat dan panduan yang dirancang khusus untuk membantu Anda membangun hubungan yang lebih kuat dan bermakna.</p>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Feature item -->
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Artikel & Tips Harian</h3>
                    <p class="mb-4">Dapatkan wawasan berbasis sains tentang komunikasi, empati, dan resolusi konflik setiap hari.</p>
                    <a href="#" class="text-purple-600 font-semibold">Mulai Sekarang</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Kuis Interaktif</h3>
                    <p class="mb-4">Temukan gaya cinta Anda dan kemampuan mendengar dengan kuis yang dipersonalisasi.</p>
                    <a href="#" class="text-purple-600 font-semibold">Mulai Sekarang</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Tantangan Mingguan</h3>
                    <p class="mb-4">Ikuti tantangan 7 hari untuk memperkuat ikatan dengan pasangan Anda.</p>
                    <a href="#" class="text-purple-600 font-semibold">Mulai Sekarang</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Jurnal Hubungan</h3>
                    <p class="mb-4">Catat momen spesial, rasa syukur, dan perkembangan dalam hubungan Anda.</p>
                    <a href="#" class="text-purple-600 font-semibold">Mulai Sekarang</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Mode Pasangan</h3>
                    <p class="mb-4">Tetapkan tujuan bersama dan gunakan kalender bersama untuk memperkuat hubungan.</p>
                    <a href="#" class="text-purple-600 font-semibold">Mulai Sekarang</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Meditasi Terpandu</h3>
                    <p class="mb-4">Kursus mini tentang memaafkan, kesadaran emosional, dan koneksi yang lebih dalam.</p>
                    <a href="#" class="text-purple-600 font-semibold">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quiz Section -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Kenali Diri Anda Lebih Dalam</h2>
            <p class="text-center mb-16">Ikuti kuis interaktif untuk memahami kepribadian dan gaya hubungan Anda</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <h3 class="font-semibold mb-2">12 pertanyaan</h3>
                    <p class="mb-4">Apa Gaya Cintamu?</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Kuis</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <h3 class="font-semibold mb-2">10 pertanyaan</h3>
                    <p class="mb-4">Kemampuan Mendengarmu</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Kuis</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <h3 class="font-semibold mb-2">15 pertanyaan</h3>
                    <p class="mb-4">Kompatibilitas Pasangan</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Kuis</a>
                </div>
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <h3 class="font-semibold mb-2">8 pertanyaan</h3>
                    <p class="mb-4">Gaya Komunikasi</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Kuis</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Challenge -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Tantangan Mingguan</h2>
            <p class="text-center mb-16">Ikuti tantangan terstruktur untuk membangun kebiasaan positif dalam hubungan</p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="p-6 bg-white shadow rounded">
                    <h3 class="font-semibold mb-2">Minggu 1 - Apresiasi Harian</h3>
                    <p class="mb-2">Katakan 3 hal yang kamu hargai tentang pasanganmu setiap hari</p>
                    <p class="text-sm text-gray-500 mb-2">Progress 85% - Selesai</p>
                </div>
                <div class="p-6 bg-white shadow rounded">
                    <h3 class="font-semibold mb-2">Minggu 2 - Mendengar Aktif</h3>
                    <p class="mb-2">Praktikkan mendengar tanpa memberikan solusi selama 7 hari</p>
                    <p class="text-sm text-gray-500 mb-2">Progress 60% - Lanjutkan</p>
                </div>
                <div class="p-6 bg-white shadow rounded">
                    <h3 class="font-semibold mb-2">Minggu 3 - Waktu Berkualitas</h3>
                    <p class="mb-2">Luangkan 30 menit tanpa gadget bersama pasangan</p>
                    <p class="text-sm text-gray-500 mb-2">Progress 0% - Mulai</p>
                </div>
                <div class="p-6 bg-white shadow rounded">
                    <h3 class="font-semibold mb-2">Minggu 4 - Ekspresi Cinta</h3>
                    <p class="mb-2">Ekspresikan cinta sesuai bahasa cinta pasangan</p>
                    <p class="text-sm text-gray-500 mb-2">Progress 0% - Mulai</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Journal Section -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Jurnal Hubungan Anda</h2>
            <p class="text-center mb-16">Catat perjalanan hubungan Anda dan lihat perkembangan dari waktu ke waktu</p>
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white p-4 shadow rounded">
                    <h3 class="font-semibold mb-2">Momen Spesial Hari Ini</h3>
                    <p class="text-sm text-gray-500 mb-2">15 Jan 2024</p>
                    <p class="mb-2">Kami memasak bersama untuk pertama kalinya dan tertawa sepanjang malam...</p>
                    <p class="text-sm text-gray-500">#memasak #tertawa #kebersamaan</p>
                </div>
                <div class="bg-white p-4 shadow rounded">
                    <h3 class="font-semibold mb-2">Rasa Syukur</h3>
                    <p class="text-sm text-gray-500 mb-2">14 Jan 2024</p>
                    <p class="mb-2">Hari ini saya sangat bersyukur atas kesabaran pasangan saya ketika...</p>
                    <p class="text-sm text-gray-500">#syukur #kesabaran #dukungan</p>
                </div>
                <div class="bg-white p-4 shadow rounded">
                    <h3 class="font-semibold mb-2">Perkembangan Diri</h3>
                    <p class="text-sm text-gray-500 mb-2">13 Jan 2024</p>
                    <p class="mb-2">Saya belajar untuk lebih mendengarkan tanpa langsung memberi saran...</p>
                    <p class="text-sm text-gray-500">#mendengar #komunikasi #growth</p>
                </div>
            </div>
            <div class="text-center mb-8">
                <p>Statistik Jurnal: Total Entri 47 | Momen Bahagia 32 | Perkembangan 15</p>
            </div>
            <div class="text-center">
                <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Upload Foto</a>
            </div>
        </div>
    </section>

    <!-- Meditation Section -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Meditasi & Kursus Mini</h2>
            <p class="text-center mb-16">Pelajari teknik mindfulness dan kesadaran emosional untuk hubungan yang lebih harmonis</p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white shadow p-6 rounded">
                    <h3 class="font-semibold mb-2">Meditasi Memaafkan Diri</h3>
                    <p class="text-sm mb-2">12 menit</p>
                    <p class="mb-4">Lepaskan beban masa lalu dan belajar memaafkan diri sendiri</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Meditasi</a>
                </div>
                <div class="bg-white shadow p-6 rounded">
                    <h3 class="font-semibold mb-2">Kesadaran Emosi dalam Hubungan</h3>
                    <p class="text-sm mb-2">15 menit</p>
                    <p class="mb-4">Pahami dan kelola emosi Anda untuk hubungan yang lebih sehat</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Meditasi</a>
                </div>
                <div class="bg-white shadow p-6 rounded">
                    <h3 class="font-semibold mb-2">Membangun Koneksi Mendalam</h3>
                    <p class="text-sm mb-2">18 menit</p>
                    <p class="mb-4">Perkuat ikatan emosional dengan pasangan melalui mindfulness</p>
                    <a href="#" class="px-4 py-2 bg-purple-600 text-white rounded">Mulai Meditasi</a>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Support -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-4xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4">Dukungan AI 24/7</h2>
                <p class="mb-4">Dapatkan panduan berbasis CBT dari chatbot AI kami kapan saja Anda membutuhkan dukungan</p>
                <p class="font-semibold">Asisten Hubungan AI</p>
                <p class="text-sm text-gray-500 mb-4">Siap membantu Anda 24/7 - Online</p>
                <div class="space-y-2">
                    <p class="p-2 bg-white rounded">Halo! Saya di sini untuk membantu Anda mengatasi tantangan dalam hubungan. Apa yang sedang Anda rasakan hari ini?</p>
                    <div class="flex flex-col space-y-2">
                        <button class="p-2 bg-white rounded text-left">Saya merasa tidak didengar</button>
                        <button class="p-2 bg-white rounded text-left">Kami sering bertengkar</button>
                        <button class="p-2 bg-white rounded text-left">Bagaimana cara memaafkan?</button>
                        <button class="p-2 bg-white rounded text-left">Komunikasi kami buruk</button>
                    </div>
                    <input type="text" placeholder="Ketik pesan Anda..." class="mt-2 w-full p-2 border rounded" />
                </div>
            </div>
            <div class="text-center">
                <img src="https://via.placeholder.com/400x300" alt="Chatbot" class="mx-auto rounded" />
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Kisah Sukses Pasangan</h2>
            <p class="text-center mb-16">Dengarkan bagaimana Hubungan Sehat telah membantu ribuan pasangan membangun koneksi yang lebih kuat</p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white shadow p-6 rounded">
                    <h3 class="font-semibold">Sarah & Ahmad</h3>
                    <p class="text-sm text-gray-500">Jakarta - Menikah 3 tahun</p>
                    <p class="mt-2">Aplikasi ini benar-benar mengubah cara kami berkomunikasi. Tantangan mingguan membantu kami lebih menghargai satu sama lain.</p>
                </div>
                <div class="bg-white shadow p-6 rounded">
                    <h3 class="font-semibold">Maya & Rizki</h3>
                    <p class="text-sm text-gray-500">Bandung - Pacaran 2 tahun</p>
                    <p class="mt-2">Kuis tentang bahasa cinta membuka mata kami. Sekarang kami tahu cara mengekspresikan cinta dengan lebih efektif.</p>
                </div>
                <div class="bg-white shadow p-6 rounded">
                    <h3 class="font-semibold">Indra & Sari</h3>
                    <p class="text-sm text-gray-500">Surabaya - Menikah 5 tahun</p>
                    <p class="mt-2">Meditasi terpandu membantu kami mengatasi konflik dengan lebih tenang. Hubungan kami jadi lebih harmonis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-purple-600 text-white py-20 text-center">
        <h2 class="text-3xl font-bold mb-4">Bergabunglah dengan 50,000+ Pasangan Bahagia</h2>
        <p class="mb-8">Mulai perjalanan menuju hubungan yang lebih sehat dan bahagia hari ini</p>
        <a href="#" class="px-8 py-3 bg-white text-purple-700 font-semibold rounded">Mulai Gratis Sekarang</a>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-8 px-4">
            <div>
                <h3 class="text-white font-semibold mb-4">Hubungan Sehat</h3>
                <p class="text-sm">Membantu membangun hubungan yang lebih kuat dan bermakna melalui panduan berbasis sains dan teknologi modern.</p>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-4">Fitur Utama</h3>
                <ul class="space-y-2 text-sm">
                    <li>Artikel & Tips Harian</li>
                    <li>Kuis Interaktif</li>
                    <li>Tantangan Mingguan</li>
                    <li>Jurnal Hubungan</li>
                    <li>Mode Pasangan</li>
                    <li>Meditasi Terpandu</li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-4">Dukungan</h3>
                <ul class="space-y-2 text-sm">
                    <li>Pusat Bantuan</li>
                    <li>FAQ</li>
                    <li>Hubungi Kami</li>
                    <li>Kebijakan Privasi</li>
                    <li>Syarat & Ketentuan</li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-4">Komunitas</h3>
                <ul class="space-y-2 text-sm">
                    <li>Hubungi Kami</li>
                    <li>hello@hubungansehat.id</li>
                    <li>+62 21 1234 5678</li>
                    <li>Jakarta, Indonesia</li>
                </ul>
                <div class="mt-4">
                    <input type="email" placeholder="Email Anda" class="w-full p-2 rounded bg-gray-800 text-white" />
                </div>
            </div>
        </div>
        <div class="text-center text-sm mt-8">© 2024 Hubungan Sehat. Semua hak dilindungi. Dibuat dengan ❤️ untuk hubungan yang lebih baik.</div>
    </footer>
</body>
</html>
