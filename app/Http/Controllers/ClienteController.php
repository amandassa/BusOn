<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Passagem;
use App\Models\Pagamento;
use App\Models\Pagamento_cartao;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Método padrão para preencher o formulário (valores provisórios em 20/10)
     */

    public function index(){        
        return view("cliente.perfil");
    }

    public function indexPagamento(Request $request){
        return view('cliente.pagamento', ['linha' => $request['linha']]);
    }

    public function efetuarPagamento(Request $request){        
        $num_assento = 
        Passagem::criar($request['num_assento'], $request['linha'][0]->codigo, $request['cidade_partida'], $request['$cidade_chegada'], $request['data'], Auth::guard('cliente')->user()->cpf);
        $codigo_passagem = Passagem::encontrar('cpf', Auth::guard('cliente')->user()->cpf);
        Pagamento::criar(0, 1, $codigo_passagem);
        $codigo_pagamento = Pagamento::encontrar('codigo_passagem', $codigo_passagem);
        
        switch($request['opcao']){
            // Cartão de Crédito
            case 1:
                $num_cartao = $request['num_cartao'];
                $parcelas = $request['parcelas'];
                $validade = $request['validade'];
                $ccv = ['ccv'];
                $nome_titular = ['nome_titular'];
                
                
                Pagamento_cartao::criar($num_catao, $parcelas, $nome_titular, $validade, $ccv, $codigo_pagamento);
                break;
        }
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

    /**
     * Editar perfil cliente
     */
    public function editarPerfil (Request $request) {
        $nome = $request['entradaNome'];
        $email = $request['entradaEmail'];
        $cpf = $request['cpf'];
        $senha = $request['entradaSenha'];
        $confirmarSenha = $request['entradaConfirmarSenha'];

        return DB::update('UPDATE cliente nome set ?, email set ?, senha set ? where cpf = ?',
        [$nome, $email, Hash::make($senha), $cpf]);
    }

    /**
     * Consulta as passagens compradas pelo cliente
     */
    public function consultaMinhasPassagens() {
        $cliente = Cli::index();
        $cpf = $cliente['cpf'];
        $passagens = DB::select('SELECT codigo, cidade_partida, cidade_chegada, num_assento, data FROM passagem WHERE cpf_cliente = ? ORDER BY data DESC;', [$cpf]);
        return view('cliente.minhasPassagens', ['passagens'=>$passagens]);
    }

}
