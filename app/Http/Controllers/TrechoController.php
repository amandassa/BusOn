<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trecho;
use App\Http\Requests\AddTrechoInLinhaRequest;
use Illuminate\Support\Facades\Auth;
use \DateInterval;
use \Datetime;


class TrechoController extends Controller
{
    
    

    function startLinha(){
        $linha_vazia = array(
            'origem' => "",
            'destino' => "",
            'hora_origem' => "",
            'hora_destino' => "",
            'preço' => ""
        );
        return view('administrador.adicionarLinha')->with('trechos', array($linha_vazia));
    }

    function startSearchScreen(){
        $trechos_search = Trecho::getAll();
        //dd($trechos_search);
        return view('administrador.buscarTrechos', ['trechos' => $trechos_search]);
    }

    function fetchTrecho(AddTrechoInLinhaRequest $request){
        
        
        $trecho = Trecho::getTrechoInfo($request);

    
        $duração = $trecho->duracao;
        $duração = explode(":", $duração);

        $duração = new DateInterval(sprintf("PT%sH%sM%sS", $duração[0], $duração[1], $duração[2]));
        
        //dd($duração);

        $time_partida = $request["horario"];
        $time_partida = new Datetime($time_partida);
        
        $time_chegada = clone $time_partida;
        $time_chegada = $time_chegada->add($duração);

        $time_chegada = date_format($time_chegada, "H:i");
        $time_partida = date_format($time_partida, "H:i");

        //dd($time_partida);

        $new_trecho_arr = array(
            'origem' => $trecho->cidade_partida,
            'destino' => $trecho->cidade_chegada,
            'hora_origem' => $time_partida,
            'hora_destino' => $time_chegada,
            'preço' => $trecho->preco
        );

        //$old_trecho_arr = view('administrador.adicionarLinha')->getTrechos();
        /*
        dd($old_trecho_arr);

        if(sizeof($old_trecho_arr) < 1){
            return view('administrador.adicionarLinha', ['trechos'=>$new_trecho_arr]);
        }else{
            return view('administrador.adicionarLinha', ['trechos'=>array_push($old_trecho_arr, $new_trecho_arr)]);
        }*/
        //dd($new_trecho_arr);
        //return view('administrador.adicionarLinha', ['trechos'=>array_push(), $new_trecho_arr]);
    }
}