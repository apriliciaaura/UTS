<?php
use App\Siswa;

Route::get('/', function(){
	$murid = \App\Siswa::all();
    return view('siswa/user',compact('murid'));
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', 'DashboardController@index');
Route::get('/siswa', 'SiswaController@index');
Route::post('/siswa/create', 'SiswaController@create');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}/update', 'SiswaController@update');
Route::get('/siswa/{id}/delete', 'SiswaController@delete');
Route::get('/siswa/{id}/profile', 'SiswaController@profile');
Route::post('/siswa/{id}/addnilai', 'SiswaController@addnilai');
Route::get('/siswa/exportexcel', 'SiswaController@exportExcel');
Route::get('/user/exportexcel', 'SiswaController@userexportExcel');
Route::get('/siswa/exportpdf', 'SiswaController@exportPdf');
});