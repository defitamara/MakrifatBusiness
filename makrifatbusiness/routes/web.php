<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
#use Illuminate\Http\Request;
#use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.home');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');

Route::group(['namespace' => 'Backend'], function()
{
    // Route::resource('dashboard','DashboardController');
    Route::resource('artikel','ArtikelController');
    Route::get('/artikel/{id}/detail','ArtikelController@detail');
});
