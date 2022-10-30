<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Tim;
use Illuminate\Support\Carbon; 
use File; 

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tim = Tim::all();
        return view('backend.data_tim.index', compact('tim'));
    }

    public function create()
    {
        return view('backend.data_tim.create');
    }
    public function store(Request $request)
    {
        // rename image name or file name 
        // $getimageName = time().'.'.$request->gambar->getClientOriginalExtension();
        // $request->gambar->move(public_path('data/data_artikel/'), $getimageName);

        // mengambil file gambar dan mengubah namanya 
        if ($request->hasFile('foto')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('foto')->getClientOriginalExtension();
        }

        $data_simpan = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $getimageName,
            'link_facebook' => $request->link_facebook,
            'link_twitter' => $request->link_twitter,
            'link_instagram' => $request->link_instagram,
        ];

        Tim::create($data_simpan);
        $upload_success = $request->file('foto')->move(public_path('data/data_tim/'), $getimageName);

        return redirect()->route('data_tim.index')
        ->with('success','Tim baru berhasil disimpan.')
        ->with('image',$getimageName);
    }
    
    public function edit($id)
    {
        $tim = Tim::where('id',$id)->first();
        return view('backend.data_tim.edit',compact('tim'));
    }

    public function update(Request $request, $id)
    {
        $gbr=$request->nama_foto;
        
        if($request->has('foto')) {
            $getimageName = rand(11111, 99999) . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->foto->move(public_path('data/data_tim'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $data_simpan = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $getimageName,
            'link_facebook' => $request->link_facebook,
            'link_twitter' => $request->link_twitter,
            'link_instagram' => $request->link_instagram,
        ];

        Tim::where('id', $id)->update($data_simpan);

        return redirect()->route('data_tim.index')
                        ->with('success','Data tim telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mengakses gambar di file dan menghapusnya
        $tim = Tim::where('id',$id)->first();
        File::delete('/data/data_tim/'.$tim->foto);

        // Menghapus data dari database
        Tim::where('id',$id)->delete();

        return redirect()->route('data_tim.index')
                        ->with('success','Data tim telah berhasil dihapus');
    }
}
