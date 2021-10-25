<?php

use App\Http\Controllers\indexController;
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

 Route::get('/',[indexController::class,'home']);
 Route::get('/magasin',[indexController::class,'magasin']);
 Route::get('/panier',[indexController::class,'panier']);
 Route::get('/about',[indexController::class,'about']);
 Route::get('/contact',[indexController::class,'contact']);
 Route::get('/checkout',[indexController::class,'checkout']);








// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
