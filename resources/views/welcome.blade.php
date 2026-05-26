@extends('layouts.app')
@section('content')

    <section class="flex flex-col md:flex-row items-center px-12 pt-12 gap-10 bg-[#050505]">
        <div class="md:w-1/2 space-y-6 ml-16">
            <h1 class="text-5xl leading-tight text-white">
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

        <div class="md:w-1/2 flex justify-center relative">
            <img src="{{ asset('img/image_5.png') }}" class="absolute w-[420px] opacity-20 blur-3xl -z-10">
            <div class="flex gap-6">
                <div class="flex flex-col gap-6">
                    <img src="{{ asset('img/image_8.png') }}" class="art-card w-52 h-72 object-cover object-[20%_30%] rounded-tl-[30px] rounded-br-[30px] rounded-tr-lg rounded-bl-md">
                    <img src="{{ asset('img/image_10.png') }}" class="art-card w-52 h-52 object-cover object-[20%_30%] rounded-tr-[40px] rounded-tl-[10px] rounded-br-[10px] rounded-bl-[10px]">
                </div>
                <div class="flex flex-col gap-6 mt-16">
                    <img src="{{ asset('img/image_9.png') }}" class="art-card w-52 h-52 object-cover rounded-tr-[30px] rounded-tl-[10px] rounded-br-[10px] rounded-bl-[40px]">
                    <img src="{{ asset('img/image_11.png') }}" class="art-card w-52 h-52 object-cover object-[20%_30%] rounded-2xl">
                </div>
                <div class="flex flex-col justify-end">
                    <img src="{{ asset('img/image_7.png') }}" class="art-card w-52 h-52 object-cover rounded-tr-[40px] rounded-br-[40px] rounded-2xl mb-5">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="px-6 md:px-12 py-32 bg-[#050505] scroll-mt-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-start">
        <div class="space-y-20">
            <img src="{{ asset('img/image_10.png') }}" alt="Art Portrait" class="w-full max-w-md rounded-3xl shadow-2xl object-cover">
            <div class="space-y-6">
                <h2 class="text-4xl md:text-5xl font-serif leading-tight">
                    <span class="text-white">Our</span> <span class="gold">Vision</span>
                </h2>
                    <h3 class="text-3xl italic gold">We believe art is more than decoration.</h3>
                    <p class="text-xl text-gray-300 leading-relaxed">
                        Every brushstroke, texture, and color carries meaning, memory, and human expression. DiNusantara exists to create a space where artworks can be appreciated beyond endless scrolling and fleeting trends.
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Tiny jibe at modern internet culture there. Humanity turned masterpieces into content thumbnails. Remarkable species.
                    </p>
                </div>
            </div>

            
            <div class="space-y-6">
                <h4 class="text-sm uppercase tracking-[0.3em] text-gray-400">About Us</h4>
                <h2 class="text-4xl md:text-6xl font-serif leading-tight">
                    <span class="text-white block">Art deserves to be felt</span>
                    <span class="gold block mt-2">not just seen</span>
                </h2>
                <p class="max-w-xl text-lg leading-relaxed text-gray-300">
                    DiNusantara is a curated digital space where timeless artworks and emerging artists come together through visual storytelling, creativity, and emotion.
                </p>
            </div>
        </div>
    </section>

    <section class="px-6 md:px-12 py-32 bg-[#050505]">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-start">
            <div class="space-y-6 pt-4">
                <h2 class="text-4xl md:text-5xl font-serif leading-tight">
                    <span class="text-white block">Why We Created</span>
                    <span class="gold block mt-2">DiNusantara</span>
                </h2>
                <p class="text-gray-300 leading-relaxed max-w-xl">
                    DiNusantara was created to give artists a space where creativity, storytelling, and timeless expression can be truly appreciated.
                </p>
            </div>
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('img/image_0.png') }}" alt="Art Illustration" class="w-full max-w-sm aspect-[4/5] object-cover rounded-3xl shadow-2xl">
            </div>
        </div>
    </section>

    <section class="py-24 px-12 bg-[#050505]">
        <div class="max-w-6xl mx-auto text-left mb-16 space-y-4">
            <h2 class="text-4xl md:text-5xl font-serif">
                <span class="text-white">Meet the</span> <span class="text-[#A68A56]">Visionaries</span>
            </h2>
            <h3 class="text-[#D4AF37] text-lg font-medium italic">Souls Behind The Canvas</h3>
            <p class="text-gray-400 max-w-3xl leading-relaxed text-sm">
                Art is a silent language that speaks to the soul. Discover the unique perspectives and profound passions of the creators who transform raw emotion into timeless visual narratives.
            </p>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
            <div class="relative group cursor-pointer">
                <img src="{{ asset('img/pablopicaso.png') }}" class="w-full aspect-square object-cover rounded-[2.5rem] shadow-xl transition-all duration-500 group-hover:scale-105">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out flex flex-col overflow-hidden rounded-[2.5rem] bg-white scale-95 group-hover:scale-100 z-20 shadow-2xl">
                    <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/image_5.png') }}');">
                        <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-md">
                            <img src="{{ asset('img/pablobulat.png') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="h-3/5 pt-10 px-6 pb-6 flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-black uppercase tracking-tight">Pablo Picasso</h4>
                            <p class="text-[11px] text-gray-500 leading-tight mt-1">Pioneer of Cubism and one of the most influential artists of the 20th century.</p>
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
                <img src="{{ asset('img/susana.png') }}" class="w-full aspect-square object-cover rounded-[2.5rem] shadow-xl transition-all duration-500 group-hover:scale-105">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out flex flex-col overflow-hidden rounded-[2.5rem] bg-white scale-95 group-hover:scale-100 z-20 shadow-2xl">
                    <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/image_5.png') }}');">
                        <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-md">
                            <img src="{{ asset('img/susanabulat.png') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="h-3/5 pt-10 px-6 pb-6 flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-black uppercase tracking-tight">Susana</h4>
                            <p class="text-[11px] text-gray-500 leading-tight mt-1">Capturing the essence of human emotion through soft, contemporary strokes.</p>
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
                <img src="{{ asset('img/basuki.png') }}" class="w-full aspect-square object-cover rounded-[2.5rem] shadow-xl transition-all duration-500 group-hover:scale-105">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out flex flex-col overflow-hidden rounded-[2.5rem] bg-white scale-95 group-hover:scale-100 z-20 shadow-2xl">
                    <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/image_5.png') }}');">
                        <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-md">
                            <img src="{{ asset('img/basukibulat.png') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="h-3/5 pt-10 px-6 pb-6 flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-black uppercase tracking-tight">Basuki Abdullah</h4>
                            <p class="text-[11px] text-gray-500 leading-tight mt-1">A legendary maestro known for realism and capturing natural beauty.</p>
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

    <section class="px-4 py-24 bg-[#050505] flex flex-col items-center overflow-hidden min-h-screen">
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
                        <img src="{{ asset('img/merah.png') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/10 transition-all duration-500 transform -translate-y-1 origin-bottom group-hover:translate-y-0 z-30">
                        <img src="{{ asset('img/runtuh.png') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform rotate-[6deg] translate-y-6 origin-bottom group-hover:rotate-0 group-hover:translate-y-0 z-10">
                        <img src="{{ asset('img/sad.png') }}" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="flex -space-x-8 md:-space-x-10 transition-all duration-700 group-hover:space-x-8">
                    <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform -rotate-[4deg] translate-y-2 origin-top group-hover:rotate-0 group-hover:translate-y-0 z-10">
                        <img src="{{ asset('img/pria.png') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform rotate-[1deg] -translate-y-2 origin-top group-hover:rotate-0 group-hover:translate-y-0 z-20">
                        <img src="{{ asset('img/syok.png') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="relative w-56 h-56 md:w-72 md:h-72 rounded-3xl overflow-hidden shadow-2xl border border-white/5 transition-all duration-500 transform rotate-[5deg] translate-y-2 origin-top group-hover:rotate-0 group-hover:translate-y-0 z-10">
                        <img src="{{ asset('img/renung.png') }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full max-w-6xl flex justify-end mt-8 pr-4">
            <a href="{{ route('artworks') }}" class="text-[#c5a47e] hover:text-white transition-all text-sm font-semibold tracking-[0.2em] flex items-center gap-3 italic">
                VIEW ALL <span class="text-2xl">></span>
            </a>
        </div>
    </section>

    <section class="px-12 py-20 bg-[#050505] overflow-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-start mb-8">
                <div class="space-y-1">
                    <h2 class="text-3xl font-serif gold">Categories</h2>
                    <p class="text-gray-400 text-sm max-w-xs leading-relaxed">Explore artworks by style, theme, and medium</p>
                </div>
            </div>

            <div class="relative w-full overflow-hidden">
                <div class="carousel-track flex gap-4 w-max">
                    <div class="carousel-item"><img src="{{ asset('img/renung.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Realism</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/basuki.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Naturalism</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/image_11.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Impressionism</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/syok.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Expressionism</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/merah.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Abstract</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/runtuh.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Kubism</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/pria.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Fantasy</span></div></div>
                    <div class="carousel-item"><img src="{{ asset('img/sad.png') }}" class="carousel-img"><div class="carousel-overlay"><span>Surrealism</span></div></div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .carousel-track{ animation: scrollCarousel 20s linear infinite; }
    .carousel-track:hover{ animation-play-state: paused; }
    @keyframes scrollCarousel{ from{ transform: translateX(0); } to{ transform: translateX(-50%); } }
    .carousel-item{ min-width: 180px; height: 70px; position: relative; overflow: hidden; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); flex-shrink: 0; cursor: pointer; }
    .carousel-img{ width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: transform 0.7s ease; }
    .carousel-item:hover .carousel-img{ transform: scale(1.1); }
    .carousel-overlay{ position: absolute; inset: 0; background: rgba(0,0,0,0.25); display: flex; align-items: center; justify-content: center; }
    .carousel-overlay span{ font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: white; font-family: serif; }
    </style>

@endsection