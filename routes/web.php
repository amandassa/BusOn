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
    return view('cliente.pagamento')->with('valor', 1);
    })->name('pagamento');

Route::get('/base', function(){
    return view('app');
    })->name('base');

Route::get('/confirmacao', function(){
    return view('cliente.confirmacao_pagamento.confirmacao');
    })->name('confirmacao');

Route::get('/confirmacaoB', function(){
    return view('cliente.confirmacao_pagamento.confirmacaoBoleto');
    })->name('confirmacaoBoleto');

Route::get('/selecao', function(){
    return view('cliente.selecao');
    })->name('selecao');

Route::get('/inicial_func', function(){
    return view('funcionario.inicial_func');
    })->name('inicial_func');

Route::get('/cadastroclientes', function(){
    return view('cliente.cadastroclientes');
        })->name('cadastroclientes');

Route::any('/perfilCliente', 'ClienteController@index')->name('perfilCliente');

Route::post('/editarPerfilCliente', 'ClienteController@editarPerfil')->name('editarPerfilCliente');

Route::get('/inicialAdm', function(){
    return view('administrador.inicial_adm');
    })->name('inicial_adm');

Route::get('/inicialFuncionario', function(){
    return view('funcionario.inicial_func');
    })->name('inicial_func');

Route::get('/verificarLogs', function(){
    return view('funcionario.verificarLogs');
    })->name('verificarLogs');

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

Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');

Route::any('/consultar', 'LinhaController@consulta')->name('consulta');

Route::get('/adicionarLinha', function(){
    return view('administrador.adicionarLinha');
})->name('adicionaLinha');

Route::get('/adicionarTrecho', function(){
    return view('administrador.adicionarTrecho');
})->name('adicionaTrecho');

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

Route::get('/venderPassagens', function(){
    return view('administrador.vender_passagens');
})->name('venderPassagens');

Route::get('/inicial_adm', function(){
    return view('administrador.inicial_adm');
})->name('inicial_adm');

Route::get('/editarAgenda', function(){
    return view('funcionario.editarAgenda');
});

Route::get('/recuperarAcessoAdministrador', function(){
    return view('administrador.recuperarAcesso');
})->name('recuperarAcessoAdministrador');

Route::get('/recuperarAcessoFuncionario', function(){
    return view('funcionario.recuperarAcesso');
})->name('recuperarAcessoFuncionario');

Route::get('/recuperarAcessoCliente', function(){
    return view('cliente.recuperarAcesso');
})->name('recuperarAcessoCliente');

?>
