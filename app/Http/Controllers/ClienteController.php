<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = [
            'cpf'=>'469708',
            'entradaNome'=>'Thalia',
            'entradaEmail'=>'jacobson.cleta@yahoo.com',
            'entradaSenha'=>'vembrilhar'
        ];
        return view("cliente.perfil", ['cliente'=>$cliente]);
    }
    public function editarPerfil (Request $request) {
        $nome = $request['entradaNome'];
        $email = $request['entradaEmail'];
        $cpf = $request['cpf'];
        $senha = $request['entradaSenha'];
        $confirmarSenha = $request['entradaConfirmarSenha'];

        return DB::update('UPDATE cliente nome set ?, email set ?, senha set ? where cpf = ?', 
        [$nome, $email, Hash::make($senha), $cpf]);
    }
}
