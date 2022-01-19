<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

Route::get('/building/{room}', function ($room = '建物です') {
    return '部屋番号は' . $room .  'です';
});

