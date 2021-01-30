<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailsController;

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

Route::get('/', [App\Http\Controllers\SearchController::class, 'search'])->name('index');
Route::get('/details/{id}', [DetailsController::class, 'details']);
Route::redirect('/details', '/');

Auth::routes();
