<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

/* Limpa cahce , rotas e configurações */
route::get('/limpa', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Tudo limpo pode voltar a página anterior";
});

Route::get('/', function () {
    return view('blog.index');
})->name("blog.index");

/* Página Sobre */
Route::get('/sobre', function(){
    return view('blog.pages.sobre');
})->name('blog.sobre');

/* Pagina contato */
Route::get('/contato', function(){
    return view('blog.pages.contato');
})->name('blog.contato');


Route::get('/post', function () {
    return view('blog.post');
})->name("blog.post");


Route::get('/categorias', function () {
    return view('blog.categoria');
})->name("blog.categorias");


Route::get('/resultado', function () {
    return view('blog.resultado');
})->name("blog.resultado");

Route::get('/teste', function(){
    return View("teste");
});


