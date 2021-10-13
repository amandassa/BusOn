<?php

use Illuminate\Support\Facades\DB;
/*
Nome: ClienteDAO (classe)
Funcionalidade: Data Access Object da classe Cliente
Autor(es): Israel Braitt, Guilherme Nobre e Amanda 
*/
class ClienteDAO /*extends */ {
    
    private static $initialized = false;
    private static $link;

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
    
    /*
    Nome: criaConta (método)
    Funcionalidade: Inserir informações do usuário no banco de dados
    Autor(es): Israel Braitt e Guilherme Nobre
    */
    public function criarConta($nome, $cpf, $email, $senha) {
        self::initializate();

        $query = "insert into cliente(nome, cpf, email, senha) values ($nome, $cpf, $email, $senha)";
        $result = mysql_query($query) or $result = ('Falha na consulta:' . mysql_error());

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

        $query = "select * from cliente where email = $email or cpf = $cpf";
        $result = mysql_query($query) or $result = ('Falha na consulta:' . mysql_error());

        return $result;
    }

    /*
    Nome: login (método)
    Funcionalidade: Conecta o cliente ao servidor e ao banco de dados
    Autor(es): Israel Braitt
    */
    public function loginCliente($cpf, $email, $senha) {
        self::initializate();

        $senha_coincide = (new ClienteDAO)->senhaCoincide($cpf, $email, $senha);
        
        if ($senha_coincide == true) {
            $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
                or $message = ('Não foi possível conectar: ' . mysql_error());
            $message = 'Conectado com sucesso';
            mysql_select_db('my_database') or $message ('Não foi possível conectar database');
        } else {
            $message = "Senha não coincide";
        }

        return $message;
    }

    /*
    Nome: senhaCoincide (método)
    Funcionalidade: Verifica se a senha do usuário coincide com a cadastrada no banco de dados
    Autor(es): Israel Braitt
    */
    public function senhaCoincide($cpf, $email, $senha) {
        self::initializate();

        if ($cpf == null) {
            $query = "select * from cliente where cpf = $cpf and senha = $senha";
        } else {
            $query = "select * from cliente where email = $email and senha = $senha";
        }

        $result = mysql_query($query) or $result = ('Falha na consulta:' . mysql_error());

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
    public function consultarLinhas($cpf){
        self::initializate();
        $resultado = DB::select("SELECT * from passagem WHERE cpf_cliente = $cpf");

        return $resultado;
    }
}
?>