<?php

use App\Http\Controllers\CarrerasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumnosController;
/*
Route::resource('alumnos',\App\Http\Controllers\AlumnosController::class);

Route::resource('carreras',\App\Http\Controllers\CarrerasController::class);

Route::get('/', function () {
    return view('/');
});


*/
route::view('login','/login')->name('login');
Route::get('/login', function () {
    return view('login');
});

Route::get('/carreras', function () {
    return view('carreras');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/alumnos', function () {
    return view('alumnos');
});

Route::resource('alumnos',App\Http\Controllers\AlumnosController::class)->middleware('auth');

Route::resource('carreras',App\Http\Controllers\CarrerasController::class)->middleware('auth');

Route::post('login', function(){
    $crediantials = request()->only('email','password');
    if(Auth::attempt($crediantials))
    {   
        request()->session()->regenerate();
        return redirect('/carreras');
    }
    return 'login fallo';
});
