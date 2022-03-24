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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/series',function(){
    return view('series');
})->name('series');

Route::get('/single',function(){
    return view('single');
})->name('single');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');


