<?php

use App\Http\Controllers\ComicController;
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
  return view('home');
})->name('home');

Route::resource("comics", ComicController::class);

// Route::get("/comics", [ComicController::class, "index"])->name("comics.index");
// Route::get('/comics/{comic}', [ComicController::class,'show'])->name('comics.show');