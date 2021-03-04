<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'Auth\LoginController@index');

Route::group(['middleware' => ['auth']], function(){
    
    Route::get('/home', 'HomeController@index');
    Route::get('/logout','Auth\LoginController@logout');
    Route::resource('/funcionarios','FuncionarioController');
    Route::resource('/usuarios','UsuarioController');
    Route::resource('/planos','PlanoController');

});