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

// Route::get('/', function () {
//     return view('welcome');
//     // return 'HOLA';
// });
//Esta ruta los lista
// Route::get('/', 'UserController@index');
//Metodo para guardar a los usuarios
// Route::post('users', 'UserController@store')->name('users.store');
//Metodo para borrar
// Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Crea 7 rutas posibles- con middleware proteges las 7 rutas
// Route::resource('user', UserController::class)->middleware('auth');



Route::get('/', function () {
    return view('post');
});

Route::post('post', 'PostController@store')->name('posts.store');
