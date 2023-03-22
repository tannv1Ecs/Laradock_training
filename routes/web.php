<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile', [HomeController::class, 'profile']);

Route::get('time', function () {
    return (strtotime('MAY 20') - time() - 3 * 60 * 60 * 24) / (60 * 60 * 24);
});
