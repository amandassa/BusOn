<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente as Cli;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
 

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

    public function index(){
        $cliente = Cli::index();
        return view("cliente.perfil", ['cliente'=>$cliente]);
    }
    public function editar(Request $request){
        $Cliente = Cli::editar($request);

        if ($Cliente == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($Cliente ==2 ) {
            return redirect()
                        ->route('perfilCliente.index')
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
        $cliente = Cli::index();
        $cpf = $cliente['cpf'];
        $passagens = DB::select('SELECT codigo, num_assento, data_compra FROM passagem WHERE cpf_cliente = ? ORDER BY data_compra DESC;', [$cpf]);
        return view('cliente.minhasPassagens', ['passagens'=>$passagens]);
    }

}
