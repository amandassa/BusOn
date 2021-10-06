<?php
/*
Nome: ClienteDAO (classe)
Funcionalidade: Data Access Object da classe Cliente
Autor(es): Israel Braitt
*/
class ClienteDAO extends database {

    private static $initialized = false;

    /*
    Nome: initializate (método)
    Funcionalidade: Possibilitar que outros métodos sejam chamados de maneira estática
                    (sem precisar inicializar a classe)
    Autor(es): Israel Braitt
    */
    private static function initializate() {
        if (self::$initializated)
            return;
        
        self::$initialized = true;
    }

    public function __clone() {
        self::initialize();
    }

    public function create() {
        self::initialize();
    }

    public function read() {
        self::initialize();
    }

    public function update() {
        self::initialize();
    }

    public function delete() {
        self::initialize();
    }

}
?>