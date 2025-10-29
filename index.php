<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melody Tube - Streaming Musik Tanpa Batas</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat ikon Phosphor Icons (alternatif modern untuk FontAwesome) -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Konfigurasi Font dan Warna (Inter adalah font default modern) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Palet Warna Kustom
                        'dark-primary': '#0F172A', // Navy sangat gelap (Latar Belakang)
                        'dark-secondary': '#1E293B', // Sedikit lebih terang (Kartu/Kontrol)
                        'accent-teal': '#2DD4BF', // Teal cerah untuk aksen
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                },
            },
        }
    </script>
    <style>
        /* Gaya Kustom untuk efek Glow */
        .glow-text {
            text-shadow: 0 0 10px rgba(45, 212, 191, 0.6);
        }
        /* Efek bayangan pada tombol CTA */
        .cta-shadow {
            box-shadow: 0 10px 20px -5px rgba(45, 212, 191, 0.5);
        }
    </style>
</head>
<body class="bg-dark-primary text-slate-200 font-sans min-h-screen">

    <!-- 1. Navbar -->
    <header class="sticky top-0 z-50 bg-dark-primary/90 backdrop-blur-sm shadow-xl shadow-slate-900/50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-extrabold text-accent-teal glow-text flex items-center">
                <i class="ph-fill ph-music-notes text-3xl mr-2"></i>Melody Tube
            </a>
            
            <!-- Nav Links (Desktop) -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#fitur" class="text-slate-300 hover:text-accent-teal transition duration-300">Fitur</a>
                <a href="#koleksi" class="text-slate-300 hover:text-accent-teal transition duration-300">Koleksi</a>
                <a href="#premium" class="text-slate-300 hover:text-accent-teal transition duration-300">Premium</a>
                <button class="bg-accent-teal text-dark-primary font-semibold py-2 px-6 rounded-full shadow-lg hover:bg-teal-400 transition duration-300 ease-in-out transform hover:scale-105">
                    Dengarkan Sekarang
                </button>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-slate-300 hover:text-accent-teal focus:outline-none">
                    <i class="ph-list text-3xl"></i>
                </button>
            </div>
        </nav>
    </header>

    <main>
        <!-- 2. Hero Section (Pengantar) -->
        <section id="hero" class="py-20 md:py-32 text-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight">
                <span class="text-white">Dunia Musik Tanpa Batas,</span>
                <span class="text-accent-teal block mt-2 glow-text">Hanya di Melody Tube.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 mb-10 max-w-3xl mx-auto">
                Temukan jutaan lagu, buat *playlist* unik, dan nikmati kualitas audio terbaik di perangkat apa pun.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <button class="bg-accent-teal text-dark-primary font-bold py-3 px-8 rounded-full cta-shadow hover:bg-teal-400 transition duration-300 ease-in-out transform hover:scale-105 border-2 border-accent-teal">
                    Mulai Berlangganan Gratis
                </button>
                <button class="bg-transparent text-accent-teal border-2 border-accent-teal font-semibold py-3 px-8 rounded-full hover:bg-accent-teal/10 transition duration-300">
                    Lihat Fitur Lengkap
                </button>
            </div>

            <!-- Placeholder Visualisasi Musik -->
            <div class="mt-20">
                <div class="h-64 md:h-96 w-full rounded-xl bg-dark-secondary flex items-center justify-center border border-accent-teal/20 shadow-xl shadow-accent-teal/10 p-8">
                    <i class="ph-waves text-9xl text-slate-600 opacity-50"></i>
                    <p class="text-slate-500 italic absolute">Visualisasi Interface Pemutar Musik</p>
                </div>
            </div>
        </section>

        <!-- 3. Features Section (Penjelasan Isi Web) -->
        <section id="fitur" class="py-20 bg-dark-secondary/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-center text-white mb-4">Mengapa Memilih Melody Tube?</h2>
                <p class="text-xl text-center text-slate-400 mb-16">Dirancang untuk pengalaman mendengarkan yang paling imersif.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Fitur 1: Koleksi Musik -->
                    <div class="p-8 bg-dark-secondary rounded-xl shadow-2xl border-t-4 border-accent-teal transition duration-500 hover:scale-[1.02] hover:shadow-accent-teal/20">
                        <div class="w-12 h-12 bg-accent-teal/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph-database-fill text-2xl text-accent-teal"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white mb-3">Katalog Raksasa</h3>
                        <p class="text-slate-400">Akses lebih dari 80 juta lagu dari semua genre dan era. Selalu ada yang baru untuk didengarkan.</p>
                    </div>

                    <!-- Fitur 2: Kualitas Audio -->
                    <div class="p-8 bg-dark-secondary rounded-xl shadow-2xl border-t-4 border-accent-teal transition duration-500 hover:scale-[1.02] hover:shadow-accent-teal/20">
                        <div class="w-12 h-12 bg-accent-teal/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph-speaker-high-fill text-2xl text-accent-teal"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white mb-3">Audio *Lossless*</h3>
                        <p class="text-slate-400">Nikmati kualitas suara sejernih kristal, sama persis seperti rekaman studio. (Fitur Premium).</p>
                    </div>

                    <!-- Fitur 3: Rekomendasi Pintar -->
                    <div class="p-8 bg-dark-secondary rounded-xl shadow-2xl border-t-4 border-accent-teal transition duration-500 hover:scale-[1.02] hover:shadow-accent-teal/20">
                        <div class="w-12 h-12 bg-accent-teal/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="ph-sparkle-fill text-2xl text-accent-teal"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white mb-3">Discovery Personal</h3>
                        <p class="text-slate-400">Algoritma AI kami akan menemukan lagu dan artis baru yang pasti Anda suka setiap hari.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- 4. Koleksi & Playlist Section -->
        <section id="koleksi" class="py-20">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center space-y-10 lg:space-y-0 lg:space-x-12">
                
                <!-- Teks Deskripsi -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <span class="text-accent-teal font-semibold uppercase tracking-widest text-sm mb-2 block">Koleksi Musik Anda</span>
                    <h2 class="text-4xl font-bold text-white mb-4">Buat Dunia Musik Anda Sendiri.</h2>
                    <p class="text-xl text-slate-400 mb-8">Atur semua lagu favorit Anda ke dalam *playlist* yang rapi. Dari *Chill Study* hingga *Workout Hype*, kendalikan suasana hati Anda.</p>
                    
                    <ul class="space-y-4 text-left inline-block lg:block">
                        <li class="flex items-start space-x-3 text-slate-300">
                            <i class="ph-check-circle-fill text-accent-teal text-xl mt-1 flex-shrink-0"></i>
                            <span>Sinkronisasi Otomatis di semua perangkat.</span>
                        </li>
                        <li class="flex items-start space-x-3 text-slate-300">
                            <i class="ph-check-circle-fill text-accent-teal text-xl mt-1 flex-shrink-0"></i>
                            <span>Mode *Offline* untuk mendengarkan tanpa internet.</span>
                        </li>
                        <li class="flex items-start space-x-3 text-slate-300">
                            <i class="ph-check-circle-fill text-accent-teal text-xl mt-1 flex-shrink-0"></i>
                            <span>Berbagi *playlist* dengan teman-teman Anda.</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Visualisasi Playlist Placeholder -->
                <div class="lg:w-1/2 w-full">
                    <div class="h-64 rounded-xl bg-dark-secondary flex items-center justify-center border border-slate-700 shadow-2xl shadow-dark-secondary/70 p-6">
                        <div class="grid grid-cols-2 grid-rows-2 gap-3 w-full max-w-sm">
                            <div class="h-24 bg-teal-500/20 rounded-lg flex items-center justify-center text-sm text-accent-teal font-bold">Lofi</div>
                            <div class="h-24 bg-red-500/20 rounded-lg flex items-center justify-center text-sm text-accent-teal font-bold">Pop</div>
                            <div class="h-24 bg-blue-500/20 rounded-lg flex items-center justify-center text-sm text-accent-teal font-bold">Rock</div>
                            <div class="h-24 bg-purple-500/20 rounded-lg flex items-center justify-center text-sm text-accent-teal font-bold">Jazz</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 5. CTA Section (Premium) -->
        <section id="premium" class="py-20">
            <div class="max-w-4xl mx-auto bg-dark-secondary p-10 rounded-2xl text-center border border-accent-teal/30 shadow-2xl shadow-accent-teal/10">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Upgrade ke Melody Tube Premium</h2>
                <p class="text-xl text-slate-400 mb-8">Dengarkan tanpa iklan, tanpa batas *skip*, dan kualitas audio HD.</p>
                <button class="bg-accent-teal text-dark-primary font-bold py-3 px-12 rounded-full cta-shadow hover:bg-teal-400 transition duration-300 ease-in-out transform hover:scale-105 border-2 border-accent-teal">
                    Coba Premium Gratis 1 Bulan
                </button>
            </div>
        </section>

    </main>

    <!-- 6. Footer -->
    <footer class="bg-dark-primary/80 border-t border-slate-800 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="col-span-2 md:col-span-1">
                    <a href="#" class="text-xl font-bold text-accent-teal glow-text flex items-center">
                        <i class="ph-fill ph-music-notes text-2xl mr-1"></i>Melody Tube
                    </a>
                    <p class="mt-4 text-slate-500 text-sm">Musik adalah bahasa universal. Dengarkan, rasakan, nikmati.</p>
                </div>

                <!-- Kolom 2: Tautan Musik -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Jelajahi</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Artis Populer</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Rilis Terbaru</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Playlist Pilihan</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Bantuan -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Bantuan</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Pusat Dukungan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Cara Berlangganan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Legal -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Perusahaan</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Tentang Kami</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Ketentuan Layanan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent-teal transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>

            <!-- Hak Cipta -->
            <div class="mt-10 pt-6 border-t border-slate-800 text-center">
                <p class="text-sm text-slate-500">&copy; 2025 Melody Tube. Dengarkan Musik, Rasakan Perbedaannya.</p>
            </div>
        </div>
    </footer>

</body>
</html>