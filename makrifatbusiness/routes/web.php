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
    Route::resource('/user', 'DataUserAdminController');

    // CRUD Data Artikel
    Route::resource('data_artikel','ArtikelController');
    Route::get('/data_artikel/{id}/detail','ArtikelController@detail');
    Route::POST('/data_artikel/store','ArtikelController@store')->name('data_artikel.store');
    Route::match(['get','post'], '/data_artikel/edit/{id}','ArtikelController@edit');
    Route::GET('/data_artikel/delete/{id}','ArtikelController@delete');
    Route::get('/cetak_pdf/data_artikel','ArtikelController@cetakartikel')->name('data_artikel.cetak_pdf');
   
});

Route::group(['namespace' => 'Frontend'], function()
{

    // Route::resource('dashboard','DashboardController');
    Route::resource('/frontend/artikel','ArtikelController');
    
    Route::resource('/frontend/detail-artikel','DetailArtikelController');
    // Route::get('frontend/artikel/{id}/detail','ArtikelController@detail');
});
