@extends('app')

@section('title', 'Venda de Passagens - ')

@section('content')
    <link rel="stylesheet" href="/css/estiloVenderPassagens.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    
    <script>
        $(document).ready(function() {
        //Script do datatable - serve para deixar a tabela com varias funcionalidades
        $('.tabela').DataTable({"info":     false,
        language: 
        {
            oPaginate: 
            {
                sNext: '<i class="fas fa-angle-double-right"></i>',
                sPrevious: '<i class="fas fa-angle-double-left"></i>'
            }
        }   
             });
    } )
        //Mascara do CPF
        function mascara(i,t)
        {
            var v = i.value;
            
            if(isNaN(v[v.length-1])){
                i.value = v.substring(0, v.length-1);
                return;
            }
            
            if(t == "cpf"){
                i.setAttribute("maxlength", "14");
                if (v.length == 3 || v.length == 7) i.value += ".";
                if (v.length == 11) i.value += "-";
            }
        }
    </script>

    <h1 class="tituloVP">Venda de Passagens</h1> <br>

    <div class="container-flex principal">
        <div class="row">
            <div class="col-md-6">
                <h5 class="titulos">Consulta de Linhas</h5>
                <div class="card cardCL">
                    <form method="POST" action="{{route('consultaVP')}}" class="form">
                        @csrf 
                        <div class="row">
                            <div class="col">
                                <label class="textoPreto" for="partidaInput">Partida:</label>
                                <input type="text" class="form-control form-control-sm" id="partidaInput" name='cidade_partida'>
                            </div>
                            <div class="col">
                                <label class="textoPreto" for="chegadaInput">Chegada:</label>
                                <input type="text" class="form-control form-control-sm" id="chegadaInput" name="cidade_destino">
                            </div>
                            <div class="col">
                                <label class="textoPreto" for="dataInput">Data de Partida:</label>
                                <input type="date" class="form-control form-control-sm" id="dataInput">
                                
                            </div>
                        </div>
                        <div class="row rowBotoes">
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkBoxLD">
                                    <label class="form-check-label" for="checkBoxLD">
                                    Linhas Diretas
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkBoxLI">
                                    <label class="form-check-label" for="checkBoxLI">
                                    Linhas Indiretas
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
            <div class="col-md-6">
                <h5 class="titulos">Dados do passageiro e pagamento</h5>
                <div class="card cardDPP">
                    <div class="row">
                        <div class="col">
                            <label class="textoPreto" for="nomeInput">Nome Completo:</label>
                            <input type="text" class="form-control form-control-sm" id="nomeInput">
                        </div>
                        <div class="col">
                            <label class="textoPreto" for="cpfInput">Documento:</label>
                            <input oninput="mascara(this, 'cpf')" id="cpfInput" type="text" class="form-control form-control-sm" autocomplete="on" name="customer['cpf']">
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
                                <input type="text" class="form-control" aria-label="Total pago" aria-describedby="inputGroup-sizing-sm" id="pagoInput">
                              </div>
                        </div>
                        <div class="col">
                            <label class="textoPreto" for="descontosInput">Descontos:</label>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-sm">%</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Descontos" aria-describedby="inputGroup-sizing-sm" id="descontosInput">
                              </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card cardPassagens">
                    <table class="table tabela" style="text-align: center">
                        <thead>
                          <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Cidade de Origem</th>
                            <th scope="col">Cidade de Destino</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Tipo</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($linhas as $linha)
                            <tr>
                             <th scope="row">{{ $linha['codigo']}}</th>
                                <td> {{ $linha['partida']}} </td>
                                <td> {{ $linha['destino']}} </td>
                                <td> {{ $linha['preco']}} </td>
                                @if ($linha['tipo'] == 1 )
                                    <td> Direta </td>
                                @else
                                    <td> Comum </td>
                                @endif
                                <td><button type="button" class="btn btn-info" id="btnSel">Selecionar</td>
                            </tr>
                            @endforeach          
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="col-md-6">
                <br><h5 class="titulos">Total</h5>
                <div class="card cardTotal">
                    <div class="row">
                        <div class="col colTotalEsquerda">Subtotal:</div>
                        <div class="col colTotalDireita">R$ 53,50</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda">Descontos:</div>
                        <div class="col colTotalDireita">R$ 0,00</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda">Troco:</div>
                        <div class="col colTotalDireita">R$ 0,00</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colTotalEsquerda">Total a pagar:</div>
                        <div class="col colTotalDireita">R$ 53,50</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col colBtnAmarelo"><button type="button" class="botao botaoAmarelo" id="btnFinal" ><span><i class="fas fa-check-circle"></i></span>  Finalizar</button></div>
                        <div class="col colBtnVermelho"><button type="button" class="botao botaoAmarelo botaoVermelho" id="btnCancel"> <span><i class="fas fa-times-circle"></i></span> Cancelar</button></div>
                    </div>
                </div>
            </div>
        </div>
     
        
   
        











    </div>


@endsection