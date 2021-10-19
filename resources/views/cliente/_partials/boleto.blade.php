 @extends('cliente.pagamento')
 
@section('bt1', 'botao botaoNormal')
@section('bt2', 'botaoSelecionado')
@section('bt3', 'botao botaoNormal')
 @section('formaPagamento')
   <form>
        <div class="form-group">
            <div class="container" style="padding-left:0px;">
                <div class="row">
                    <div class="col-sm-12">
                        <label> Nome do titular: </label>
                        <input type="text" class="form-control"/>
                    </div>
                    <div class="col-sm-12">
                        <label> CPF do titular: </label>
                        <input type="text" class="form-control"/>
                    </div>
                    <div class="col-sm-12">
                        <button class="botao botaoAmarelo">Gerar Boleto</button>                        
                    </div>                                                
                </div>
                <hr/>
                <div class="row align-centering">
                    <div class="col-sm-6">
                        <button class="botao botaoAzul">Baixar PDF</button>
                    </div
                    <div class="col-sm-6">
                        <button class="botao botaoAzul">Copiar Código de Barras</button>
                    </div
                </div>
        </div>
    </form>
@endsection