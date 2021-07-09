<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordpressController;

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

Route::get('/{slug}/{idPage}', [WordpressController::class, 'loadPage']);
Route::get('/', [WordpressController::class, 'index']);

/*Route::get('/', function () {
    return view('welcome');
});*/
