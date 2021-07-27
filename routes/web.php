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
});

Auth::routes();

Route::get('/auth/callback', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Microsoft
Route::get('/auth/callMicrosoft', [App\Http\Controllers\Auth\LoginController::class, 'redirectToMicrosoft'])->name('login.microsoft');
Route::get('/auth/microsoft/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleMicrosoftCallBack']);

//Google
Route::get('/auth/callGoogle', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallBack']);

//Orcid
Route::get('/auth/callOrcid', [App\Http\Controllers\Auth\LoginController::class, 'redirectToOrcid'])->name('login.orcid');
Route::get('/auth/orcid/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleOrcidCallBack']);
