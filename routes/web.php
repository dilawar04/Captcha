<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/my-captcha', [HomeController::class, 'myCaptcha'])->name('myCaptcha');
Route::post('/my-captcha', [HomeController::class, 'myCaptchaPost'])->name('myCaptcha.post');
Route::get('/refresh_captcha', [HomeController::class, 'refreshCaptcha'])->name('refresh_captcha');

// Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
// Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
// Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/', function () {
    return view('welcome');
});
