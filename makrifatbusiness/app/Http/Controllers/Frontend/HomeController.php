<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Banner;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\TentangKami;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::All();
        $artikel = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
            ->orderBy('id_artikel','desc')
            ->paginate(3);
        $tk = TentangKami::All();
        
        return view('frontend.home',compact('banner','artikel','tk'));
    }
}
