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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rekap', 'RekapController@index')->name('rekap.index');
Route::get('/rekap/{pro}', 'RekapController@pro')->name('rekap.pro');
Route::get('/rekap/{pro}/{kab}', 'RekapController@kab')->name('rekap.kab');
Route::get('/rekap/{pro}/{kab}/{kec}', 'RekapController@kec')->name('rekap.kec');
Route::get('/rekap/{pro}/{kab}/{kec}/{kel}', 'RekapController@kel')->name('rekap.kel');
Route::get('/rekap/{pro}/{kab}/{kec}/{kel}/{tps}', 'RekapController@tps')->name('rekap.tps');

Route::get('/pemilih/tentang', 'PemilihController@tentang')->name('pemilih.tentang');
Route::get('/pemilih/pindah', 'PemilihController@pindah')->name('pemilih.pindah');
