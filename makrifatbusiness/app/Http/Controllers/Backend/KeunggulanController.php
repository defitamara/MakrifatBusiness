<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Keunggulan;
use Illuminate\Support\Carbon; 
use File; 

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class KeunggulanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data_keunggulan = Keunggulan::all();
        return view('backend.data_keunggulan.index', compact('data_keunggulan'));
    }

    public function create()
    {
    }
    public function store(Request $request)
    {
       
    }
    
    public function edit($id_keunggulan)
    {
        $data_keunggulan = Keunggulan::where('id_keunggulan',$id_keunggulan)->first();
        return view('backend.data_keunggulan.edit',compact('data_keunggulan'));
    }

    public function update(Request $request, $id_keunggulan)
    {

        $gbr=$request->nama_gambar;
        
        if($request->has('gambar')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->gambar->move(public_path('data/data_keunggulan'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $data_simpan = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kompetensi_1' => $request->kompetensi_1,
            'kompetensi_2' => $request->kompetensi_2,
            'kompetensi_3' => $request->kompetensi_3,
            'persentase_1' => $request->persentase_1,
            'persentase_2' => $request->persentase_2,
            'persentase_3' => $request->persentase_3,
            'gambar' => $getimageName,


        ];

        DataKeunggulan::where('id_keunggulan', $id_keunggulan)->update($data_simpan);

        return redirect()->route('data_keunggulan.index')
                        ->with('success','Data keunggulan telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        
    }
}
