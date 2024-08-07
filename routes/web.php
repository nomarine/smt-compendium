<?php

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

Route::get('/', function () {
    // return view('welcome');
    return view('app/demon/index');
})->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('demon')->group(function () {
    Route::get('index', function () {
        return view('app/demon/index');
    })->name('index');
    Route::get('show', function () {
        return view('app/demon/show');
    })->name('show');
});


