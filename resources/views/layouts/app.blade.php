<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiNusantara | Art Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background: radial-gradient(circle at top, #151515, #0b0b0b);
            font-family: 'Georgia', serif;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.4); /* Dibuat sedikit transparan agar gradien radial body terlihat */
            min-height: 100vh;
            display: flex;
            flex-col;
        }

        .gold {
            color: #d2ab57;
            text-shadow: 0 0 10px rgba(198,169,107,0.25);
        }

       /* KEADAAN AWAL: Hitam Pekat */
        .navbar-solid {
            background: #0b0b0b; /* Hitam solid mengikuti warna dasar body paling bawah */
            transition: all 0.5s ease;
            border-bottom: 1px solid rgba(198,169,107,0.15);
        }

        /* SETELAH DI-SCROLL: Transparan Murni Tanpa Blur */
        .navbar-transparent {
            background: transparent; /* Benar-benar tembus pandang */
            transition: all 0.5s ease;
            border-bottom: 1px solid transparent; /* Menghilangkan garis bawah agar bersih */
            padding-top: 1rem;   /* Sedikit mengecil agar transisinya terasa dinamis */
            padding-bottom: 1rem;
        }

        .btn-animated {
            background: white;
            color: black;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(198,169,107,0.5);
        }

        .btn-animated:hover {
            background: #c6a96b;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(198,169,107,0.3);
        }

        .btn-animated::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255,255,255,0.4),
                transparent
            );
            transition: 0.5s;
        }

        .btn-animated:hover::before {
            left: 100%;
        }
    </style>
</head>

<body class="text-white">

<div class="overlay flex flex-col min-h-screen">

    <nav id="navbar" class="fixed w-full top-0 z-50 flex justify-between items-center px-16 py-6 navbar-solid">
        <h1 class="flex items-center text-2xl font-bold tracking-tight">
            <img src="{{ asset('img/logo_awan.png') }}" alt="Logo" class="h-10 w-auto mr-2">
            <span class="text-white">Di</span><span class="gold">Nusantara</span>
        </h1>

        <div class="hidden md:flex gap-14 text-gray-300 text-lg font-medium tracking-wide">
            <a href="/" class="hover:text-white transition-colors">Home</a>
            <a href="#" class="hover:text-white transition-colors">Artists</a>
            <a href="{{ url('/') }}#about" class="hover:text-[#c5a47e] transition-all">About</a>
            <a href="{{ route('artworks') }}" class="hover:text-white transition-colors">Artworks</a>
            <a href="#" class="hover:text-white transition-colors">Categories</a>
        </div>

        <div class="flex items-center gap-6">
            <input type="text" placeholder="Search..."
                class="bg-white/10 px-6 py-2 rounded-full text-base outline-none w-48 focus:w-64 transition-all duration-300">

            <a href="{{ route('login') }}" class="btn-animated px-6 py-2 rounded-full text-base font-semibold inline-block">
                Sign Up
            </a>
        </div>
    </nav>

    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    <footer class="px-12 pt-20 pb-10 bg-[#d9d9d9] text-[#151515] font-sans mt-auto">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            
            <div class="space-y-6">
                <h1 class="flex items-center text-2xl font-bold">
                    <img src="{{ asset('img/logo_awan.png') }}" alt="Logo" class="h-8 w-auto mr-2">
                    <span class="text-[#151515]">Di</span><span class="text-[#c1a366]">Nusantara</span>
                </h1>
                <p class="text-gray-600 text-sm leading-relaxed max-w-[240px]">
                    Connecting the world through timeless masterpieces
                </p>
                <div class="flex gap-4 items-center">
                    <a href="#" class="hover:opacity-70 transition-opacity"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" class="w-5 h-5 grayscale"></a>
                    <a href="#" class="hover:opacity-70 transition-opacity"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" class="w-5 h-5 grayscale"></a>
                    <a href="#" class="hover:opacity-70 transition-opacity"><img src="https://cdn-icons-png.flaticon.com/512/3046/3046121.png" class="w-5 h-5 grayscale"></a>
                    <a href="#" class="hover:opacity-70 transition-opacity"><img src="https://cdn-icons-png.flaticon.com/512/1006/1006771.png" class="w-5 h-5 grayscale"></a>
                </div>
            </div>

            <div class="space-y-4">
                <h4 class="text-xl font-serif font-bold">Explore</h4>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li><a href="/" class="hover:text-[#c1a366] transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-[#c1a366] transition-colors">Artist</a></li>
                    <li><a href="{{ route('artworks') }}" class="hover:text-[#c1a366] transition-colors">ArtWorks</a></li>
                    <li><a href="#" class="hover:text-[#c1a366] transition-colors">Categories</a></li>
                </ul>
            </div>

            <div class="grid grid-cols-1 gap-8">
                <div class="space-y-4">
                    <h4 class="text-xl font-serif font-bold">For Artist</h4>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li><a href="#" class="hover:text-[#c1a366] transition-colors">Submit ArtWorks</a></li>
                        <li><a href="#" class="hover:text-[#c1a366] transition-colors">Artist Guidelines</a></li>
                        <li><a href="#" class="hover:text-[#c1a366] transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-xl font-serif font-bold">Company</h4>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li><a href="#" class="hover:text-[#c1a366] transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-[#c1a366] transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="space-y-6">
                <h4 class="text-sm font-semibold text-gray-600">Stay Inspired With Curated ArtWorks</h4>
                <div class="relative flex items-center">
                    <input type="email" placeholder="Enter Your Email" 
                        class="w-full bg-transparent border border-gray-400 rounded-full py-3 px-6 text-sm outline-none focus:border-[#c1a366]">
                    <button class="absolute right-1 bg-[#c1a366] text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-[#b09255] transition-all">
                        Stay Inspired
                    </button>
                </div>
                <p class="text-[10px] text-gray-500 text-right italic">Designed to celebrate creativity</p>
            </div>

        </div>

        <div class="max-w-7xl mx-auto border-t border-gray-300 pt-8 flex flex-col md:flex-row justify-between items-center text-[11px] text-gray-500">
            <p>© 2026 DiNusantara. Crafted For Artist and Dreamers</p>
        </div>
    </footer>

</div>

<script>
    const navbar = document.getElementById("navbar");
    
    window.addEventListener("scroll", () => {
        if (window.scrollY > 40) {
            // Ketika di-scroll ke bawah: Ubah jadi transparan total
            navbar.classList.remove("navbar-solid");
            navbar.classList.add("navbar-transparent");
        } else {
            // Ketika kembali ke atas: Balikkan ke hitam pekat
            navbar.classList.remove("navbar-transparent");
            navbar.classList.add("navbar-solid");
        }
    });
</script>

</body>
</html>