<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\TentangKami;
use App\Models\Tim;
use App\Models\Keunggulan;
use App\Models\Galeri;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tk = TentangKami::All();
        $tim = Tim::orderBy('id','desc')
                ->paginate(3);
        $keunggulan = Keunggulan::All();
        $galeri = Galeri::orderBy('id','desc')
                ->paginate(6);

        return view('frontend.tentangkami',compact('tk','tim','keunggulan','galeri'));
    }
}
