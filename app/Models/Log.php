<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Log extends Model
{
    public static function pesquisarTodosLogs(){
        $logs = DB::select("SELECT * FROM logs");

        return $logs;
    }

    public static function pesquisarPorCPF($cpf){
        $logs = DB::select("SELECT * FROM logs WHERE cpf=$cpf");

        return $logs;
    }

    public static function pesquisarPorData($data_hora_inicio, $data_hora_fim){
        $logs = DB::select("SELECT * FROM logs WHERE data_hora BETWEEN $data_hora_inicio AND $data_hora_fim");

        return $logs;
    }

    public static function pesquisarPorData($data_hora_inicio, $data_hora_fim){
        $logs = DB::select("SELECT * FROM logs WHERE data_hora BETWEEN $data_hora_inicio AND $data_hora_fim");

        return $logs;
    }

    public static function acessoCliente($email, $data_hora){
        $cliente_info = DB::select("SELECT cpf, nome FROM cliente WHERE email = ?;", [$email])[0];
        $cpf = $cliente_info->cpf;
        $nome = $cliente_info->nome;

        DB::insert("INSERT INTO logs (cpf_usuario, descricao, data_hora, tipo_usuario) 
        VALUES (?, 'Cliente ? entrou no site', ?, 'C');", [$cpf, $nome, $data_hora]);
    }

    public static function trechoAdicionado($cpf, $nome, $data_hora, $nome_trecho){
        DB::insert("INSERT INTO logs (cpf_usuario, descricao, data_hora, tipo_usuario) 
        VALUES (?, 'Administrador ? adicionou o trecho ?', ?, 'A');", [$cpf, $nome, $nome_trecho, $data_hora]);
    }

    public static function editarLinha($cod_linha, $data_hora){
        $cpf = Auth::guard('cliente')->user()->cpf;
        $nome = Auth::guard('cliente')->user()->nome;

        DB::insert("INSERT INTO logs (cpf_usuario, tipo_usuario, descricao, data_hora)
        VALUES (?, 'A', 'Funcionario ? editou a linha ?', ?);", [$cpf, $nome, $cod_linha, $data_hora]);
    }

    public static function editarTrecho($cod_trecho, $data_hora){
        $cpf = Auth::guard('cliente')->user()->cpf;
        $nome = Auth::guard('cliente')->user()->nome;

        DB::insert("INSERT INTO logs (cpf_usuario, tipo_usuario, descricao, data_hora)
        VALUES (?, 'F', 'Funcionario ? editou o trecho ?', ?);", [$cpf, $nome, $cod_trecho, $data_hora]);
    }

}
