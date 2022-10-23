<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;

class DataUserAdminController extends Controller
{
    public function index()
    {
        $data = User::join('admin', 'admin.id', '=', 'users.id')
                   ->orderBy('id_admin','asc')
                   ->get();
        return view('backend.user.index', compact('data'));
    }
    // public function index()
    // {
    //     $data = User:: where('is_admin','=',1)
    //         ->get();

    //     return view('backend.user.index',compact('data'));
    // }

    public function cetak_pdf()
    {
        $data_admin = User:: where('is_admin','=',1)
        ->get();
    	$pdf = PDF::loadview('backend/user/cetak_pdf',['data_admin'=>$data_admin]);
    	return view('backend.user.cetak_pdf',compact('data_admin'));
    }

    public function create()
    {


        $data_admin = User:: where('is_admin','=',1)
        ->get();

        return view('backend.user.create',compact('data_admin'));
    }

    public function store(Request $request)
    {

        $nama = $request->nama;  

        $role = 1;
        $user = User::create([
            'name' =>$nama,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $role,

        ]);

        $id_user = $user->id;

        $message = [
            'required' => ':attribute wajib diisi!!!',
            'min' => ':attribute harus diisi minimal 15 huruf!!!',
            'max' => ':attribute URL harus diisi maksimal 100 huruf!!!',
            'mimes' => ':attribute harus berupa gambar dengan format (JPEG, PNG, dan SVG)',
        ];

        $validator = FacadesValidator::make($request->all(),[
            'email' => 'required|string|max:40',
        ], $message)->validate();


        $data_simpan = [
            'id' => $id_user,
        ];

        AdminUser::where('nama', $nama)->update($data_simpan);

        return redirect()->route('user.index')
                        ->with('success','Data Peternak baru telah berhasil disimpan');
    }


    public function edit($id)
    {


    }

    public function update(Request $request, $id)
    { 

        
    }

    public function ubahpw($id)
    {
        
    }

    public function ubahpassword(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        $admin = User::where('id',$id)->delete();

        // Mengubah id di data staf menjadi 0, artinya tidak punya akun
        $hapusId = 0;
        $data_simpan = [
            'id' => $hapusId,
        ];

        AdminUser::where('id', $id)->update($data_simpan);

        // $petugasuser= DokterUser::where('id',$id)->delete();
        return redirect()->route('user.index')
                        ->with('success','Data admin telah berhasil dihapus');
    }
}