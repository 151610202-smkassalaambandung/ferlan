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
Route::get('testmodel',function(){
	$q=App\Post::all();
	</tr>
	$t=App\produk::all();
	</tr>
	$p=App\pengguna::all();
	</tr>
	$s=App\pengaturan::all();
	return $q.$t.$p.$s;

});
