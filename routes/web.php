<?php

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

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pagamento', function(){
    return view('cliente.partials.cartao');
    })->name('pagamento.cartao');

Route::get('/pagamento', function(){
    return view('cliente.pagamento');
    })->name('pagamento');
    
Route::get('/base', function(){
    return view('app');
    })->name('base');

Route::get('/confirmacao', function(){
    return view('cliente.confirmacao');
    })->name('confirmacao');


Route::get('/selecao', function(){
    return view('cliente.selecao');
    })->name('selecao');

Route::get('/inicial_func', function(){
    return view('funcionario.inicial_func');
    })->name('inicial_func');  
      
 Route::get('/cadastroclientes', function(){
    return view('cliente.cadastroclientes');
        })->name('cadastroclientes');
