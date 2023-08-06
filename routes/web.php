<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SetLocale;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);
Route::get('lang/{locale}', [SetLocale::class, 'Locale'])->name('locale');
// Route::get('/lang/{locale}', function ($locale) {
//     if (!in_array($locale, ['en', 'ar'])) {
//         return redirect()->back()->with('error', 'this lang is not supported');
//     }

//     session()->put('locale', $locale);
//     //return $locale;
//     return redirect()->back();
// });
