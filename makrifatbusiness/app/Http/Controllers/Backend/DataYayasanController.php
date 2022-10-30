<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DataYayasan;
use Illuminate\Support\Carbon; 
use File; 

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DataYayasanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data_yayasan = DataYayasan::all();
        return view('backend.data_yayasan.index', compact('data_yayasan'));
    }

    public function create()
    {
    }
    public function store(Request $request)
    {
       
    }
    
    public function edit($id)
    {
        $data_yayasan = DataYayasan::where('id',$id)->first();
        return view('backend.data_yayasan.edit',compact('data_yayasan'));
    }

    public function update(Request $request, $id)
    {

        $data_simpan = [
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
        ];

        DataYayasan::where('id', $id)->update($data_simpan);

        return redirect()->route('data_yayasan.index')
                        ->with('success','Data yayasan telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        
    }
}
