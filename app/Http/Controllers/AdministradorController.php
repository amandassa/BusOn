<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddTrechoRequest;
use App\Http\Requests\StoreCadastroFuncionarioRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAlteracaoDadosFuncionarioRequest;
use App\Models\Administrador as Adm;
use Dotenv\Regex\Result;
use App\Models\Linha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Funcionario;

class AdministradorController extends Controller
{

    public function criarFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        Adm::criarFuncionario($request);
        return redirect()->back()->with('message', 'Funcionário Cadastrado com Sucesso!');
        /*
        $cpf = str_replace(".", "", $request->cpf);
        $cpf = str_replace("-", "", $cpf);
        $nome = $request->nome;
        $email = $request->email;
        $is_admin = null;
        if (isset($_POST['is_admin'])) {
            $is_admin = '1';
        } else {
            $is_admin = '0';
        }
        $senha = Hash::make($request->senha);        
        DB::statement('insert into funcionario(nome, cpf, email, password, is_admin) values (?, ?, ?, ?, ?)', [$nome, $cpf, $email, $senha, $is_admin]);
        $funcionario = new Funcionario;
        $request = [
                 'nome' => $nome,
                 'email' => $email,
                 'cpf'  => $cpf,
                 'password' => $senha,
                 'is_admin' => $is_admin
                 ];
        $funcionario->fill($request);
        
        
        */
    }

    // validador das informações do formulário da tela de criação do funcionário
    public function storeCadastroFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        dd($request->all());
    }

    /**
     * Busca todos os Usuários do sistema
     */
    public function buscarFuncionarios (Request $request)
    {              
        if($request["buscaG"] == null){
            $funcionarios = DB::select("SELECT * FROM funcionario");
        }
        else{
            $atributo = $request["buscaOp"];
            $valor_atributo = $request["buscaG"];
            if($request["tipoUser"] == "todos"){  
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE $atributo LIKE '$valor_atributo%'");
            }elseif($request["tipoUser"] == "funcionario"){
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE $atributo LIKE '$valor_atributo%' AND is_admin = 0");
            }else{
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE $atributo LIKE '$valor_atributo%' AND is_admin = 1");
            }
        }
        //return os funcionarios cadastrados no sistema;
        return view('administrador.gerenciaFuncionarios', ['funcionarios'=>$funcionarios]);
    }

    /**
     * Busca todos os Clientes do sistema
     */
    public function buscarClientes (Request $request)
    {              
        if($request["buscaGu"] == null){
            $clientes = DB::select("SELECT * FROM cliente");
        }
        else{
            $atributo = $request["buscaOp"];
            $valor_atributo = $request["buscaGu"];
            $clientes = DB::select("SELECT * FROM cliente WHERE $atributo LIKE '$valor_atributo%'");
        }
        //return os usuários cadastrados no sistema;
        return view('administrador.gerenciaClientes', ['clientes'=>$clientes]);
    }

    public function index(){
        $administrador = Adm::index();
        return view("administrador.perfil", ['administrador'=>$administrador]);
    }
    
    public function editar(Request $request){
        $adm = Adm::editar($request);

        if ($adm == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio, alteração não realizada.');
        } elseif ($adm ==2 ) {
            return redirect()
                        ->route('perfilAdministrador.index')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidem.');
        }
        
    }

    public function perfilFunc($email){
        $funcionario = Adm::perfilFunc($email);
        return view("administrador.editarPerfilFuncionario", ['funcionario'=>$funcionario]);
    }
    
    public function editarFunc(Request $request){
        $func = Adm::editarFunc($request);

        if ($func['id'] == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio, alteração não realizada.');
        } elseif ($func['id'] ==2 ) {
            return redirect()
                        ->route('perfilAdministrador.perfilFunc', ['email' =>$func['email']])
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidem.');
        }
        
    }

    public function cadastrarTrecho(StoreAddTrechoRequest $request){
        Adm::addTrecho($request);
        return redirect()->back()->with('message', 'Trecho Cadastrado!');
    }
    
    public function excluir(Request $request){
        $usuario = DB::select("select * from funcionario where email = ?", [$request['email']])[0];
        $adm = $usuario->is_admin;
        $nome = $usuario->nome;
        Adm::excluir($request);      
        if ($adm == 1){
             return redirect()
                        ->route('gerenciaFuncionarios')
                        ->with('success', "Administrador(ora) $nome excluido(a) com sucesso!");
        }else {
            return redirect()
            ->route('gerenciaFuncionarios')
            ->with('success', "Funcionario(a) $nome excluido(a) com sucesso!");
        }
         
    }


    /**
     * Retorna todas as estaticas da tela inicial do administrador
     *
     * @param Request $request
     * @return dados 
     */
    public function estatisticasAdministrador(Request $request)
    {
        $mat_adm= Auth::guard('funcionario')->user()->matricula; //pega a matricula do funcionario logado 
        
        $passagens_vendidas = Adm::passagens_vendidas($mat_adm);//total de passagens vendidas
        $linha_menos_vendida = Linha::linha_menos_vendida(); //linha menos vendida
        $linha_mais_vendida = Linha::linha_mais_vendida(); //linha mais vendida
        
        //busca os dados de uma linha dado um determinado código
        if($request['buscarLinha'] == null){
            $cod_busca = 1;
        }else{
            $cod_busca = $request['buscarLinha'];
        }
        $linha_por_codigo =  Linha::buscar_linha($cod_busca);
        
        //busca dados de vendas de uma determinada linha
        if($request['buscarLinhaHoje'] == null){
            $cod_busca_vendas_linha = 1;
        }else{
            
            $cod_busca_vendas_linha = $request['buscarLinhaHoje'];
        }
        $vendidas_linha = Adm::buscar_vendas_linha($cod_busca_vendas_linha);

        //retorna o total de passagens vendidas 
        $passagens_vendidas_total = Adm::passagensVendidasTotal();

        $dados = [
            'qtd_vendas_hoje' => $passagens_vendidas['qtd_vendas_hoje'], 
            'qtd_vendas_7dias' => $passagens_vendidas['qtd_vendas_7dias'], 
            'qtd_vendas_30dias' => $passagens_vendidas['qtd_vendas_30dias'],

            'total_mais_vendida' => $linha_mais_vendida['total_mais_vendida'],
            'linha_mais_vendida_partida' => $linha_mais_vendida['linha_mais_vendida_partida'],
            'linha_mais_vendida_chegada' => $linha_mais_vendida['linha_mais_vendida_chegada'],

            'total_menos_vendida' => $linha_menos_vendida['total_menos_vendida'],
            'linha_menos_vendida_partida' => $linha_menos_vendida['linha_menos_vendida_partida'],
            'linha_menos_vendida_chegada' => $linha_menos_vendida['linha_menos_vendida_chegada'],

            'total_vendas' => $linha_por_codigo['total'],
            'cidade_partida' => $linha_por_codigo['cidade_partida'],
            'cidade_chegada'=> $linha_por_codigo['cidade_chegada'],

            'passagens_vendidas_total' => $passagens_vendidas_total['qtd_vendas_total_hoje'],

            'total_vendas_linha' => $vendidas_linha['total'],
            'cidade_partida_vendas_linha' => $vendidas_linha['cidade_partida'],
            'cidade_chegada_vendas_linha'=> $vendidas_linha['cidade_chegada'],


        ];
        
        return view('administrador.inicial_adm')->with('dados', $dados);
    }

}
?>