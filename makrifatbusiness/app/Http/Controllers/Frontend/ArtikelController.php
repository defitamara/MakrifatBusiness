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
        $artikel = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
                   ->orderBy('id_artikel','desc')
                   ->paginate(3);
        $artikel2 = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
                   ->orderBy('id_artikel','asc')
                   ->where('id_artikel','!=',$id)
                   ->paginate(5);
        $kategori = KategoriArtikel::join('artikel', 'artikel.id_ktg', '=', 'kategori_artikel.id_ktg')
                   ->orderBy('kategori_artikel.id_ktg','asc')
                   ->get();
        return view('frontend.artikel', compact('artikel','artikel2','kategori'));
    }

    // Dipakai setelah ambil data dari database
    public function detail($id)
    {
        $artikel = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
                   ->orderBy('id_artikel','asc')
                   ->where('id_artikel',$id)
                   ->get();

        $artikel2 = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
                   ->orderBy('id_artikel','asc')
                   ->where('id_artikel','!=',$id)
                   ->paginate(5);

        $kategori = KategoriArtikel::join('artikel', 'artikel.id_ktg', '=', 'kategori_artikel.id_ktg')
                    ->orderBy('kategori_artikel.id_ktg','asc')
                    ->get();


        $kategori2 = KategoriArtikel::join('artikel', 'artikel.id_ktg', '=', 'kategori_artikel.id_ktg')
                    ->orderBy('kategori_artikel.id_ktg','asc')
                    ->count();
        // Count belum berdasarkan tiap kategori
        
        // Model::where('column','value yg diinginkan')::count();

        return view('frontend.detail-artikel',compact('artikel','artikel2','kategori','kategori2'));
    }
}
