<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Ini adalah data testing lukisan
        $lukisan = [
            ['judul' => 'Bintang Malam', 'artis' => 'Van Gogh', 'gaya' => 'Impressionism'],
            ['judul' => 'Persisir Pantai', 'artis' => 'Raden Saleh', 'gaya' => 'Realism'],
            ['judul' => 'Abstrak Merah', 'artis' => 'Eonii', 'gaya' => 'Abstract']
        ];

        return view('testing_gallery', compact('lukisan'));
    }
}