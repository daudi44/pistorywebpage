<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route::get('/subscribe', function () {
    //     return redirect(route('kanuu.redirect', \Illuminate\Support\Facades\Auth::user()));
    // })->name('subscribe');

// });

// Kanuu::redirectRoute()
//     ->middleware('auth')
//     ->name('kanuu.redirect');