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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/my_files', [\App\Http\Controllers\FileController::class, 'start'])->middleware(['auth'])->name('my_files');
Route::get('/user_subscriptions', [\App\Http\Controllers\UserController::class, 'start'])->middleware(['auth'])->name('user_subscriptions');

Route::get('/test', [\App\Http\Controllers\Tester::class, 'test']);
require __DIR__.'/auth.php';
