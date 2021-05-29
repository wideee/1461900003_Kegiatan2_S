<?php
use App\Http\Controllers\siswaController;
use App\Http\Controllers\whereControler;
use App\Http\Controllers\joinController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/select', function () {
    return view('003_sellect');
});

Route::get('/where', function () {
    return view('003_selectwhere');
});

Route::get('/join', function () {
    return view('003_join');
});
Route::resource('/select', siswaController::class);
Route::resource('/where', whereControler::class);
Route::resource('/join', joinController::class);