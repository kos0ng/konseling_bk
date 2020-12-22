<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', 'TaskController@index')->name('index');
Route::get('/dashboard/siswa', 'TaskController@siswa')->name('siswa');
Route::get('/dashboard/prestasi', 'TaskController@prestasi')->name('prestasi');
Route::get('/dashboard/kasus', 'TaskController@kasus')->name('kasus');
Route::get('/dashboard/jadwal', 'TaskController@jadwal')->name('jadwal');
Route::get('/dashboard/konseling', 'TaskController@konseling')->name('konseling');
Route::get('/dashboard/alumni', 'TaskController@alumni')->name('alumni');
Route::get('/dashboard/walisiswa', 'TaskController@walisiswa')->name('walisiswa');
Route::get('/dashboard/timbk', 'TaskController@timbk')->name('timbk');
Route::get('/dashboard/perkembangan/{id}', 'TaskController@perkembangan')->name('perkembangan');
Route::get('/dashboard/profil/{id}', 'TaskController@profil')->name('profil');
Route::post('/dashboard/insertWali', 'TaskController@insertWali' );
Route::post('/dashboard/updateWali', 'TaskController@updateWali' );
Route::post('/dashboard/insertSiswa', 'TaskController@insertSiswa' );
Route::post('/dashboard/updateSiswa', 'TaskController@updateSiswa' );
Route::post('/dashboard/updateNilai', 'TaskController@updateNilai' );
Route::post('/dashboard/updateMinat', 'TaskController@updateMinat' );
Route::post('/dashboard/insertPrestasi', 'TaskController@insertPrestasi' );
Route::post('/dashboard/updatePrestasi', 'TaskController@updatePrestasi' );
Route::post('/dashboard/insertBK', 'TaskController@insertBK' );
Route::post('/dashboard/updateBK', 'TaskController@updateBK' );
Route::post('/dashboard/insertKasus', 'TaskController@insertKasus' );
Route::post('/dashboard/updateKasus', 'TaskController@updateKasus' );
Route::post('/dashboard/insertAlumni', 'TaskController@insertAlumni' );
Route::post('/dashboard/updateAlumni', 'TaskController@updateAlumni' );
Route::get('/dashboard/profilAlumni/{id}', 'TaskController@profilAlumni')->name('profilAlumni');
Route::post('/dashboard/insertKonseling', 'TaskController@insertKonseling' );
Route::post('/dashboard/updateHasil', 'TaskController@updateHasil' );
Route::post('/dashboard/insertHasil', 'TaskController@insertHasil' );
Route::get('/dashboard/deleteSiswa/{id}', 'TaskController@deleteSiswa' );
Route::get('/dashboard/deletePrestasi/{id}', 'TaskController@deletePrestasi' );
Route::get('/dashboard/deleteKasus/{id}', 'TaskController@deleteKasus' );
Route::get('/dashboard/deleteKonseling/{id}', 'TaskController@deleteKonseling' );
Route::get('/dashboard/deleteAlumni/{id}', 'TaskController@deleteAlumni' );
Route::get('/dashboard/deleteWali/{id}', 'TaskController@deleteWali' );
Route::get('/dashboard/deleteBK/{id}', 'TaskController@deleteBK' );