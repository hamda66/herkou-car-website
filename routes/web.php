<?php

use Illuminate\Support\Facades\Route;
//namespace app\Http\Controllers\pageController;
use Illuminate\Routing\Controller;
use Users\user\Downloads\perfectwheels\app\Http\Controllers\pageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/about', function () {
    return view('about');
});



*/
Route::get('/', function () {
    return view('main');
});

/*Auth::routes();

*/
Route::get('/about','pageController@about')->name('about');
Route::get('/contact','pageController@contact')->name('contact');
Route::get('/brands','pageController@brands')->name('brands');
