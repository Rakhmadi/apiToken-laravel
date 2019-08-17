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
Route::get('/profile','usrcont@profile')->middleware('auth');
route::get('profile.edit','usrcont@editprofile')->middleware('auth');
route::post('savesprofl','usrcont@savesprofile')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
route::get('admin','admincdcontrol@adm')->middleware('auth:admin');;
route::get('login_admin',function(){
    return view('admin.lognadm');
});
route::post('postlog','admincdcontrol@postlogin');
route::get('logot','admincdcontrol@logout');
route::get('prodi___s','usrcont@prod')->middleware('auth');
route::get('PRoDi_^_edit',function(){
    return view('editprodi');
})->middleware('auth');