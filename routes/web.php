<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/add_post', function () {
    return view('nor_haytararutyun');
}) -> name('add_post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/nor_haytararutyun',
    [NewsController::class,'sumbit_news']
)->name('news-form');

Route::get(
    '/haytararutyun',
    [NewsController::class, 'all_news']
) -> name('news_all');

Route::get(
    '/laravel/all',
    [NewsController::class, 'one_data']
) -> name('show-one');
