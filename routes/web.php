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
<<<<<<< HEAD
//made in china
//
=======
//made
//comment by another person.....
>>>>>>> de03b25e4894740d6df0f0109314b3f383d4f4ff
Route::get('/',[mainController::class, 'index']);
Route::get('/about',[mainController::class, 'about']);
Route::get('/contact',[mainController::class, 'contact']);



/*Route::get('/', function () {
    return view('welcome');
});*
