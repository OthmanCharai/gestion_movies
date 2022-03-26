<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Auth;
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
    /**
     *  create serie routes
     */
    Route::resource('/series',SerieController::class);

    /**
     *  add a serie to favorite with  auth middleware
     */
    Route::post('/favorite',"SerieController@favorite")->middleware("auth")->name('favorite');

    /**
     *  get user series || case admin get all series
     */
    Route::get('/user/series',"SerieController@user_series")->middleware('auth')->name('user.series');
    /**
     *  get series pages
     */
    Route::get('/serie','SerieController@series')->name('serie');

    /**
     *  admin series
     */
    Route::get('/add_serie',function(){
        return view('admin.serie.add_series');
    });
    /**
     *  contact route
     */
    Route::resource('/contact',ContactController::class)->only(['index','store']);

    /**
     *  comment route
     */
    Route::resource('/comment',CommentController::class);


    Route::get('/contact',function(){
        return view('contact');
    })->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
