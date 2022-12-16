<?php

use App\Http\Controllers\vote_controller;
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

Route::get('/', [vote_controller::class, 'vote']);
Route::get('/nextbody', [vote_controller::class, 'vote2']);



// Route::get('/body', function () {
//     $age = 23;
//     $nationality = "Indian";
//     return view('body', compact('age'));
// });
