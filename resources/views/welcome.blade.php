<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiNusantara | Art Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
        background: radial-gradient(circle at top, #151515, #0b0b0b);
        font-family: 'Georgia', serif;
        }

        .overlay {
            background: rgb(0, 0, 0);
            min-height: 100vh;
        }

        .gold {
            color: #d2ab57;
            text-shadow: 0 0 10px rgba(198,169,107,0.25);
        }

        .navbar-solid {
            background: rgba(0,0,0,0.85);
            backdrop-filter: blur(6px);
            transition: 0.4s ease;
            border-bottom: 1px solid rgba(198,169,107,0.2);
        }

        .navbar-transparent {
            background: transparent;
            backdrop-filter: none;
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

        .art-card {
            transition: 0.4s;
        }

        .art-card:hover {
            transform: translateY(-8px) scale(1.03);
        }


    </style>
</head>

<body class="text-white">

<div class="overlay">

    <!-- NAVBAR -->
   <nav id="navbar" class="fixed w-full top-0 z-50 flex justify-between items-center px-16 py-8 navbar-solid">
    <!-- LOGO: Ukuran sedikit diperbesar -->
    <h1 class="flex items-center text-2xl font-bold tracking-tight">
        <img src="{{ asset('img/logo_awan.png') }}" alt="Logo" class="h-10 w-auto mr-2">
        <span class="text-white">Di</span><span class="gold">Nusantara</span>
    </h1>

    <!-- MENU: Font diperbesar (text-lg) dan Gap ditambah (gap-14) -->
    <div class="hidden md:flex gap-14 text-gray-300 text-lg font-medium tracking-wide">
        <a href="#" class="hover:text-white transition-colors">Home</a>
        <a href="#" class="hover:text-white transition-colors">Artists</a>
        <a href="#" class="hover:text-white transition-colors">About</a>
        <a href="#" class="hover:text-white transition-colors">Artworks</a>
        <a href="#" class="hover:text-white transition-colors">Categories</a>
    </div>

    <!-- KANAN: Search bar dibuat lebih lebar agar tidak terlihat 'pelit' space -->
    <div class="flex items-center gap-6">
        <input type="text" placeholder="Search..."
            class="bg-white/10 px-6 py-2 rounded-full text-base outline-none w-48 focus:w-64 transition-all duration-300">

        <a href="{{ route('login') }}" class="btn-animated px-6 py-2 rounded-full text-base font-semibold inline-block">
            Sign Up
        </a>
    </div>

</nav>


    
    <!-- HERO -->
    <section class="flex flex-col md:flex-row items-center px-12 pt-32 gap-10">

       <!-- Tambahkan ml-16 untuk pergeseran yang cukup terasa -->
<div class="md:w-1/2 space-y-6 ml-16">

    <h1 class="text-5xl leading-tight">
        <span class="gold">Discover Timeless Art,</span><br>
        Curated for You
    </h1>

    <p class="text-gray-300 max-w-md">
        Explore a refined collection of artworks from talented artists 
        around the world. Each piece tells a story.
    </p>

    <button class="btn-animated px-6 py-3 rounded-full font-semibold">
        Discover Art
    </button>

</div>

        <!-- RIGHT IMAGES -->

        <div class="md:w-1/2 flex justify-center relative">

    <!-- BLUR -->
    <img 
        src="{{ asset('img/image_5.png') }}" 
        class="absolute w-[420px] opacity-20 blur-3xl -z-10"
    >

    <div class="flex gap-6">

        <!-- LEFT COLUMN -->
        <div class="flex flex-col gap-6">
            
            <img 
                src="{{ asset('img/image_8.png') }}" 
                class="art-card w-52 h-72 object-cover object-[20%_30%]
                rounded-tl-[30px] rounded-br-[30px]
                rounded-tr-lg rounded-bl-md"
            >

            <img 
                src="{{ asset('img/image_10.png') }}"  
                class="art-card w-52 h-52 object-cover object-[20%_30%]
                rounded-tr-[40px] rounded-tl-[10px]
                rounded-br-[10px] rounded-bl-[10px]"
            >

        </div>

       <!-- MIDDLE COLUMN (Sebagai acuan tinggi h-52) -->

        <div class="flex flex-col gap-6 mt-16">
            <img 
                src="{{ asset('img/image_9.png') }}" 
                class="art-card w-52 h-52 object-cover
                rounded-tr-[30px] rounded-tl-[10px]
                rounded-br-[10px] rounded-bl-[40px]"
            >

            <img 
                src="{{ asset('img/image_11.png') }}" 
                class="art-card w-52 h-52 object-cover object-[20%_30%]
                rounded-2xl"
            >
        </div>

        <!-- RIGHT COLUMN -->
        <!-- Ganti 'justify-center' menjadi 'justify-end' agar nempel ke bawah sejajar image_11 -->
        <div class="flex flex-col justify-end">
    <img 
        src="{{ asset('img/image_7.png') }}" 
        class="art-card w-52 h-52 object-cover 
               rounded-tr-[40px] rounded-br-[40px] 
               rounded-2xl mb-5" 
    >
</div>
     </div>

 </div>
</section>

<!-- ABOUT SECTION -->
<section class="px-6 md:px-12 py-32 bg-black/30 backdrop-blur-sm">

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-start">

        <!-- LEFT COLUMN (IMAGE + VISION) -->
        <div class="space-y-20">

            <!-- IMAGE -->
            <img 
                src="img/image_10.png" 
                alt="Art Portrait" 
                class="w-full max-w-md rounded-3xl shadow-2xl object-cover"
            >

            <!-- VISION (UNDER IMAGE) -->
            <div class="space-y-6">

                <h2 class="text-4xl md:text-5xl font-serif leading-tight">
                    <span class="text-white">Our</span>
                    <span class="gold">Vision</span>
                </h2>

                <h3 class="text-3xl italic gold">
                    We believe art is more than decoration.
                </h3>

                <p class="text-xl text-gray-300 leading-relaxed">
                    Every brushstroke, texture, and color carries meaning,
                    memory, and human expression. DiNusantara exists to create
                    a space where artworks can be appreciated beyond endless
                    scrolling and fleeting trends.
                </p>

                <p class="text-gray-500 text-sm leading-relaxed">
                    Tiny jab at modern internet culture there. Humanity turned
                    masterpieces into content thumbnails. Remarkable species.
                </p>

            </div>

        </div>

        <!-- RIGHT COLUMN (ABOUT ONLY) -->
        <div class="space-y-6">

            <h4 class="text-sm uppercase tracking-[0.3em] text-gray-400">
                About Us
            </h4>

            <h2 class="text-4xl md:text-6xl font-serif leading-tight">
                <span class="text-white block">
                    Art deserves to be felt
                </span>
                <span class="gold block mt-2">
                    not just seen
                </span>
            </h2>

            <p class="max-w-xl text-lg leading-relaxed text-gray-300">
                DiNusantara is a curated digital space where timeless artworks
                and emerging artists come together through visual storytelling,
                creativity, and emotion.
            </p>

        </div>

    </div>

</section>


<!-- WHY WE CREATED SECTION -->
<section class="px-6 md:px-12 py-32">

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-start">

        <!-- TEXT -->
        <div class="space-y-6 pt-4">
            
            <h2 class="text-4xl md:text-5xl font-serif leading-tight">
                <span class="text-white block">
                    Why We Created
                </span>

                <span class="gold block mt-2">
                    DiNusantara
                </span>
            </h2>

            <p class="text-gray-300 leading-relaxed max-w-xl">
                DiNusantara was created to give artists a space where
                creativity, storytelling, and timeless expression can be
                truly appreciated.
            </p>

        </div>

        <!-- IMAGE -->
        <div class="flex justify-center md:justify-end">
            <img 
                src="{{ asset('img/image_0.png') }}" 
                alt="Art Illustration"
                class="w-full max-w-sm aspect-[4/5] object-cover rounded-3xl shadow-2xl"
            >
        </div>

    </div>

</section>

     <!-- artis -->

<section class="py-24 px-12 bg-black">
    <div class="max-w-6xl mx-auto text-left mb-16 space-y-4">
        <h2 class="text-4xl md:text-5xl font-serif">
            <span class="text-white">Meet the</span> <span class="text-[#A68A56]">Visionaries</span>
        </h2>
        <h3 class="text-[#D4AF37] text-lg font-medium italic">Souls Behind The Canvas</h3>
        <p class="text-gray-400 max-w-3xl leading-relaxed text-sm">
            Art is a silent language that speaks to the soul. Discover the unique perspectives and 
            profound passions of the creators who transform raw emotion into timeless visual narratives.
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

        <div class="relative group cursor-pointer">
            <img src="{{ asset('img/pablopicaso.png') }}" 
                 class="w-full aspect-square object-cover rounded-[2.5rem] shadow-xl transition-all duration-500 group-hover:scale-105">
            
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out flex flex-col overflow-hidden rounded-[2.5rem] bg-white scale-95 group-hover:scale-100 z-20 shadow-2xl">
                <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/image_5.png') }}');">
                    <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-md">
                        <img src="{{ asset('img/pablobulat.png') }}" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="h-3/5 pt-10 px-6 pb-6 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-black uppercase tracking-tight">Pablo Picasso</h4>
                        <p class="text-[11px] text-gray-500 leading-tight mt-1">
                            Pioneer of Cubism and one of the most influential artists of the 20th century.
                        </p>
                        <p class="text-[11px] text-[#c5a47e] mt-2 font-semibold">Spanish Artist</p>
                    </div>
                    <div class="flex justify-between items-end border-t border-gray-100 pt-4">
                        <span class="text-[10px] text-gray-400">Active Since 1894</span>
                        <a href="#" class="text-xs font-bold text-black flex items-center gap-1 hover:underline">Details <span class="text-lg">></span></a>
                    </div>
                </div>
            </div>
        </div>    

        <div class="relative group cursor-pointer">
            <img src="{{ asset('img/susana.png') }}" 
                 class="w-full aspect-square object-cover rounded-[2.5rem] shadow-xl transition-all duration-500 group-hover:scale-105">
            
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out flex flex-col overflow-hidden rounded-[2.5rem] bg-white scale-95 group-hover:scale-100 z-20 shadow-2xl">
                <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/image_5.png') }}');">
                    <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-md">
                        <img src="{{ asset('img/susanabulat.png') }}" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="h-3/5 pt-10 px-6 pb-6 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-black uppercase tracking-tight">Susana</h4>
                        <p class="text-[11px] text-gray-500 leading-tight mt-1">
                            Capturing the essence of human emotion through soft, contemporary strokes.
                        </p>
                        <p class="text-[11px] text-[#c5a47e] mt-2 font-semibold">Indonesian Artist</p>
                    </div>
                    <div class="flex justify-between items-end border-t border-gray-100 pt-4">
                        <span class="text-[10px] text-gray-400">Active Since 2010</span>
                        <a href="#" class="text-xs font-bold text-black flex items-center gap-1 hover:underline">Details <span class="text-lg">></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative group cursor-pointer">
            <img src="{{ asset('img/basuki.png') }}" 
                 class="w-full aspect-square object-cover rounded-[2.5rem] shadow-xl transition-all duration-500 group-hover:scale-105">
            
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out flex flex-col overflow-hidden rounded-[2.5rem] bg-white scale-95 group-hover:scale-100 z-20 shadow-2xl">
                <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/image_5.png') }}');">
                    <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-md">
                        <img src="{{ asset('img/basukibulat.png') }}" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="h-3/5 pt-10 px-6 pb-6 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-black uppercase tracking-tight">Basuki Abdullah</h4>
                        <p class="text-[11px] text-gray-500 leading-tight mt-1">
                            A legendary maestro known for realism and capturing natural beauty.
                        </p>
                        <p class="text-[11px] text-[#c5a47e] mt-2 font-semibold">Indonesian Artist</p>
                    </div>
                    <div class="flex justify-between items-end border-t border-gray-100 pt-4">
                        <span class="text-[10px] text-gray-400">Active Since 1930</span>
                        <a href="#" class="text-xs font-bold text-black flex items-center gap-1 hover:underline">Details <span class="text-lg">></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- STOP -->

