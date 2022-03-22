<?php

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

Route::get('/', function(){ return view('inicio'); })->name('inicio');
Route::get('/profe', function(){ return view('profe');  })->name('profe');
Route::get('/contacto', function(){ return view('contacto');  })->name('contacto');
Route::get('/actividades', function(){ return view('actividades');  })->name('actividades');


