<?php
/*
Nome: Verificador (classe)
Funcionalidade: Verificar algumas entradas do usuário
Autor(es): Israel Braitt
*/
class Verificador {

    /*
    Nome: isNumerical (método)
    Funcionalidade: Verificar se uma string é numérica (composta totalmente por números decimais)
    Autor(es): Israel Braitt
    */
    public function isNumerical(string $entrada) {
        $array_string = str_split($entrada);

        for ($i = 0; $i <= strlen(entrada); $i++) {
            $pstr = $array_string[$i];
            if ($pstr == "0" or $pstr == "1" or $pstr == "2" or $pstr == "3" or $pstr == "4" or 
                $pstr == "5" or $pstr == "6" or $pstr == "7" or $pstr == "8" or $pstr == "9") {
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