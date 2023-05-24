<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    
    // Login route
    Route::get('/login',[LoginController::class, 'index'])->name('login');
    Route::post('/login',[LoginController::class, 'authenticate']);
    
});
Route::middleware(['auth'])->group(function(){
    // admin logout
    Route::get('/logout',[LoginController::class, 'logout']);
    // admin dashboard
    Route::get('/dashboard',[DashboardController::class, 'index']);
    
});
Route::middleware(['admin'])->group(function(){
    
    // cek produk
    Route::get('/produk-adm',[ProdukController::class, 'index']);
    Route::get('/tambah-produk',[ProdukController::class, 'tambah']);
    Route::post('/tambah-produk',[ProdukController::class, 'store']);


});
