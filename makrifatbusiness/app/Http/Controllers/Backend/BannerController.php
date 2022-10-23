<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Carbon; 
use File; 

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('backend.data_banner.index', compact('banner'));
    }

    public function create()
    {
        return view('backend.data_banner.create');
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
            'judul_kecil' => $request->judul_kecil,
            'judul_besar' => $request->judul_besar,
            'gambar' => $getimageName,
        ];

        Banner::create($data_simpan);
        $upload_success = $request->file('gambar')->move(public_path('data/data_banner/'), $getimageName);

        return redirect()->route('data_banner.index')
        ->with('success','Banner baru berhasil disimpan.')
        ->with('image',$getimageName);
    }
    
    public function edit($id)
    {
        $banner = Banner::where('id',$id)->first();
        return view('backend.data_banner.edit',compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $gbr=$request->nama_gambar;
        
        if($request->has('gambar')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->gambar->move(public_path('data/data_banner'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $data_simpan = [
            'judul_kecil' => $request->judul_kecil,
            'judul_besar' => $request->judul_besar,
            'gambar' => $getimageName,
        ];

        Banner::where('id', $id)->update($data_simpan);

        return redirect()->route('data_banner.index')
                        ->with('success','Data banner telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mengakses gambar di file dan menghapusnya
        $banner = Banner::where('id',$id)->first();
        File::delete('/data/data_banner/'.$banner->gambar);

        // Menghapus data dari database
        Banner::where('id',$id)->delete();

        return redirect()->route('data_banner.index')
                        ->with('success','Data banner telah berhasil dihapus');
    }
}
