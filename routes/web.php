<?php

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

Route::get('/', 'CariKerjaController@index');

Route::group(['middleware' => ['auth','roleMiddleware:1']], function(){
    Route::get('/admin', 'Admin\HomeController@index');
    Route::get('/admin/upload', 'Admin\UploadController@index');
    Route::post('/admin/upload/post', 'Admin\UploadController@post');    
    Route::get('/admin/grafik', 'Admin\GrafikController@index');
    Route::get('/admin/data', 'Admin\DataController@index');
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/', 'CariKerjaController@index')->name('home');
Route::get('/cari-kerja', 'CariKerjaController@index')->name('cari-kerja');
Route::get('/cari-kerja/cari', 'CariKerjaController@cari')->name('search-kerja');
Route::post('/cari-kerja/cari-cb', 'CariKerjaController@caricb')->name('search-kerja-cb');
Route::get('/pengaturan', function(){
    return view('pages.pengaturan');
});
Route::get('/kotak-masuk', function(){
    return view('pages.kotak-masuk');
});
Route::get('/pelacak-waktu', function(){
    return view('pages.pelacak-waktu');
});
Route::get('/cari-kerja/detail/{id}', 'CariKerjaController@detail')->name('detail-cari-kerja');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();