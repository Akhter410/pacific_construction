<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\captchaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

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

Route::get('index', function () {
    return view('front.index');
});

Route::get('/about',[IndexController::class,'about'])->name('about');
Route::get('/services',[ServiceController::class,'services'])->name('services');
Route::post('/qoute',[QuoteController::class,'qoute'])->name('qoute');
Route::get('/project',[ProjectController::class,'project'])->name('project');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact/store',[ContactController::class,'SendMessage'])->name('contact.store');
Route::get('/blog',[blogController::class,'blog'])->name('blog');


Route::get('my-captcha', 'ContactController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'ContactController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'ContactController@refreshCaptcha')->name('refresh_captcha');