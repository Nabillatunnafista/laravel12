<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ $profile['name'] }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* Menerapkan font Poppins ke seluruh body website */
        body { font-family: 'Poppins', sans-serif; }
        /* Mengatur durasi dan gaya animasi saat kotak (card) disentuh kursor */
        .hover-card { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        
        /* Gaya khusus Navbar saat di-scroll: transparan, blur (kaca), dan ada garis bawah tipis */
        .nav-blur {
            background-color: rgba(11, 14, 20, 0.8) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border-bottom: 1px solid rgba(171, 167, 167, 0.46);
        }
    </style>
</head>
<body class="bg-[#0b0e14] text-gray-200 overflow-x-hidden">

    <nav id="main-nav" class="fixed top-0 w-full z-[100] transition-all duration-300 border-b border-transparent">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#about" class="text-2xl font-bold text-orange-500 tracking-tighter">Nafista<span class="text-white">.</span></a>
            
            <div class="hidden md:flex space-x-8 text-sm uppercase tracking-widest font-semibold">
                <a href="#about" class="hover:text-orange-500 transition">About</a>
                <a href="#education" class="hover:text-orange-500 transition">Education</a>
                <a href="#skills" class="hover:text-orange-500 transition">Skills</a>
                <a href="#contact" class="hover:text-orange-500 transition">Contact</a>
            </div>

            <button id="menu-btn" class="md:hidden text-orange-500 text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-[#161b22] border-b border-gray-800">
            <div class="flex flex-col p-6 space-y-4 text-sm uppercase tracking-widest font-semibold text-center">
                <a href="#about" class="mobile-link hover:text-orange-500">About</a>
                <a href="#education" class="mobile-link hover:text-orange-500">Education</a>
                <a href="#skills" class="mobile-link hover:text-orange-500">Skills</a>
                <a href="#contact" class="mobile-link hover:text-orange-500">Contact</a>
            </div>
        </div>
    </nav>

    <section id="about" class="pt-32 pb-16 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10 md:gap-16">
            <div class="relative flex-shrink-0">
                <div class="relative z-10 w-64 h-64 md:w-80 md:h-80 overflow-hidden rounded-full border-8 border-[#161b22] shadow-2xl">
                    <img src="{{ asset($profile['photo']) }}" alt="Foto Nabillatun" class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-4 right-10 w-10 h-10 bg-orange-500 rounded-full border-4 border-[#0b0e14] z-20 animate-pulse"></div>
            </div>

            <div class="text-center md:text-left flex flex-col justify-between h-full">
                <div>
                    <h2 class="text-orange-500 font-bold text-5xl">Hallo!</h2>
                    <p class="mt-4 text-gray-400 text-base leading-relaxed text-justify font-light">
                        {{ $profile['bio'] }}
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12 border-t border-gray-800 pt-6">
                    <div class="hover:translate-x-2 transition-transform">
                        <p class="text-[10px] uppercase text-gray-500 font-bold tracking-[0.2em]">Location</p>
                        <p class="text-white font-medium mt-1 text-sm">{{ $profile['location'] }}</p>
                    </div>
                    <div class="hover:translate-x-2 transition-transform">
                        <p class="text-[10px] uppercase text-gray-500 font-bold tracking-[0.2em]">Program Studi</p>
                        <p class="text-white font-medium mt-1 text-sm">{{ $profile['title'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="py-16 bg-[#0d1117]">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-2xl font-bold text-white text-center mb-10">Education</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="hover-card bg-[#161b22] p-8 rounded-xl border border-gray-800 hover:border-orange-500 hover:-translate-y-2 text-center">
                    <p class="text-orange-500 font-bold text-lg uppercase">2021 - 2024</p>
                    <h3 class="text-lg font-bold text-white mt-2">SMKN 1 Lamongan</h3>
                </div>
                <div class="hover-card bg-[#161b22] p-8 rounded-xl border border-gray-800 hover:border-orange-500 hover:-translate-y-2 text-center">
                    <p class="text-orange-500 font-bold text-lg uppercase">2024 - Sekarang</p>
                    <h3 class="text-lg font-bold text-white mt-2">Politeknik Elektronika Negeri Surabaya</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-white mb-10">Skills</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($skills as $category => $items)
                <div class="hover-card bg-[#161b22] p-8 rounded-xl border border-gray-800 hover:border-orange-500 hover:-translate-y-2 hover:shadow-[0_10px_30px_-10px_rgba(249,115,22,0.3)] transition-all duration-300">
                    <h3 class="font-bold text-orange-500 text-xl uppercase tracking-wider">{{ $category }}</h3>
                    <p class="text-gray-400 text-sm mt-2 leading-relaxed font-light">{{ implode(', ', $items) }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 bg-[#0d1117]">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-white mb-10">Contact</h2>
            <div class="flex justify-center gap-6">
                <a href="{{ $profile['instagram'] }}" target="_blank" class="bg-[#161b22] p-6 rounded-xl border border-gray-800 hover:text-orange-500 transition">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                </a>
                <a href="{{ $profile['github'] }}" target="_blank" class="bg-[#161b22] p-6 rounded-xl border border-gray-800 hover:text-orange-500 transition">
                    <i class="fa-brands fa-github text-2xl"></i>
                </a>
            </div>
            <p class="mt-16 text-gray-600 text-[15px] tracking-widest uppercase">© 2026 Nabillatun Nafista</p>
        </div>
    </section>

    <script>
        // Mengambil elemen HTML berdasarkan ID-nya
        const nav = document.getElementById('main-nav');
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        const links = document.querySelectorAll('.mobile-link');

        // Fungsi Deteksi Scroll: Jika layar digeser lebih dari 20px, tambahkan efek blur kaca ke navbar [cite: 152]
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                nav.classList.add('nav-blur');
            } else {
                nav.classList.remove('nav-blur');
            }
        });

        // Fungsi Tombol Mobile: Menghapus/Menambah class 'hidden' agar menu muncul/hilang saat diklik
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Tutup menu mobile secara otomatis jika salah satu link navigasi diklik
        links.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });
    </script>

</body>
</html>