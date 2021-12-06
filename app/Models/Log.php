<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Log extends Model
{
    /**
     * Pesquisa todos os logs no banco de dados
     * 
     * @return $logs todos os logs da tabela no banco de dados
     */
    public static function pesquisarTodosLogs(){
        $logs = DB::select("SELECT * FROM logs");

        return $logs;
    }

    /**
     * Pesquisa os logs no banco de dados de acordo com um cpf de um usuário
     * 
     * @param $cpf cpf do usuário
     * @return $logs os logs da tabela no banco de dados de acordo com um cpf de um usuário
     */
    public static function pesquisarPorCPF($cpf){
        $logs = DB::select("SELECT * FROM logs WHERE cpf = $cpf");

        return $logs;
    }

    /**
     * Pesquisa os logs no banco de dados de acordo com um intervalo de datas
     * 
     * @param $data_hora_inicio data de início do intervalo de tempo
     * @param $data_hora_fim data de fim do intervalo de tempo
     * @return $logs os logs da tabela no banco de dados de acordo com um intervalo de datas
     */
    public static function pesquisarPorData($data_hora_inicio, $data_hora_fim){
        $logs = DB::select("SELECT * FROM logs WHERE data_hora BETWEEN $data_hora_inicio AND $data_hora_fim");

        return $logs;
    }

    /**
     * Registar logs de acesso (login) dos clientes ao sistema
     * 
     * @param $email email do cliente
     * @param $data_hora data e hora do acesso ao sistema
     */
    public static function acessoCliente($email, $data_hora){
        $cpf = Auth::guard('cliente')->user()->cpf;
        

        DB::insert("INSERT INTO logs (cpf_usuario, descricao, data_hora, tipo_usuario) 
        VALUES (?, ?, ?, 'C');", [$cpf, 'Cliente '.$cpf.' entrou no site', $data_hora]);
    }

    /**
     * Registrar logs quando um trecho for adicionado
     * 
     * @param $cpf cpf do funcionário
     * @param $nome nome do funcionario
     * @param $data_hora data e hora da adição do trecho
     * @param $nome_trecho nome do trecho
     */
    public static function trechoAdicionado($cpf, $nome, $data_hora, $nome_trecho){
        DB::insert("INSERT INTO logs (cpf_usuario, descricao, data_hora, tipo_usuario) 
        VALUES (?, ?, ?, 'A');", [$cpf, 'Administrador '.$nome.' adicionou o trecho '.$nome_trecho, $data_hora]);
    }

    /**
     * Registrar logs quando uma linha for editada
     * 
     * @param $cod_linha código da linha editada
     * @param $data_hora data e hora da edição
     */
    public static function editarLinha($cod_linha, $data_hora){
        $cpf = Auth::guard('cliente')->user()->cpf;
        $nome = Auth::guard('cliente')->user()->nome;

        DB::insert("INSERT INTO logs (cpf_usuario, tipo_usuario, descricao, data_hora)
        VALUES (?, 'A', 'Administrador ? editou a linha ?', ?);", [$cpf, $nome, $cod_linha, $data_hora]);
    }

    /**
     * Resgistrar logs quando um trecho for editado
     * 
     * @param $cod_trecho código do trecho editado
     * @param $data_hora data e hora da edição
     */
    public static function editarTrecho($cod_trecho, $data_hora){
        $cpf = Auth::guard('cliente')->user()->cpf;
        $nome = Auth::guard('cliente')->user()->nome;

        DB::insert("INSERT INTO logs (cpf_usuario, tipo_usuario, descricao, data_hora)
        VALUES (?, 'A', 'Administrador ? editou o trecho ?', ?);", [$cpf, $nome, $cod_trecho, $data_hora]);
    }

    /**
     * Retorna uma lista de logs do banco de dados
     *
     * @param $tipoBusca
     * @param  $id
     * @param [date] $dataInicio
     * @param [date] $dataFim
     * @return $logs - logs do sistema
     */
    public static function buscarLogs($tipoBusca, $id, $dataInicio, $dataFim){
        if($id == null and $dataInicio == null  and $dataFim == null){
            $logs = DB::select("SELECT l.data_hora, f.nome, f.email, l.descricao FROM logs as l INNER JOIN funcionario as f on f.cpf = l.cpf_usuario and l.tipo_usuario = 'A'");
        }else{
            if($id != null and ($dataInicio == null  and $dataFim == null)){
                $logs = DB::select("SELECT l.data_hora, f.nome, f.email, l.descricao FROM logs as l INNER JOIN funcionario as f on f.cpf = l.cpf_usuario and l.tipo_usuario = 'A' WHERE f.$tipoBusca LIKE '$id%'");
            }elseif($id == null and ($dataInicio != null  and $dataFim != null)){
                $logs = DB::select("SELECT l.data_hora, f.nome, f.email, l.descricao FROM logs as l INNER JOIN funcionario as f on f.cpf = l.cpf_usuario and l.tipo_usuario = 'A' WHERE date(l.data_hora) BETWEEN '$dataInicio' and '$dataFim'");
            }elseif($id == null and $dataInicio != null  and $dataFim == null){
                $logs = DB::select("SELECT l.data_hora, f.nome, f.email, l.descricao FROM logs as l INNER JOIN funcionario as f on f.cpf = l.cpf_usuario and l.tipo_usuario = 'A' WHERE date(l.data_hora) = '$dataInicio'");
            }elseif($id == null and $dataInicio == null  and $dataFim != null){
                $logs = DB::select("SELECT l.data_hora, f.nome, f.email, l.descricao FROM logs as l INNER JOIN funcionario as f on f.cpf = l.cpf_usuario and l.tipo_usuario = 'A' WHERE date(l.data_hora) = '$dataFim'");
            }elseif($id != null and $dataInicio != null  and $dataFim != null){
                $logs = DB::select("SELECT l.data_hora, f.nome, f.email, l.descricao FROM logs as l INNER JOIN funcionario as f on f.cpf = l.cpf_usuario and l.tipo_usuario = 'A' WHERE f.$tipoBusca LIKE '$id%' and date(l.data_hora) BETWEEN '$dataInicio' and '$dataFim'");
            }
        
        }
        return $logs;
    }
}
