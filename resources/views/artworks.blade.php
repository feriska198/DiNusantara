@extends('layouts.app')

@section('content')
<style>
    .serif-title {
        font-family: 'Georgia', serif;
    }
    
    .art-card {
        transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.4s ease;
    }
    .art-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
    }
</style>

<div class="w-full py-16 px-6 md:px-16 lg:px-24">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">
        
        <div class="art-card flex flex-col bg-[#161616] rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full aspect-square overflow-hidden">
                <img src="{{ asset('img/art1.png') }}" alt="The Scream" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col space-y-2.5">
                <h3 class="serif-title text-xl font-light tracking-wide text-white">The Scream</h3>
                <p class="text-[11px] text-gray-400 font-light -mt-1">Edward Munch</p>
                
                <div class="flex items-center space-x-2 pt-0.5">
                    <div class="flex text-[#d2ab57] text-[10px] space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-[11px] text-gray-400 font-light">4.5/5 (120 Reviews)</span>
                </div>
                
                <div class="flex items-center space-x-3 pt-2 text-[11px] text-gray-300">
                    <span class="text-[9px] text-gray-400 border border-gray-600 px-2.5 py-0.5 rounded uppercase font-medium tracking-wider bg-transparent">Expressionism</span>
                    <span class="text-[#d2ab57] font-semibold">$1000</span>
                    <span class="text-gray-500 font-light">Limited Edition Print</span>
                </div>
            </div>
        </div>

        <div class="art-card flex flex-col bg-[#161616] rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full aspect-square overflow-hidden">
                <img src="{{ asset('img/art2.png') }}" alt="Jolyn Cujoh" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col space-y-2.5">
                <h3 class="serif-title text-xl font-light tracking-wide text-white">Jolyn Cujoh</h3>
                <p class="text-[11px] text-gray-400 font-light -mt-1">Mui</p>
                <div class="flex items-center space-x-2 pt-0.5">
                    <div class="flex text-[#d2ab57] text-[10px] space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-[11px] text-gray-400 font-light">4.5/5 (120 Reviews)</span>
                </div>
                <div class="flex items-center space-x-3 pt-2 text-[11px] text-gray-300">
                    <span class="text-[9px] text-gray-400 border border-gray-600 px-2.5 py-0.5 rounded uppercase font-medium tracking-wider bg-transparent">Modern Art</span>
                    <span class="text-[#d2ab57] font-semibold">$1000</span>
                    <span class="text-gray-500 font-light">Limited Edition Print</span>
                </div>
            </div>
        </div>

        <div class="art-card flex flex-col bg-[#161616] rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full aspect-square overflow-hidden">
                <img src="{{ asset('img/art3.png') }}" alt="Johnny Joestar" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col space-y-2.5">
                <h3 class="serif-title text-xl font-light tracking-wide text-white">Johnny Joestar</h3>
                <p class="text-[11px] text-gray-400 font-light -mt-1">Mui</p>
                <div class="flex items-center space-x-2 pt-0.5">
                    <div class="flex text-[#d2ab57] text-[10px] space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-[11px] text-gray-400 font-light">4.5/5 (120 Reviews)</span>
                </div>
                <div class="flex items-center space-x-3 pt-2 text-[11px] text-gray-300">
                    <span class="text-[9px] text-gray-400 border border-gray-600 px-2.5 py-0.5 rounded uppercase font-medium tracking-wider bg-transparent">Illustration</span>
                    <span class="text-[#d2ab57] font-semibold">$1000</span>
                    <span class="text-gray-500 font-light">Limited Edition Print</span>
                </div>
            </div>
        </div>

        <div class="art-card flex flex-col bg-[#161616] rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full aspect-square overflow-hidden">
                <img src="{{ asset('img/art4.png') }}" alt="The Starry Night" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col space-y-2.5">
                <h3 class="serif-title text-xl font-light tracking-wide text-white">The Starry Night</h3>
                <p class="text-[11px] text-gray-400 font-light -mt-1">Vincent Van Gogh</p>
                <div class="flex items-center space-x-2 pt-0.5">
                    <div class="flex text-[#d2ab57] text-[10px] space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-[11px] text-gray-400 font-light">4.5/5 (120 Reviews)</span>
                </div>
                <div class="flex items-center space-x-3 pt-2 text-[11px] text-gray-300">
                    <span class="text-[9px] text-gray-400 border border-gray-600 px-2.5 py-0.5 rounded uppercase font-medium tracking-wider bg-transparent">Surrealism</span>
                    <span class="text-[#d2ab57] font-semibold">$1000</span>
                    <span class="text-gray-500 font-light">Limited Edition Print</span>
                </div>
            </div>
        </div>

        <div class="art-card flex flex-col bg-[#161616] rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full aspect-square overflow-hidden">
                <img src="{{ asset('img/art5.png') }}" alt="Girl With Pearl Earrings" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col space-y-2.5">
                <h3 class="serif-title text-xl font-light tracking-wide text-white">Girl With Pearl Earrings</h3>
                <p class="text-[11px] text-gray-400 font-light -mt-1">Jan Vermeer Van Delft</p>
                <div class="flex items-center space-x-2 pt-0.5">
                    <div class="flex text-[#d2ab57] text-[10px] space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-[11px] text-gray-400 font-light">4.5/5 (120 Reviews)</span>
                </div>
                <div class="flex items-center space-x-3 pt-2 text-[11px] text-gray-300">
                    <span class="text-[9px] text-gray-400 border border-gray-600 px-2.5 py-0.5 rounded uppercase font-medium tracking-wider bg-transparent">Realism</span>
                    <span class="text-[#d2ab57] font-semibold">$1000</span>
                    <span class="text-gray-500 font-light">Limited Edition Print</span>
                </div>
            </div>
        </div>

        <div class="art-card flex flex-col bg-[#161616] rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full aspect-square overflow-hidden">
                <img src="{{ asset('img/art6.png') }}" alt="Mona Lisa" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col space-y-2.5">
                <h3 class="serif-title text-xl font-light tracking-wide text-white">Mona Lisa</h3>
                <p class="text-[11px] text-gray-400 font-light -mt-1">Leonardo Da Vinci</p>
                <div class="flex items-center space-x-2 pt-0.5">
                    <div class="flex text-[#d2ab57] text-[10px] space-x-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-[11px] text-gray-400 font-light">4.5/5 (120 Reviews)</span>
                </div>
                <div class="flex items-center space-x-3 pt-2 text-[11px] text-gray-300">
                    <span class="text-[9px] text-gray-400 border border-gray-600 px-2.5 py-0.5 rounded uppercase font-medium tracking-wider bg-transparent">Realism</span>
                    <span class="text-[#d2ab57] font-semibold">$1000</span>
                    <span class="text-gray-500 font-light">Limited Edition Print</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection