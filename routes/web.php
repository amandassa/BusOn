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

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');

//Rotas restritas apenas para CLIENTES
Route::group(['middleware' => ['auth:cliente']], function () {
    Route::get('/inicio', function(){return view('cliente.inicio');})->name('inicio');
    Route::any('/perfilCliente', 'ClienteController@index')->name('perfilCliente');
    Route::post('/editarPerfilCliente', 'ClienteController@editarPerfil')->name('editarPerfilCliente');
    Route::get('/selecao', function(){return view('cliente.selecao');})->name('selecao');
    Route::get('/pagamento', function(){return view('cliente.partials.cartao');})->name('pagamento.cartao');
    Route::get('/pagamento', function(){return view('cliente.pagamento')->with('valor', 1);})->name('pagamento');
    Route::get('/pagamento/cartao', function(){return view('cliente._partials.cartao');})->name('cartao');
    Route::get('/pagamento/boleto', function(){return view('cliente._partials.boleto');})->name('boleto');
    Route::get('/confirmacao', function(){return view('cliente.confirmacao_pagamento.confirmacao');})->name('confirmacao');
    Route::get('/confirmacaoB', function(){return view('cliente.confirmacao_pagamento.confirmacaoBoleto');})->name('confirmacaoBoleto');
    Route::get('/recuperarAcessoCliente', function(){ return view('cliente.recuperarAcesso');})->name('recuperarAcessoCliente');
});


//Rotas restritas apenas para FUNCIONARIOS
Route::group(['middleware' => ['auth:funcionario']], function () {
    Route::get('/inicialFuncionario', function(){return view('funcionario.inicial_func');})->name('inicial_func');
    Route::get('/perfilFuncionario', function(){return view('funcionario.perfil');})->name('perfilFuncionario');
    Route::get('/verificarLogs', function(){return view('funcionario.verificarLogs');})->name('verificarLogs');
    Route::get('/geraRelat', function(){return view('funcionario.geraRelat');});
    Route::get('/editarAgenda', function(){return view('funcionario.editarAgenda');});
    Route::get('/recuperarAcessoFuncionario', function(){return view('funcionario.recuperarAcesso');})->name('recuperarAcessoFuncionario');
}); 

//Rotas restritas apenas para ADMNISTRADOR
Route::group(['middleware' => ['adm']], function () {
    Route::get('/inicialAdm', function(){return view('administrador.inicial_adm');})->name('inicial_adm');
    Route::get('/perfilAdministrador', function(){return view('administrador.perfil');})->name('perfilAdministrador');
    Route::get('/venderPassagens', function(){return view('administrador.vender_passagens');})->name('venderPassagens');
    
}); 






Route::get('/base', function(){
    return view('app');
    })->name('base');



















Route::get('/gerenciaUsuario_adm', function(){
    return view('administrador.gerenciaUsuarios');
})->name('gerenciaUsuarios');

Route::get('/consultar_linhas', 'LinhaController@index')->name('consultar_linhas');

Route::any('/consultar_linhas/resultado', 'LinhaController@consulta')->name('consulta');

Route::get('/adicionarLinha', function(){
    return view('administrador.adicionarLinha');
})->name('adicionaLinha');

Route::get('/adicionarTrecho', function(){
    return view('administrador.adicionarTrecho');
})->name('adicionaTrecho');










Route::get('/cadastroFuncionario', function(){
    return view('administrador.cadastroFuncionario');
})->name('cadastroFuncionario');

Route::get('/editarPerfilFuncionario', function(){
    return view('administrador.editarPerfilFuncionario');
})->name('editarPerfilFuncionario');

Route::get('/recuperarAcessoAdministrador', function(){
    return view('administrador.recuperarAcesso');
})->name('recuperarAcessoAdministrador');




Route::get('/gerenciaUsuarios', function(){
    return view('administrador.gerenciaUsuarios');
})->name('gerenciaUsuarios');

//Rotas de autentificação de usuários.
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'clienteLogin'])->name('clienteLogin');
Route::get('/login/funcionario', [App\Http\Controllers\Auth\LoginController::class, 'showFuncionarioLoginForm'])->name('funcionarioLoginfront');
Route::post('/login/funcionario', [App\Http\Controllers\Auth\LoginController::class, 'funcionarioLogin'])->name('funcionarioLogin');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/criarFuncionario', [App\Http\Controllers\Auth\RegisterController::class, 'createFuncionario'])->name('criarFuncionario');

Route::post('/adicionarTrecho', [App\Http\Controllers\AdministradorController::class, 'storeCadastrarTrecho'])->name('adicionarTrecho');

Route::get('/perfilAdministrador', [App\Http\Controllers\AdministradorController::class, 'index'])->name('perfilAdministrador.index');
Route::post('/perfilAdministrador', [App\Http\Controllers\AdministradorController::class, 'editar'])->name('perfilAdministrador.editar');

Route::get('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'perfilFunc'])->name('perfilAdministrador.perfilFunc');
Route::post('/editarPerfilFuncionario', [App\Http\Controllers\AdministradorController::class, 'editarFunc'])->name('perfilAdministrador.editarFunc');

?>
