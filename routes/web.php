<?php

use App\Http\Controllers\kuesionerController;
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

// Route::get('/', function () {
//     return view('layout.main');
// });
Route::get('/', [kuesionerController::class, 'index'])->name('index');
Route::post('/public/kuesioner_post', [kuesionerController::class,'post'])->name('store');
