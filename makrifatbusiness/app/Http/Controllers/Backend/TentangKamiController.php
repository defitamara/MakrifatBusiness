<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Support\Carbon; 
use File; 

class TentangKamiController extends Controller
{
    public function index()
    {
        $tk = TentangKami::all();
        return view('backend.data_tk.index', compact('tk'));
    }
    
    public function edit($id)
    {
        $tk = TentangKami::where('id',$id)->first();
        return view('backend.data_tk.edit',compact('tk'));
    }

    public function update(Request $request, $id)
    {
        $gbr=$request->nama_gambar;
        
        if($request->has('gambar')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->gambar->move(public_path('data/data_tk'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $foto=$request->nama_gambar2;
        
        if($request->has('gambar2')) {
            $getimageName2 = rand(11111, 99999) . '.' . $request->file('gambar2')->getClientOriginalExtension();
            $request->gambar2->move(public_path('data/data_tk'), $getimageName2);
        }else {
            $getimageName2 = $foto;
        }

        $data_simpan = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $getimageName,
            'foto_pemilik' => $getimageName2,
            'nama_pemilik' => $request->nama_pemilik,
            'jabatan' => $request->jabatan,
        ];

        TentangKami::where('id', $id)->update($data_simpan);

        return redirect()->route('data_tk.index')
                        ->with('success','Data tentang kami telah berhasil diperbarui');
    }

}
