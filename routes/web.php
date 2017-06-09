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
Route::get('testmodel',function()   {
	$q=App\Post::all();
	$t=App\produk::all();
	$p=App\pengguna::all();
	$s=App\pengaturan::all();
	return $q.$t.$p.$s;

});
//percobaan1
Route::get('/test','MyController@percobaan');
//percobaan2
Route::get('/test2','MyController@percobaan2');
//percobaa3
Route::get('/saya','MyController@percobaan3'                                                                                                                                                                              );
//percobaan4
Route::get('/nama','MyController@percobaan4');
//percobaan5
Route::get('/buah','MyController@percobaan5');
//percobaan6
Route::get('/buah2','MyController@percobaan6');
//percobaan7
Route::get('/tugas','MyController@percobaan7');
//percobaan8
Route::get('/parameter/{data?}','MyController@parameter');
//percobaan9
Route::get('/param/{data?}/{data2?}','MyController@parameter2');
//Percobaan
Route::get('/coba','SiswaController@Percobaan');
//Percobaan
Route::get('/post/{post}','SiswaController@show');



