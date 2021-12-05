@extends('app')

@section('title', 'Venda de Passagens - ')

@section('content')
    <link rel="stylesheet" href="/css/estiloVP.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>
    
    <script>
        
        $(document).ready(function() {

        $("#cpf").mask('999.999.999-99') //máscara cpf
      
        //Script do datatable - serve para deixar a tabela com varias funcionalidades
        $('.tabela').DataTable({
        select:{selector:'#btnSel'},
         
        info:false, 
        searching:false, 
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todas']],
        language: 
        {
            lengthMenu: "Exibir _MENU_ linhas",
            search: "Busca",
            zeroRecords: "Linha não encontrada!",
            oPaginate: 
            {
                sNext: '<i class="fas fa-angle-double-right"></i>',
                sPrevious: '<i class="fas fa-angle-double-left"></i>'
            }
        }   
        });
    
    } )


        var ultimoPreco = 0; //Armazena o preço da última passagem selecionada
        var alterouValorPago = false; //Verifica se o input valorPago foi alterado, dessa forma 
        //a mensagem de valor insuficiente só é apresentada caso esse variável for true;

    
        //É chamada sempre que o input de valor pago ou descontos é alterado
        function alteracaoInput(alterou)
        {
            if(alterou)
                alterouValorPago = true;
            preco(ultimoPreco);
            alterouValorPago = false;
        }

        

        function atualizar_cpf(){
            cpf_atual = document.getElementById("cpf_atual");
            cpf_atual.value = document.getElementById("cpf").value;
        }

        function atualizar_info_linha(linha){
            nu_cod = linha['codigo'];
            cod_linha = document.getElementById("cod_linha");
            cod_linha.value = nu_cod.toString();

            partida = linha['partida'];
            destino = linha['destino'];


            document.getElementById("passagemSelecionada").innerHTML = partida + ' >>> ' + destino + ' (' + nu_cod + ')';

            partida = linha['partida'];
            destino = linha['destino'];
            valor_partida = document.getElementById('cidade_partida');
            valor_destino = document.getElementById('cidade_destino');
            valor_partida.value = partida.toString();
            valor_destino.value = destino.toString();            
        }

        function atualizar_valor(){
            preco_atual = document.getElementById("preco_atual");
            preco_atual.value = document.getElementById("pagoInput").value;
        }



        //Atualiza os precos do card total

        function preco(preco)
        {
            ultimoPreco = preco;
            preco = preco.split('.').join('').split(',').join('.');
            var valorPago = document.getElementById('pagoInput').value;
            var valorDesconto = document.getElementById('descontosInput').value;
            var valorTroco = 0;

            //Subtotal
            var subtotal = document.getElementById('subtotal');
            preco -= 0,00;
            subtotal.innerHTML = 'R$ ' + preco.toLocaleString('pt-BR', {minimumFractionDigits: 2});

            //Descontos
            var desconto = document.getElementById('descontos');
            valorDesconto-=0,00;
            desconto.innerHTML = 'R$ ' + valorDesconto.toLocaleString('pt-BR', {minimumFractionDigits: 2});

            //Troco
            var precoComDesconto = preco - valorDesconto;
            
            if(valorPago == precoComDesconto) 
            {
                valorTroco = 0;
                troco.innerHTML = 'R$ ' + valorTroco.toLocaleString('pt-BR', {minimumFractionDigits: 2});
                alert("Não há troco!");
            }

            else if(valorPago > precoComDesconto) 
            {
                valorTroco = valorPago - precoComDesconto;
                troco = document.getElementById('troco');
                troco.innerHTML = "R$ " + valorTroco.toLocaleString('pt-BR', {minimumFractionDigits: 2});
            }

            else if(alterouValorPago)
            {
                troco.innerHTML = "VALOR INSUFICIENTE"
                alert("Valor pago é insuficiente!!!");
            }
            
            //Total
            total = document.getElementById('total');
            total.innerHTML = 'R$ ' + precoComDesconto.toLocaleString('pt-BR', {minimumFractionDigits: 2});


        }


        
    </script>

    <h1 class="tituloVP">Venda de Passagens</h1> <br>
    <div class="container-xl principal">


        <!--Mensagens de status da operação -->

        @if (sizeof($errors) > 0) 
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <ul>
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('message'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>{{session('message')}}</strong>
            </div>
        @endif    
        

        <div class="row">
            <div class="col-md-6">
                <h5 class="titulos">Consulta de Linhas</h5> <!--Card da pesquisa de linhas -->
                <div class="card cardCL">
                    <form method="GET" action="{{route('consultaVP')}}" class="form">
                        @csrf 
                        <div class="row">
                            <div class="col">
                                <label class="textoPreto" for="partidaInput">Partida:</label>
                                <input type="text" class="form-control form-control-sm" id="partidaInput" name='cidade_partida' value="{{ old('cidade_partida') }}">
                            </div>
                            <div class="col">
                                <label class="textoPreto" for="chegadaInput">Chegada:</label>
                                <input type="text" class="form-control form-control-sm" id="chegadaInput" name="cidade_destino" value="{{ old('cidade_destino') }}">
                            </div>
                            
                            <div class="col">
                                <label class="textoPreto" for="dataInput">Data de Partida:</label>
                                <input type="date" class="form-control form-control-sm" id="dataInput" name="data_partida" min="<?php echo date("Y-m-d"); ?>" value="{{ old('data_partida') }}"> 
                                
                                
                            </div>
                        </div>
                        <div class="row rowBotoes">
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkBoxLD" name="tipoLinha_op2" value="1" checked>
                                    <label class="form-check-label" for="checkBoxLD">
                                    Linhas Diretas
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkBoxLI" name="tipoLinha_op1" value="0" checked>
                                    <label class="form-check-label" for="checkBoxLI">
                                    Linhas Comuns
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm colBtnAzul">
                                <button type="submit" class="botao botaoAzul" id="btnBuscar">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--Card dos dados do passageiro e valores do pagamento -->
            <div class="col-md-6">
                <h5 class="titulos">Dados do passageiro e pagamento</h5>
                <div class="card cardDPP">
                    <div class="row">
                        <div class="col">
                            <label class="textoPreto" for="nomeInput">Nome Completo:</label>
                            <input type="text" class="form-control form-control-sm" id="nomeInput">
                        </div>
                        <div class="col">
                            <label class="textoPreto" for="cpf">Documento:</label>
                            <input id="cpf" type="text" onchange="atualizar_cpf();" class="form-control form-control-sm" autocomplete="on">
                        </div>
                    </div>
                    <div class="row rowPagamento">
                        <div class="col">
                            <label class="textoPreto" for="inputGroupMetodo">Método:</label> 
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">  
                                </div>
                                <select class="custom-select" id="inputGroupMetodo">
                                  <option selected>Dinheiro</option>
                                  <option value="1">Cartão</option>
                                </select>
                              </div>
                        </div>
                        <div class="col">
                            <label class="textoPreto" for="pagoInput">Total pago:</label>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-sm">R$</span>
                                </div>
                                <input name="valor_pago" type="number" class="form-control" aria-label="Total pago" aria-describedby="inputGroup-sizing-sm" id="pagoInput" value="0.00" placeholder="0,00" min="0" onchange="alteracaoInput(true); atualizar_valor()" oninput="this.value = Math.abs(this.value)">
                              </div>
                        </div>
                        <div class="col">
                            <label class="textoPreto" for="descontosInput">Descontos:</label>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-sm">R$</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Descontos" aria-describedby="inputGroup-sizing-sm" id="descontosInput" value="0.00" placeholder="0,00" min ="0" onchange="alteracaoInput(false)" oninput="this.value = Math.abs(this.value)">
                              </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!--Card da seleção da passagem -->
        <div class="row">
            <div class="col-md-12">
                <br>
                <h5 class="titulos">Seleção de passagens</h5>
                <div class="card cardPassagens">
                    <table class="table table-hover tabela" style="text-align: center">
                        <thead>
                          <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Destino</th>
                            <th scope="col">Saída</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Classe</th>
                            <th data-orderable="false" scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($linhas as $linha)
                            <tr>
                             <th scope="row">{{ $linha['codigo']}}</th>
                                <td> {{ $linha['partida']}} </td>
                                <td> {{ $linha['destino']}} </td>
                                <td> {{substr($linha['horario_partida'], 0,-3)}}</td> <!--Retira os segundos da hora de saída -->
                                @php
                                    $preco = $linha['preco'];                                                                        
                                @endphp
                                <td> R$ {{$preco}} </td>
                                @if ($linha['tipo'] == 1 )
                                    <td>Direta</td>
                                @else
                                    <td>Comum</td>
                                @endif
                                <td><button type="button" class="btn btn-info" id="btnSel" onclick="preco('<?php echo $preco;?>');this.blur();atualizar_info_linha({{json_encode($linha)}});">Selecionar</button></td>
                            </tr>
                            @endforeach          
                        </tbody>
                      </table>
                      
                </div>
            </div>
            <!--Card da informações sobre os valores de pagamento -->
            <div class="col-md-12">
                <br><h5 class="titulos">Total</h5>
                <div class="card cardTotal">
                    <div class="row">
                        <div class="col colTotalEsquerda">Passagem selecionada: </div>
                        <div class="col colTotalDireita" id="passagemSelecionada" name="passagemSelecionada"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda"> Subtotal:</div>
                        <div class="col colTotalDireita" id="subtotal" name="subtotal">R$ 0,00</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda">Descontos:</div>
                        <div class="col colTotalDireita" id="descontos" name="descontos">R$ 0,00</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda">Troco:</div>
                        <div class="col colTotalDireita" id="troco" name="troco">R$ 0,00</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda">Total a pagar:</div>
                        <div class="col colTotalDireita" id="total" name="total">R$ 0,00</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colBtnAmarelo">
                            <form method="POST" action="{{ route('finalizar_venda') }}">
                                @csrf
                                <input id="cidade_partida" name="cidade_partida" type="hidden"></input>
                                <input id="cidade_destino" name="cidade_destino" type="hidden"></input>
                                <input id="cod_linha" name="cod_linha" type="hidden"></input>
                                <input id="cpf_atual" name="cpf_atual" type="hidden"></input>
                                <input id="preco_atual" name="preco_atual" type="hidden"></input>

                                <button name="finalize" type="submit" class="botao botaoAmarelo" id="btnFinal"><span><i class="fas fa-check-circle"></i></span>  Finalizar</button>
                            </form>
                        </div>
                        <div class="col colBtnVermelho"> <a href="/venderPassagens"><button type="button" class="botao botaoAmarelo botaoCancelar" id="btnCancel"><span><i class="fas fa-times-circle"></i></span> Cancelar</button></a> </div>
                    </div>
                </div>
            </div>
        </div>
     
        
   
        











    </div>


@endsection
