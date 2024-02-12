<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::put('dataibu/{id}', function () {
        return view('DataIbuController@update');
    })->name('dataibu.update');

    Route::get('/dataibu/create', function () {
        return view('DataIbuController@create');
    })->name('dataibu.create');

    Route::post('/dataibu', function (){
        return view('DataIbuController@store');
    })->name('dataibu.store');
});
