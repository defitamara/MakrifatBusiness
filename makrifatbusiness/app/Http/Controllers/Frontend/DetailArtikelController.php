<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Support\Carbon; 
use File; 

class DetailArtikelController extends Controller
{
    public function index()
    {
        return view('frontend.detail-artikel');
    }
}
