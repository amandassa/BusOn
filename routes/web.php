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
    return view('cliente.pagamento')->with('valor', 1);
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

Route::get('/perfilCliente', function(){
    return view('cliente.perfil');
})->name('perfilCliente');

Route::get('/perfilFuncionario', function(){
    return view('funcionario.perfil');
})->name('perfilFuncionario');

Route::get('/perfilAdministrador', function(){
    return view('administrador.perfil');
})->name('perfilAdministrador');
            
Route::get('/inicial_adm', function(){
    return view('administrador.inicial_adm');
})->name('inicial_adm');  

Route::get('/gerenciaUsuario_adm', function(){
    return view('administrador.gerenciaUsuarios');
})->name('gerenciaUsuarios');

Route::get('/consultar_linhas', function(){
    return view('funcionario.consultar_linhas');
});

Route::get('/adicionarLinha', function(){
    return view('administrador.adicionarLinha');
})->name('adicionaLinha');

Route::any('/logar', 'HomeController@logar')->name('logar');

Route::get('/pagamento/cartao', function(){
    return view('cliente._partials.cartao');
})->name('cartao');

Route::get('/pagamento/boleto', function(){
    return view('cliente._partials.boleto');
})->name('boleto');

Route::get('/inicio', function(){
    return view('cliente.inicio');
})->name('inicio');

Route::get('/geraRelat', function(){
    return view('funcionario.geraRelat');
});

?>