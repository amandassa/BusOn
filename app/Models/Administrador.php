<?php

namespace App\Models;

use App\Http\Requests\StoreAddTrechoRequest;
use App\Models\Log;
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

    
    // tabela, fillable =>
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
            
            Log::cadastroFuncionario($cpf);
        }
    }

    public static function index(){ 

        $emaillogado = Auth::guard('funcionario')->user()->email;
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];

        $admCpf = $usuario->cpf;
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
            
            $cpf = $usuario->cpf;
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
        $funCPf = $usuario->cpf;
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
        $cpf = $usuario->cpf;
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
                Log::edicaoFuncionarioAdm($cpf);
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
        $segundos = 0;
        
        if($horas < 10) $horas = "0"."".$horas;
        if($minutos < 10) $minutos = "0"."".$minutos;

        $duração = sprintf("%s:%s:%s", $horas, $minutos, $segundos);
        
        $cpf = Auth::guard('funcionario')->user()->cpf;
        $nome = Auth::guard('funcionario')->user()->nome;
        $date = date('Y-m-d H:i:s');
        $nome_trecho = $origem."-".$destino;        

        DB::insert("INSERT INTO trecho (cidade_partida, cidade_chegada, duracao , preco) VALUES (?, ?, ?, ?)", [$origem, $destino, $duração, $valor]);
        Log::trechoAdicionado($cpf, $nome, $date, $nome_trecho);

    }

    public static function excluir($usuario){
        DB::delete('DELETE FROM funcionario WHERE matricula = ?', [$usuario->matricula]);
        Log::exclusaofuncionario($usuario->cpf);
    }

    

     /**
     * Passagens vendidas no sistema
     *
     * @return qtd_vendas_total_hoje - total de vendas daquele dia
     */
    public static function passagensVendidasTotal()
    {
        $data = new DateTime(); //Pega a data atual
        $data_hoje = $data->format('Y-m-d');
        $qtd_vendas_total_hoje = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE '$data_hoje' = (SELECT date(data) FROM passagem WHERE venda.codigo_passagem = passagem.codigo)");

        return ['qtd_vendas_total_hoje' => $qtd_vendas_total_hoje[0]->contagem_vendas];
    }


    /**
     * Passagens vendidas para uma determinada linha
     *
     * @return qtd_vendas_total_hoje - total de vendas daquele dia
     */
    public static function passagensVendidas_linhaHoje($codigo_linha)
    {
        $data = new DateTime(); //Pega a data atual
        $data_hoje = $data->format('Y-m-d');
         //busca o nome da linha pelo codigo
        $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = $codigo_linha and ordem = 1)");
        $ordem = DB::select("SELECT max(ordem) as ordem from trechos_linha where codigo_linha =  $codigo_linha");
        $cidade_chegada = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = $codigo_linha and ordem = :ordem)", ['ordem' => $ordem[0]->ordem]);
        $total_passagens = DB::select("SELECT count(*) as total FROM venda INNER JOIN passagem on venda.codigo_passagem = passagem.codigo WHERE passagem.codigo_linha = $codigo_linha and date(venda.data_compra) = '$data_hoje'");

        //checa se todas as listas tem algum valor
        if(empty($total_passagens) or empty( $cidade_chegada) or empty($cidade_partida)) {
            return ['total' => 0, 'cidade_partida' => '', 'cidade_chegada' => ''];
        }

        return ['total'=> $total_passagens[0]->total, 'cidade_partida' => $cidade_partida[0]->cidade_partida, 'cidade_chegada' => $cidade_chegada[0]->cidade_chegada];
     }

     /**
     * Busca o nome da linha pelo codigo
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida de uma linha
     */
    public static function buscar_vendas_linha ($codigo_linha)
    { 
        return Administrador::passagensVendidas_linhaHoje ($codigo_linha);

    }

    /**
     * Busca o nome da linha pelo codigo
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida de uma linha
     */
    public static function total_acessos ($data)
    { 
        return  DB::select("SELECT count(*) as total FROM logs WHERE tipo_usuario = 'C' and date(data_hora) = '$data'")[0];
    }

    public static function baixarBackup(){         
        $mysqlHostName      = env('DB_HOST');
        $mysqlUserName      = env('DB_USERNAME');
        $mysqlPassword      = env('DB_PASSWORD');
        $DbName             = env('DB_DATABASE');
        $backup_name        = "mybackup.sql";
        $tabelas             = array("cliente","funcionario","linha","logs","pagamento","pagamento_boleto","pagamento_pix","pagamento_cartao","pagamento_dinheiro","passagem","trecho","trechos_linha","venda"); //here your tabelas...

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();


        $output = '';
        foreach($tabelas as $tabela)
        {
         $show_table_query = "SHOW CREATE TABLE " . $tabela . "";
         $statement = $connect->prepare($show_table_query);
         $statement->execute();
         $show_table_result = $statement->fetchAll();

         foreach($show_table_result as $show_table_row)
         {
          $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
         }
         $select_query = "SELECT * FROM " . $tabela . "";
         $statement = $connect->prepare($select_query);
         $statement->execute();
         $total_row = $statement->rowCount();

         for($count=0; $count<$total_row; $count++)
         {
          $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
          $table_column_array = array_keys($single_result);
          $table_value_array = array_values($single_result);
          $output .= "\nINSERT INTO $tabela (";
          $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
          $output .= "'" . implode("','", $table_value_array) . "');\n";
         }
        }        
        $file_name = 'buson_backup_' . date("Ymd_H:i") . '.sql';
        $file_handle = fopen($file_name, 'w+');        
        fwrite($file_handle, $output);
        fclose($file_handle);        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');        
           header('Pragma: public');
           header('Content-Length: ' . filesize($file_name));
           ob_clean();
           flush();           
           readfile($file_name);
           unlink($file_name);
    }

}
?>
