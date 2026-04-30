<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiNusantara | Art Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: url("{{ asset('img/image_5.png') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Georgia', serif;
        }

        .overlay {
            background: rgba(0,0,0,0.4);
            min-height: 100vh;
        }

        .gold {
            color: #c6a96b;
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
    <nav id="navbar" class="fixed w-full top-0 z-50 flex justify-between items-center px-10 py-6 navbar-solid">

        <h1 class="flex items-center gap-2 text-xl font-bold">
            <!-- logo_awam-img -->
            <img src="{{ asset('img/logo_awan.png') }}" alt="Logo" class="logo-img h-8 w-auto" style="background: transparent;">
            <span class="text-white">Di</span><span class="gold"> Nusantara</span>
        </h1>

        <div class="hidden md:flex gap-10 text-gray-300 text-[15px]">
            <a href="#" class="hover:text-white">Home</a>
            <a href="#" class="hover:text-white">Artists</a>
            <a href="#" class="hover:text-white">Artworks</a>
            <a href="#" class="hover:text-white">Categories</a>
        </div>

        <div class="flex items-center gap-4">
            <input type="text" placeholder="Search..."
                class="bg-white/10 px-4 py-1 rounded-full text-sm outline-none">

            <button class="btn-animated px-4 py-1 rounded-full">
                Sign Up
            </button>
        </div>

    </nav>

    <!-- HERO -->
    <section class="flex flex-col md:flex-row items-center px-12 pt-32 gap-10">

        <!-- LEFT -->
        <div class="md:w-1/2 space-y-6">

            <h1 class="text-5xl leading-tight">
                <span class="gold">Discover Timeless Art,</span><br>
                Curated for You
            </h1>

            <p class="text-gray-300 max-w-md">
                Explore a refined collection of artworks from talented artists 
                around the world. Each piece tells a story.
            </p>

            <button class="btn-animated px-6 py-3 rounded-lg font-semibold">
                Discover Art
            </button>

        </div>

        <!-- RIGHT IMAGES -->
        <div class="md:w-1/2 flex justify-center relative">

                <img src="{{ asset('img/image_5.png') }}" 
                    class="absolute w-[400px] opacity-20 blur-2xl -z-10">

                <div class="flex gap-6">

                <div class="flex flex-col gap-6">
                    <img src="{{ asset('img/image_8.png') }}" 
                        class="art-card w-52 h-70 object-cover object-[20%_30%] rounded-tl-[30px] rounded-br-[30px] rounded-tr-lg rounded-bl-md">

                    <img src="{{ asset('img/image_10.png') }}"  
                        class="art-card w-44 h-51 object-cover object-[20%_30%] rounded-tr-[40px] rounded-tl-[10px] rounded-br-[10px] rounded-bl-[10px]">
                </div>

                <div class="flex flex-col gap-6 mt-16">
                    <img src="{{ asset('img/image_9.png') }}" 
                        class="art-card w-44 h-52 object-cover rounded-tr-[30px] rounded-tl-[10px] rounded-br-[10px] rounded-[40px]">

                    <img src="{{ asset('img/image_11.png') }}" 
                        class="art-card w-52 h-52 object-cover object-[20%_30%] rounded-2xl">
                </div>

                <div class="flex flex-col justify-center">
                    <img src="{{ asset('img/image_7.png') }}" 
                        class="art-card w-52 h-80 object-cover rounded-tr-[40px] rounded-br-[40px] rounded-2xl">
                </div>

            </div>
        </div>

    </section>

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