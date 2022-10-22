<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Support\Carbon; 
use File; 

class ArtikelController extends Controller
{
    public function index()
    {
        // $artikel = Artikel::all();
        $artikel = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
                   ->orderBy('id_artikel','asc')
                   ->get();
        return view('frontend.artikel', compact('artikel'));
    }

    // Dipakai setelah ambil data dari database
    // public function detail($id)
    // {
    //     $artikel = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
    //                ->orderBy('id_artikel','asc')
    //                ->where('id_artikel',$id)
    //                ->get();
    //     return view('frontend.detail-artikel',compact('artikel'));
    // }
}
