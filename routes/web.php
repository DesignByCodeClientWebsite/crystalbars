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

Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');
Route::get('/quote', \App\Http\Controllers\QuoteController::class)->name('quote');
Route::get('/faq', \App\Http\Controllers\FaqController::class)->name('faq');

Route::post('/quote-send', \App\Http\Controllers\SendQuoteController::class)->name('quote.send');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
