<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Models\Cliente;
use App\Models\Funcionario;

class MailController extends Controller
{
    public function recuperaAcessoCliente(Request $request){
        $novaSenha = rand(100000, 999999);
        define('email', $request->email);
        Cliente::alterarSenha($request->email, $novaSenha);
        Mail::raw("Sua nova senha é: {$novaSenha}", function($message)
        {
            $message->to(email, 'BusOn')->subject('BusOn - Recuperação de Senha');
        });
        return view("auth.login");
    }

    public function recuperaAcessoFuncionario(Request $request){
        $novaSenha = rand(100000, 999999);
        define('email', $request->email);
        Funcionario::alterarSenha($request->email, $novaSenha);
        Mail::raw("Sua nova senha é: {$novaSenha}", function($message)
        {
            $message->to(email, 'BusOn')->subject('BusOn - Recuperação de Senha');
        });
        return ('/login/funcionario');
    }

}