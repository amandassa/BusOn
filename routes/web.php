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
<<<<<<< HEAD
    return view('cliente.pagamento')->with('valor', 1);
    })->name('pagamento');
=======
    return view('cliente.pagamento');
})->name('pagamento');
>>>>>>> b21d6e34b6b2818b1fdd21d477682a5dc0b3b503
    
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

Route::get('/perfilCliente', function(){
    return view('cliente.perfil');
})->name('perfilCliente');
            

Route::get('/inicial_adm', function(){
            return view('administrador.inicial_adm');
            })->name('inicial_adm');  
