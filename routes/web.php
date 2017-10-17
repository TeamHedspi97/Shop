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
Route::get('admin/login','Admin\AuthController@getLogin');
Route::post('admin/login','Admin\AuthController@postLogin');
Route::get('admin/register','Admin\AuthController@getRegister');
Route::post('admin/register','Admin\AuthController@postRegister');

Route::get('admin/dashboard','AdminController@getIndex');
Route::get('admin/logout','AdminController@getLogout');



// FRONT END
Route::get('/','frontController@showDanhmuc');
Route::get('/detail/{sanpham}','frontController@showSanpham');






//BACK END
Route::get('/home', 'HomeController@index');
Route::get('/addSanpham','Controller@getDanhmuc1');
Route::get('/addSanpham/{check}','Controller@getDanhmuc2');
Route::get('/addDanhmuc',function(){
	return view('addDanhmuc');
});
Route::post('sanpham', ['as' => 'sanpham', 'uses'=>'Controller@addSanpham']);
Route::post('danhmuc', ['as' => 'danhmuc', 'uses'=>'Controller@addDanhmuc']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
