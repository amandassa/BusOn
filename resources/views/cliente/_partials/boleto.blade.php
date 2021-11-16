 @extends('cliente.pagamento')
 
@section('bt1', 'botao botaoNormal')
@section('bt2', 'botaoSelecionado')
@section('bt3', 'botao botaoNormal')    
    
@push('js')
  <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>    
@endpush

 @section('formaPagamento')
     <script>
     $(document).ready(function(){
                $("#cpf").mask("999.999.999-99");
            });
            
        function mostrar() {
            var alerta = document.getElementById('alerta');
            var nome = document.getElementById('nome_titular');
            var cpf = document.getElementById('cpf');
            if (nome.value === null && cpf.value === null) {
            $('#alertaModal').modal('true');
            } else {
            $('#botao_baixar').css('visibility', 'visible');
            document.getElementById('alerta').style.visibility = 'visible';
            document.getElementById('botao_baixar').style.visibility = 'visible';
            document.getElementById('botao_copiar').style.visibility = 'visible';            
            }
        }
    </script>            

        <script type="text/javascript">
            $(document).ready(function(){
                $("#cpf").mask("999.999.999-99");
            });
        </script>
   <form>
        <div class="form-group">
            <div class="container" style="padding-left:0px;">
                <div id="teste" class="row justify-content-md-center">
                    <div class="col-sm-12">
                        <label> Nome do titular: </label>
                        <input id="nome_titular" type="text" class="form-control"/>
                    </div>
                </div>
                <div id="teste" class="row justify-content-md-left" style="margin-top:1em;">
                    <div class="col-sm-7">
                        <label> CPF do titular: </label>
                        <input id="cpf" name="cpf" type="text" class="form-control"/>
                    </div>
                    <div class="col-sm-5" >
                    <center>
                        <label style="color:white;">Freedom it's mine</label>
                        <button type="button" id="botao_gerar" class="botao botaoAmarelo" onClick="mostrar();"><i class="far fa-check-circle"></i> Gerar Boleto</button>                        
                    </center>
                    </div>                                                
                </div>
                    <hr>
                <div id="divOpcoes" class="row justify-content-md-center">                
                <center>
                    <div id="alerta" class="alert alert-success" role="alert" style="visibility:hidden;">
                    Boleto gerado com sucesso!                                    
                  </div>
                    <button id="botao_baixar" class="botao botaoAzul" style="visibility:hidden;"><i class="fas fa-file-download"></i> Baixar PDF</button>
                    <button id="botao_copiar" class="botao botaoAzul" style="visibility:hidden;"><i class="fas fa-copy"></i> Copiar Código de Barras</button>
                </center>
                </div>
                    
                    <div id="alertaModal" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Erro ao gerar boleto!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Você precisa inserir o nome do titular e seu cpf para poder gerar um boleto de pagamento válido!</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">Save changes</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
        </div>
    </form>
@endsection