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
use Carbon\Carbon;


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
        'cpf',
        'password',       
        'is_admin',
    ];

    public $timestamps = false;

    protected $hidden = [        
        'remember_token',
    ];



    public static function index(){ 
        $cpflogado = Auth::guard('funcionario')->user()->cpf;
        
        $usuario = DB::select("select * from funcionario where cpf = ?", [$cpflogado])[0];


        $funCpf = $usuario->cpf;
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
            
            $cpflogado = (Auth::guard('funcionario')->user()->cpf);
            $usuario = DB::select("select * from funcionario where cpf = ?", [$cpflogado])[0];
            
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

    public static function venderPassagem(AddVendaRequest $request) {        
        
        $cpflogado = (Auth::guard('funcionario')->user()['cpf']);

        $usuario = DB::select("select * from funcionario where cpf = ?", [$cpflogado])[0];

        $matricula = $usuario->matricula;

        $cpf_cliente = $request['cpf_atual'];

        $cpf_cliente = str_replace(".", "", $cpf_cliente);
        $cpf_cliente = str_replace("-", "", $cpf_cliente);

        $data =  date('y/m/d');

        $cod_linha = $request['cod_linha'];
        $valor = $request['preco_atual'];

        $partida = $request['cidade_partida'];
        $destino = $request['cidade_destino'];

        $vagas = DB::select('SELECT * FROM linha WHERE codigo = ?', [$cod_linha])[0];
        $max_vagas = $vagas->total_vagas;

        $num_assento = Passagem::getNumAssento($cod_linha, $max_vagas);
        
        if($num_assento > 0 &&  $num_assento <= $max_vagas){
            DB::insert('INSERT INTO passagem (codigo_linha, cpf_cliente, data, num_assento, cidade_partida, cidade_chegada) VALUES (?, ?, ?, ?, ?, ?);', [$cod_linha, $cpf_cliente, $data,  $num_assento, $partida, $destino]);

            $cod_passagem = DB::select('SELECT codigo FROM passagem WHERE num_assento = :assento AND codigo_linha = :cod_linha AND data = :data', ['assento' => $num_assento, 'cod_linha' => $cod_linha, 'data' => $data]);
            $cod_passagem = $cod_passagem[0]->codigo;
            

            DB::insert('INSERT INTO venda (codigo_passagem, matricula_vendedor, valor) VALUES (?, ?, ?);', [$cod_passagem, $matricula, $valor]);
            DB::insert('INSERT INTO pagamento (codigo_passagem, realizado, forma_pagamento) VALUES (?, ?, ?);', [$cod_passagem, 1, 1]);
            $id_pagamento = DB::select('SELECT MAX(codigo) AS id from pagamento')[0];   
            $id_pagamento = $id_pagamento->id;
            DB::insert('INSERT INTO pagamento_dinheiro (dinheiro_recebido, codigo_pagamento) VALUES (?, ?);', [$valor, $id_pagamento]);

            return 1;
        } else return 0;

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
    
        $qtd_vendas_hoje = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND $data_hoje = (SELECT data FROM passagem WHERE venda.codigo_passagem = passagem.codigo)");
        $qtd_vendas_7dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND ((SELECT data FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_semana_atras AND $data_hoje)"); 
        $qtd_vendas_30dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND ((SELECT data FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_mes_atras AND $data_hoje)"); 

        return ['qtd_vendas_hoje' => $qtd_vendas_hoje[0]->contagem_vendas, 
                'qtd_vendas_7dias' => $qtd_vendas_7dias[0]->contagem_vendas,
                'qtd_vendas_30dias' => $qtd_vendas_30dias[0]->contagem_vendas];

    }
    
}
?>
