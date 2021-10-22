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
            strlen($entrada) == 11 and validacaoCPF($entrada) == true) {
            return true;
        } else {
            return false;
        }
    }
    
    /*
    Nome: validacaoCPF (método)
    Funcionalidade: Verificar se a um cpf é válido
    Autor(es): Israel Braitt
    */
    public function validacaoCPF(string $entrada) {
        $array_string = str_split($entrada);
        
        // obtenção do resto para validação do primeiro dígito verificador
        $soma = 0;
        $sequencia = 10;

        for ($i=0; $i <= 9; $i++) {
            $soma += intval($array_string[$i]) * $sequencia;
            $sequencia -= 1;
        }
        $resto_digito1 = ($soma * 10) % 11;

        // obtenção do resto para validação do segundo dígito verificador
        $soma = 0;
        $sequencia = 11;

        for ($i=0; $i <= 10; $i++) {
            $soma += intval($array_string[$i]) * $sequencia;
            $sequencia -= 1;
        }
        $resto_digito2 = ($soma * 10) % 11;

        // comparações dos restos obtidos com os dígitos verificadores
        if ($resto_digito1 == intval($array_string[10]) and 
            $resto_digito2 == intval($array_string[10])) {
            return true;
        } elseif (($resto_digito1 == 10 and intval($array_string[10]) == 0) and 
                  ($resto_digito2 == 10 and intval($array_string[11]) == 0)) {
            return true;
        } else {
            return false;
        }
    }
}
?>