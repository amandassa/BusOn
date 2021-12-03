<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use App\Models\Linha;
use App\Models\Passagem;
use App\Models\Pagamento;
use App\Models\Pagamento_cartao;
use App\Models\Pagamento_boleto;
use App\Models\Pagamento_pix;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
 

    public function indexSelecao(){        
        $linha = DB::select("SELECT * FROM linha WHERE codigo = 2")[0];         
        return view('cliente.selecao', ['linha' => $linha]);
    }

    /**
     * Busca uma passagem pela cidade de origem e destino
     */
    public function buscarPassagem(Request $request){
        $linha = [];
        
        if($request['cidadePartida'] != null and $request['cidadeDestino'] != null){
            dd($request['cidadePartida']);
            //$linha = Linha::buscar_linhaPassagens($request['cidadePartida'], $request['cidadeDestino'], $request['dataPartida']); 
           
        }
        return view('cliente.inicio')->with('linha', $linha);
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
        $cliente = Cliente::index();
        return view("cliente.perfil", ['cliente'=>$cliente]);
    }

    public function editar(Request $request){
        $cnt = Cliente::editar($request);
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
