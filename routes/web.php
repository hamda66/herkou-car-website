<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\pageController;

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

Route::get('/about','C:\Users\user\Downloads\perfectwheels\app\Http\Controllers\pageController.php@about')->name('about');
Route::get('/brands','C:\Users\user\Downloads\perfectwheels\app\Http\Controllers\pageController.php@brands')->name('brands');
Route::get('/contact','C:\Users\user\Downloads\perfectwheels\app\Http\Controllers\pageController.php@contact')->name('contact');
*/
Route::get('/', [pageController::class, 'about']);
