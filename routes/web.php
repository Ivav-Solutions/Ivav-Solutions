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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomePageController::class, 'about_us']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);
Route::get('/refund-policy', [App\Http\Controllers\HomePageController::class, 'refund_policy']);
Route::get('/privacy-policy', [App\Http\Controllers\HomePageController::class, 'privacy_policy']);
Route::get('/terms-conditions', [App\Http\Controllers\HomePageController::class, 'terms_conditions']);