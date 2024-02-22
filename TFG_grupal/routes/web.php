<?php

use App\Http\Controllers\RegistroControlador2;
use App\Http\Controllers\RegistroControlador;
use Illuminate\Support\Facades\Route;

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

// <form action="{{ route('/usuarios') }}" method="post">       <form action="{{ route('/registro') }}" method="post">
//Route::post('/registro', [RegistroControlador2::class]);

//Route::post('/registro', [RegistroControlador::class]);
//Route::post('/registro', 'RegistroControlador@registro')->name('registro');

//Route::resource("registro", RegistroControlador2::class);

Route::post('/login', 'LoginController@login')->name('login');

Route::get('/', function () {
    return view('inicioSesion');
});


Route::get('/app', function () {
    return view('estadosAnimo');
});

Route::resource("usuarios", RegistroControlador2::class);



Route::get('/login', 'LoginControlador@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('login');



