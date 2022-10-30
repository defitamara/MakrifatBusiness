<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Support\Carbon; 
use File; 

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $galeri = Galeri::all();
        return view('backend.data_galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('backend.data_galeri.create');
    }
    public function store(Request $request)
    {
        // rename image name or file name 
        // $getimageName = time().'.'.$request->gambar->getClientOriginalExtension();
        // $request->gambar->move(public_path('data/data_artikel/'), $getimageName);

        // mengambil file gambar dan mengubah namanya 
        if ($request->hasFile('gambar')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('gambar')->getClientOriginalExtension();
        }

        $data_simpan = [
            'judul' => $request->judul,
            'gambar' => $getimageName,
        ];

        Galeri::create($data_simpan);
        $upload_success = $request->file('gambar')->move(public_path('data/data_galeri/'), $getimageName);

        return redirect()->route('data_galeri.index')
        ->with('success','Galeri baru berhasil disimpan.')
        ->with('image',$getimageName);
    }
    
    public function edit($id)
    {
        $galeri = Galeri::where('id',$id)->first();
        return view('backend.data_galeri.edit',compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $gbr=$request->nama_gambar;
        
        if($request->has('gambar')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->gambar->move(public_path('data/data_galeri'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $data_simpan = [
            'judul' => $request->judul,
            'gambar' => $getimageName,
        ];

        Galeri::where('id', $id)->update($data_simpan);

        return redirect()->route('data_galeri.index')
                        ->with('success','Data galeri telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mengakses gambar di file dan menghapusnya
        $galeri = Galeri::where('id',$id)->first();
        File::delete('/data/data_galeri/'.$galeri->gambar);

        // Menghapus data dari database
        Galeri::where('id',$id)->delete();

        return redirect()->route('data_galeri.index')
                        ->with('success','Data galeri telah berhasil dihapus');
    }
}
