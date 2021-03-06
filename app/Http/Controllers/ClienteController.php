<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use App\Models\Linha;
use App\Models\Log;
use App\Models\Passagem;
use App\Models\Pagamento;
use App\Models\Pagamento_cartao;
use App\Models\Pagamento_boleto;
use App\Models\Pagamento_pix;
use App\Http\Requests\StoreAlteracaoDadosRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
 

    public function index(){
        $consultas = DB::select("select cidade_partida from trecho");
        $consultas_saidas = DB::select("select cidade_chegada from trecho");
        $trechos_partida = [];
        $trechos_chegada = [];
        foreach($consultas as $consulta){
            array_push($trechos_partida, $consulta->cidade_partida);
        }        
        foreach($consultas_saidas as $consulta){
            array_push($trechos_chegada, $consulta->cidade_chegada);
        }        

        return view('cliente.inicio', ['trechos_partida' => json_encode($trechos_partida), 'trechos_chegada' => json_encode($trechos_chegada)]);
    }

    /**
     * Busca uma passagem pela cidade de origem e destino
     */
    public function buscarPassagem(Request $request){
        $linha = Linha::buscar_linhaPassagens($request['cidadePartida'], $request['cidadeDestino'], $request['dataPartida']);
        return view('cliente.selecao')->with('linha', $linha);
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
           Log::acessoCliente();
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

    public function indexB(){
        $cliente = Cliente::index();
        return view("cliente.perfil", ['cliente'=>$cliente]);
    }

    public function editar(StoreAlteracaoDadosRequest $request){
        $cnt = Cliente::editar($request);
        if ($cnt == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos est?? vazio!, altera????o n??o realizada');
        } elseif ($cnt ==2 ) {
            return redirect()
                        ->route('perfilCliente')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas n??o coincidem');
        }
    }

    /**
     * Consulta as passagens compradas pelo cliente
     */
    public function consultaMinhasPassagens() {
        $cpf = Auth::guard('cliente')->user()->cpf;
        $passagens = DB::select("SELECT codigo, cidade_partida, cidade_chegada, num_assento, data FROM passagem WHERE cpf_cliente = ? ORDER BY data DESC;", [$cpf]);
        //dd($passagens);
        return view('cliente.minhasPassagens', ['passagens' => $passagens]);
    }

}
