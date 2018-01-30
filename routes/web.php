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
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/servisan', 'ServisanController@index')->name('servisan.index');
    Route::get('servisandata', 'ServisanController@listData')->name('servisandata');
    Route::get('/servisan/create', 'ServisanController@create')->name('servisan.create');
    Route::post('/servisan/create', 'ServisanController@store')->name('servisan.store');
    Route::get('/servisan/{servisan}', 'ServisanController@show')->name('servisan.show');
    Route::get('/servisan/{servisan}/notapdf', 'ServisanController@notaPDF')->name('nota.pdf');
    Route::get('/servisan/{servisan}/edit', 'ServisanController@edit')->name('servisan.edit');
    Route::patch('/servisan/edit/{servisan}/edit', 'ServisanController@update')->name('servisan.update');
    Route::delete('/servisan/{servisan}/delete', 'ServisanController@destroy')->name('servisan.destroy');
    
    Route::get('/merk/create', 'MerkController@create')->name('merk.create');
    Route::post('/merk/create', 'MerkController@store')->name('merk.store');

    Route::get('/berhasil', 'BerhasilController@index')->name('berhasil.index');
    Route::get('/berhasil/{servisan}/create', 'BerhasilController@edit')->name('berhasil.create');
    Route::post('/berhasil/{servisan}/create', 'BerhasilController@store')->name('berhasil.store');
    Route::delete('/berhasil/{berhasil}/delete', 'BerhasilController@destroy')->name('berhasil.destroy');
    Route::get('berhasildata', 'BerhasilController@listData')->name('berhasildata');
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
