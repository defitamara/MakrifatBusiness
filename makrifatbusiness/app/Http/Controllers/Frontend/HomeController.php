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
use App\Models\Pelayanan;
use App\Models\DataYayasan;
use App\Models\Tim;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::All();
        $artikel = Artikel::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
            ->orderBy('id_artikel','desc')
            ->paginate(3);
        $tk = TentangKami::All();
        $pelayanan = Pelayanan::all();
        $data_yayasan1 =  DataYayasan::all()
                        ->where('id','=',1);
        $data_yayasan2 =  DataYayasan::all()
                        ->where('id','=',2);
        $data_yayasan3 =  DataYayasan::all()
                        ->where('id','=',3);
        $data_yayasan4 =  DataYayasan::all()
                        ->where('id','=',4);
        $tim = Tim::All();

        return view('frontend.home',compact('banner','artikel','tk','pelayanan',
        'data_yayasan1','data_yayasan2','data_yayasan3','data_yayasan4','tim'));
    }
}
