<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

//is comment
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
//made in china
//
Route::get('/',[mainController::class, 'index']);
Route::get('/about',[mainController::class, 'about']);
Route::get('/contact',[mainController::class, 'contact']);



/*Route::get('/', function () {
    return view('welcome');
});*