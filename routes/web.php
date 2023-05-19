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

Route::get('/', function () {
    return view('blog.index');
})->name("blog.index");

/* Página Sobre */
Route::get('/sobre', function(){
    return view('blog.pages.sobre');
})->name('blog.sobre');


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


