<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\IndexSearchController;

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

// Route::get('/', function () {

    // $super_APIKEY = env('SUPER_APIKEY');
    // $response = Http::get("https://superheroapi.com/api/" . $super_APIKEY . "/search/superman");

    // dd($response->json());

//     return view('index');

// })->name('index');

Route::get('/', [IndexSearchController::class, 'search'])->name('index');
Route::view('/details', 'details');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
