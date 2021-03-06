<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddTrechoRequest;
use App\Http\Requests\StoreCadastroFuncionarioRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAlteracaoDadosRequest;
use App\Models\Administrador;
use App\Models\Log;
use Dotenv\Regex\Result;
use App\Models\Linha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Funcionario;
use App\Console\Kernel;

class AdministradorController extends Controller
{

    public function criarFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        Administrador::criarFuncionario($request);
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
        $atributo = $request["buscaOp"];
        $valor_atributo = $request["buscaG"];
        $tipoUsuario = $request["tipoUser"];
        $matricula = auth()->guard('funcionario')->user()->matricula;

        if($valor_atributo == null){
            if($tipoUsuario == "adm"){
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE is_admin = 1 AND matricula != $matricula");
            }
            elseif($tipoUsuario == "func"){
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE is_admin = 0 AND matricula != $matricula");
            }else{
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE matricula != $matricula");
            }
        }
        else{
            if($tipoUsuario == "todos"){  
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE $atributo LIKE '$valor_atributo%' AND matricula != $matricula");
            }elseif($tipoUsuario == "func"){
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE $atributo LIKE '$valor_atributo%' AND is_admin = 0 AND matricula != $matricula");
            }else{
                $funcionarios = DB::select("SELECT * FROM funcionario WHERE $atributo LIKE '$valor_atributo%' AND is_admin = 1 AND matricula != $matricula");
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
        $administrador = Administrador::index();
        return view("administrador.perfil", ['administrador'=>$administrador]);
    }
    
    public function editar(StoreAlteracaoDadosRequest $request){
        $adm = Administrador::editar($request);

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
        $funcionario = Administrador::perfilFunc($email);
        return view("administrador.editarPerfilFuncionario", ['funcionario'=>$funcionario]);
    }
    
    public function editarFunc(Request $request){
        $email = $request['email'];
        $request->validate([
            ['email' => 'unique:funcionario,email,'.$email.',email'],
            'email.unique' => 'Email já utilizado na base de dados!']); 
        $func = Administrador::editarFunc($request);
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
        Administrador::addTrecho($request);
        return redirect()->back()->with('message', 'Trecho Cadastrado!');
    }
    
    public function excluir(Request $request){
        $usuario = DB::select("select * from funcionario where email = ?", [$request['email']])[0];
        $adm = $usuario->is_admin;
        $nome = $usuario->nome;
        Administrador::excluir($usuario);      
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
     * @return logs 
     */
    public function LogsAdministrador(Request $request)
    {

        $tipoBusca = $request['buscaOp'];
        $id = $request['idFuncionario'];
        $dataInicio = $request["dataInicio"];
        $dataFim = $request["dataFim"];
       
        $logs = Log::buscarLogs($tipoBusca, $id, $dataInicio, $dataFim);

       

        return view('administrador.verificarLogs')->with('logs', $logs);
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
           exit;
    
        return response()->make($output, 200, $headers);
    }

    public static function definirHorarioBackup(Request $request){        
        Kernel::setPeriodicidadeHorario($request->periodicidade, $request->horario);
        return redirect()->route('inicial_adm');
    }

}
?>