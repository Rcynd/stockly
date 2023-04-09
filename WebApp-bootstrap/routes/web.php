<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/produk', function(){
    return view('produk');
});

Route::middleware('guest')->group(function(){

    // Registrasi route
    Route::get('/registrasi',[LoginController::class, 'registrasi']);
    Route::post('/registrasi',[LoginController::class, 'register']);

});
