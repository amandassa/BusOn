<?php

//use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas restritas apenas para CLIENTES
Route::middleware(['auth:cliente'])->group(function () {
    Route::get('/inicio', function(){return view('cliente.inicio');})->name('inicio');
    Route::any('/perfilCliente', 'ClienteController@index')->name('perfilCliente');
    Route::post('/editarPerfilCliente', 'ClienteController@editarPerfil')->name('editarPerfilCliente');
    Route::get('/minhasPassagens', 'ClienteController@consultaMinhasPassagens')->name('minhasPassagens');
    Route::get('/selecao', function(){return view('cliente.selecao');})->name('selecao');
    Route::get('/pagamento', function(){return view('cliente.partials.cartao');})->name('pagamento.cartao');
    Route::get('/pagamento', function(){return view('cliente.pagamento')->with('valor', 1);})->name('pagamento');
    Route::get('/pagamento/cartao', function(){return view('cliente._partials.cartao');})->name('cartao');
    Route::get('/pagamento/boleto', function(){return view('cliente._partials.boleto');})->name('boleto');
    Route::get('/confirmacao', function(){return view('cliente.confirmacao_pagamento.confirmacao');})->name('confirmacao');
    Route::get('/confirmacaoB', function(){return view('cliente.confirmacao_pagamento.confirmacaoBoleto');})->name('confirmacaoBoleto');
});

//Rotas restritas apenas para FUNCIONARIOS
Route::middleware(['auth:funcionario'])->group(function () {
    Route::get('/inicialFuncionario', 'FuncionarioController@estatisticas')->name('inicial_func');
    Route::get('/perfilFuncionario', function(){return view('funcionario.perfil');})->name('perfilFuncionario');
    Route::get('/editarAgenda', function(){return view('funcionario.editarAgenda');});
    Route::get('/recuperarAcessoFuncionario', function(){return view('funcionario.recuperarAcesso');})->name('recuperarAcessoFuncionario');
    Route::get('/perfilFuncionario', [App\Http\Controllers\FuncionarioController::class, 'index'])->name('perfilFuncionario.index');
    Route::post('/perfilFuncionario', [App\Http\Controllers\FuncionarioController::class, 'editar'])->name('perfilFuncionario.editar');
    //Administradores também possem acesso
    Route::get('/geraRelat', function(){return view('funcionario.geraRelat');});
    Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');
    Route::any('/consultar_linhas/resultado', 'LinhaController@consulta')->name('consulta');
    Route::get('/venderPassagens', 'LinhaController@index')->name('venderPassagens');
    Route::any('/venderPassagens/consulta', 'LinhaController@consulta')->name('consultaVP');
    Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');
    Route::any('/consultar_linhas/resultado', 'LinhaController@consulta')->name('consulta');

    Route::post('/venderPassagens', [App\Http\Controllers\FuncionarioController::class, 'vender'])->name('vende');
});

//Rotas restritas apenas para ADMNISTRADOR
Route::middleware(['auth:funcionario', 'adm'])->group(function () {
    //Route::get('/inicialAdm', function(){return view('administrador.inicial_adm');})->name('inicial_adm');
    Route::get('/inicialAdm', 'AdministradorController@estatisticasAdministrador')->name('inicial_adm');
    Route::get('/perfilAdministrador', function(){return view('administrador.perfil');})->name('perfilAdministrador');
    Route::get('/adicionarTrecho', function(){return view('administrador.adicionarTrecho');})->name('adicionaTrecho');
    Route::post('/adicionarTrecho', 'AdministradorController@cadastrarTrecho')->name('adicionarTrecho');
    Route::get('/perfilAdministrador', [App\Http\Controllers\AdministradorController::class, 'index'])->name('perfilAdministrador.index');
    Route::post('/perfilAdministrador', [App\Http\Controllers\AdministradorController::class, 'editar'])->name('perfilAdministrador.editar');
    Route::get('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'perfilFunc'])->name('perfilAdministrador.perfilFunc');
    Route::post('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'editarFunc'])->name('perfilAdministrador.editarFunc');
    Route::get('/cadastroFuncionario', function(){return view('administrador.cadastroFuncionario');})->name('cadastroFuncionario');
    Route::get('/editarPerfilFuncionario', function(){return view('administrador.editarPerfilFuncionario');})->name('editarPerfilFuncionario');
    Route::get('/recuperarAcessoAdministrador', function(){return view('administrador.recuperarAcesso');})->name('recuperarAcessoAdministrador');
    Route::get('/gerenciaUsuarios', 'AdministradorController@buscarUsuarios')->name('gerenciaUsuario');
    Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');
    Route::any('/consultar_linhas/resultado', 'LinhaController@consulta')->name('consulta');
    Route::get('/gerenciaUsuarios', 'AdministradorController@buscarFuncionarios')->name('gerenciaFuncionarios');
    Route::get('/gerenciaClientes', 'AdministradorController@buscarClientes')->name('gerenciaClientes');
    Route::get('/adicionarLinha', function(){return view('administrador.adicionarLinha');})->name('adicionaLinha');
    Route::get('/verificarLogs', function(){return view('funcionario.verificarLogs');})->name('verificarLogs');
    Route::post('/criarFuncionario', 'AdministradorController@criarFuncionario')->name('criarFuncionario');
    Route::get('/editarPerfilFuncionario/{email}', [App\Http\Controllers\AdministradorController::class, 'perfilFunc'])->name('perfilAdministrador.perfilFunc');
    Route::post('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'editarFunc'])->name('perfilAdministrador.editarFunc');
    Route::delete('/gerenciaUsuarios', [App\Http\Controllers\AdministradorController::class, 'excluir'])->name('gerenciaUsuarios.excluir');

});


Route::get('/base', function(){
    return view('app');
    })->name('base');

Route::get('/recuperarAcessoAdministrador', function(){
    return view('administrador.recuperarAcesso');
})->name('recuperarAcessoAdministrador');

//Rotas de autentificação de usuários.
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'clienteLogin'])->name('clienteLogin');
Route::get('/login/funcionario', [App\Http\Controllers\Auth\LoginController::class, 'showFuncionarioLoginForm'])->name('funcionarioLoginfront');
Route::post('/login/funcionario', [App\Http\Controllers\Auth\LoginController::class, 'funcionarioLogin'])->name('funcionarioLogin');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('/recuperarAcessoCliente', function(){ return view('cliente.recuperarAcesso');})->name('recuperarAcessoCliente');


?>
