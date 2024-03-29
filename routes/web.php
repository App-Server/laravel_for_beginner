<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
Route::get('/', [EventController::class, 'customer']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/painel', function () {
    return view('painel');
});

Route::get('/login', function () {
    return view(('login'));
});

Route::get('/customer', function () {
    return view(('customer'));
});