<section
     class="px-4 py-24 bg-black/30 flex flex-col items-center overflow-hidden min-h-screen">
    
    <div class="text-center mb-12">
        <h2 class="text-5xl md:text-6xl font-serif text-white tracking-tight">
            Art <span class="text-[#c5a47e]">Works</span>
        </h2>
        <p class="text-gray-500 text-base mt-4 max-w-2xl mx-auto leading-relaxed">
            A curated collection of visual works showcasing creativity, style, and artistic expression.
        </p>
    </div>

    <div class="relative group flex flex-col items-center justify-center w-full max-w-7xl h-[800px]">
        
        <div class="flex flex-col space-y-[2px] transition-all duration-700 ease-in-out group-hover:space-y-8">
            
            <div class="flex -space-x-8 md:-space-x-10 transition-all duration-700 group-hover:space-x-8">
                <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform -rotate-[6deg] translate-y-6 origin-bottom group-hover:rotate-0 group-hover:translate-y-0 z-10">
                    <img src="img/merah.png" class="w-full h-full object-cover">
                </div>

                <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/10 transition-all duration-500 transform -translate-y-1 origin-bottom group-hover:translate-y-0 z-30">
                    <img src="img/runtuh.png" class="w-full h-full object-cover">
                </div>

                <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform rotate-[6deg] translate-y-6 origin-bottom group-hover:rotate-0 group-hover:translate-y-0 z-10">
                    <img src="img/sad.png" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="flex -space-x-8 md:-space-x-10 transition-all duration-700 group-hover:space-x-8">
                <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform -rotate-[4deg] translate-y-2 origin-top group-hover:rotate-0 group-hover:translate-y-0 z-10">
                    <img src="img/pria.png" class="w-full h-full object-cover">
                </div>
                <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform rotate-[1deg] -translate-y-2 origin-top group-hover:rotate-0 group-hover:translate-y-0 z-20">
                    <img src="img/syok.png" class="w-full h-full object-cover">
                </div>
                <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform rotate-[5deg] translate-y-2 origin-top group-hover:rotate-0 group-hover:translate-y-0 z-10">
                    <img src="img/renung.png" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>

    <div class="w-full max-w-6xl flex justify-end mt-8 pr-4">
        <a href="#" class="text-[#c5a47e] hover:text-white transition-all text-sm font-semibold tracking-[0.2em] flex items-center gap-3 italic">
            VIEW ALL <span class="text-2xl">></span>
        </a>
    </div>

