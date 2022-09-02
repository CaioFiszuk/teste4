<?php

use App\Http\Controllers\StockController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('home');
    Route::get('/stock', 'stock')->name('stock');
});

Route::middleware('auth')->controller(StockController::class)->group(function(){
   Route::post('/add_product', 'addProduct')->name('add.product');
   Route::get('/delete_product/{id}', 'deleteProduct')->name('delete.product');
   Route::get('/update_page/{id}', 'updatePage')->name('update.page');
   Route::post('/update', 'updateProduct')->name('update.product');
   Route::get('/search', 'search')->name('search');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/artesanato', 'artesanato')->name('artesanato');
    Route::get('/artesanato/agulhas', 'agulhas')->name('agulhas');
    Route::get('/artesanato/colas', 'colas')->name('colas');
    Route::get('/artesanato/estiletes', 'estiletes')->name('estiletes');
    Route::get('/artesanato/fitas_adesivas', 'fitasAdesivas')->name('fitas.adesivas');
    Route::get('/escolar', 'escolar')->name('escolar');
    Route::get('/escolar/cadernos', 'cadernos')->name('cadernos');
    Route::get('/escolar/apontadores', 'apontadores')->name('apontadores');
    Route::get('/escolar/borrachas', 'borrachas')->name('borrachas');
    Route::get('/escolar/estojos', 'estojos')->name('estojos');
    Route::get('/escolar/ficharios', 'ficharios')->name('ficharios');
    Route::get('/escolar/tesouras', 'tesouras')->name('tesouras');
    Route::get('/escritorios', 'escritorios')->name('escritorios');
    Route::get('/escritorios/carimbos', 'carimbos')->name('carimbos');
    Route::get('/escritorios/envelopes', 'envelopes')->name('envelopes');
    Route::get('/escritorios/pastas', 'pastas')->name('pastas');
    Route::get('/escritorios/post_its', 'postIts')->name('post.its');
    Route::get('/escritorios/pranchetas', 'pranchetas')->name('pranchetas');
    Route::get('/escritorios/pilhas', 'pilhas')->name('pilhas');
    Route::get('/escrita', 'escrita')->name('escrita');
    Route::get('/escrita/canetas', 'canetas')->name('canetas');
    Route::get('/escrita/lapis', 'lapis')->name('lapis');
    Route::get('/escrita/marcadores_de_texto', 'marcadoresDeTexto')->name('marcadores.de.texto');
    Route::get('/escrita/gizes', 'gizes')->name('gizes');
    Route::get('/papeis', 'papeis')->name('papeis');
    Route::get('/papeis/carvao', 'papelCarvao')->name('papel.carvao');
    Route::get('/papeis/couche', 'papeilCouche')->name('papel.couche');
    Route::get('/papeis/jornal', 'papelJornal')->name('papel.jornal');
    Route::get('/papeis/sulfite', 'sulfites')->name('sulfite');
    Route::get('/search_product', 'searchProduct')->name('search.products');
});

Route::controller(CartController::class)->group(function(){
    Route::get('/cart', 'index')->name('cart.index');
    Route::get('/add_to_cart/{id}', 'addToCart')->name('add.to.cart');
});