<?php

use App\Http\Controllers\SiteController;
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

// about-us
Route::get('/about-us', function () {
    return view('about');
})->name('about');

// services
Route::get('/services', function () {
    return view('services');
})->name('services');

// faq
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// contact-us
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::post('/webhook/deploy', [SiteController::class, 'deploy']);
