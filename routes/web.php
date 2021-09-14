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
    return view('dashboards.index');
});
// login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index');

    Route::get('/pasien','PasienController@index');
    Route::get('/administrasi','AdministrasiController@index');
    Route::get('/rekam_medis','RekamMedisController@index');
    Route::get('/dokter','DokterController@index');

    Route::post('/pasien/create','PasienController@create');
    Route::post('/administrasi/create','AdministrasiController@create');
    Route::post('/rekam_medis/create','RekamMedisController@create');
    Route::post('/dokter/create','DokterController@create');

    Route::get('/pasien/edit/{id_pas}','PasienController@edit');
    Route::get('/administrasi/edit/{no_antrian}','AdministrasiController@edit');
    Route::get('/rekam_medis/edit/{no_diagnosa}','RekamMedisController@edit');
    Route::get('/dokter/edit/{id_dok}','DokterController@edit');

    Route::post('/pasien/update/{id_pas}','PasienController@update');
    Route::post('/administrasi/update/{no_antrian}','AdministrasiController@update');
    Route::post('/rekam_medis/update/{no_diagnosa}','RekamMedisController@update');
    Route::post('/dokter/update/{id_dok}','DokterController@update');
    
    Route::get('/pasien/delete/{id_pas}','PasienController@delete');
    Route::get('/administrasi/delete/{no_antrian}','AdministrasiController@delete');
    Route::get('/rekam_medis/delete/{no_diagnosa}','RekamMedisController@delete');
    Route::get('/dokter/delete/{id_dok}','DokterController@delete');

    Route::get('/pasien/{id_pas}','PasienController@show');
    Route::get('/administrasi/{no_antrian}','AdministrasiController@show');
    Route::get('/dokter/{id_dok}','DokterController@show');
});