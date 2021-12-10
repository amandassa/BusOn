<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Models\Cliente;
use App\Models\Funcionario;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function recuperaAcessoCliente(Request $request){
        $usuario = DB::select("select * from cliente where email = ?", [$request->email]);
        if(!empty($usuario)){
            $novaSenha = rand(100000, 999999);
            define('email', $request->email);
            Cliente::alterarSenha($request->email, $novaSenha);
            Mail::raw("Sua nova senha é: {$novaSenha}", function($message)
            {
                $message->to(email, 'BusOn')->subject('BusOn - Recuperação de Senha');
            });
            return redirect()->route('clienteLogin')
                             ->with('success', 'Email foi enviado com a nova senha.');
        }else{
            return redirect()->back()
                             ->with('error', 'Email não cadastrado no nosso sistema.');
        }
        
    }

    public function recuperaAcessoFuncionario(Request $request){
        $usuario = DB::select("select * from cliente where email = ?", [$request->email]);
        if(!empty($usuario)){
            $novaSenha = rand(100000, 999999);
            define('email', $request->email);
            Funcionario::alterarSenha($request->email, $novaSenha);
            Mail::raw("Sua nova senha é: {$novaSenha}", function($message)
            {
                $message->to(email, 'BusOn')->subject('BusOn - Recuperação de Senha');
            });
            return redirect()->route('clienteLogin')
                             ->with('success', 'Email foi enviado com a nova senha.');
        }else{
            return redirect()->back()
                             ->with('error', 'Email não cadastrado no nosso sistema.');
        }
    }

}
