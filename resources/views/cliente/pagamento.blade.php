@extends('app')

@section('title', 'Pagamento - ')

@section('content')
    <div style="text-align:center;">
        <button>Opção 1</button>
        <button>Opção 2</button>
        <button>Opção 3</button>
            <br>
    </div>
                
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3>Forma de Pagamento</h3>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">                
                            <div class="card-body">               
                                <label>Selecione a Forma de Pagamento: </label>
                                    <i class="fa-solid fa-credit-card"></i>
                                <button class="botaoSelecionado">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Cartão de Crédito</button>
                            </div>
                        </div>
                    </div>
                </section>        
            </div>
            <div class="col-sm">
                <h3> tem ota coisa aqui</h3>    
            </div>
        </div>
    </div>    
@endsection