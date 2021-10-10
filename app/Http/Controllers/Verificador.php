<?php
/*
Nome: Verificador (classe)
Funcionalidade: Verificar algumas entradas do usuário
Autor(es): Israel Braitt
*/
class Verificador {

    /*
    Nome: isNumerical (método)
    Funcionalidade: Verificar se uma string numérica (composta totalmente por números)
    Autor(es): Israel Braitt
    */
    public function isNumerical(string $entrada) {
        $array_string = str_split($entrada);

        for ($i = 0; $i <= strlen(entrada); $i++) {
            if (is_numeric($array_string[$i]) == true) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }

    /*
    Nome: isCPF (método)
    Funcionalidade: Verificar se a informação inserida pelo usuário no campo cpf
                    se enquadra nos padrões de um cpf
    Autor(es): Israel Braitt
    */
    public function isCPF(string $entrada) {
        if (is_string($entrada) == true and isNumerical($entrada) == true and 
            strlen($entrada) == 11) {
            return true;
        } else {
            return false;
        }
    }
}
?>