</section>

<section class="px-12 py-20 bg-[#050505] overflow-hidden">

    <div class="max-w-6xl mx-auto">

        <!-- HEADER -->
        <div class="flex justify-between items-start mb-8">
            <div class="space-y-1">
                <h2 class="text-3xl font-serif gold">Categories</h2>
                <p class="text-gray-400 text-sm max-w-xs leading-relaxed">
                    Explore artworks by style, theme, and medium
                </p>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="relative w-full overflow-hidden">

            <div class="carousel-track flex gap-4 w-max">

                <!-- ITEM -->
                <div class="carousel-item">
                    <img src="img/renung.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Realism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/basuki.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Naturalism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/image_11.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Impressionism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/syok.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Expressionism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/merah.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Abstract</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/runtuh.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Kubism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/pria.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Fantasy</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/sad.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Surrealism</span>
                    </div>
                </div>

                <!-- DUPLICATE FOR SMOOTH LOOP -->
                <div class="carousel-item">
                    <img src="img/renung.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Realism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/basuki.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Naturalism</span>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/image_11.png" class="carousel-img">
                    <div class="carousel-overlay">
                        <span>Impressionism</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<style>
.carousel-track{
    animation: scrollCarousel 20s linear infinite;
}

.carousel-track:hover{
    animation-play-state: paused;
}

