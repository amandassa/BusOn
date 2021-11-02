<?php

use Illuminate\Support\Facades\DB;
/*
Nome: ClienteDAO (classe)
Funcionalidade: Data Access Object da classe Cliente
Autor(es): Israel Braitt, Guilherme Nobre e Amanda 
*/
class ClienteDAO /*extends */ {
    
    private static $initialized = false;
    /*
    Nome: initializate (método)
    Funcionalidade: Possibilitar que outros métodos sejam chamados de maneira estática
                    (sem precisar inicializar a classe)
    Autor(es): Israel Braitt
    */
    private static function initializate() {
        if (self::$initialized)
            return;
        
        self::$initialized = true;
    }
    /**
     * o array fillable serve para preenchimento de formulário
     */
    protected $fillable = [
        'cpf',
        'name',
        'email',
        'password',
    ];

    /*
    Nome: criaConta (método)
    Funcionalidade: Inserir informações do usuário no banco de dados
    Autor(es): Israel Braitt e Guilherme Nobre
    */
    public function criarConta($nome, $cpf, $email, $senha) {
        self::initializate();

        $result = DB::insert("INSERT INTO cliente(nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senha')");

        return $result;
    }

    /*
    Nome: verificarContaExistente (método)
    Funcionalidade: Verificar se já existe um usuário cadastrado cujas informações
                    email ou cpf coincida.
    Autor(es): Israel Braitt e Guilherme Nobre
    */
    public function verificarContaExistente($email, $cpf) {
        self::initializate();

        
        $result = DB::select("SELECT * FROM cliente WHERE email = '$email' OR cpf = '$cpf'");
        //$query = "select * from cliente where email = $email or cpf = $cpf";
        //$result = mysqli_query($this->connection, $query) or $result = ('Falha na consulta:' . mysqli_error($this->connection));

        return $result;
    }

    /*
    Nome: senhaCoincide (método)
    Funcionalidade: Verifica se a senha do usuário coincide com a cadastrada no banco de dados
    Autor(es): Israel Braitt
    */
    public function senhaCoincide($cpf, $email, $senha) {
        self::initializate();

        if ($cpf == null) {
            $query = "SELECT * FROM cliente WHERE cpf = '$cpf' AND senha = '$senha'";
        } else {
            $query = "SELECT * FROM cliente WHERE cpf = '$email' AND senha = '$senha'";
        }

        $result = DB::select($query);

        return $result;
    }

    public function alterarNome($cpf, $nome){
        self::initializate();
        $resultado = DB::update("UPDATE cliente set nome = $nome where cpf = $cpf");

        return $resultado;
    }

    public function alterarEmail($cpf, $email){
        self::initializate();
        $resultado = DB::update("UPDATE cliente SET email = $email WHERE cpf = $cpf");

        return $resultado;
    }

    public function alterarSenha($cpf, $senha){
        self::initializate();
        $resultado = DB::update("UPDATE cliente SET senha = $senha WHERE cpf = $cpf");

        return $resultado;
    }
    
    public function consultarPassagens($cpf){
        self::initializate();
        $resultado = DB::select("SELECT * from passagem WHERE cpf_cliente = $cpf");

        return $resultado;
    }

}
?>