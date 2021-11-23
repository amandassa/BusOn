<?php

namespace App\Models;

use App\Http\Requests\StoreAddTrechoRequest;
use App\Models\Funcionario as Func;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreCadastroFuncionarioRequest;
use Illuminate\Database\QueryException;
use DateTime;

// Use DB, use Request

class Administrador extends Funcionario
{

    
    // table, fillable =>
    /**
     * Criar novo funcionário.
     */
    
    public static function criarFuncionario(StoreCadastroFuncionarioRequest $request){
        $nome = $request['nome'];
        $email = $request['email'];
        $cpf = str_replace(".", "", $request['cpf']);
        $cpf = str_replace("-", "", $cpf);
        $senha = $request['senha'];
        $is_admin = null;
        if (isset($_POST['is_admin'])) {
            $is_admin = '1';
        } else {
            $is_admin = '0';
        }
        $confirmarSenha = $request['confirmacaoSenha'];
        if ($senha == $confirmarSenha) {
            DB::insert('insert into funcionario (nome, email, cpf, password, is_admin) values (?, ?, ?, ?, ?)',
            [$nome, $email, $cpf, Hash::make($senha), $is_admin]);
        }
    }

    public static function index(){ 

        $emaillogado = Auth::guard('funcionario')->user()->email;
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];

        $admCpf = $usuario->CPF;
        $admNome = $usuario->nome;
        $admEmail = $usuario->email;
        $admMatricula = $usuario->matricula;
        $admSenha = '';
        $confirmar = '';


        $administrador = [
            'cpf'=> $admCpf,
            'entradaNome' => $admNome,
            'entradaEmail'=> $admEmail,
            'entradaMatricula' => $admMatricula,
            'entradaSenha' => $admSenha,
            'entradaConfirmarSenha' => $confirmar       
         ];

        return $administrador;
              
    }

    public static function editar(Request $request){
            $emaillogado = Auth::guard('funcionario')->user()->email;
            $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];
            
            $cpf = $usuario->CPF;
            $nome = $request['nome'];
            $matricula = $usuario->matricula;
            $email = $request['email'];
            $senha = $request['senha'];
            $confirmarSenha = $request['confirmarSenha'];
            if(empty($nome) or empty($email) or empty($senha) or empty($confirmarSenha)){
                return 1;
            }else{

                if($senha == $confirmarSenha){
                    DB::update('UPDATE funcionario set nome = ?, email = ?, password = ? where cpf = ?',
                    [$nome, $email, Hash::make($senha), $cpf]);
                    return 2;
                }
                 else {
                    return 3;
                }
            }
            
    }

    public static function perfilFunc($email){ 
        $emaillogado = $email;
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];

        $funCPf = $usuario->CPF;
        $funNome = $usuario->nome;
        $funEmail = $usuario->email;
        $funMatricula = $usuario->matricula;
        $funSenha = '';
        $confirmar = '';


        $funcionario = [
            'cpf'=> $funCPf,
            'entradaNome' => $funNome,
            'entradaEmail'=> $funEmail,
            'entradaMatricula' => $funMatricula,
            'entradaSenha' => $funSenha,
            'entradaConfirmarSenha' => $confirmar       
         ];

        return $funcionario;
              
    }

    public static function editarFunc(Request $request){
        $matricula =$request['matricula'];
        $usuario = DB::select("select * from funcionario where matricula = ?", [$matricula])[0];
        $cpf = $usuario->CPF;
        $nome = $request['nome'];
        $matricula = $usuario->matricula;
        $email = $request['email'];
        $senha = $request['senha'];
        $confirmarSenha = $request['confirmarSenha'];

        if(empty($nome) or empty($email) or empty($senha) or empty($confirmarSenha)){
                $usu = [
                    'id' => '1',
                    'email' => $email
                ];
                return $usu;
        }else{
            if($senha == $confirmarSenha){
                DB::update('UPDATE funcionario set nome = ?, email = ?, password = ? where cpf = ?',
                [$nome, $email, Hash::make($senha), $cpf]);
                $usu = [
                    'id' => '2',
                    'email' => $email
                ];
                return $usu;
                
            }else {
                $usu = [
                    'id' => '3',
                    'email' => $email
                ];
                return $usu;
            }
        }
        
    }

    public static function addTrecho(StoreAddTrechoRequest $request){
        $origem = $request['origem'];
        $destino = $request['destino'];
        $valor = $request['preço'];
        $valor = intval($valor);
        $horas = $request['duração1'];
        $minutos = $request['duração2'];
        $segundos = $request['duração3'];
        
        if($horas < 10) $horas = "0"."".$horas;
        if($minutos < 10) $minutos = "0"."".$minutos;
        if($segundos < 10) $segundos = "0"."".$segundos;

        $duração = sprintf("%s:%s:%s", $horas, $minutos, $segundos);
        
        DB::insert("INSERT INTO trecho (cidade_partida, cidade_chegada, duracao , preco) VALUES (?, ?, ?, ?)", [$origem, $destino, $duração, $valor]);

    }

    public static function excluir(Request $request){
        $email = $request['email'];
        DB::delete('DELETE FROM funcionario WHERE email = ?', [$email]);
    }

    

     /**
     * Passagens vendidas no sistema
     *
     * @return [$qtd_vendas_total_hoje, $qtd_vendas_total_dias, $qtd_vendas_total_30dias] um array 
     * com as passagens vendidas no sistema nos períodos indicados
     */
    public function passagensVendidasTotal()
    {
        $data = new DateTime(); //Pega a data atual
        
        $data_hoje = $data->format('Y-m-d');
        $data_uma_semana_atras = $data->modify('-7 day')->format('Y-m-d');  //Pega a data 7 dias antes
        $data_uma_mes_atras = $data->modify('+7 day')->modify('-1 month')->format('Y-m-d'); //Pega a data 30 dias antes
    
        $qtd_vendas_total_hoje = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE $data_hoje = (SELECT data_compra FROM passagem WHERE venda.codigo_passagem = passagem.codigo)");
        $qtd_vendas_total_7dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem = passagem.codigo) BETWEEN $data_uma_semana_atras AND $data_hoje)"); 
        $qtd_vendas_total_30dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem = passagem.codigo) BETWEEN $data_uma_mes_atras AND $data_hoje)"); 

        return [$qtd_vendas_total_hoje, $qtd_vendas_total_7dias, $qtd_vendas_total_30dias];
    }

}
?>