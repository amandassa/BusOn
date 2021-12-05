<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use App\Models\Passagem;
use App\Models\Pagamento_cartao;
use App\Models\Pagamento_boleto;
use App\Models\Pagamento_pix;
use App\Http\Controllers\PassagemController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PagamentoController extends Controller
{
    /**
     * Carrega a tela inicial de pagamento com a linha selecionada
     *
     * @return view cliente.pagamento
     */
    public function index(Request $request)
    {                        
        return view('cliente.pagamento', ['linha' => $request->linha]);
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
                $dados_validados = $request->validate([
                    'numero_cartao' => 'required|unique:pagamento_cartao|max:19',
                    'parcela' => 'required|max:2',
                    'validade_cartao' => 'required|min:5|max:5',
                    'ccv_cartao' => 'required|min:3|max:3',
                    'nome_titular' => 'required:max:160',
                ]);         
        }        

        if($request['opcao'] == 3){
            $dados_valdados = $request->validate([
                'pix_pagador' => 'required'
            ]);
        }

        $linha = $request->linha; // Captura e ajusta linha selecionada         
        $max_vagas = intval($linha['total_vagas']); 
        $num_assento = Passagem::getNumAssento(intval($linha['codigo']), $max_vagas);
        
        // Verifica se ainda há passagens disponíveis
        if($num_assento == 0) return view('cliente.selecao', ['erro', 'Todas as passagens para essa linha já foram vendidas, tente outro horário!']);
                
        // Verifica se a passagem foi registrada no sistema (comprada)
        if(Passagem::criar($num_assento, intval($linha['codigo']), "Cidade Partida", "Cidade Chegada", Carbon::now(), Auth::guard('cliente')->user()->cpf) == null) 
            return view('cliente.pagamento', ['erro', 'Não foi possível comprar a passagem, tente novamente!']);
        
        $codigo_passagem = Passagem::getCodigoUltimo('cpf_cliente', Auth::guard('cliente')->user()->cpf);
        
        // Verifica se o pagamento foi registrado 
        if(Pagamento::criar(0, $request['opcao'], $codigo_passagem) == null)
            return view('cliente.pagamento', ['erro', 'Não foi possível comprar a passagem, tente novamente!']);
        
        $codigo_pagamento = Pagamento::getCodigo('codigo_passagem', $codigo_passagem);
        $codigo_barras = 0;
        $pix_pagador = 0;
        // Registra os dados da forma de pagamento
        switch($request['opcao']){
            // Cartão de Crédito
            case 1:
                $num_cartao =  $request['numero_cartao']; 
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

        return PassagemController::buscarPedido($codigo_passagem, $request['opcao'], $codigo_pagamento, $codigo_barras, $pix_pagador);
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
