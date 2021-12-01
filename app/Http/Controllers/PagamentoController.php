<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    /**
     * Carrega a tela inicial de pagamento com a linha selecionada
     *
     * @return view cliente.pagamento
     */
    public function index(Request $request)
    {
        $linha['codigo'] = $request['codigo'];
        $linha['direta'] = $request['direta'];
        $linha['total_vagas'] = $request['total_vagas'];
        $linha['dias_semana'] = $request['dias_semana'];
        $linha['hora_partida'] = $request['hora_partida'];                
        return view('cliente.pagamento', ['linha' => $linha, 'codigo' => $request['codigo']]);
    }

    /**
     * Cria um novo Pagamento e todos os registros a ele necessarios
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Verifica se os dados foram preenchidos corretamente
        if($request['opcao'] == 1){            
                $request = $request->validate([
                    'numero_cartao' => 'required|unique:pagamentocartao|max:19',
                    'parcela' => 'required|max:2',
                    'validade_cartao' => 'required|max:5',
                    'ccv_cartao' => 'required|max:3',
                    'nome_titular' => 'required:max:160',
                ]);         
        }        

        $linha = json_decode($request['linha_i']); // Captura e ajusta linha selecionada 
        $max_vagas = intval($linha->total_vagas); 
        $num_assento = Passagem::getNumAssento(intval($linha->codigo), $max_vagas);
        
        // Verifica se ainda há passagens disponíveis
        if($num_assento == 0) return view('cliente.selecao', ['erro', 'Todas as passagens para essa linha já foram vendidas, tente outro horário!']);
                
        // Verifica se a passagem foi registrada no sistema (comprada)
        if(Passagem::criar($num_assento, intval($linha->codigo), "Cidade Partida", "Cidade Chegada", Carbon::now(), Auth::guard('cliente')->user()->cpf) == null) 
            return view('cliente.pagamento', ['erro', 'Não foi possível comprar a passagem, tente novamente!']);
        
        $codigo_passagem = Passagem::getCodigoUltimo('cpf_cliente', Auth::guard('cliente')->user()->cpf);
        
        // Verifica se o pagamento foi registrado 
        if(Pagamento::criar(0, $request['opcao'], $codigo_passagem) == null)
            return view('cliente.pagamento', ['erro', 'Não foi possível comprar a passagem, tente novamente!']);
        
        $codigo_pagamento = Pagamento::getCodigo('codigo_passagem', $codigo_passagem);
        
        // Registra os dados da forma de pagamento
        switch($request['opcao']){
            // Cartão de Crédito
            case 1:
                $num_cartao =  str_replace(' ', '', $request['numero_cartao']); // remove os espaços em branco no cartao de credito
                $parcelas = intval($request['parcela']);
                $validade = $request['validade_cartao'];
                $ccv = $request['ccv_cartao'];
                $nome_titular = $request['nome_titular'];                                
                Pagamento_cartao::criar($num_cartao, $parcelas, $nome_titular, $validade, $ccv, $codigo_pagamento);
                break;
            //Boleto
            case 2:
                $nome = Auth::guard('cliente')->user()->nome;
                $cpf = Auth::guard('cliente')->user()->cpf;
                $codigo_barras = rand(1000000000, 9999999999);
                while(!Pagamento_boleto::codigoBarrasDisponivel($codigo_barras)) {
                    $codigo_barras = rand(1000000000, 9999999999);
                }
                Pagamento_boleto::criar($codigo_barras, $nome, $cpf, $codigo_pagamento);
                break;
            //Pix
            case 3: 
                $pix_pagador = $request['pix_pagador'];
                Pagamento_pix::criar($pix_pagador, $codigo_pagamento);
                break;
                
        }

        return PassagemController::buscarPedido($codigo_passagem, $metodo, $codigo_pagamento, $codigo_barras, $pix_pagador);
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
     * @param  \App\ModelsPagamento  $modelsPagamento
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsPagamento $modelsPagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsPagamento  $modelsPagamento
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsPagamento $modelsPagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsPagamento  $modelsPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsPagamento $modelsPagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsPagamento  $modelsPagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsPagamento $modelsPagamento)
    {
        //
    }
}
