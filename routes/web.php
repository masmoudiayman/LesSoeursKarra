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
 Route::get('/sousGammeArticleJus/{nom}',[ArticleController::class,'sousGammeArticleJus']);
 Route::get('/sousGammeArticleCafe/{nom}',[ArticleController::class,'sousGammeArticleCafe']);
 Route::get('/sousGammeArticleSale/{nom}',[ArticleController::class,'sousGammeArticleSale']);




 Route::get('/ajouterGamme',[GammeController::class,'ajouterGamme']);
 Route::get('/ajouterSousGamme',[SousGammeController::class,'ajouterSousGamme']);
 Route::get('/ajouterArticle',[ArticleController::class,'ajouterArticle']);



 Route::post('/saveGamme',[GammeController::class,'saveGamme']);
 Route::post('/saveSousGamme',[SousGammeController::class,'saveSousGamme']);
 Route::post('/saveArticle',[ArticleController::class,'saveArticle']);




 Route::get('/editGamme/{id}',[GammeController::class,'editGamme']);
 Route::get('/editSousGamme/{id}',[SousGammeController::class,'editSousGamme']);
 Route::get('/editArticle/{id}',[ArticleController::class,'editArticle']);

 Route::post('/updateGamme',[GammeController::class,'updateGamme']);
 Route::post('/updateSousGamme',[SousGammeController::class,'updateSousGamme']);
 Route::post('/updateArticle',[ArticleController::class,'updateArticle']);



 Route::get('/deleteGamme/{id}',[GammeController::class,'deleteGamme']);
 Route::get('/deleteSousGamme/{id}',[SousGammeController::class,'deleteSousGamme']);
 Route::get('/deleteArticle/{id}',[ArticleController::class,'deleteArticle']);





 Route::get('/',[indexController::class,'home']);
 Route::get('/magasin_jus',[indexController::class,'magasin_jus']);
 Route::get('/magasin_café',[indexController::class,'magasin_café']);
 Route::get('/magasin_salé',[indexController::class,'magasin_salé']);
 Route::get('/panier',[indexController::class,'panier']);
 Route::get('/about',[indexController::class,'about']);
 Route::get('/contact',[indexController::class,'contact']);
 Route::get('/checkout',[indexController::class,'checkout']);
 Route::get('/login',[indexController::class,'login']);
 Route::post('/accessAccount',[indexController::class,'accessAccount']);
 Route::get('/signup',[indexController::class,'signup']);
 Route::post('/createAccount',[indexController::class,'createAccount']);
 Route::get('/logout',[indexController::class,'logout']);
 Route::get('/addToCart/{id}',[indexController::class,'addToCart']);
 Route::post('/update_qty/{id}',[indexController::class,'update_qty']);
 Route::get('/remove_from_cart/{id}',[indexController::class,'remove_from_cart']);

 










// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
