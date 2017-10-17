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
	
Auth::routes();


// FRONT END
Route::get('/','frontController@showDanhmuc');
Route::get('/list/{danhmuc}','frontController@showSanpham');




//BACK END
Route::get('/home', 'HomeController@index');
Route::get('/addSanpham','Controller@getDanhmuc1');
Route::get('/addSanpham/{check}','Controller@getDanhmuc2');
Route::get('/addDanhmuc',function(){
	return view('addDanhmuc');
});
Route::post('sanpham', ['as' => 'sanpham', 'uses'=>'Controller@addSanpham']);
Route::post('danhmuc', ['as' => 'danhmuc', 'uses'=>'Controller@addDanhmuc']);

