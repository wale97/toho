<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DescController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DecouvrirController;

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



Route::get('/', [HomeController::class, 'index'])->name('accueil');

Route::get('decouvrir', [DecouvrirController::class, 'decouverte'])->name('decouverte');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');

Route::get('desc', [DescController::class, 'description'])->name('desc');

Route::get('Rosa', [PagesController::class, 'rosa'])->name('rosa');

Route::get('Ava', [PagesController::class, 'ava'])->name('ava');

Route::get('RivesToho', [PagesController::class, 'rives'])->name('rives');

Route::get('VillaAphro', [PagesController::class, 'villa'])->name('villa');



//Article's Page
/*Route::get('decouvrir', [DecouvrirController::class, 'voir'])->name('voir');
//get one article
Route::get('desc/{id}', [DecouvrirController::class, 'voir_desc'])->name('voir');
//News' page
Route::get('news', [NewsController::class, 'news'])->name('news');
//get on new
Route::get('/new/{id}', [NewsController::class, 'voir_news'])->name('voir-news');*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
