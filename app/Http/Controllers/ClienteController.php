<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente as Cli;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use App\Models\Linha;
use App\Models\Passagem;
use App\Models\Pagamento;
use App\Models\Pagamento_boleto;
use App\Models\Pagamento_cartao;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
 

    public function indexSelecao(){        
        $linha = DB::select("SELECT * FROM linha WHERE codigo = 14")[0];        
        return view('cliente.selecao', ['linha' => $linha]);
    }

    /**
     * Busca uma passagem pela cidade de origem e destino
     */
    public function buscarPassagem(Request $request){
        $linha = [];
        
        if($request['cidadePartida'] != null and $request['cidadeDestino'] != null){
            dd($request['cidadePartida']);
            //$linha = Linha::buscar_passagens($request['cidadePartida'], $request['cidadeDestino'], $request['dataPartida']); 
           
        }
        return view('cliente.inicio')->with('linha', $linha);
    }

    public function indexPagamento(Request $request){ 
        $linha['codigo'] = $request['codigo'];
        $linha['direta'] = $request['direta'];
        $linha['total_vagas'] = $request['total_vagas'];
        $linha['dias_semana'] = $request['dias_semana'];
        $linha['hora_partida'] = $request['hora_partida'];                    
        return view('cliente.pagamento', ['linha' => $linha, 'codigo' => $request['codigo']]);
    }

    public function efetuarPagamento(Request $request){                 
        $linha = json_decode($request['linha_i']);                
        $max_vagas = intval($linha->total_vagas);
        $num_assento = Passagem::getNumAssento(intval($linha->codigo), $max_vagas);
        
        Passagem::criar($num_assento, intval($linha->codigo), "Cidade Partida", "Cidade Chegada", Carbon::now(), Auth::guard('cliente')->user()->cpf);
        $codigo_passagem = Passagem::getCodigoUltimo('cpf_cliente', Auth::guard('cliente')->user()->cpf);
        Pagamento::criar(0, $request['opcao'], $codigo_passagem);
        $codigo_pagamento = Pagamento::getCodigo('codigo_passagem', $codigo_passagem);
        
        switch($request['opcao']){
            // Cartão de Crédito
            case 1:
                $num_cartao =  str_replace(' ', '', $request['numero_cartao']);
                $parcelas = intval($request['parcela']);
                $validade = $request['validade_cartao'];
                $ccv = $request['ccv_cartao'];
                $nome_titular = $request['nome_titular'];                                
                Pagamento_cartao::criar($num_cartao, $parcelas, $nome_titular, $validade, $ccv, $codigo_pagamento);
                break;
            //Boleto
            case 2:
                $nome = Auth::guard('cliente')->user()->nome;
                $cpf = Auth::guard('cliente')->user()->cpf;
                $codigo_barras = rand(1000000000, 9999999999);
                while(!Pagamento_boleto::codigoBarrasDisponivel($codigo_barras)) {
                    $codigo_barras = rand(1000000000, 9999999999);
                }
                Pagamento_boleto::criar($codigo_barras, $nome, $cpf, $codigo_pagamento);
                break;
            
                
        }

        return PassagemController::buscarPedido($codigo_passagem, $request['opcao']);
    }

    function login(Request $request)
    {
        $requisicao = DB::select("select * from cliente where email = ?", [$request->email])[0];
        if($requisicao){
            $cliente = new Cliente;
            $cliente->cpf = $requisicao->cpf;
            $cliente->nome = $requisicao->nome;
            $cliente->email = $requisicao->email;
            $cliente->senha = $requisicao->senha;
           //return $cliente;
        }

        // print_r($data);

            if (!$cliente || !Hash::check($request->senha, $cliente->senha)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }


            $token = $cliente->createToken('my-app-token')->plainTextToken;

            $response = [
                'cliente' => $cliente,
                'token' => $token
            ];

             //return response($response, 201);
             return redirect()->route('home')->with($response);

    }

    public function index(){
        $cliente = Cli::index();
        return view("cliente.perfil", ['cliente'=>$cliente]);
    }
    public function editar(Request $request){
        $cnt = Cli::editar($request);
        if ($cnt == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($cnt ==2 ) {
            return redirect()
                        ->route('perfilCliente')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidems');
        }
    }

    /**
     * Consulta as passagens compradas pelo cliente
     */
    public function consultaMinhasPassagens() {
        $cliente = Cliente::index();
        $cpf = $cliente['cpf'];
        $passagens = DB::select('SELECT codigo, cidade_partida, cidade_chegada, num_assento, data FROM passagem WHERE cpf_cliente = ? ORDER BY data DESC;', [$cpf]);
        return view('cliente.minhasPassagens', ['passagens'=>$passagens]);
    }

}
