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

//Route Index User
Route::get('/','UserIndexController@index');
Route::get('/wisata','UserIndexController@wisata');

Route::group(['prefix'=>'users','middleware'=>['auth','role:member']], function(){
    Route::get('{id}/detailwisata','UserIndexController@detailwisata');
    Route::get('/','UserIndexController@mywisata');
    Route::post('{id}/daftar','UserIndexController@daftar');
    Route::post('{id}','UserIndexController@destroy');
});



//Route admin / dashboard
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
    Route::get('/', function(){
        return view('admin.dashboard');
    });
    Route::get('/logout','UserController@logout');

//Route Wisata Start
    Route::group(['prefix'=>'wisata'], function(){
        Route::get('/', 'WisataController@index');
        Route::get('/excel', 'LaporanController@wisataexcel');
        Route::get('/pdf', 'LaporanController@wisatapdf');        
        Route::get('/create','WisataController@create');
        Route::post('/','WisataController@store');
        Route::get('/{id}/edit','WisataController@edit');
        Route::post('{id}/update','WisataController@update');
        Route::post('{id}','WisataController@destroy');
    });

//Route Users
    Route::group(['prefix'=>'users'], function(){
        Route::get('/', 'UserController@index');
        Route::get('/create','UserController@create');
        Route::post('/','UserController@store');
        Route::get('{id}/edit','UserController@edit');
        Route::post('{id}/update','UserController@update');
        Route::post('{id}','UserController@destroy');

    });

//Route Peserta

Route::group(['prefix'=>'peserta'],function(){
    Route::get('/', 'PesertaController@index');
    Route::get('/{id}/view','PesertaController@view');
    Route::post('/{id}', 'PesertaController@destroy');


});

});
//Route Admin End

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
