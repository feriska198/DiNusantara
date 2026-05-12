<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - DiNusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700&family=Inter:wght@300;400;500;600&display=swap');

        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #1a1a1a; 
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .serif { font-family: 'Playfair Display', serif; }
        .rounded-custom { border-radius: 2.5rem; }
        
        .container-master {
            position: relative;
            width: 95%;
            max-width: 1000px;
            height: 650px;
            background: white;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
        }

        /* Wrapper untuk Form */
        .form-wrapper {
            position: absolute;
            width: 50%;
            height: 100%;
            transition: all 0.7s cubic-bezier(0.645, 0.045, 0.355, 1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            z-index: 1;
        }

        /* Wrapper untuk Gambar Slider */
        .overlay-slider {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            z-index: 10;
            transition: transform 0.7s cubic-bezier(0.645, 0.045, 0.355, 1);
            padding: 8px;
        }

        .bg-painting {
            background-image: url("{{ asset('img/sign.png') }}");
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            border-radius: 2.5rem;
            position: relative;
        }

        .overlay-soft {
            background: rgba(0, 0, 0, 0.2);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 2.5rem;
            color: white;
            text-align: center;
            padding: 40px;
        }

        /* Logika Geser */
        .container-master.active .overlay-slider {
            transform: translateX(-100%);
        }

        /* Style Form Asli Kamu */
        .input-custom {
            background-color: #ebeae6;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-signin {
            background-color: #ebeae6;
            color: #555;
            transition: all 0.3s;
        }

        /* Kontrol Visibilitas Konten Form */
        .content-signup { opacity: 0; pointer-events: none; transition: 0.5s; position: absolute; }
        .content-signin { opacity: 1; transition: 0.5s; position: relative; }
        
        .active .content-signup { opacity: 1; pointer-events: auto; position: relative; }
        .active .content-signin { opacity: 0; pointer-events: none; position: absolute; }

        /* Kontrol Teks di dalam Gambar */
        .text-to-signup { display: flex; flex-direction: column; align-items: center; }
        .text-to-signin { display: none; flex-direction: column; align-items: center; }
        
        .active .text-to-signup { display: none; }
        .active .text-to-signin { display: flex; }
    </style>
</head>
<body>

    <div class="container-master rounded-custom" id="mainContainer">
        
        <!-- SISI FORM -->
        <div class="form-wrapper" id="formWrapper" style="left: 0;">
            
            <!-- FORM SIGN IN (Hanya Form, Tombol Pindah Ada di Gambar) -->
            <div class="content-signin w-full flex flex-col items-center">
                <h2 class="serif text-[40px] text-[#333] mb-10">Sign In</h2>
                <div class="flex gap-5 mb-10">
                    <a href="#" class="w-14 h-14 flex items-center justify-center bg-[#f1f0ec] rounded-2xl text-2xl text-black hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-14 h-14 flex items-center justify-center bg-[#f1f0ec] rounded-2xl text-2xl text-black hover:scale-110 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-14 h-14 flex items-center justify-center bg-[#f1f0ec] rounded-2xl text-2xl text-black hover:scale-110 transition"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="w-14 h-14 flex items-center justify-center bg-[#f1f0ec] rounded-2xl text-2xl text-black hover:scale-110 transition"><i class="fab fa-google"></i></a>
                </div>
                <p class="text-[11px] text-gray-500 mb-8 uppercase tracking-[0.2em] font-semibold">Sign In With Email & Password</p>
                <form action="#" class="w-full max-w-sm space-y-5 flex flex-col items-center">
                    <input type="email" placeholder="Enter Email" class="input-custom w-full px-6 py-4 rounded-2xl outline-none text-sm">
                    <input type="password" placeholder="Enter Password" class="input-custom w-full px-6 py-4 rounded-2xl outline-none text-sm">
                    <a href="#" class="text-[12px] text-gray-500 font-medium hover:text-black transition">Forget Password?</a>
                    <button type="submit" class="btn-signin w-3/5 py-4 font-bold rounded-2xl shadow-sm">Sign In</button>
                </form>
            </div>

            <!-- FORM SIGN UP -->
            <div class="content-signup w-full flex flex-col items-center">
                <h2 class="serif text-[36px] text-[#333] mb-6">Create An Account</h2>
                <div class="flex gap-4 mb-6">
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-[#f1f0ec] rounded-xl text-xl text-black hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-[#f1f0ec] rounded-xl text-xl text-black hover:scale-110 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-[#f1f0ec] rounded-xl text-xl text-black hover:scale-110 transition"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-[#f1f0ec] rounded-xl text-xl text-black hover:scale-110 transition"><i class="fab fa-google"></i></a>
                </div>
                <p class="text-[10px] text-gray-500 mb-6 uppercase tracking-widest font-bold">Register With Email</p>
                <form action="#" class="w-full max-w-sm space-y-4 flex flex-col items-center">
                    <input type="text" placeholder="Name" class="input-custom w-full px-6 py-4 rounded-2xl outline-none text-sm">
                    <input type="email" placeholder="Enter Email" class="input-custom w-full px-6 py-4 rounded-2xl outline-none text-sm">
                    <input type="password" placeholder="Enter Password" class="input-custom w-full px-6 py-4 rounded-2xl outline-none text-sm">
                    <button type="submit" class="btn-signin w-3/5 py-4 mt-2 font-bold rounded-2xl shadow-sm">Sign Up</button>
                </form>
            </div>

        </div>

        <!-- SISI GAMBAR (Tombol Pindah Ada Di Sini) -->
        <div class="overlay-slider" id="overlaySlider">
            <div class="bg-painting">
                <div class="overlay-soft">
                    
                    <!-- Muncul saat di halaman Sign In: Tombol untuk ke Sign Up -->
                    <div class="text-to-signup">
                        <h1 class="serif text-5xl md:text-6xl mb-4 italic">Hello World</h1>
                        <p class="text-sm font-medium tracking-wide mb-10 opacity-90">Sign Up Now & Enjoy Our Site</p>
                        <button onclick="toggleAuth()" class="px-12 py-3 border-2 border-white/60 rounded-2xl text-lg font-medium hover:bg-white hover:text-black transition duration-500 backdrop-blur-sm">
                            Sign Up
                        </button>
                    </div>

                    <!-- Muncul saat di halaman Sign Up: Tombol untuk ke Sign In -->
                    <div class="text-to-signin">
                        <h1 class="serif text-4xl mb-4 italic">Welcome To DiNusantara</h1>
                        <p class="text-sm mb-10 opacity-90">Already have an account?</p>
                        <button onclick="toggleAuth()" class="px-12 py-3 border-2 border-white/60 rounded-2xl text-lg font-medium hover:bg-white hover:text-black transition duration-500 backdrop-blur-sm">
                            Sign In
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        const container = document.getElementById('mainContainer');
        const formWrapper = document.getElementById('formWrapper');

        function toggleAuth() {
            container.classList.toggle('active');
            
            // Geser posisi formWrapper agar sejajar dengan perpindahan gambar
            if(container.classList.contains('active')) {
                formWrapper.style.left = "50%";
            } else {
                formWrapper.style.left = "0";
            }
        }
    </script>
</body>
</html>