 @extends('cliente.pagamento')
 
@section('bt1', 'botao botaoNormal')
@section('bt2', 'botaoSelecionado')
@section('bt3', 'botao botaoNormal')    
    

 @section('formaPagamento')
     <script>
     $(document).ready(function(){
                $("#cpf").mask("999.999.999-99");
            });
            
        function mostrar() {
            var alerta = document.getElementById('alerta');
            var nome = document.getElementById('nome_titular');
            var cpf = document.getElementById('cpf');
            if (nome.value != null && cpf.value != null) {
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
                        <label> cpf do titular: </label>
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
                    <button id="botao_copiar" class="botao botaoAzul" style="visibility:hidden;"><i class="fas fa-copy"></i> Copiar C??digo de Barras</button>
                </center>
                </div>
        </div>
    </form>
@endsection