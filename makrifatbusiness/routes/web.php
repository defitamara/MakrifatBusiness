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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('frontend.home');
// });



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');

Route::group(['namespace' => 'Backend'], function()
{
    // Route::resource('dashboard','DashboardController');

    // CRUD Data User Admin
    Route::resource('/data_admin', 'DataUserAdminController');
    Route::POST('/data_admin/store','DataUserAdminController@store')->name('data_user.store');
    Route::match(['get','post'], '/data_admin/edit/{id}','DataUserAdminController@edit');
    Route::GET('/data_admin/destroy/{id}','DataUserAdminController@destroy');
    Route::match(['get','post'], '/data_admin/ubahpw/{id}','DataUserAdminController@ubahpw')->name('data_admin.ubahpw');
    Route::PUT('/data_admin/ubahpw/{id}/simpan','DataUserAdminController@ubahpassword')->name('data_admin.ubahpassword');

    // CRUD Data Artikel
    Route::resource('data_artikel','ArtikelController');
    Route::get('/data_artikel/{id}/detail','ArtikelController@detail');
    Route::POST('/data_artikel/store','ArtikelController@store')->name('data_artikel.store');
    Route::match(['get','post'], '/data_artikel/edit/{id}','ArtikelController@edit');
    Route::GET('/data_artikel/destroy/{id}','ArtikelController@destroy');
    Route::get('/cetak_pdf/data_artikel','ArtikelController@cetak_pdf')->name('data_artikel.cetak_pdf');

    // CRUD Data Banner
    Route::resource('data_banner','BannerController');
    Route::POST('/data_banner/store','BannerController@store')->name('data_banner.store');
    Route::match(['get','post'], '/data_banner/edit/{id}','BannerController@edit');
    Route::GET('/data_banner/destroy/{id}','BannerController@destroy');

    // RU Data Tentang Kami
    Route::resource('data_tk','TentangKamiController');
    Route::match(['get','post'], '/data_tk/edit/{id}','TentangKamiController@edit');

     // CRUD Data Pelayanan
     Route::resource('data_pelayanan','PelayananController');
     Route::POST('/data_pelayanan/store','PelayananController@store')->name('data_pelayanan.store');
     Route::match(['get','post'], '/data_pelayanan/edit/{id}','PelayananController@edit');
     Route::GET('/data_pelayanan/destroy/{id}','PelayananController@destroy');

      // CRUD Data Yayasan
      Route::resource('data_yayasan','DataYayasanController');
      Route::match(['get','post'], '/data_yayasan/edit/{id}','DataYayasanController@edit');

       // CRUD Data Tim
     Route::resource('data_tim','TimController');
     Route::POST('/data_tim/store','TimController@store')->name('data_tim.store');
     Route::match(['get','post'], '/data_tim/edit/{id}','TimController@edit');
     Route::GET('/data_tim/destroy/{id}','TimController@destroy');

       // CRUD Data Galeri
       Route::resource('data_galeri','GaleriController');
       Route::POST('/data_galeri/store','GaleriController@store')->name('data_galeri.store');
       Route::match(['get','post'], '/data_galeri/edit/{id}','GaleriController@edit');
       Route::GET('/data_galeri/destroy/{id}','GaleriController@destroy');

        // CRUD Data Keunggulan
      Route::resource('data_keunggulan','KeunggulanController');
      Route::match(['get','post'], '/data_keunggulan/edit/{id_keunggulan}','KeunggulanController@edit');
   
});

Route::group(['namespace' => 'Frontend'], function()
{

    Route::get('/', 'HomeController@index');
    Route::resource('/frontend/artikel','ArtikelController');
    // Route::get('frontend/artikel/cari', 'ArtikelController@cari');
    // Route::get('frontend/artikel/kategori', 'ArtikelController@kategori');
    // cari dan kategori belum berfungsi
    Route::get('frontend/artikel/{id}/detail','ArtikelController@detail')->name('artikel.detail');
});
