<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente as Cli;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Método padrão para preencher o formulário (valores provisórios em 20/10)
     */

    public function index(){
        $cliente = Cli::index();
        return view("cliente.perfil", ['cliente'=>$cliente]);
    }

    function login(Request $request)
    {
        $requisicao = DB::select("select * from cliente where email = ?", [$request->email])[0];
        if($requisicao){
            $cliente = new Cliente;
            $cliente->CPF = $requisicao->CPF;
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
        $passagens = DB::select('SELECT codigo, num_assento, data_compra FROM passagem WHERE cpf_cliente = ? ORDER BY data_compra DESC;', [$cpf]);
        return view('cliente.minhasPassagens', ['passagens'=>$passagens]);
    }

}
