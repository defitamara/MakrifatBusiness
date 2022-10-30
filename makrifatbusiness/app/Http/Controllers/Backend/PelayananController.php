<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Pelayanan;
use Illuminate\Support\Carbon; 
use File; 

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PelayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pelayanan = Pelayanan::all();
        return view('backend.data_pelayanan.index', compact('pelayanan'));
    }

    public function create()
    {
        return view('backend.data_pelayanan.create');
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

        Pelayanan::create($data_simpan);
        $upload_success = $request->file('gambar')->move(public_path('data/data_pelayanan/'), $getimageName);

        return redirect()->route('data_pelayanan.index')
        ->with('success','Pelayanan baru berhasil disimpan.')
        ->with('image',$getimageName);
    }
    
    public function edit($id)
    {
        $pelayanan = Pelayanan::where('id',$id)->first();
        return view('backend.data_pelayanan.edit',compact('pelayanan'));
    }

    public function update(Request $request, $id)
    {
        $gbr=$request->nama_gambar;
        
        if($request->has('gambar')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->gambar->move(public_path('data/data_pelayanan'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $data_simpan = [
            'judul' => $request->judul,
            'gambar' => $getimageName,
        ];

        Pelayanan::where('id', $id)->update($data_simpan);

        return redirect()->route('data_pelayanan.index')
                        ->with('success','Data pelayanan telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mengakses gambar di file dan menghapusnya
        $pelayanan = Pelayanan::where('id',$id)->first();
        File::delete('/data/data_pelayanan/'.$pelayanan->gambar);

        // Menghapus data dari database
        Pelayanan::where('id',$id)->delete();

        return redirect()->route('data_pelayanan.index')
                        ->with('success','Data pelayanan telah berhasil dihapus');
    }
}