@keyframes scrollCarousel{
    from{
        transform: translateX(0);
    }
    to{
        transform: translateX(-50%);
    }
}

.carousel-item{
    min-width: 180px;
    height: 70px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.1);
    flex-shrink: 0;
    cursor: pointer;
}

.carousel-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.6;
    transition: transform 0.7s ease;
}

.carousel-item:hover .carousel-img{
    transform: scale(1.1);
}

.carousel-overlay{
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-overlay span{
    font-size: 11px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: white;
    font-family: serif;
}
</style>

<footer class="px-12 pt-20 pb-10 bg-[#d9d9d9] text-[#151515] font-sans">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
        
        <div class="space-y-6">
            <h1 class="flex items-center text-2xl font-bold">
                <img src="img/logo_awan.png" alt="Logo" class="h-8 w-auto mr-2">
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
                <li><a href="#" class="hover:text-[#c1a366] transition-colors">Home</a></li>
                <li><a href="#" class="hover:text-[#c1a366] transition-colors">Artist</a></li>
                <li><a href="#" class="hover:text-[#c1a366] transition-colors">ArtWorks</a></li>
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

<!-- SCRIPT -->
<script>
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 80) {
            navbar.classList.remove("navbar-solid");
            navbar.classList.add("navbar-transparent");
        } else {
            navbar.classList.add("navbar-solid");
            navbar.classList.remove("navbar-transparent");
        }
    });
</script>

</body>
</html>