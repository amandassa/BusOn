<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Passagem;
use App\Models\Linha;
use App\Models\Pagamento;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class PassagemController extends Controller
{

    public static function buscarPedido($cod_passagem, $metodo)
    {
        $resultado = Passagem::buscar('codigo', $cod_passagem)[0];
        $cidade_partida = $resultado->cidade_partida;
        $cidade_destino = $resultado->cidade_chegada;
        $data = $resultado->data;
        $cpf = $resultado->cpf_cliente;
        $num_assento = $resultado->num_assento;
        $nome = Auth::guard('cliente')->user()->nome;
        $email = Auth::guard('cliente')->user()->email;
        $codigo_linha = $resultado->codigo_linha;
        $horario = Linha::getHoraPartida('codigo', $codigo_linha)[0]->hora_partida;
        $tipo = Linha::getTipo('codigo', $codigo_linha)[0]->direta;
        $pedido = Pagamento::getCodigo('codigo_passagem', $cod_passagem);
        $pedido = ("000$pedido BR");
        $passagem_info = array(
            'cidade_partida' => $cidade_partida,
            'cidade_destino' => $cidade_destino,
            'data' => $data,
            'horario' => $horario,
            'cpf' => $cpf,
            'assento' => $num_assento,
            'nome' => $nome,
            'email' => $email,
            'tipo' => $tipo,
            'pedido' => $pedido
        );

        if($metodo==1)
            return view('cliente.confirmacao', ['passagem_info' => $passagem_info, 'metodo' => $metodo]);
        else
            return view('cliente.confirmacao', ['passagem_info' => $passagem_info, 'metodo' => $metodo]);
            
    }


    













}
