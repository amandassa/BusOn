<?php

namespace App\Http\Controllers;

use App\Pagamento_cartao;
use Illuminate\Http\Request;

class PagamentoCartaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create($numero_cartao, $total_parcelas,	$nome_titular, $data_validade, $ccv, $codigo_pagamento)
    {        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsPagamento_cartao  $modelsPagamento_cartao
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsPagamento_cartao $modelsPagamento_cartao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsPagamento_cartao  $modelsPagamento_cartao
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsPagamento_cartao $modelsPagamento_cartao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsPagamento_cartao  $modelsPagamento_cartao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsPagamento_cartao $modelsPagamento_cartao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsPagamento_cartao  $modelsPagamento_cartao
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsPagamento_cartao $modelsPagamento_cartao)
    {
        //
    }
}
