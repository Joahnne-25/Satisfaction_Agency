<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;

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
    return view('index');
});

Route::get('/appartements', function () {
    return view('property-grid');
});

Route::get('/appartements/{1}', function () {
    return view('property-single');
});

Route::get('/hebergeurs', function () {
    return view('hebergeur');
});

Route::get('/gestheb', function () {
    return view('gestheb');
});

Route::get('/connexion', function () {
    return view('inscription');
});
