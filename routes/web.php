<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\GammeController;
use App\Http\Controllers\SousGammeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParametreController;
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
 Route::get('/dashboard',[dashController::class,'dashboard']);
 Route::get('/gamme',[GammeController::class,'gamme']);
 Route::get('/sousGamme',[SousGammeController::class,'sousGamme']);
 Route::get('/article',[ArticleController::class,'article']);
 Route::get('/client',[ClientController::class,'client']);
 Route::get('/commande',[CommandeController::class,'commande']);
 Route::get('/contacts',[ContactController::class,'contacts']);
 Route::get('/parametre',[ParametreController::class,'parametre']);




 Route::get('/ajouterGamme',[GammeController::class,'ajouterGamme']);
 Route::get('/ajouterSousGamme',[SousGammeController::class,'ajouterSousGamme']);
 Route::get('/ajouterArticle',[ArticleController::class,'ajouterArticle']);



 Route::post('/saveGamme',[GammeController::class,'saveGamme']);
 Route::post('/saveSousGamme',[SousGammeController::class,'saveSousGamme']);
 Route::post('/saveArticle',[ArticleController::class,'saveArticle']);




 Route::get('/editGamme/{id}',[GammeController::class,'editGamme']);
 Route::get('/editSousGamme/{id}',[SousGammeController::class,'editSousGamme']);

 Route::post('/updateGamme',[GammeController::class,'updateGamme']);
 Route::post('/updateSousGamme',[SousGammeController::class,'updateSousGamme']);



 Route::get('/deleteGamme/{id}',[GammeController::class,'deleteGamme']);
 Route::get('/deleteSousGamme/{id}',[SousGammeController::class,'deleteSousGamme']);








 Route::get('/',[indexController::class,'home']);
 Route::get('/magasin_jus',[indexController::class,'magasin_jus']);
 Route::get('/magasin_café',[indexController::class,'magasin_café']);
 Route::get('/magasin_salé',[indexController::class,'magasin_salé']);
 Route::get('/panier',[indexController::class,'panier']);
 Route::get('/about',[indexController::class,'about']);
 Route::get('/contact',[indexController::class,'contact']);
 Route::get('/checkout',[indexController::class,'checkout']);
 Route::get('/login',[indexController::class,'login']);
 Route::get('/signup',[indexController::class,'signup']);
 










// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
