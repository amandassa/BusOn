<?php

//use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas restritas apenas para CLIENTES
Route::middleware(['auth:cliente'])->group(function () {
    Route::get('/inicio', function(){return view('cliente.inicio');})->name('inicio');
    Route::get('/minhasPassagens', 'ClienteController@consultaMinhasPassagens')->name('minhasPassagens');
    Route::get('/selecao', 'ClienteController@indexSelecao')->name('selecao');    
    Route::get('/pagamento', 'ClienteController@indexPagamento')->name('pagamento');    
    Route::post('/confirmacao', 'ClienteController@efetuarPagamento')->name('confirmacao');
    Route::get('/confirmacaoB', function(){return view('cliente.confirmacao_pagamento.confirmacaoBoleto');})->name('confirmacaoBoleto');
    Route::get('/perfilCliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('perfilCliente');
    Route::post('/perfilCliente', [App\Http\Controllers\ClienteController::class, 'editar'])->name('perfilCliente.editar');
    
});

//Rotas restritas apenas para FUNCIONARIOS
Route::middleware(['auth:funcionario'])->group(function () {
    Route::get('/inicialFuncionario', 'FuncionarioController@estatisticas')->name('inicial_func');
    Route::post('/inicialFuncionario', 'FuncionarioController@estatisticas')->name('estatisticas');
    Route::get('/perfilFuncionario', function(){return view('funcionario.perfil');})->name('perfilFuncionario');
    Route::get('/editarAgenda', function(){return view('funcionario.agendaEditar');});
    Route::get('/recuperarAcessoFuncionario', function(){return view('funcionario.recuperarAcesso');})->name('recuperarAcessoFuncionario');
    Route::get('/perfilFuncionario', [App\Http\Controllers\FuncionarioController::class, 'index'])->name('perfilFuncionario.index');
    Route::post('/perfilFuncionario', [App\Http\Controllers\FuncionarioController::class, 'editar'])->name('perfilFuncionario.editar');
    //Administradores também possem acesso
    Route::get('/gerarRelatorio', 'FuncionarioController@gerarRelatorioViagem')->name('gerarRelatorio');
    Route::post('/gerarRelatorio', 'FuncionarioController@buscarRelatorioViagem')->name('buscarRelatorio');    
    Route::get('/venderPassagens', 'LinhaController@index')->name('venderPassagens');
    Route::post('/venderPassagens/consulta', 'LinhaController@consulta')->name('consultaVP');
    Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');    
    Route::post('/venderPassagens', [App\Http\Controllers\FuncionarioController::class, 'vender'])->name('vende');
});

//Rotas restritas apenas para ADMNISTRADOR
Route::middleware(['auth:funcionario', 'adm'])->group(function () {
    Route::get('/inicialAdm', 'AdministradorController@estatisticasAdministrador')->name('inicial_adm');
    Route::post('/inicialAdm', 'AdministradorController@estatisticasAdministrador')->name('estatisticas');
    Route::get('/perfilAdministrador', function(){return view('administrador.perfil');})->name('perfilAdministrador');
    
    Route::get('/adicionarTrecho', function(){return view('administrador.adicionarTrecho');})->name('adicionaTrecho');
    Route::post('/adicionarTrecho', 'AdministradorController@cadastrarTrecho')->name('adicionarTrecho');
    
    Route::get('/buscarTrechos', 'TrechoController@startSearchScreen')->name('buscarTrechos');
    Route::post('/buscarTrechos', 'LinhaController@getTrechos')->name('consulta_trecho');

    Route::get('/adicionarLinha', 'TrechoController@startLinha')->name('adicionaLinha');
    Route::post('/adicionarLinha//select', 'LinhaController@BuildLinha')->name('trechoSelect');
    Route::post('/adicionarLinha', function(){return redirect()->route('adicionaTrecho');})->name('gotoAdicionarTrecho');

    Route::get('/perfilAdministrador', [App\Http\Controllers\AdministradorController::class, 'index'])->name('perfilAdministrador.index');
    Route::post('/perfilAdministrador', [App\Http\Controllers\AdministradorController::class, 'editar'])->name('perfilAdministrador.editar');
    Route::get('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'perfilFunc'])->name('perfilAdministrador.perfilFunc');
    Route::post('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'editarFunc'])->name('perfilAdministrador.editarFunc');
    Route::get('/cadastroFuncionario', function(){return view('administrador.cadastroFuncionario');})->name('cadastroFuncionario');
    Route::get('/editarPerfilFuncionario', function(){return view('administrador.editarPerfilFuncionario');})->name('editarPerfilFuncionario');
    Route::get('/recuperarAcessoAdministrador', function(){return view('administrador.recuperarAcesso');})->name('recuperarAcessoAdministrador');
    Route::get('/gerenciaUsuarios', 'AdministradorController@buscarUsuarios')->name('gerenciaUsuario');
    Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');
    Route::post('/consultar_linhas', 'LinhaController@consulta')->name('consulta');
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
