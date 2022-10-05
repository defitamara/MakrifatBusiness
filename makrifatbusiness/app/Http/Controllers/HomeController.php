<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $id = Auth::id();
        $user = User::where('id',$id)->first();

        $role = $user->is_admin;

        if ($role == 1) {
            return redirect()->route('dashboard');
        }
        elseif ($role  == 2) {
            return redirect()->route('dbadmin');
        }else{
            return view('home');
        }
    }

    // Dashboard Super Admin
    public function dashboard()
    {
        $id = Auth::id();
        $user = User::where('id',$id)->first();

        $role = $user->is_admin;

        if ($role == 1) {
            return view('backend.dashboard');
        }
        elseif ($role  == 2) {
            return redirect()->route('dbadmin');
        }
    }
}
