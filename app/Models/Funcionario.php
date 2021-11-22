<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Http\Requests\AddVendaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

/*
Nome: Funcionario (classe)
Funcionalidade: Representa a entidade funcionário e as ações executadas pela mesma
Autor(es): Israel Braitt
*/
class Funcionario extends Authenticatable {

    use notifiable;
    // atributos
    private string $nome;
    private string $email;
    private string $cpf;
    private string $password;
    private int $matricula;

    protected $table = 'funcionario';
    protected $primaryKey = 'matricula';
    protected $guard = 'funcionario';

    protected $fillable = [
        'nome',
        'matricula',
        'email',
        'CPF',
        'password',       
        'is_admin',
    ];

    public $timestamps = false;

    protected $hidden = [        
        'remember_token',
    ];



    public static function index(){ 
        $cpflogado = Auth::guard('funcionario')->user()->CPF;
        
        $usuario = DB::select("select * from funcionario where CPF = ?", [$cpflogado])[0];


        $funCpf = $usuario->CPF;
        $funNome = $usuario->nome;
        $funEmail = $usuario->email;
        $funMatricula = $usuario->matricula;
        $funSenha = '';
        $confirmar = '';


        $funcionario = [
            'cpf'=> $funCpf,
            'entradaNome' => $funNome,
            'entradaEmail'=> $funEmail,
            'entradaMatricula' => $funMatricula,
            'entradaSenha' => $funSenha,
            'entradaConfirmarSenha' => $confirmar       
         ];

        return $funcionario;
              
    }

    public static function editar(Request $request){
            
            $cpflogado = (Auth::guard('funcionario')->user()->CPF);
            $usuario = DB::select("select * from funcionario where CPF = ?", [$cpflogado])[0];
            
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
                    [$nome, $email, $senha, $cpf]);
                    return 2;
                }
                 else {
                    return 3;
                }
            }
            
    }

    /*public function getAuthPassword(){
        return $this->password;
    }
    */
    

    /*
    Nome: login (método)
    Funcionalidade: Efetuar o login do funcionário no sistema
    Autor(es): Israel Braitt
    */
    public function login() {

    }

    /*
    Nome: logout (método)
    Funcionalidade: Desconectar o funcionário do sistema
    Autor(es): Israel Braitt
    */
    public function logout() {

    }

    /*
    Nome: alterarDados (método)
    Funcionalidade: Alterar os dados (que podem ser alterados) do funcionário
    Autor(es): Israel Braitt
    */
    public function alterarDados(string $novo_nome, string $novo_email, string $nova_senha) {

    }

    /*
    Nome: venderPassagem (método)
    Funcionalidade: Vender passagem para um cliente
    Autor(es): Israel Braitt, Anderson Lima, Guilherme Nobre
    */
    public static function venderPassagem(AddVendaRequest $request) {
        
        $cpflogado = (Auth::guard('funcionario')->user()->CPF);
        $usuario = DB::select("select * from funcionario where CPF = ?", [$cpflogado])[0];

        $matricula = $usuario->matricula;

        $cpf_cliente = $request['cpf_atual'];

        $cpf_cliente = str_replace(".", "", $cpf_cliente);
        $cpf_cliente = str_replace("-", "", $cpf_cliente);

        $data_compra = date("y/m/d/H");

        $cod_passagem = $request['cod_passagem'];
        $valor = $request['preco_atual'];

        $vagas = DB::select('SELECT * FROM linha WHERE codigo = ?', [$cod_passagem])[0];
        $max_vagas = $vagas->total_vagas;

        $assentos = DB::select('SELECT num_assento FROM passagem;');
        $lista_assentos = array();

        for($i = 0; $i < sizeof($assentos); $i++){
            $lista_assentos[$i] = $assentos[$i]->num_assento;
        }

        if(sizeof($assentos) >= $max_vagas){
            return 0;
        }
        else{
            $assento_encontrado = false;
            $assento = 1;
            
            while($assento_encontrado == false){
                $assento = rand(1, $max_vagas);
                if(in_array($assento, $lista_assentos)){
                    $assento_encontrado = true;
                }
            }

            
            DB::insert('INSERT INTO passagem (codigo_linha, cpf_cliente, data_compra, num_assento) VALUES (?, ?, ?, ?);', [$cod_passagem, $cpf_cliente, $data_compra,  $assento]);
            DB::insert('INSERT INTO venda (codigo_passagem, matricula_vendedor, valor) VALUES (?, ?, ?);', [$cod_passagem, $matricula, $valor]);
            DB::insert('INSERT INTO pagamento (codigo_passagem, realizado, forma_pagamento) VALUES (?, ?, ?);', [$cod_passagem, 1, 1]);
            
            $id_pagamento = DB::select('SELECT MAX(codigo) AS id from pagamento')[0];
            $id_pagamento = $id_pagamento->id;

            DB::insert('INSERT INTO pagamento_dinheiro (dinheiro_recebido, codigo_pagamento) VALUES (?, ?);', [$valor, $id_pagamento]);

            
            return 1;
        }
        
        
    }

    /*
    Nome: consultarLinhas (método)
    Funcionalidade: Consultar as linhas disponíveis para viagem
    Autor(es): Israel Braitt
    */
    public function consultarLinhas() {

    }

    /*
    Nome: mudarAgenda (método)
    Funcionalidade: Fazer alterações nas agendas dos trechos das linhas
    Autor(es): Israel Braitt
    */
    public function mudarAgenda() {

    }

    /*
    Nome: alterarTrecho (método)
    Funcionalidade: Fazer alterações em determinado trecho
    Autor(es): Israel Braitt
    */
    public function alterarTrecho() {

    }


     /**
     * Passagens vendidas por um funcionario
     *
     * @return [$qtd_vendas_hoje, $qtd_vendas7dias, $qtd_vendas_30dias] um array com as passagens vendidas
     * por um funcionário nos períodos indicados
     */
    public static function passagens_vendidas($mat_funcionario)
    {
        $data = new DateTime(); //Pega a data atual
        
        $data_hoje = $data->format('Y-m-d');
        $data_uma_semana_atras = $data->modify('-7 day')->format('Y-m-d');  //Pega a data 7 dias antes
        $data_uma_mes_atras = $data->modify('+7 day')->modify('-1 month')->format('Y-m-d'); //Pega a data 30 dias antes
    
        $qtd_vendas_hoje = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND $data_hoje = (SELECT data_compra FROM passagem WHERE venda.codigo_passagem = passagem.codigo)");
        $qtd_vendas_7dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_semana_atras AND $data_hoje)"); 
        $qtd_vendas_30dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_mes_atras AND $data_hoje)"); 

        return ['qtd_vendas_hoje' => $qtd_vendas_hoje[0]->contagem_vendas, 
                'qtd_vendas_7dias' => $qtd_vendas_7dias[0]->contagem_vendas,
                'qtd_vendas_30dias' => $qtd_vendas_30dias[0]->contagem_vendas];

    }
    
}
?>
